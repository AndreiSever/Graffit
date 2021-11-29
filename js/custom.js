$(function(){
    var swiper = new Swiper(".mySwiper", {
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
          renderBullet: function (index, className) {
            
            return '<span class="' + className + '">' + "</span>";
          },
        },
    });
    $(".btn-close").on("click",function(e){
      let email_reset = $(this).parent().parent().children().children().children("input").eq(0);
      let phone_reset = $(this).parent().parent().children().children().children("input").eq(1);
      email_reset.val("");
      phone_reset.val("");
    })
    
    $(".header_butn-submit").on("click", function(e){
      let calling_modal = new bootstrap.Modal($('#calling'));
      calling_modal.show();
      
    })
    $(".form_butn-submit").on("click", function(e){
      let formData = new FormData($(this).parents("form")[0]);
      console.log(formData.get("name"));
      console.log(formData.get("phone"));
      console.log(formData.get("checkbox"));
      formData = JSON.stringify(Object.fromEntries(formData));
      console.log(formData);
      //$('#calling').modal('hide'); 
      $.ajax({
        url: "ajax/send_form.php",
        data: formData,
        type: "POST",
        dataType: "json",
        success: function(msg){
          console.log(msg);
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
            //var answer_modal = new bootstrap.Modal($('#sending'));
            //answer_modal.show();
            //email_reset.val("");
            //phone_reset.val("");
          }
        },
        error: function(msg){
          alert(msg.responseText);
        }
      });
      /*let modal_body = $(this).parent().parent();
      console.log($(this).parent().parent().parent().children(".modal-header").children(".btn-close")[0]);
      let legend = modal_body.children("legend").eq(0).;
      let email = modal_body.children().children("input").eq(0).val();
      let phone = modal_body.children().children("input").eq(1).val();
      let email_reset = modal_body.children().children("input").eq(0);
      let phone_reset = modal_body.children().children("input").eq(1);
      if ((email!="")&&(phone!="")){
        modal_body.children().children(".invalid-feedback").eq(0).css({"display": "none"});
        modal_body.children().children("input").eq(0).removeClass("invalid-input");
        modal_body.children().children("input").eq(0).addClass("success");
        modal_body.children().children(".invalid-feedback").eq(1).css({"display": "none"});
        modal_body.children().children("input").eq(1).removeClass("invalid-input");
        modal_body.children().children("input").eq(1).addClass("success");
        let obj = {
          "legend": legend,
          "email": email,
          "phone": phone
        }
        obj = JSON.stringify(obj);
        $.ajax({
          url: "ajax/send_form.php",
          data: obj,
          type: "POST",
          dataType: "json",
          success: function(msg){
            if (msg.empty_email=="ok"){
            }else{
            }
            if (msg.empty_phone=="ok"){
            }else{
            }
            if (msg.error_email!=""){
              console.log(msg.error_email);
            }
            if (msg.success=="ok"){
              modal_body.parent().children().children(".btn-close")[0].click();
              var answer_modal = new bootstrap.Modal($('#sending'));
              answer_modal.show();
              email_reset.val("");
              phone_reset.val("");
            }
          },
          error: function(msg){
            alert(msg.responseText);
          }
        });
      }else{
        if ((email=="")){
          modal_body.children().children(".invalid-feedback").eq(0).css({"display": "block"});
          modal_body.children().children("input").eq(0).removeClass("success");
          modal_body.children().children("input").eq(0).addClass("invalid-input");
        }else{
          modal_body.children().children(".invalid-feedback").eq(0).css({"display": "none"});
          modal_body.children().children("input").eq(0).removeClass("invalid-input");
          modal_body.children().children("input").eq(0).addClass("success");
        }
        if ((phone=="")){
          modal_body.children().children(".invalid-feedback").eq(1).css({"display": "block"});
          modal_body.children().children("input").eq(1).removeClass("success");
          modal_body.children().children("input").eq(1).addClass("invalid-input");
        }else{
          modal_body.children().children(".invalid-feedback").eq(1).css({"display": "none"});
          modal_body.children().children("input").eq(1).removeClass("invalid-input");
          modal_body.children().children("input").eq(1).addClass("success");
        }
        modal_body.parent().children().children(".btn-close")[0].addEventListener('click', function () { // Для демонстрации - при нажатии на вторую кнопку
          modal_body.children().children(".invalid-feedback").eq(0).css({"display": "none"});
          modal_body.children().children("input").eq(0).removeClass("invalid-input");
          modal_body.children().children("input").eq(0).addClass("success");
          modal_body.children().children(".invalid-feedback").eq(1).css({"display": "none"});
          modal_body.children().children("input").eq(1).removeClass("invalid-input");
          modal_body.children().children("input").eq(1).addClass("success");
          email_reset.val("");
          phone_reset.val("");
        })
      }*/
    });
});