<!DOCTYPE html>
<html>
	<head>

<link rel="style" type="text/css" href="Galerie_foto.css">
<script type="text/javascript" src="sound-mouseover.js"></script>
</head>
	<link href="quiz.css" rel="stylesheet">
	
	<body background="pentru site 2.png" ></body>
	
<head>
    <title>FireWorks Display</title>
    <style>
      html, body {
        height: 100%;
        width: 100%;
      }

      body {
        margin: 0 auto;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="user-input">
      <label for="fireWorkCount"></label>

      <select name="fireWorkCount" id="fireWorkCount" value="50">
        <option value="1" >1</option>
        <option value="5" >5</option>
        <option value="10" >10</option>
        <option value="20">20</option>
        <option value="30">30</option>
        <option value="40">40</option>
        <option value="50" selected>50</option>
      </select>
    </div>
    <script src="fireworks.js"></script>
	<h1 align=center bgcolor=red> Felicitări, ai terminat cursul!</h1>
	
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
.button5 {width: 30%;}
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

  <center><a href="chestionar.test.php" onmouseover="playclip();" class="button5" target=continut>Continuă</a></center><br>

  </body>
</html>
	

	