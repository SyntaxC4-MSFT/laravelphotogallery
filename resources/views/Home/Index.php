<!-- View stored in resources/views/greeting.php -->

<html>
    <body>
      <h1>Faces of the Elephpant</h1>     
      <ul>
          <?php
          foreach($photos as $key => $value)
          {
              echo "<li><img src='".$key."' /></li>";
          }
          ?>
      </ul>
    </body>
</html>