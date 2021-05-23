$('.owl-carousel-global').owlCarousel({
  loop: true,
  margin: 0,
  nav: true,
  autoWidth: false,
  autoplay: true,
  autoplayTimeout: 5000,
  autoplayHoverPause: true,
  stagePadding: 0,
  singleItem: true,
  navText: ['<span class="fas fa-chevron-circle-left fa-2x"></span>', '<span class="fas fa-chevron-circle-right fa-2x"></span>'],
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
});
