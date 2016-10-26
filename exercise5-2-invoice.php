<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
tr,td,th{
	border: none;
}
#botton{
	padding-right:100px;
	text-align:center;
}
#select1{
	padding-right:45px
}
#select2{
	padding-left:65px;
	text-align:left;
}
</style>
<title></title>
</head>
<body>
<table border="1">
<tr><th colspan="2">Create Invoice</th><tr>
<form method="POST">
<tr><td>Restaurant ID</td><td><input data type="number" value="1" name="id1" readonly ></td></tr>
<tr><td>Date</td><td><input type="text" name="date1" value="<?php echo date("y.m.d H:i:s"); ?>" readonly ></td></tr>
<tr><td>Invoice number</td><td><input type="number" name="invoice" min="0"></td></tr>
<tr><td>Employee</td><td><select name="employee" value="choose one" id="select1"><option value="choose employee" selected disabled>choose employee</option><option value="emp1">employ1</option><option value="emp2">employ2</option><option value="emp3">employ3</option></select></td></tr>
<tr><td>Article</td><td><select name="item" value="choose one" id="select2"><option value="choose2 " selected disabled>choose article</option> <?php 
$articles=array(
array("article"=>"Coke",	"id"=>4321),
array("article"=>"Steak",	"id"=>4322),
array("article"=>"Ice	cream",	"id"=>4323),
array("article"=>"Beer",	"id"=>4324));
for($row=0;$row<=3;$row++){
	echo "<option value ="."\"".$articles[$row]["id"]."\"".">".$articles[$row]["article"]."</option>";
}
?>
</tr>
<tr><td>Amount</td><td><input type="number" min="0" name="amount"></td></tr>
<tr ><td colspan="2"><input type="submit" name="submit1" value="send" id="botton"></td></tr>
</form>
<?php 




 
function invoicedata(){
	if(isset($_POST['submit1'])){
		echo "<tr><td colspan=\"2\">data entered</td></tr>";
		echo "<tr><td colspan=\"2\">".$_POST['id1']." ".$_POST['date1']." ".$_POST["invoice"]." ".$_POST["employee"]." ".$_POST["amount"]." ".$_POST["item"]."</td></tr>";
	}
}
invoicedata();

?>

</table>

</body>
</html>
 