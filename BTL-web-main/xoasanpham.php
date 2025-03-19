<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Bài 1</h1>
<form action="index.php?action=some1" method="POST">
<label type="number1">Nhập số</label>
<input name="number1" required>
<input type="submit" value="Tính">
</form>
<br>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"&& isset( $_GET['action']) && $_GET['action']=='some1'){
        
    $num=intval(value: $_POST["number1"]);
    function factorial($n){
        
        if($n<=0){
            return "Khong tinh duoc";
        }
        $result=1;
        while($n>0){
            $result=$result*$n;
            $n -=1;
        }
        return $result;
        

    }
    echo "Giai thừa của ". $num ." là ". factorial($num);
}
?>
<h1>Bài 2</h1>

<form action="index.php?action=some2" method="POST">
<label for="number2">Nhập số</label>
<input name="number2" required>
<input type="submit" value="Nhập">
</form>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"&& isset( $_GET['action']) && $_GET['action']=='some2'){
    $num=intval(value: $_POST['number2']);
    function element($n){
    if($n==1){
        return false;
    }
    else{

    
    for( $i=2;$i<$n; $i++ ){
        if($n%$i== 0){
            return false;
        }

    }
    return true;    
}
}
if(element($num)){
    echo'So '. $num .' la so nguyen to';
}
else{
    echo'So '. $num .' khong la so nguyen to';
};
    }
?>
<h1>Bài 3</h1>

<form action="index.php?action=some3" method="POST">
<label for="number3">Nhập chuỗi:</label>
<input name="number3" required>
<input type="submit" value="Nhập">

</form>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"&& isset( $_GET['action']) && $_GET['action']=='some3'){
    $str=strval(value: $_POST['number3']);
    echo 'Dao nguoc cua chuoi "'. $str.'" la "'.strrev($str).'"';
    }
?>

<h1>Bài 4</h1>

<form action="index.php?action=some4" method="POST">
<label for="number4">Nhập chuỗi</label>
<input name="number4" required>
<input type="submit" value="Nhập">

</form>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"&& isset( $_GET['action']) && $_GET['action']=='some4'){
    $str=strval(value: $_POST['number4']);
    if(ctype_lower($str)){
        echo '"'.$str.'" la chuoi chi co ki tu thuong';
    }
    else{
        echo '"'.$str.'" la chuoi co ki tu viet hoa';
    }
    }
?>
<h1>Bài 5</h1>

<form action="index.php?action=some5" method="POST">
<label for="number5">Nhập chuỗi</label>
<input name="number5" required>
<input type="submit" value="Nhập">

</form>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"&& isset( $_GET['action']) && $_GET['action']=='some5'){
    $str=strval(value: $_POST['number5']);
    function isValidDate($date) {
      
        if (strlen($date) != 10 || $date[4] != '-' || $date[7] != '-') {
            return false;
        }
        list($nam, $thang, $ngay) = explode('-', string: $date);
        
        if (!is_numeric($nam) || !is_numeric($thang) || !is_numeric($ngay)) {
            return false;
        }
    
        
        if ($thang < 1 || $thang > 12) {
            return false;
        }
        switch ($thang){
            case 1:
            case 3:
            case 5: 
            case 7:
            case 8:
            case 10:
            case 12:
                if($ngay>31){
                    return false;
                }
            case 2:
            case 4:
            case 6:
            case 9:
            case 11:
            if($ngay >30){
                return false;
            }
        }
    
        return true;
    }
    
    if (isValidDate($str) == true) {
        echo "Ngay hop le.";
    }
    else {
        echo "Ngay khong hop le";
    }
}
    ?>

</html>