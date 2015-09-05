<!-- View stored in resources/views/greeting.php -->

<html>
    <body>
      <h1>Faces of the Elephpant</h1>     
      <ul>
          <?php
          foreach($photos as $key => $value)
          {
            foreach($value as $k => $v) {
              echo "<li><img src='".$k."' /></li>";
            }
          }
          ?>
      </ul>
    </body>
</html>