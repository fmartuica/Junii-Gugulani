<!DOCTYPE html>
<html>
	<head>

<link rel="style" type="text/css" href="Galerie_foto.css">
<script type="text/javascript" src="sound-mouseover.js"></script>
</head>
</head>
	<link href="quiz.css" rel="stylesheet">
	
	<body background="pentru site 2.png" >
	
		<style>
#div1 {
  font-size:48px;
  padding: 0px 38px;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

<div id="div1" class="fa"></div>

<script>
function hourglass() {
  var a;
  a = document.getElementById("div1");
  a.innerHTML = "&#xf251;";
  setTimeout(function () {
      a.innerHTML = "&#xf252;";
    }, 1000);
  setTimeout(function () {
      a.innerHTML = "&#xf253;";
    }, 2000);
}
hourglass();
setInterval(hourglass, 3000);
</script>

<h1><time>00:00:00</time></h1>
<script>
var h1 = document.getElementsByTagName('h1')[0],
    start = document.getElementById('start'),
    stop = document.getElementById('stop'),
    clear = document.getElementById('clear'),
    seconds = 0, minutes = 0, hours = 0,
    t;

function add() {
    seconds++;
    if (seconds >= 60) {
        seconds = 0;
        minutes++;
        if (minutes >= 60) {
            minutes = 0;
            hours++;
        }
    }
    
    h1.textContent = (hours ? (hours > 9 ? hours : "0" + hours) : "00") + ":" + (minutes ? (minutes > 9 ? minutes : "0" + minutes) : "00") + ":" + (seconds > 9 ? seconds : "0" + seconds);

    timer();
}
function timer() {
    t = setTimeout(add, 1000);
}
timer();



start.onclick = timer;


stop.onclick = function() {
    clearTimeout(t);
}


clear.onclick = function() {
    h1.textContent = "00:00:00";
    seconds = 0; minutes = 0; hours = 0;
}
</script>

  
	<center><table style="width:583px">
	<tr>
	  <td>
	  	<div>
	  		<p class="question">1)În câte văi folclorice este împarțiit Banatul Montan?</p>

	    	<ul>
	    	<input class="answer" type="radio" name="q1" value="1">
	        <label id="correctString1">a)7</label>
	    	<br>
	        <input class="answer" type="radio" name="q1" value="0">
	        <label>b)8</label>
	        <br>
	        <input class="answer" type="radio" name="q1" value="0">
	        <label>c)9</label>
	        <br>
	        <input class="answer" type="radio" name="q1" value="0">
	        <label>d)2</label>
    		</ul>
	  	</div>
	  </td>
	  <td>
	  	<div>
	  		<p class="question">2)Ce dans este specific Banatului de Câmpie?</p>

	    	<ul>
	        <input class="answer" type="radio" name="q2" value="0">
	        <label>a)brâul</label>
	        <br>
	        <input class="answer" type="radio" name="q2" value="1">
	        <label id="correctString2">b)sorocul</label>
	        <br>
	        <input class="answer" type="radio" name="q2" value="0">
	        <label>c)ardeleana</label>
	        <br>
	        <input class="answer" type="radio" name="q2" value="0">
	        <label>d)hora</label>
	    	</ul>
	  	</div>
	  </td>
	</tr>
	<tr>
	  <td>
	  	<div>
	  		<p class="question">3)Pe teritoriile a câtor țări se întinde Banatul?</p>

	    	<ul>
	        <input class="answer" type="radio" name="q3" value="0">
	        <label>a)2</label>
	        <br>
	        <input class="answer" type="radio" name="q3" value="1">
	        <label id="correctString3">b)4</label>
	        <br>
	        <input class="answer" type="radio" name="q3" value="0">
	        <label>c)1</label>
	        <br>
	        <input class="answer" type="radio" name="q3" value="0">
	        <label>d)3</label>
	    	</ul>
		</div>
	  </td>
	  <td>
	  	<div>
	  		<p class="question">4)Câte tipuri de horă de bază există in Banatul Montan?</p>

	    	<ul>
	        <input class="answer" type="radio" name="q4" value="0">
	        <label>a)1</label>
	        <br>
	        <input class="answer" type="radio" name="q4" value="1">
	        <label id="correctString4">b)2</label>
	        <br>
	        <input class="answer" type="radio" name="q4" value="0">
	        <label>c)8</label>
	        <br>
	        <input class="answer" type="radio" name="q4" value="0">
	        <label>d)6</label>
    		</ul>
	  	</div>
	  </td>
	</tr>
	
	</table></center>
<br/>
<center><div class="submitter">
          <input class="quizSubmit" id="submitButton" onClick="submitQuiz()"
          type="submit" value="Submit" />
    </div>
  

    <div class="quizAnswers" id="correctAnswer1"></div>
	    <div class="quizAnswers" id="correctAnswer2"></div>
    <div class="quizAnswers" id="correctAnswer3"></div>
    <div class="quizAnswers" id="correctAnswer4"></div>




    <div>
    	<h2 class="quizScore" id="userScore"></h2>
    </div>
	</div></center>

</body>
	</div>
	<script src="question.js"></script>
	<script src="quiz-script.js"></script>
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
  <center><a href="curs2.php" onmouseover="playclip();" class="button5" target=continut>Începe al doilea modul de curs</a></center><br>
</html>