var myVar = setInterval(myTimer, 1000);
var loaded = false;

$(function() {
  loaded = true
});

function myTimer() {
  var d = new Date()
  var dateTime = d.toLocaleTimeString();
  var divMessage = ''
  if (loaded)
    divMessage = document.getElementById("divMessage").innerHTML
  document.getElementById("div2").innerHTML = "<span style=\"color:green\">" +
    divMessage + ", " + dateTime + "</span>";

}