var site =  (function (window,document, $){

    var prevScroll = 0;

    function init(){
        addListeners();
    }
    function addListeners(){
        addResizeListener();
        addNavListener();
        addScrollListener();
        addAnchorScrollListener();
        addModalListeners();
    }
    function addResizeListener(){
        $(window).resize(function() {
            aspectResize();
            navResize();
        });
    }
    function addNavListener(){
        $('#top-nav').click(function(e){
            var $el = $(this);
            if (document.documentElement.clientWidth < 960) {
                if ($el.hasClass('active')){
                    $el.removeClass('active').addClass('inactive');
                } else {
                    $el.removeClass('inactive').addClass('active');
                }
            }
        })
    }
    function addScrollListener(){
        var scrollElements = $('.scrollfx');
        if (scrollElements.length > 0){
            scrollFunctions(scrollElements);
        }
    }
    function addAnchorScrollListener(){
        $('a[href*=#]:not([href=#])').click(function() {
            console.log('asl');
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 500);
                    return false;
                }
            }
        });
    }
    function addModalListeners(){

        $('.close-btn').on('click',function(e){
            e.preventDefault();
            $('.overlay-content.active').fadeTo(300,0,function(){
                $(this).hide().removeClass('active');
                $('.overlay-bg').fadeTo(300,0,function(){
                    $(this).hide();
                    $('#overlay-container').removeClass('active');
                });
            });
        });

        $('.btn-modal').on('click', function(){
            console.log('click');
            var $el = $(this);
            var id = $el.data('id');
            var $modal = $('#'  + id);
            $('#overlay-container').addClass('active');
            $('.overlay-bg').fadeTo(300,1,function(){
                $modal.addClass('active').fadeTo(300,1);
            });

        })
    }
    function aspectResize(){
        $('.aspect-resize').each(function(){
            var $el = $(this);
            var elWidth = $el.width();
            $el.height(elWidth / $el.data('ratio'));
        });
    }
    function navResize(){
        if ($('.nav-page').length > 0){
            var $el = $('.nav-page');
            var limit = $('#join-container').offset().top;
            var itemHeight = $el.outerHeight();
            $el.data('limit',limit-itemHeight-90);
        }
    }
    function scrollFunctions(scrollElements){
        $(scrollElements).each(function(index){
            var $el = $(this);
            var scrollID = $el.data('id');
            var offset = $el.offset();
            $el.data('offset',offset.top);
            switch (scrollID){
                case 'nav-switch':
                    var limit = $('#join-container').offset().top;
                    var itemHeight = $el.outerHeight();
                    $el.data('limit',limit-itemHeight-90);
                    break;
            }
        });

        $(window).scroll(function(){
            var scrollTop = $(window).scrollTop();
            var windowHeight = $(window).height();
            $(scrollElements).each(function(index){
                var $el = $(this);
                var scrollID = $el.data('id');
                switch (scrollID){
                    case 'nav-switch':
                        var offset = $el.data('offset');
                        var limit = $el.data('limit');
                        //console.log(offset,scrollTop,windowHeight);

                        if (scrollTop > prevScroll){ //scrolling down
                            if (offset - scrollTop < 50){ //past the header
                                if ($el.css('position') == "absolute"){
                                    var ww = $(window).width();
                                    var cw = $('#switch-container').width();
                                    var leftPos = (ww-cw)/2;
                                    $el.css({'position' : 'fixed' , 'left' : leftPos+'px'});
                                }
                            }
                            if (scrollTop > limit){ //reach the bottom
                                if ($el.css('position') == "fixed"){
                                    $el.css({'position' : 'absolute', 'top' : limit-70+'px' , 'left' : '0px'});
                                }
                            }
                        } else { //scrolling up
                            if (offset - scrollTop > 50){ //reach the top
                                if ($el.css('position') == "fixed"){
                                    $el.css({'position' : 'absolute' , 'left' : '0px'});
                                }
                            }
                            if (scrollTop < limit && scrollTop > offset){  //past the footer
                                if ($el.css('position') == "absolute"){
                                    var ww = $(window).width();
                                    var cw = $('#switch-container').width();
                                    var leftPos = (ww-cw)/2;
                                    $el.css({'position' : 'fixed' , 'top' : '50px', 'left' : leftPos + 'px' });
                                }
                            }
                        }
                    break;
                }
            });
            prevScroll = scrollTop;
        });
    }
    return {
      init: init
    }
})(window,document,jQuery);

window.onload = function(){
  site.init();
};
