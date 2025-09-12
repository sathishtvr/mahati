<?php
/**
 * Configuration file for Mahati Interiors Website
 * Contains all constants, database credentials, and global settings
 */

// Prevent direct access
if (!defined('SECURE_ACCESS')) {
    die('Direct access not permitted');
}

// Site Configuration
define('SITE_NAME', 'Mahati Interiors');
define('SITE_URL', 'http://localhost/mahati');
define('SITE_EMAIL', 'zathishkumar@gmail.com');
define('SITE_PHONE', '+91 98765 43210');

// Path Configuration
define('BASE_PATH', dirname(__DIR__));
define('INCLUDES_PATH', BASE_PATH . '/includes/');
define('PAGES_PATH', BASE_PATH . '/pages/');
define('TEMPLATES_PATH', BASE_PATH . '/templates/');
define('ASSETS_PATH', '/mahati/assets/');

// Image Path Configuration
define('IMAGES_PATH', ASSETS_PATH . 'images/');
define('CSS_PATH', ASSETS_PATH . 'css/');
define('JS_PATH', ASSETS_PATH . 'js/');

// Page Configuration
$valid_pages = [
    'home' => 'home.php',
    'about' => 'about.php',
    'services' => 'services.php',
    'portfolio' => 'portfolio.php',
    'contact' => 'contact.php'
];

// Default page
define('DEFAULT_PAGE', 'home');

// Security Configuration
define('CSRF_TOKEN_NAME', 'csrf_token');
define('SESSION_TIMEOUT', 3600); // 1 hour

// Database Configuration (if needed in future)
/*
define('DB_HOST', 'localhost');
define('DB_NAME', 'mahati_interiors');
define('DB_USER', 'your_username');
define('DB_PASS', 'your_password');
define('DB_CHARSET', 'utf8mb4');
*/

// Error Reporting (set to false in production)
define('DEBUG_MODE', true);

if (DEBUG_MODE) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

// Initialize session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * Generate CSRF token for forms
 * @return string
 */
function generate_csrf_token() {
    if (!isset($_SESSION[CSRF_TOKEN_NAME])) {
        $_SESSION[CSRF_TOKEN_NAME] = bin2hex(random_bytes(32));
    }
    return $_SESSION[CSRF_TOKEN_NAME];
}

/**
 * Verify CSRF token
 * @param string $token
 * @return bool
 */
function verify_csrf_token($token) {
    return isset($_SESSION[CSRF_TOKEN_NAME]) && hash_equals($_SESSION[CSRF_TOKEN_NAME], $token);
}

/**
 * Sanitize input data
 * @param mixed $data
 * @return mixed
 */
function sanitize_input($data) {
    if (is_array($data)) {
        return array_map('sanitize_input', $data);
    }
    return htmlspecialchars(strip_tags(trim($data)), ENT_QUOTES, 'UTF-8');
}

/**
 * Validate page parameter
 * @param string $page
 * @return string
 */
function validate_page($page) {
    global $valid_pages;
    $page = sanitize_input($page);
    return array_key_exists($page, $valid_pages) ? $page : DEFAULT_PAGE;
}

/**
 * Get current page for navigation highlighting
 * @return string
 */
function get_current_page() {
    $page = isset($_GET['page']) ? validate_page($_GET['page']) : DEFAULT_PAGE;
    return $page;
}

/**
 * Check if current page matches given page
 * @param string $page_name
 * @return bool
 */
function is_current_page($page_name) {
    return get_current_page() === $page_name;
}

/**
 * Generate navigation class for active page
 * @param string $page_name
 * @return string
 */
function nav_class($page_name) {
    return is_current_page($page_name) ? 'active' : '';
}

/**
 * Generate page URL
 * @param string $page
 * @return string
 */
function page_url($page = '') {
    if (empty($page) || $page === DEFAULT_PAGE) {
        return SITE_URL;
    }
    return SITE_URL . '?page=' . urlencode($page);
}

/**
 * Get page title based on current page
 * @return string
 */
function get_page_title() {
    $current_page = get_current_page();
    $titles = [
        'home' => SITE_NAME . ' - Transform Your Space with Expert Interior Design',
        'about' => 'About Us - ' . SITE_NAME,
        'services' => 'Our Services - ' . SITE_NAME,
        'portfolio' => 'Portfolio - ' . SITE_NAME,
        'contact' => 'Contact Us - ' . SITE_NAME
    ];
    
    return isset($titles[$current_page]) ? $titles[$current_page] : SITE_NAME;
}

/**
 * Get page meta description
 * @return string
 */
function get_page_description() {
    $current_page = get_current_page();
    $descriptions = [
        'home' => 'Professional interior design services to transform your space. Expert designers, quality materials, and personalized solutions.',
        'about' => 'Learn about Mahati Interiors team, our mission, and our commitment to creating beautiful spaces.',
        'services' => 'Explore our comprehensive interior design services including residential, commercial, and consultation services.',
        'portfolio' => 'View our portfolio of completed interior design projects showcasing our expertise and creativity.',
        'contact' => 'Get in touch with Mahati Interiors for your next project. Contact information and inquiry form.'
    ];
    
    return isset($descriptions[$current_page]) ? $descriptions[$current_page] : 'Professional interior design services';
}

/**
 * Format phone number for display
 * @param string $phone
 * @return string
 */
function format_phone($phone) {
    return preg_replace('/(\+\d{2})(\s)(\d{5})(\s)(\d{5})/', '$1 $3 $5', $phone);
}

/**
 * Log error messages (for future use)
 * @param string $message
 * @param string $level
 * @return void
 */
function log_error($message, $level = 'ERROR') {
    if (DEBUG_MODE) {
        error_log("[{$level}] " . date('Y-m-d H:i:s') . " - " . $message);
    }
}

/**
 * Redirect to a specific page
 * @param string $page
 * @return void
 */
function redirect_to_page($page = '') {
    $url = page_url($page);
    header("Location: {$url}");
    exit;
}

/**
 * Check if request is POST
 * @return bool
 */
function is_post_request() {
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

/**
 * Get POST data safely
 * @param string $key
 * @param mixed $default
 * @return mixed
 */
function get_post_data($key, $default = '') {
    return isset($_POST[$key]) ? sanitize_input($_POST[$key]) : $default;
}

/**
 * Get GET data safely
 * @param string $key
 * @param mixed $default
 * @return mixed
 */
function get_get_data($key, $default = '') {
    return isset($_GET[$key]) ? sanitize_input($_GET[$key]) : $default;
}

/**
 * Get image path with fallback
 * @param string $image_name
 * @param string $folder (optional subfolder)
 * @return string
 */
function get_image_path($image_name, $folder = '') {
    $path = IMAGES_PATH;
    if (!empty($folder)) {
        $path .= $folder . '/';
    }
    return $path . $image_name;
}

/**
 * Check if image exists and return path or placeholder
 * @param string $image_name
 * @param string $folder (optional subfolder)
 * @return string
 */
function safe_image_path($image_name, $folder = '') {
    $image_path = get_image_path($image_name, $folder);
    $full_path = $_SERVER['DOCUMENT_ROOT'] . $image_path;
    
    // If image doesn't exist or is too small (corrupted), return placeholder
    if (!file_exists($full_path) || filesize($full_path) < 1000) {
        return get_image_path('placeholder.jpg');
    }
    
    return $image_path;
}
?>
