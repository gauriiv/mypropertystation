<?php include 'components/header.php'; ?>

<!-- Contact Page Hero -->
<section class="contact-hero-section">
    <div class="container text-center">
        <h1 class="contact-hero-title">Get In <span>Touch</span></h1>
        <div class="contact-hero-underline"></div>
        <p class="contact-hero-subtitle">We'd love to hear from you. Let's start a conversation and build something extraordinary together.</p>
    </div>
</section>

<!-- Contact Forms and Details Grid -->
<section class="contact-main-section" style="background: linear-gradient(145deg, #42030f 0%, #2b020a 100%); padding-top: 5rem; padding-bottom: 5rem; color: #fff;">
    <div class="container">
        <div class="contact-office-card" style="max-width: 800px; margin: 0 auto; background: transparent; box-shadow: none; border: none; padding: 0;">
            <h2 class="office-heading">You Can Meet Us <span>At</span></h2>
            <div class="office-heading-underline"></div>
            
            <!-- Headquarters Info -->
            <div class="office-info-item">
                <div class="office-icon-box">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="office-info-text">
                    <h4>OUR HEADQUARTERS</h4>
                    <p>Sector 15, Faridabad,<br>Haryana - 121007, India</p>
                </div>
            </div>
            
            <!-- Phone Number Info -->
            <div class="office-info-item">
                <div class="office-icon-box">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="office-info-text">
                    <h4>PHONE NUMBERS</h4>
                    <p>+91-8000810016</p>
                </div>
            </div>
            
            <!-- Email Info -->
            <div class="office-info-item">
                <div class="office-icon-box">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="office-info-text">
                    <h4>EMAIL ADDRESSES</h4>
                    <p>info@mypropertystation.com<br>support@mypropertystation.com</p>
                </div>
            </div>
            
            <!-- Social Media Connections -->
            <div class="office-social-wrap">
                <span class="social-title">CONNECT WITH US</span>
                <div class="office-social-links">
                    <a href="#" class="office-social-btn" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="office-social-btn" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://wa.me/918000810016" target="_blank" class="office-social-btn" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Message Form Section -->
<section class="contact-form-section" style="background: #ffffff; padding-top: 5rem; padding-bottom: 5rem;">
    <div class="container">
        <div class="contact-form-card" style="max-width: 800px; margin: 0 auto; background: transparent; box-shadow: none; border: none; padding: 0;">
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
</section>

<?php include 'components/footer.php'; ?>