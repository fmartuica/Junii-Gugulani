<!DOCTYPE html>
<html>
<link rel="icon" href="a.png" type="image" size="16x16">


<title>
Contact
</title>
<body background="pentru site 2.png">
<center><img alt=""  src="Imagine pancarda.png" width="700" height="500" /></center>

	<div align="center" class="text-indent"><b>Datele de contact le puteți găsi <a href="site.pdf">aici.<b></a></div>

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
    <label for="fname">Nume</label>
    <input type="text" id="fname" name="firstname" placeholder="Numele tau...">

    <label for="lname">Prenume</label>
    <input type="text" id="lname" name="lastname" placeholder="Prenumele tau...">

    <label for="country">Regiune</label>
    <select id="country" name="country">
      <option value="banat">Banat</option>
      <option value="oltenia">Oltenia</option>
      <option value="transilvania">Transilvania</option>
	  <option value="moldova">Moldova</option>
      <option value="muntenia">Muntenia</option>
	  <option value="dobrogea">Dobrogea</option>
	  <option value="crisana">Crișana</option>
	  <option value="maramures">Maramureș</option>
      <option value="buconina">Bucovina</option>
	   <option value="alta">Diaspora</option>
	  
	  
    </select>

    <label for="subject">Mesaj</label>
    <textarea id="subject" name="subject" placeholder="Scrie mesajul..." style="height:200px"></textarea>

    <input type="submit" value="Trimite">
  </form>
</div>




</body>
</html>