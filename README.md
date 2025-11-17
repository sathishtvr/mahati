# Mahati Interior Design Website - PHP Version

A professional interior design website built with PHP, featuring modular architecture, security best practices, and responsive design.

## 🚀 Features

- **Modular PHP Architecture**: Clean separation of concerns with components and includes
- **Security First**: CSRF protection, input sanitization, and secure routing
- **Responsive Design**: Mobile-first approach with modern CSS
- **Clean URLs**: SEO-friendly URLs with .htaccess configuration
- **Form Handling**: Contact forms with validation and error handling
- **Component-Based**: Reusable header, footer, and alert components

## 📁 Project Structure

```
project/
├── php/
│   ├── config.php              # Configuration and constants
│   ├── index.php               # Main entry point with routing
│   ├── .htaccess              # Security and URL rewriting
│   ├── components/
│   │   ├── header.php         # Navigation and head elements
│   │   ├── footer.php         # Footer with scripts
│   │   └── alerts.php         # Alert styling component
│   ├── includes/
│   │   └── functions.php      # Utility functions
│   └── pages/
│       ├── home.php           # Homepage content
│       ├── about.php          # About page content
│       ├── services.php       # Services page content
│       ├── portfolio.php      # Portfolio gallery
│       └── contact.php        # Contact form and info
├── css/                       # Stylesheets
├── js/                        # JavaScript files
├── images/                    # Image assets
└── index.php                  # Main entry point
```

## 🔧 Installation

1. **Upload Files**: Upload all files to your web server
2. **Configure**: Update `php/config.php` with your settings
3. **Permissions**: Ensure proper file permissions (755 for directories, 644 for files)
4. **Test**: Access your website through the main `index.php`

## ⚙️ Configuration

### Basic Settings (php/config.php)

```php
define('SITE_NAME', 'Mahati Interior Design');
define('SITE_URL', 'http://your-domain.com');
define('SITE_EMAIL', 'info@mahatiinteriors.com');
define('SITE_PHONE', '+91 98765 43210');
```

# Mahati — Interior Design Website (PHP)

This repository contains a small PHP website for Mahati Interior Design. It is intended to be run on a local or shared PHP web server (XAMPP, WAMP, LAMP) and uses simple PHP includes and static assets. No framework required.

---

## Quick summary

- Location: c:\xampp\htdocs\mahati
- Primary folders: `includes/`, `pages/`, `assets/`, `admin/`, `vendor/`
- Small admin area for viewing submissions is under `admin/`
- Contact and file submission handlers are in `includes/`

---

## Repo structure (important files)

Top-level

- `index.php` — site entry (loads header/footer and pages)
- `README.md` — this file
- `composer.json` / `vendor/` — PHP dependencies (PHPMailer included)
- `includes/` — config and backend handlers
- `pages/` — site page templates (home, about, portfolio, contact, services)
- `assets/` — `css/`, `js/`, `images/`
- `admin/` — admin pages (`submissions.php`, `view-submissions.php`)
- `submissions/` — stored form submissions (text files)

Key files in `includes/`

- `config.php` — site constants and configuration
- `form-handler.php` — contact form processing
- `file-submission-handler.php` — file upload handling
- `phpmailer-config.php`, `email-config.php` — email sending setup
- `header.php`, `footer.php` — shared layout includes

Files you may edit when maintaining the site

- `pages/portfolio.php` — portfolio gallery (JS lives inline or in `assets/js/`)
- `assets/images/` — images used on site (logos, gallery)

---

## Local setup (Windows + XAMPP)

1. Install XAMPP (https://www.apachefriends.org)
2. Copy the repository to XAMPP's web root. Default path for XAMPP is `C:\xampp\htdocs\` — place project at `C:\xampp\htdocs\mahati`
3. Start Apache (and MySQL if needed) via XAMPP Control Panel
4. If composer packages are required, install Composer (https://getcomposer.org) and run in project root:

```powershell
cd C:\xampp\htdocs\mahati
composer install
```

5. Open your browser and visit: http://localhost/mahati/

Notes:
- Ensure `assets/images/` and `submissions/` are writable by the web server when uploading files.

---

## Updating portfolio images and titles

Portfolio items are static by default in `pages/portfolio.php` and reference images under `assets/images/` (or `assets/images/portfolio-*`).

If you want the UI to reflect a title change safely:

1. Update the title in `pages/portfolio.php` for that item (or make it dynamic and store items in a DB).
2. If you rename an image file, update the image path used by the `<img>` tag.

If you need an automated rename-on-title-change behavior, implement it server-side in your admin handler. Keep these rules:

- Sanitize titles to safe filenames (slugify: lowercase, replace non-alphanumerics with `-`).
- Validate file extensions (allow only `.jpg`, `.jpeg`, `.png`, `.webp`).
- Never use user-supplied paths directly — always resolve filenames against a single uploads directory.

Example safe steps (high-level):

1. Receive new title and existing image filename (from DB or admin form).
2. Build safe filename: `slugify($title) . '.' . $ext`.
3. Use PHP `rename()` to rename the file inside `assets/images/` only if file exists and target doesn't exist.
4. Update the stored image filename in your data store.

---

## Security notes (short)

- Audit `includes/form-handler.php` and `file-submission-handler.php` for input sanitization and file upload safety.
- Ensure all user input is validated and sanitized server-side. Use prepared statements for DB operations.
- Avoid using `innerHTML` with unsanitized content. Use DOM APIs or proper escaping (we updated `pages/portfolio.php` to use DOM-based modal rendering).
- Keep `submissions/` and other sensitive folders outside the document root if possible or protect them with `.htaccess`.

---

## Testing & debugging

- Use `php -l pages/portfolio.php` to lint PHP files quickly.
- Check Apache logs (`C:\xampp\apache\logs\error.log`) for runtime errors.
- Test contact form and file uploads on local setup and verify files land in `submissions/` or the configured uploads folder.

---

## Recommended next steps

1. Move any remaining inline JS from `pages/*.php` into `assets/js/` for better maintainability.
2. Audit form handlers for sanitization and upload safety (I can open those files and propose patches).
3. Consider moving portfolio data to a small JSON or DB to allow dynamic updates from an admin panel.

---

If you'd like, I can:

- Audit `includes/form-handler.php` and `file-submission-handler.php` now and implement safe sanitization and file upload handling.
- Extract the portfolio JS into `assets/js/portfolio.js` and update `pages/portfolio.php` to reference it.

Tell me which task to do next.

---

