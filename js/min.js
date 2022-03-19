jQuery(document).on('submit','#login',function(event){
    event.preventDefault();
    jQuery.ajax({
        url:'php/validar.php',
        type:'POST',
        dataType:'json',
        data: $(this).serialize(),
        beforeSend:function(){
            $('.boton').val('Ingresando....');
    
        }
    })
    .done(function(respuesta){
        console.log(respuesta);
        if(!respuesta.error){
            if(respuesta.tipo == 'administrador'){
                location.href='home.php';
            }
        }else{
            alert('Error! usuario y/o contraseña son incorrectas')
            $('.boton').val('Iniciar sesion');
        }
        
    })
    .fail(function(resp){
        console.log(resp.responseText);
    })
    .always(function(){
        console.log("complete")
    })
    });