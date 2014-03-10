<!DOCTYPE html>
<html>
<body>

<p>Given that x=5, return the value of the comparison x>8.</p>
<button onclick="myFunction()">Try it</button>
<p id="yay">Oh YEAHHHHH</p>
<p id="demo"></p>

<script>
function myFunction()
{
var x=5;

document.getElementById("demo").innerHTML=x>8;
}
</script>
<?php $doc = new DomDocument;
$doc->validateOnParse = true;
$doc->Load('js.php');

echo "The element whose id is 'php-basics' is: " . $doc->getElementById('yay')->tagName . "\n";
?>
</body>
</html>
