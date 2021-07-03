
/*home*/
$(".navbar-light li a,.mouse a").click(function(){
  var href=$(this).attr("href");
  $("body ,html").animate({scrollTop:$(href).offset().top},1100)
})

$(".navbar-nav li ").click(function(){
  $(this).addClass("active").removeClass("disabled")
  $(".navbar-nav li ").not(this).addClass("disabled").removeClass("active")
})
$(window).scroll(function(){
  if($(window).scrollTop()>=110){
    $(".navbar-light").css("background","white");
    $(".navbar-light .navbar-brand").css("color","#007bff")
  
  }
  else{
    $(".navbar-light").css("background","none");
    $(".navbar-light .navbar-brand").css("color","white")
  }
})
if($(window).scrollTop()>=110){
  $(".navbar-light").css("background","white");
  $(".navbar-light .navbar-brand").css("color","#007bff")
}  
if($(window).scrollTop() < 110){
  $(".navbar-light").css("background","none");
  $(".navbar-light .navbar-brand").css("color","white")
}



/* our projects */

$(".projects .buttons span").click(function(){
  $(this).addClass("act")
  $(".projects .buttons span").not(this).removeClass("act")
})

$(".projects .buttons span:eq(0)").click(function(){
  $(".pro1,.pro2,.pro3,.pro4,.pro5,.pro6").show(1200)
})
$(".projects .buttons span:eq(1)").click(function(){
  $(".pro1,.pro6,.pro4").hide(800)
  $(".pro2,.pro3,.pro5").show(1200)
})
$(".projects .buttons span:eq(2)").click(function(){
  $(".pro2,.pro6,.pro5").hide(800)
  $(".pro1,.pro3,.pro4").show(1200)

})


/*end our projects*/













 

