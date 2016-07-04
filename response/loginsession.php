<?php
$errors=array();	// array to hold validation errors
$data	=array();	// array to pass back data

if(isset($_POST['UserName']) ||  isset($_POST['Password']) ){

// validate the variables ======================================================
	if(empty($_POST['UserName']))
	$errors['name']='UserName is required.';

	if(empty($_POST['Password']))
	$errors['pass']='Password is required.';

// return a response ===========================================================

// response if there are errors
	if(!empty($errors)){
		// if there are items in our errors array, return those errors
		$data['success']=false;
		$data['errors']=$errors;
	}else{

		if($_POST['UserName'] == 'admin' && $_POST['Password'] == 'admin'){
			$data['success']=true;
			$data['userid']=88;
			$data['usertype']='School!';
		}else{
			$data['success']=false;
			$errors['wrong']='Invalid Credentials';
			$data['errors']=$errors;
		}
	}
}else{
	$data['success']=false;
	$errors['empty']='Enter Details';
	$data['errors']=$errors;
}
	echo json_encode($data);
?>