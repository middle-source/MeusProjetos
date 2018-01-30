$(function(){

    $('button').bind('click', function(){
        var altura = $('#altura').val();
        var peso = $('#peso').val();

        altura = altura.replace(',', '.');
        peso = peso.replace(',', '.');
        // IMC = peso / altura²

        var imc = peso / (altura * altura);
        if(imc < 16) {
            var traducao = 'Baixo Peso muito Grave';
        } else if(imc >= 16 && imc < 16.99){
            var traducao = 'Baixo Peso Grave';
        } else if(imc >= 17 && imc < 18.49){
            var traducao = 'Baixo Peso';
        } else if(imc >= 18.50 && imc < 24.99){
            var traducao = 'Peso Normal';
        } else if(imc >= 25 && imc < 29.99) {
            var traducao = 'Sobrepeso';
        } else if(imc >= 30 && imc < 34.99) {
            var traducao = 'Obesidade Grau I';
        } else if(imc > 34.99 && imc < 39.99){
            var traducao = 'Obesidade Grau II';
        } else{
            var traducao = 'Obesidade Grau III (Obesidade Mórbida)';
        }
        $('#resultado').html('Seu IMC é ' + imc + 'kg/m² <br /> Seu status: ' + traducao);
    });

});