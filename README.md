# World of Tech Pakistan Portfolio Website

A complete, high-performance, and secure portfolio website for [pk.worldoftech.company](https://pk.worldoftech.company). Built with PHP Lumen, Blade, Tailwind CSS, and Alpine.js.

## 🚀 Features

- **Premium Dark Design**: Unique, high-end aesthetics with neon accents and glassmorphism.
- **Interactive UI**: Alpine.js powered carousels, filters, and accordions.
- **Secure Admin Dashboard**: Management portal for contact inquiries, partner images, and blog posts.
- **SEO & AI Ready**: Dynamic sitemap, robots.txt, and comprehensive Schema.org JSON-LD markup.
- **Top-tier Security**: SecurityHeadersMiddleware (HSTS, CSP, XSS), rate limiting, and CSRF protection.
- **Responsive**: Mobile-first design optimized for all devices.
- **Multilingual**: EN/UR toggle UI ready.

## 🛠️ Tech Stack

- **Backend**: [PHP Lumen](https://lumen.laravel.com/)
- **Frontend**: Blade Templating, [Tailwind CSS](https://tailwindcss.com/) (CDN), [Alpine.js](https://alpinejs.dev/) (CDN)
- **Database**: MySQL (Eloquent ORM)
- **Icons**: [Font Awesome](https://fontawesome.com/)

## 📦 Installation

1. **Clone the repository**:
   ```bash
   git clone <repository-url>
   cd pk.worldoftech.company
   ```

2. **Install dependencies**:
   ```bash
   composer install
   ```

3. **Configure Environment**:
   - Copy `.env.example` to `.env`.
   - Update `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`.
   - Set your `APP_KEY` using `php artisan key:generate`.

4. **Run Migrations**:
   ```bash
   php artisan migrate
   ```

5. **Start Development Server**:
   ```bash
   php artisan serve
   ```

## 🔒 Admin Access

- **URL**: `/admin/login`
- **Default Credentials**: Check with the project administrator.

## 📄 License

This project is proprietary and built specifically for World of Tech Pakistan.