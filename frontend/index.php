<?php include 'components/header.php'; ?>

<!-- ==========================================
     HERO SECTION (FULLSCREEN 100VH)
     ========================================== -->
<section id="hero" class="hero-section">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>
    
    <div class="container hero-content">
        <div class="hero-badge reveal">
            <i class="fa-solid fa-gem"></i> Exclusive Ultra-Luxury Real Estate
        </div>
        
        <h1 class="hero-title reveal">
            Architecture That Defines <span style="color: #000;">Exceptional Living</span>
        </h1>
        
        <p class="hero-subtitle reveal">
            Discover handpicked waterfront villas, sky penthouses, and private estates curated for discerning global buyers.
        </p>

        <!-- Real Estate Search Filter Widget -->
        <div class="search-widget reveal">
            <div class="search-tabs">
                <button class="tab-btn active"><i class="fa-solid fa-key"></i> Buy Property</button>
                <button class="tab-btn"><i class="fa-solid fa-building-user"></i> Rent Luxury</button>
                <button class="tab-btn"><i class="fa-solid fa-tag"></i> Sell Estate</button>
            </div>
            
            <form class="search-grid" onsubmit="event.preventDefault();">
                <div class="search-field">
                    <label><i class="fa-solid fa-location-dot" style="color: var(--accent-gold);"></i> Location / Destination</label>
                    <select class="search-input">
                        <option>Beverly Hills, California</option>
                        <option>Palm Jumeirah, Dubai</option>
                        <option>Monaco, French Riviera</option>
                        <option>Manhattan Penthouse, NYC</option>
                        <option>Zurich Lakefront, Switzerland</option>
                    </select>
                </div>

                <div class="search-field">
                    <label><i class="fa-solid fa-house" style="color: var(--accent-gold);"></i> Property Type</label>
                    <select class="search-input">
                        <option>Waterfront Villa</option>
                        <option>Sky Penthouse</option>
                        <option>Golf Estate</option>
                        <option>Private Island</option>
                    </select>
                </div>

                <div class="search-field">
                    <label><i class="fa-solid fa-dollar-sign" style="color: var(--accent-gold);"></i> Price Range</label>
                    <select class="search-input">
                        <option>$3,000,000 - $5,000,000</option>
                        <option>$5,000,000 - $10,000,000</option>
                        <option>$10,000,000 - $25,000,000</option>
                        <option>$25,000,000+</option>
                    </select>
                </div>

                <button type="submit" class="btn-gold search-submit-btn">
                    <i class="fa-solid fa-magnifying-glass"></i> Explore
                </button>
            </form>
        </div>
    </div>

    <!-- Animated Scroll Down Indicator -->
    <a href="#ticker" class="scroll-down-indicator" aria-label="Scroll down">
        <i class="fa-solid fa-chevron-down"></i>
    </a>
</section>

<!-- ==========================================
     FAMOUS CITIES
     ========================================== -->
<section id="famous-cities" class="section-padding">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-subtitle">Global Reach</span>
            <h2 class="section-title">Property from <span class="gold-text">Famous Cities</span></h2>
        </div>
        <div class="cities-grid">
            <div class="city-card reveal"><i class="fa-solid fa-city city-icon"></i><span class="city-name">Mumbai</span></div>
            <div class="city-card reveal"><i class="fa-solid fa-building city-icon"></i><span class="city-name">Delhi</span></div>
            <div class="city-card reveal"><i class="fa-solid fa-monument city-icon"></i><span class="city-name">Bangalore</span></div>
            <div class="city-card reveal"><i class="fa-solid fa-hotel city-icon"></i><span class="city-name">Hyderabad</span></div>
            <div class="city-card reveal"><i class="fa-solid fa-tree-city city-icon"></i><span class="city-name">Chennai</span></div>
            
            <div class="city-card reveal"><i class="fa-solid fa-bridge-water city-icon"></i><span class="city-name">Kolkata</span></div>
            <div class="city-card reveal"><i class="fa-solid fa-umbrella-beach city-icon"></i><span class="city-name">Goa</span></div>
            <div class="city-card reveal"><i class="fa-solid fa-building-columns city-icon"></i><span class="city-name">Pune</span></div>
            <div class="city-card reveal"><i class="fa-solid fa-archway city-icon"></i><span class="city-name">Ahmedabad</span></div>
            <div class="city-card reveal"><i class="fa-solid fa-gopuram city-icon"></i><span class="city-name">Jaipur</span></div>
            
            <div class="city-card reveal"><i class="fa-solid fa-tower-observation city-icon"></i><span class="city-name">Surat</span></div>
            <div class="city-card reveal"><i class="fa-solid fa-water city-icon"></i><span class="city-name">Lucknow</span></div>
            <div class="city-card reveal"><i class="fa-solid fa-ship city-icon"></i><span class="city-name">Kochi</span></div>
            <div class="city-card reveal"><i class="fa-solid fa-landmark-dome city-icon"></i><span class="city-name">Chandigarh</span></div>
            <div class="city-card reveal"><i class="fa-solid fa-mountain-city city-icon"></i><span class="city-name">Indore</span></div>
        </div>
    </div>
</section>

<!-- ==========================================
     REAL ESTATE SERVICES
     ========================================== -->
<section id="real-estate-services" class="section-padding" style="background: rgba(18, 24, 38, 0.02);">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-subtitle">Comprehensive Solutions</span>
            <h2 class="section-title">Real Estate <span class="gold-text">Services</span></h2>
        </div>
        <div class="services-grid">
            <div class="service-card reveal">
                <div class="service-icon-wrapper"><i class="fa-solid fa-user-tie"></i></div>
                <h3 class="service-title">Agents</h3>
            </div>
            <div class="service-card reveal">
                <div class="service-icon-wrapper"><i class="fa-solid fa-helmet-safety"></i></div>
                <h3 class="service-title">Builders</h3>
            </div>
            <div class="service-card reveal">
                <div class="service-icon-wrapper"><i class="fa-solid fa-compass-drafting"></i></div>
                <h3 class="service-title">Architects</h3>
            </div>
            <div class="service-card reveal">
                <div class="service-icon-wrapper"><i class="fa-solid fa-couch"></i></div>
                <h3 class="service-title">Interiors</h3>
            </div>
            <div class="service-card reveal">
                <div class="service-icon-wrapper"><i class="fa-solid fa-dharmachakra"></i></div>
                <h3 class="service-title">Vastu Consultant</h3>
            </div>
            <div class="service-card reveal">
                <div class="service-icon-wrapper"><i class="fa-solid fa-file-contract"></i></div>
                <h3 class="service-title">Building Contract</h3>
            </div>
            <div class="service-card reveal">
                <div class="service-icon-wrapper"><i class="fa-solid fa-house-circle-check"></i></div>
                <h3 class="service-title">Home Inspect</h3>
            </div>
            <div class="service-card reveal">
                <div class="service-icon-wrapper"><i class="fa-solid fa-handshake-angle"></i></div>
                <h3 class="service-title">Property Consultant</h3>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     LINEAR MOVING TICKER (LEFT TO RIGHT)
     ========================================== -->
<div id="ticker" class="ticker-section">
    <div class="ticker-track">
        <div class="ticker-item"><i class="fa-solid fa-crown"></i> 100% Verified Legal Title Deeds</div>
        <div class="ticker-item"><i class="fa-solid fa-gem"></i> 0% Hidden Brokerage Commissions</div>
        <div class="ticker-item"><i class="fa-solid fa-vr-cardboard"></i> 4K Ultra-HD Virtual 3D Tours</div>
        <div class="ticker-item"><i class="fa-solid fa-helicopter"></i> VIP Helicopter & Jet Transfers</div>
        <div class="ticker-item"><i class="fa-solid fa-user-shield"></i> Vaulted Identity & Data Privacy</div>
        <div class="ticker-item"><i class="fa-solid fa-infinity"></i> Direct Owner & Developer Escrow</div>
        <!-- Duplicate set for seamless infinite scrolling loop -->
        <div class="ticker-item"><i class="fa-solid fa-crown"></i> 100% Verified Legal Title Deeds</div>
        <div class="ticker-item"><i class="fa-solid fa-gem"></i> 0% Hidden Brokerage Commissions</div>
        <div class="ticker-item"><i class="fa-solid fa-vr-cardboard"></i> 4K Ultra-HD Virtual 3D Tours</div>
        <div class="ticker-item"><i class="fa-solid fa-helicopter"></i> VIP Helicopter & Jet Transfers</div>
        <div class="ticker-item"><i class="fa-solid fa-user-shield"></i> Vaulted Identity & Data Privacy</div>
        <div class="ticker-item"><i class="fa-solid fa-infinity"></i> Direct Owner & Developer Escrow</div>
    </div>
</div>

<!-- ==========================================
     PROBLEM & SOLUTION CARDS
     ========================================== -->
<section id="solutions" class="section-padding">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-subtitle">Redefining Real Estate</span>
            <h2 class="section-title">The Traditional Pitfalls vs. <span class="gold-text">Our Solution</span></h2>
            <p style="color: var(--text-secondary);">We eliminated the friction, deception, and delays of conventional property transactions to craft a flawless luxury experience.</p>
        </div>

        <div class="problem-solution-grid">
            <!-- Problem Card -->
            <div class="ps-card problem-card reveal">
                <div class="ps-header">
                    <div class="ps-icon"><i class="fa-solid fa-triangle-exclamation"></i></div>
                    <h3 class="ps-title">Traditional Market Problems</h3>
                </div>
                <ul class="ps-list">
                    <li class="ps-item">
                        <i class="fa-solid fa-xmark"></i>
                        <div>
                            <div class="ps-item-title">Phantom & Outdated Listings</div>
                            <div class="ps-item-desc">70% of online listings are bait-and-switch tactics or have already been sold.</div>
                        </div>
                    </li>
                    <li class="ps-item">
                        <i class="fa-solid fa-xmark"></i>
                        <div>
                            <div class="ps-item-title">Exorbitant Middleman Fees</div>
                            <div class="ps-item-desc">Multiple broker layers inflate prices with hidden commissions and unexpected transaction costs.</div>
                        </div>
                    </li>
                    <li class="ps-item">
                        <i class="fa-solid fa-xmark"></i>
                        <div>
                            <div class="ps-item-title">Spam & Data Exposure</div>
                            <div class="ps-item-desc">Inquiring on properties results in your phone number being sold to high-pressure telemarketers.</div>
                        </div>
                    </li>
                    <li class="ps-item">
                        <i class="fa-solid fa-xmark"></i>
                        <div>
                            <div class="ps-item-title">Opaque Legal Risks</div>
                            <div class="ps-item-desc">Unclear property titles, encumbrances, and legal ambiguities creating financial risk.</div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Solution Card -->
            <div class="ps-card solution-card reveal">
                <div class="ps-header">
                    <div class="ps-icon"><i class="fa-solid fa-shield-halved"></i></div>
                    <h3 class="ps-title">MyPropertyStation Promise</h3>
                </div>
                <ul class="ps-list">
                    <li class="ps-item">
                        <i class="fa-solid fa-check"></i>
                        <div>
                            <div class="ps-item-title">100% Blockchain & Physical Audit Verification</div>
                            <div class="ps-item-desc">Every listing is physically inspected and backed by legal ownership verification.</div>
                        </div>
                    </li>
                    <li class="ps-item">
                        <i class="fa-solid fa-check"></i>
                        <div>
                            <div class="ps-item-title">Zero Hidden Commissions</div>
                            <div class="ps-item-desc">Transparent pricing with direct owner connection and secure Escrow payment protections.</div>
                        </div>
                    </li>
                    <li class="ps-item">
                        <i class="fa-solid fa-check"></i>
                        <div>
                            <div class="ps-item-title">Vaulted Encryption Privacy</div>
                            <div class="ps-item-desc">Your contact information is strictly protected. Only communicate with verified property representatives.</div>
                        </div>
                    </li>
                    <li class="ps-item">
                        <i class="fa-solid fa-check"></i>
                        <div>
                            <div class="ps-item-title">End-to-End White-Glove Legal Team</div>
                            <div class="ps-item-desc">In-house legal counsel handles title clearance, contracts, and cross-border paperwork seamlessly.</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     FEATURED LUXURY PROPERTIES GRID
     ========================================== -->
<section id="properties" class="section-padding" style="background: rgba(18, 24, 38, 0.4); border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color);">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-subtitle">Private Collection</span>
            <h2 class="section-title">Featured <span class="gold-text">Ultra-Luxury Estates</span></h2>
            <p style="color: var(--text-secondary);">handcrafted residences featuring world-class architecture, unmatched views, and bespoke interiors.</p>
        </div>

        <div class="property-grid">
            <!-- Property 1 -->
            <div class="property-card reveal">
                <div class="property-thumb">
                    <img src="assets/images/property_1.jpg" alt="The Glass Skyline Penthouse">
                    <span class="property-badge">Sky Penthouse</span>
                    <span class="property-price">$12,800,000</span>
                </div>
                <div class="property-details">
                    <h3 class="property-title">The Glass Horizon Sky Villa</h3>
                    <p class="property-location"><i class="fa-solid fa-location-dot" style="color: var(--accent-gold);"></i> Manhattan Skyline, NYC</p>
                    <div class="property-features">
                        <span><i class="fa-solid fa-bed" style="color: var(--accent-gold);"></i> 5 Beds</span>
                        <span><i class="fa-solid fa-bath" style="color: var(--accent-gold);"></i> 7 Baths</span>
                        <span><i class="fa-solid fa-vector-square" style="color: var(--accent-gold);"></i> 8,500 SqFt</span>
                    </div>
                </div>
            </div>

            <!-- Property 2 -->
            <div class="property-card reveal">
                <div class="property-thumb">
                    <img src="assets/images/property_2.jpg" alt="Waterfront Azure Mansion">
                    <span class="property-badge">Waterfront Estate</span>
                    <span class="property-price">$24,500,000</span>
                </div>
                <div class="property-details">
                    <h3 class="property-title">Azure Infinity Ocean Estate</h3>
                    <p class="property-location"><i class="fa-solid fa-location-dot" style="color: var(--accent-gold);"></i> Palm Jumeirah, Dubai</p>
                    <div class="property-features">
                        <span><i class="fa-solid fa-bed" style="color: var(--accent-gold);"></i> 7 Beds</span>
                        <span><i class="fa-solid fa-bath" style="color: var(--accent-gold);"></i> 9 Baths</span>
                        <span><i class="fa-solid fa-vector-square" style="color: var(--accent-gold);"></i> 14,200 SqFt</span>
                    </div>
                </div>
            </div>

            <!-- Property 3 -->
            <div class="property-card reveal">
                <div class="property-thumb">
                    <img src="assets/images/property_3.jpg" alt="The Sanctuary Glass Residence">
                    <span class="property-badge">Contemporary Villa</span>
                    <span class="property-price">$16,200,000</span>
                </div>
                <div class="property-details">
                    <h3 class="property-title">The Minimalist Glass Sanctuary</h3>
                    <p class="property-location"><i class="fa-solid fa-location-dot" style="color: var(--accent-gold);"></i> Beverly Hills, California</p>
                    <div class="property-features">
                        <span><i class="fa-solid fa-bed" style="color: var(--accent-gold);"></i> 6 Beds</span>
                        <span><i class="fa-solid fa-bath" style="color: var(--accent-gold);"></i> 8 Baths</span>
                        <span><i class="fa-solid fa-vector-square" style="color: var(--accent-gold);"></i> 10,800 SqFt</span>
                    </div>
                </div>
            </div>
        </div>

        <div style="text-align: center; margin-top: 3.5rem;" class="reveal">
            <a href="#contact" class="btn-gold" style="padding: 1rem 2.5rem; font-size: 1rem;">
                <i class="fa-solid fa-eye"></i> View All Off-Market Listings
            </a>
        </div>
    </div>
</section>

<!-- ==========================================
     WHY MYPROPERTYSTATION (LUXURY VALUE PROPOSITION)
     ========================================== -->
<section id="why-us" class="section-padding">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-subtitle">Excellence Guaranteed</span>
            <h2 class="section-title">Why Choose <span class="gold-text">MyPropertyStation</span></h2>
            <p style="color: var(--text-secondary);">We combine global luxury real estate expertise with modern tech security to deliver unmatched value.</p>
        </div>

        <div class="why-us-grid">
            <div class="feature-box reveal">
                <div class="feature-icon-wrapper">
                    <i class="fa-solid fa-award"></i>
                </div>
                <h3 class="feature-title">Top 1% Curated Portfolio</h3>
                <p class="feature-desc">Every single property undergoes a strict 50-point quality, architectural integrity, and legal audit before listing.</p>
            </div>

            <div class="feature-box reveal">
                <div class="feature-icon-wrapper">
                    <i class="fa-solid fa-fingerprint"></i>
                </div>
                <h3 class="feature-title">AI Preference Matching</h3>
                <p class="feature-desc">Our proprietary AI algorithm matches your lifestyle taste, view preferences, and architectural desires to off-market gems.</p>
            </div>

            <div class="feature-box reveal">
                <div class="feature-icon-wrapper">
                    <i class="fa-solid fa-plane-up"></i>
                </div>
                <h3 class="feature-title">VIP Private Jet Tours</h3>
                <p class="feature-desc">High-net-worth buyers receive on-demand private helicopter and jet transportation for physical estate walk-throughs.</p>
            </div>

            <div class="feature-box reveal">
                <div class="feature-icon-wrapper">
                    <i class="fa-solid fa-vault"></i>
                </div>
                <h3 class="feature-title">Bank-Grade Escrow Safety</h3>
                <p class="feature-desc">Financial transactions and earnest deposits are protected under international legal escrow guarantees.</p>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     FREQUENTLY ASKED QUESTIONS (FAQS)
     ========================================== -->
<section id="faqs" class="section-padding" style="background: rgba(18, 24, 38, 0.4); border-top: 1px solid var(--border-color);">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-subtitle">Got Questions?</span>
            <h2 class="section-title">Frequently Asked <span class="gold-text">Questions</span></h2>
            <p style="color: var(--text-secondary);">Everything you need to know about buying, selling, and listing luxury real estate with us.</p>
        </div>

        <div class="faq-accordion reveal">
            <div class="faq-item active">
                <button class="faq-question">
                    <span>How does MyPropertyStation verify listed properties?</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Our team performs physical site visits, 4K architectural drone mapping, title deed verification with local land registries, and background checks on property owners to ensure 100% authenticity.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <span>Can international buyers purchase properties through your platform?</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes. We specialize in cross-border luxury real estate transactions. Our in-house legal advisory assists with golden visas, tax structuring, currency transfers, and foreign ownership regulations.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <span>How do off-market private listings work?</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Many ultra-high-net-worth owners prefer privacy. These properties are not publicly indexed. Qualified buyers receive NDA-backed access to private 3D virtual walk-throughs and confidential dossiers.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <span>What are the fees for listing my property on MyPropertyStation?</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>We offer transparent tier pricing with zero hidden commissions. Direct owner-to-buyer listing options are available alongside white-glove full-representation management.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'components/footer.php'; ?>
