<!DOCTYPE html>
<html>
<link rel="icon" href="a.png" type="image" size="16x16">
<head><link rel="stylesheet" href="Stema Junii Gugulani 2 galben.icon.png">

<script type="text/javascript" src="sound-mouseover.js"></script>

</head>
<body background="pentru site 2.png"></body>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #FF0000;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>

  <div class="container">
  <form method="post" action="mailto:flavius_martuica@yahoo.com">
    <label for="fname">Nume</label>
    <input type="text" id="fname" name="firstname" placeholder="Numele tău...">

    <label for="lname">Prenume</label>
    <input type="text" id="lname" name="lastname" placeholder="Prenumele tău...">

    <label for="parere">Părere despre curs:</label>
    <select id="parere" name="parere">
      <option value="foarte interesant">Foarte interesant</option>
      <option value="destul de interesant">Destul de interesant</option>
      <option value="neinteresant">Neintersant</option>
    </select>
	 <label for="sondaj">După această prezentare ai fi interesat să faci parte din Ansamblul Junii Gugulani?</label>
    <select id="sondaj" name="sondaj">
      <option value="da">Da</option>
      <option value="nu">Nu</option>
   </select>
    <input type="submit" value="Trimite">
  </form>
</div>

</body>

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
  
   <center><a href="Ce poti invata.php" onmouseover="playclip();" class="button5" target=continut>Închide cursul</a></center><br>

</html>
