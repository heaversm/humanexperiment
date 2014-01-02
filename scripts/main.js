var site =  (function (window,document, $){
    function init(){
        addListeners();
    }
    function addListeners(){
        addResizeListener();
        addScrollListener();
    }
    function addResizeListener(){
        $(window).resize(function() {
            aspectResize();
        });
    }
    function addScrollListener(){
        $(window).scroll(function(){
            var curPage = $('body').attr('id');
            var scrollTop = $(window).scrollTop();
            var windowHeight = $(window).height();
            var scrollElements = $('.scrollfx');
            switch(curPage){
                case 'pg-home':
                    scrollFunctions(scrollTop,windowHeight,scrollElements);
                    break;
            }
        });
    }
    function aspectResize(){
        $('.aspect-resize').each(function(){
            var $el = $(this);
            var elWidth = $el.width();
            $el.height(elWidth / $el.data('ratio'));
        });
    }
    /* scroll functions */
    function scrollFunctions(scrollTop,windowHeight,scrollElements){
        console.log(scrollTop,windowHeight,scrollElements);
    }
    /* end scroll functions */

    return {
      init: init
    }
})(window,document,jQuery);

window.onload = function(){
  site.init();
};
