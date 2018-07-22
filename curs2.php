<html>
<link rel="icon" href="a.png" type="image" size="16x16">
<head><link rel="stylesheet" href="Stema Junii Gugulani 2 galben.icon.png">
<script type="text/javascript" src="sound-mouseover.js"></script>
</head>
<body background="pentru site 2.png">

<p id="demo"></p>

<script>
var myVar = setInterval(myTimer, 1000);

function myTimer() {
    var d = new Date();
    document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>
<hr size=2% color=black></hr>
<center><img alt=""  src="curs2.png"></center><br ><br>


<style>
.button5 {
    background-color: #FFFFFF;
    border: #FF0000;
    color: black;
    padding: 16px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	margin: 4px 2px;
    cursor: pointer;
	border-radius: 15px;
	border: 3px solid #FF0000;
}
.button5 {width: 10%;}
.button5:hover {background-color: #FF0000}

.button5:active {
  background-color: #FF0000;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
  </style>
  <audio>
<source src="click.mp3"></source>
</audio>

<div id="sounddiv"><bgsound id="sound"></div>
  <center><a href="test2.php" onmouseover="playclip();" class="button5" target=continut>Începe test</a></center><br>
</body>
</html>