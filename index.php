<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

$students = array(
    array(
        "name" => "Farooq", 
        "course" => "Full stack development", 
        "joining" => "20-01-2024"
    ),
    array(
        "name" => "Sarah", 
        "course" => "Mobile app development", 
        "joining" => "21-01-2024"
    ),
    array(
        "name" => "Ali", 
        "course" => "Game development", 
        "joining" => "22-01-2024"
    ),
    array(
        "name" => "Mehak", 
        "course" => "CMS development", 
        "joining" => "23-01-2024"
    ),
    array(
        "name" => "Faraz", 
        "course" => "Mobile app development", 
        "joining" => "24-01-2024"
    ),
    array(
        "name" => "Junaid", 
        "course" => "Web application development", 
        "joining" => "25-01-2024"
    ),
    array(
        "name" => "Ibtehaj", 
        "course" => "Python programming & applications", 
        "joining" => "26-01-2024"
    ),
    array(
        "name" => "Sharjeel", 
        "course" => "2d animation", 
        "joining" => "29-01-2024"
    ),
    array(
        "name" => "Urooj", 
        "course" => "IoT system development & application", 
        "joining" => "21-01-2024"
    ),
    array(
        "name" => "Marium", 
        "course" => "Digital marketing", 
        "joining" => "08-02-2024"
    ),
    array(
        "name" => "Zain", 
        "course" => "Graphic designing", 
        "joining" => "11-02-2024"
    ),
    array(
        "name" => "Abdullah", 
        "course" => "Shopify development", 
        "joining" => "17-02-2024"
    ),
    
);


foreach ($students as $student) {
    
    foreach ($student as $key => $value) {
        echo "$key: $value <br>";
    }
    echo "<br>"; 
}
?>
    
</body>
</html>