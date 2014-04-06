<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%
if(session.isNew())
{
   session.setAttribute("", "ingredients");
}
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
   <title> BigOven By Ingredient </title>
   <link rel = "stylesheet" href = "master.css" type = "text/css"/>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/smoothness/jquery-ui.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script type="text/javascript" src="master.js"></script>

</head>
<body>
<div class="top">
<img src="title2.png"/>
</div>
<div class="line">
</div>
<div class="main">
   <table>
   <tr>
   <td class="have">
     <h1>What Ingredients Do You Have?</h1>
     <form method = "POST" action = "FillIngredientDiv">
         <input type ="hidden" id="list" name="list" value="" />
         <div class="ingredients">Ingredients:
         <input type = "text" id = "ingredient" class = "ingredient"/>
         <br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input class = "buttons2" onclick="fillList()" type="button" value="Add Ingredient"/>
         <input class = "buttons2" onclick="clearlist()" type="button" value="Clear List" />
         </div>
         <br /> <br />
         <div class = "mainDivL" id = "textdiv">
         </div> <br />
         <input class = "buttons" type = "submit" value = "Make me food!"/>
     </form>
    </td>
    <td>
    </table>
</div>
</body>
</html>
