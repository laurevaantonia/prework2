<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<header>
 <?php
        include 'nav.php';
        ?>
</header>
<body>
 <div class="container">
        <div class="row">
<h1>Exercise Advanced 1 </h1>
                <form action="advanced.php" method="POST">
                    Fahrenheit: <input type="text" name="temp">
                    <input type="submit" name="submit" value= "Tell me the temp" class="btn btn-primary">
                     </form>
                     <?php 
                     function celcius ($fahrenheit) {
                         $celcius =  ($fahrenheit - 32) * 5/9;
                         return $celcius;
                     }
                     if (isset($_POST["submit"])) {
                             $celcius = celcius ($_POST["temp"]);
                         switch ($celcius) {
                             case ($celcius<6);
                             echo '<span class="txt"> 🥶 </br>Very cold </span>';
                             break;
                              case ($celcius<10);
                             echo '<span class="txt"> ☃️ </br> cold </span>';
                             break;
                              case ($celcius<15);
                             echo '<span class="txt"> 🥰 </br> pleasant </span>';
                             break;
                              case ($celcius<21);
                             echo '<span class="txt"> 🥵 </br> warm </span>';
                             break;
                              case ($celcius>=21);
                             echo '<span class="txt"> 🔥 </br> hot </span>';
                             break;
                             default : echo "something went wrong 🤡";
                          echo '<div class="fahreneheitt"> It is ' .floor($celcius). '°C
                         </div>';
                         }
                        }
                         ?>
    </div>
 </div>
</body>
<footer>
     <?php
        include 'footer.php';
        ?>
</footer>
</html>