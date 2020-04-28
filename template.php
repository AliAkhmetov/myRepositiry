<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">

    <script src="js/jquery.js" charset="utf-8"></script>

  <title>Super chat</title>
</head>
<body>
  <p>Чат</p>

  <div class="mainAria">
    <div class="chatAria">
      <div class="chatAria chatAria1" id="chatAria1">


      <?php
        foreach ($messages as $key => $value) {
          echo ('<div class="outgoMess" id="'. $key .'">'. $value['TEXT'] .'</div>');
        }
       ?>
         <script type="text/javascript"> var block = document.getElementById("chatAria1");
     block.scrollTop = block.scrollHeight;</script>
  </div>
      <div class="incomMess">
      </div>
    </div>

    <div class="sendAria">
      <form id="formElem" charset="utf-8">
         <input  charset="utf-8" name="message" type="text" class="tipeAria"  contenteditable="true">
 <input type="submit" value=""  class="submit">
</form>
  </div>

  <script src="note.js" charset="utf-8"></script>
</body>
</html>
