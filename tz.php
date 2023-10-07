
<!DOCTYPE html>
<html>
<body>

<?php
// Print the array from getdate()
print_r(getdate());
echo "<br><br>";

// Return date/time info of a timestamp; then format the output
$mydate=getdate(date("U"));
echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";

if (intval ($mydate['mon'])>8)
{
$currentwer=intval ($mydate['mon'])-8;
}
else 
{
$currentwer=intval ($mydate['mon'])+4;
}
echo "<br> $currentwer";
?>

</body>
</html>
