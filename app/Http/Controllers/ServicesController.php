<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    private function getServicesData()
    {
        return config('services_data');
    }

    private function getDetailedSubServices()
    {
        // This is a bit inefficient to have both, but for now we'll keep it as is
        // We could move the detailed data to the same config file or a separate one
        // Let's create a combined config or just leave it for now if it's too much data
        // For the mega menu, we only need the basic structure.
        return [
            'custom-web-apps' => [
                'parent' => 'Web Development',
                'title' => 'Custom Web Applications',
                'meta_desc' => 'Bespoke web application development services in Pakistan. We build scalable, high-performance web solutions using React, Next.js, and Laravel.',
                'hero_desc' => 'Transform your business logic into a powerful digital tool. We build bespoke web applications that solve complex problems and drive efficiency.',
                'what_we_provide' => 'We offer full cycle development of custom web applications designed to meet your specific business requirements. Our team handles everything from initial conceptualization and architecture to deployment and ongoing maintenance. We focus on building tools that are not only functional but also intuitive and highly performant.',
                'how_we_do_it' => 'Our process begins with a deep dive into your business workflows. We use Agile methodologies to ensure transparency and iterative progress. By choosing the right tech stack (such as Laravel for robust backends or Next.js for blazing fast frontends), we build solutions that can scale as your business grows. Security and code quality are at the core of our development standards.',
                'whats_included' => [
                    'Detailed software requirement specification',
                    'Custom database architecture and management',
                    'API development and third party integrations',
                    'Responsive user interface for all devices',
                    'Rigorous security testing and performance tuning',
                    'Complete documentation and training'
                ]
            ],
            'ecommerce-solutions' => [
                'parent' => 'Web Development',
                'title' => 'E-commerce Solutions',
                'meta_desc' => 'Professional e-commerce development in Karachi. Custom online stores with secure payment integration and localized features for Pakistan.',
                'hero_desc' => 'Expand your reach with a high-converting online store. We build e-commerce platforms that provide seamless shopping experiences and robust merchant tools.',
                'what_we_provide' => 'We provide comprehensive e-commerce solutions that empower businesses to sell online effectively. This includes custom storefront design, shopping cart implementation, and robust backend management systems. We specialize in localized solutions for the Pakistani market, ensuring compatibility with local payment gateways and logistics providers.',
                'how_we_do_it' => 'We utilize powerful platforms and custom builds to create stores that are fast and reliable. Our focus is on conversion rate optimization (CRO), ensuring that your visitors become customers. We integrate secure payment methods and automated order management systems to streamline your operations. Every store is built with SEO in mind to ensure maximum visibility.',
                'whats_included' => [
                    'Modern and mobile first storefront design',
                    'Localized payment gateway integration',
                    'Inventory and order management system',
                    'Customer account and loyalty features',
                    'Search engine engine friendly product catalogs',
                    'Advanced analytics and sales reporting'
                ]
            ],
            'pwa-development' => [
                'parent' => 'Web Development',
                'title' => 'Progressive Web Apps (PWA)',
                'meta_desc' => 'PWA development services in Pakistan. Build web apps with native-like performance, offline capabilities, and push notifications.',
                'hero_desc' => 'Bridge the gap between web and mobile. Progressive Web Apps offer the reach of the web with the performance and engagement of native mobile apps.',
                'what_we_provide' => 'We build Progressive Web Apps that deliver high performance and reliability across all devices. PWAs provide offline access, push notifications, and home screen installation without the need for an app store. This technology ensures that your users have a consistent experience even on low quality network connections.',
                'how_we_do_it' => 'We use service workers and manifest files to enable core PWA features. Our development process focuses on speed and responsiveness, ensuring that the app feels native to the user. We implement advanced caching strategies to provide fast load times and offline functionality. The result is a highly engaging application that works everywhere.',
                'whats_included' => [
                    'Offline functionality and background sync',
                    'Push notification system integration',
                    'Add to home screen capability',
                    'Ultra fast loading and smooth animations',
                    'Secure HTTPS implementation',
                    'Cross browser and cross platform compatibility'
                ]
            ],
            'native-mobile-apps' => [
                'parent' => 'Mobile App Development',
                'title' => 'Native iOS & Android',
                'meta_desc' => 'Native mobile app development in Karachi. High performance iOS and Android apps built with Swift, Kotlin, and modern SDKs.',
                'hero_desc' => 'Unleash the full potential of mobile hardware. We build native applications that offer peerless performance and deep integration with device features.',
                'what_we_provide' => 'We provide premium native mobile app development for both iOS and Android platforms. By writing code specifically for each operating system, we ensure the highest level of performance, security, and access to device hardware. Our apps are built to provide the smooth and responsive experience that modern users expect.',
                'how_we_do_it' => 'Our developers use official tools and languages like Swift for iOS and Kotlin for Android. We follow platform specific design guidelines (Human Interface Guidelines for Apple and Material Design for Google) to ensure an intuitive user experience. We integrate deeply with hardware features like GPS, camera, and biometric sensors to create powerful mobile tools.',
                'whats_included' => [
                    'Platform specific UI and UX design',
                    'Hardware integration (GPS, Sensors, Biometrics)',
                    'High performance application architecture',
                    'App store and Play store deployment',
                    'Continuous performance monitoring',
                    'Regular updates and maintenance support'
                ]
            ],
            'hybrid-mobile-apps' => [
                'parent' => 'Mobile App Development',
                'title' => 'Hybrid & Cross-Platform',
                'meta_desc' => 'Cross platform mobile app development in Pakistan. Build apps for both iOS and Android using Flutter and React Native.',
                'hero_desc' => 'Build once and run everywhere. Our cross-platform solutions provide a cost effective way to reach users on both major mobile platforms simultaneously.',
                'what_we_provide' => 'We offer hybrid and cross-platform mobile application development that balances performance with development efficiency. Using modern frameworks like Flutter and React Native, we create apps that share a single codebase while delivering a native look and feel. This approach significantly reduces time to market and development costs.',
                'how_we_do_it' => 'We leverage the power of frameworks that compile to native code. This ensures that your app performs well and feels natural on both iOS and Android. Our process involves creating a shared logic layer while optimizing the UI for each platform. We focus on code reusability without compromising on quality or user experience.',
                'whats_included' => [
                    'Shared codebase for iOS and Android',
                    'Native like performance and interaction',
                    'Faster development and deployment cycles',
                    'Lower long term maintenance costs',
                    'Thorough testing on various device sizes',
                    'App store submission management'
                ]
            ],
            'enterprise-mobile-apps' => [
                'parent' => 'Mobile App Development',
                'title' => 'Enterprise Mobile Solutions',
                'meta_desc' => 'Enterprise mobile app development in Pakistan. Internal business tools to optimize workforce and data management.',
                'hero_desc' => 'Mobilize your workforce and data. We build secure enterprise applications that streamline internal processes and improve business agility.',
                'what_we_provide' => 'We provide secure and scalable mobile solutions tailored for enterprise environments. These apps are designed to improve internal communication, automate field work, and provide real time access to business data. We focus on security and integration with existing enterprise systems.',
                'how_we_do_it' => 'We design solutions that integrate seamlessly with your existing databases and ERP systems. Security is our top priority, and we implement features like multi factor authentication and encrypted data storage. Our development process includes extensive testing to ensure reliability in critical business operations.',
                'whats_included' => [
                    'Custom business logic and workflow automation',
                    'Secure integration with internal systems',
                    'Real time data synchronization',
                    'User access control and management',
                    'Offline data capture capabilities',
                    'Enterprise grade security protocols'
                ]
            ],
            'nlp-solutions' => [
                'parent' => 'AI & Machine Learning',
                'title' => 'Natural Language Processing',
                'meta_desc' => 'NLP services in Pakistan. AI powered chatbots, sentiment analysis, and text processing solutions for business.',
                'hero_desc' => 'Make sense of human language. Our NLP solutions enable machines to understand, interpret, and generate text to enhance user interaction.',
                'what_we_provide' => 'We offer advanced Natural Language Processing services that help businesses automate communication and gain insights from textual data. This includes building intelligent chatbots, automated summarization tools, and sentiment analysis systems. Our solutions help you understand your customers better and provide faster support.',
                'how_we_do_it' => 'We utilize state of the art models like GPT and BERT to build language aware applications. We train these models on your specific business data to ensure high accuracy and relevance. By integrating these systems into your existing platforms, we enable automated processing of large volumes of text with human like understanding.',
                'whats_included' => [
                    'Intelligent conversational AI and chatbots',
                    'Sentiment analysis of customer feedback',
                    'Automated text classification and tagging',
                    'Language translation and localization',
                    'Text extraction from documents',
                    'API integration with existing communication tools'
                ]
            ],
            'computer-vision' => [
                'parent' => 'AI & Machine Learning',
                'title' => 'Computer Vision',
                'meta_desc' => 'Computer vision solutions in Karachi. Image recognition, video analysis, and AI powered visual security systems.',
                'hero_desc' => 'Give your software eyes. Use computer vision to automate visual inspections, enhance security, and extract data from images and video.',
                'what_we_provide' => 'We provide computer vision solutions that enable applications to process and understand visual information. This includes object detection, facial recognition, and automated visual inspection systems. Our technology helps businesses automate tasks that previously required human sight.',
                'how_we_do_it' => 'We use deep learning frameworks like TensorFlow and OpenCV to build custom vision models. We collect and label data specific to your use case to ensure the highest precision. Whether it is for security monitoring or quality control on a production line, our models are optimized for speed and accuracy.',
                'whats_included' => [
                    'Custom object detection and tracking',
                    'Facial recognition and verification systems',
                    'Automated visual quality control',
                    'Image and video content analysis',
                    'OCR and document digitizing',
                    'Integration with security and IoT hardware'
                ]
            ],
            'predictive-analytics' => [
                'parent' => 'AI & Machine Learning',
                'title' => 'Predictive Analytics',
                'meta_desc' => 'Predictive analytics and data science in Pakistan. Use AI to forecast trends, customer behavior, and business outcomes.',
                'hero_desc' => 'Predict the future with data. Our analytics models help you anticipate trends and make proactive decisions based on historical patterns.',
                'what_we_provide' => 'We offer predictive analytics services that turn your data into a strategic asset. By analyzing historical trends, we build models that forecast future behavior, demand, and risk. These insights allow you to optimize your operations and stay ahead of the competition.',
                'how_we_do_it' => 'We use a variety of machine learning algorithms to process your structured and unstructured data. Our data scientists work closely with you to identify key variables that drive your business. The result is a dashboard or API that provides actionable predictions with clear probability scores.',
                'whats_included' => [
                    'Historical data analysis and cleaning',
                    'Custom machine learning model development',
                    'Demand forecasting and trend analysis',
                    'Customer churn prediction models',
                    'Real time risk assessment tools',
                    'Interactive data visualization dashboards'
                ]
            ],
            'multi-tenant-saas' => [
                'parent' => 'SaaS Development',
                'title' => 'Multi-tenant Architecture',
                'meta_desc' => 'Multi-tenant SaaS development in Karachi. Build scalable software products that serve multiple customers on a single infrastructure.',
                'hero_desc' => 'Scale your software efficiently. Multi-tenant architecture allows you to serve thousands of customers while maintaining a single, manageable codebase.',
                'what_we_provide' => 'We specialize in designing and building multi-tenant SaaS architectures that are secure and highly scalable. This approach ensures that your infrastructure costs are optimized and your deployment processes are streamlined. We focus on data isolation and high availability for every tenant.',
                'how_we_do_it' => 'We implement sophisticated data partitioning strategies to ensure that each customer data is completely isolated. Our architecture supports custom domains, branding, and configurations for different tiers of service. We use automated provisioning to make onboarding new customers a seamless experience.',
                'whats_included' => [
                    'Secure data isolation and partitioning',
                    'Tenant specific branding and configuration',
                    'Automated onboarding and provisioning',
                    'High availability and disaster recovery',
                    'Global deployment capability',
                    'Resource usage monitoring and billing'
                ]
            ],
            'saas-subscriptions' => [
                'parent' => 'SaaS Development',
                'title' => 'Subscription Management',
                'meta_desc' => 'Recurring billing and subscription management for SaaS in Pakistan. Integrated payment systems for your software products.',
                'hero_desc' => 'Manage your revenue with ease. We integrate complex subscription and billing systems that handle recurring payments, trials, and upgrades.',
                'what_we_provide' => 'We provide comprehensive subscription management solutions for your SaaS products. This includes implementing various pricing models (fixed, usage based, tiered), automated invoice generation, and managing customer lifecycles from trial to churn. We ensure your billing is accurate and your cash flow is predictable.',
                'how_we_do_it' => 'We integrate with global and local payment leaders like Stripe and regional processors to handle transactions securely. Our systems are built to manage edge cases like failed payments, prorated upgrades, and coupon codes. We provide a clear merchant dashboard to track your Monthly Recurring Revenue (MRR) and other key metrics.',
                'whats_included' => [
                    'Recurring billing and auto renewal',
                    'Multiple pricing tier management',
                    'Dunning and payment recovery systems',
                    'Automated invoicing and tax handling',
                    'Customer portal for plan management',
                    'Revenue and churn analytics'
                ]
            ],
            'saas-scalability' => [
                'parent' => 'SaaS Development',
                'title' => 'Cloud Scalability',
                'meta_desc' => 'Scalable cloud infrastructure for SaaS in Pakistan. Ensure your software product grows effortlessly with your user base.',
                'hero_desc' => 'Built for growth. Our cloud scalability solutions ensure that your application maintains peak performance even as your traffic and data volumes explode.',
                'what_we_provide' => 'We offer cloud scalability services that prepare your SaaS product for massive growth. We design infrastructure that can automatically scale up or out based on demand. This ensures that your application remains responsive and cost effective at any scale.',
                'how_we_do_it' => 'We utilize cloud native services and microservices architecture to break down bottlenecks. By implementing auto scaling groups, load balancers, and distributed caching, we ensure that no single component becomes a point of failure. We monitor your resource consumption in real time to optimize for both performance and cost.',
                'whats_included' => [
                    'Auto scaling infrastructure configuration',
                    'Load balancing and traffic management',
                    'Distributed caching and database scaling',
                    'Microservices architecture redesign',
                    'Performance benchmarking and optimization',
                    'Cost management and optimization'
                ]
            ],
            'vulnerability-assessment' => [
                'parent' => 'Cybersecurity',
                'title' => 'Vulnerability Assessment',
                'meta_desc' => 'Vulnerability assessment and security audits in Pakistan. Identify and fix security weaknesses in your digital infrastructure.',
                'hero_desc' => 'Know your weaknesses before hackers do. We perform thorough assessments to identify security gaps and provide clear roadmaps for remediation.',
                'what_we_provide' => 'We provide comprehensive vulnerability assessments for your web and mobile applications. Our team uses automated and manual techniques to scan for common and advanced security flaws. We provide a detailed report that prioritizes risks and offers practical advice on how to fix them.',
                'how_we_do_it' => 'We follow industry standards like OWASP to ensure a broad coverage of security checks. We analyze your code, network configuration, and third party dependencies for known vulnerabilities. Our process is non disruptive and designed to provide a continuous view of your security posture.',
                'whats_included' => [
                    'Automated vulnerability scanning',
                    'Manual security configuration review',
                    'Third party dependency audit',
                    'Risk prioritization and reporting',
                    'Remediation guidance and support',
                    'Follow up verification testing'
                ]
            ],
            'penetration-testing' => [
                'parent' => 'Cybersecurity',
                'title' => 'Penetration Testing',
                'meta_desc' => 'Professional penetration testing in Karachi. Ethical hacking to test the resilience of your software and network.',
                'hero_desc' => 'The ultimate test of your defenses. Our ethical hackers simulate real world attacks to find and exploit security holes in your systems.',
                'what_we_provide' => 'We offer professional penetration testing services that simulate sophisticated cyberattacks on your infrastructure. This provides a realistic assessment of your defensive capabilities and the potential impact of a data breach. Our goal is to find the paths that a malicious actor might take.',
                'how_we_do_it' => 'Our ethical hacking team uses the same tools and techniques as real world attackers but in a controlled environment. We test your web apps, APIs, and network perimeters. We go beyond simple scanning to find complex logic flaws and chain of vulnerabilities that automated tools often miss.',
                'whats_included' => [
                    'External and internal network testing',
                    'Web application and API penetration testing',
                    'Social engineering simulations',
                    'Detailed exploit proof and impact analysis',
                    'Strategic security improvement plan',
                    'Confidentiality and integrity guarantee'
                ]
            ],
            'compliance-audits' => [
                'parent' => 'Cybersecurity',
                'title' => 'Compliance Audits',
                'meta_desc' => 'IT compliance and security audits in Pakistan. Ensure your business meets international data protection standards.',
                'hero_desc' => 'Meet global standards. We help you audit and align your systems with international regulations like GDPR and ISO to ensure data protection compliance.',
                'what_we_provide' => 'We provide specialized audits to ensure your business and software meet essential security and data protection standards. Whether you are aiming for GDPR, ISO 27001, or local regulations, we provide the expertise to get you compliant. This not only protects you legally but also builds trust with your customers.',
                'how_we_do_it' => 'We start with a gap analysis to identify where your current practices differ from the required standards. We then help you implement the necessary technical and administrative controls. We provide complete documentation and evidence gathering to support your certification process.',
                'whats_included' => [
                    'Data protection gap analysis',
                    'Policy and procedure documentation',
                    'Employee security awareness training',
                    'Technical control implementation support',
                    'Third party risk management audit',
                    'Continuous compliance monitoring plan'
                ]
            ],
            'cloud-migration' => [
                'parent' => 'Cloud Services',
                'title' => 'Cloud Migration',
                'meta_desc' => 'Cloud migration services in Karachi. Move your legacy infrastructure to AWS, Azure, or Google Cloud with minimal downtime.',
                'hero_desc' => 'Modernize your infrastructure. We help you transition from legacy on-premise servers to the agility and cost-efficiency of the cloud.',
                'what_we_provide' => 'We offer end to end cloud migration services that minimize risk and downtime. We help you choose the right cloud provider and migration strategy (Rehosting, Refactoring, or Replacing) to suit your business goals. Our migration process ensures that your data remains integral and your services stay online.',
                'how_we_do_it' => 'We conduct a thorough audit of your existing infrastructure and applications. We build a phased migration plan that prioritizes critical workloads. Using automated migration tools and best practices from major cloud providers, we move your assets smoothly and verify everything at each step.',
                'whats_included' => [
                    'Infrastructure and application readiness audit',
                    'Custom cloud strategy and roadmap',
                    'Secure data and application transfer',
                    'Cloud cost estimation and optimization',
                    'Post migration performance tuning',
                    'Operations and management training'
                ]
            ],
            'serverless-design' => [
                'parent' => 'Cloud Services',
                'title' => 'Serverless Architecture',
                'meta_desc' => 'Serverless application development in Pakistan. Build highly scalable apps without managing any server infrastructure.',
                'hero_desc' => 'Focus on code, not hardware. Serverless architecture allows you to build and run applications without thinking about servers, lowering costs and complexity.',
                'what_we_provide' => 'We build and design serverless applications that offer infinite scalability and pay as you go pricing. This approach eliminates the need for patching and server management, allowing your team to focus entirely on core product features. Serverless is ideal for event driven workloads and fast growing startups.',
                'how_we_do_it' => 'We utilize services like AWS Lambda and Google Cloud Functions to build modular applications. We connect these functions with managed databases and API gateways to create a complete ecosystem. Our designs ensure cold starts are minimized and the architecture is highly observable.',
                'whats_included' => [
                    'Event driven architecture design',
                    'Development with Lambda and Cloud Functions',
                    'Managed database and storage integration',
                    'Automated deployment pipelines for functions',
                    'Real time monitoring and logging',
                    'Infrastructure as code (IaC) implementation'
                ]
            ],
            'disaster-recovery' => [
                'parent' => 'Cloud Services',
                'title' => 'Disaster Recovery',
                'meta_desc' => 'Cloud based disaster recovery in Pakistan. Keep your business running with automated backups and failover systems.',
                'hero_desc' => 'Insurance for your digital business. We implement robust backup and failover systems that ensure your business can survive any catastrophic event.',
                'what_we_provide' => 'We provide comprehensive disaster recovery solutions that protect your business from data loss and extended downtime. Our cloud based strategies ensure that your critical systems can be restored in minutes rather than days. We focus on meeting your specific Recovery Time Objective (RTO) and Recovery Point Objective (RPO).',
                'how_we_do_it' => 'We implement automated backup routines and multi regional replication of your data. We design standby infrastructure that can be activated automatically in the event of a failure. Regularly scheduled drills ensure that the recovery process is smooth and reliable when it truly counts.',
                'whats_included' => [
                    'Business impact and risk analysis',
                    'Automated cloud backup configuration',
                    'Multi region data replication',
                    'One click failover system implementation',
                    'Disaster recovery documentation and drills',
                    'Continuous monitoring and alerting'
                ]
            ],
            'interactive-prototypes' => [
                'parent' => 'UI/UX Design',
                'title' => 'Interactive Prototyping',
                'meta_desc' => 'Interactive UI prototyping in Karachi. Experience your digital product before development starts with high-fidelity prototypes.',
                'hero_desc' => 'See your vision come to life. We create high fidelity interactive prototypes that allow you to test and refine the user experience before writing any code.',
                'what_we_provide' => 'We offer high fidelity interactive prototyping that bridges the gap between static design and a finished product. Our prototypes simulate the actual flow and behavior of your app, allowing stakeholders and users to provide meaningful feedback early in the process. This helps in making informed decisions and reduces development rework.',
                'how_we_do_it' => 'We use industry leading tools like Figma and Protopie to create realistic simulations. We focus on transitions, micro animations, and conditional flows to make the prototype feel like the real thing. This interactive model is used for usability testing and as a precise guide for the development team.',
                'whats_included' => [
                    'High fidelity clickable design prototypes',
                    'Complex user journey simulations',
                    'Micro interactions and animation design',
                    'Feedback gathering and iteration cycles',
                    'Developer handoff documentation',
                    'Presentation ready interactive models'
                ]
            ],
            'ux-research' => [
                'parent' => 'UI/UX Design',
                'title' => 'User Research',
                'meta_desc' => 'UX research and user testing in Pakistan. Data driven design decisions to improve your product usability and satisfaction.',
                'hero_desc' => 'Design based on evidence. We conduct in depth user research to understand the needs, behaviors, and pain points of your target audience.',
                'what_we_provide' => 'We provide thorough user research services that ensure your digital product is built on a foundation of real user needs. This includes conducting interviews, surveys, and usability tests to gather qualitative and quantitative data. Our research helps in creating a product that users truly find valuable and easy to use.',
                'how_we_do_it' => 'We start by defining your target personas and their goals. We use various methods like card sorting and heatmaps to analyze how users interact with your interface. Our researchers synthesize these findings into actionable design recommendations that directly influence the product roadmap and user experience.',
                'whats_included' => [
                    'User persona development and mapping',
                    'Qualitative user interviews and surveys',
                    'Usability testing and analysis',
                    'Customer journey map creation',
                    'Competitive UX benchmarking',
                    'Actionable research report and insights'
                ]
            ],
            'brand-identity' => [
                'parent' => 'UI/UX Design',
                'title' => 'Brand Identity Design',
                'meta_desc' => 'Visual brand identity design in Karachi. Logos, color palettes, and typography that elevate your digital presence.',
                'hero_desc' => 'A brand that stands out. We create distinctive visual identities that resonate with your audience and maintain consistency across all digital touchpoints.',
                'what_we_provide' => 'We offer strategic brand identity design that defines how your company is perceived. This goes beyond just a logo; we create a complete visual system including color palettes, typography, and imagery style. Our goal is to create a cohesive brand that builds trust and recognition in your industry.',
                'how_we_do_it' => 'We start by understanding your brand values and competitive landscape. Our designers then explore various visual directions through sketching and concept development. We refine the chosen concept into a comprehensive brand guideline that ensures your identity is applied correctly and consistently in any context.',
                'whats_included' => [
                    'Professional logo design and variations',
                    'Strategic color palette and typography',
                    'Comprehensive brand style guide',
                    'Social media branding assets',
                    'Iconography and illustration style',
                    'Stationery and digital asset templates'
                ]
            ],
            'technical-seo' => [
                'parent' => 'SEO & AI Optimization',
                'title' => 'Technical SEO',
                'meta_desc' => 'Technical SEO services in Karachi. Optimize your site structure, speed, and indexing for maximum search visibility.',
                'hero_desc' => 'Perfect the foundation. We optimize the technical aspects of your website to ensure search engines can easily crawl, index, and understand your content.',
                'what_we_provide' => 'We provide comprehensive technical SEO audits and implementation to boost your site rankings. We focus on improving site speed, core web vitals, and mobile usability. Our technical fixes ensure that search engines like Google can access your content without any hurdles, leading to higher visibility.',
                'how_we_do_it' => 'We use advanced crawlers and diagnostic tools to find technical issues like broken links, duplicate content, and slow pages. We optimize your XML sitemaps, robots.txt, and canonical tags. Our developers work directly on the code to improve page loading times and ensure a secure HTTPS environment for your visitors.',
                'whats_included' => [
                    'Deep technical SEO audit and fix',
                    'Core Web Vitals and speed optimization',
                    'Mobile first indexing preparation',
                    'Sitemap and robots.txt management',
                    'Crawl budget and indexing analysis',
                    'HTTPS and security header audit'
                ]
            ],
            'schema-integration' => [
                'parent' => 'SEO & AI Optimization',
                'title' => 'Schema.org Integration',
                'meta_desc' => 'Schema.org and JSON-LD integration in Pakistan. Make your content AI ready and appear in rich search snippets.',
                'hero_desc' => 'Be understood by AI. We implement structured data that helps AI crawlers and search engines understand the context of your content for better results.',
                'what_we_provide' => 'We offer specialized Schema.org integration to make your website more intelligent and search engine friendly. By adding JSON LD structured data, we enable rich snippets in search results, such as star ratings, event dates, and product prices. This significantly increases your click through rates and makes your brand stand out.',
                'how_we_do_it' => 'We identify the most relevant schema types for your business, such as LocalBusiness, Product, or Article. We then implement the corresponding JSON LD scripts into your templates. We test the implementation using official validation tools to ensure search engines and AI agents like ChatGPT can parse your data perfectly.',
                'whats_included' => [
                    'Standard and custom Schema implementation',
                    'JSON LD structured data generation',
                    'Rich snippet and knowledge graph optimization',
                    'AI crawler indexing preparation',
                    'Structured data validation and testing',
                    'Ongoing schema updates and monitoring'
                ]
            ],
            'seo-content-strategy' => [
                'parent' => 'SEO & AI Optimization',
                'title' => 'Content Strategy',
                'meta_desc' => 'SEO content strategy and keyword research in Pakistan. Drive organic traffic with high quality, keyword rich content.',
                'hero_desc' => 'Content that converts. We develop data driven content strategies that answer user questions and build authority for your website.',
                'what_we_provide' => 'We provide strategic content planning that aligns with your SEO and business goals. This involves identifying high value keywords and topics that your potential customers are searching for. We map out a content calendar that ensures your brand consistently provides value and ranks for relevant search terms.',
                'how_we_do_it' => 'We use advanced keyword research tools to find opportunities where you can rank. We analyze competitor content to find gaps that you can fill. Our strategy focuses on generating comprehensive pillar pages and supporting blog posts that establish your site as an authoritative source in your niche.',
                'whats_included' => [
                    'Deep keyword research and analysis',
                    'Content gap and competitor analysis',
                    'Topic clustering and pillar page planning',
                    'SEO friendly writing guidelines',
                    'Content performance tracking and ROI',
                    'Conversion focused call to action (CTA) planning'
                ]
            ],
            'automated-testing' => [
                'parent' => 'DevOps & CI/CD',
                'title' => 'Automated Testing',
                'meta_desc' => 'Automated QA and testing in Pakistan. Ensure your software is bug free with unit, integration, and E2E testing.',
                'hero_desc' => 'Ship with confidence. We implement comprehensive automated test suites that catch bugs early and ensure your code is always production ready.',
                'what_we_provide' => 'We provide automated testing solutions that guarantee the quality and reliability of your software. This includes developing unit tests for backend logic, integration tests for API endpoints, and end to end (E2E) tests for user workflows. Automation ensures that new features do not break existing functionality.',
                'how_we_do_it' => 'We integrate testing frameworks directly into your development workflow. Whether it is PHPUnit for Laravel or Playwright for web UIs, we ensure high code coverage. These tests run automatically on every code push, providing immediate feedback to developers and maintaining a high standard of quality.',
                'whats_included' => [
                    'Unit and integration test development',
                    'End to end (E2E) user flow automation',
                    'API and security testing suites',
                    'Performance and load testing scripts',
                    'Code coverage analysis and reporting',
                    'Testing framework setup and configuration'
                ]
            ],
            'cicd-automation' => [
                'parent' => 'DevOps & CI/CD',
                'title' => 'Pipeline Automation',
                'meta_desc' => 'CI/CD pipeline automation in Karachi. Automate your deployment process with GitHub Actions and Jenkins.',
                'hero_desc' => 'Faster releases, fewer errors. We automate your deployment pipeline to remove manual steps and ensure consistent delivery to production.',
                'what_we_provide' => 'We offer CI/CD pipeline automation that transforms how you ship software. By automating the build, test, and deployment phases, we significantly reduce the risk of human error and the time it takes to release new features. This leads to a more agile development team and a better experience for your users.',
                'how_we_do_it' => 'We use tools like GitHub Actions, GitLab CI, or Jenkins to build custom pipelines. Each step of the process is version controlled and reproducible. We implement staging environments and automated rollbacks to ensure that any issues are caught and resolved before they impact your actual customers.',
                'whats_included' => [
                    'Custom CI/CD pipeline architectural design',
                    'Automated build and test job configuration',
                    'Zero downtime deployment setup',
                    'Multiple environment management (Staging/Prod)',
                    'Pipeline monitoring and alert system',
                    'Automated rollback and recovery procedures'
                ]
            ],
            'docker-kubernetes' => [
                'parent' => 'DevOps & CI/CD',
                'title' => 'Containerization',
                'meta_desc' => 'Docker and Kubernetes services in Pakistan. Consistent and scalable deployment using modern container technology.',
                'hero_desc' => 'Consistency across all environments. We use Docker to package your apps and Kubernetes to manage them at scale, ensuring they run anywhere.',
                'what_we_provide' => 'We offer containerization services that make your applications portable and easier to manage. By using Docker, we package your software with all its dependencies, ensuring it runs identically on a developer local machine and the production server. We use Kubernetes to orchestrate these containers for high availability and scale.',
                'how_we_do_it' => 'Our process involves writing efficient Dockerfiles and managing multi container applications with Compose or Kubernetes manifests. We optimize container images for size and security. This approach allows us to deploy microservices independently and scale individual components based on their specific resource needs.',
                'whats_included' => [
                    'Docker image creation and optimization',
                    'Kubernetes cluster setup and management',
                    'Helm chart development for deployments',
                    'Container security and vulnerability scanning',
                    'Resource limits and horizontal pod autoscaling',
                    'Persistent storage and networking for containers'
                ]
            ],
            'digital-transformation' => [
                'parent' => 'IT Consulting',
                'title' => 'Digital Transformation Strategy',
                'meta_desc' => 'Digital transformation consulting in Pakistan. Strategy and roadmap to modernize your business operations with technology.',
                'hero_desc' => 'Evolve for the digital age. We help traditional businesses integrate technology into all areas of operation to improve value delivery to customers.',
                'what_we_provide' => 'We provide strategic consulting to guide your business through a complete digital transformation. This involves auditing your existing manual processes and identifying where technology can drive growth and efficiency. We don\'t just suggest tools; we build a long term roadmap for cultural and technical change.',
                'how_we_do_it' => 'We conduct workshops with your key stakeholders to understand your business goals and challenges. We then perform a technology audit and market analysis. Our strategy includes choosing the right tech stack, planning data migration, and designing a new digital operating model that fits your unique business needs.',
                'whats_included' => [
                    'Process audit and efficiency analysis',
                    'Technology roadmap and implementation plan',
                    'Change management and training strategy',
                    'Digital product innovation consulting',
                    'Data driven decision making frameworks',
                    'ROI and success metrics definition'
                ]
            ],
            'tech-stack-audit' => [
                'parent' => 'IT Consulting',
                'title' => 'Tech Stack Evaluation',
                'meta_desc' => 'IT infrastructure and tech stack audit in Karachi. Choose the right tools and frameworks for your specific business needs.',
                'hero_desc' => 'The right tools for the job. We evaluate your current and future needs to recommend the most efficient and scalable technology stack for your project.',
                'what_we_provide' => 'We offer expert evaluation of your technology stack to ensure it is aligned with your current needs and future ambitions. This includes auditing your existing codebases, databases, and third party services. We provide independent recommendations on which technologies to keep, upgrade, or replace to minimize technical debt.',
                'how_we_do_it' => 'Our senior architects review your architecture and interview your technical team. We consider factors like developer availability, ecosystem maturity, and performance requirements. We provide a detailed comparison of alternative tools and frameworks, helping you make informed decisions that avoid costly migrations in the future.',
                'whats_included' => [
                    'Full stack technology audit and report',
                    'Programming language and framework evaluation',
                    'Database and infrastructure performance review',
                    'Third party tool and SaaS integration audit',
                    'Technical debt assessment and remediation',
                    'Scalability and maintainability roadmap'
                ]
            ],
            'it-security-strategy' => [
                'parent' => 'IT Consulting',
                'title' => 'Security Strategy',
                'meta_desc' => 'Business IT security strategy in Pakistan. Develop a long-term plan to protect your company data and reputation.',
                'hero_desc' => 'Proactive protection by design. We help you develop a comprehensive security strategy that integrates protection into every level of your business.',
                'what_we_provide' => 'We provide long term security strategy consulting to help businesses build a resilient defensive posture. This goes beyond fixing individual vulnerabilities; we help you establish security policies, incident response plans, and a culture of security awareness. Our strategy ensures your business can detect and respond to threats effectively.',
                'how_we_do_it' => 'We conduct a comprehensive risk assessment of your digital and physical assets. Based on this, we develop a customized security framework that follows international best practices. We help you choose the right security products and services, and establish clear roles and responsibilities for security within your organization.',
                'whats_included' => [
                    'Comprehensive business risk assessment',
                    'IT security policy and governance design',
                    'Incident response and recovery planning',
                    'Security product and vendor evaluation',
                    'Budget planning for security investments',
                    'Continuous security monitoring strategy'
                ]
            ]
        ];
    }

    public function index()
    {
        $services = $this->getServicesData();
        return view('pages.services', compact('services'));
    }

    public function show($slug)
    {
        $subServices = $this->getDetailedSubServices();

        if (!isset($subServices[$slug])) {
            abort(404);
        }

        $service = $subServices[$slug];
        return view('pages.service-detail', compact('service'));
    }
}
