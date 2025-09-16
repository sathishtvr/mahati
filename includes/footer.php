<?php
/**
 * Footer component for Mahati Interiors Website
 */

// Prevent direct access
if (!defined('SECURE_ACCESS')) {
    die('Direct access not permitted');
}
?>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <!-- Company Info -->
                <div class="footer-section">
                    <h3><?php echo SITE_NAME; ?></h3>
                    <p>Transform your space with our expert interior design services. We create beautiful, functional spaces that reflect your personality and lifestyle.</p>
                    <p style="margin-top: 1rem; font-size: 0.9rem; color: #ccc;">Established with a commitment to excellence in interior design and customer satisfaction.</p>
                </div>

                <!-- Quick Links -->
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="<?php echo page_url(); ?>">Home</a></li>
                        <li><a href="<?php echo page_url('about'); ?>">About Us</a></li>
                        <li><a href="<?php echo page_url('services'); ?>">Services</a></li>
                        <li><a href="<?php echo page_url('portfolio'); ?>">Portfolio</a></li>
                        <li><a href="<?php echo page_url('contact'); ?>">Contact</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="footer-section">
                    <h3>Our Services</h3>
                    <ul>
                        <li><a href="<?php echo page_url('services'); ?>">Residential Design</a></li>
                        <li><a href="<?php echo page_url('services'); ?>">Commercial Design</a></li>
                        <li><a href="<?php echo page_url('services'); ?>">Space Planning</a></li>
                        <li><a href="<?php echo page_url('services'); ?>">Consultation</a></li>
                        <li><a href="<?php echo page_url('services'); ?>">Project Management</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="footer-section">
                    <h3>Contact Info</h3>
                    <p><i class="fas fa-phone"></i> +91 98455 49933</p>
                    <p><i class="fas fa-envelope"></i> Mahatiinterior@gmail.com</p>
                    <p><i class="fas fa-map-marker-alt"></i> No 68, 4th cross, 9th main road<br>Muneshwar layout, Vaderahalli<br>Vidyaranyapura, Bangalore<br>Karnataka - 560097</p>
                    <p style="margin-top: 1rem; font-size: 0.9rem; color: #ccc;">Business Hours: Mon-Sat 9AM-6PM</p>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved. | Designed with ❤️ for beautiful spaces.</p>
            </div>
        </div>
    </footer>

    <!-- Social Media Float Buttons -->
    <div class="social-float">
        <a href="https://www.instagram.com/mahati_interior?igsh=MTA5ZTgzMTJkMjBjNw%3D%3D&utm_source=qr" class="instagram-float" target="_blank" aria-label="Instagram Profile">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="https://wa.me/<?php echo str_replace(['+', '-', ' ', '(', ')'], '', SITE_PHONE); ?>?text=Hi%20Mahati%20Interiors,%20I%20would%20like%20to%20discuss%20my%20interior%20design%20project." class="whatsapp-float" target="_blank" aria-label="WhatsApp Chat">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <!-- Custom JavaScript -->
    <script src="<?php echo ASSETS_PATH; ?>js/main.js"></script>
    <script src="<?php echo ASSETS_PATH; ?>js/budget-carousel.js"></script>
    
    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Display alerts if any -->
    <?php if (isset($_SESSION['success'])): ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                showAlert('<?php echo $_SESSION['success']; ?>', 'success');
            });
        </script>
        <?php unset($_SESSION['success']); ?>
    <?php endif; ?>
    
    <?php if (isset($_SESSION['error'])): ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                showAlert('<?php echo $_SESSION['error']; ?>', 'error');
            });
        </script>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>
</body>
</html>
