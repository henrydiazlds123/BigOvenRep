<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
   <title> BigOven By Ingredient </title>
   <link rel = "stylesheet" href = "master.css" type = "text/css"/>
   <script>
   function showIngredients() {
	   string ingredient = document.getElementById('ingredient').value;
	   
	   
	   
   }
   </script>
</head>
<body>
<form method = "POST" action = "">
   <br />
   <p class = "mainPL">
      Ingredients you have
      <input type = "text" onchange = "showIngredients()" name = "ingredient" id = "ingredient"/>
   </p>
   <p class = "mainPR">
      What you have already selected
   </p>
   <br /> <br />
   <div class = "mainDivL">
      <c:forEach var="left" items="${leftinfo}">
         ${leftinfo.toString()}
      </c:forEach>
   </div>
   <div class = "mainDivR">
      <c:forEach var="right" items="${rightinfo}">
         ${rightinfo.toString()}
      </c:forEach>
   </div>
   <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /><br /> <br /> <br /> <br /><br /> 
   <input class = "mainInput" type = "submit" value = "Make me food!"/>
</form>
</body>
</html>