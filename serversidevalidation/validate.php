<?php

	/*  intilize variables*/
	$error_name		='';
	$error_email	='';
	$error_phone	='';
	$error_url		='';
	$error_gender	='';	
if($_POST)
{	
	$name			=	$_POST['name'];
	$email			=	$_POST['email'];
	$phoneNumber	=	$_POST['phoneNumber'];
	$url			=	$_POST['url'];
	$gender			=	$_POST['gender'];
	/*  validate name*/
	if (preg_match('/^[0-9]*$/',$name))
	{
		$error_name="Enter a valid alphabetical Name";
	}
	/*  intilize email*/
	if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email)) 
	{
		$error_email="Enter a valid email address";
	}
	/*  intilize number*/
	if(!preg_match('/^[1-9][0-9]*$/',$phoneNumber))
	{
		$error_phone="Enter valid phone number";
	}
	/*  intilize url*/
	if(!preg_match('%^((https?://)|(www\.))([a-z0-9-].?)+(:[0-9]+)?(/.*)?$%i',$url))
	{
		$error_url="Enter valid URL";
	}
	/*  intilize gender*/
	if($gender==0)
	{
		$error_gender="Select Gender";
	}
	if($error_name=='' && $error_email=='' && $error_phone=='' && $error_url=='' && $error_gender!='')
	{
		//mysql_query(" SQL insert statement ");
		header("Location: thanks.html");
	}
}
?>