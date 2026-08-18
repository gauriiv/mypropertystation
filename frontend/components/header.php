<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPropertyStation | Top Real Estate Services & Ultra Luxury Estates</title>
    <meta name="description" content="MyPropertyStation is a premier real estate construction and consultancy company delivering high-quality residential homes, penthouses, and luxury builder floors.">
    
    <!-- Preconnect Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Allura&family=Cinzel:wght@500;600;700;800&family=Outfit:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome & Custom Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- Fixed Header Container -->
<div class="header-fixed-wrapper" id="header-fixed-wrapper">    
    <!-- Main Navigation Header -->
    <header class="main-header" id="main-header">
        <div class="header-inner">
            <a href="index.php" class="brand-logo">
                <img src="assets/images/nav_logo.png" alt="MyPropertyStation Logo" class="nav-logo-img">
                <span class="brand-name" style="color: #ffffff;">mypropertystation</span>
            </a>
            
            <?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
            
            <ul class="nav-menu">
                <li>
                    <a href="index.php" class="nav-link <?php echo ($currentPage == 'index.php' || $currentPage == '') ? 'active' : ''; ?>">HOME</a>
                </li>
                <li>
                    <a href="about.php" class="nav-link <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>">ABOUT US</a>
                </li>
                <li>
                    <a href="services.php" class="nav-link <?php echo ($currentPage == 'services.php') ? 'active' : ''; ?>">SERVICES</a>
                </li>
                <li class="nav-dropdown">
                    <a href="projects.php" class="nav-link <?php echo ($currentPage == 'projects.php') ? 'active' : ''; ?>">
                        PROJECTS <i class="fas fa-chevron-down" style="font-size: 0.7rem; margin-left: 0.2rem;"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="projects.php#sky-penthouses">Zenith Sky Penthouses</a>
                        <a href="projects.php#private-islands">Aethelgard Private Islands</a>
                        <a href="projects.php#adore-broadway">Adore Broadway</a>
                        <a href="projects.php#skynest">BPTP Skynest</a>
                    </div>
                </li>

                <li>
                    <a href="contact.php" class="nav-link <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>">CONTACT US</a>
                </li>
            </ul>
            
            <div class="nav-actions">
                <a href="tel:+918000810016" class="header-phone-btn">
                    <i class="fa-solid fa-phone" style="color: #d4af37; margin-right: 0.5rem;"></i> +91 80008 10016
                </a>
                <button id="enquireBtn" class="btn-enquire">ENQUIRE NOW</button>
                <button class="mobile-toggle" id="mobile-toggle" aria-label="Toggle menu">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>
    </header>
</div>

<!-- Mobile Navigation Drawer -->
<div class="mobile-nav" id="mobile-nav">
    <div class="mobile-nav-header">
        <div class="mobile-logo" style="display: flex; align-items: center; gap: 0.5rem;">
            <img src="assets/images/nav_logo.png" alt="MyPropertyStation Logo" class="nav-logo-img">
            <span class="brand-name" style="color: #ffffff;">mypropertystation</span>
        </div>
        <div class="mobile-nav-close" id="mobile-nav-close">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div>
    
    <ul class="mobile-menu-list">
        <li>
            <a href="index.php" class="<?php echo ($currentPage == 'index.php' || $currentPage == '') ? 'active' : ''; ?>">HOME</a>
        </li>
        <li>
            <a href="about.php" class="<?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>">ABOUT US</a>
        </li>
        <li>
            <a href="services.php" class="<?php echo ($currentPage == 'services.php') ? 'active' : ''; ?>">SERVICES</a>
        </li>
        <li class="mobile-dropdown-trigger">
            <a href="projects.php" class="mobile-dropdown-toggle">
                PROJECTS <i class="fas fa-chevron-down mobile-caret"></i>
            </a>
            <ul class="mobile-dropdown-content">
                <li><a href="projects.php#sky-penthouses">Zenith Sky Penthouses</a></li>
                <li><a href="projects.php#private-islands">Aethelgard Private Islands</a></li>
                <li><a href="projects.php#adore-broadway">Adore Broadway</a></li>
                <li><a href="projects.php#skynest">BPTP Skynest</a></li>
            </ul>
        </li>

        <li>
            <a href="contact.php" class="<?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>">CONTACT US</a>
        </li>
    </ul>
    
    <div class="mobile-actions" style="margin-top: 2rem;">
        <a href="tel:+918000810016" class="header-phone-btn" style="margin-bottom: 1rem; justify-content: center;">
            <i class="fa-solid fa-phone"></i> +91 80008 10016
        </a>
        <button id="mobileEnquireBtn" class="btn-enquire" style="width: 100%;">ENQUIRE NOW</button>
    </div>
</div>

<!-- Quick Enquiry Modal -->
<div id="headerEnquireModal" class="header-modal">
    <div class="header-modal-content">
        <span class="header-modal-close" id="headerModalClose"><i class="fa-solid fa-xmark"></i></span>
        <h2 class="modal-title">Quick Enquiry</h2>
        <p class="modal-subtitle">Leave your details and our luxury consultant will get back to you shortly.</p>
        <form onsubmit="event.preventDefault(); alert('Thank you for reaching out! Our team will contact you shortly.'); closeModal();">
            <div class="form-group">
                <input type="text" name="name" class="header-form-control" placeholder="Your Full Name" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="header-form-control" placeholder="Your Email Address" required>
            </div>
            <div class="form-group">
                <input type="tel" name="phone" class="header-form-control" placeholder="Your Phone Number (10 digits)" required pattern="[0-9]{10}" maxlength="10">
            </div>
            <div class="form-group">
                <textarea name="message" class="header-form-control" placeholder="I am interested in... (Optional)" rows="3"></textarea>
            </div>
            <button type="submit" class="btn-enquire w-100" style="border: none; cursor: pointer;">SUBMIT ENQUIRY</button>
        </form>
    </div>
</div>

<div class="mobile-nav-overlay" id="mobile-nav-overlay"></div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Sticky Header Scroll Event
        const headerWrapper = document.getElementById("header-fixed-wrapper");
        const header = document.getElementById("main-header");
        
        function handleScroll() {
            if (window.scrollY > 40) {
                if (headerWrapper) headerWrapper.classList.add("scrolled");
                if (header) header.classList.add("scrolled");
            } else {
                if (headerWrapper) headerWrapper.classList.remove("scrolled");
                if (header) header.classList.remove("scrolled");
            }
        }
        
        window.addEventListener("scroll", handleScroll);
        handleScroll();
        
        // Mobile Menu Drawer
        const toggleBtn = document.getElementById("mobile-toggle");
        const closeBtn = document.getElementById("mobile-nav-close");
        const mobileNav = document.getElementById("mobile-nav");
        const overlay = document.getElementById("mobile-nav-overlay");
        
        function openMobileMenu() {
            if (mobileNav) mobileNav.classList.add("active");
            if (overlay) overlay.classList.add("active");
            document.body.style.overflow = 'hidden';
        }
        
        function closeMobileMenu() {
            if (mobileNav) mobileNav.classList.remove("active");
            if (overlay) overlay.classList.remove("active");
            document.body.style.overflow = 'auto';
        }
        
        if (toggleBtn) toggleBtn.addEventListener("click", openMobileMenu);
        if (closeBtn) closeBtn.addEventListener("click", closeMobileMenu);
        if (overlay) overlay.addEventListener("click", closeMobileMenu);
        
        // Mobile Dropdown Toggle
        const mobileDropTrigger = document.querySelector('.mobile-dropdown-trigger > a');
        if (mobileDropTrigger) {
            mobileDropTrigger.addEventListener('click', function (e) {
                e.preventDefault();
                const parent = this.parentElement;
                parent.classList.toggle('active');
                const caret = this.querySelector('.mobile-caret');
                if (caret) {
                    caret.style.transform = parent.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0deg)';
                }
            });
        }
        
        // Modal Logic
        const modal = document.getElementById("headerEnquireModal");
        const openBtn = document.getElementById("enquireBtn");
        const mobileOpenBtn = document.getElementById("mobileEnquireBtn");
        const closeModalBtn = document.getElementById("headerModalClose");
        
        function openModal() {
            if (modal) modal.classList.add("show");
            document.body.style.overflow = 'hidden';
            closeMobileMenu();
        }
        
        window.closeModal = function() {
            if (modal) modal.classList.remove("show");
            document.body.style.overflow = 'auto';
        };
        
        if (openBtn) openBtn.addEventListener("click", openModal);
        if (mobileOpenBtn) mobileOpenBtn.addEventListener("click", openModal);
        if (closeModalBtn) closeModalBtn.addEventListener("click", closeModal);
        
        window.addEventListener("click", (e) => {
            if (e.target == modal) {
                closeModal();
            }
        });
    });
</script>
