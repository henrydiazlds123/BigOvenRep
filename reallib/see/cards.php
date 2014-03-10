<!DOCTYPE html>
<html>
<head>
   <title></title>
   <link rel="stylesheet" type="text/css" href="../css/cards.css"> 
</head>
<body>
<?php 
$mysqli = new mysqli('localhost', 'bookSmart', 'appleBook', 'lib_cards_db');
if ($mysqli->connect_errno)
{
   echo "Failed to connect to database";
}
$majorid = 0;
if (isset($_GET['id']))
{
   $majorid = $_GET['id'];
}
else
{
   echo "Error: Please try your request again.";
   exit();
}
$result = $mysqli->query("SELECT
 c.library_ID,
 c.major_ID,
 c.color_ID,
 c.database_ID,
 c.lib_guide_ID,
 c.librarian_ID,
 
 m.major_id,
 m.major_name,
 
 co.color_id,
 co.colorInHex,
 
 d.database_id,
 d.title,
 d.descrip,
 
 g.lib_guide_id,
 g.word,
 
 l.librarian_id,
 l.name,
 l.email,
 l.room,
 l.phone,
 l.picture
 
FROM library_cards AS c
   INNER JOIN major AS m ON c.major_ID = m.major_id
   INNER JOIN color AS co ON c.color_ID = co.color_id
   INNER JOIN datab AS d ON c.database_ID = d.database_id
   INNER JOIN lib_guide AS g ON c.lib_guide_ID = g.lib_guide_id
   INNER JOIN librarian AS l ON c.database_ID = l.librarian_id
WHERE m.major_id = " . $majorid . "");

$info = $result->fetch_assoc();

echo "<table class=\"mainTable\"><tr><td class=\"first\">";
echo "<h1 class=\"header\" style=\"color: #$info[colorInHex]\">HOW DO I FIND WHAT I NEED?</h1>";
echo "<ul>
         <li>Go to the Library webpage at <a href=\"www.lib.byui.edu\">www.lib.byui.edu/</a></li>
         <li>In the \"Toolbox,\" on the right side of the screen, select the \"Databases by Title or Subject\" link.</li>
      </ul>";
      
echo "<h2 class=\"header\" style=\"color: #$info[colorInHex]\">HERE IS WHAT YOU WILL FIND THERE!</h2>";
echo "<div class=\"smallerText\">";
echo "<ul>";
echo "   <li><span class=\"bold\">$info[title]</span> - $info[descrip]";
while ($row = $result->fetch_assoc())
{
   echo "<li><span class=\"bold\">$row[title]</span> - $row[descrip]";
}
echo "</ul>
</div>
      </td>
      <td class=\"second\">";
echo "<h1 class=\"header\" style=\"color: #$info[colorInHex]\">YOU CAN ALSO ACCESS RELEVANT RESEARCH GUIDES BY...  </h1>";
echo "<ul>
         <li>Go to the Library webpage at <a href=\"www.lib.byui.edu\">www.lib.byui.edu/</a></li>
         <li>In the \"Toolbox,\" on the right side of the screen, select the \"Research Guides\" link.</li>
         <li>In the left hand column click on \"$info[word].\"</li>
         <li>Here you'll find links to specific guides.</li>
         <li>Click on the one that is closest to your research topic.</li>
         <li>Here you'll find links to books, websites, and much more for your research needs.</li>
      </ul>";
echo "<table><tr><td>";
echo "<img src=\"$info[picture]\" /></td><td>";
echo "<h2 class=\"header\" style=\"color: #$info[colorInHex]\">NEED MORE HELP? CONTACT --</h2>";
echo "<div class=\"smallerText\">";
echo "<span class=\"bold\">$info[name]</span><br />";
echo "office: MCK $info[room]<br />";
echo "$info[email]<br />";
echo "$info[phone]<br />";
echo "</div>";


echo "</td>
</tr>
</table>
</td>
      </tr>
      </table>";
   
echo "<h1 class=\"finish\" style=\"color: #$info[colorInHex]\">ANY QUESTIONS? COME SEE US FOR MORE INFO!<br />DAVID O. MCKAY LIBRARY</h1>";
?>

</body>
</html>