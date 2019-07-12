<?php $__env->startSection('content'); ?>
<section id="clearance-page">
  <div class= "container">
   <div class="alert alert-secondary" role="alert">
        <h3 class= "text-center"> Write Your GD Application</h3>
        <?php if(Session::get('message')): ?>
                <div class="alert alert-success" id="message">
                    <h4 class=" text-center text-success"> <?php echo e(Session::get('message')); ?></h4>
                </div>
            <?php endif; ?>
            <div class=" card card-default">
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
        <div class= "row">
          <div class= "col">
            <form class="gd-form" method="POST"  action="<?php echo e(route('save-gd-application-info')); ?>">
              <?php echo csrf_field(); ?>
               
              <label> Subject </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "subject" placeholder="Subject">
               <label> Date: </label>
               <input style= "margin-bottom:5px" class="form-control" type="date" name = "gd_date">
               <label> Enter Police Station Name </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "name_of_police_station" placeholder="">
               <label> Enter Police Station Address </label>
               <input style= "margin-bottom:5px" style= "margin-top:3px" class="form-control" type="text" name = "address_of_police_station" >
               <label> Designation </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "designation" placeholder="Mr./Mrs./Ms./MD.">
               <label> Enter your name: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "name_of_applicant" >
               <label> Enter your profession: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "profession" >

               
               <label> Enter your father's name: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "father_name" >

               

               <label> Enter village: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "village" >
               <label> Enter P.O: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "post_office" >
               <label> Enter thana: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "thana" >
               <label> Enter district: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "district" >
               <label> Enter the incident: </label>
               <textarea name="description" id="" cols="30" rows="10" placeholder="Suppose your wallet lost at Bagerhat, enter Bagerhat here"></textarea>
               <label> Enter incident time: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "incident_time" >
               
               <label> Enter address: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "address" >
               <label> Enter email: </label>
               <input style= "margin-bottom:5px" class="form-control" type="email" name = "email_address" >
               <label> Enter cell number: </label>
               <input style= "margin-bottom:8px" class="form-control" type="text" name = "phone_no" >

               <input type="submit" name="btn_preview" class="btn btn-success btn-warning" value="Preview Application">
               <input type="submit" name="btn_submit" class="btn btn-info btn-inline" value="Submit Application">
               
               

            </form>
          </div>

        </div>


   </div> <!---alert -->
  </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>