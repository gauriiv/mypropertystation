<?php include 'components/header.php'; ?>

<!-- Swiper CSS + JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<!-- Hero Brand Banner -->
<section class="hero-brand-banner">
    <div class="container">
        <div class="hero-brand-container">
            <img src="assets/images/nav_logo.png" alt="MyPropertyStation Logo" class="hero-brand-logo" style="width: 100px; height: 100px; border-radius: 50%; object-fit: contain; display: block; margin: 0 auto;">
            <span class="hero-brand-name">mypropertystation</span>
        </div>
    </div>
</section>

<!-- Hero Swiper Section -->
<section class="hero-section split-hero">
    <div class="hero-text-side">
        <div class="hero-text-content">
            <span class="hero-left-tag"><i class="fa-solid fa-crown"></i> LUXURY RESIDENTIAL EXPERTS</span>
            <h1 class="hero-left-title">Crafting Premium <br><span>Builder Floors</span></h1>
            <p class="hero-left-desc">Transforming architectural visions into bespoke luxury residences across Faridabad &amp; Delhi NCR.</p>
            <div class="hero-left-actions">
                <a href="#projects" class="hero-left-btn">EXPLORE PROJECTS <i class="fa-solid fa-arrow-right"></i></a>
                <a href="tel:+918000810016" class="hero-left-phone-btn"><i class="fa-solid fa-phone"></i> +91 80008 10016</a>
            </div>
        </div>
    </div>
    
    <div class="hero-image-side">
        <!-- pagination & nav buttons placed INSIDE the swiper container -->
        <div class="swiper heroSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-slide-bg" style="background-image: url('assets/images/hero_brand_name.jpg');"></div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-slide-bg" style="background-image: url('assets/images/home_hero_bg_2.jpg');"></div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-slide-bg" style="background-image: url('assets/images/home_hero_bg_3.jpg');"></div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <!-- Scrolling Ticker Tape -->
    <div id="ticker" class="ticker-section">
        <div class="ticker-track">
            <div class="ticker-item"><i class="fa-solid fa-crown"></i> 100% Verified Legal Title Deeds</div>
            <div class="ticker-item"><i class="fa-solid fa-gem"></i> 0% Hidden Brokerage Commissions</div>
            <div class="ticker-item"><i class="fa-solid fa-vr-cardboard"></i> 4K Ultra-HD Virtual 3D Tours</div>
            <div class="ticker-item"><i class="fa-solid fa-helicopter"></i> VIP Helicopter & Jet Transfers</div>
            <div class="ticker-item"><i class="fa-solid fa-user-shield"></i> Vaulted Identity & Data Privacy</div>
            <div class="ticker-item"><i class="fa-solid fa-infinity"></i> Direct Owner & Developer Escrow</div>
            <div class="ticker-item"><i class="fa-solid fa-crown"></i> 100% Verified Legal Title Deeds</div>
            <div class="ticker-item"><i class="fa-solid fa-gem"></i> 0% Hidden Brokerage Commissions</div>
            <div class="ticker-item"><i class="fa-solid fa-vr-cardboard"></i> 4K Ultra-HD Virtual 3D Tours</div>
            <div class="ticker-item"><i class="fa-solid fa-helicopter"></i> VIP Helicopter & Jet Transfers</div>
            <div class="ticker-item"><i class="fa-solid fa-user-shield"></i> Vaulted Identity & Data Privacy</div>
            <div class="ticker-item"><i class="fa-solid fa-infinity"></i> Direct Owner & Developer Escrow</div>
        </div>
    </div>
</section>

<!-- Curated Collection Section -->
<section id="projects" class="projects-section section-padding">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">CURATED COLLECTION</span>
            <h2 class="section-title">Our Famous <span class="gold-text">Projects</span></h2>
            <p>Discover our meticulously crafted residential spaces that redefine modern luxury.</p>
        </div>
        
        <div class="property-grid">
            <!-- Project 1 -->
            <div class="property-card">
                <div class="property-thumb">
                    <img src="assets/images/zenith_penthouse.jpg" alt="Zenith Sky Penthouses">
                    <span class="property-badge">Pre-Launch</span>
                    <span class="property-price">₹1.28 Cr</span>
                </div>
                <div class="property-details">
                    <h3 class="property-title">The Zenith Sky Penthouses</h3>
                    <p class="property-location"><i class="fa-solid fa-location-dot" style="color: var(--accent-gold);"></i> Worli Skyline, Mumbai</p>
                    <div class="property-features">
                        <span><i class="fa-solid fa-bed"></i> 5 Beds</span>
                        <span><i class="fa-solid fa-bath"></i> 7 Baths</span>
                        <span><i class="fa-solid fa-vector-square"></i> 8,500 SqFt</span>
                    </div>
                </div>
            </div>
            
            <!-- Project 2 -->
            <div class="property-card">
                <div class="property-thumb">
                    <img src="assets/images/aethelgard_island.jpg" alt="Aethelgard Private Islands">
                    <span class="property-badge">Under Construction</span>
                    <span class="property-price">₹2.45 Cr</span>
                </div>
                <div class="property-details">
                    <h3 class="property-title">Aethelgard Private Islands</h3>
                    <p class="property-location"><i class="fa-solid fa-location-dot" style="color: var(--accent-gold);"></i> Goa Coastline, North Goa</p>
                    <div class="property-features">
                        <span><i class="fa-solid fa-bed"></i> 7 Beds</span>
                        <span><i class="fa-solid fa-bath"></i> 9 Baths</span>
                        <span><i class="fa-solid fa-vector-square"></i> 14,200 SqFt</span>
                    </div>
                </div>
            </div>
            
            <!-- Project 3 -->
            <div class="property-card">
                <div class="property-thumb">
                    <img src="assets/images/glass_sanctuary.jpg" alt="Minimalist Glass Sanctuary">
                    <span class="property-badge">Ready To Move</span>
                    <span class="property-price">₹1.62 Cr</span>
                </div>
                <div class="property-details">
                    <h3 class="property-title">The Minimalist Glass Sanctuary</h3>
                    <p class="property-location"><i class="fa-solid fa-location-dot" style="color: var(--accent-gold);"></i> Golf Course Road, Gurugram</p>
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

<!-- Services Grid Section -->
<section id="services" class="services-section">
    <div class="container">
        <div class="services-header">
            <span class="section-subtitle">WHAT WE DO</span>
            <h2 class="section-title">Our Premium <span class="gold-text">Services</span></h2>
        </div>
        
        <div class="services-hero-grid">
            <div class="service-hero-card card-blue">
                <div class="service-icon"><img src="assets/images/3d_buy.png" alt="Buy Property" class="service-3d-icon"></div>
                <h3>Buy Property</h3>
            </div>
            
            <div class="service-hero-card card-green">
                <div class="service-icon"><img src="assets/images/3d_sell.png" alt="Sell Property" class="service-3d-icon"></div>
                <h3>Sell Property</h3>
            </div>
            
            <div class="service-hero-card card-yellow">
                <div class="service-icon"><img src="assets/images/3d_rent.png" alt="Rent Property" class="service-3d-icon"></div>
                <h3>Rent Property</h3>
            </div>
            
            <div class="service-hero-card card-pink">
                <div class="service-icon"><img src="assets/images/3d_valuation.png" alt="Property Valuation" class="service-3d-icon"></div>
                <h3>Property Valuation</h3>
            </div>
        </div>
    </div>
</section>

<!-- City Experience Map Section -->
<section class="projects-map-section">
    <div class="map-bg-glow glow-1"></div>
    <div class="map-bg-glow glow-2"></div>
    <div class="container projects-map-container">
        <div class="p-map-content">
            <div class="p-map-badge">ELITE NCR ADDRESSES</div>
            <h2>Different Experience with <br><span class="gold-text">Different Cities</span></h2>
            <div class="p-map-title-underline"></div>
            <p class="p-map-description">We build luxury architectural masterworks in India's most highly-sought residential neighborhoods. Explore our active premier hubs across Delhi NCR, meticulously designed for multi-generational elegance.</p>
            
            <div class="p-map-stats">
                <div class="stat-card">
                    <h3><span class="stat-number" data-target="25">25</span>+</h3>
                    <p>Premium Projects</p>
                </div>
                <div class="stat-card">
                    <h3><span class="stat-number" data-target="10">10</span>M+</h3>
                    <p>Sq.Ft. Delivered</p>                </div>
            </div>
            
            <a href="projects.php" class="btn btn-primary map-cta-btn">View All Projects <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        
        <div class="elite-gallery-right">
            <div class="elite-grid">
                <!-- City Card 1 -->
                <div class="elite-card elite-card-sm" style="background-image: url('assets/images/zenith_penthouse.jpg');">
                    <div class="elite-overlay"></div>
                    <span class="elite-badge">143+ Properties</span>
                    <div class="elite-info">
                        <h3>Golf Course Road</h3>
                        <p>Premium Residential Hub with Seamless Connectivity.</p>
                        <a href="projects.php" class="elite-link">View Properties &rarr;</a>
                    </div>
                </div>
                
                <!-- City Card 2 -->
                <div class="elite-card elite-card-sm" style="background-image: url('assets/images/aethelgard_island.jpg');">
                    <div class="elite-overlay"></div>
                    <span class="elite-badge">598+ Properties</span>
                    <div class="elite-info">
                        <h3>Dwarka Expressway</h3>
                        <p>Premium location with luxury high-rises and modern infrastructure.</p>
                        <a href="projects.php" class="elite-link">View Properties &rarr;</a>
                    </div>
                </div>
                
                <!-- City Card 3 -->
                <div class="elite-card elite-card-sm" style="background-image: url('assets/images/glass_sanctuary.jpg');">
                    <div class="elite-overlay"></div>
                    <span class="elite-badge">1127+ Properties</span>
                    <div class="elite-info">
                        <h3>New Gurgaon</h3>
                        <p>Emerging hotspot with wide roads and excellent connectivity.</p>
                        <a href="projects.php" class="elite-link">View Properties &rarr;</a>
                    </div>
                </div>
                
                <!-- City Card 4 -->
                <div class="elite-card elite-card-lg" style="background-image: url('assets/images/commercial_hero_1786439354638.jpg');">
                    <div class="elite-overlay"></div>
                    <span class="elite-badge">63+ Properties</span>
                    <div class="elite-info">
                        <h3>Gurgaon/Sohna</h3>
                        <p>Rapidly developing residential zone with affordable luxury.</p>
                        <a href="projects.php" class="elite-link">View Properties &rarr;</a>
                    </div>
                </div>
                
                <!-- City Card 5 -->
                <div class="elite-card elite-card-lg" style="background-image: url('assets/images/luxury_bedroom.jpg');">
                    <div class="elite-overlay"></div>
                    <span class="elite-badge">196+ Properties</span>
                    <div class="elite-info">
                        <h3>Sohna Road</h3>
                        <p>Growing corridor with premium housing and top amenities.</p>
                        <a href="projects.php" class="elite-link">View Properties &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Visual Portfolio / Gallery Section -->
<section class="gallery-section" id="gallery-portfolio">
    <div class="container">
        <div class="gallery-card-wrapper">
            <div class="gallery-header">
                <span class="gallery-micro-tag">VISUAL PORTFOLIO</span>
                <h2 class="gallery-title">Our Curated <span>Collections</span></h2>
                <div class="gallery-title-underline"></div>
                <p class="gallery-subtitle">Take an exclusive visual tour of our exquisitely designed builder floors, luxury interiors, and premium elevations executed across Faridabad.</p>
            </div>
            
            <div class="gallery-grid">
                <div class="gallery-card" onclick="openLightbox(0)">
                    <img src="assets/images/home_hero_bg.jpg" alt="Gallery Image 1">
                    <div class="gallery-overlay"><i class="fa-solid fa-expand"></i></div>
                </div>
                <div class="gallery-card" onclick="openLightbox(1)">
                    <img src="assets/images/luxury_bedroom.jpg" alt="Gallery Image 2">
                    <div class="gallery-overlay"><i class="fa-solid fa-expand"></i></div>
                </div>
                <div class="gallery-card" onclick="openLightbox(2)">
                    <img src="assets/images/commercial_hero_1786439354638.jpg" alt="Gallery Image 3">
                    <div class="gallery-overlay"><i class="fa-solid fa-expand"></i></div>
                </div>
                <div class="gallery-card" onclick="openLightbox(3)">
                    <img src="assets/images/zenith_penthouse.jpg" alt="Gallery Image 4">
                    <div class="gallery-overlay"><i class="fa-solid fa-expand"></i></div>
                </div>
                <div class="gallery-card" onclick="openLightbox(4)">
                    <img src="assets/images/aethelgard_island.jpg" alt="Gallery Image 5">
                    <div class="gallery-overlay"><i class="fa-solid fa-expand"></i></div>
                </div>
                <div class="gallery-card" onclick="openLightbox(5)">
                    <img src="assets/images/glass_sanctuary.jpg" alt="Gallery Image 6">
                    <div class="gallery-overlay"><i class="fa-solid fa-expand"></i></div>
                </div>
                <div class="gallery-card" onclick="openLightbox(6)">
                    <img src="assets/images/luxury_interior.jpg" alt="Gallery Image 7">
                    <div class="gallery-overlay"><i class="fa-solid fa-expand"></i></div>
                </div>
                <div class="gallery-card" onclick="openLightbox(7)">
                    <img src="assets/images/pool_deck.jpg" alt="Gallery Image 8">
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

<!-- Why We Are Preferred Section -->
<section id="visionary" class="visionary-section">
    <div class="container">
        <div class="visionary-container">
            <div class="visionary-left">
                <div class="visionary-frame-box" style="padding: 1rem;">
                    <img src="assets/images/dream_house_tagline.jpg" alt="Your Dream House Search Ends Here" style="width: 100%; border-radius: 12px; display: block; box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
                </div>
            </div>
            
            <div class="visionary-right">
                <h2 class="visionary-heading">
                    Why We Are<br>
                    <span>Preferred</span>
                </h2>
                <div class="visionary-heading-underline"></div>
                <p class="visionary-intro">
                    With over two decades of uncompromising building mastery and absolute dedication to client trust, our leadership has shaped the landscape of premium housing and builder floors in Faridabad, Delhi NCR. Under this guidance, MyPropertyStation has become synonymous with elite engineering, transparent relationships, and premium architectural luxury.
                </p>
                
                <div class="visionary-features">
                    <div class="v-feature-item">
                        <div class="v-icon-box">
                            <i class="fa-solid fa-gem"></i>
                        </div>
                        <div class="v-feature-text">
                            <h4>Architectural Distinction</h4>
                            <p>Delivering European-inspired exterior aesthetics, spacious high-ceiling layouts, and premium ventilation profiles that elevate standard of living.</p>
                        </div>
                    </div>
                    
                    <div class="v-feature-item">
                        <div class="v-icon-box">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <div class="v-feature-text">
                            <h4>Zero-Compromise Materials</h4>
                            <p>Constructing multi-generational, age-proof homes utilizing only the highest grade certified grade concrete, reinforced premium steels, and premium marble slabs.</p>
                        </div>
                    </div>
                    
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
                
                <div class="visionary-quote-card">
                    <p class="v-quote-text">"At MyPropertyStation, we do not simply build upscale residential floors; we craft luxury spaces where families construct lifetimes of memories. Quality is our signature, and your trust is our core foundation."</p>
                    <span class="v-quote-author">— EXECUTIVE LEADERSHIP</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission Section -->
<section class="vision-mission-section">
    <div class="container">
        <div class="vm-grid">
            <div class="vm-card" style="grid-column: 1 / -1;">
                <h3 class="vm-title" style="text-align: center;">Our <span>Achievements</span></h3>
                <div class="vm-underline" style="margin: 0 auto 2rem;"></div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem;">
                    <div>
                        <p class="vm-intro">To be the premier real estate group in the region by paving a pathway for the finest level of quality construction, and to consistently design modern, sustainable, and high-end residential builder floors.</p>
                        <ul class="vm-list">
                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                <span>Build lifelong relationships founded on commitment, trust, and absolute integrity.</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                <span>Consistently remain the preferred choice for premium luxury buyer requirements.</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                <span>Combine architectural beauty with affordable engineering standards.</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div>
                        <p class="vm-intro">MyPropertyStation is working on a mission of establishing an atmosphere of trust, clear transparency, and zero-compromise professionalism inside the regional real estate market.</p>
                        <ul class="vm-list">
                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                <span>Exceed the limits of client expectations with every residential floor layout delivered.</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                <span>Ensure strict adherence to timelines and professional code ethics across site casting actions.</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                <span>Integrate ongoing architectural innovations and environment-friendly building materials.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>    
    // Swiper Hero Carousel setup
    document.addEventListener('DOMContentLoaded', function () {        
        new Swiper(".heroSwiper", {
            spaceBetween: 0,
            centeredSlides: true,
            effect: "slide",
            speed: 2000,
            autoplay: { delay: 2000, disableOnInteraction: false },
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
                if (data && document.getElementById("tooltip-title")) {                    
                    document.getElementById("tooltip-title").textContent = data.title;                    
                    document.querySelector(".tooltip-badge").textContent = data.badge;                    
                    document.getElementById("tooltip-desc").textContent = data.desc;                    
                    document.getElementById("tooltip-status").textContent = data.status;                    
                    document.getElementById("tooltip-price").textContent = data.price;                
                }            
            });        
        });    
    });    

    // Gallery Lightbox — 8 images to match all 8 gallery cards
    const galleryImages = [
        "assets/images/home_hero_bg.jpg",
        "assets/images/luxury_bedroom.jpg",
        "assets/images/commercial_hero_1786439354638.jpg",
        "assets/images/zenith_penthouse.jpg",
        "assets/images/aethelgard_island.jpg",
        "assets/images/glass_sanctuary.jpg",
        "assets/images/luxury_interior.jpg",
        "assets/images/pool_deck.jpg"
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