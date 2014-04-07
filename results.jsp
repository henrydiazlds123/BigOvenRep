<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
   <title> BigOven By Ingredient </title>
   <link rel = "stylesheet" href = "master2.css" media="screen" type = "text/css"/>
   <script src="jquery-1.4.4.min.js" type="text/javascript"></script>
 
    <script src="jsCarousel-2.0.0.js" type="text/javascript"></script>
 
    <link href="jsCarousel-2.0.0.css" rel="stylesheet" type="text/css" />
 
    <script type="text/javascript">
        $(document).ready(function() {
             $('#carouselh').jsCarousel({ autoscroll: false, masked: false, itemstodisplay: 9, orientation: 'h' }); 
        });       
         
    </script>
</head>
<body>
<div class="top">
<img src="title2.png"/>
</div>
<div class="line">
</div>
<div class="main">
<h1 id="results">Your Results</h1>
<div id="contents">
        <div id="v2">
            <div id="demo-wrapper">
                <div id="demo-right">
                    <div id="hWrapper">
                        <div id="carouselh">
                     	<c:foreach items="${recipe}" var="recipe">
	                     ${recipe}
	                     </c:foreach>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <input type="button" class="mainInputR" id="goback" value="Go Back To Change Ingredients" onClick="index.jsp" />
    </div>


</div>
</body>
</html>
