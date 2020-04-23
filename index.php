<?php
include "function.php";
include "DivideByZeroException.php";

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $numerator = (int)$_POST["numerator"];
    $denominator = (int) $_POST["denominator"];
}

//try {
//    $result = divide(100, 5);
//    echo $result;
//    $result = divide(100, 0);
//    echo $result;
//} catch (DivideByZeroException $e) {
//    echo 'Có lỗi xảy ra: '. $e;
//}
?>

<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Khai báo lớp exception tùy biến </title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="numerator">
    <input type="text" name="denominator">
    <button type="submit">ENTER</button>
    <br>
    <?php
        if (isset($numerator,$denominator)){
            try {
                $result = divide($numerator, $denominator);
                echo "Result is: $result";
            }
            catch (DivideByZeroException $e){
                echo 'Has error '.$e;
            }
        }

    ?>
</form>
</body>
</html>
