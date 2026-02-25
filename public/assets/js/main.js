(function ($) {
  "use strict";

  /* ================= SPINNER ================= */
  const spinner = () => {
    setTimeout(() => {
      if ($('#spinner').length) {
        $('#spinner').removeClass('show');
      }
    }, 1);
  };
  spinner();

  /* ================= WOW INIT ================= */
  if (typeof WOW === "function") {
    new WOW().init();
  }

  /* ================= SCROLL EFFECTS ================= */
  $(window).on('scroll', function () {
    const scrollTop = $(this).scrollTop();

    // Navbar background on scroll
    if (scrollTop > 50) {
      $('.branding').addClass('scrolled');
    } else {
      $('.branding').removeClass('scrolled');
    }

    // Back to top
    if (scrollTop > 300) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });

  /* ================= BACK TO TOP ================= */
  $('.back-to-top').on('click', function (e) {
    e.preventDefault();
    $('html, body').animate(
      { scrollTop: 0 },
      1500,
      'easeInOutExpo'
    );
  });

  /* ================= MOBILE NAVIGATION (HOME + SERVICES) ================= */
  const $navMenu = $('.navmenu');
  const $navToggle = $('.mobile-nav-toggle');

  const closeMobileMenu = () => {
    $navMenu.removeClass('active');
    $navToggle.removeClass('bi-x').addClass('bi-list');
    $('body').css('overflow', '');
  };

  $navToggle.on('click', function (e) {
    e.preventDefault();
    e.stopPropagation();

    $navMenu.toggleClass('active');

    if ($navMenu.hasClass('active')) {
      $(this).removeClass('bi-list').addClass('bi-x');
      $('body').css('overflow', 'hidden');
    } else {
      closeMobileMenu();
    }
  });

  // Close when clicking a menu link
  $('.navmenu ul li a').on('click', function () {
    closeMobileMenu();
  });

  // Close when clicking outside
  $(document).on('click', function (e) {
    if (
      !$navMenu.is(e.target) &&
      $navMenu.has(e.target).length === 0 &&
      !$navToggle.is(e.target) &&
      $navMenu.hasClass('active')
    ) {
      closeMobileMenu();
    }
  });

  // Close with ESC key
  $(document).on('keyup', function (e) {
    if (e.key === 'Escape' && $navMenu.hasClass('active')) {
      closeMobileMenu();
    }
  });

  /* ================= MODAL VIDEO ================= */
  let videoSrc = '';

  $('.btn-play').on('click', function () {
    videoSrc = $(this).data('src');
  });

  $('#videoModal').on('shown.bs.modal', function () {
    $('#video').attr(
      'src',
      videoSrc + '?autoplay=1&modestbranding=1&showinfo=0'
    );
  });

  $('#videoModal').on('hide.bs.modal', function () {
    $('#video').attr('src', videoSrc);
  });

  /* ================= COUNTER ================= */
  if ($('[data-toggle="counter-up"]').length) {
    $('[data-toggle="counter-up"]').counterUp({
      delay: 10,
      time: 2000
    });
  }

  /* ================= DATE & TIME PICKER ================= */
  if ($('.date').length) {
    $('.date').datetimepicker({ format: 'L' });
  }
  if ($('.time').length) {
    $('.time').datetimepicker({ format: 'LT' });
  }

  /* ================= TESTIMONIAL CAROUSEL ================= */
  if ($('.testimonial-carousel').length) {
    $('.testimonial-carousel').owlCarousel({
      autoplay: true,
      smartSpeed: 1000,
      items: 1,
      loop: true,
      dots: false,
      nav: true,
      navText: [
        '<i class="bi bi-chevron-left"></i>',
        '<i class="bi bi-chevron-right"></i>'
      ]
    });
  }

  /* ================= SERVICE CARD HOVER ================= */
  $('.service-item')
    .on('mouseenter', function () {
      $(this).addClass('active');
    })
    .on('mouseleave', function () {
      $(this).removeClass('active');
    });

  /* ================= SERVICE AREA TAGS ================= */
  $('.service-tags span').on('click', function () {
    $('.service-tags span').removeClass('active');
    $(this).addClass('active');
  });

})(jQuery);
(function ($) {
  "use strict";

  const $navMenu = $('.navmenu');
  const $toggle = $('.mobile-nav-toggle');

  $toggle.on('click', function (e) {
    e.preventDefault();
    e.stopPropagation();

    $navMenu.toggleClass('active');

    if ($navMenu.hasClass('active')) {
      $(this).removeClass('bi-list').addClass('bi-x');
      $('body').css('overflow', 'hidden');
    } else {
      closeMenu();
    }
  });

  function closeMenu() {
    $navMenu.removeClass('active');
    $toggle.removeClass('bi-x').addClass('bi-list');
    $('body').css('overflow', '');
  }

  $('.navmenu a').on('click', closeMenu);

  $(document).on('click', function (e) {
    if (
      !$navMenu.is(e.target) &&
      $navMenu.has(e.target).length === 0 &&
      !$toggle.is(e.target)
    ) {
      closeMenu();
    }
  });

  $(document).on('keyup', function (e) {
    if (e.key === 'Escape') closeMenu();
  });

})(jQuery);
/* ===== Mobile Navigation Toggle ===== */
$('.mobile-nav-toggle').on('click', function () {
  $('.navmenu').toggleClass('active');

  // Toggle icon between hamburger and X
  if ($('.navmenu').hasClass('active')) {
    $(this).removeClass('bi-list');
    $(this).addClass('bi-x');
  } else {
    $(this).removeClass('bi-x');
    $(this).addClass('bi-list');
  }
});

//blog
if (typeof Swiper !== "undefined") {
  new Swiper('.recentSwiper', {
    slidesPerView: 1,     // ALWAYS 1
    spaceBetween: 0,
    loop: true,
    speed: 900,
    centeredSlides: true,

    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },

    navigation: {
      nextEl: '.recent-next',
      prevEl: '.recent-prev',
    },

    pagination: {
      el: '.recent-pagination',
      clickable: true,
    }
  });
}