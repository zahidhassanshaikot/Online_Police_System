<?php $__env->startSection('content'); ?>
  <section id="gd-list">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="list">
            <h2>View All Clearance</h2>
          </div>
          <table class="table table-striped all-gd">
            <thead>
              <tr>
                <th scope="col">Clearance ID</th>
                <th scope="col">Clearance Subject</th>
                <th scope="col">Victims Name</th>
                <th scope="col">Victims Phone Number</th>
                <th scope="col">Police Station Name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">17345</th>
                <td>Lost Bike</td>
                <td>Nahid Hasan</td>
                <td>0123445</td>
                <td>Kolabagan Thana</td>
                <td><a href="<?php echo e(route('clearance_preview')); ?>">View Details</a></td>
              </tr>
              <tr>
                <th scope="row">14235</th>
                <td>Lost Car</td>
                <td>Murad Ahmed</td>
                <td>0123445</td>
                <td>Sher E Bangla Thana</td>
                <td><a href="GD_application_preview.html">View Details</a></td>
              </tr>
              <tr>
                <th scope="row">15346</th>
                <td>Lost Car</td>
                <td>Sajib Ahmed</td>
                <td>0123445</td>
                <td>Sher E Bangla Thana</td>
                <td><a href="GD_application_preview.html">View Details</a></td>
              </tr>
              <tr>
                <th scope="row">17345</th>
                <td>Lost Bike</td>
                <td>Nahid Hasan</td>
                <td>0123445</td>
                <td>Kolabagan Thana</td>
                <td><a href="GD_application_preview.html">View Details</a></td>
              </tr>
              <tr>
                <th scope="row">14235</th>
                <td>Lost Car</td>
                <td>Murad Ahmed</td>
                <td>0123445</td>
                <td>Sher E Bangla Thana</td>
                <td><a href="GD_application_preview.html">View Details</a></td>
              </tr>
              <tr>
                <th scope="row">15346</th>
                <td>Lost Car</td>
                <td>Sajib Ahmed</td>
                <td>0123445</td>
                <td>Sher E Bangla Thana</td>
                <td><a href="GD_application_preview.html">View Details</a></td>
              </tr>
            </tbody>
          </table>
          <div class="pagination-pt">
            <ul>
              <li><a href="#">prev</a></li>
              <li><a href="#">01</a></li>
              <li><a href="#">02</a></li>
              <li><a href="#">03</a></li>
              <li><a href="#">04</a></li>
              <li><a href="#">next</a></li>
            </ul>
          </div>
        </div> 
      </div>
    </div>
  </section>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>