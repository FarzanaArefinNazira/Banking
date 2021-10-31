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
	<li class="active"><a href="#"><i class="fa fa-home"></i>Summary</a></li>
	<li><a href="r.php"><i class="fa fa-money"></i>Balance</a></li>
	<li><a href="#"><i class="fa fa-user-circle-o"></i>Activity</a>
		<div class="sub-menu-l">
		<ul>
			<li><a href="Transa.php">Transaction History</a></li>
			<li><a href=".php">Withdraw History</a></li>		
		</ul>
	</div>
	</li>
	<li><a href="rd.php"><i class="fa fa-flag" aria-hidden="true"></i>Report</a></li>
	<li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i>Tools</a>
		<div class="sub-menu-l">
		<ul>
			<li><a href="Transfer.php">Send Money</a></li>
			<li><a href="recive.php">Deposit</a></li>
			<li><a href="#">Request Money</a></li>
			<li><a href="withdraw.php">withdraw Money</a></li>
			<li><a href="w.php">Show Bussiness profile</a></li>
			<li><a href="#">Bill Payment</a></li>
			<li><a href="">Apply for a Credit Card</a></li>



		</ul>

		

	</div>
	</li>
	<li><a href="help.php"><i class="fa fa-handshake-o" aria-hidden="true"></i>Help</a></li>
	<li><a href="#"><i class="fa fa-adjust" aria-hidden="true"></i>More</a>
		<div class="sub-menu-l">
		<ul>
			<li><a href="addcs.php">Customer</a></li>
			<li><a href="b.php">set up a Business Profile</a></li>
			
			<li><a href="helpn.php">Recive Employee Reply</a></li>
			<li><a href="web.html">ipay website</a></li>		
		</ul>
	</div>
     
	</li>

	<li><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i></a>
	<div class="sub-menu-l">
		<ul>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="acc.php">Account</a></li>
		</ul>

		

	</div>

	</li>
	<li><a href="Loginn.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>

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
     width: 120px;
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
<div class="row">
  <div class="col-sm-2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Link a Bank Account</h5>
        <p class="card-text">Please Read the statement properly before linking a bank account</p>
        <a href="register.php" class="btn btn-primary">Bank Account</a>
      </div>
    </div>
  </div>
  <div class="col-sm-2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Link a  credit  card</h5>
        <p class="card-text">Please Read the statement properly before linking a Credit Card</p>
        <a href="credit.php" class="btn btn-primary">Credit Card</a>

      </div>


    </div>
  </div>
  <div>
  <a href="upb.php" class="btn btn-link"><b>Upload a Bank Statement<b></b></b></a>

  	 &nbsp;&nbsp;&nbsp;<a href="do.php" button type="button"  ><b>Read our bank statement<b></button>
  	 	&nbsp;&nbsp;&nbsp;<a href="helpan.php" button type="button"  ><b>Help question Answer<b></button>
  	 	
</div>

&nbsp;&nbsp;&nbsp;
  <div class="col-sm-2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Apply for loan  </h5>
        <p class="card-text">Please Read the statement before Applying Loan You can take loan when Admin gives your permission without valid reason please donot take any loan</p>
        <a href="loan.php" class="btn btn-primary">Apply For Loan</a>
      
      </div>
       
  
</div>
</div>

</body>
</html>