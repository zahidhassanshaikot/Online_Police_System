<?php $__env->startSection('content'); ?>
<section id="clearance-page">
  <div class= "container">
   <div class="alert alert-secondary" role="alert">
      <h3 class= "text-center"> Write Your Clearance</h3>
      <div class= "row">
        <div class= "col">
          <form class="gd-form">
             <label> Id </label>
             <input style= "margin-bottom:5px" class="form-control" type="text" name = "name_of_police_station" placeholder="Id">
             <label> Subject </label>
             <input style= "margin-bottom:5px" class="form-control" type="text" name = "name_of_police_station" placeholder="Subject">
             <label> Date: </label>
             <input style= "margin-bottom:5px" class="form-control" type="date" name = "gd_date">
             <label> Enter Police Station Name </label>
             <input style= "margin-bottom:5px" class="form-control" type="text" name = "name_of_police_station" placeholder="">
             <label> Enter Police Station Address </label>
             <input style= "margin-bottom:5px" style= "margin-top:3px" class="form-control" type="text" name = "address_of_police_station" >
             <label> Designation </label>
             <input style= "margin-bottom:5px" class="form-control" type="text" name = "Designation" placeholder="Mr./Mrs./Ms./MD.">
             <label> Enter your name: </label>
             <input style= "margin-bottom:5px" class="form-control" type="text" name = "name_of_applicant" >
             <label> Enter your father's name: </label>
             <input style= "margin-bottom:5px" class="form-control" type="text" name = "name_of_applicant" >

             <label> Enter village: </label>
             <input style= "margin-bottom:5px" class="form-control" type="text" name = "village" >
             <label> Enter P.O: </label>
             <input style= "margin-bottom:5px" class="form-control" type="text" name = "post_office" >
             <label> Enter thana: </label>
             <input style= "margin-bottom:5px" class="form-control" type="text" name = "thana" >
             <label> Enter district: </label>
             <input style= "margin-bottom:5px" class="form-control" type="text" name = "district" >
             <label> Enter The Description: </label>
             <textarea name="" id="" cols="30" rows="10" placeholder="Describe Why you need the clearance"></textarea>
            
             <label> Enter address: </label>
             <input style= "margin-bottom:5px" class="form-control" type="text" name = "address" >
             <label> Enter email: </label>
             <input style= "margin-bottom:5px" class="form-control" type="email" name = "thana" >
             <label> Enter cell number: </label>
             <input style= "margin-bottom:8px" class="form-control" type="text" name = "thana" >

             <button class="btn btn-success btn-warning"> Preview Application </button>
             <button class="btn btn-info btn-inline"> Submit Application</button>

          </form>
        </div>

      </div>
   </div> <!---alert -->



  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>