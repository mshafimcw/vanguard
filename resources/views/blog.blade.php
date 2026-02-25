@extends('layouts.main')

@section('content')

	
	<!-- ================= HERO ================= -->
    <div class="container-fluid py-5 mb-5 hero-header wow fadeIn">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-start hero-text">
                    <h1 class="display-1 mb-4">BLOG & INDUSTRY <br>INSIGHTS</h1>
                    <p class="fs-4">
                        Stay updated with scrap prices, industry news, <br>metal trends, and recycling insights in UAE.
                    </p>
                </div>
            </div>
        </div>
    </div>

	<!-- ================= BLOG SECTION ================= -->
    <div class="blog-wrapper">

        <!-- RECENT POSTS -->
        <section class="blog-section">
            <div class="blog-container">

                <h1 class="blog-heading">
                    Recent <span>Posts</span>
                </h1>

                <div class="swiper recentSwiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="recent-layout">

                                <!-- LEFT IMAGE -->
                                <div class="recent-image">
                                    <img src="img/money.png" alt="Blog Image">
                                </div>

                                <!-- RIGHT CONTENT -->
                                <div class="recent-content">
                                    <div class="recent-meta">
                                        <span>22 July 2024</span>
                                        <span>• 4 min</span>
                                    </div>

                                    <h2>How Remote Work Drastically Improved My Design Skills</h2>

                                    <p>
                                        Remote work has drastically improved my design skills by giving me
                                        the freedom to experiment, focus, and learn at my own pace.
                                        Without the daily commute and office distractions, I found more
                                        time for deep, uninterrupted work.
                                    </p>

                                    <div class="recent-tags">
                                        <span>Design</span>
                                        <span>Product</span>
                                        <span>Freelance</span>
                                    </div>

                                    <a href="#" class="recent-btn">Read Article →</a>
                                </div>

                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="recent-layout">

                                <!-- LEFT IMAGE -->
                                <div class="recent-image">
                                    <img src="img/metting.png" alt="Blog Image">
                                </div>

                                <!-- RIGHT CONTENT -->
                                <div class="recent-content">
                                    <div class="recent-meta">
                                        <span>22 July 2024</span>
                                        <span>• 4 min</span>
                                    </div>

                                    <h2>How Remote Work Drastically Improved My Design Skills</h2>

                                    <p>
                                        Remote work has drastically improved my design skills by giving me
                                        the freedom to experiment, focus, and learn at my own pace.
                                        Without the daily commute and office distractions, I found more
                                        time for deep, uninterrupted work.
                                    </p>

                                    <div class="recent-tags">
                                        <span>Design</span>
                                        <span>Product</span>
                                        <span>Freelance</span>
                                    </div>

                                    <a href="#" class="recent-btn">Read Article →</a>
                                </div>

                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="recent-layout">

                                <!-- LEFT IMAGE -->
                                <div class="recent-image">
                                    <img src="img/money.png" alt="Blog Image">
                                </div>

                                <!-- RIGHT CONTENT -->
                                <div class="recent-content">
                                    <div class="recent-meta">
                                        <span>22 July 2024</span>
                                        <span>• 4 min</span>
                                    </div>

                                    <h2>How Remote Work Drastically Improved My Design Skills</h2>

                                    <p>
                                        Remote work has drastically improved my design skills by giving me
                                        the freedom to experiment, focus, and learn at my own pace.
                                        Without the daily commute and office distractions, I found more
                                        time for deep, uninterrupted work.
                                    </p>

                                    <div class="recent-tags">
                                        <span>Design</span>
                                        <span>Product</span>
                                        <span>Freelance</span>
                                    </div>

                                    <a href="#" class="recent-btn">Read Article →</a>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="recent-layout">

                                <!-- LEFT IMAGE -->
                                <div class="recent-image">
                                    <img src="img/metting.png" alt="Blog Image">
                                </div>

                                <!-- RIGHT CONTENT -->
                                <div class="recent-content">
                                    <div class="recent-meta">
                                        <span>22 July 2024</span>
                                        <span>• 4 min</span>
                                    </div>

                                    <h2>How Remote Work Drastically Improved My Design Skills</h2>

                                    <p>
                                        Remote work has drastically improved my design skills by giving me
                                        the freedom to experiment, focus, and learn at my own pace.
                                        Without the daily commute and office distractions, I found more
                                        time for deep, uninterrupted work.
                                    </p>

                                    <div class="recent-tags">
                                        <span>Design</span>
                                        <span>Product</span>
                                        <span>Freelance</span>
                                    </div>

                                    <a href="#" class="recent-btn">Read Article →</a>
                                </div>

                            </div>
                        </div>



                    </div>

                    <div class="swiper-pagination"></div>
                      <div class="recent-prev"></div>
                    <div class="recent-next"></div>

                </div>
            </div>
        </section>
        <div class="section-divider"></div>
        <!-- WEEKLY MOST READ -->
        <section class="blog-section weekly-section">
            <div class="blog-container">

                <h2 class="blog-heading">
                    Weekly <span>Most Read 🔥</span>
                </h2>

                <div class="weekly-grid">

                    <div class="weekly-card"><img src="img/money.png">
                        <div class="weekly-overlay">
                            <h4>Current Scrap Metal Market Trends in UAE</h4>
                        </div>
                    </div>
                    <div class="weekly-card"><img src="img/metting.png">
                        <div class="weekly-overlay">
                            <h4>Top Tips for Selling Your Scrap Metal Quickly</h4>
                        </div>
                    </div>
                    <div class="weekly-card"><img src="img/money.png">
                        <div class="weekly-overlay">
                            <h4>Maximizing Profit: Practices for Sorting and Selling Scrap</h4>
                        </div>
                    </div>
                    <div class="weekly-card"><img src="img/metting.png">
                        <div class="weekly-overlay">
                            <h4>How the UAE Leads in Metal Recycling Innovations</h4>
                        </div>
                    </div>
                    <div class="weekly-card"><img src="img/metal.png">
                        <div class="weekly-overlay">
                            <h4>Guide to Identifying High-Value Scrap</h4>
                        </div>
                    </div>
                    <div class="weekly-card"><img src="img/money.png">
                        <div class="weekly-overlay">
                            <h4>Industrial Scrap Collection Process</h4>
                        </div>
                    </div>
                    <div class="weekly-card"><img src="img/metting.png">
                        <div class="weekly-overlay">
                            <h4>Why Copper Scrap Has High Market Demand</h4>
                        </div>
                    </div>
                    <div class="weekly-card"><img src="img/metal.png">
                        <div class="weekly-overlay">
                            <h4>Recycling’s Impact on UAE Sustainability Goals</h4>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>


@endsection