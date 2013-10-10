<?php 

$first		= $_POST['first'];
$last		= $_POST['last'];
$email 		= $_POST['email'];
$phone		= $_POST['mobile'];
$office		= $_POST['office'];
$title		= $_POST['title'];
$company	= $_POST['company'];
$department	= $_POST['deaprtment'];
$website	= $_POST['website'];
$message 	= $_POST['message'];
//$industry	= $_POST['industry'];


$data = array(
	'firstName' 	=> $first,
    'lastName' 		=> $last,
    'primaryEmail' 	=> Array
                    (
                        'emailAddress' => $email,
                        'optOut' => 1,
                    ),
    'description' 	=> $message,
    'mobilePhone' 	=> $phone,
    'officePhone' 	=> $office,
    'department' 	=> $department,
    'jobTitle'		=> $title,
    'companyName' 	=> $company,
    'website'		=> $website,
    // 'industry'	= array(
    // 	'value' => $industry
    // 	),
    'state' 		=> array(
    					'id' => 3
    				),
    // 'statusCstm' => array(
    // 	'id' => 1
    // 	)

    
	);

$zurmo = new \Zurmo\REST('https://youraddress.com', 'username', 'password');

$post = $zurmo->create($data, 'leads', 'contact');
//$post = $zurmo->contactAttributes();
//$post = $zurmo->contactStates();
echo $post;