<?php
  $con = mysqli_connect("localhost","root","","apricity_project");
  $email = new PHPMailer;
      $email->isSMTP();
	  $email->Host  = "smtp.gmail.com";
	  $email->SMTPAuth = true;
	  $email->username = "bhardwajmehul1609@gmail.com";
	  $email->Password =
	  $email->SMTPSecure = 'MYSimplePass';
	  $email->port = 587;
	  
	$email->setFrom("bhardwajmehul1609@gmail.com");
	$sql="Select email from user where sec='__'";
	$result=mysqli-query($con,$sql);
	if(mysli_num_rows($result)>0){
	
	 $email->addReplyTo("bhardwajmehul1609@gmail.com");
	 
	 while($x=mysqli_fetch_assoc($result))
	 {
	     $email->addAddress($x['email']);
	 }
	 $email->isHTML(true);
	 $email->Subject = 'meeting link';
	 $email->body = "select url from user where sec='__'";
	 if($email->send())
	 {
	    echo"Success";
		}
	else
      { echo "Failed"};	
	
	}
	else
	{
	   echo "Failed";
	}
	
	?>