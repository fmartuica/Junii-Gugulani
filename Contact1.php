<!DOCTYPE html>
<html>
<link rel="icon" href="a.png" type="image" size="16x16">


<title>
Contact
</title>
<body background="pentru site 2.png">
<center><img alt=""  src="Imagine pancarda.png" width="700" height="500" /></center>

	<div align="center" class="text-indent"><b>Contact details can be found <a href="site1.pdf">here.<b></a></div>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #FF0000;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #FF0000;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.text-indent {
	width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #FF0000;
  background: white;
  border-radius: 10px 10px 10px 10px;
}
</style>
</head>
<body>

<h3>Contact</h3>

<div class="container">
  <form method="post" action="mailto:flavius_martuica@yahoo.com">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name...">

    <label for="lname">First name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your first name...">

    <label for="subject">Messaje</label>
    <textarea id="subject" name="subject" placeholder="Write the message..." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>




</body>
</html>