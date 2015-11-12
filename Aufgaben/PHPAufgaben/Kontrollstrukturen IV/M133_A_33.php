<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>title</title>
    <link rel="stylesheet" href="C:\Users\Livio\OneDrive\Informatik\Module\M133\Aufgaben\default.css">
  </head>
  <body>
    <main>
      <?php
        function textumwandlung($text, $typ){
          switch($typ){
            case "g":
              echo strtoupper($text);
              break;
            case "k":
              echo strtolower($text);
              break;
            default:
              echo "fick dich";
              break;
          }
        }
        textumwandlung("Test", "g");
        textumwandlung("Test", "k");
        textumwandlung("Test", "d");
        ?>
    </main>
  </body>
</html>