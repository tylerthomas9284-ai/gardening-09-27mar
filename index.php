<?php require __DIR__ . '/iqnpdc.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
      <!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,5016670,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?5016670&101" alt="web stats" border="0"></a></noscript>
<!-- Histats.com  END  -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nature Gardening - Professional gardening and lawn care services in Texas. Expert garden maintenance, landscaping, and seasonal care for homes and businesses.">
    <title>Nature Gardening - Professional Gardening & Lawn Care Services Texas</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-content">
            <a href="index.html" class="logo">
                <svg class="logo-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                </svg>
                <span>Nature Gardening</span>
            </a>
            <button class="mobile-menu-toggle" aria-label="Toggle mobile menu">☰</button>
            <nav>
                <ul class="nav-list">
                    <li><a href="index.html" class="nav-link">Home</a></li>
                    <li><a href="about.html" class="nav-link">About</a></li>
                    <li><a href="services.html" class="nav-link">Services</a></li>
                    <li><a href="pricing.html" class="nav-link">Pricing</a></li>
                    <li><a href="faq.html" class="nav-link">FAQ</a></li>
                    <li><a href="contact.html" class="nav-link">Contact</a></li>
                    <li><button onclick="openModal('leadModal')" class="btn btn-primary">Get Quote</button></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <div>
                <h1>Professional Gardening & Lawn Care Services You Can Trust</h1>
                <p>Transform your outdoor space with reliable garden care, landscaping, and maintenance services tailored for homes and businesses.</p>
                <div class="hero-buttons">
                    <button onclick="openModal('leadModal')" class="btn btn-primary btn-lg">Get Free Quote</button>
                    <button onclick="openModal('leadModal')" class="btn btn-outline btn-lg">Schedule Service</button>
                </div>
            </div>
            <div class="hero-images">
                <img src="https://images.unsplash.com/photo-1768341190103-23aacdef9cd7?w=400&h=300&fit=crop" alt="Professional gardener trimming hedge" class="hero-image">
                <img src="https://images.unsplash.com/photo-1764296377273-4299e3f3d6f5?w=400&h=300&fit=crop" alt="Lawn mowing service" class="hero-image">
                <img src="https://images.unsplash.com/photo-1758700667123-d9a72ceb6b90?w=400&h=300&fit=crop" alt="Planting flowers in garden bed" class="hero-image">
                <img src="https://images.unsplash.com/photo-1646794874930-7749b35d606f?w=400&h=300&fit=crop" alt="Backyard landscape maintenance" class="hero-image">
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="stats-grid">
            <div class="stat-item">
                <svg class="stat-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
                <div class="stat-number">500+</div>
                <div class="stat-label">Happy Customers</div>
            </div>
            <div class="stat-item">
                <svg class="stat-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                </svg>
                <div class="stat-number">10+</div>
                <div class="stat-label">Years Experience</div>
            </div>
            <div class="stat-item">
                <svg class="stat-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <div class="stat-number">50+</div>
                <div class="stat-label">Service Areas</div>
            </div>
            <div class="stat-item">
                <svg class="stat-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <div class="stat-number">24/7</div>
                <div class="stat-label">Support Available</div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Our Services</h2>
            <p class="section-subtitle">Comprehensive gardening solutions for every need</p>
            <div class="grid grid-cols-3">
                <div class="card">
                    <div class="card-content service-card">
                        <svg class="service-card-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 5.758a3 3 0 10-4.243 4.243 3 3 0 004.243-4.243zm0-5.758a3 3 0 10-4.243-4.243 3 3 0 004.243 4.243z"></path>
                        </svg>
                        <h3>Garden Maintenance</h3>
                        <p>Regular trimming, plant care, and garden health management.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content service-card">
                        <svg class="service-card-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                        </svg>
                        <h3>Lawn Care</h3>
                        <p>Professional mowing, edging, and seasonal lawn treatments.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content service-card">
                        <svg class="service-card-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                        <h3>Landscape Design</h3>
                        <p>Custom garden layouts and outdoor space planning.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content service-card">
                        <svg class="service-card-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                        <h3>Planting & Garden Setup</h3>
                        <p>Flowers, shrubs, and plant installation for vibrant gardens.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content service-card">
                        <svg class="service-card-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                        <h3>Seasonal Cleanups</h3>
                        <p>Leaf removal, debris cleanup, and garden preparation.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content service-card">
                        <svg class="service-card-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                        </svg>
                        <h3>Irrigation Assistance</h3>
                        <p>Basic watering system checks and plant hydration solutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="section section-gray">
        <div class="container">
            <h2 class="section-title">How It Works</h2>
            <p class="section-subtitle">Simple steps to a beautiful garden</p>
            <div class="grid grid-cols-4">
                <div class="text-center">
                    <div style="width: 4rem; height: 4rem; background-color: var(--color-green-600); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: bold; margin: 0 auto 1rem;">1</div>
                    <h3 class="text-xl font-bold mb-3">Request a Quote</h3>
                    <p style="color: var(--color-gray-600);">Fill out our simple form or call us to discuss your gardening needs.</p>
                </div>
                <div class="text-center">
                    <div style="width: 4rem; height: 4rem; background-color: var(--color-green-600); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: bold; margin: 0 auto 1rem;">2</div>
                    <h3 class="text-xl font-bold mb-3">Site Assessment</h3>
                    <p style="color: var(--color-gray-600);">We visit your property to evaluate and understand your requirements.</p>
                </div>
                <div class="text-center">
                    <div style="width: 4rem; height: 4rem; background-color: var(--color-green-600); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: bold; margin: 0 auto 1rem;">3</div>
                    <h3 class="text-xl font-bold mb-3">Custom Plan</h3>
                    <p style="color: var(--color-gray-600);">Receive a detailed service plan with transparent pricing.</p>
                </div>
                <div class="text-center">
                    <div style="width: 4rem; height: 4rem; background-color: var(--color-green-600); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: bold; margin: 0 auto 1rem;">4</div>
                    <h3 class="text-xl font-bold mb-3">Professional Service</h3>
                    <p style="color: var(--color-gray-600);">Our experienced team delivers high-quality gardening solutions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="section section-green">
        <div class="container">
            <div class="grid grid-cols-2" style="align-items: center; gap: 3rem;">
                <div>
                    <img src="https://images.unsplash.com/photo-1771749372380-ac5248a2d183?w=600&h=400&fit=crop" alt="Beautiful green lawn" class="rounded-lg shadow-lg" style="width: 100%; height: 24rem; object-fit: cover;">
                </div>
                <div>
                    <h2 class="text-4xl font-bold mb-6">Why Choose Nature Gardening</h2>
                    <p class="text-lg mb-6" style="color: var(--color-gray-700);">We deliver exceptional gardening services with a commitment to quality, sustainability, and customer satisfaction.</p>
                    <ul class="feature-list">
                        <li class="feature-item">
                            <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Experienced gardening professionals</span>
                        </li>
                        <li class="feature-item">
                            <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Eco-friendly gardening practices</span>
                        </li>
                        <li class="feature-item">
                            <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Reliable and punctual service</span>
                        </li>
                        <li class="feature-item">
                            <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Residential and commercial solutions</span>
                        </li>
                        <li class="feature-item">
                            <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Transparent pricing</span>
                        </li>
                        <li class="feature-item">
                            <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Customer-focused support</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Excellence in Every Detail -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Excellence in Every Detail</h2>
            <p class="section-subtitle">Professional tools, techniques, and dedication</p>
            
            <!-- Professional Equipment -->
            <div class="grid grid-cols-2 mb-8" style="align-items: center; gap: 2rem;">
                <div>
                    <img src="https://images.unsplash.com/photo-1558969330-ce91b84b1348?w=600&h=400&fit=crop" alt="Professional garden tools and equipment" class="rounded-lg shadow-lg" style="width: 100%; height: 24rem; object-fit: cover;">
                </div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">Professional Equipment</h3>
                    <p class="text-lg mb-6" style="color: var(--color-gray-700);">We use top-quality gardening tools and equipment to ensure precise, efficient service. From commercial-grade mowers to specialized pruning tools, our professional equipment delivers superior results for your garden.</p>
                    <ul class="feature-list">
                        <li class="feature-item">
                            <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Commercial-grade lawn equipment</span>
                        </li>
                        <li class="feature-item">
                            <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Eco-friendly products and solutions</span>
                        </li>
                        <li class="feature-item">
                            <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Regular maintenance and upgrades</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Sustainable Practices -->
            <div class="grid grid-cols-2" style="align-items: center; gap: 2rem;">
                <div style="order: 2;">
                    <h3 class="text-3xl font-bold mb-4">Sustainable Practices</h3>
                    <p class="text-lg mb-6" style="color: var(--color-gray-700);">Our commitment to the environment goes beyond just gardening. We implement sustainable, organic practices that promote healthy soil, conserve water, and support local ecosystems while creating beautiful outdoor spaces.</p>
                    <ul class="feature-list">
                        <li class="feature-item">
                            <svg class="service-card-icon" style="width: 1.5rem; height: 1.5rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                            </svg>
                            <span>Organic fertilizers and pest control</span>
                        </li>
                        <li class="feature-item">
                            <svg class="service-card-icon" style="width: 1.5rem; height: 1.5rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                            </svg>
                            <span>Water conservation techniques</span>
                        </li>
                        <li class="feature-item">
                            <svg class="service-card-icon" style="width: 1.5rem; height: 1.5rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                            </svg>
                            <span>Native plant recommendations</span>
                        </li>
                    </ul>
                </div>
                <div style="order: 1;">
                    <img src="https://images.unsplash.com/photo-1770982698868-26124562d0c2?w=600&h=400&fit=crop" alt="Organic sustainable gardening" class="rounded-lg shadow-lg" style="width: 100%; height: 24rem; object-fit: cover;">
                </div>
            </div>
        </div>
    </section>

    <!-- Service Areas -->
    <section class="section section-green">
        <div class="container">
            <div class="text-center mb-8">
                <h2 class="section-title">
                    <svg style="width: 2.5rem; height: 2.5rem; color: var(--color-green-600); display: inline-block; vertical-align: middle; margin-bottom: 0.5rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Service Areas
                </h2>
                <p class="section-subtitle">Proudly serving communities across Texas</p>
            </div>
            <div style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 1rem; max-width: 64rem; margin: 0 auto 2rem;">
                <div class="card" style="padding: 1rem; text-align: center;"><span style="font-weight: 500;">Austin</span></div>
                <div class="card" style="padding: 1rem; text-align: center;"><span style="font-weight: 500;">Houston</span></div>
                <div class="card" style="padding: 1rem; text-align: center;"><span style="font-weight: 500;">Dallas</span></div>
                <div class="card" style="padding: 1rem; text-align: center;"><span style="font-weight: 500;">San Antonio</span></div>
                <div class="card" style="padding: 1rem; text-align: center;"><span style="font-weight: 500;">Fort Worth</span></div>
                <div class="card" style="padding: 1rem; text-align: center;"><span style="font-weight: 500;">El Paso</span></div>
                <div class="card" style="padding: 1rem; text-align: center;"><span style="font-weight: 500;">Arlington</span></div>
                <div class="card" style="padding: 1rem; text-align: center;"><span style="font-weight: 500;">Corpus Christi</span></div>
                <div class="card" style="padding: 1rem; text-align: center;"><span style="font-weight: 500;">Plano</span></div>
                <div class="card" style="padding: 1rem; text-align: center;"><span style="font-weight: 500;">Laredo</span></div>
                <div class="card" style="padding: 1rem; text-align: center;"><span style="font-weight: 500;">Lubbock</span></div>
                <div class="card" style="padding: 1rem; text-align: center;"><span style="font-weight: 500;">Irving</span></div>
                <div class="card" style="padding: 1rem; text-align: center;"><span style="font-weight: 500;">Garland</span></div>
                <div class="card" style="padding: 1rem; text-align: center;"><span style="font-weight: 500;">Frisco</span></div>
                <div class="card" style="padding: 1rem; text-align: center;"><span style="font-weight: 500;">McKinney</span></div>
            </div>
            <div class="text-center">
                <p style="color: var(--color-gray-600); margin-bottom: 1rem;">Don't see your area? We're always expanding!</p>
                <button onclick="openModal('leadModal')" class="btn btn-outline" style="border-color: var(--color-green-600); color: var(--color-green-600);">Check Your Location</button>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">What Our Customers Say</h2>
            <p class="section-subtitle">Real feedback from satisfied clients</p>
            <div class="grid grid-cols-3">
                <div class="card card-bg-green">
                    <div class="card-content" style="padding: 2rem;">
                        <p style="color: var(--color-gray-700); margin-bottom: 1rem; font-style: italic;">"Nature Gardening transformed our backyard beautifully. The team was professional and efficient."</p>
                        <p class="font-semibold" style="color: var(--color-green-700);">— Amanda T., Texas</p>
                    </div>
                </div>
                <div class="card card-bg-green">
                    <div class="card-content" style="padding: 2rem;">
                        <p style="color: var(--color-gray-700); margin-bottom: 1rem; font-style: italic;">"Our lawn has never looked better. Highly recommended gardening service."</p>
                        <p class="font-semibold" style="color: var(--color-green-700);">— Robert L., Texas</p>
                    </div>
                </div>
                <div class="card card-bg-green">
                    <div class="card-content" style="padding: 2rem;">
                        <p style="color: var(--color-gray-700); margin-bottom: 1rem; font-style: italic;">"Great value and exceptional service. They truly care about our garden's health and appearance."</p>
                        <p class="font-semibold" style="color: var(--color-green-700);">— Sarah M., Texas</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Preview -->
    <section class="section section-gray">
        <div class="container" style="max-width: 56rem;">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Quick answers to common questions</p>
            <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                <div class="card">
                    <div class="card-content" style="padding: 1.5rem;">
                        <h3 class="text-xl font-bold mb-3">What areas do you serve?</h3>
                        <p style="color: var(--color-gray-700);">We provide gardening services throughout Texas, including major cities and surrounding areas. Contact us to confirm we serve your location.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content" style="padding: 1.5rem;">
                        <h3 class="text-xl font-bold mb-3">How often should I schedule lawn maintenance?</h3>
                        <p style="color: var(--color-gray-700);">Most lawns benefit from weekly or bi-weekly maintenance during growing season, and monthly during slower periods. We'll recommend the best schedule based on your property.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content" style="padding: 1.5rem;">
                        <h3 class="text-xl font-bold mb-3">Do you offer one-time services?</h3>
                        <p style="color: var(--color-gray-700);">Yes! We offer both one-time services and ongoing maintenance packages to fit your needs and budget.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-8">
                <a href="faq.html" class="btn btn-outline" style="border-color: var(--color-green-600); color: var(--color-green-600);">View All FAQs</a>
            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="section">
        <div class="container">
            <div class="grid grid-cols-3">
                <div class="card text-center">
                    <div class="card-content" style="padding: 2rem;">
                        <svg style="width: 3rem; height: 3rem; color: var(--color-green-600); margin: 0 auto 1rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <h3 class="text-xl font-bold mb-3">Call Us</h3>
                        <p style="color: var(--color-gray-600); margin-bottom: 0.5rem;">Available 24/7</p>
                        <a href="tel:+18052946688" class="text-lg font-semibold" style="color: var(--color-green-600);">+1-805-294-6688</a>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-content" style="padding: 2rem;">
                        <svg style="width: 3rem; height: 3rem; color: var(--color-green-600); margin: 0 auto 1rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <h3 class="text-xl font-bold mb-3">Email Us</h3>
                        <p style="color: var(--color-gray-600); margin-bottom: 0.5rem;">We'll respond within 24 hours</p>
                        <a href="mailto:help@naturegardening.site" class="text-lg font-semibold" style="color: var(--color-green-600);">help@naturegardening.site</a>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-content" style="padding: 2rem;">
                        <svg style="width: 3rem; height: 3rem; color: var(--color-green-600); margin: 0 auto 1rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <h3 class="text-xl font-bold mb-3">Schedule Service</h3>
                        <p style="color: var(--color-gray-600); margin-bottom: 1rem;">Book your appointment today</p>
                        <button onclick="openModal('leadModal')" class="btn btn-primary">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust & Security -->
    <section class="section section-green">
        <div class="container">
            <div style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center; gap: 2rem; text-align: center;">
                <div style="display: flex; align-items: center; gap: 0.75rem;">
                    <svg style="width: 2rem; height: 2rem; color: var(--color-green-600);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                    <span style="color: var(--color-gray-700); font-weight: 500;">Fully Insured</span>
                </div>
                <div style="display: flex; align-items: center; gap: 0.75rem;">
                    <svg style="width: 2rem; height: 2rem; color: var(--color-green-600);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                    <span style="color: var(--color-gray-700); font-weight: 500;">Certified Professionals</span>
                </div>
                <div style="display: flex; align-items: center; gap: 0.75rem;">
                    <svg style="width: 2rem; height: 2rem; color: var(--color-green-600);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span style="color: var(--color-gray-700); font-weight: 500;">Satisfaction Guaranteed</span>
                </div>
                <div style="display: flex; align-items: center; gap: 0.75rem;">
                    <svg style="width: 2rem; height: 2rem; color: var(--color-green-600);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span style="color: var(--color-gray-700); font-weight: 500;">On-Time Service</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2>Ready to Improve Your Garden?</h2>
            <p>Get a free, no-obligation quote for your gardening needs today</p>
            <button onclick="openModal('leadModal')" class="btn btn-white btn-lg">Get Your Free Quote Today</button>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div>
                <h3>Nature Gardening</h3>
                <p style="color: var(--color-gray-100); margin-top: 1rem;">Professional gardening and lawn care services for homes and businesses across Texas.</p>
            </div>
            <div>
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="pricing.html">Pricing</a></li>
                </ul>
            </div>
            <div>
                <h3>Legal</h3>
                <ul class="footer-links">
                    <li><a href="privacy.html">Privacy Policy</a></li>
                    <li><a href="terms.html">Terms & Conditions</a></li>
                    <li><a href="disclaimer.html">Disclaimer</a></li>
                    <li><a href="cookie-policy.html">Cookie Policy</a></li>
                </ul>
            </div>
            <div>
                <h3>Contact</h3>
                <ul class="footer-links">
                    <li>10221 Deserts St Ste 212</li>
                    <li>Atmore, TX 78216</li>
                    <li><a href="tel:+18052946688">+1-805-294-6688</a></li>
                    <li><a href="mailto:help@naturegardening.site">help@naturegardening.site</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Nature Gardening. All rights reserved.</p>
        </div>
    </footer>

    <!-- Lead Generation Modal -->
    <div id="leadModal" class="modal-overlay">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Request a Free Quote</h2>
                <button onclick="closeModal('leadModal')" class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <form id="leadForm">
                    <div class="form-group">
                        <label for="leadFullName" class="form-label">Full Name *</label>
                        <input type="text" id="leadFullName" class="form-input" required placeholder="John Doe">
                    </div>
                    <div class="form-group">
                        <label for="leadEmail" class="form-label">Email Address *</label>
                        <input type="email" id="leadEmail" class="form-input" required placeholder="john@example.com">
                    </div>
                    <div class="form-group">
                        <label for="leadPhone" class="form-label">Phone Number *</label>
                        <input type="tel" id="leadPhone" class="form-input" required placeholder="+1-555-123-4567">
                    </div>
                    <div class="form-group">
                        <label for="leadService" class="form-label">Service Needed</label>
                        <input type="text" id="leadService" class="form-input" placeholder="e.g., Lawn Care">
                    </div>
                    <div class="form-group">
                        <label for="leadMessage" class="form-label">Message</label>
                        <textarea id="leadMessage" class="form-textarea" placeholder="Tell us about your needs..."></textarea>
                    </div>
                    <div class="form-group checkbox-group">
                        <input type="checkbox" id="leadConsent" class="checkbox" required>
                        <label for="leadConsent" style="font-size: 0.875rem;">
                            I agree to the <a href="privacy.html" target="_blank" style="color: var(--color-green-600);">Privacy Policy</a> and 
                            <a href="terms.html" target="_blank" style="color: var(--color-green-600);">Terms & Conditions</a> and consent to being contacted. *
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%; padding: 1rem;">Request Free Quote</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Cookie Banner -->
    <div id="cookieBanner" class="cookie-banner">
        <div class="cookie-banner-content">
            <div class="cookie-banner-text">
                <strong>Cookie Consent</strong>
                <p style="margin-top: 0.5rem; color: var(--color-gray-600);">
                    We use cookies to enhance your browsing experience and analyze our traffic. By clicking "Accept", you consent to our use of cookies. 
                    <a href="cookie-policy.html" style="color: var(--color-green-600);">Learn more</a>
                </p>
            </div>
            <div class="cookie-banner-buttons">
                <button id="acceptCookies" class="btn btn-primary">Accept All</button>
                <button id="declineCookies" class="btn btn-outline">Decline</button>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>
</html>
