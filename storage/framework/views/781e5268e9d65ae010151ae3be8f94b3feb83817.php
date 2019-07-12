<?php $__env->startSection('content'); ?>
  <section id="gd-list">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="list">
            <h2>View All GD</h2>
          </div>
          <table class="table table-striped all-gd">
            <thead>
              <tr>
                <th scope="col">GD ID</th>
                <th scope="col">GD Subject</th>
                <th scope="col">Victims Name</th>
                <th scope="col">Victims Phone Number</th>
                <th scope="col">Police Station Name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $obj_applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <th scope="row"><?php echo e($application->id); ?></th>
                <td><?php echo e($application->subject); ?></td>
                <td><?php echo e($application->name_of_applicant); ?></td>
                <td><?php echo e($application->phone_no); ?></td>
                <td><?php echo e($application->name_of_police_station); ?></td>
                <td><a href="<?php echo e(route('GD_application_preview',['id'=>$application->id])); ?>">View Details</a></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
          <div class="pagination-pt">
            <?php echo e($obj_applications->links()); ?>

            
          </div>
        </div> 
      </div>
    </div>
  </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>