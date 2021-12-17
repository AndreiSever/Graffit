$(function(){
    var swiper = new Swiper(".mySwiper", {
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
          spaceBetween: 300,
          renderBullet: function (index, className) {
            
            return '<span class="' + className + '">' + "</span>";
          },
        },
    });
    $('nav .menu_open-2').on('click',function(e) {
      $(".menu-2").toggleClass("menu_active-2");
    });
    $(".btn-close").on("click",function(e){
      let form_validate = $(this).parents("form")[0];
      let form_has_class= $(this).parents("form");
      let form = $(this).parents("form")[0];
      form.reset();
      if (form_has_class.hasClass('was-validated')==true){
        form_validate.classList.remove('was-validated');
      }
    })
    $(".header_butn-submit").on("click", function(e){
      let calling_modal = new bootstrap.Modal($('#calling'));
      calling_modal.show();
    })
    $(".form_butn-submit").on("click", function(e){
      let formData = new FormData($(this).parents("form")[0]);
      let name = formData.get("name");
      let phone = formData.get("phone");
      let checkbox = formData.get("checkbox");
      formData = JSON.stringify(Object.fromEntries(formData));
      let form = $(this).parents("form")[0];
      let form_validate = $(this).parents("form")[0];
      if ((name!="")&&(phone!="")&&(checkbox!="")){
        form_validate.classList.remove('was-validated');
        $.ajax({
          url: "ajax/send_form.php",
          data: formData,
          type: "POST",
          dataType: "json",
          success: function(msg){
            if (msg.empty_name=="ok"){
            }else{
            }
            if (msg.empty_phone=="ok"){
            }else{
            }
            if (msg.empty_checkbox=="ok"){
            }else{
            }
            if (msg.error_email!=""){
              console.log(msg.error_email);
            }
            if (msg.success=="ok"){
              $('#calling').modal('hide'); 
              var answer_modal = new bootstrap.Modal($('#sending'));
              answer_modal.show();
              form.reset();
              //email_reset.val("");
              //phone_reset.val("");
            }
          },
          error: function(msg){
            alert(msg.responseText);
          }
        });
        }else{
          form_validate.classList.add('was-validated');
        }
    });
});