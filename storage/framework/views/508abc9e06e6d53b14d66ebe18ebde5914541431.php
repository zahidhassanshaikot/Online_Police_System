<?php $__env->startSection('content'); ?>

<section class="login-page">
    
  <div class= "container">
   <div class="alert alert-secondary" role="alert">
        <h3 class= "text-center"> Registration </h3>

        <div class= "row">

          <div class= "col">
            <form class="Registration-form">
               
               
               <label> Gender </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "designation" placeholder="Mr./Mrs./Ms./MD.">
               <label> Enter your name: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "name" >
                <label> Enter email: </label>
               <input style= "margin-bottom:5px" class="form-control" type="email" name = "email" >
               <label> Enter your fathers name: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "father_name" >

               

               <label> Enter village: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "village" >
               <label> Enter P.O: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "post_office" >
               <label> Enter thana: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "thana" >
               <label> Enter district: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "district" >
                                

               <label> Enter cell number: </label>
               <input style= "margin-bottom:8px" class="form-control" type="text" name = "phone_no" >
           
               <input type="submit" name="btn" class="btn btn-info btn-inline">
               
               <p>If you have an account.Please <a href="<?php echo e(route('user-login')); ?>">Sign In</a> Here</p>

            </form>
          </div>

        </div>


   </div> <!---alert -->
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>