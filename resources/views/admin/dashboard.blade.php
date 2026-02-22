@extends('layouts.app')

@section('title', 'Admin Dashboard - World of Tech Pakistan')

@section('content')
<section class="py-24 px-6 bg-dark-950" x-data="{ activeTab: 'contacts' }">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-8 mb-12">
            <div>
                <h1 class="text-3xl font-bold text-white mb-2">Admin <span class="text-neon-blue">Dashboard</span></h1>
                <p class="text-gray-500">Welcome back. Manage your site content and inquiries here.</p>
            </div>
            <form action="/admin/logout" method="POST">
                <button type="submit" class="bg-gray-800 hover:bg-gray-700 text-white px-6 py-3 rounded-xl font-bold text-sm transition-all flex items-center gap-2">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                </button>
            </form>
        </div>

        <!-- Tabs -->
        <div class="flex items-center space-x-6 border-b border-gray-800 mb-10">
            <button @click="activeTab = 'contacts'" :class="activeTab === 'contacts' ? 'text-neon-blue border-b-2 border-neon-blue pb-4' : 'text-gray-500 pb-4'" class="text-sm font-bold uppercase tracking-widest transition-all">Contact Inquiries</button>
            <button @click="activeTab = 'projects'" :class="activeTab === 'projects' ? 'text-neon-blue border-b-2 border-neon-blue pb-4' : 'text-gray-500 pb-4'" class="text-sm font-bold uppercase tracking-widest transition-all">Projects & Cases</button>
            <button @click="activeTab = 'partners'" :class="activeTab === 'partners' ? 'text-neon-blue border-b-2 border-neon-blue pb-4' : 'text-gray-500 pb-4'" class="text-sm font-bold uppercase tracking-widest transition-all">Manage Partners</button>
            <button @click="activeTab = 'blog'" :class="activeTab === 'blog' ? 'text-neon-blue border-b-2 border-neon-blue pb-4' : 'text-gray-500 pb-4'" class="text-sm font-bold uppercase tracking-widest transition-all">Blog CMS</button>
        </div>

        <!-- Notification -->
        @if(session('success'))
        <div class="bg-green-500/10 border border-green-500/50 text-green-400 p-4 rounded-xl mb-8 text-sm">
            {{ session('success') }}
        </div>
        @endif

        <!-- Contacts Tab -->
        <div x-show="activeTab === 'contacts'" class="overflow-x-auto">
            <table class="w-full text-left bg-dark-900 border border-gray-800 rounded-2xl overflow-hidden">
                <thead>
                    <tr class="bg-dark-950/50 border-b border-gray-800">
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest">Date</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest">Name</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest">Subject</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest">Message</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-800">
                    @foreach($contacts as $contact)
                    <tr class="hover:bg-white/5 transition-colors">
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $contact->created_at->format('M d, Y') }}</td>
                        <td class="px-6 py-4 text-sm font-bold text-white">{{ $contact->name }}<br><span class="text-xs font-normal text-gray-500">{{ $contact->email }}</span></td>
                        <td class="px-6 py-4 text-sm text-gray-300">{{ $contact->subject }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500 truncate max-w-xs">{{ $contact->message }}</td>
                        <td class="px-6 py-4 text-right flex justify-end gap-3">
                            <button class="text-neon-blue hover:text-white transition-colors" title="View Message"><i class="fa-solid fa-eye"></i></button>
                            <form action="/admin/contacts/{{ $contact->id }}/delete" method="POST" onsubmit="return confirm('Are you sure you want to delete this inquiry?')">
                                <button type="submit" class="text-red-500/50 hover:text-red-500 transition-colors" title="Delete Inquiry">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Projects Tab -->
        <div x-show="activeTab === 'projects'" class="space-y-12">
            <div>
                <h3 class="text-xl font-bold mb-6 text-white">Current Projects</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach(config('projects_data') as $index => $project)
                    <div class="bg-dark-900 border border-gray-800 p-6 rounded-2xl group hover:border-neon-blue/40 transition-all">
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-[10px] uppercase font-black text-neon-blue bg-neon-blue/10 px-2 py-0.5 rounded-full">{{ $project['status'] }}</span>
                            <div class="flex gap-3">
                                <button class="text-gray-500 hover:text-white transition-colors text-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                            </div>
                        </div>
                        <h4 class="font-bold text-white mb-2">{{ $project['title'] }}</h4>
                        <p class="text-xs text-gray-500 mb-4 line-clamp-2">{{ $project['description'] }}</p>
                        <div class="flex flex-wrap gap-1 mt-auto">
                            @foreach(array_slice($project['tech'] ?? [], 0, 3) as $tech)
                            <span class="text-[8px] uppercase tracking-widest font-bold text-gray-600 bg-white/5 px-1.5 py-0.5 rounded">{{ $tech }}</span>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div>
                <h3 class="text-xl font-bold mb-6 text-white">Case Studies</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach(config('case_studies_data') as $index => $case)
                    <div class="bg-dark-900 border border-gray-800 p-6 rounded-2xl group hover:border-neon-purple/40 transition-all">
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-[10px] uppercase font-black text-neon-purple bg-neon-purple/10 px-2 py-0.5 rounded-full">Success Story</span>
                            <div class="flex gap-3">
                                <button class="text-gray-500 hover:text-white transition-colors text-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                            </div>
                        </div>
                        <h4 class="font-bold text-white mb-2">{{ $case['title'] }}</h4>
                        <p class="text-xs text-gray-500 mb-4 line-clamp-2">{{ $case['challenge'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Partners Tab -->
        <div x-show="activeTab === 'partners'" class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-dark-900 border border-gray-800 rounded-3xl p-8">
                <h3 class="text-xl font-bold mb-6">Upload Partner Image</h3>
                <form action="/admin/upload" method="POST" enctype="multipart/form-data" class="space-y-6">
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-gray-400 uppercase tracking-widest">Select Partner</label>
                        <select name="partner_name" class="w-full bg-dark-950 border border-gray-800 rounded-xl px-4 py-3 focus:outline-none">
                            <option value="Mesum Bin Shaukat">Mesum Bin Shaukat</option>
                            <option value="Zohair Adeel">Zohair Adeel</option>
                            <option value="Huzaifa Irfan">Huzaifa Irfan</option>
                            <option value="Sarim Saleem">Sarim Saleem</option>
                            <option value="Abdul Rafay Khan">Abdul Rafay Khan</option>
                        </select>
                    </div>
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-gray-400 uppercase tracking-widest">New Image (WebP preferred)</label>
                        <input type="file" name="image" class="w-full bg-dark-950 border border-gray-800 rounded-xl px-4 py-3 text-sm">
                    </div>
                    <button type="submit" class="bg-neon-blue hover:bg-blue-600 text-white px-8 py-3 rounded-xl font-bold transition-all shadow-xl shadow-blue-500/20">
                        Update Image
                    </button>
                </form>
            </div>

            <div class="bg-dark-900 border border-gray-800 rounded-3xl p-8 flex items-center justify-center text-center">
                <div>
                    <i class="fa-solid fa-circle-info text-neon-blue text-4xl mb-4"></i>
                    <h4 class="font-bold mb-2">Image Normalization</h4>
                    <p class="text-sm text-gray-500 max-w-xs">All uploaded images are automatically cropped to a 1:1 aspect ratio and optimized for web performance.</p>
                </div>
            </div>
        </div>

        <!-- Blog Tab -->
        <div x-show="activeTab === 'blog'" class="space-y-8">
            <div class="flex items-center justify-between">
                <h3 class="text-xl font-bold">Blog Management</h3>
                <button class="bg-neon-blue hover:bg-blue-600 text-white px-6 py-2 rounded-xl font-bold text-sm transition-all shadow-lg shadow-blue-500/20">
                    <i class="fa-solid fa-plus mr-2"></i> Create New Post
                </button>
            </div>
            
            <table class="w-full text-left bg-dark-900 border border-gray-800 rounded-2xl overflow-hidden">
                <thead>
                    <tr class="bg-dark-950/50 border-b border-gray-800">
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest">Title</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest">Date</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest">Status</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-800">
                    <tr class="hover:bg-white/5 transition-colors">
                        <td class="px-6 py-4 text-sm font-bold text-white">Scaling SaaS in the Pakistani Market</td>
                        <td class="px-6 py-4 text-sm text-gray-500">Feb 20, 2026</td>
                        <td class="px-6 py-4 text-sm"><span class="bg-green-500/10 text-green-400 text-[10px] font-bold px-2 py-0.5 rounded-full uppercase">Published</span></td>
                        <td class="px-6 py-4 text-right space-x-3">
                            <button class="text-gray-500 hover:text-white transition-colors"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="text-red-500/50 hover:text-red-500 transition-colors"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</section>
@endsection
