<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"  href="css/homestyle.css">
	<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title></title>
	<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="menu-bar">
<ul>
	<li class="active"><a href="yu.php"><i class="fa fa-money"></i>Balance</a></li>
	<li><a href="custup.php"><i class="fa fa-user-circle-o"></i>Cust_info</a></li>
	<li><a href="#"><i class="fa fa-user-circle-o"></i>Activity</a>
		<div class="sub-menu-l">
		<ul>
			<li><a href="tr.php">Transaction History Customers </a></li>
					
		</ul>
	</div>
	</li>
	<li><a href="rd.php"><i class="fa fa-flag" aria-hidden="true"></i>Report</a></li>
	<li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i>Tools</a>
		<div class="sub-menu-l">
		<ul>
			<li><a href="empt.php">Send Money</a></li>
			<li><a href="ems.php">Deposit</a></li>
			<li><a href="#">Request Money</a></li>
			<li><a href="empw.php">withdraw Money</a></li>
			



		</ul>

		

	</div>
	</li>
	<li><a href="#"><i class="fa fa-handshake-o" aria-hidden="true"></i>Help</a></li>
	<li><a href="#"><i class="fa fa-adjust" aria-hidden="true"></i>More</a>
		<div class="sub-menu-l">
		<ul>
			
			
			<li><a href="#">Currency Converter</a></li>
			<li><a href="web.html">ipay website</a></li>		
		</ul>
	</div>

	</li>


	<li><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i></a>
	<div class="sub-menu-l">
		<ul>
			<li><a href="Empro.php">Profile</a></li>
			<li><a href="info.php">Account</a></li>

		</ul>

		

	

	</li>
	<li><a href="Emplogin.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>

</ul>

</div>

<br>

<style>
	*{
	padding:0;
	margin:0;
	  box-sizing:border-box;
}
body{
  background color:white;

  font-family:sans-serif;
}
.menu-bar{
	background:rgb(0,100,0);
	text-align:center;
}
.menu-bar ul{
	display:inline-flex;
	list-style: none;
	color:white;
	}
	.menu-bar ul li{
     width: 100px;
     margin:15px;
     padding:15px;
		
	}
	.menu-bar ul a{
		text-decoration: none;
		color:#fff;
	}
	.active,.menu-bar ul li:hover
	{
		background:#2bab0d;
		border-radius:3px;
	}
	.menu-bar .fa{
		
	}
.sub-menu-l
{
	display:none;
}
.menu-bar ul li:hover .sub-menu-l{
	display:block;
	position:absolute;
	background:rgb(0,100,0);
	margin-top:15px;
	margin-left:-15px 

}
.menu-bar ul li:hover .sub-menu-l ul{
	display:block;
	margin:10px;
}
.menu-bar ul li:hover .sub-menu-l ul li{
	width:150px;
	padding:10px;
	border-bottom:1px dotted #fff;
	background:transparent;
	border-radius:0;
	text-align:left;
}
.btn-link
{
	
	height:50px;
 border:5px solid #FFA500;
 border-height:30px;
}

</style>

<br>
<br>
<br>
<br>

<br>
<br>
<br>

<!DOCTYPE html>
<html>
 <head>
  <title>Chat</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br /><br />
  <div class="container">
   <nav class="navbar navbar-inverse">
    <div class="container-fluid">
     <div class="navbar-header">
      <a class="navbar-brand" href="msg.php">View All messeages</a>
      <a class="navbar-brand" href="cont.php">View admin Notice
      
      


    
     <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
       <a href="msg.php" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-envelope" style="font-size:18px;"></span></a>

     
   <script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"deposit.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();

  $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});
</script>
<div class="row">
  <div class="col-sm-2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Apply for opening a ipay account to admin</h5>
        <p class="card-text">read Statement before apply</p>
        <a href="oj.php" class="btn btn-primary">Apply </a>
      </div>
    </div>
  </div>
  <div class="col-sm-2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Apply for loan  </h5>
        <p class="card-text">Please Read the statement before Applying Loan You can take loan when Admin gives your permission without valid reason please donot take any loan</p>
        <a href="#" class="btn btn-primary">Apply For Loan</a>

      </div>
       

      </div>

    </div>
  </div>
   <div class="col-sm-2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"> Adding a Bank for Transfer Money  </h5>
        <p class="card-text">You can adding a Bank Account  when Admin Apporve your Request </p>
        <a href="empac.php" class="btn btn-primary">Add Bank</a>

 

</div>
</div>

</body>
</html>
