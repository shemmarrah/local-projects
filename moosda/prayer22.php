<form class="form-horizontal" method="POST" action="prayer_process.php">


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 " for="First Name:">First Name:</label>  
  <div class="col-md-12">
  <input id="FirstName" name="FirstName" type="text" placeholder="First Name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 " for="Last Name">Last Name:</label>  
  <div class="col-md-12">
  <input id="LastName" name="LastName" type="text" placeholder="Last Name" class="form-control input-md" required=""> 
  </div>
</div>


<div class="form-group">
  <label class="col-md-12 " for="Last Name">Email:</label>  
  <div class="col-md-12">
  <input id="email" name="email" type="email" placeholder="example@gmail.com" class="form-control input-md" required=""> 
  </div>
</div>


<!-- Textarea -->
<div class="form-group">
  <label class="col-md-12 " for="PrayerRequest">Prayer Request</label>
  <div class="col-md-12">                     
    <textarea class="form-control" id="PrayerRequest" name="PrayerRequest" placeholder="Prayer Request"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <div class="col-md-12">
    <button id="Submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>


</form>
