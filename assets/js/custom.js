var cursor = document.querySelector("#cursor");
var cursorBorder = document.querySelector("#cursor-border");
var cursorPos = { x: 0, y: 0 };
var cursorBorderPos = { x: 0, y: 0 };

document.addEventListener("mousemove", (e) => {
  cursorPos.x = e.clientX;
  cursorPos.y = e.clientY;

  // cursor.style.transform = `translate(${e.clientX}px, ${e.clientY}px)`;
});

requestAnimationFrame(function loop() {
  const easting = 8;
  cursorBorderPos.x += (cursorPos.x - cursorBorderPos.x) / easting;
  cursorBorderPos.y += (cursorPos.y - cursorBorderPos.y) / easting;

  cursorBorder.style.transform = `translate(${cursorBorderPos.x}px, ${cursorBorderPos.y}px)`;
  requestAnimationFrame(loop);
});

document.querySelectorAll("[data-cursor]").forEach((item) => {
  item.addEventListener("mouseover", (e) => {
    if (item.dataset.cursor === "pointer") {
      //   cursorBorder.style.backgroundColor = "rgba(255, 255, 255, .4)";
      cursorBorder.style.setProperty("--size", "60px");
    }

  });
  item.addEventListener("mouseout", (e) => {
    cursorBorder.style.backgroundColor = "unset";
    cursorBorder.style.mixBlendMode = "unset";
    cursorBorder.style.setProperty("--size", "10px");
  });
});



  

// navbar
$("#nav_item .nav-link").on("click", function(){
  $("#nav_item .nav-link").removeClass("active");
  $(this).addClass("active");
});
$(document).ready(function(){
  var sound = new Audio("./assets/audio/Vellake.mp3") 
  $(window).on("scroll",function(){
    let navscroll = $(window).scrollTop();
    if(navscroll >= 100){
        $(".navbar").addClass('navbar-fixed');
        $(".backto-top-button").addClass("animate_effect");
        sound.play();
    }else{
        $(".navbar").removeClass('navbar-fixed');
        $(".backto-top-button").removeClass("animate_effect");
    }
  })
  $('.backto-top-button').click(function(){
    $('html, body').animate({
      scrollTop : 0
    },100);
  });
  // bubble effects
$(".bubble_btn").on("click",function(e){
  e.preventDefault;
  $(e.target).removeClass('animate');
  $(e.target).addClass('animate');
  setTimeout(function() {
    $(e.target).removeClass('animate');
   }, 700);
})
// sound effect 
$(".bubble_btn").on("click",function(){
  const rollSound = new Audio("./assets/audio/click_sound2.wav");
  rollSound.play();
})
// responsive side bar 
$(".menu_icon").on("click",function(){
  $(".responsive_sidemenu").css({
   "transform": "translateX(0px)",
   "transition":"0.6s"
  });
  $(".menuoverlay").css("right","0%");
  $("body").addClass('body_scroll');
})
$(".close_icon, .menu_section .nav-item").on("click",function(){
  $(".responsive_sidemenu").css({
    "transform": "translateX(440px)",
    "transition":"0.6s"
   });
   $(".menuoverlay").css("right","-100%");
   $("body").removeClass('body_scroll');
});

});

$(window).on("load", function() {
  $.get("loader.php", function(loaderData) {
    $("body").before(loaderData);
    $(".custom_loader").show();

        setTimeout(function() {
            $(".custom_loader").fadeOut("slow", function() {
                $(this).remove();
                $.get("index2.php", function(indexData) {
                    $(".indexContainer").html(indexData).show();
                });
            });
        }, 2000); 
  });
});




// form validation 
document.getElementById("myfrom").addEventListener("submit", function(e){
  e.preventDefault();

  var fullName = document.getElementById("fullname");
  var phonenumber = document.getElementById("phonenumber");
  var email = document.getElementById("email");
  var subject = document.getElementById("subject");
  var message = document.getElementById("message");

  function showerror(input, message){
    input.classList.add('error');
    input.classList.remove('success');
  }
});


$("#checkbox_input").on("change",function(){
   if($(this).is(":checked")){
     $('body').removeClass("light_mode").addClass("dark_mode").find(".ss-footer").removeClass("footerImg");
    }else{
     $('body').removeClass("dark_mode").addClass("light_mode").find(".ss-footer").addClass("footerImg");
   }
});
// responsive 
$("#responive_checkbox_input").on("change",function(){
  if($(this).is(":checked")){
    $('body').removeClass("light_mode").addClass("dark_mode");
   }else{
    $('body').removeClass("dark_mode").addClass("light_mode");
  }
});


