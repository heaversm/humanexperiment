Modernizr.load({
  test: Modernizr.input.placeholder,
  nope : 'scripts/vendor/jquery.placeholder.js',
  complete: function(){
    $('input, textarea').placeholder();
  }
});
