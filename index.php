<!DOCTYPE html>
<html>
<body>
	<head>  
		<meta charset="utf-8">
		<link rel="stylesheet" href="stress.css">
		<script type="text/javascript" src="stress.js"></script>
		<title>Stresstermometern</title>
	</head>

	<h1>Välj alternativet som passar bäst</h1>

<form action="data.php" method="post">

<table style="width: 662px; text-align: left;">
	<tr>
		<th style="background-color: #C00000">
			<label>
				<input type="radio" name="stress" value="9">HJÄLP!!
			</label>
		</th>
	</tr>

	<tr>
		<th style="background-color: rgb(255,0,0);">
			<label>
				<input type="radio" name="stress" id="stress" value="8">Saknar kontroll. Mycket stark stress.
			</label><br>
		</th>
	</tr>

	<tr>
		<th style="background-color: rgb(255,51,0)">
			<label>
				<input type="radio" name="stress" id="stress" value="7">Saker samlas på hög, stressigt, behöver avlastning.
			</label><br>
		</th>
	</tr>
	
	<tr>
		<th style="background-color: rgb(255,102,0);">
			<label>
				<input type="radio" name="stress" id="stress" value="6">Hinner inte med allt. Stressig situation.
			</label><br>
		</th>
	</tr>

	<tr>
		<th style="background-color: rgb(255,153,0);">	
			<label>
				<input type="radio" name="stress" id="stress" value="5">Svårt att hinna med. Börjar känna av negativ stress.
			</label><br>
		</th>
	</tr>
	
	<tr>
		<th style="background-color: rgb(255,255,0);">
			<label>
				<input type="radio" name="stress" id="stress" value="4">Något för mycket att göra, dock utan negativ stress.
			</label><br>
		</th>
	</tr>
	
	<tr>
		<th style="background-color: rgb(153,255,51);">
			<label>
				<input type="radio" name="stress" id="stress" value="3">Mycket att göra, men hinner. Börjar närmar sig stress.
			</label><br>	
		</th>
	</tr>
	
	<tr>
		<th style="background-color: rgb(146,208,80);">
			<label>
				<input type="radio" name="stress"  id="stress" value="2">Lugn och ostressad.
			</label><br>
		</th>
	</tr>
	
	<tr>
		<th style="background-color: rgb(0,176,80);">
			<label>
				<input type="radio" name="stress" id="stress"  value="1">För lite att göra, kan avlasta.
			</label><br>
		</th>
	</tr>
</table>

	<textarea name="comments" id="comments" placeholder="Skriv här om det är någonting du vill förklara eller berätta..." rows="8" cols="80"></textarea><br>
</form>
<input type="Submit" value="skicka">


</body>
</html>