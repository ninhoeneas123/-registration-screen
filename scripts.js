$(document).ready(function () {

/* Dar um display none se o sexo for diferente de masculino*/

  $('#sexo').change(function () {
    if ($(this).val() == 'M') {
        $('.numReservista').toggle('active')
    } else
        $('.numReservista').css('display', 'none')
});

/* submissão AJAX */

$("#formulario").submit(function(){

  event.preventDefault();
 
var dado = new FormData(this);

  $.ajax({
    url: "enviar.php",
    data: dado ,
   dataType:"json",
    type: "post",
    contentType:false,
    processData:false,
   
})
.done (function(data){

    alert("Seu cadastro foi efetuado com sucesso ");

}).fail ( function(data ){

    console.log(data);
});




});


});