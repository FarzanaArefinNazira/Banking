<?php



session_start();

if(isset($_SESSION["user_id"]))
{
  header("location:home.php");
}

//include('function.php');

$connect = new PDO("mysql:host=localhost; dbname=", "root", "");



$message = '';
$error_First_Name = '';
$error_Last_Name = '';
$error_Street = '';
$error_City = '';
$error_State = '';
$error_Mobile_No = '';
$error_Date = '';
$error_Email = '';

$error_National_ID = '';
$error_Password = '';


$First_Name = '';
$Last_Name = '';
$Street = '';
$City = '';
$State = '';
$Mobile_No = '';
$Date = '';
$Email = '';

$National_ID = '';
$Password = '';

if(isset($_POST["register"]))
{
 if(empty($_POST["First_Name"]))
 {
  $error_user_name = "<label class='text-danger'>Enter First Name</label>";
 }
 else
 {
  $First_Name= trim($_POST["First_Name"]);
  $First_Name = htmlentities($First_Name);
 }
if(empty($_POST["Last_Name"]))
 {
  $error_Last_Name = "<label class='text-danger'>Enter Last Name</label>";
 }
 else
 {
  $Last_Name= trim($_POST["Last_Name"]);
  $Last_Name = htmlentities($Last_Name);
 }

 if(empty($_POST["Street"]))
 {
  $error_Street = "<label class='text-danger'>Enter Street</label>";
 }
 else
 {
  $Street= trim($_POST["Street"]);
  $Street = htmlentities($Street);
 }

 if(empty($_POST["City"]))
 {
  $error_City = "<label class='text-danger'>Enter City</label>";
 }
 else
 {
  $City= trim($_POST["City"]);
  $City = htmlentities($City);
 }

 if(empty($_POST["State"]))
 {
  $error_State = "<label class='text-danger'>Enter State</label>";
 }
 else
 {
  $State= trim($_POST["State"]);
  $State = htmlentities($State);
 }
 if(empty($_POST["Mobile_No"]))
 {
  $error_Mobile_No = "<label class='text-danger'>Enter Mobile_No</label>";
 }
 else
 {
  $Mobile_No= trim($_POST["Mobile_No"]);
  $Mobile_No = htmlentities($Mobile_No);
 }

 if(empty($_POST["Date"]))
 {
  $error_Date = "<label class='text-danger'>Enter Date </label>";
 }
 else
 {
  $Date= trim($_POST["Date"]);
  $Date = htmlentities($Date);
 }
 if(empty($_POST["Email"]))
 {
  $error_Email = '<label class="text-danger">Enter Email Address</label>';
 }
 else
 {
  $Email = trim($_POST["Email"]);
  if(!filter_var($Email, FILTER_VALIDATE_EMAIL))
  {
   $error_Email = '<label class="text-danger">Enter Valid Email Address</label>';
  }
 }
 if(empty($_POST["National_ID"]))
 {
  $error_National_ID = "<label class='text-danger'>Enter National_ID</label>";
 }
 else
 {
  $National_ID= trim($_POST["National_ID"]);
  $National_ID= htmlentities($National_ID);
 }

 if(empty($_POST["Password"]))
 {
  $error_Password= '<label class="text-danger">Enter Password</label>';
 }
 else
 {
  $Password = trim($_POST["Password"]);
  $Password = password_hash($Password, PASSWORD_DEFAULT);
 }

 if($error_First_Name == '' && $error_Last_Name == '' &&$error_Street == '' &&$error_City == '' &&$error_State== '' &&$error_Mobile_No== '' &&$error_Date == '' &&$error_Email == '' &&$error_National_ID == '' && $error_Password == '')
 {
  $user_activation_code = md5(rand());

  $user_otp = rand(100000, 999999);

  $data = array(
   ':First_Name'  => $First_Name,
   ':Last_Name'  => $Last_Name,
   ':Street'  => $Street,
   ':City'  => $City,
   ':State'  => $State,
   ':Mobile_No'  => $Mobile_No,
   ':Date'  => $Date,
   ':Email'  => $Email,
   ':National_ID'  => $National_ID,
   ':Password'  => $Password,
   ':user_activation_code' => $user_activation_code,
   ':user_email_status'=> 'not verified',
   ':user_otp'   => $user_otp
  );

  $query = "INSERT INTO employee_details (First_Name  , Last_Name,  Street, City, State,  Mobile_No, Date,Email,  National_ID,  Password,user_activation_code, user_email_status, user_otp)
  
  SELECT * FROM (SELECT :First_Name  ,:Last_Name,  :Street, :City, :State,  :Mobile_No, :Date,:Email,  :National_ID,  :Password, :user_activation_code, :user_email_status, :user_otp) AS tmp
  WHERE NOT EXISTS (
      SELECT Email FROM employee_details WHERE Email = :Email
  ) LIMIT 1
  ";
    

    $statement = $connect->prepare($query);

    $statement->execute($data);

    if($connect->lastInsertId() == 0)
    {
      $message = '<label class="text-danger">Email Already Register</label>';
    } 
    else
    {
     // $user_avatar = make_avatar(strtoupper($First_name[0]));

      //$query = "
      //UPDATE customer_detalis
      //SET user_avatar = '".$user_avatar."' 
      //WHERE Customer_Id = '".$connect->lastInsertId()."'
      //";

      $statement = $connect->prepare($query);

      $statement->execute();


    
     
   require_once 'PHPMailerAutoload.php';
      require_once'class.phpmailer.php';
      
      require_once  'credential.php';
      $mail = new PHPMailer;
      $mail->SMTPDebug = 3; 
      $mail->IsSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->Port = 587;
      $mail->SMTPAuth = true;
      $mail->Username = EMAIL;
      $mail->Password = PASS;
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
             
      $mail->outPort= 587;

      $mail->From = 'farzanaarefin862@gmail.com';
      $mail->Password = '1110483866145570';
      $mail->FromName = 'ipay';
      $mail->AddAddress($Email);
      $mail->WordWrap = 50;
      $mail->IsHTML(true);
      $mail->Subject = 'Verification code for Verify Your Email Address';

      $message_body = '
      <p>For verify your email address, enter this verification code when prompted: <b>'.$user_otp.'</b>.</p>
      <p>Sincerely,</p>
      ';
      $mail->Body = $message_body;

      if($mail->Send())
      {
        echo '<script>alert("Please Check Your Email for Verification Code")</script>';

        header('location:empemail.php?code='.$user_activation_code);
      }
      else
      {
        $message = $mail->ErrorInfo;
      }
    }

  }
}

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Regestration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="http://code.jquery.com/jquery.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
 </head>
 <body>
  <br />
  <div class="container">
   <h3 align="center"> Registration </h3>
   <br />
   <div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title">Registration</h3>
    </div>
    <div class="panel-body">
     <?php echo $message; ?>
     <form method="post">
      <div class="form-group">
       <label>Enter First_Name</label>
       <input type="text" name="First_Name" class="form-control" />
       <?php echo $error_First_Name; ?>
      </div>
      <div class="form-group">
         <label>Enter Last_Name</label>
       <input type="text" name="Last_Name" class="form-control" />
       <?php echo $error_Last_Name; ?>
      </div>
      <div class="form-group">
         <label>Enter Street</label>
       <input type="text" name="Street" class="form-control" />
       <?php echo $error_Street; ?>
      </div>
      <div class="form-group">
         <label>Enter City</label>
       <input type="text" name="City" class="form-control" />
       <?php echo $error_City; ?>
      </div>
      <div class="form-group">
         <label>Enter State</label>
       <input type="text" name="State" class="form-control" />
       <?php echo $error_State; ?>
      </div>
      <div class="form-group">
         <label>Enter Mobile_No</label>
       <input type="text" name="Mobile_No" class="form-control" />
       <?php echo $error_Mobile_No; ?>
      </div>
      <div class="form-group">
         <label>Enter Date</label>
       <input type="text" name="Date" class="form-control" />
       <?php echo $error_Date; ?>
      </div>
      <div class="form-group">
       <label>Enter Your Email</label>
       <input type="text" name="Email" class="form-control" />
       <?php echo $error_Email; ?>

      </div>
      <div class="form-group">
       <label>Enter National_ID</label>
       <input type="text" name="National_ID" class="form-control" />
       <?php echo $error_National_ID; ?>
      </div>
      <div class="form-group">
      
       <label>Enter Your Password</label>
       <input type="Password" name="Password" class="form-control" />
       <?php echo $error_Password; ?>
       </div>
    
            <div class="form-group">
              <input type="submit" name="register" class="btn btn-success" value="Click to Register" />&nbsp;&nbsp;&nbsp;
              <a href="login.php">Login</a>
               <a href="resend_email_otp.php">Resend OTP</a>

            </div>
          </form>
        </div>
      </div>
    </div>
    <br />
    <br />
  </body>
</html>