(function($) {
  $(document).ready(function() {
    var slider = tns({
      container: ".slider",
      speed: 500,
      autoplayTimeout: 3000,
      items: 1,
      autoplay: true,
      autoHeight: false,
      controls: false,
      nav: false,
      autoplayButtonOutput: false,
      mouseDrag: true
    });
  });
})(jQuery);
