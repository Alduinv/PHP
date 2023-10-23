<form action="arrays.php" method=GET>

<input type="text" name="name">
<input  type="submit" >
</form>

<?php
$name = $_GET["name"];
$Grade = [
   "Abdullah" => ["100" , "A+"] , 
   "Mazen" => ["90" , "A"] , 
   "Ahmed" => ["85" , "B+"] , 
];
echo "Score : " . $Grade[$name][0];
echo "<br>" ;
echo " Grade : " . $Grade[$name][1];


?>