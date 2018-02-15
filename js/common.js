(function($){
  
	//アンカーリンククリック時スムーズスクロール
	var url = $(location).attr('href');
	var h_hei =$('header').height();
	var lnk_speed = 800;
	$('a[href^=#]').click(function(){
		var href= $(this).attr("href");
		var tgt = $(href == "#" || href == "" ? 'html' : href);
		if(tgt.length) {
			var pos = tgt.offset().top - h_hei;
			$("html, body").animate({scrollTop: pos}, lnk_speed, "swing");
		}
		return false;
	});
  
  //slick slider
  $('.list_people ul').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    //prevArrow: '.btn_people_prev',
    //nextArrow: '.btn_people_next'
    
    responsive: [
      {
        breakpoint: 750,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
    ]
  });
})(jQuery);

//Transformicons
!function(n,r){"function"==typeof define&&define.amd?define(r):"object"==typeof exports?module.exports=r():n.transformicons=r()}(this||window,function(){"use strict";var n={},r="tcon-transform",t={transform:["click"],revert:["click"]},e=function(n){return"string"==typeof n?Array.prototype.slice.call(document.querySelectorAll(n)):"undefined"==typeof n||n instanceof Array?n:[n]},o=function(n){return"string"==typeof n?n.toLowerCase().split(" "):n},f=function(n,r,f){var c=(f?"remove":"add")+"EventListener",u=e(n),s=u.length,a={};for(var l in t)a[l]=r&&r[l]?o(r[l]):t[l];for(;s--;)for(var d in a)for(var v=a[d].length;v--;)u[s][c](a[d][v],i)},i=function(r){n.toggle(r.currentTarget)};return n.add=function(r,t){return f(r,t),n},n.remove=function(r,t){return f(r,t,!0),n},n.transform=function(t){return e(t).forEach(function(n){n.classList.add(r)}),n},n.revert=function(t){return e(t).forEach(function(n){n.classList.remove(r)}),n},n.toggle=function(t){return e(t).forEach(function(t){n[t.classList.contains(r)?"revert":"transform"](t)}),n},n});
transformicons.add('.tcon');