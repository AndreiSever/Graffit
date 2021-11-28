$(function(){
    var swiper = new Swiper(".mySwiper", {
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
          renderBullet: function (index, className) {
            console.log("fsdfdsf");
            return '<span class="' + className + '">' + "</span>";
          },
        },
    });
});