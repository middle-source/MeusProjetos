$(function(){
    $('#btn').bind('click', function(e){
        e.preventDefault();
        console.log(this);
    });
});