var site=function(e,t,n){function i(){s()}function s(){o();u();a();f()}function o(){n(e).resize(function(){l()})}function u(){n("#top-nav").click(function(e){var r=n(this);t.documentElement.clientWidth<960&&(r.hasClass("active")?r.removeClass("active").addClass("inactive"):r.removeClass("inactive").addClass("active"))})}function a(){var e=n(".scrollfx");e.length>0&&c(e)}function f(){n("a[href*=#]:not([href=#])").click(function(){console.log("asl");if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=n(this.hash);e=e.length?e:n("[name="+this.hash.slice(1)+"]");if(e.length){n("html,body").animate({scrollTop:e.offset().top},500);return!1}}})}function l(){n(".aspect-resize").each(function(){var e=n(this),t=e.width();e.height(t/e.data("ratio"))})}function c(t){n(t).each(function(e){var t=n(this),r=t.data("id"),i=t.offset();t.data("offset",i.top);switch(r){case"nav-switch":var s=n("#join-container").offset().top,o=t.outerHeight();t.data("limit",s-o-90)}});n(e).scroll(function(){var i=n(e).scrollTop(),s=n(e).height();n(t).each(function(e){var t=n(this),s=t.data("id");switch(s){case"nav-switch":var o=t.data("offset"),u=t.data("limit");if(i>r){o-i<50&&t.css("position")=="absolute"&&t.css({position:"fixed"});i>u&&t.css("position")=="fixed"&&t.css({position:"absolute",top:u-70+"px"})}else{o-i>50&&t.css("position")=="fixed"&&t.css({position:"absolute"});i<u&&i>o&&t.css("position")=="absolute"&&t.css({position:"fixed",top:"50px"})}}});r=i})}var r=0;return{init:i}}(window,document,jQuery);window.onload=function(){site.init()};