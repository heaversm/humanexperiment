Modernizr.load({
  test: Modernizr.input.placeholder,
  nope : 'scripts/vendor/jquery.placeholder.js',
  complete: function(){
    if (!Modernizr.input.placeholder){
        $('input, textarea').placeholder();
    }
  },
 /* test: Modernizr.csscalc,
  nope : 'scripts/vendor/polycalc.js',
  complete: function(){
    if (!Modernizr.csscalc){

    }
  }*/
});
