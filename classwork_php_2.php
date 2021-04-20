<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
     <style>
        .red {
            color: red;
        }
        h1 {
            color: blue;
        }
        .green {
            color: green;
        }
    </style>
</head>
<body>
   
    <div class="container">
        <div class="row">
            <div class="exercise">
                <h1>Exercise 1 </h1>
                <form action="classwork_php_2.php" method="POST">
                    surname: <input type="text" name="surname">
                    firstname: <input type="text" name="firstname">
                    <input type="submit" name="submit" value= "Tell me" class="btn btn-primary">
                     </form>
                     <?php 
                     if (isset($_POST["submit"])) {
                         if ($_POST["surname"]|| $_POST["firstname"]) {
                             echo "Welcome ".$_POST["surname"]. ", " .$_POST["firstname"];
                         } else {
                             echo "please insert your name, or please insert your surname";
                         }
                     }
                         ?>
            </div>
            <div class="exercise">
                <h1>Exercise 2 </h1>

                <?php 
                function dividing ($value_1,$value_2) {
                    $divide = $value_1 / $value_2;
                    echo "The solution is " .$divide;
                }
                dividing(10,3)
                ?>
                <div class="exerice">
                    <h1>Exercise 3</h1> 
                    <?php 

                    $a =[20,4,5];
                    function grades ($arr) {

                    $average = array_sum($arr) /count($arr);
                    $sum = array_sum($arr);
                    echo 'The avg '.$average. '</br>';
                    echo 'The sum '.$sum ;
                    } 
                    grades ($a);  
                    ?>
                </div>
            </div>
            
            </div>
            <div class="row">
                <div class="exercise">
                    <h1>Exercise 4</h1>
                    <?php 
                     function volume ($width,$height,$depth) {
                         $volume = $width * $height * $depth;
                          $area = $width * $height;
                        echo 'The volume of the box is: '.$volume. '</br>';
                    echo 'The area of the box is:'.$area;
                     };
                     volume(3,4,5);
                    ?>
                </div>
                  <div class="exercise">
                    <h1>Exercise 5</h1>
                    <?php 
                    function minutes ($minutes) {
                        $hours = floor($minutes/60);
                        $min = $minutes % 60;
                        echo $minutes. "minutes = ".$hours. " hour(s) and ".$min. "minute(s)";
                    };
                      minutes(200);
                    ?>
                </div>
                   </div>
                  <div class="exercise">
                    <h1>Exercise 6</h1>
                     <form action="classwork_php_2.php" method="POST">
                    surname: <input type="text" name="name2">
                    firstname: <input type="text" name="name1">
                    age: <input type="text" name="age">
                    <input type="submit" name="go" value= "Tell me" class="btn btn-primary">
                     </form>

                     <form action="classwork_php_2.php" method="GET">
                         hobby: <input type="text" name="activity">
                         <input type="submit" name="sub" value= "Tell me more" class="btn btn-primary">
                     </form>
                     
                     <?php 
                     #post
                     if (isset($_POST["go"])) {
                         if ($_POST["name2"]|| $_POST["name1"]) { 
                             if (strlen($_POST["name1"]) < 5) {
                                 echo '<div class=red> Welcome ' .$_POST["name1"]. $_POST["name2"].'</div>';
                             } else { 
                                 echo '<div class=green> Welcome ' .$_POST["name1"] .$_POST["name2"].'!</div>';
                             }
                         } else {
                             echo "please insert your name, or please insert your surname";}}

                             #the stuff with get - ugh 
                              if (isset($_GET["sub"])) {
                         if ($_GET["activity"]) { 
                             echo "your hobby " .$_GET["activity"]. " is amazing";
                         } 
                         else {
                             echo "please insert your hobby you sloth!  🦥 ";}}
                         ?>
                </div>

        </div>
    </div>
</body>
</html>