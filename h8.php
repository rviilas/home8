<?php 
$tekst="See siin on näite tekst";
if (isset($_POST['tekst']) && $_POST['tekst']!="") {
    $tekst=htmlspecialchars($_POST['tekst']);
} 
$tcol="#33cc33"; 
if (isset($_POST['tcol']) && $_POST['tcol']!="") {
    $tcol=htmlspecialchars($_POST['tcol']);
} 
$bgcol="#cc0066"; 
if (isset($_POST['bgcol']) && $_POST['bgcol']!="") {
    $bgcol=htmlspecialchars($_POST['bgcol']);
} 
$bocol="#003300"; 
if (isset($_POST['bocol']) && $_POST['bocol']!="") {
    $bocol=htmlspecialchars($_POST['bocol']);
} 
$quantity="5";
if (isset($_POST['quantity']) && $_POST['quantity']!="") {
    $quantity=htmlspecialchars($_POST['quantity']);
} 
$quantity2="5";
if (isset($_POST['quantity2']) && $_POST['quantity2']!="") {
    $quantity2=htmlspecialchars($_POST['quantity2']);
} 
$bstyle="solid";
if (isset($_POST['bstyle']) && $_POST['bstyle']!="") {
    $bstyle=htmlspecialchars($_POST['bstyle']);
} 

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Home8</title>
<style type="text/css">
#result
{
color: <?php echo $tcol;?>;
background: <?php echo $bgcol; ?>;
border-color: <?php echo $bocol;?>;
border-width: <?php echo $quantity; ?>px;
border-radius: <?php echo $quantity2; ?>px;
border-style: <?php echo $bstyle; ?>;
}
</style>
</head>
<body>
<div id='result' style="height:120px;width:400px;text-align:center;">
<?php echo $tekst;?>;
</div>

<hr>
<form action="h8.php" method="POST">
	<input type="text" name="tekst" value="sisestage siia tekst" style="height:50px;width:200px;"/><br><br>
	<div><input type="color" name="tcol" value="#33cc33"> - Tekstivärvus</div><br>
	<div><input type="color" name="bgcol" value="#cc0066"/> - Tasutavärvus</div><br>
	<hr>
	<div>Piirjoon</div>
	<hr>	
	<div><input type="color" name="bocol" value="#003300"/> - Piirjoone värvus</div><br>
	<div><input type="number" name="quantity" value="5" min="1" max="20"> - Piirjoone laius (1-20px)</div><br>
	<div><input type="number" name="quantity2" value="5" min="0" max="100"> - Piirjoone raadius (0-100px)</div><br>
	<div>
	<input list="bstyle" name="bstyle">
  <datalist id="bstyle">
    <option value="dotted solid">
    <option value="dotted">
    <option value="double">
    <option value="dotted solid double dashed">
  </datalist>
	</div><br>
	<hr>
	<input type="submit" value="esita"/>
</form>
</p>
</body>
</html>