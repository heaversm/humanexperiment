Modernizr.load({
  test: Modernizr.input.placeholder,
  nope : 'scripts/vendor/jquery.placeholder.js',
  complete: function(){
    if (!Modernizr.input.placeholder){
        $('input, textarea').placeholder();
    }
  }
});
