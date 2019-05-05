$(document).ready(function(){
    $('#submit').click(function () {
    let userName = $("#username").val();
    let password = $("#password").val();
      $.post("server.php",{
          username:userName,password:password
      }).done(function (data) {
          if(data=="logged"){
              $("#login").hide();
              $("#res").html("Вы вошли");
          }else if(data=="notLogged"){
              alert("Не вошли");
          }else {
              alert("Пустое поле");
          }
      })
    });
})
