<?php include 'components/header.php'; ?>

<!-- ==========================================
     1. CONTACT HERO BANNER
     ========================================== -->
<section class="contact-hero-section">
    <div class="container text-center">
        <h1 class="contact-hero-title">Get In <span>Touch</span></h1>
        <div class="contact-hero-underline"></div>
        <p class="contact-hero-subtitle">We'd love to hear from you. Let's start a conversation and build something extraordinary together.</p>
    </div>
</section>

<!-- ==========================================
     2. MAIN CONTACT SECTION (OFFICE & FORM)
     ========================================== -->
<section class="contact-main-section">
    <div class="container">
        <div class="contact-grid">
            
            <!-- Left Column: Corporate Office Dark Card -->
            <div class="contact-office-card">
                <h2 class="office-heading">Corporate <span>Office</span></h2>
                <div class="office-heading-underline"></div>

                <!-- Info Item 1: Headquarters -->
                <div class="office-info-item">
                    <div class="office-icon-box">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="office-info-text">
                        <h4>OUR HEADQUARTERS</h4>
                        <p>JC-21, Ground Floor, Sector – 81, Puri VIP Floors,<br>Faridabad, Haryana 121007</p>
                    </div>
                </div>

                <!-- Info Item 2: Phone Numbers -->
                <div class="office-info-item">
                    <div class="office-icon-box">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="office-info-text">
                        <h4>PHONE NUMBERS</h4>
                        <p>+91-7827771777<br>+91-9999566126</p>
                    </div>
                </div>

                <!-- Info Item 3: Email Addresses -->
                <div class="office-info-item">
                    <div class="office-icon-box">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="office-info-text">
                        <h4>EMAIL ADDRESSES</h4>
                        <p>info@mypropertystation.com<br>support@mypropertystation.com</p>
                    </div>
                </div>

                <!-- Social Connect Footer -->
                <div class="office-social-wrap">
                    <span class="social-title">CONNECT WITH US</span>
                    <div class="office-social-links">
                        <a href="#" class="office-social-btn" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="office-social-btn" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://wa.me/919999566126" target="_blank" class="office-social-btn" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <!-- Right Column: Send A Message Form -->
            <div class="contact-form-card">
                <h2 class="form-heading">Send A <span>Message</span></h2>
                <p class="form-intro">Have a question regarding our ongoing projects or looking to schedule a consultation? Fill out the form below and our dedicated team will reach out to you.</p>

                <form onsubmit="event.preventDefault(); alert('Thank you for your message! Our team will contact you shortly.'); this.reset();">
                    <div class="form-group">
                        <label class="form-label">YOUR NAME *</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter your full name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">EMAIL ADDRESS *</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter your email address" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">PHONE NUMBER *</label>
                        <input type="tel" name="phone" class="form-control" placeholder="Enter your mobile number" required pattern="[0-9]{10}" maxlength="10">
                    </div>

                    <div class="form-group">
                        <label class="form-label">MESSAGE / INQUIRY (OPTIONAL)</label>
                        <textarea name="message" class="form-control" rows="4" placeholder="How can we help you today? (Optional)"></textarea>
                    </div>

                    <button type="submit" class="contact-submit-btn">SEND MESSAGE</button>
                </form>
            </div>

        </div>
    </div>
</section>

<?php include 'components/footer.php'; ?>
