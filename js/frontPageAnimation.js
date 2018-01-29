$(document).ready(function () {
   $('.globe').bind('mouseover',function () {
       $('.arrow1').removeClass('untransform1');
      $('.arrow1').addClass('transform1');
       $('.arrow2').removeClass('untransform2');
       $('.arrow2').addClass('transform2');
       $('.arrow3').removeClass('untransform3');
       $('.arrow3').addClass('transform3');
       $('.arrow4').removeClass('untransform4');
       $('.arrow4').addClass('transform4');
   });
   $('.globe').bind('mouseleave',function () {
       $('.arrow1').addClass('untransform1');
       $('.arrow1').removeClass('transform1');
       $('.arrow2').addClass('untransform2');
       $('.arrow2').removeClass('transform2');
       $('.arrow3').addClass('untransform3');
       $('.arrow3').removeClass('transform3');
       $('.arrow4').addClass('untransform4');
       $('.arrow4').removeClass('transform4');
   })
});