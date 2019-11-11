<html>
<head>
</head>
<body>
<p> Suslikov A. I. var=2 </p>

    //<?php
//for($x=0; $x<101; $x++){for ($y=0; $y<101; $y++){ echo $x," - ",$y," ";}; echo "<br>";};
//?>

<form action='' method="POST">
<input type="number" name="x" required><br>
<input type="number" name="y" required>
<br><p> summ </p>
<input type="radio" name="d" value="s">
<br>    <p> raz </p>
<input type="radio" name="d" value="r" >
   <br> <p> proz </p>
<input type="radio" name="d" value="p">
   <br> <p> chastnoe </p> 
<input type="radio" name="d" value="ch">
<input type="submit" name="Posted" >

<?php
$x=$_POST["x"];
$y=$_POST["y"];
$d=$_POST["d"];
if($d=="s"){echo "sum", $x+$y;};
if($d=="r"){echo "raz", $x-$y;};
if($d=="p"){echo $x*$y;};
if($d=="ch"){if($y<>0){echo $x/$y;}else{echo "error";};};
?>
</form>
</body>
</html>
