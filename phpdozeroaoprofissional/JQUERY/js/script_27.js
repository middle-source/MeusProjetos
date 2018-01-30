$(function(){
    $('#form').bind('submit', function(e){
        e.preventDefault();
        var txt = $(this).serialize();
        console.log(txt);

        $.ajax({
            type: 'POST',
            url: 'ajax_aula_26.php',
            data: txt,
            dataType: 'json',
            success: function(json){
                if(json.status == 'OK'){
                    alert('Deu Certo ! ');
                } else{
                    alert('Deu errado ! ');
                }
                console.log(json.status);
            }
        });
    });
});