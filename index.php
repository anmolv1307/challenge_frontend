<?php
class Records {
	public $legal_name = "CrowdApex Systems Inc";
	public $business_name = "CrowdApex";
	public $business_address = "290 Bremner Blvd, Toronto, ON M5V 3L9, Canada";
	public $business_mailing_address = " Wellington St, Ottawa, ON K1A 0A9, Canada";
	public $business_phone = "+1 647 944 3023"; 
	public $business_fax = "+1 647 944 3024";
	public $business_email = "hello@controlledgoods.com";
	public $application_type = "New";
	public $business_title = "Employee";
	public $lang = "English";
}
$controlledGoods = [
	["Description"=>'Miliatry Product'	,"Group"=>123,"Item"=>123.1],
	["Description"=>"Silly Product"		,"Group"=>345,"Item"=>321.0],
	["Description"=>'Miliatry Product'	,"Group"=>123,"Item"=>123.1],
	["Description"=>"Silly Product"		,"Group"=>345,"Item"=>321.0],
	["Description"=>'Miliatry Product'	,"Group"=>123,"Item"=>123.1],

];

$model = new Records();

?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Security Screen</title>

  <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>
  <script src="js/scripts.js"></script>
  	<?= $model->legal_name ?>  <br>

	<?php foreach($controlledGoods as $good): ?>

	<?= $good['Description'] ?> <?=$good['Group']?> <?=$good['Item']?> <br>

	<?php endforeach;?>
</body>
</html>

