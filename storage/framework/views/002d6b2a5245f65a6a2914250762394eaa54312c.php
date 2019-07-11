<?php $__env->startSection('content'); ?>
<section id="clearance-page">
  <div class= "container">
   <div class="alert alert-secondary" role="alert">
        <h3 class= "text-center"> Add News</h3>
        <?php if(Session::get('message')): ?>
                <div class="alert alert-success" id="message">
                    <h3 class=" text-center text-success"> <?php echo e(Session::get('message')); ?></h3>
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
            <form method="POST" action="<?php echo e(route('save-news-info')); ?>" class="gd-form" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
    
               <label> News Title: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "news_title" >
               <label> Short Description: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "short_description" >
         
               <label>Long Description: </label>
               <textarea name="long_description" id="" cols="30" rows="10" placeholder="Long description"></textarea>
               <label> Image: </label>
               <input style= "margin-bottom:5px" class="form-control" accept="" type="file" name = "image" >
               
            <input type="submit" name="btn"style= "margin-left:45%" class="btn btn-info btn-inline">

    

            </form>
          </div>

        </div>


   </div> <!---alert -->
  </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>