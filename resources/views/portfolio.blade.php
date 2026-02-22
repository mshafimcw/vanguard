@extends('layouts.main')

@section('content')
<section class="page-banner">
    <div class="image-layer" style="background-image:url(images/background/banner-image-3.jpg);"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Gallery</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="#">Home</a></li>
                        <li class="active">Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="portfolio-section portfolio-mixitup">
    <div class="auto-container">
        <div class="sec-title with-separator centered">
            <h2>Gallery</h2>
            <div class="separator">
                <span class="cir c-1"></span>
                <span class="cir c-2"></span>
                <span class="cir c-3"></span>
            </div>
        </div>

        <!--Mixit Gallery-->
        <div class="mixit-gallery filter-gallery">
            <!-- Category Filters -->
            <div class="filters clearfix">
                <ul class="filter-tabs filter-btns clearfix">
                    <li class="active filter" data-role="button" data-filter="all">All</li>
                    @foreach($gallerycategories as $category)
                    <li class="filter" data-role="button" data-filter=".category-{{ $category->id }}">
                        {{ $category->name }}
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="filter-list row clearfix">
                <!--Gallery Items-->
                @foreach($gallery as $post)
                <div class="gallery-block mix all category-{{ $post->gallery_category_id }} col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-box">
                            <figure class="image">
                                <img src="{{ asset('public/' . $post->image) }}" alt="{{ $post->body }}">
                            </figure>
                            <div class="zoom-btn">
                                <a class="lightbox-image zoom-link" href="{{ asset('public/' . $post->image) }}" data-fancybox="gallery">
                                    <span class="icon flaticon-zoom-in"></span>
                                </a>
                            </div>
                            <div class="cap-box">
                                <h6>{!! $post->body !!}</h6>
                                @php
                                    $categoryName = $gallerycategories->where('id', $post->gallery_category_id)->first()->name ?? 'Uncategorized';
                                @endphp
                                <span class="category-badge">{{ $categoryName }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
/* Filter Button Styles */
.filter-tabs {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 40px;
}

.filter-tabs li {
    padding: 12px 24px;
    background: #f8f9fa;
    border: 2px solid #e9ecef;
    border-radius: 30px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-weight: 600;
    color: #6c757d;
}

.filter-tabs li:hover {
    background: #164A25;
    border-color: #164A25;
    color: white;
    transform: translateY(-2px);
}

.filter-tabs li.active {
    background: #164A25;
    border-color: #164A25;
    color: white;
}

/* Category Badge */
.category-badge {
    display: inline-block;
    padding: 4px 12px;
    background: rgba(22, 74, 37, 0.1);
    color: #164A25;
    border-radius: 15px;
    font-size: 0.8em;
    margin-top: 8px;
    font-weight: 500;
}

/* Gallery Item Animation */
.gallery-block {
    margin-bottom: 30px;
}

.inner-box {
    transition: transform 0.3s ease;
}

.inner-box:hover {
    transform: translateY(-5px);
}

/* Image Box Styles */
.image-box {
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.image-box img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.image-box:hover img {
    transform: scale(1.05);
}

.zoom-btn {
    position: absolute;
    top: 15px;
    right: 15px;
    opacity: 0;
    transition: all 0.3s ease;
}

.image-box:hover .zoom-btn {
    opacity: 1;
}

.zoom-link {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background: white;
    border-radius: 50%;
    color: #164A25;
    text-decoration: none;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.zoom-link:hover {
    background: #164A25;
    color: white;
}

.cap-box {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(0,0,0,0.8));
    color: white;
    padding: 20px;
    transform: translateY(100%);
    transition: transform 0.3s ease;
}

.image-box:hover .cap-box {
    transform: translateY(0);
}

.cap-box h6 {
    margin: 0;
    font-size: 1.1em;
    font-weight: 600;
}

/* Responsive Design */
@media (max-width: 768px) {
    .filter-tabs {
        gap: 8px;
    }
    
    .filter-tabs li {
        padding: 10px 16px;
        font-size: 0.9em;
    }
    
    .image-box img {
        height: 200px;
    }
}

@media (max-width: 576px) {
    .filter-tabs {
        flex-direction: column;
        align-items: center;
    }
    
    .filter-tabs li {
        width: 200px;
        text-align: center;
    }
}
</style>
@endpush

@push('scripts')
<!-- Include MixItUp Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize MixItUp
    var containerEl = document.querySelector('.filter-list');
    
    if (containerEl) {
        var mixer = mixitup(containerEl, {
            animation: {
                duration: 400,
                effects: 'fade scale(0.8)',
                easing: 'cubic-bezier(0.645, 0.045, 0.355, 1)'
            },
            classNames: {
                block: 'programs',
                elementFilter: 'filter-btn',
                elementSort: 'sort-btn'
            },
            selectors: {
                target: '.gallery-block'
            }
        });

        // Add active class to filter buttons
        var filterButtons = document.querySelectorAll('.filter-tabs li');
        
        filterButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(function(btn) {
                    btn.classList.remove('active');
                });
                
                // Add active class to clicked button
                this.classList.add('active');
            });
        });
    }

    // Initialize Fancybox if not already initialized
    if (typeof Fancybox !== "undefined") {
        Fancybox.bind("[data-fancybox]", {
            // Your custom options
        });
    }
});
</script>

<!-- Alternative: If you prefer using jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Alternative jQuery implementation
    $('.filter-tabs li').on('click', function() {
        var $this = $(this);
        
        // Remove active class from all buttons
        $('.filter-tabs li').removeClass('active');
        
        // Add active class to clicked button
        $this.addClass('active');
        
        // Get filter value
        var filterValue = $this.attr('data-filter');
        
        // Filter items
        if (filterValue === 'all') {
            $('.gallery-block').show();
        } else {
            $('.gallery-block').hide();
            $(filterValue).show();
        }
    });
});
</script>
@endpush