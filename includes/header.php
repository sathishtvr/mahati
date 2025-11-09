<?php
/**
 * Header component for Mahati Interiors Website
 * Contains navigation, logo, and common head elements
 */

// Prevent direct access
if (!defined('SECURE_ACCESS')) {
    die('Direct access not permitted');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_page_title(); ?></title>
    <meta name="description" content="<?php echo get_page_description(); ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo ASSETS_PATH; ?>images/favicon.ico">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>css/base.css">
    <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>css/header.css">
    <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>css/footer.css">
    <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>css/sections.css">
    <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>css/carousel.css">
    <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>css/hero-slider.css">
    
    <!-- Hero CSS -->
    <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>css/pages/hero.css">
    
    <!-- Expertise CSS -->
    <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>css/expertise.css">
    
    <!-- Page-specific CSS -->
    <?php
    $current_page = get_current_page();
    if ($current_page !== 'home') {
        echo '<link rel="stylesheet" href="' . ASSETS_PATH . 'css/pages/' . $current_page . '.css">';
    }
    ?>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- CSRF Token for forms -->
    <meta name="csrf-token" content="<?php echo generate_csrf_token(); ?>">
</head>
<body>
    <!-- Header Navigation -->
    <header class="header">
        <nav class="navbar">
            <div class="container">
                <div class="nav-brand">
                    <a href="<?php echo page_url(); ?>">
                        <img src="<?php echo ASSETS_PATH; ?>images/logo.png" alt="Mahati Interior" class="logo">
                    </a>
                </div>
                <ul class="nav-menu">
                    <li class="nav-item"><a href="<?php echo page_url(); ?>" class="nav-link <?php echo nav_class('home'); ?>">Home</a></li>
                    <li class="nav-item"><a href="<?php echo page_url('about'); ?>" class="nav-link <?php echo nav_class('about'); ?>">About</a></li>
                    <li class="nav-item"><a href="<?php echo page_url('services'); ?>" class="nav-link <?php echo nav_class('services'); ?>">Services</a></li>
                    <li class="nav-item"><a href="<?php echo page_url('portfolio'); ?>" class="nav-link <?php echo nav_class('portfolio'); ?>">Portfolio</a></li>
                    <li class="nav-item"><a href="<?php echo page_url('contact'); ?>" class="nav-link <?php echo nav_class('contact'); ?>">Contact</a></li>
                </ul>
                <div class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content Wrapper -->
    <main class="main-content">
