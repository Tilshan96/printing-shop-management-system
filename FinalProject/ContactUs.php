<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Pathirana Printers</title>
	  <link rel="stylesheet" href="animate.css.">
	  <link rel="stylesheet" href="customerdashboard.css">
	  <link rel="stylesheet" href="contactus.css">

   </head>
   <body class="hold-transition sidebar-mini layout-fixed">
		
		<marquee class="blink" width="100%" direction="right" height="100px">
			Pathirana Printers - Thalduwa
		</marquee>
		
		<div style="position:absolute; top:35px";>
		<div style="border:2px solid black;width:1345;height:1000">
		<div style="margin:5px;border:2px solid black;width:300;height:980;">
		<div class="wrapper">		
	  
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <br><center><img src="logo.jpg"  width="200" top="40px"></center><br>
            <div class="sidebar">
               
			   <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				  
               <li class="nav-item animated bounceInLeft">
               <a href="CustomerDashboard.php" class="nav-link">
               <p>Dashboard</p>
               </a>
               </li>
			   
			   <li class="nav-item animated bounceInLeft">
               <a href="AboutUs.php" class="nav-link">
               <p>About Us</p>
               </a>
               </li>
			   
			   <li class="nav-item animated bounceInLeft">
               <a href="ContactUs.php" class="nav-link">
               <p>Contact Us</p>
               </a>
               </li>
				
               <li class="nav-item animated bounceInLeft">
               <a href="#" class="nav-link">
               <p>My Profile</p>
               </a>
               <ul class="nav nav-treeview">          
			   <li class="nav-item">
               <a href="Profile.php" class="nav-link">
               <p>Manage</p>
               </a>
               </li>
               </ul>
               </li>
			   
			   <li class="nav-item animated bounceInLeft">
               <a href="#" class="nav-link">
               <p>Order</p>
               </a>
               <ul class="nav nav-treeview">
               <li class="nav-item">
               <a href="OrderAdd.php" class="nav-link">
               <p>Add</p>
               </a>
               </li>          
			   <li class="nav-item">
               <a href="OrderManage.php" class="nav-link">
               <p>Manage</p>
               </a>
               </li>
               </ul>
               </li>
			   
			   <li class="nav-item animated bounceInLeft">
               <a href="#" class="nav-link">
               <p>Payment</p>
               </a>
               <ul class="nav nav-treeview">
               <li class="nav-item">
               <a href="PaymentAdd.php" class="nav-link">
               <p>Add</p>
               </a>
               </li>          
			   <li class="nav-item">
               <a href="CPaymentManage.php" class="nav-link">
               <p>Manage</p>
               </a>
               </li>
               </ul>
               </li>
			   
			   <li class="nav-item animated bounceInLeft">
               <a href="#" class="nav-link">
               <p>Quatation</p>
               </a>
               <ul class="nav nav-treeview">
               <li class="nav-item">
               <a href="QuatationAdd.php" class="nav-link">
               <p>Add</p>
               </a>
               </li>          
               </ul>
               </li>
			   
			   <li class="nav-item animated bounceInLeft">
               <a href="Login.php" class="nav-link"> 
               <p>Exit</p>
               </a>
               </li>
			   
               </ul>
               </li>
               </ul>
               </nav>
              </div>
       </aside>
      </div>
		</div>
	  
	  <div class="bgimg" style="position:absolute;top:7px; left:310px;border:2px solid black;width:1035;height:980">
			<div class="fcf-body">

    <div id="fcf-form">
    <center><h3 class="fcf-h3">Contact us</h3></center>

    <form id="fcf-form-id" class="fcf-form-class" method="post" action="contact-form-process.php">
        
        <div class="fcf-form-group">
            <label for="Name" class="fcf-label">Your name</label>
            <div class="fcf-input-group">
                <input type="text" id="Name" name="Name" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Your email address</label>
            <div class="fcf-input-group">
                <input type="email" id="Email" name="Email" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Message" class="fcf-label">Your message</label>
            <div class="fcf-input-group">
                <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
            </div>
        </div>

        <div class="fcf-form-group">
            <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Send Message</button>
        </div>


    </form>
    </div>

</div>
		</div>
		
		<?php
if (isset($_POST['Email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "you@yourdomain.com";
    $email_subject = "New form submissions";

    function problem($error)
    {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br><br>";
        echo $error . "<br><br>";
        echo "Please go back and fix these errors.<br><br>";
        die();
    }

    // validation expected data exists
    if (
        !isset($_POST['Name']) ||
        !isset($_POST['Email']) ||
        !isset($_POST['Message'])
    ) {
        problem('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $name = $_POST['Name']; // required
    $email = $_POST['Email']; // required
    $message = $_POST['Message']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'The Email address you entered does not appear to be valid.<br>';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'The Name you entered does not appear to be valid.<br>';
    }

    if (strlen($message) < 2) {
        $error_message .= 'The Message you entered do not appear to be valid.<br>';
    }

    if (strlen($error_message) > 0) {
        problem($error_message);
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
?>

    <!-- include your success message below -->

    Thank you for contacting us. We will be in touch with you very soon.

<?php
}
?>
		
   </body>
</html>