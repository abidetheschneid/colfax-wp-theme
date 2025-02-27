let colfax = {
  init: () => {
    colfax.mobileNav();
    colfax.mobileSearch();
    colfax.desktopNav();
    colfax.categoriesSidebar();
    colfax.listSplitter();
    colfax.addordions();
    colfax.homepageSlider();
  },
  mobileNav: () => {
    jQuery("#mobilenav").mmenu({
      position: "right",
    });
  },
  mobileSearch: () => {
    jQuery(".mobile-search-button").click(function () {
      jQuery("#mobile-search-wrap").slideToggle("fast");
    });
  },
  desktopNav: () => {
    jQuery("ul.nav").superfish({
      animation: { opacity: "show", height: "show" },
      speed: "fast",
      delay: 0,
      autoArrows: false,
    });
  },
  categoriesSidebar: () => {
    jQuery(".categories-wrap a").click(function () {
      jQuery(this).toggleClass("active");
      jQuery(".charities-wrap li").hide();
      indCategory = jQuery(this).attr("ID");
      if (jQuery(this).hasClass("active")) {
        jQuery("#allcategories").addClass(indCategory);
      } else {
        jQuery("#allcategories").removeClass(indCategory);
      }
      var activeCategories = jQuery("#allcategories")
        .attr("class")
        .toString()
        .split(" ");
      jQuery.each(activeCategories, function (i, activeCategory) {
        jQuery(".charities-wrap li." + activeCategory).show();
      });
    });
  },
  listSplitter: () => {
    jQuery(".charities-list").easyListSplitter({
      colNumber: 3,
      direction: "vertical",
    });
  },
  addordions: () => {
    jQuery(".accordion-toggle").click(function () {
      if (jQuery(this).hasClass("open")) {
        jQuery(this).removeClass("open");
      } else {
        jQuery(".accordion-toggle").removeClass("open");
        jQuery(this).addClass("open");
      }
      jQuery(this).next().slideToggle("fast");
      jQuery(".accordion-content").not(jQuery(this).next()).slideUp("fast");
    });
  },
  homepageSlider: () => {
    jQuery("#full-width-slider").royalSlider({
      arrowsNav: true,
      loop: true,
      controlsInside: true,
      imageScaleMode: "fill",
      arrowsNavAutoHide: false,
      autoScaleSlider: true,
      controlNavigation: "bullets",
      thumbsFitInViewport: false,
      navigateByClick: true,
      startSlideId: 0,
      autoPlay: {
        enabled: true,
        pauseOnHover: false,
        delay: 4000,
      },
    });
  },
};

// Init
jQuery("document").ready(function () {
  colfax.init();
});
