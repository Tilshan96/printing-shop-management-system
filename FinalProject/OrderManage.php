<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Pathirana Printers</title>
	  <link rel="stylesheet" href="animate.css.">
	  <link rel="stylesheet" href="customerdashboard.css">

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
			<form name="f1" method="post">
		
		<h2><center>Order Details</center></h2>
		
			&emsp;&emsp;<input type="submit" name="s1" value="Search" >&emsp;&emsp;
			<input type="text" name="t18"> <br><br>
			
			<div class="row">
		
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;NICNo :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
		<input type="text" name="t1">
        </div>
		
        </div><br><div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Name :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp </label>
		<input type="text" name="t2">
        </div>
        </div><br>
                                    
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Contact :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp </label>
        <input type="text" name="t7">
        </div>
        </div><br>
        
		<div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Service that want :&emsp;</label>
        <input type="text" name="t10">&emsp;&emsp;
        </div>
        </div><br>
		
		<div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Date that want the order :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
		<input type="text" name="t19">
        </div>
        </div><br>
		
		<div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Due date :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
		<input type="text" name="t19">
        </div>
        </div><br>
        
		</div>
		</div>
		
   </body>
</html>