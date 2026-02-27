/**
* Template Name: Bootslander (Customized)
* Author: BootstrapMade.com
* Modified By: You
*/

(function () {
  "use strict";

  /* ================= SPINNER ================= */
  const spinner = document.querySelector('#spinner');
  if (spinner) {
    window.addEventListener('load', () => {
      spinner.classList.remove('show');
    });
  }

  /* ================= WOW INIT ================= */
  if (typeof WOW === "function") {
    new WOW().init();
  }

  /* ================= SCROLL EFFECTS ================= */
  const branding = document.querySelector('.branding');
  const backToTop = document.querySelector('.back-to-top');

  function onScroll() {
    const scrollY = window.scrollY;

    // Navbar background
    if (branding) {
      scrollY > 50
        ? branding.classList.add('scrolled')
        : branding.classList.remove('scrolled');
    }

    // Back to top
    if (backToTop) {
      scrollY > 300
        ? backToTop.classList.add('active')
        : backToTop.classList.remove('active');
    }
  }

  window.addEventListener('scroll', onScroll);
  window.addEventListener('load', onScroll);

  /* ================= BACK TO TOP ================= */
  if (backToTop) {
    backToTop.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

  /* ================= MOBILE NAVIGATION ================= */
  const navMenu = document.querySelector('.navmenu');
  const navToggle = document.querySelector('.mobile-nav-toggle');

  function closeMobileNav() {
    navMenu?.classList.remove('active');
    navToggle?.classList.remove('bi-x');
    navToggle?.classList.add('bi-list');
    document.body.style.overflow = '';
  }

  if (navToggle && navMenu) {
    navToggle.addEventListener('click', (e) => {
      e.preventDefault();
      e.stopPropagation();

      navMenu.classList.toggle('active');

      if (navMenu.classList.contains('active')) {
        navToggle.classList.remove('bi-list');
        navToggle.classList.add('bi-x');
        document.body.style.overflow = 'hidden';
      } else {
        closeMobileNav();
      }
    });

    document.querySelectorAll('.navmenu a').forEach(link => {
      link.addEventListener('click', closeMobileNav);
    });

    document.addEventListener('click', (e) => {
      if (
        !navMenu.contains(e.target) &&
        !navToggle.contains(e.target) &&
        navMenu.classList.contains('active')
      ) {
        closeMobileNav();
      }
    });

    document.addEventListener('keyup', (e) => {
      if (e.key === 'Escape') closeMobileNav();
    });
  }

  /* ================= MODAL VIDEO ================= */
  let videoSrc = '';
  document.querySelectorAll('.btn-play').forEach(btn => {
    btn.addEventListener('click', () => {
      videoSrc = btn.getAttribute('data-src');
    });
  });

  const videoModal = document.querySelector('#videoModal');
  const videoIframe = document.querySelector('#video');

  if (videoModal && videoIframe) {
    videoModal.addEventListener('shown.bs.modal', () => {
      videoIframe.src = videoSrc + '?autoplay=1&modestbranding=1&showinfo=0';
    });

    videoModal.addEventListener('hide.bs.modal', () => {
      videoIframe.src = videoSrc;
    });
  }

  /* ================= COUNTER ================= */
  if (typeof PureCounter === "function") {
    new PureCounter();
  }

  /* ================= TESTIMONIAL CAROUSEL ================= */
  if (typeof Swiper !== "undefined") {
    new Swiper('.testimonial-carousel', {
      autoplay: {
        delay: 4000,
        disableOnInteraction: false
      },
      speed: 1000,
      loop: true,
      navigation: {
        nextEl: '.bi-chevron-right',
        prevEl: '.bi-chevron-left'
      }
    });
  }

  /* ================= SERVICE CARD HOVER ================= */
  document.querySelectorAll('.service-item').forEach(item => {
    item.addEventListener('mouseenter', () => item.classList.add('active'));
    item.addEventListener('mouseleave', () => item.classList.remove('active'));
  });

  /* ================= SERVICE TAGS ================= */
  document.querySelectorAll('.service-tags span').forEach(tag => {
    tag.addEventListener('click', () => {
      document
        .querySelectorAll('.service-tags span')
        .forEach(t => t.classList.remove('active'));

      tag.classList.add('active');
    });
  });

  /* ================= BLOG SWIPER ================= */
  if (typeof Swiper !== "undefined" && document.querySelector('.recentSwiper')) {
    new Swiper('.recentSwiper', {
      slidesPerView: 1,
      loop: true,
      speed: 900,
      centeredSlides: true,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false
      },
      navigation: {
        nextEl: '.recent-next',
        prevEl: '.recent-prev'
      },
      pagination: {
        el: '.recent-pagination',
        clickable: true
      }
    });
  }

})();

/* ================= MOBILE NAVIGATION ================= */
const navMenu = document.querySelector('.navmenu');
const navToggle = document.querySelector('.mobile-nav-toggle');

function closeMobileNav() {
  navMenu.classList.remove('active');
  navToggle.classList.remove('bi-x');
  navToggle.classList.add('bi-list');
  document.body.style.overflow = '';
}

if (navToggle && navMenu) {
  navToggle.addEventListener('click', function (e) {
    e.preventDefault();
    e.stopPropagation();

    navMenu.classList.toggle('active');

    if (navMenu.classList.contains('active')) {
      navToggle.classList.remove('bi-list');
      navToggle.classList.add('bi-x');
      document.body.style.overflow = 'hidden';
    } else {
      closeMobileNav();
    }
  });

  // Close on menu link click
  navMenu.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', closeMobileNav);
  });

  // Close on outside click
  document.addEventListener('click', function (e) {
    if (
      navMenu.classList.contains('active') &&
      !navMenu.contains(e.target) &&
      !navToggle.contains(e.target)
    ) {
      closeMobileNav();
    }
  });

  // Close on ESC
  document.addEventListener('keyup', function (e) {
    if (e.key === 'Escape') closeMobileNav();
  });
}

document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.querySelector(".mobile-nav-toggle");
    const nav = document.querySelector("#navmenu");
    const icon = toggle.querySelector("i");

    toggle.addEventListener("click", function () {
        nav.classList.toggle("active");

        if (nav.classList.contains("active")) {
            icon.classList.remove("bi-list");
            icon.classList.add("bi-x");
        } else {
            icon.classList.remove("bi-x");
            icon.classList.add("bi-list");
        }
    });
});

window.acceptCookies = function () {
    let d = new Date();
    d.setTime(d.getTime() + (1 * 60 * 1000));

    document.cookie =
        "cookie_consent=all;path=/;expires=" + d.toUTCString() + ";SameSite=Lax";

    document.querySelector(".cookie-banner").style.display = "none";
};

window.acceptNecessary = function () {
    let d = new Date();
    d.setTime(d.getTime() + (1 * 60 * 1000));

    document.cookie =
        "cookie_consent=necessary;path=/;expires=" + d.toUTCString() + ";SameSite=Lax";

    document.querySelector(".cookie-banner").style.display = "none";
};

// window.acceptCookies = function () {
//     // 1 year expiry
//     let d = new Date();
//     d.setTime(d.getTime() + (30 * 24 * 60 * 60 * 1000));

//     // Set consent = all
//     document.cookie =
//         "cookie_consent=all;path=/;expires=" + d.toUTCString() + ";SameSite=Lax";

//     // Hide banner
//     const banner = document.querySelector(".cookie-banner");
//     if (banner) {
//         banner.style.display = "none";
//     }
// };


// window.acceptNecessary = function () {
//     // 1 year expiry
//     let d = new Date();
//     d.setTime(d.getTime() + (30 * 24 * 60 * 60 * 1000));

//     // Set consent = necessary
//     document.cookie =
//         "cookie_consent=necessary;path=/;expires=" + d.toUTCString() + ";SameSite=Lax";

//     // Hide banner
//     const banner = document.querySelector(".cookie-banner");
//     if (banner) {
//         banner.style.display = "none";
//     }
// };


document.addEventListener("DOMContentLoaded", function () {
    function getCookie(name) {
        return document.cookie
            .split("; ")
            .find(row => row.startsWith(name + "="));
    }

    const consent = getCookie("cookie_consent");

    if (!consent) {
        document.querySelector(".cookie-banner").style.display = "block";
    }
});