<!DOCTYPE html>

<html>
<head>
 <title>The Results</title>
</head>
<body>

<?php
$value = 0;
$file = fopen("http://ec2-54-84-50-169.compute-1.amazonaws.com/assignments/results.txt", "r");
$writeToFile = "";
$value = fgets($file);
echo "$value <br />";
if ($_POST and ($_POST['tvshow'] == "Doctor Who"))
{
   $value = $value + 1;
   $writeToFile = $writeToFile . "$value\n";
   $dr = 0;
   $dr = $value;
}
else
{
   $writeToFile = $writeToFile . "$value";
}
$value = 0;
$value = fgets($file);
echo "$value <br />";
if ($_POST and ($_POST['tvshow'] == "Pretty Little Liars"))
{
   $value = $value + 1;
   $writeToFile = $writeToFile . "$value\n";
   $pll = 0;
   $pll = $value;
}
else
{
   $writeToFile = $writeToFile . "$value";
}
$value = 0;
$value = fgets($file);
echo "$value <br />";
if ($_POST and ($_POST['tvshow'] == "Babby Daddy"))
{
   $value = $value + 1;
   $writeToFile = $writeToFile . "$value\n";
   $bd = 0;
   $bd = $value;
}
else
{
   $writeToFile = $writeToFile . "$value";
}

$value = 0;
$value = fgets($file);
echo "$value <br />";
if ($_POST and ($_POST['tvshow'] == "Hannah Montana"))
{
   $value = $value + 1;
   $writeToFile = $writeToFile . "$value\n";
   $hm = 0;
   $hm = $value;
}
else
{
   $writeToFile = $writeToFile . "$value";
}

$value = 0;
$value = fgets($file);
echo "$value <br />";
if ($_POST and ($_POST['tvshow'] == "Psych"))
{
   $value = $value + 1;
   $writeToFile = $writeToFile . "$value\n";
   $ps = 0;
   $ps = $value;
}
else
{
   $writeToFile = $writeToFile . "$value";
}

$value = 0;
$value = fgets($file);
echo "$value <br />";
if ($_POST and ($_POST['gender'] == "Male"))
{
   $value = $value + 1;
   $writeToFile = $writeToFile . "$value\n";
}
else
{
   $writeToFile = $writeToFile . "$value";
}
$value = 0;
$value = fgets($file);
echo "$value <br />";
if ($_POST and ($_POST['gender'] == "Female"))
{
   $value = $value + 1;
   $writeToFile = $writeToFile . "$value\n";
}
else
{
   $writeToFile = $writeToFile . "$value";
}

$value = 0;
$value = fgets($file);
echo "$value <br />";
if ($_POST and ($_POST['system'] == "Mac"))
{
   $value = $value + 1;
   $writeToFile = $writeToFile . "$value\n";
}
else
{
   $writeToFile = $writeToFile . "$value";
}

$value = 0;
$value = fgets($file);
echo "$value <br />";
if ($_POST and ($_POST['system'] == "Windows"))
{
   $value = $value + 1;
   $writeToFile = $writeToFile . "$value\n";
}
else
{
   $writeToFile = $writeToFile . "$value";
}

$value = 0;
$value = fgets($file);
echo "$value <br />";
if ($_POST and ($_POST['system'] == "Linux"))
{
   $value = $value + 1;
   $writeToFile = $writeToFile . "$value\n";
}
else
{
   $writeToFile = $writeToFile . "$value";
}

$value = 0;
$value = fgets($file);
echo "$value <br />";
if ($_POST and ($_POST['system'] == "Other"))
{
   $value = $value + 1;
   $writeToFile = $writeToFile . "$value\n";
}
else
{
   $writeToFile = $writeToFile . "$value";
}

$value = 0;
$value = fgets($file);
echo "$value <br />";
if ($_POST and ($_POST['movie'] == "Frozen"))
{
   $value = $value + 1;
   $writeToFile = $writeToFile . "$value\n";
}
else
{
   $writeToFile = $writeToFile . "$value";
}

$value = 0;
$value = fgets($file);
echo "$value <br />";
if ($_POST and ($_POST['movie'] == "Beauty and the Beast"))
{
   $value = $value + 1;
   $writeToFile = $writeToFile . "$value\n";
}
else
{
   $writeToFile = $writeToFile . "$value";
}

$value = 0;
$value = fgets($file);
echo "$value <br />";
if ($_POST and ($_POST['movie'] == "The Little Mermaid"))
{
   $value = $value + 1;
   $writeToFile = $writeToFile . "$value\n";
}
else
{
   $writeToFile = $writeToFile . "$value";
}

$value = 0;
$value = fgets($file);
echo "$value <br />";
if ($_POST and ($_POST['movie'] == "Snow White"))
{
   $value = $value + 1;
   $writeToFile = $writeToFile . "$value\n";
}
else
{
   $writeToFile = $writeToFile . "$value";
}

$value = 0;
$value = fgets($file);
echo "$value <br />";
if ($_POST and ($_POST['movie'] == "Tangled"))
{
   $value = $value + 1;
   $writeToFile = $writeToFile . "$value\n";
}
else
{
   $writeToFile = $writeToFile . "$value";
}

$value = 0;
$value = fgets($file);
echo "$value <br />";
if ($_POST and ($_POST['movie'] == "Princess and the Frog"))
{
   $value = $value + 1;
   $writeToFile = $writeToFile . "$value\n";
}
else
{
   $writeToFile = $writeToFile . "$value";
}
@{ 
var myChart = new Chart(width: 600, height: 400) 
   .AddTitle("TV Shows") 
   .AddSeries(chartType: "column",
      xValue: new[] {  "Doctor Who", "Pretty Little Liars", "Babby Daddy", "Hannah Montana", "Psych" }, 
      yValues: new[] { "$dw", "$pll", "$bd", "$hm", "$ps" }) 
   .Write();
}

fclose($file);?>

@{ 
var myChart = new Chart(width: 600, height: 400) 
   .AddTitle("TV Shows") 
   .AddSeries(chartType: "column",
      xValue: new[] {  "Doctor Who", "Pretty Little Liars", "Babby Daddy", "Hannah Montana", "Psych" }, 
      yValues: new[] { "$dw", "6", "4", "5", "3" }) 
   .Write();
}

<?php
$file = fopen("results.txt", "w");
 fwrite($file, $writeToFile);
fclose($file);


?>
</body>
</html>