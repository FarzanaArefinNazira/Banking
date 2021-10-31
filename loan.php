<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
</head>
<body>

</body>
</html>

<br />
   <h2 align="center"> Fill all the information very carefullt<br>
 </p></h2>
   <br />
    <hr class="mb-3">
   <form method="post" id="comment_form">
    <div class="form-group">
     <label>Enter Customer_Id</label>
      &nbsp;&nbsp;&nbsp;<input type="text" name="Customer_Id" id="Customer_Id" class="form-control">
      <label for="Type">Loan Type</label><br>
                    
                    <input type="radio" name="Type" value="Car">Car<br>
          <input type="radio" name="Type" value="Home">Home<br>
          <div class="form-group">
     <label>Enter The reason for taking loan</label>
     <textarea name="Description" id="Description" class="form-control" rows="5"></textarea>
    </div>
          <label for="Amount"><b>The Loan Amount </b></label>
          <input class="form-control" type="text" name="Amount" required >

    </div>

    
    <div class="form-group">
     <input type="submit" name="post" id="post" class="btn btn-info" value="submit" />
    </div>
   </form>
   
  </div>
 <script>
$(document).ready(function(){
 
 function load_unseen_notificationn(view = '')
 {
  $.ajax({
   url:"f.php",
   
   method:"post",
   data:{view:view},
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
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  if($('#Customer_Id').val() != '' && $('#Type').val() != '' && $('#Description').val() != '' && $('#Amount').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"inl.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#comment_form')[0].reset();
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


</script>
