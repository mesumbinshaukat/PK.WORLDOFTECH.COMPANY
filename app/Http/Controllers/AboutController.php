<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        $partners = [
            [
                'name' => 'Mesum Bin Shaukat',
                'role' => 'Founder & CEO',
                'image' => 'Mesum Bin Shaukat.webp',
                'bio' => 'Mesum Bin Shaukat is the visionary behind World of Tech PVT LTD. With a strong background in full-stack software engineering and a passion for building multi-SaaS startups, he has led the company to become a significant player in Pakistan\'s IT ecosystem. He specializes in creating business leverage through innovative tech solutions and is actively involved in the local startup and crowdfunding landscape.',
                'expertise' => ['Full-Stack Engineering', 'SaaS Strategy', 'Startup Leadership'],
                'social' => [
                    'github' => 'https://github.com/mesumbinshaukat?tab=repositories',
                    'linkedin' => 'https://www.linkedin.com/in/mesum-bin-shaukat/'
                ]
            ],
            [
                'name' => 'Syed Zohair Adeel',
                'role' => 'President',
                'image' => 'Zohair Adeel.webp',
                'bio' => 'Syed Zohair Adeel brings deep expertise in backend systems, e-commerce development, and enterprise resource planning. Having worked with platforms like nopCommerce, he specializes in building robust web solutions, ERP systems, stock management modules, HRM, and CRM platforms using ASP.NET and PHP. Based in Karachi, Zohair is dedicated to delivering high-performance, enterprise-grade applications.',
                'expertise' => ['ERP & CRM', 'Stock Management', 'HRM Platforms', 'ASP.NET'],
                'social' => [
                    'github' => 'https://github.com/Zohair-git?tab=repositories',
                    'linkedin' => 'https://www.linkedin.com/in/zohair-adeel/'
                ]
            ],
            [
                'name' => 'Huzaifa Irfan',
                'role' => 'COO & CFO',
                'image' => 'Huzaifa Irfan.webp',
                'bio' => 'Muhammad Huzaifa Irfan is the creative force at World of Tech. As a senior graphic and UI/UX designer, he bridges the gap between complex functionality and beautiful visuals. His portfolio spans logos, mobile app designs, and interactive web interfaces, ensuring every project is as aesthetically pleasing as it is functional.',
                'expertise' => ['UI/UX Design', 'Brand Identity', 'Adobe Suite'],
                'social' => [
                    'github' => 'https://github.com/Huzaifa1509?tab=repositories',
                    'linkedin' => 'https://www.linkedin.com/in/huzaifa-irfan-/'
                ]
            ],
            [
                'name' => 'Muhammad Sarim Saleem',
                'role' => 'Senior Vice President (SVP)',
                'image' => 'Sarim Saleem.webp',
                'bio' => 'Muhammad Sarim Saleem is a dedicated AI researcher and software engineer. Focused on artificial intelligence and machine learning, he explores the boundaries of what\'s possible in automated systems. His affiliation with Heavy Industries Taxila and his rigorous CS background make him an invaluable asset for AI-driven projects.',
                'expertise' => ['Artificial Intelligence', 'Machine Learning', 'Data Science'],
                'social' => [
                    'github' => 'https://github.com/sarimkhan515?tab=repositories',
                    'linkedin' => 'https://www.linkedin.com/in/muhammad-sarim-saleem/'
                ]
            ],
            [
                'name' => 'Abdul Rafay Khan',
                'role' => 'CMO & Director',
                'image' => 'Abdul Rafay Khan.webp',
                'bio' => 'Abdul Rafay Khan is an aspiring software engineer with a focus on full-stack development. He blends traditional engineering principles with contemporary tech stacks to build resilient applications. His contributions at World of Tech span both frontend and backend development across various client projects.',
                'expertise' => ['Web Development', 'Software Architecture', 'Full-Stack'],
                'social' => [
                    'github' => 'https://github.com/abdulrafayKhan-10?tab=repositories',
                    'linkedin' => 'https://www.linkedin.com/in/abdul-rafay-khan--/'
                ]
            ]
        ];

        return view('pages.about', compact('partners'));
    }
}
