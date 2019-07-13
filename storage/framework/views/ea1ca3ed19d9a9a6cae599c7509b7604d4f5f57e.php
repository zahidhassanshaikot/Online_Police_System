<?php $__env->startSection('content'); ?>
  <section id="gd-list">
    <div class="container">
         <?php if(Session::get('message')): ?>
                <div class="alert alert-success" id="message">
                    <h4 class=" text-center text-success"> <?php echo e(Session::get('message')); ?></h4>
                </div>
            <?php endif; ?>
      <div class="row">
        <div class="col-md-12">
          <div class="list">
            <h2>View All GD</h2>
          </div>
          <table class="table table-striped all-gd">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Short Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $obj_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <th scope="row"><?php echo e($news->id); ?></th>
                <td><?php echo e($news->news_title); ?></td>
                <td><img src="<?php echo e(asset($news->image)); ?>" style="height:50px;width:50px" alt="image"></td>
                <td><?php echo e($news->short_description); ?></td>
                <td>
                    <a href="<?php echo e(route('news-details',['id'=>$news->id])); ?>">View Details</a> |
                    <a href="<?php echo e(route('news-delete',['id'=>$news->id])); ?>">Delete</a> |
                    <a href="<?php echo e(route('news-edit',['id'=>$news->id])); ?>">Edit</a>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
          <div class="pagination-pt">
            <?php echo e($obj_news->links()); ?>

            
          </div>
        </div> 
      </div>
    </div>
  </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>