function addBola(){
    var x = Math.floor(Math.random() * 800);
    var y = Math.floor(Math.random() * 500);
    var cor = Math.floor(Math.random() * 4);
    // Azul, Vermelho, Amarelo, Preto, Verde

    
    var bola = $('<div class = "bola"></div>');
    bola.css('left', x + 'px');
    bola.css('top', y + 'px');

    switch(cor){
        case 0:
            bola.css('background-color', '#00f');
            break;
        case 1:
            bola.css('background-color', '#f00');
            break;
        case 2:
            bola.css('background-color', '#ff0');
            break;
        case 3:
            bola.css('background-color', '#000');
            break;
        case 4:
            bola.css('background-color', '#009900');
            break;
        }


    bola.bind('click', function(){
        $(this).fadeOut('fast');

        placar++;
        updatePlacar();
    });
  //  $('<div class = "bola"></div>').appendTo(document.body);
    $(document.body).append(bola);
};

function updatePlacar() {
    $('#placar').html(placar);
}


var placar = 0;


$(function(){
    $('#comecar').bind('click', function(){
        setInterval(addBola, 1000);
    });
});