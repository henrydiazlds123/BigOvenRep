<!DOCTYPE html>
<html>

<head>
   <title>Examples</title>
</head>

<body>
Hello world.

<h2>
<?php

$name = "Br. Burton";

print "My name is: $name<br />";
print "My name is: ". $name. "<br />";

for ($i = 0; $i = 10; $i++)
{
?>
here is some content <br /?
<?php
   print "<div class = 'div$i'>Awesome $i</div>";
   
}
$num = 4;
$str == "4";
if ($num == $str)
{
   print "Equal";
}
else
   print "Not Equal";

   
   if ($num === $str)
{
   print "Equal";
}
else
   print "Not Equal";
   
   
   $list[0] = "Joe";
   $list[1] = "four";
   $list[2] = "Tina";
   
   for($1 = 0; $i < 3; $i++)
   {
      print $list[$i]."<br/>\n";
   }
   foreach($list as $val)
   {
      print $list[$val]."<br/>\n";
   }
   $list[100] = "Joe";
   $list[42] = 4;
   $list["friend" = "Tina";
   $list[] = "Steve";
   foreach($list as $key => $val)
   {
      print $key is $val."<br/>\n";
   }
   asort($list);
   ksort($list);
   sort($list);
   
   $list[] = "a";
   $list[] = "b";
   $list[] = "c";
   
   $alpha = implode(":", $list);
   print "$alpha<br/>\n";
   $str = "The cat and the hat";
   $words = explode(" ", $str);
   
   foreach($words as $key => $val)
   {
      print "$key is $val<br/>\n";
   }
   
   printLine("First");
   function printLine($str)
   {
   print "$str<br/>\n";
   }
   printLine("Second");
   //php executed on server side;
   //javascript is on the client side;
   //can't overload functions;
   //go to putty and put vim to edit and php to execute php code;
   function printLine($str, $str2, $st3 = array())
   {
   $st3 += array();
   print "$str<br/>\n";
   print "$str2<br/>\n";
   }
 ?>
<?php include "footer.php"; ?> 

</h2>

</body>

</html>