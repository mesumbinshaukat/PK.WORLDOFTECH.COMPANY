<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $partners = [
            [
                'name' => 'Mesum Bin Shaukat',
                'role' => 'Founder & CEO',
                'image' => 'Mesum Bin Shaukat.webp',
                'bio' => 'Full-stack software engineer and startup founder focused on building scalable SaaS products and leveraging tech for business growth.',
                'social' => [
                    'github' => 'https://github.com/mesumbinshaukat?tab=repositories',
                    'linkedin' => 'https://www.linkedin.com/in/mesum-bin-shaukat/'
                ]
            ],
            [
                'name' => 'Syed Zohair Adeel',
                'role' => 'President',
                'image' => 'Zohair Adeel.webp',
                'bio' => 'ASP.NET and PHP expert specializing in robust ERP systems, stock management modules, HRM, and CRM platforms for enterprise-grade applications.',
                'social' => [
                    'github' => 'https://github.com/Zohair-git?tab=repositories',
                    'linkedin' => 'https://www.linkedin.com/in/zohair-adeel/'
                ]
            ],
            [
                'name' => 'Huzaifa Irfan',
                'role' => 'COO & CFO',
                'image' => 'Huzaifa Irfan.webp',
                'bio' => 'Creative designer specializing in modern interfaces, brand identity, and intuitive user experiences.',
                'social' => [
                    'github' => 'https://github.com/Huzaifa1509?tab=repositories',
                    'linkedin' => 'https://www.linkedin.com/in/huzaifa-irfan-/'
                ]
            ],
            [
                'name' => 'Sarim Saleem',
                'role' => 'Senior Vice President (SVP)',
                'image' => 'Sarim Saleem.webp',
                'bio' => 'Computer Science expert focusing on artificial intelligence, machine learning algorithms, and data science.',
                'social' => [
                    'github' => 'https://github.com/sarimkhan515?tab=repositories',
                    'linkedin' => 'https://www.linkedin.com/in/muhammad-sarim-saleem/'
                ]
            ],
            [
                'name' => 'Abdul Rafay Khan',
                'role' => 'CMO & Director',
                'image' => 'Abdul Rafay Khan.webp',
                'bio' => 'Versatile full-stack developer dedicated to building efficient web and mobile applications.',
                'social' => [
                    'github' => 'https://github.com/abdulrafayKhan-10?tab=repositories',
                    'linkedin' => 'https://www.linkedin.com/in/abdul-rafay-khan--/'
                ]
            ]
        ];

        return view('pages.home', compact('partners'));
    }
}
