<!-- Main Footer Start -->
<footer class="footer">    
    <!-- Footer CTA Strip -->
    <div class="footer-cta-strip">
        <div class="footer-cta-container">
            <div class="footer-cta-text">
                <h3>Elevate Your Living Experience</h3>
                <p>Consult with our luxury residential floor experts and build your dream home today.</p>
            </div>
            <div class="footer-cta-action">
                <a href="#contact" class="footer-cta-btn">Book Consultation <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
        </div>
    </div>
    
    <div class="footer-container">        
        <!-- Footer Columns Grid -->
        <div class="footer-grid">
            <!-- Branding Column -->
            <div class="footer-col branding-col">
                <div class="footer-brand-wrap">
                    <a href="index.php" class="brand-logo" style="color: #fff; text-decoration: none;">
                        <img src="assets/images/nav_logo.png" alt="MyPropertyStation Logo" class="nav-logo-img">
                        <span class="brand-name" style="font-family: var(--font-heading); font-size: 1.3rem; font-weight: 800;">
                            MYPROPERTY<span style="color: #c59b27;">STATION</span>
                        </span>
                    </a>
                </div>
                <p class="desc" style="font-size: 0.9rem; color: #94a3b8; margin-top: 0.8rem; line-height: 1.6;">
                    Experience the absolute pinnacle of sophisticated living tailored to your expectations. MyPropertyStation delivers premium, bespoke residential builder floors and sky penthouses across Faridabad and the Delhi NCR region.
                </p>
                <div class="social-icons-wrapper" style="display: flex; gap: 1rem; margin-top: 1.2rem;">
                    <a href="#" class="social-icon" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="social-icon" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://wa.me/918000810016" target="_blank" class="social-icon" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
            
            <!-- Quick Navigation Column -->
            <div class="footer-col links-col">
                <h4 class="col-title">Quick Navigation</h4>
                <ul class="footer-links">
                    <li><a href="index.php"><i class="fa-solid fa-chevron-right"></i> Home</a></li>
                    <li><a href="index.php#about"><i class="fa-solid fa-chevron-right"></i> About Us</a></li>
                    <li><a href="projects.php"><i class="fa-solid fa-chevron-right"></i> Projects</a></li>
                    <li><a href="index.php#contact"><i class="fa-solid fa-chevron-right"></i> Contact Us</a></li>
                </ul>
            </div>
            
            <!-- Projects Column -->
            <div class="footer-col presence-col">
                <h4 class="col-title">Our Projects</h4>
                <ul class="footer-links">
                    <li><a href="projects.php"><i class="fa-solid fa-building"></i> Zenith Sky Penthouses</a></li>
                    <li><a href="projects.php"><i class="fa-solid fa-building"></i> Aethelgard Private Islands</a></li>
                    <li><a href="projects.php"><i class="fa-solid fa-building"></i> Adore Broadway</a></li>
                    <li><a href="projects.php"><i class="fa-solid fa-building"></i> BPTP Skynest</a></li>
                    <li><a href="projects.php"><i class="fa-solid fa-building"></i> BP Homes Barleria</a></li>
                </ul>
            </div>
            
            <!-- Contact/Address Column -->
            <div class="footer-col contact-col">
                <h4 class="col-title">You Can Meet Us At</h4>
                <ul class="contact-list">
                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <div class="contact-info-block">
                            <a href="tel:+918000810016">+91 80008 10016</a>
                        </div>
                    </li>
                    <li>
                        <i class="fa-solid fa-envelope"></i>
                        <div class="contact-info-block">
                            <a href="mailto:info@mypropertystation.com">info@mypropertystation.com</a>
                        </div>
                    </li>
                    <li>
                        <i class="fa-solid fa-location-dot"></i>
                        <div class="contact-info-block text-block">
                            <strong>MyPropertyStation Headquarters</strong><br>
                            Sector 15, Faridabad,<br>
                            Haryana - 121007, India
                        </div>
                    </li>
                </ul>
                <div class="footer-map-wrapper" style="margin-top: 1rem; overflow: hidden; border-radius: 8px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112336.63467610738!2d77.24838612199279!3d28.3733800685959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cdc15f903a985%3A0x6b84e03d368e7d23!2sFaridabad%2C%20Haryana!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="100%" height="150" style="border:0; filter: grayscale(1) invert(0.9) contrast(1.2);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer Copyright Bottom -->
    <div class="footer-bottom">
        <div class="footer-bottom-container">
            <p class="copyright-text">&copy; 2026 MyPropertyStation | All rights reserved.</p>
        </div>
    </div>
    
    <a href="#" class="back-to-top" id="backToTop" aria-label="Back to Top">
        <i class="fa-solid fa-arrow-up"></i>
    </a>
</footer>

<!-- Callback Request Modal -->
<div id="callbackModalOverlay" class="callback-modal-overlay">
    <div class="callback-modal-card">
        <button id="callbackCloseBtn" class="callback-close-btn" aria-label="Close modal">
            <i class="fa-solid fa-xmark"></i>
        </button>
        
        <div class="callback-header">
            <h4 class="callback-title-small">Looking for something specific?</h4>
            <h3 class="callback-title-accent">We're just a call away.</h3>
            <p class="callback-subtitle">Share your number below and we'll call you back shortly.</p>
        </div>
        
        <form id="callbackForm" class="callback-form" onsubmit="event.preventDefault(); alert('Request submitted successfully! We will call you shortly.'); closeCallbackPopup();">
            <div class="callback-input-group">
                <label for="cbName">Full Name *</label>
                <div class="callback-input-wrapper">
                    <i class="fa-solid fa-user callback-input-icon"></i>
                    <input type="text" id="cbName" class="callback-input-field" placeholder="Enter your full name" required>
                </div>
            </div>
            
            <div class="callback-input-group">
                <label for="cbPhone">Phone Number *</label>
                <div class="callback-input-wrapper">
                    <div class="phone-prefix-container">
                        <span class="phone-prefix-text">+91</span>
                    </div>
                    <input type="tel" id="cbPhone" class="callback-input-field callback-phone-field" placeholder="80008 10016" required maxlength="10">
                </div>
            </div>
            
            <button type="submit" class="callback-submit-btn">
                <i class="fa-solid fa-phone-volume"></i> Call me back
            </button>
        </form>
        
        <div class="callback-footer">
            <div class="callback-secure-text">
                <i class="fa-solid fa-shield-halved"></i>
                <span>Rest assured, your details are secure with us.</span>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Back to top scroll
        const backToTop = document.getElementById("backToTop");
        if (backToTop) {
            window.addEventListener("scroll", function () {
                if (window.scrollY > 400) {
                    backToTop.classList.add("visible");
                } else {
                    backToTop.classList.remove("visible");
                }
            });
            backToTop.addEventListener("click", function (e) {
                e.preventDefault();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }
        
        // Callback popup modal logic (shows after 6 seconds)
        const callbackOverlay = document.getElementById("callbackModalOverlay");
        const callbackCloseBtn = document.getElementById("callbackCloseBtn");
        
        function openCallbackPopup() {
            if (callbackOverlay && !localStorage.getItem("myproperty_popup_closed")) {
                callbackOverlay.classList.add("show");
            }
        }
        
        window.closeCallbackPopup = function() {
            if (callbackOverlay) callbackOverlay.classList.remove("show");
            localStorage.setItem("myproperty_popup_closed", "true");
        };
        
        if (callbackCloseBtn) {
            callbackCloseBtn.addEventListener("click", closeCallbackPopup);
        }
        
        setTimeout(openCallbackPopup, 6000);
    });
</script>
</body>
</html>