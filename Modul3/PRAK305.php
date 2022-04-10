<?php
$input = NULL;

if (isset($_POST["input"])){
    $input = $_POST["input"];
}

function cek_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK305</title>
</head>
<body>
    <form action="" method="post">
        Input <br>
        <input type="text" name="input" value="<?= cek_input($input)   ?>">
        <button type="submit" name="submit">submit</button>
    </form>
    
    <?php
    if (isset($_POST['input'])) {
        echo "<h2> Input: </h2><br>";
        echo $input;
        echo "<h2>Output: </h2><br>";
    }
    ?>

    <?php
    if (isset($_POST['submit'])) {
            $input=$_POST['input'];
            $array = strlen($input);
            $split = str_split($input);
            $a=0;
            $b=0;
            while($b<$array){
                echo strtoupper($split[$a]);
                
                $i=1;
                while($i<$array){
                    echo strtolower($split[$a]);
                    $i++;
                }
                $a++;
                $b++;
            }
        }
    ?>

</body>
</html>
