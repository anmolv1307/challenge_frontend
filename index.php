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

  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="my-4 p-4 border">
					<h6><strong> A. <span class="text-uppercase">Business Information</span> (To be completed by the Designated Official) </strong></h6>
					<br/>					
					<div class="media">
						<span class="mr-3"> 1. </span>
						<div class="form-group w-100">
							<label>Legal Name</label>
							<p class="border p-2 rounded"> <?= $model->legal_name ?> </p>
						</div>
					</div>
					<div class="media">
						<span class="mr-3"> 2. </span>
						<div class="form-group w-100">
							<label>Business Name (If different from legal name) </label>
							<p class="border p-2 rounded"> <?= $model->business_name ?> </p>
						</div>
					</div>
					<div class="media">
						<span class="mr-3"> 3. </span>
						<div class="form-group w-100">
							<label>Civic Address </label>
							<p class="border p-2 rounded"> <?= $model->business_address ?> </p>
						</div>
					</div>
					<div class="media">
						<span class="mr-3"> 4. </span>
						<div class="form-group w-100">
							<label>Mailing Address (If different from civic address) </label>
							<p class="border p-2 rounded"> <?= $model->business_mailing_address ?> </p>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="media">
								<span class="mr-3"> 5. </span>
								<div class="form-group w-100">
									<label>Telephone Number (Include extension no. if applicable) </label>
									<p class="border p-2 rounded"> <?= $model->business_phone ?> </p>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="media">
								<span class="mr-3"> 6. </span>
								<div class="form-group w-100">
									<label>Facsimile Number </label>
									<p class="border p-2 rounded"> <?= $model->business_fax ?> </p>
								</div>
							</div>
						</div>
					</div>

					<div class="media">
						<span class="mr-3"> 7. </span>
						<div class="form-group w-100">
							<label>E-mail </label>
							<p class="border p-2 rounded"> <?= $model->business_email ?> </p>
						</div>
					</div>

					<div class="media">
						<span class="mr-3"> 8. </span>
						<div class="form-group w-100">
							<label class="mb-0">Description of the controlled goods the applicant may be required to examine, possess or transfer. </label>
							<small class="form-text text-muted"> (Refer to the Export Control List (ECL)) </small>
						</div>
					</div>

					<div class="table-responsive">
						<table class="table table-bordered">
							<thead class="thead-light">
								<tr>
								<th scope="col"></th>
								<th scope="col" class="text-center">Description of Controlled Goods</th>
								<th scope="col" class="text-center">ECL Group No.</th>
								<th scope="col" class="text-center">ECL Item No.</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($controlledGoods as $key => $good): ?>
									<tr>
										<th scope="row" class="text-center"><?= $key+1 ?></th>
										<td class="text-center"> <?= $good['Description'] ?> </td>
										<td class="text-center"> <?=$good['Group']?> </td>
										<td class="text-center"> <?=$good['Item']?> </td>
									</tr>
								<?php endforeach;?>
							</tbody>
						</table>
					</div>

					<br/>

					<h6><strong> B. <span class="text-uppercase">Applicant Information</span> (To be completed by the applicant) </strong></h6>
					<br/>

					<div class="media">
						<span class="mr-3"> 9. </span>
						<div class="form-group w-100">
							<label>Type of Application</label>

							<?php if($model->application_type): ?>
							<div class="custom-control custom-checkbox">
								<input type="radio" checked class="custom-control-input" name="applicationType" id="new_application">
								<label class="custom-control-label" for="new_application">New</label>
							</div>							
							<?php endif; ?>
							<div class="custom-control custom-checkbox">
								<input type="radio" class="custom-control-input" name="applicationType" id="re_assessment">
								<label class="custom-control-label" for="re_assessment">Re-Assessment</label>
							</div>
						</div>
					</div>
					<div class="media">
						<span class="mr-3"> 10. </span>
						<div class="form-group w-100">
							<label>Business Title (Select all that apply)</label>							
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="owner">
								<label class="custom-control-label" for="owner">Owner</label>
							</div>	
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="authorized_individual">
								<label class="custom-control-label" for="authorized_individual">Authorized Individual</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="designated_official">
								<label class="custom-control-label" for="designated_official">Designated Official</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="officer">
								<label class="custom-control-label" for="officer">Officer</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="director">
								<label class="custom-control-label" for="director">Director</label>
							</div>
							<?php if($model->business_title): ?>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" checked class="custom-control-input" id="employee">
								<label class="custom-control-label" for="employee">Employee</label>
							</div>
							<?php endif; ?>
						</div>
					</div>
					<div class="media">
						<span class="mr-3"> 11. </span>
						<div class="form-group w-100">
							<label>Preferred Language of Correspondence</label>	
							<?php if($model->business_title): ?>						
							<div class="custom-control custom-checkbox">
								<input type="checkbox" checked class="custom-control-input" id="english">
								<label class="custom-control-label" for="english">English</label>
							</div>
							<?php endif; ?>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="french">
								<label class="custom-control-label" for="french">French</label>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-12">
				<div class="text-right mb-4">
					<button type="button" class="btn btn-link" id="print">Print PDF of this form</button>
				</div>
			</div>
		</div>
	</div>	

	<script src="js/jquery-3.5.1.slim.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/scripts.js"></script>
</body>
</html>

