//手機觸控:active
document.addEventListener("touchstart", function() {}, true)
//order button置頂 
function check_navbar() {
    hh = $('.order_main_doc').height();
    if ($(window).scrollTop() >= hh && $('.fixed_top').hasClass('button-fixed-top') == false) {
        $('.fixed_top').addClass('button-fixed-top');
    } else if ($(window).scrollTop() < hh && $('.fixed_top').hasClass('button-fixed-top')) {
        //$('.fixed_top').removeClass('button-fixed-top');
    }
}
$(document).ready(function() {
// 置頂呼叫
    $(window).scroll(function() {
        check_navbar();
    });
    check_navbar();
// order tab
    $('#myTabs a').click(function (e) {
      e.preventDefault()
      $(this).tab('show')
    })
// url
    $('.go').click(function(){
        $('.go').removeClass('active');
        $(this).addClass('active');
        if($(this).data('url')) {
            location.href=$(this).data('url');
        }
    });
// full page
 var fullpage_options = {
    //Navigation
    menu: '#myMenu',
    lockAnchors: false,
    anchors:['firstPage', 'secondPage', 'thirdPage'],
    navigation: true,
    navigationPosition: 'right',
    navigationTooltips: ['<span class="small_word">ZEOLITE<br/>沸石洗碗機</span>', '<span class="small_word">BOSCH<br/>水動能洗衣機</span>', '<span class="small_word">BOSCH<br/>冷凝式乾衣機</span>'],
    showActiveTooltip: false,
    slidesNavigation: true,
    slidesNavPosition: 'top',

    //Scrolling
    css3: true,
    scrollingSpeed: 700,
    autoScrolling: true,
    fitToSection: true,
    fitToSectionDelay: 1000,
    scrollBar: false,
    easing: 'easeInOutCubic',
    easingcss3: 'ease',
    loopBottom: false,
    loopTop: false,
    loopHorizontal: true,
    continuousVertical: false,
    continuousHorizontal: false,
    scrollHorizontally: false,
    interlockedSlides: false,
    resetSliders: false,
    fadingEffect: true,
    normalScrollElements: '#element1, .element2',
    scrollOverflow: false,
    scrollOverflowOptions: null,
    touchSensitivity: 15,
    normalScrollElementTouchThreshold: 5,
    bigSectionsDestination: null,

    //Accessibility
    keyboardScrolling: true,
    animateAnchor: true,
    recordHistory: true,

    //Design
    controlArrows: true,
    verticalCentered: true,
    sectionsColor : ['#ffffff', '#fafafa', '#ebebeb'],
    paddingTop: '0',
    paddingBottom: '',
    fixedElements: '#header, .footer',
    responsiveWidth: 0,
    responsiveHeight: 0,
    responsiveSlides: false,

    //Custom selectors
    sectionSelector: '.section',
    slideSelector: '.slide',

    //events
    onLeave: function(index, nextIndex, direction){},
    afterLoad: function(anchorLink, index){},
    afterRender: function(){},
    afterResize: function(){},
    afterResponsive: function(isResponsive){},
    afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
    onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}
 }
 var query = Modernizr.mq('(max-width: 767px)');
 if (query) {
    fullpage_options.autoScrolling = false;
 }
    $('#fullpage').fullpage(fullpage_options);
    $('#fullpage2').fullpage({
        //Navigation
        menu: '#myMenu2',
        lockAnchors: false,
        anchors:['firstPage'],
        navigation: false,
        navigationPosition: 'right',
        navigationTooltips: [''],
        showActiveTooltip: false,
        slidesNavigation: true,
        slidesNavPosition: 'top',

        //Scrolling
        css3: true,
        scrollingSpeed: 700,
        autoScrolling: true,
        fitToSection: true,
        fitToSectionDelay: 1000,
        scrollBar: false,
        easing: 'easeInOutCubic',
        easingcss3: 'ease',
        loopBottom: false,
        loopTop: false,
        loopHorizontal: true,
        continuousVertical: false,
        continuousHorizontal: false,
        scrollHorizontally: false,
        interlockedSlides: false,
        resetSliders: false,
        fadingEffect: true,
        normalScrollElements: '#element1, .element2',
        scrollOverflow: false,
        scrollOverflowOptions: null,
        touchSensitivity: 15,
        normalScrollElementTouchThreshold: 5,
        bigSectionsDestination: null,

        //Accessibility
        keyboardScrolling: true,
        animateAnchor: true,
        recordHistory: true,

        //Design
        controlArrows: true,
        verticalCentered: true,
        sectionsColor : [''],
        paddingTop: '0',
        paddingBottom: '',
        fixedElements: '#header, .footer',
        responsiveWidth: 0,
        responsiveHeight: 0,
        responsiveSlides: false,

        //Custom selectors
        sectionSelector: '.section',
        slideSelector: '.slide',

        //events
        onLeave: function(index, nextIndex, direction){},
        afterLoad: function(anchorLink, index){},
        afterRender: function(){},
        afterResize: function(){},
        afterResponsive: function(isResponsive){},
        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
        onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}
    });
    $('#fullpage_recommend').fullpage({
        //Navigation
        menu: '#myMenu3',
        lockAnchors: false,
        anchors:['firstPage', 'secondPage'],
        navigation: true,
        navigationPosition: 'right',
        navigationTooltips: ['<span class="recommed_right_menu"><br/>家事達人</span>', '<span class="recommed_right_menu"><br/>3C達人</span>'],
        showActiveTooltip: false,
        slidesNavigation: true,
        slidesNavPosition: 'top',

        //Scrolling
        css3: true,
        scrollingSpeed: 700,
        autoScrolling: true,
        fitToSection: true,
        fitToSectionDelay: 1000,
        scrollBar: false,
        easing: 'easeInOutCubic',
        easingcss3: 'ease',
        loopBottom: false,
        loopTop: false,
        loopHorizontal: true,
        continuousVertical: false,
        continuousHorizontal: false,
        scrollHorizontally: false,
        interlockedSlides: false,
        resetSliders: false,
        fadingEffect: true,
        normalScrollElements: '#element1, .element2',
        scrollOverflow: false,
        scrollOverflowOptions: null,
        touchSensitivity: 15,
        normalScrollElementTouchThreshold: 5,
        bigSectionsDestination: null,

        //Accessibility
        keyboardScrolling: true,
        animateAnchor: true,
        recordHistory: true,

        //Design
        controlArrows: true,
        verticalCentered: true,
        sectionsColor : ['assets/images/recommend_bg', ''],
        paddingTop: '0',
        paddingBottom: '',
        fixedElements: '#header, .footer',
        responsiveWidth: 0,
        responsiveHeight: 0,
        responsiveSlides: false,

        //Custom selectors
        sectionSelector: '.section',
        slideSelector: '.slide',

        //events
        onLeave: function(index, nextIndex, direction){},
        afterLoad: function(anchorLink, index){},
        afterRender: function(){},
        afterResize: function(){},
        afterResponsive: function(isResponsive){},
        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
        onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}
    });
    // full page menu hover effect
    $("#fp-nav ul li a").hover(function() {
        $("#fp-nav ul li a").removeClass('hover_menu');
        $(this).addClass('hover_menu');
    });
    $("#fp-nav ul li a").click(function() {
        if($("#fp-nav ul li a").hasClass("active")){
            $(this).removeClass("hover_menu");
        }
    });
});

