var site =  (function (window,document, $){
    function init(){
        addListeners();
    }
    function addListeners(){
        addResizeListener();
    }
    function addResizeListener(){
        $(window).resize(function() {
            aspectResize();
        });
    }
    function aspectResize(){
        $('.aspect-resize').each(function(){
            var $el = $(this);
            var elWidth = $el.width();
            $el.height(elWidth / $el.data('ratio'));
        });
    }
    return {
      init: init
    }
})(window,document,jQuery);

window.onload = function(){
  site.init();
};
