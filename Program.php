<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<!-- input form for user --->
<form action="site.php" method = "post">

</form>

 <?php 

$Poem = array("Twinkle Twinkle", "Little stars", "........", "I don't know so far");

for($counter = 0; $counter <= count($Poem); $counter++){
    echo "$Poem[$counter] <br><br>";
}



 ?>

</body>
</html>
