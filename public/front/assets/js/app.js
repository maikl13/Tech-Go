{

  

  // Animation AOS

  setTimeout(() => {

    AOS.init({

      duration: 1000,

      easing: "ease-in-out",

      once: true,

      mirror: false

    });

  }, 120);

}



$.ajaxSetup({

  headers: {

      'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')

  }

});


$(".listFilter li").click(function() {
  var locale = $("#locale").val()
  var filter = $(this).attr('data-filter');
  var limit = $(this).parent().attr('data-limit')
  $.ajax({
    url:"/"+ locale +"/projects/get?category=" + filter + "&limit=" + limit,
    type:"get",
    success:function(data) {
      $(".all__portfolio__Projects").html("")
      $(".all__portfolio__Projects").append(data)
      $(".mypup-gallery").magnificPopup({

        type: "image",
  
        gallery: {
  
          enabled: true,
  
          navigateByImgClick: true,
  
          preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
  
        }
  
      });

    }
  })
})



$(".my-form").on("submit", function(e) {

  e.preventDefault()

  $.ajax({

    url:"/message/send",

    type:"post",

    data: $('.my-form').serialize(),

    success: function(data) {

      if(data == "true") {

        $(".message-sent").show()

        $('.my-form').trigger("reset");

      }

    }

  })

})



$(".newsletter").on("submit", function(e) {

  e.preventDefault()

  var form = $(this)

  $.ajax({

    url:"/newsletter/submit",

    type:"post",

    data: form.serialize(),

    success: function(data) {

      if(data == "true") {

        form.find(".newsletter-success").show()

        form.trigger("reset");

      }

    }

  })

})



{

  const whatsappContact = document.querySelector(".whatsappContact"); // Whatsapp Icons

  const button__Scroll = document.querySelector(".btnScroll"); // Button To Scroll



  window.addEventListener("scroll", () => {

    if (window.scrollY >= 500) {

      if(button__Scroll != null) {
      button__Scroll.classList.add("active"); 
      } // Add Class Active To Button Scroll From "-60px" To "25px"

      whatsappContact.classList.add("active"); // Add Class Active From right "-80px" To right "50px"

    } else {

      if(button__Scroll != null) {
      button__Scroll.classList.remove("active"); // Remove Class Active Form "25px" To "-60px"
      }

      whatsappContact.classList.remove("active"); // Remove Class active From right "50px" To "-80px"

    }

  });

  if(button__Scroll != null) {
  button__Scroll.addEventListener("click", (e) => {

    // When Click On Button Scroll Add Top "0" And Scroll Smooth

    window.scrollTo({

      top: 0,

      behavior: "smooth"

    });

  });
}

}


var menuLinks;
var menu__Bar;
{

  
  const allMenu = document.querySelector(".allMenu"); // Menu Navbar "background"

  const menu = document.querySelector(".menu"); // menu

  menuLinks = document.querySelector(".menuLinks"); // Links Menu

  const toggle = document.querySelector(".toggle i"); // Toggle Icon

  const iconClose = document.querySelector(".iconClose"); // close icon

  menu__Bar = document.querySelector(".menu__Bar"); // menuBar



  function removeMenuBar() {

    // Function remove Active From Menu Bar Mobile

    menuLinks.classList.remove("active"); // Remove class Active From menu links

    menu__Bar.classList.remove("active"); // Remove class Active From menu bar overlay

    // menu__Social__Container.classList.remove("active"); // Remove class Active From menu social From "0" To left "-34px"

  }



  window.onscroll = (e) => {

    // Window On Scroll

    removeMenuBar(); // Remove Class Active From menu Links In "mobile"

    // toggle.classList.replace(`fa-close`, `fa-bars`); // Change Icon "Close" To Iocn "Bars"



    if (window.scrollY >= 500) {

      // If Window Increese Than or Aquel 500px

      menu.classList.add("active"); // add Class Acive To menu Form Static To "fixed"

      allMenu.classList.add("active"); // Add class Active To All menu Heigh Form "70px" To "60px"

    } else {

      menu.classList.remove("active"); // Remove Class active Form Menu Fixed To "static"

      allMenu.classList.remove("active"); // Remove Class Active From Height "60px" To Height "70px"

    }

  };



  toggle.addEventListener("click", (e) => {

    // Toggle Bars

    menuLinks.classList.add("active"); // Add Class Active To menu Links from right -100% To Right 0

    menu__Bar.classList.add("active"); // Add Class Active To menu bar Overlay From right  -100% To 0

  });

  iconClose.addEventListener("click", (e) => {

    removeMenuBar(); // Function remove class active from menubar & menulinks

  });



  menu__Bar.addEventListener("click", (e) => {

    removeMenuBar(); // Function remove class active from menubar & menulinks

  });





}



{

  // type Speed "text"

  (function () {

    var strings = [];

    var string_data = JSON.parse(document.getElementById("banner-strings").value);

 

    string_data.forEach(function(el) {

      strings.push(el)

    })

    const typed = new Typed(".typed", {

      strings: strings,

      typeSpeed: 120,

      backSpeed: 120,

      loop: true

    });

  })();

}



{

  const overlay__Video = document.querySelector(".overlay__Video"); // Vido Overlay

  const buttonAnim = document.getElementsByClassName("buttonAnim"); // Button Anim

  const closeVideo = document.querySelector(".close"); // Close Iocn

  const myVideo = document.querySelector("#video-source"); // Close Iocn



  function removeVido() {

    // Function Remove Vido Ovrlay

    overlay__Video.classList.remove("active");

  }



  // buttonAnim.addEventListener("click", (e) => {



  // });



  $(".buttonAnim").click(function() {

    if(!$(this).hasClass('whatsapp')) {
    var link = $(this).attr('data-src')

    showVideo(link)
    }

  })  

  

  $(".all__Customer").on("click",".buttonAnim", function() {

    if(!$(this).hasClass('whatsapp')) {
    var link = $(this).attr('data-src')

    showVideo(link)
    }

  })



  function showVideo(link) {

    $("#video-source").attr('src', link)

    overlay__Video.classList.add("active");

  }



  closeVideo.addEventListener("click", (e) => {

    // click On Close Button Icon RemoveClass Active From vido overlay

    removeVido();

  });

  overlay__Video.addEventListener("click", () => {

    // click On any Where overlay RemoveClass Active From vido overlay

    removeVido();

  });

}



{

  // mockup Screen

  $(".mockupSC").owlCarousel({

    singleItem: true,

    autoPlay: false,

    navigation: false,

    pagination: false,

    mouseDrag: true,

    touchDrag: false,

    nav: true,

    dots: true,

    loop: true,

    margin: 0,

    navText: false,

    items: 1,

    navText: [

      "<i class='fa-solid fa-chevron-right'></i>",

      "<i class='fa-solid fa-chevron-left'></i>"

    ],

    touchDrag: true,

    smartSpeed: 1300,

    autoplay: true,

    autoplayTimeout: 4000,

    autoplayHoverPause: false,

    responsiveClass: true,

    autoHeight: true

  });

}



{

  //slider Mockup mobile

  $(".slider").owlCarousel({

    items: 1,

    singleItem: true,

    dots: false,

    loop: true,

    autoPlay: 3000

  });

}



{

  // slider Services

  $(".slider-one").owlCarousel({

    nav: true,

    dots: true,

    loop: true,

    margin: 40,

    navText: false,

    items: 3,

    thumbs: false,

    smartSpeed: 1300,

    autoplay: true,

    autoplayTimeout: 4000,

    autoplayHoverPause: false,

    responsiveClass: true,

    autoHeight: true,

    responsive: {

      0: {

        items: 1

      },

      768: {

        items: 2

      },

      1200: {

        items: 3

      },

      1400: {

        items: 4

      }

    }

  });

}

{

  // slider reviews

  $(".slider-Two").owlCarousel({

    nav: true,

    dots: true,

    loop: true,

    margin: 15,

    navText: false,

    items: 3,

    thumbs: false,

    smartSpeed: 1300,

    autoplay: true,

    autoplayTimeout: 4000,

    autoplayHoverPause: false,

    responsiveClass: true,

    autoHeight: true,

    responsive: {

      0: {

        items: 1.5

      },

      768: {

        items: 2

      },

      1200: {

        items: 4

      },

      1400: {

        items: 4

      }

    }

  });

}

{

  // Customer Testimonials

  $("#customers-testimonials").owlCarousel({

    loop: true,

    center: true,

    items: 3,

    margin: 0,

    autoplay: true,

    dots: true,

    autoplayTimeout: 8500,

    smartSpeed: 450,

    responsive: {

      0: {

        items: 1

      },

      768: {

        items: 2

      },

      1170: {

        items: 1.5

      }

    }

  });

  $("#teams-sliders").owlCarousel({

    loop: true,

    center: true,

    items: 3,

    margin: 15,

    autoplay: true,

    dots: true,

    autoplayTimeout: 8500,

    smartSpeed: 450,

    responsive: {

      0: {

        items: 2

      },

      768: {

        items: 2

      },

      1000: {

        items: 5

      }

    }

  });
}

function app() {

  {

    // filter portfolio

    const navFilter = document.querySelectorAll(".navFilter");

    $(document).ready(function () {

      // var mixinF = mixitup(".all__portfolio__Projects", {
      //   animation: {
      //     queueLimit:5000
      // }
      // });

    });



    navFilter.forEach((item) => {

      // loop on all links

      item.addEventListener("click", (e) => {

        // click on item === "navFilter"

        navFilter.forEach((itemFilter) => {

          // Loop to add And remove Active Form navFilter

          itemFilter.classList.remove("active"); // remove class Active Fromm all NavFilter

          e.target.classList.add("active"); // The Element i click Add Class Active

        });

      });

    });

  }



  {

    // magnificPopup Slider

    $(".mypup-gallery").magnificPopup({

      type: "image",

      gallery: {

        enabled: true,

        navigateByImgClick: true,

        preload: [0, 1] // Will preload 0 - before current, and 1 after the current image

      }

    });

  }

}

app();

{

  // Initialize PureCounter by Default. It also can be stored on variable

  new PureCounter();

  // Initialize PureCounter using custom selector and custom default configuration.

  // It also can be stored on variable

  new PureCounter({

    filesizing: true,

    selector: ".filesizecount",

    pulse: 2

  });

}

