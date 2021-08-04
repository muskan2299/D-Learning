	<?php
	/*include'lib/MailChimp.php';

	use \DrewM\MailChimp\MailChimp;
	$api_key='0dafaa823745319dd8b381ce71e7fff9-us6';
	$list_id='abddbebe2f';
	
	$MailChimp = new MailChimp('abc123abc123abc123abc123abc123-us1');*/

	$con= new mysqli('localhost','root','','apricity_project')or die("Could not connect to mysql".mysqli_error($con));
	session_start();
	$email=$_SESSION['email'];
	$name=$_SESSION['name'];

    $txtUrl = $_POST['link'];
	$txtSec = $_POST['section'];
	$sql="UPDATE user SET url='$txtUrl' WHERE section='$txtSec';";
	$result= mysqli_query($con, $sql);

	/*$list_id = 'b1234346';
	$sql="Select email from user where section='$txtSec'";
	$result=mysqli-query($con,$sql);
	if(mysli_num_rows($result)>0){
	 //$email->addReplyTo("bhardwajmehul1609@gmail.com");
	 while($x=mysqli_fetch_assoc($result))
	 {
	     //$email->addAddress($x['email']);
		 $result = $MailChimp->post("lists/$list_id/members", [
			'email_address' => $x['email'],
							'merge_fields' => ['text'=>$link],
			'status'=>'subscribed',
			]);
	 }
	 if ($MailChimp->success()) {
		//print_r($result);
		echo '<h2>Submitted</h2>';	
		} else {
		echo $MailChimp->getLastError();
		}	
	}*/
	
	
//$result = $MailChimp->post("lists/$list_id/members", ['email_address' => $email,'merge_fields' => 'FNAME'=>'$fname', 'LNAME'=>'$lname' 'PHONE'=>'$phone,'status'=> 'subscribed',]);

echo "<script>window.close();</script>" ;
	
	/*$mail=$_SESSION['email'];
  	$email = new PHPMailer(true);
	  $email->SMTPDebug=2;
      $email->isSMTP();
	  $email->Host  = "smtp.gmail.com";
	  $email->SMTPAuth = true;
	  $email->username = "bhardwajmehul1609@gmail.com";
	  $email->Password = "manvibhardwaj";
	  $email->SMTPSecure = 'ssl';
	  $email->port = 587;
	  
	$email->setFrom("$mail");
	$sql="Select email from user where section='$txtSec'";
	$result=mysqli-query($con,$sql);
	if(mysli_num_rows($result)>0){
	
	 $email->addReplyTo("bhardwajmehul1609@gmail.com");
	 
	 while($x=mysqli_fetch_assoc($result))
	 {
	     $email->addAddress($x['email']);
	 }
	 $email->isHTML(true);
	 $email->Subject = 'Meeting link';
	 $email->body = "$txtUrl";
	 if($email->send())
	 {
	    echo 'Success';
		}
	else{ 
          echo 'Failed';
        }	
	}
	else
	{
	   echo 'Failed';
	}*/

	//echo "<script>window.close();</script>" ;
	//$lastInsertedId =  mysql_insert_id(); # Assuming you have an auto increment column in your table.
	//header('Location: Student/homepage.php?id='.$lastInsertedId);

?>
