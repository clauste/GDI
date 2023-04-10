jQuery(function ($) {
    // Dropdown menu
    $('.sidebar-dropdown > a').click(function () {
      $('.sidebar-submenu').slideUp(200);
      if ($(this).parent().hasClass('active')) {
        $('.sidebar-dropdown').removeClass('active');
        $(this).parent().removeClass('active');
      } else {
        $('.sidebar-dropdown').removeClass('active');
        $(this).next('.sidebar-submenu').slideDown(200);
        $(this).parent().addClass('active');
      }
    });
  
    //toggle sidebar
    $('#toggle-sidebar').click(function () {
      $('.page-wrapper').toggleClass('toggled');
      if($('.sidebar-wrapper').hasClass('navshow')){
        $('.sidebar-wrapper').removeClass('navshow');
      }else{
        $('.sidebar-wrapper').addClass('navshow');
      }
    });
  
    // bind hover if pinned is initially enabled
    if ($('.page-wrapper').hasClass('pinned')) {
      $('#sidebar').hover(
        function () {
          console.log('mouseenter');
          $('.page-wrapper').addClass('sidebar-hovered');
        },
        function () {
          console.log('mouseout');
          $('.page-wrapper').removeClass('sidebar-hovered');
        }
      );
    }
  
    //Pin sidebar
    $('#pin-sidebar').click(function () {
      if ($('.page-wrapper').hasClass('pinned')) {
        // unpin sidebar when hovered
        $('.page-wrapper').removeClass('pinned');
        $('#pin-sidebar').addClass('fa-angle-left');
        $('#pin-sidebar').removeClass('fa-angle-right');
        $('#sidebar').unbind('hover');
      } else {
        $('.page-wrapper').addClass('pinned');
        $('#pin-sidebar').removeClass('fa-angle-left');
        $('#pin-sidebar').addClass('fa-angle-right');
        $('#sidebar').hover(
          function () {
            console.log('mouseenter');
            $('.page-wrapper').addClass('sidebar-hovered');
          },
          function () {
            console.log('mouseout');
            $('.page-wrapper').removeClass('sidebar-hovered');
          }
        );
      }
    });

    function mobileshow(x) {
      if (x.matches) { // If media query matches
        $('.page-wrapper').toggleClass('toggled');
        $('.page-wrapper').removeClass('show');
        if($('.sidebar-wrapper').hasClass('navshow')){
          $('.sidebar-wrapper').removeClass('navshow');
          $('#toggle-sidebar').removeClass('noshow');
        }
      }
    }

    function pcshow(y) {
      if (y.matches && !$('.page-wrapper').hasClass('show')) { // If media query matches        
        if(!$('.sidebar-wrapper').hasClass('navshow')){
          $('.page-wrapper').toggleClass('toggled');
          $('.page-wrapper').addClass('show');
          $('.sidebar-wrapper').addClass('navshow');
          $('#toggle-sidebar').addClass('noshow');
        }
      }
    }
    
    var x = window.matchMedia("(max-width: 900px)")
    var y = window.matchMedia("(min-width: 900px)")
    mobileshow(x); // Call listener function at run time
    pcshow(y) // Call listener function at run time
    x.addListener(mobileshow) // Attach listener function on state changes
    y.addListener(pcshow) // Attach listener function on state changes
  
    //toggle sidebar overlay
    $('#overlay').click(function () {
      $('.page-wrapper').toggleClass('toggled');
      if($('.sidebar-wrapper').hasClass('navshow')){
        $('.sidebar-wrapper').removeClass('navshow');
      }else{
        $('.sidebar-wrapper').addClass('navshow');
      }
    });
  
    //switch between themes
    var themes =
      'default-theme legacy-theme chiller-theme ice-theme cool-theme light-theme';
    $('[data-theme]').click(function () {
      $('[data-theme]').removeClass('selected');
      $(this).addClass('selected');
      $('.page-wrapper').removeClass(themes);
      $('.page-wrapper').addClass($(this).attr('data-theme'));
    });
  
    // switch between background images
    var bgs = 'bg1 bg2 bg3 bg4';
    $('[data-bg]').click(function () {
      $('[data-bg]').removeClass('selected');
      $(this).addClass('selected');
      $('.page-wrapper').removeClass(bgs);
      $('.page-wrapper').addClass($(this).attr('data-bg'));
    });
  
    // toggle background image
    $('#toggle-bg').change(function (e) {
      e.preventDefault();
      $('.page-wrapper').toggleClass('sidebar-bg');
    });
  
    // toggle border radius
    $('#toggle-border-radius').change(function (e) {
      e.preventDefault();
      $('.page-wrapper').toggleClass('boder-radius-on');
    });
  
    //custom scroll bar is only used on desktop
    if (
      !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
        navigator.userAgent
      )
    ) {
      $('.sidebar-content').mCustomScrollbar({
        axis: 'y',
        autoHideScrollbar: true,
        scrollInertia: 300,
      });
      $('.sidebar-content').addClass('desktop');
    }
  });  