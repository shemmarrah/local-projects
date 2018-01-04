<?php  

include 'contactProcess.php';

 ?>




<form class="form-horizontal" method="POST" action="">

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 " for="First Name:">First Name:</label>  
  <div class="col-md-12">
  <input id="FirstName" name="firstName" type="text" placeholder="First Name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 " for="Last Name">Last Name:</label>  
  <div class="col-md-12">
  <input id="LastName" name="lastName" type="text" placeholder="Last Name" class="form-control input-md" required=""> 
  </div>
</div>


<div class="form-group">
  <label class="col-md-12 " for="Last Name">Email:</label>  
  <div class="col-md-12">
  <input id="email" name="email" type="email" placeholder="example@gmail.com" class="form-control input-md" required=""> 
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 " for="subject">Subject:</label>  
  <div class="col-md-12">
  <input id="subject" name="subject" type="text" placeholder="subject" class="form-control input-md" required=""> 
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-12 " for="inquiry">Inquiry:</label>
  <div class="col-md-12">                     
    <textarea class="form-control" id="inquiry" name="inquiry" placeholder="inquiry"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <div class="col-md-12">
    <button id="Submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>


</form>
