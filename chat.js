$(document).ready(function(){
  $("button").click(function(){
    var message = $('textarea').val();
    var old= $('#chat friend').html();
    $('#chat friend').html(old+'<p>'+message+ '</p>');

  });
});
