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

### Security Settings

- CSRF tokens for all forms
- Input sanitization on all user data
- Protected PHP files from direct access
- Security headers via .htaccess

## 🛡️ Security Features

### Input Validation
- All form inputs are sanitized using `sanitize_input()`
- Email validation for contact forms
- CSRF token verification for form submissions

### File Protection
- Direct access to PHP components blocked
- Sensitive files hidden via .htaccess
- Directory browsing disabled

### URL Security
- Page parameter validation against whitelist
- Clean URL routing with security checks
- 404 handling for invalid pages

## 📝 Usage

### Adding New Pages

1. **Create Page File**: Add new PHP file in `php/pages/`
2. **Update Config**: Add page to `$valid_pages` array in `config.php`
3. **Add Navigation**: Update header component with new menu item

### Form Handling

Forms automatically include CSRF protection:

```php
<form method="POST" action="<?php echo page_url('contact'); ?>">
    <input type="hidden" name="<?php echo CSRF_TOKEN_NAME; ?>" value="<?php echo generate_csrf_token(); ?>">
    <input type="hidden" name="form_type" value="contact">
    <!-- Form fields -->
</form>
```

### Navigation

Use helper functions for consistent navigation:

```php
<a href="<?php echo page_url('about'); ?>" 
   class="<?php echo nav_class('about'); ?>">
   About
</a>
```

## 🎨 Styling

- **Base Styles**: `css/base.css`
- **Components**: `css/header.css`, `css/footer.css`
- **Sections**: `css/sections.css`
- **Page-Specific**: `css/pages/[page].css`

## 📱 Responsive Design

- Mobile-first approach
- Flexible grid layouts
- Touch-friendly navigation
- Optimized images and fonts

## 🔍 SEO Features

- Dynamic page titles and meta descriptions
- Clean, semantic HTML structure
- Proper heading hierarchy
- Image alt attributes
- Structured data ready

## 🚦 Error Handling

- Custom 404 error pages
- Form validation with user feedback
- Error logging for debugging
- Graceful fallbacks

## 📊 Performance

- Optimized CSS and JavaScript loading
- Efficient PHP includes
- Image optimization recommendations
- Caching-friendly structure

## 🔒 Best Practices Implemented

### Security
✅ CSRF protection on all forms
✅ Input sanitization and validation
✅ File access restrictions
✅ Security headers
✅ Error logging

### Code Quality
✅ Modular architecture
✅ Consistent naming conventions
✅ Comprehensive comments
✅ Separation of concerns
✅ Reusable components

### Performance
✅ Efficient file structure
✅ Minimal database queries
✅ Optimized asset loading
✅ Clean URL routing

## 🛠️ Maintenance

### Regular Tasks
- Update contact information in `config.php`
- Review error logs for issues
- Update content in page files
- Backup database (when implemented)

### Security Updates
- Keep PHP version updated
- Review and update .htaccess rules
- Monitor for security vulnerabilities
- Regular security audits

## 🚀 Future Enhancements

- Database integration for dynamic content
- Admin panel for content management
- Email integration for contact forms
- Blog/news section
- Client portal
- Online booking system

## 📞 Support

For technical support or customization requests, contact the development team.

---

**Built with ❤️ for Mahati Interior Design**
