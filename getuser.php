<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 150%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);
$r=$_GET['r'];
echo "heloo $q";
$bale150yemtitebek =$Bale150*150;
$bale150yaltekefele=($Bale150*150)-$Bale150dimr;
$bale150perc=number_format($Bale150dimr/($Bale150*150*100), 2);

echo "heloo $r";
?>
</body>
</html>