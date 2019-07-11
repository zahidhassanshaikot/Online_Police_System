<?php $__env->startSection('content'); ?>
<section class="login-page"> 
  <div class= "container">
   <div class="alert alert-secondary" role="alert">
        <h3 class= "text-center"> Online Police Service </h3>

        <div class= "row">

          <div class= "col">
            <form class="Login-form">
               
               
               
               <label> Email Address</label>
               <input style= "margin-bottom:5px" class="form-control" type="text" placeholder="Enter Your Email Address" name = "User_name_of_applicant">

               <label> Password </label>
               <input style= "margin-bottom:5px" class="form-control" type="password" placeholder="Enter Password" id="pass"name="pass" required >
               
           
               <button class="btn btn-info btn-inline">Login</button>
               <p>If you don't have account.Please <a href="<?php echo e(route('user-ragistration')); ?>">Sign Up</a></p>

            </form>
          </div>

        </div>


   </div> <!---alert -->
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>