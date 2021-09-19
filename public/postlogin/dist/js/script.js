 $(document).ready(function(){
         $('.study_test1').hide();
         $('.study_test2').hide();
         $('.study_test3').hide();
         $('.study_test4').hide();
         $('.study_test5').hide();
        $('.test').click(function() {
           $('.study_test').show(500);
           $('.study_test1').hide(500);
           $('.study_test2').hide(500);
           $('.study_test3').hide(500);
           $('.study_test4').hide(500);
           $('.study_test5').hide(500);
        })
        $('.result').click(function(){
          $('.study_test').hide(500);
          $('.study_test1').show(500);
          $('.study_test2').hide(500);
          $('.study_test3').hide(500);
          $('.study_test4').hide(500);
          $('.study_test5').hide(500);
        })
        $('.performance').click(function(){
          $('.study_test').hide(500);
          $('.study_test1').hide(500);
          $('.study_test2').show(500);
          $('.study_test3').hide(500);
          $('.study_test4').hide(500);
          $('.study_test5').hide(500);
        })
          $('.efficiency').click(function(){
          $('.study_test').hide(500);
          $('.study_test1').hide(500);
          $('.study_test2').hide(500);
          $('.study_test3').show(500);
          $('.study_test4').hide(500);
          $('.study_test5').hide(500);
        })
          $('.compare').click(function(){
          $('.study_test').hide(500);
          $('.study_test1').hide(500);
          $('.study_test2').hide(500);
          $('.study_test3').hide(500);
          $('.study_test4').show(500);
          $('.study_test5').hide(500);
        })
           $('.ranking').click(function(){
          $('.study_test').hide(500);
          $('.study_test1').hide(500);
          $('.study_test2').hide(500);
          $('.study_test3').hide(500);
          $('.study_test4').hide(500);
          $('.study_test5').show(500);
        })
        
        
      })

var itemclick=[];


$(document).ready(function(){
   $(".content_text").click(function(){
  console.log($(this).attr('data-text'));
  let current = $(this).attr('data-text');
  let action = $(this).attr('data-action');
  let max=Math.max.apply( Math, itemclick );
  if(max==-Infinity){max=0}
  if(max+1==current && action=='default'){
    itemclick.push(current);
    if(action=='default'){
      $(this).attr('data-action','click');
      $("span[data-question='" + current +"']").addClass('hide');
      $("span[data-number='" + current +"']").removeClass('hide');
    }
  
  }else{
      $(this).attr('data-action','default');
     $("span[data-question='" + current +"']").removeClass('hide');
      $("span[data-number='" + current +"']").addClass('hide');
    }
  
});

});
