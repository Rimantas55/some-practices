<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Some Practices</title>
</head>
<body>
	<p>HTML input list even there you can search needed value</p>

	<input list="colors" />
	<datalist id="colors">
		<option value="Blue">
		<option value="Red">
		<option value="Yellow">
		<option value="Orange">
		<option value="White">
	</datalist>

	<p>Date type</p>
	<input type="datetime-local" /> <br>

	<p>Numbers</p>
	<input type="number" name="">

	<p>Range ir naudoja JS</p>
	<div>
	<input type="range" 
	name=""
	id="move-range" 
	min="0" max="120"
	step="5" value="30"> 
	
	<span id="move-value">30</span>
	</div>
	<script>
		var moveValue = document.getElementById('move-value');

		document.getElementById('move-range').addEventListener('change', function(){
			moveValue.innerText = this.value;
		}, false);

	</script>

	<br>

	<p>Kai naudojam inpute required + yra funkcija autofocus</p>
	<input type="text" name="" required="" value="" autofocus="">

	 <br />
	 Drag and drop js scripts
	 <br />
	 <div id="shoppingcart">
	 	<header class="blockheader">Shopping cart</header>
	 	<ul></ul>
	 </div>


	 <script>
	 	document.addEventListener("DOMContentLoaded", addDnDHandlers, false);
	 </script>
	 
	 <script src="app.js"></script>


</body>
</html>