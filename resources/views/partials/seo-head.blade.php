@section('meta')
    <meta name="description" content="@yield('meta_description', 'World of Tech Pakistan is a leading SaaS and IT-based company specializing in full-stack engineering, AI, and digital transformation.')">
    <meta name="keywords" content="SaaS Pakistan, IT Company Karachi, Web Development Pakistan, AI Solutions Pakistan, World of Tech">
    <link rel="canonical" href="{{ url(Illuminate\Support\Facades\Request::path()) }}">
    
    <!-- Open Graph -->
    <meta property="og:title" content="@yield('title', 'World of Tech Pakistan')">
    <meta property="og:description" content="@yield('meta_description', 'World of Tech Pakistan is a leading SaaS and IT-based company.')">
    <meta property="og:url" content="{{ url(Illuminate\Support\Facades\Request::path()) }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ url('images/logo.png') }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="@yield('title', 'World of Tech Pakistan')">
    <meta name="twitter:description" content="@yield('meta_description', 'World of Tech Pakistan is a leading SaaS and IT-based company.')">
    <meta name="twitter:image" content="{{ url('images/logo.png') }}">

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "World of Tech Pakistan",
      "alternateName": "WOT PK",
      "url": "https://pk.worldoftech.company",
      "logo": "https://pk.worldoftech.company/images/logo.png",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+92-322-0275616",
        "contactType": "customer service",
        "areaServed": "PK",
        "availableLanguage": ["English", "Urdu"]
      },
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Karachi",
        "addressCountry": "PK"
      },
      "sameAs": [
        "https://www.linkedin.com/company/world-of-tech-pvt-ltd",
        "https://github.com/World-Of-Tech-Pvt-Ltd-Team",
        "https://wa.me/923220275616"
      ],
      "founder": [
        {
          "@type": "Person",
          "name": "Mesum Bin Shaukat",
          "jobTitle": "Founder & CEO",
          "url": "https://www.linkedin.com/in/mesum-bin-shaukat/",
          "sameAs": "https://github.com/mesumbinshaukat"
        }
      ],
      "member": [
        {
          "@type": "Person",
          "name": "Syed Zohair Adeel",
          "jobTitle": "President",
          "url": "https://www.linkedin.com/in/zohair-adeel/",
          "sameAs": "https://github.com/Zohair-git"
        },
        {
          "@type": "Person",
          "name": "Huzaifa Irfan",
          "jobTitle": "COO & CFO",
          "url": "https://www.linkedin.com/in/huzaifa-irfan-/",
          "sameAs": "https://github.com/Huzaifa1509"
        },
        {
          "@type": "Person",
          "name": "Muhammad Sarim Saleem",
          "jobTitle": "Senior Vice President (SVP)",
          "url": "https://www.linkedin.com/in/muhammad-sarim-saleem/",
          "sameAs": "https://github.com/sarimkhan515"
        },
        {
          "@type": "Person",
          "name": "Abdul Rafay Khan",
          "jobTitle": "CMO & Director",
          "url": "https://www.linkedin.com/in/abdul-rafay-khan--/",
          "sameAs": "https://github.com/abdulrafayKhan-10"
        }
      ]
    }
    </script>
    
    @yield('schema')
@show
