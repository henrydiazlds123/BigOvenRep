<div class="top">
<div class="logIn">

 <?php  
   if(isset($_SESSION["user"]))
   {
      echo "<a href=\"myaccount.php\" class=\"show\">Hello " . $_SESSION["fn"] . "</a>
          / <a href=\"logout.php\">Log Out</a>";
   }
   else
   {
      echo "<a href=\"signin.php\">Sign In</a>
      / <a href=\"signup.php\">Sign Up</a>";
   }

?>
</div>
<div class="search">
<form action="search.php" method="Get">
<?php 
echo "<select name=\"searchType\">

   <option value=\"general\"";

   if (isset($_GET['searchType']) and $_GET['searchType'] == "general")
   {
      echo "selected";
   }
   echo ">General Keyword</option>";
   
   echo "<option value=\"titleKey\" ";
   if (isset($_GET['searchType']) and $_GET['searchType'] == "titleKey")
   {
      echo "selected";
   }
   echo ">Title Keyword</option>";
   
   echo "<option value=\"authorKey\" ";
   if (isset($_GET['searchType']) and $_GET['searchType'] == "authorKey")
   {
      echo "selected";
   }
   echo ">Author Keyword</option>";

   echo "<option value=\"titleAlp\" ";
   if (isset($_GET['searchType']) and $_GET['searchType'] == "titleAlp")
   {
      echo "selected";
   }
   echo ">Title Alphabetically</option>";
   
   echo "<option value=\"authorAlp\" ";
   if (isset($_GET['searchType']) and $_GET['searchType'] == "authorAlp")
   {
      echo "selected";
   }
   echo ">Author Alphabetically</option>";

   echo "<option value=\"CallNum\" ";
   if (isset($_GET['searchType']) and $_GET['searchType'] == "CallNum")
   {
      echo "selected";
   }
   echo ">Call Number</option>";

   echo "<option value=\"Barcode\" ";   
   if (isset($_GET['searchType']) and $_GET['searchType'] == "Barcode")
   {
      echo "selected";
   }
   echo ">Bar Code</option>";
   
   echo "</select>";
   echo "<input type=\"text\" name=\"query\"/";
   if (isset($_GET['query']))
   {
      echo " value=\"$_GET[query]\" ";
   }
   
   echo ">";
   echo "<select name=\"type\">";
   echo "<option value=\"default\"";
   if (isset($_GET['type']) and $_GET['type'] == "default")
   {
     echo "selected";
   }
   echo ">Select Type</option>";
   $mysqli = new mysqli('localhost', 'phpUnicorn', 'movie', 'lib_db');
if ($mysqli->connect_errno)
{
   echo "Failed to connect to database";
}

$result = $mysqli->query("SELECT * FROM type");
while ($row = $result->fetch_assoc())
{
  echo "<option value=\"" . $row[type] . "\"";
  if (isset($_GET['type']) and $_GET['type'] == "$row[type]")
  {
     echo "selected";
  }
  echo ">" . $row[type] . "</option>";

}
echo "</select>";
echo "<select name=\"loc\">";
echo "<option value=\"default\"";
   if (isset($_GET['type']) and $_GET['type'] == "default")
   {
     echo "selected";
   }
   echo ">Select Location</option>";
$result = $mysqli->query("SELECT * FROM location");
while ($row = $result->fetch_assoc())
{
  echo "<option value=\"" . $row[location_id] . "\"";
  if (isset($_GET['loc']) and $_GET['loc'] == "$row[location_id]")
  {
     echo "selected";
  }
  echo ">" . $row[name] . "</option>";

}


?>
 </select>
<input type="submit" value="Search">
</form>
</div>
</div>

