<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Pathirana Printers</title>
	  <link rel="stylesheet" href="animate.css.">
	  <link rel="stylesheet" href="dashboard.css.">

   </head>
   <body class="hold-transition sidebar-mini layout-fixed">
		
		<marquee class="blink" width="100%" direction="right" height="100px">
			Pathirana Printers - Thalduwa
		</marquee>

		<div style="position:absolute; top:35px";>
		<div style="border:2px solid black;width:1345">
		<div style="margin:5px;border:2px solid black;width:300">
		<div class="wrapper"> 
	  
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <br><center><img src="logo.jpg"  width="200" top="40px"></center><br>
            <div class="sidebar">
               
			   <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				  
               <li class="nav-item animated bounceInLeft">
               <a href="AdminDashboard.php" class="nav-link">
               <p>Dashboard</p>
               </a>
               </li>
			   
			   <li class="nav-item animated bounceInLeft">
               <a href="#" class="nav-link">
               <p>Register</p>
               </a>
               <ul class="nav nav-treeview">
               <li class="nav-item">
               <a href="AdminRegisterAdd.php" class="nav-link">
               <p>Add</p>
               </a>
               </li>          
			   <li class="nav-item">
               <a href="AdminRegisterManage.php" class="nav-link">
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
               <a href="AdminOrderManage.php" class="nav-link">
               <p>Manage</p>
               </a>
               </li>          
			   <li class="nav-item">
               <a href="AdminOrderConfirm.php" class="nav-link">
               <p>Confirm</p>
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
               <a href="AdminPaymentManage.php" class="nav-link">
               <p>Manage</p>
               </a>
               </li>          
			   <li class="nav-item">
               <a href="AdminPaymentConfirm.php" class="nav-link">
               <p>Confirm</p>
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
	  
	  <div class="bgimg" style="position:absolute;top:7px; left:310px;border:2px solid black;width:1035">
		<form name="f1" method="post">
		
		<h2><center>Customer Details</center></h2>
		
			&emsp;&emsp;<input type="submit" name="s1" value="Search" >&emsp;&emsp;
			<input type="text" name="t18"> <br><br>
			
			<div class="row">
		
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;NICNo :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
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
        <label for="exampleInputEmail1">&emsp;&emsp;Gender ::&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp</label>
		<input type="text" name="t5">
        </div>
        </div><br>
		
		<div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Address :&emsp;&emsp;&emsp;&emsp;&emsp; </label>
        <input type="text" name="t9">
        </div>
        </div><br>
                                    
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Contact :&emsp;&emsp;&emsp;&emsp;&emsp;</label>
        <input type="text" name="t7">
        </div>
        </div><br>
        
		<div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Email :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; </label>
        <input type="text" name="t8">
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
        <label for="exampleInputEmail1">&emsp;&emsp;Full Payment :&emsp;&emsp;&emsp;</label>
        <input type="text" name="t17"><br>
        </div>
        </div><br>
        
		<div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Advance Payment :&emsp;</label>
		<input type="text" name="t19">
        </div>
        </div><br>
		
		<div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Due date :&emsp;&emsp;&emsp;&emsp;&emsp;</label>
		<input type="text" name="t19">
        </div>
        </div><br>
        
		</div>
		
		</div>
		
   </body>
</html>