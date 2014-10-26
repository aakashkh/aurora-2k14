/* ==============================================
Bootstrap fix for WinPhone 8 and IE10 
=============================================== */

if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
  	var msViewportStyle = document.createElement("style")
  	msViewportStyle.appendChild(
    	document.createTextNode(
      		"@-ms-viewport{width:auto!important}"
    	)
  	)
  	document.getElementsByTagName("head")[0].appendChild(msViewportStyle)
}

function detectIE() {
	if ($.browser.msie && $.browser.version == 9) {
		return true;
	}
	if ($.browser.msie && $.browser.version == 8) {
		return true;
	}
	return false;
}

function getWindowWidth() {
    return Math.max( $(window).width(), window.innerWidth);
}

function getWindowHeight() {
    return Math.max( $(window).height(), window.innerHeight);
}

$(window).load(function() {

    /* ==============================================
    Preloader
    =============================================== */
    var preloaderDelay = 350,
        preloaderFadeOutTime = 800;

    function hidePreloader() {
        var loadingAnimation = $('#loading-animation'),
            preloader = $('#preloader');

        loadingAnimation.fadeOut();
        preloader.delay(preloaderDelay).fadeOut(preloaderFadeOutTime);
    }

    hidePreloader();

});

jQuery(document).ready(function($) {

	/* ==============================================
    Animated Elements
    =============================================== */

    $('.animated').appear();

    if( detectIE() ) {

    	$('.animated').css({
    		'display':'block',
    		'visibility': 'visible'
    	});

    } else {

    	$('.animated').on('appear', function() {
	        var elem = $(this);
	        var animation = elem.data('animation');
	        if ( !elem.hasClass('visible') ) {
	        	var animationDelay = elem.data('animation-delay');
	            if ( animationDelay ) {

	                setTimeout(function(){
	                    elem.addClass( animation + " visible" );
	                }, animationDelay);

	            } else {
	                elem.addClass( animation + " visible" );
	            }
	        }
	    });

    }
    
    /* ==============================================
    Smooth Scroll
    =============================================== */

    var scrollAnimationTime = 1000,
        scrollAnimation = 'easeInOutExpo';

    $('a.scrollto').bind('click.smoothscroll',function (event) {
        event.preventDefault();

        var target = this.hash;

        $('html, body').stop().animate({
            'scrollTop': $(target).offset().top
        }, scrollAnimationTime, scrollAnimation, function () {
            window.location.hash = target;
        });

    });

    /* ==============================================
    Navigation
    =============================================== */

    $('.nav-trigger').on('click', function(e) {

        e.preventDefault();

        $('#main-nav').toggleClass('active');

    });

    function nativiaNav() {
 
        var config = {
            $sections : $( 'section.on-menu' ),
            $navlinks : $( '#main-nav ul li' ),
            currentLink : 0,
            $body : $( 'html, body' ),
            animspeed : 1000,
            animeasing : 'easeInOutExpo'
        };

        function init() {

            if( $('#main-nav ul').hasClass('nav-disabled') ) {
                return false;
            }
     
            config.$navlinks.each(function(index){
                $(this).find('a').on( 'click', function() {
                    scrollAnim( config.$sections.eq(index).offset().top, this.hash );
                    return false;
                });
            });

            config.$sections.waypoint( function( direction ) {
                if( direction === 'down' ) { changeNav( $( this ) ); }
            }, { offset: '30%' } ).waypoint( function( direction ) {
                if( direction === 'up' ) { changeNav( $( this ) ); }
            }, { offset: '-30%' } );
     
            $( window ).on( 'debouncedresize', function() {
                scrollAnim( config.$sections.eq( config.currentLink ).offset().top );
            } );
             
        }
     
        function changeNav( $section ) {
            config.$navlinks.eq( config.currentLink ).removeClass( 'current' );
            config.currentLink = $section.index( 'section.on-menu' );
            config.$navlinks.eq( config.currentLink ).addClass( 'current' );
        }
     
        function scrollAnim( top, hash) {
            config.$body.stop().animate( { scrollTop : top }, config.animspeed, config.animeasing, function() {
                window.location.hash = hash;
            });
        }

        init();

    }

    nativiaNav();

    /* ==============================================
    Home
    =============================================== */

    function setHomeHeight() {

        var home = $('#home');

        if( home.hasClass('fullscreen') ) {
            home.height( getWindowHeight() );
        } 
    }

    function initHomeSlider() {

        if( $('body').hasClass('project-page') ) {
            return false;
        }

        $.backstretch([
            "images/background-intro.jpg"
            , "images/background-intro-2.jpg"
            , "images/background-intro-3.jpg"
          ], {duration: 2600, fade: 1000});

    }

    initHomeSlider();
    
    setHomeHeight();

    $(window).resize(function () {
        setHomeHeight();
    });

    $('.home-slider').flexslider({
        animation: "slide",
        directionNav: false,
        controlNav: false,
        direction: "vertical",
        slideshowSpeed: 3600,
        animationSpeed: 1000,
        smoothHeight: true
    }); 

    /* ==============================================
    PrettyPhoto
    =============================================== */

    function initPrettyPhoto(){
        
        $("a.pp").prettyPhoto({
            theme: 'dark_rounded',
            allow_resize: true,
            default_width: 600,
            opacity: 0.85, 
            default_height: 400,
            social_tools: ''
        });
        
    }
    
    initPrettyPhoto();

    /* ==============================================
    FlexSlider
    =============================================== */

    function initFlexSlider(){

        $('.flexslider').flexslider({
            animation: "slide",
            directionNav: false,
            slideshowSpeed: 3500,
            animationSpeed: 1000
        });

    }
    
    initFlexSlider();

    /* ==============================================
    FitVids
    =============================================== */

    function initFitVids(){

        $(".video-container").fitVids();
        
    }
    
    initFitVids();

    /* ==============================================
    Easy Pie chart
    =============================================== */

    var pieChartClass = 'pie-chart',
        pieChartAnimationTime = 2000,
        pieChartLoadedClass = 'pie-chart-loaded';

    function initPieCharts() {
        var chart = $('.' + pieChartClass);

        chart.appear();

        chart.each(function() {
            $(this).on('appear', function() {

                var $this = $(this),
                    chartSize = ($this.data('chartsize')) ? $this.data('chartsize') : 200,
                    chartLineWidth = ($this.data('linewidth')) ? $this.data('linewidth') : 5,
                    chartLineCap = ($this.data('linecap')) ? $this.data('linecap') : 5,
                    chartBarColor = ($this.data('barcolor')) ? $this.data('barcolor') : "#5aa9ce",
                    chartTrackColor = ($this.data('trackcolor')) ? $this.data('trackcolor') : "#eeeeee";

                if( !$this.hasClass(pieChartLoadedClass) ) {
                    $this.easyPieChart({
                        animate: pieChartAnimationTime,
                        barColor: chartBarColor,
                        trackColor: chartTrackColor,
                        size: chartSize,
                        lineWidth: chartLineWidth,
                        lineCap: chartLineCap,
                        scaleColor: false
                    }).addClass(pieChartLoadedClass);
                }
                
            });
        });
        
    }

    initPieCharts();

    /* ==============================================
    Testimonials
    =============================================== */

    $('.testimonials-slider').flexslider({
        animation: "slide",
        easing: "easeInOutExpo",
        directionNav: false,
        smoothHeight: true,
        animationSpeed: 1000,
        slideshow: false
    });

    /* ==============================================
    Form Submission
    =============================================== */

    var formSubmitMessage = $('p.form-message');

    $('form').submit(function() {

    	var $this = $(this),
    		formData = $this.serialize(),
    		formAction = $this.attr('action'),
    		formEmail = $('input[name=email]').attr('value');
    		

    	if(validateEmail(formEmail)) {

    		/*
    		
    		$.post(formAction, formData, function(data) {
	  			formSubmitMessage.text(data);
			});

			*/
				
			return false;

    	} else {
    		formSubmitMessage.text('Please enter a valid e-mail address');
			return false;
    	}


    });

    function validateEmail(email) { 
	    var exp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	    return exp.test(email);
	}

});

/* ==============================================
Portfolio
=============================================== */

function layoutPortfolio() {

    var $container = $('.portfolio'),
        $items = $container.find('.portfolio-item');

    $container.isotope({
        filter: '*',
        animationEngine: 'best-available',
        layoutMode: 'fitRows',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    }, refreshWaypoints());

    function refreshWaypoints() {
        setTimeout(function() {
            $.waypoints('refresh');
        }, 1000);   
    }

    $('nav.portfolio-filter ul a').on('click', function() {
        var selector = $(this).attr('data-filter');
        $container.isotope({ filter: selector }, refreshWaypoints());
        $('nav.portfolio-filter ul a').removeClass('active');
        $(this).addClass('active');
        return false;
    });

    function getColumnNumber() { 
        var winWidth = $(window).width(), 
            columnNumber = 1;

        if (winWidth > 1200) {
            columnNumber = 5;
        } else if (winWidth > 950) {
            columnNumber = 4;
        } else if (winWidth > 600) {
            columnNumber = 3;
        } else if (winWidth > 400) {
            columnNumber = 2;
        } else if (winWidth > 250) {
            columnNumber = 1;
        }
        
        return columnNumber;
    }       
    
    function setColumns() {
        var winWidth = $(window).width(), 
            columnNumber = getColumnNumber(), 
            itemWidth = Math.floor(winWidth / columnNumber);
        
        $container.find('.portfolio-item').each(function() { 
            $(this).css( { 
                width : itemWidth + 'px' 
            });
        });
    }

    function setPortfolio() { 
        setColumns();
        $container.isotope('reLayout');
    }
    
    $container.imagesLoaded(function () { 
        setPortfolio();
    });

    $(window).on('resize', function () { 
        setPortfolio();          
    });

}

function initPortfolio() {

    var url,
        hash,
        wrapperHeight,
        pageRefresh = true,
        content = false,
        ajaxLoading = false,
        folderName = "projects",
        projectCloseClassName = "project-close",
        projectNavigationClassName = "project-navigation",
        projectContainerClassName = "project-content",
        scrollElement = $('html,body'),
        portfolioGrid = $('.portfolio'),
        portfolioItem = $('.portfolio-item'),
        projectLoader = $('.project-loader'),
        animationEasing = 'easeOutExpo',
        animationTime = 800;

    $(window).bind('hashchange', function() {

        hash = $(window.location).attr('hash'); 
        var root = '#?'+ folderName +'/';
        var rootLength = root.length;

        if(hash.substr(0,rootLength) != root ){

            return;

        } else {

            hash = $(window.location).attr('hash'); 
            url = hash.replace(/[#?]/g, '');

            portfolioGrid.find('.portfolio-item.current').removeClass('current');

            var projectContainer = $('.' + projectContainerClassName),
                projectClose = $('.' + projectCloseClassName),
                projectNav = $('.' + projectNavigationClassName);

            if(pageRefresh == true && hash.substr(0,rootLength) == root) {  

                scrollElement.stop().animate({scrollTop: (projectContainer.offset().top) + 'px'}, animationTime, animationEasing, function() {                                          
                    loadProject();                                                                                                    
                });

            } else if(pageRefresh == false && hash.substr(0,rootLength) == root) {          
                
                scrollElement.stop().animate({scrollTop: (projectContainer.offset().top - 50) + 'px'}, animationTime, animationEasing, function() {      
    
                    if(content == false) {                       
                        loadProject();                          
                    } else {  
                        projectContainer.animate({opacity:0,height:wrapperHeight},function() {
                            loadProject();
                        });
                    }

                    projectClose.fadeOut();
                    projectNav.fadeOut();
                        
                });
            }

            portfolioGrid.find('.portfolio-item a[href="#?' + url + '"]' ).parent().addClass('current');
        }

    });

    function loadProject() {

        projectLoader.fadeIn().removeClass('projectError').html('');

        if(!ajaxLoading) {

            ajaxLoading = true;
            var projectContainer = $('.' + projectContainerClassName);

            projectContainer.load( url +' section#project-page', function(xhr, statusText, request) {

                if(statusText == "success") {                
                    ajaxLoading = false;
                    $('#project-page').waitForImages(function() {
                        hideLoader();  
                    });
                    $('.flexslider').flexslider({
                        animation: "slide",
                        directionNav: false,
                        slideshowSpeed: 3500,
                        animationSpeed: 1000
                    });
                    $(".video-container").fitVids();
                }

                if(statusText == "error") {

                    alert("An error as occurred");

                }

            });

        }
            
    }

    function hideLoader() {
        projectLoader.delay(400).fadeOut( function() {                                                    
            showProject();                  
        }); 
    }

    function showProject() {

        var projectContainer = $('.' + projectContainerClassName),
            projectClose = $('.' + projectCloseClassName),
            projectNav = $('.' + projectNavigationClassName);
        wrapperHeight = projectContainer.children('#project-page').outerHeight()+'px';
        
        if(content == false) {
            wrapperHeight = projectContainer.children('#project-page').outerHeight() + 'px';
            projectContainer.animate({opacity:1,height:wrapperHeight}, function() {
                scrollPosition = scrollElement.scrollTop();
                projectClose.fadeIn();
                projectNav.fadeIn();
                content = true;               
            });
        } else {
            wrapperHeight = projectContainer.children('#project-page').outerHeight() + 'px';
            projectContainer.animate({opacity:1,height:wrapperHeight}, function() {                                                                  
                scrollPosition = scrollElement.scrollTop();
                projectClose.fadeIn();
                projectNav.fadeIn();
            });                 
        }

        projectActiveIndex = portfolioGrid.find('.portfolio-item.current').index();
        projectNumber = $('.portfolio-item a').length-1;

        if(projectActiveIndex == projectNumber) {

            $('.project-next a').addClass('disabled');
            $('.project-prev a').removeClass('disabled');

        } else if(projectActiveIndex == 0) {

            $('.project-prev a').addClass('disabled');
            $('.project-next a').removeClass('disabled');

        } else {

            $('.project-next a, .project-prev a').removeClass('disabled');

        }
    
    }

    function deleteProject(closeURL){

        var projectContainer = $('.' + projectContainerClassName),
            projectClose = $('.' + projectCloseClassName),
            projectNav = $('.' + projectNavigationClassName);

        projectClose.fadeOut();
        projectNav.fadeOut();

        if(typeof closeURL!='undefined' && closeURL!='') {
            window.location.hash = '#!';
        }

        projectContainer.animate({opacity:0,height:'0px'},800,'easeOutExpo');
        projectContainer.empty();
        scrollElement.stop().animate({
            scrollTop: ($('#portfolio').offset().top)+'px'},600
        );

        portfolioGrid.find('.portfolio-item.current').removeClass('current');      
    }

    function bindCloseProject() {

        $('.project-close a').on('click',function () {
            var loader = $('.project-loader');                          
            deleteProject($(this).attr('href'));                                        
            loader.fadeOut();
            return false;
        });

    }

    function bindNextProject() {

        $('.project-next > a').on('click',function () {                                                                  
            current = portfolioGrid.find('.portfolio-item.current');
            next = current.next('.portfolio-item');
            target = $(next).children('a').attr('href');
            $(this).attr('href', target);

            if (next.length === 0) { 
                return false;             
            } 

            current.removeClass('current'); 
            next.addClass('current');
           
        });
    }

    function bindPrevProject() {

        $('.project-prev > a').on('click',function () {       
            current = portfolioGrid.find('.portfolio-item.current');
            prev = current.prev('.portfolio-item');
            target = $(prev).children('a').attr('href');
            $(this).attr('href', target);

            if (prev.length === 0) {
                return false;         
            }

            current.removeClass('current');
            prev.addClass('current');

        });
    }

    function bindActions() {
        bindCloseProject();
        bindNextProject();
        bindPrevProject();
    }
    
    bindActions();

    function setProjectHeight() {
        var projectContainer = $('.' + projectContainerClassName),
            projectHeight = $('#project-page').outerHeight() + 'px';

        projectContainer.height(projectHeight);
    }

    $(window).resize(function () {
        setProjectHeight();
    });

    pageRefresh = false;

}

/* ==============================================
Map
=============================================== */

function initMap() {

    var scrollElement = $('html,body'),
        $map = $('#map'),
        $mapHolder = $('#map-holder'),
        $mapclose = $('.map-close'),
        mapActiveClass = 'map-active',
        mapStartingHeight = $('#map').height(),
        mapHeight = 650,
        mapAnimationTime = 800,
        mapEasing = 'easeInOutExpo',
        mapOptions = {
            center: new google.maps.LatLng(40.699658,-73.991164),
            zoom: 16,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false
        },
        map,
        mapMarkerTitle = 'Nervaq';


    $mapHolder.on('click', function() {

        var $this = $('#map-holder');

        if( !$this.parent().hasClass(mapActiveClass) ) {

            scrollElement.stop().animate({scrollTop: ($this.offset().top - 65) + 'px'}, mapAnimationTime, mapEasing);
            $this.parent().addClass(mapActiveClass);
            $this.stop().animate({'height': mapHeight + 'px'}, mapAnimationTime, function() {
                map = new google.maps.Map(document.getElementById("map-holder"),mapOptions);
                var marker = new google.maps.Marker({
                    position: mapOptions.center,
                    title: mapMarkerTitle
                });
                marker.setMap(map);
                $this.stop().animate({'opacity': 1}, mapAnimationTime);
                $mapclose.fadeIn();
            }); 
        }    
    });

    $mapclose.on('click', function(e) {

        e.preventDefault();

        if( $('#map').hasClass(mapActiveClass) ) {
            $('#map').removeClass(mapActiveClass);
            $('#map-holder').stop().animate({'height': mapStartingHeight, 'opacity': 0}, mapAnimationTime, function() {
                $('#map-holder').empty().removeAttr('style');
                $mapclose.fadeOut();
            });
        }

    });
}

$(window).load(function() {
    $(window).trigger( 'hashchange' );
});

$(document).ready(function() {
    layoutPortfolio();
    initPortfolio();
    initMap();
});