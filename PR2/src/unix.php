<html lang="en">

<head>
    <title>Unix command result</title>
    <link rel="stylesheet" href="Style/styl.css" type="text/css" />
</head>

<body>

<?php
function print_arr($arr){
    foreach ($arr as $key=>$item){
        echo "$item ";
    }
}

function check_in_array($arr, $item){
    $result = false;

    foreach ($arr as $key=>$value){
        if ($value == $item){
            $result = true;
            break;
        }
    }

    return $result;
}

$allow_array = ['ls', 'pwd', 'whoami', 'id'];
$command = $_POST['command'];
$array = explode(' ', $command);

if (check_in_array($allow_array, $array[0])){
    echo exec($command);
}
else{
    echo 'Недопустимая команда! Список допустимых комманд: ';
    print_arr($allow_array);
}
?>


</body>

</html>