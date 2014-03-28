<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
   <title> BigOven By Ingredient </title>
   <link rel = "stylesheet" href = "master.css" type = "text/css"/>
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
      <div class="ingredients">Ingredients:
      <input type = "text" name = "ingredient" id = "ingredient" class = "ingredient"/>
      </div>
      <br />
      <br />
      <div class = "mainDivL" id = "mainDivL">
      <c:forEach var="leftinfo" items="${leftinfo}">
         ${leftinfo.toString()}
      </c:forEach>
          <br />
   
      </div>
      <br />
      <input class = "mainInputR" type = "submit" value = "Click to list all ingredients" />
   </form>
   </div>
</td>
<td>
   <form method = "POST" action = "">
      <h2>Select Your Ingredients!</h2>
      <br /> <br />
      <div class = "mainDivR">
      </div>
      <br /> <br />
      <input class = "mainInputR" type = "submit" value = "Make me food!"/>
      <br />
   </form>
   </div>
   </td>
   </tr>
   </table>
</div>
</body>
</html>