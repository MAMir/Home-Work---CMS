/*jshint strict:true, forin:true, noarg:true, noempty:true, eqeqeq:true, bitwise:true, strict:true, undef:true, unused:true, nonew:true, browser:true, devel:true, indent:2, boss:true, curly:false, immed:false, latedef:true, newcap:true, plusplus:false, trailing:true, maxparams:3, maxerr:100, debug:false, asi:false, evil:false, expr:true, eqnull:false, esnext:false, funcscope:false, globalstrict:false, loopfunc:false */

(function($,undefined){
  "use strict";

  $.fn.narsisHover = function(){

    this.each(function(){
      var
        $this = $(this),
        effect = $this.data('effect'),
        $effect = $('<div>'),
        inithover = function(){
          $effect
            .addClass('nr-' + effect);

          if(effect === "a-a" || effect === "a-b" || effect === "a-c"  || effect === "a-d" || effect === "b-a" || effect === "b-b" || effect === "c" || effect === "d" || effect === "g" || effect === "h-a" || effect === "h-b" || effect === "i" || effect === "r-a" || effect === "r-b" || effect === "r-c" || effect === "r-d" || effect === "s-a" || effect === "s-b" || effect === "v" ){
            $effect
              .append('<div class="seg-' + effect + '"></div>');
          }
          else if(effect === "e-a" || effect === "e-b" || effect === "m-a"  || effect === "m-b" || effect === "n-a" || effect === "q-a" || effect === "q-b" || effect === "n-b" || effect === "t-a" || effect === "t-b" ){
            $effect
              .append('<div class="seg-' + effect + '"></div><div class="seg-' + effect + '"></div>');
          }
          else if(effect === "f" || effect === "j-a" || effect === "j-b" || effect === "j-c" || effect === "j-d" || effect === "k-a" || effect === "k-b" || effect === "l-a" || effect === "l-b" || effect === "l-c" || effect === "l-d" || effect === "o" || effect === "p" || effect === "u-a" || effect === "u-b" || effect === "w" || effect === "x-a" || effect === "x-b"){
            $effect
              .append('<div class="seg-' + effect + '"></div><div class="seg-' + effect + '"></div><div class="seg-' + effect + '"></div><div class="seg-' + effect + '"></div>');
          }
          else if(effect === "y" || effect === "z"){
            $effect
              .append('<div class="seg-' + effect + '"></div><div class="seg-' + effect + '"></div><div class="seg-' + effect + '"></div><div class="seg-' + effect + '"></div><div class="seg-' + effect + '"></div><div class="seg-' + effect + '"></div><div class="seg-' + effect + '"></div><div class="seg-' + effect + '"></div>');
          }

          $this
            .prepend($effect);

        };

      inithover();

    });

  };
  // init narsis cover
  $(function(){
    $("[data-narsis='vulvul']").narsisHover();
  });

})(window.jQuery);