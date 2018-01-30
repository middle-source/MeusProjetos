$(function(){
    $('#senha').bind('keyup', function(){
        var txt = $(this).val();
        var forca = 0;

        // Letras,
        // Numeros,
        // Caracteres Especiais, 
        // Min. de Caracteres.


        if(txt.length > 6) {
            forca += 25;
        }

        var reg = new RegExp(/[a-z]/i);
            if(reg.test(txt)){
                forca += 25;
            }

        var reg = new RegExp(/[0-9]/i);
            if(reg.test(txt)){
                forca += 25;
            }


        var reg = new RegExp(/[^a-z0-9]/i);
            if(reg.test(txt)){
                forca += 25;
            }

        if(forca >= 75){
            var valida = 'Senha Aceita';
        } else{
            var valida = 'Senha Negada';
        }


        $('#forca').html("Força: " + forca + '(' + txt + ') - ' + valida);
    });
}); 