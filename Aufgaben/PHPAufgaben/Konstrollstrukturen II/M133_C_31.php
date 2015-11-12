<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>title</title>
    <link rel="stylesheet" href="C:\Users\Livio\OneDrive\Informatik\Module\M133\default.css">
  </head>
  <body>
    <main>
      <?php
        $namen = ["Peter", "Paul", "Pascal", "Fred"];
        for ($i = 0;$i < count($namen);$i++){
          print($namen[$i]."<br />"); 
        }
        ?>
    </main>
  </body>
</html>