<?php


$port = 3307;
    
$username = 'root';
    
$password = 'root';
    
$name = 'activities';

$connection = new PDO("mysql:host=localhost;dbname={$name};port={$port};", $username, $password);

$statement = $connection->prepare('SELECT * from under50');
$statement ->execute();


$row = $statement->fetch(PDO::FETCH_ASSOC);
echo '<pre>';
print_r($row);

echo "<h1> Jeg skjønner ikke DETTE!!!! *hylgråt* </h1>";

die();




?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

    <title>Campus Vulkan</title>
    <link rel="stylesheet" type="text/css" href="CampusVulkan.css">
    
</head>
    
    <body>
        
        
        <div id="headerContainer">
            <img id="headerCampus" src= "CampusVulkan.PNG" alt="Westerdals Oslo ACT - Campus Vulkan">
            
            <div id="topBorder"></div>
            
        
            
          
        
        
        </div>

    </body>
</html>