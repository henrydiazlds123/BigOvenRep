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
<div style = "float:left">
<form method = "POST" action = "FillIngredientDiv">
   <br />
   <p class = "mainPL">
      Ingredients you have
   </p>
   <br />
   <input type = "text" name = "ingredient" id = "ingredient" class = "ingredient"/>
   <br />
   <br />
   <div class = "mainDivL" id = "mainDivL">
      Ingredients <br />
      <c:forEach var="leftinfo" items="${leftinfo}">
         ${leftinfo.toString()}
      </c:forEach>
   </div>
   <br />
   <input class = "mainInputL" type = "submit" value = "Click to list all ingredients" />
</form>
</div>
<div style = "float:right">
<form method = "POST" action = "">
   <p class = "mainPR">
      What you have already selected
   </p>
   <br /> <br />
   <div class = "mainDivR">
   </div>
   <br /> <br />
   <input class = "mainInputR" type = "submit" value = "Make me food!"/>
   <br />
</form>
</div>
</body>
</html>