<?php $__env->startSection('content'); ?>
<section class="login-page"> 
  <div class= "container">
   <div class="alert alert-secondary" role="alert">
        <h3 class= "text-center"> Online Police Service </h3>

        <div class= "row">

          <div class= "col">
            <form class="Login-form" action="<?php echo e(route('login')); ?>" method="POST">
               <?php echo csrf_field(); ?>
               
               
               <label> Email Address</label>
               <input style= "margin-bottom:5px" class="form-control" type="text" placeholder="Enter Your Email Address" name = "email">

               <label> Password </label>
               <input style= "margin-bottom:5px" class="form-control" type="password" placeholder="Enter Password" id="pass"name="password" required >
               
           
               <input type="submit" class="btn btn-info btn-inline" value="Login" name="btn"
               
               <p>If you don't have account.Please <a href="<?php echo e(route('user-ragistration')); ?>">Sign Up</a></p>

            </form>
          </div>

        </div>


   </div> <!---alert -->
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>