

     







//landing page animation//
anime({
    targets: '.logo',
    opacity: {
        value: [0, 1],
        duration: 1000,
        delay: 1000
    },
    delay: 7000,
    easing: 'easeInOutExpo'
});

anime({
    targets: '.menu',
    opacity: {
        value: [0, 1],
        duration: 1500,
        delay: 1300
    },
    delay: 7000,
    easing: 'easeInOutExpo'
});

anime({
    targets: '.navlist li',
    opacity: {
        value: [0, 1],
        duration: 1500,
        delay: 2000
    },
    delay: 7000,
    easing: 'easeInOutExpo'
});

anime({
    targets: '.col h5',
    opacity: {
        value: [0, 1],
        duration: 1000,
        delay: 2800
    },
    delay: 7000,
    easing: 'easeInOutExpo'
});

anime({
    targets: '.col h1',
    opacity: {
        value: [0, 1],
        duration: 1000,
        delay: 3000
    },
    delay: 7000,
    easing: 'easeInOutExpo'
});

anime({
    targets: '.btn',
    opacity: {
        value: [0, 1],
        duration: 1000,
        delay: 3300
    },
    delay: 7000,
    easing: 'easeInOutExpo'
});

//scroll top//
$(document).ready(function(){

    $(window).scroll(function(){
    if($(this).scrollTop() > 30){
    $('#topBtn').fadeIn();
    } else{
    $('#topBtn').fadeOut();
    }
    });
    
    $("#topBtn").click(function(){
    $('html ,body').animate({scrollTop : 0},500);
    });
    });

    //cursor//
    var cursor = document.querySelector(".cursor");
    var cursor2 = document.querySelector(".cursor2");
    document.addEventListener("mousemove",function(e){
    cursor.style.cssText = cursor2.style.cssText = "left: " + e.clientX + "px; top: " + e.clientY + "px;";
     });

     
    document.getElementById('explore').addEventListener('click',
    function(){
    document.querySelector('.btn').style.display ='flex';
    });




//swiper//
const swiper = new Swiper('.swiper-container', {
    // Optional parameters
    
    loop: true,
    slidesPerView:2.5,
    slidesPerGroup:1,
    spaceBetween:50,
    speed:2000,
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });



  (function () {
    const second = 1000,
          minute = second * 60,
          hour = minute * 60,
          day = hour * 24;
 
    let birthday = "Nov 14, 2021 00:00:00",
        countDown = new Date(birthday).getTime(),
        x = setInterval(function() {    
 
          let now = new Date().getTime(),
              distance = countDown - now;
 
          document.getElementById("days").innerText = Math.floor(distance / (day)),
            document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
            document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
            document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);
 
          //do something later when date is reached
         
          //seconds
        }, 0)
    }());

