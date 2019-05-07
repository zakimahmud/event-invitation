

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chatting Box</title>
    <link rel="stylesheet" href="chat.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<script type="text/javascript">
$(document).ready(function(){
  $("button").click(function(){
    var message = $('textarea').val();
    var old= $(".chat").html();

    $(".chat").html(old+'<p>'+message+'</p>');

  });
});
</script>
  </head>
  <body>
    <a href="Event Invitation.html"><h2>&#10006;</h2></a>
    <h1 class="font_1" style="line-height:1.2em; text-align:center;">
      <span style="display:none;">&nbsp;</span>
      <span style="letter-spacing:0.15em;">Lets chat !!</span>
      <span style="display:none;">&nbsp;</span>
    </h1>
<br>
<br>
    <div class="chatbox">
      <div class="chatlogs">

        <div class="chat friend">
          <div class="user-icon"><img src="user1.jpg" alt=""></div>
            <p> what's up guys.....</p>

        </div>



    </div>
    <div class="chat-form">
      <textarea placeholder="type your message here"></textarea>
      <button>Send</button>
    </div>

    </div>
  </body>
</html>
