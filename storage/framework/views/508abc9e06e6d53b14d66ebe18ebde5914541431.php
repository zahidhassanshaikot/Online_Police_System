<?php $__env->startSection('content'); ?>

<section class="login-page">
    
  <div class= "container">
   <div class="alert alert-secondary" role="alert">
        <h3 class= "text-center"> Registration </h3>
                  
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
            <form class="Registration-form" action="<?php echo e(route('save-user-info')); ?>" method="POST">
               <?php echo csrf_field(); ?>
               
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
           

               <label> Password: </label>
               <input style= "margin-bottom:8px" class="form-control" type="password" name = "password" >
           

               <label> Confirm Password: </label>
               <input style= "margin-bottom:8px" class="form-control" type="password" name = "password_confirmation" >
           
               <input type="submit" name="btn" class="btn btn-info btn-inline" value="Sign In">
               
               <p>If you have an account.Please <a href="<?php echo e(route('user-login')); ?>">Sign In</a> Here</p>

            </form>
          </div>

        </div>


   </div> <!---alert -->
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>