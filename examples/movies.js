function handleChange(dropDown)
{


$.get("getMovies.php", {actorId: dropDown.value}, handleResult(data));
   //alert("" + dropDown.value + " list changed.");
   var xmlRequest = new XMLHttpRequest();
   xmlRequest.onreadystatechange = function() {
     if (xmlRequest.readyState == 4 && xmlRequest.status == 200) {
      handleResult(xmlRequest.responseText);
 }
   
   };
   
   xmlRequest.open("GET", "getmovies.php?actorId=" + dropDown.value, true);
   xmlRequest.send();
   
}
function handleResult(result)
{
  alert("got this back: " + result);
}