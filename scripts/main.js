var site =  (function (window,document, $){
    function init(){
        addListeners();
    }
    function addListeners(){
        addResizeListener();
        addNavListener();
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
                $el.toggleClass('active');
            }
        })
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
