var site =  (function (window,document, $){

    var prevScroll = 0;

    function init(){
        addListeners();
    }
    function addListeners(){
        addResizeListener();
        addNavListener();
        addScrollListener();
    }
    function addResizeListener(){
        $(window).resize(function() {
            aspectResize();
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
    function aspectResize(){
        $('.aspect-resize').each(function(){
            var $el = $(this);
            var elWidth = $el.width();
            $el.height(elWidth / $el.data('ratio'));
        });
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
                            if (offset - scrollTop < 50){
                                if ($el.css('position') == "absolute"){
                                    $el.css({'position' : 'fixed' });
                                }
                            }
                            if (scrollTop > limit){
                                if ($el.css('position') == "fixed"){
                                    $el.css({'position' : 'absolute', 'top' : limit-70+'px' });
                                }
                            }
                        } else { //scrolling up
                            if (offset - scrollTop > 50){
                                if ($el.css('position') == "fixed"){
                                    $el.css({'position' : 'absolute' });
                                }
                            }
                            if (scrollTop < limit && scrollTop > offset){
                                if ($el.css('position') == "absolute"){
                                    $el.css({'position' : 'fixed' , 'top' : '50px' });
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
