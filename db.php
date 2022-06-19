<?php
	$company_name = $_POST['company_Name'];
	$starting_date = $_POST['starting_date'];
	$founder_name = $_POST['founder_name'];
	$email = $_POST['email'];
	$phone_no = $_POST['phone_no'];
	$aim = $_POST['aim'];
	$no_of_customer = $_POST['no_of_customer'];
	$no_of_employee = $_POST['no_of_employee'];
	$total_investement = $_POST['total_investement'];
	$annual_income = $_POST['annual_income'];
	$recruiment = $_POST['recruiment'];
	$idea_startup = $_POST['idea_startup'];
	$legal_process = $_POST['legal_process'];
	$problems = $_POST['problems'];
	$user_demand = $_POST['user_demand'];
	$suggestions = $_POST['suggestions'];

	$conn = new mysqli('localhost','root','','nmvdata');

	if($conn->connect_error)
	{
		die('Connection Failed : '.$conn->connect_error);
	}
	else
	{
		$stmt = $conn->prepare("INSERT INTO `nmvsurvey`(`company_id`, `name`, `starting_date`, `founder`, `email`, `phone`, `aim`, `no_of_cust`, `no_of_emp`, `invest`, `income`, `recruitment`, `idea`, `legal`, `problem`, `demand`, `suggestion`) VALUES ('null',?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssssssssssssssss",$company_name, $starting_date, $founder_name, $email, $phone_no, $aim, $no_of_customer, $no_of_employee, $total_investement, $annual_income, $recruiment, $idea_startup, $legal_process, $problems, $user_demand, $suggestions);
		$stmt->execute();
		$stmt->close();
		$conn->close();
		header('Location:404.html');
	}
?>