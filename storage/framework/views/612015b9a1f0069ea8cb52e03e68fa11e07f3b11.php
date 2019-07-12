<?php $__env->startSection('content'); ?>
  <section id="gd-list">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="list">
            <h2>View Vehicle List</h2>
          </div>
          <table class="table table-striped all-gd">
            <thead>
              <tr>
                <th scope="col">vehicle_no</th>
                <th scope="col">owner_name</th>
                <th scope="col">owner_address</th>
                <th scope="col">owner_contact</th>
                <th scope="col">nid</th>
                <th scope="col">driving_licence</th>
                
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $obj_vehicle; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($vehicle->vehicle_no); ?></td>
                <td><?php echo e($vehicle->owner_name); ?></td>
                <td><?php echo e($vehicle->owner_address); ?></td>
                <td><?php echo e($vehicle->owner_contact); ?></td>
                <td><?php echo e($vehicle->nid); ?></td>
                <td><?php echo e($vehicle->driving_licence); ?></td>
                
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
          <div class="pagination-pt">
            
            
          </div>
        </div> 
      </div>
    </div>
  </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>