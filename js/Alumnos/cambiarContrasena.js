$(".buttonG").click(function(){
      var c =$("#contrasena").val();
      var c1 =$("#contrasena1").val();
      var c2 =$("#contrasena2").val();
      if(c==""){
      alert("Digite la contraseña actual!");
    }else if(c1=="" || c2 ==""){
      alert("Campo de nueva contraseña vacio!")
      }else if(c1 != c2){
      alert("Las nuevas contraseñas no coinciden")
    }else {
      var datos='contrasena='+c;
      $.ajax({

          type: "POST",
          url: "Usuarios/validarContrasena.php",
          data: datos,

          success: function (data) {
             if (data==1) {
                var datos='contrasena='+c2;
                $.ajax({
                    type: "POST",
                    url: "Usuarios/cambiarContrasena.php",
                    data: datos,

                    success: function (data) {
                        $('.resultadoC').fadeIn(1000).html(data).fadeOut(4000);
                        $("#contrasena").val("");
                        $("#contrasena1").val("");
                        $("#contrasena2").val("");

                    }
                });
              }
               if(data==0){
                alert("La contraseña digitada no es correcta!")
              }
          }
      });
    }

});
