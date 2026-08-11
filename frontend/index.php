<?php include 'components/header.php'; ?>

<!-- Swiper & GSAP Libraries -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<!-- ==========================================
     1. HERO SWIPER CAROUSEL SECTION
     ========================================== -->
<section class="hero-section">
    <div class="hero-wrapper">
        <!-- Left Side Text Line Overlay -->
        <div class="hero-left-overlay">
            <span class="hero-left-tag"><i class="fa-solid fa-crown"></i> LUXURY RESIDENTIAL EXPERTS</span>
            <h1 class="hero-left-title">Crafting Premium <br><span>Builder Floors</span></h1>
            <p class="hero-left-desc">Transforming architectural visions into bespoke luxury residences across Faridabad & Delhi NCR.</p>
            <div class="hero-left-actions">
                <a href="#projects" class="hero-left-btn">EXPLORE PROJECTS <i class="fa-solid fa-arrow-right"></i></a>
                <a href="tel:+919999566126" class="hero-left-phone-btn"><i class="fa-solid fa-phone"></i> +91 99995 66126</a>
            </div>
        </div>

        <div class="swiper heroSwiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="hero-slide-bg" style="background-image: url('assets/images/home_hero_bg.jpg');"></div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="hero-slide-bg" style="background-image: url('assets/images/home_hero_bg_2.jpg');"></div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="hero-slide-bg" style="background-image: url('assets/images/home_hero_bg_3.jpg');"></div>
                </div>
            </div>

            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

<!-- ==========================================
     LINEAR MOVING TICKER (RIGHT TO LEFT)
     ========================================== -->
<div id="ticker" class="ticker-section">
    <div class="ticker-track">
        <div class="ticker-item"><i class="fa-solid fa-crown"></i> 100% Verified Legal Title Deeds</div>
        <div class="ticker-item"><i class="fa-solid fa-gem"></i> 0% Hidden Brokerage Commissions</div>
        <div class="ticker-item"><i class="fa-solid fa-vr-cardboard"></i> 4K Ultra-HD Virtual 3D Tours</div>
        <div class="ticker-item"><i class="fa-solid fa-helicopter"></i> VIP Helicopter & Jet Transfers</div>
        <div class="ticker-item"><i class="fa-solid fa-user-shield"></i> Vaulted Identity & Data Privacy</div>
        <div class="ticker-item"><i class="fa-solid fa-infinity"></i> Direct Owner & Developer Escrow</div>
        <!-- Duplicate for loop -->
        <div class="ticker-item"><i class="fa-solid fa-crown"></i> 100% Verified Legal Title Deeds</div>
        <div class="ticker-item"><i class="fa-solid fa-gem"></i> 0% Hidden Brokerage Commissions</div>
        <div class="ticker-item"><i class="fa-solid fa-vr-cardboard"></i> 4K Ultra-HD Virtual 3D Tours</div>
        <div class="ticker-item"><i class="fa-solid fa-helicopter"></i> VIP Helicopter & Jet Transfers</div>
        <div class="ticker-item"><i class="fa-solid fa-user-shield"></i> Vaulted Identity & Data Privacy</div>
        <div class="ticker-item"><i class="fa-solid fa-infinity"></i> Direct Owner & Developer Escrow</div>
    </div>
</div>

<!-- ==========================================
     2. ABOUT US SECTION (EXACT MATCH)
     ========================================== -->
<section id="about" class="about-section">
    <div class="container">
        <!-- Centered Section Header -->
        <div class="about-section-header">
            <h2 class="about-title-italic">About <span>MyPropertyStation</span></h2>
            <div class="about-title-underline"></div>
        </div>

        <div class="about-container">
            <!-- Left Side: Framed Image Visual -->
            <div class="about-left">
                <div class="about-image-frame-box">
                    <div class="about-image-wrapper">
                        <img src="assets/images/about_office_facade.jpg" alt="MyPropertyStation Corporate Office Facade" class="about-single-img">
                        <div class="about-image-card">
                            <span class="card-number">25+</span>
                            <span class="card-text">YEARS OF EXCELLENCE</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Text Content -->
            <div class="about-right">
                <p class="about-lead">A Legacy of Trust, Transparency & Architectural Brilliance in Faridabad.</p>
                <p><strong>MyPropertyStation</strong> is a premier real estate construction and consultancy company dedicated to delivering high-quality residential spaces and premium builder floors in Faridabad, Delhi NCR. Under the visionary leadership of our founders, we have pioneered the standard of luxury living by combining world-class materials, European-inspired elevation designs, and timely project delivery.</p>
                <p>Our focus is to build spacious, aesthetically rich, and age-proof homes that guarantee long-term value for our clients. Through transparent communication, dedicated after-sales support, and a customer-first approach, we make the journey of owning your dream home absolute peace of mind.</p>
                <div class="about-cta-wrapper">
                    <a href="#contact" class="about-btn">EXPLORE OUR JOURNEY</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     3. PRESENCE MAP SECTION (INTERACTIVE GSAP)
     ========================================== -->
<section class="projects-map-section">
    <div class="map-bg-glow glow-1"></div>
    <div class="map-bg-glow glow-2"></div>

    <div class="container projects-map-container">
        <!-- Left Side: Explorer & Stats -->
        <div class="p-map-content">
            <div class="p-map-badge">ELITE NCR ADDRESSES</div>
            <h2>Presence of <br><span class="gold-text">MyPropertyStation</span></h2>
            <div class="p-map-title-underline"></div>
            
            <p class="p-map-description">We build luxury architectural masterworks in India's most highly-sought residential neighborhoods. Explore our active premier hubs across Delhi NCR, meticulously designed for multi-generational elegance.</p>
            
            <!-- Location Tabs -->
            <div class="map-location-selector">
                <div class="loc-card active" data-location="faridabad">
                    <span class="loc-dot"></span>
                    <div class="loc-card-info">
                        <h4>Faridabad</h4>
                        <span class="loc-count">15+ Floors</span>
                    </div>
                </div>
                <div class="loc-card" data-location="gurugram">
                    <span class="loc-dot"></span>
                    <div class="loc-card-info">
                        <h4>Gurugram</h4>
                        <span class="loc-count">8+ Projects</span>
                    </div>
                </div>
                <div class="loc-card" data-location="delhi">
                    <span class="loc-dot"></span>
                    <div class="loc-card-info">
                        <h4>South Delhi</h4>
                        <span class="loc-count">5+ Floors</span>
                    </div>
                </div>
                <div class="loc-card" data-location="noida">
                    <span class="loc-dot"></span>
                    <div class="loc-card-info">
                        <h4>Noida NCR</h4>
                        <span class="loc-count">Upcoming</span>
                    </div>
                </div>
            </div>

            <!-- Stats Counters -->
            <div class="p-map-stats">
                <div class="stat-card">
                    <h3><span class="stat-number" data-target="25">25</span>+</h3>
                    <p>Premium Projects</p>
                </div>
                <div class="stat-card">
                    <h3><span class="stat-number" data-target="10">10</span>M+</h3>
                    <p>Sq.Ft. Delivered</p>
                </div>
            </div>

            <a href="projects.php" class="btn btn-primary map-cta-btn">View All Projects <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <!-- Right Side: Interactive Tooltip Box -->
        <div class="p-map-visual">
            <div class="map-tooltip-box">
                <div class="tooltip-header">
                    <span class="tooltip-badge">CORE LUXURY HUB</span>
                    <h4 id="tooltip-title">Faridabad</h4>
                </div>
                <p id="tooltip-desc">15+ Handcrafted premium builder floors in elite Sectors 14, 15, 21, and 85. Our main center of design excellence featuring European architectural elevations, marble flooring, and modular setups.</p>
                <div class="tooltip-footer">
                    <div class="tooltip-stat">
                        <span class="t-label">Status</span>
                        <span class="t-val text-green" id="tooltip-status">Ready to Move & Ongoing</span>
                    </div>
                    <div class="tooltip-stat">
                        <span class="t-label">Price Range</span>
                        <span class="t-val" id="tooltip-price">₹1.5Cr - ₹4.5Cr</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     4. CURATED BUILDER FLOORS CAROUSEL
     ========================================== -->
<section id="projects" class="projects-section section-padding">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">CURATED COLLECTION</span>
            <h2 class="section-title">Our Premium <span class="gold-text">Builder Floors</span></h2>
            <p style="color: var(--text-secondary);">Discover our meticulously crafted residential spaces that redefine modern luxury.</p>
        </div>

        <div class="property-grid">
            <div class="property-card">
                <div class="property-thumb">
                    <img src="assets/images/project_1_1786439384557.jpg" alt="Zenith Sky Penthouses">
                    <span class="property-badge">Pre-Launch</span>
                    <span class="property-price">$12,800,000</span>
                </div>
                <div class="property-details">
                    <h3 class="property-title">The Zenith Sky Penthouses</h3>
                    <p class="property-location"><i class="fa-solid fa-location-dot" style="color: var(--accent-gold);"></i> Manhattan Skyline, NYC</p>
                    <div class="property-features">
                        <span><i class="fa-solid fa-bed"></i> 5 Beds</span>
                        <span><i class="fa-solid fa-bath"></i> 7 Baths</span>
                        <span><i class="fa-solid fa-vector-square"></i> 8,500 SqFt</span>
                    </div>
                </div>
            </div>

            <div class="property-card">
                <div class="property-thumb">
                    <img src="assets/images/project_2_1786439743827.jpg" alt="Aethelgard Private Islands">
                    <span class="property-badge">Under Construction</span>
                    <span class="property-price">$24,500,000</span>
                </div>
                <div class="property-details">
                    <h3 class="property-title">Aethelgard Private Islands</h3>
                    <p class="property-location"><i class="fa-solid fa-location-dot" style="color: var(--accent-gold);"></i> Palm Jumeirah, Dubai</p>
                    <div class="property-features">
                        <span><i class="fa-solid fa-bed"></i> 7 Beds</span>
                        <span><i class="fa-solid fa-bath"></i> 9 Baths</span>
                        <span><i class="fa-solid fa-vector-square"></i> 14,200 SqFt</span>
                    </div>
                </div>
            </div>

            <div class="property-card">
                <div class="property-thumb">
                    <img src="assets/images/property_3.jpg" alt="Minimalist Glass Sanctuary">
                    <span class="property-badge">Ready To Move</span>
                    <span class="property-price">$16,200,000</span>
                </div>
                <div class="property-details">
                    <h3 class="property-title">The Minimalist Glass Sanctuary</h3>
                    <p class="property-location"><i class="fa-solid fa-location-dot" style="color: var(--accent-gold);"></i> Beverly Hills, California</p>
                    <div class="property-features">
                        <span><i class="fa-solid fa-bed"></i> 6 Beds</span>
                        <span><i class="fa-solid fa-bath"></i> 8 Baths</span>
                        <span><i class="fa-solid fa-vector-square"></i> 10,800 SqFt</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     5. FOUNDER'S VISION SECTION (EXACT MATCH WITH PLACEHOLDER)
     ========================================== -->
<section id="visionary" class="visionary-section">
    <div class="container">
        <div class="visionary-container">
            <!-- Left Side: Placeholder Graphic Card framed in Gold -->
            <div class="visionary-left">
                <div class="visionary-frame-box">
                    <div class="visionary-placeholder-card">
                        <div class="ph-card-header">
                            <img src="assets/images/nav_logo.png" alt="MyPropertyStation Logo" class="ph-logo-img">
                            <span class="ph-brand-name">MYPROPERTY<span class="gold-text">STATION</span></span>
                        </div>
                        
                        <div class="ph-card-body">
                            <div class="ph-avatar-icon">
                                <i class="fa-solid fa-user-tie"></i>
                            </div>
                            <h3 class="ph-title">Meet the Visionary Behind</h3>
                            <h4 class="ph-subbrand">MyPropertyStation</h4>
                            <p class="ph-desc">Decades of building mastery, seamless happy families, and a commitment to honest property deals.</p>
                        </div>

                        <!-- Overlapping Dark Card at Bottom Right -->
                        <div class="visionary-image-card">
                            <span class="v-card-name">Leadership Team</span>
                            <span class="v-card-title">FOUNDER & MANAGING DIRECTOR</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Content -->
            <div class="visionary-right">
                <h2 class="visionary-heading">
                    Meet the Visionary Behind<br>
                    <span>MyPropertyStation</span>
                </h2>
                <div class="visionary-heading-underline"></div>

                <p class="visionary-intro">
                    With over two decades of uncompromising building mastery and absolute dedication to client trust, our leadership has shaped the landscape of premium housing and builder floors in Faridabad, Delhi NCR. Under this guidance, MyPropertyStation has become synonymous with elite engineering, transparent relationships, and premium architectural luxury.
                </p>

                <!-- 3 Feature Points -->
                <div class="visionary-features">
                    <!-- Point 1 -->
                    <div class="v-feature-item">
                        <div class="v-icon-box">
                            <i class="fa-solid fa-gem"></i>
                        </div>
                        <div class="v-feature-text">
                            <h4>Architectural Distinction</h4>
                            <p>Delivering European-inspired exterior aesthetics, spacious high-ceiling layouts, and premium ventilation profiles that elevate standard of living.</p>
                        </div>
                    </div>

                    <!-- Point 2 -->
                    <div class="v-feature-item">
                        <div class="v-icon-box">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <div class="v-feature-text">
                            <h4>Zero-Compromise Materials</h4>
                            <p>Constructing multi-generational, age-proof homes utilizing only the highest grade certified grade concrete, reinforced premium steels, and premium marble slabs.</p>
                        </div>
                    </div>

                    <!-- Point 3 -->
                    <div class="v-feature-item">
                        <div class="v-icon-box">
                            <i class="fa-solid fa-handshake"></i>
                        </div>
                        <div class="v-feature-text">
                            <h4>Radical Transparency</h4>
                            <p>Strict commitment to delivery timelines, crystal clear paperwork, and post-delivery home maintenance assistance that fosters absolute peace of mind.</p>
                        </div>
                    </div>
                </div>

                <!-- Bottom Quote Card -->
                <div class="visionary-quote-card">
                    <p class="v-quote-text">"At MyPropertyStation, we do not simply build upscale residential floors; we craft luxury spaces where families construct lifetimes of memories. Quality is our signature, and your trust is our core foundation."</p>
                    <span class="v-quote-author">— EXECUTIVE LEADERSHIP</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     6. SPECIFICATIONS & CONSTRUCTION PHILOSOPHY (EXACT MATCH)
     ========================================== -->
<section id="specifications" class="philosophy-section">
    <div class="container">
        <!-- Top Pill Tag -->
        <div class="philosophy-tag-wrap">
            <span class="philosophy-pill-badge">OUR CONSTRUCTION PHILOSOPHY</span>
        </div>

        <div class="philosophy-container">
            <!-- Left Side: Framed Poster Image -->
            <div class="philosophy-left">
                <div class="philosophy-frame-box">
                    <div class="philosophy-img-wrapper">
                        <img src="assets/images/construction_philosophy.jpg" alt="Constant Discussion & Continuous Improvement" class="philosophy-poster-img">
                        <div class="philosophy-image-card">
                            <span class="ph-card-tag">ON-SITE DISCUSSIONS</span>
                            <span class="ph-card-title">Refining Architectural Excellence</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Content -->
            <div class="philosophy-right">
                <h2 class="philosophy-heading">
                    Constant Discussion &<br>
                    <span>Continuous Improvement</span>
                </h2>
                <div class="philosophy-heading-underline"></div>

                <p class="philosophy-intro">
                    At <strong>MyPropertyStation</strong>, structural superiority is never an accident—it is the direct result of rigorous, daily on-site collaboration. By engaging in constant team discussions, evaluating micro-details, and driving a culture of continuous improvement, our architects, builders, and structural engineers ensure every brick laid exceeds global benchmarks.
                </p>

                <!-- 3 Feature Points -->
                <div class="philosophy-features">
                    <!-- Feature 1 -->
                    <div class="ph-feature-item">
                        <div class="ph-icon-box">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <div class="ph-feature-text">
                            <h4>Daily On-Site Brainstorming</h4>
                            <p>Daily alignment audits between execution engineers and architects ensure flawless translation of design schematics to the physical structure.</p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="ph-feature-item">
                        <div class="ph-icon-box">
                            <i class="fa-solid fa-arrows-rotate"></i>
                        </div>
                        <div class="ph-feature-text">
                            <h4>Feedback-Driven Material Selection</h4>
                            <p>We continuously review structural materials, upgrading to premium steel aggregates, custom vitrified tiles, and eco-friendly insulating paint coats.</p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="ph-feature-item">
                        <div class="ph-icon-box">
                            <i class="fa-solid fa-sliders"></i>
                        </div>
                        <div class="ph-feature-text">
                            <h4>Quality Control Inspections</h4>
                            <p>A multi-stage quality review before casting concrete slabs, running concealed pipelines, and laying premium stone floor borders.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     7. ARCHITECTURAL GALLERY PORTFOLIO & LIGHTBOX
     ========================================== -->
<section class="gallery-section" id="gallery-portfolio">
    <div class="container">
        <!-- Floating Dark Container Card -->
        <div class="gallery-card-wrapper">
            <div class="gallery-header">
                <span class="gallery-micro-tag">VISUAL PORTFOLIO</span>
                <h2 class="gallery-title">Our Architectural <span>Gallery</span></h2>
                <div class="gallery-title-underline"></div>
                <p class="gallery-subtitle">Take an exclusive visual tour of our exquisitely designed builder floors, luxury interiors, and premium elevations executed across Faridabad.</p>
            </div>

            <div class="gallery-grid">
                <div class="gallery-card" onclick="openLightbox(0)">
                    <img src="assets/images/home_hero_bg.jpg" alt="Gallery Image 1">
                    <div class="gallery-overlay"><i class="fa-solid fa-expand"></i></div>
                </div>
                <div class="gallery-card" onclick="openLightbox(1)">
                    <img src="assets/images/projects_hero_1786439305331.jpg" alt="Gallery Image 2">
                    <div class="gallery-overlay"><i class="fa-solid fa-expand"></i></div>
                </div>
                <div class="gallery-card" onclick="openLightbox(2)">
                    <img src="assets/images/commercial_hero_1786439354638.jpg" alt="Gallery Image 3">
                    <div class="gallery-overlay"><i class="fa-solid fa-expand"></i></div>
                </div>
                <div class="gallery-card" onclick="openLightbox(3)">
                    <img src="assets/images/project_1_1786439384557.jpg" alt="Gallery Image 4">
                    <div class="gallery-overlay"><i class="fa-solid fa-expand"></i></div>
                </div>
                <div class="gallery-card" onclick="openLightbox(4)">
                    <img src="assets/images/project_2_1786439743827.jpg" alt="Gallery Image 5">
                    <div class="gallery-overlay"><i class="fa-solid fa-expand"></i></div>
                </div>
                <div class="gallery-card" onclick="openLightbox(5)">
                    <img src="assets/images/property_3.jpg" alt="Gallery Image 6">
                    <div class="gallery-overlay"><i class="fa-solid fa-expand"></i></div>
                </div>
                <div class="gallery-card" onclick="openLightbox(6)">
                    <img src="assets/images/home_hero_bg_2.jpg" alt="Gallery Image 7">
                    <div class="gallery-overlay"><i class="fa-solid fa-expand"></i></div>
                </div>
                <div class="gallery-card" onclick="openLightbox(7)">
                    <img src="assets/images/home_hero_bg_3.jpg" alt="Gallery Image 8">
                    <div class="gallery-overlay"><i class="fa-solid fa-expand"></i></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div id="galleryLightbox" class="gallery-lightbox">
    <button class="lightbox-close" onclick="closeLightbox()">&times;</button>
    <button class="lightbox-nav-btn lightbox-prev" onclick="prevSlide(event)"><i class="fa-solid fa-chevron-left"></i></button>
    <button class="lightbox-nav-btn lightbox-next" onclick="nextSlide(event)"><i class="fa-solid fa-chevron-right"></i></button>
    <div class="lightbox-content">
        <img id="lightboxImg" src="" alt="Enlarged gallery view">
    </div>
</div>

<script>
    // Swiper Hero Carousel setup
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper(".heroSwiper", {
            spaceBetween: 0,
            centeredSlides: true,
            effect: "fade",
            fadeEffect: { crossFade: true },
            speed: 1000,
            autoplay: { delay: 5000, disableOnInteraction: false },
            pagination: { el: ".swiper-pagination", clickable: true },
            navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
            loop: true
        });

        // Interactive Map Location selector logic
        const locationData = {
            faridabad: {
                title: "Faridabad",
                badge: "CORE LUXURY HUB",
                desc: "15+ Handcrafted premium builder floors in elite Sectors 14, 15, 21, and 85. Featuring European elevations and marble flooring.",
                status: "Ready to Move & Ongoing",
                price: "₹1.5Cr - ₹4.5Cr"
            },
            gurugram: {
                title: "Gurugram Hub",
                badge: "PREMIUM ELITE SECTOR",
                desc: "8+ Ultra-luxury builder floors along Golf Course Extension Road. Automated smart home integrations and high-end societies.",
                status: "Ongoing & Booking Open",
                price: "₹2.5Cr - ₹6.5Cr"
            },
            delhi: {
                title: "South Delhi Hub",
                badge: "ULTRA-LUXURY COLLECTION",
                desc: "5+ Super premium architectural residences in Greater Kailash, Vasant Vihar, and Panchsheel.",
                status: "Exclusive Collaboration",
                price: "₹4.5Cr - ₹12.0Cr"
            },
            noida: {
                title: "Noida NCR",
                badge: "MODERN RESIDENCES",
                desc: "Upcoming luxury residences positioned in Sectors 44, 105, and 150 with modern clubhouses and high-speed lifts.",
                status: "Pre-Launch Bookings",
                price: "₹1.8Cr - ₹3.8Cr"
            }
        };

        const locCards = document.querySelectorAll(".loc-card");
        locCards.forEach(card => {
            card.addEventListener("click", function() {
                locCards.forEach(c => c.classList.remove("active"));
                this.classList.add("active");
                const key = this.getAttribute("data-location");
                const data = locationData[key];
                if (data) {
                    document.getElementById("tooltip-title").textContent = data.title;
                    document.querySelector(".tooltip-badge").textContent = data.badge;
                    document.getElementById("tooltip-desc").textContent = data.desc;
                    document.getElementById("tooltip-status").textContent = data.status;
                    document.getElementById("tooltip-price").textContent = data.price;
                }
            });
        });
    });

    // Gallery Lightbox
    const galleryImages = [
        "assets/images/home_hero_bg.jpg",
        "assets/images/projects_hero_1786439305331.jpg",
        "assets/images/commercial_hero_1786439354638.jpg",
        "assets/images/project_1_1786439384557.jpg",
        "assets/images/project_2_1786439743827.jpg",
        "assets/images/property_3.jpg"
    ];
    let activeIndex = 0;
    const lightbox = document.getElementById('galleryLightbox');
    const lightboxImg = document.getElementById('lightboxImg');

    function openLightbox(index) {
        activeIndex = index;
        lightboxImg.src = galleryImages[activeIndex];
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
    }

    function nextSlide(e) {
        if (e) e.stopPropagation();
        activeIndex = (activeIndex + 1) % galleryImages.length;
        lightboxImg.src = galleryImages[activeIndex];
    }

    function prevSlide(e) {
        if (e) e.stopPropagation();
        activeIndex = (activeIndex - 1 + galleryImages.length) % galleryImages.length;
        lightboxImg.src = galleryImages[activeIndex];
    }
</script>

<?php include 'components/footer.php'; ?>
