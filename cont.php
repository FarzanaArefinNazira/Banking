<!DOCTYPE html>
<html>
 <head>
  <title>Report</title>
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
      <a class="navbar-brand" href="add.php"></a>
    
          <a class="navbar-brand" href="pl.php">view admin message</a>
      


     </div>
     <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-envelope" style="font-size:18px;"></span></a>

       
    </div>
   </nav>
   <script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"ft.php",
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

 


 <script>
$(document).ready(function(){
 
 function load_unseen_notificationn(views = '')
 {
  $.ajax({
   url:"ft.php",
   
   method:"POST",
   data:{views:views},
   dataType:"json",
   success:function(data)
   {
    $('.menu').html(data.unseen_notificationn);
    if(data.unseen_notificationn > 0)
    {
     $('.count').html(data.unseen_notificationn);
    }
   }
  });
 }
 
 load_unseen_notificationn();
 
 $('#loan_form').on('success', function(event){
  event.preventDefault();
  if($('#Customer_Id').val() != '' && $('#Type').val() != '' && $('#Description').val() != '' && $('#Amount').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"jk.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#loan_form')[0].reset();
     load_unseen_notificationn();
    }
   });
  }
  else
  {
   alert("Both Fields are Required");
  }
 });
 
 $(document).on('click', '.toggle', function(){
  $('.count').html('');
  load_unseen_notificationn('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notificationn();; 
 }, 5000);
 
});
</script>
 </body>
</html>
