<?php $__env->startSection('content'); ?>

<section id="clearance">
  <div class= "container">
    <div class="print-button">
      <a href="javascript:window.print()" class="print-btn">Print Application</a>
    </div>
    <div class="alert alert-secondary" role="alert">
      <h3 class= "text-center"> Preview Your Clearance application</h3>

      <p > <span class="font-weight-bold"> Date: </span> <?php echo e(Carbon\Carbon::parse($data->created_at)->toFormattedDateString()); ?> </p>
      <p> <span > To, </span> <br>
       <span style="margin-top:10px"> Officer in Charge </span> <br>
       <span style="margin-top:10px"> <span > <?php echo e($data->name_of_police_station); ?> </span> <br>
       <span > <?php echo e($data->address_of_police_station); ?>  </span> </p>
      <p> <span class="font-weight-bold"> Subject:  </span> <?php echo e($data->subject); ?> </p>
      <p> Dear Sir, </p>
     I, <?php echo e($data->designation); ?> <?php echo e($data->name_of_applicant); ?> son of <?php echo e($data->father_name); ?>Village: <?php echo e($data->village); ?>, P.O: <?php echo e($data->post_office); ?>, Thana: <?php echo e($data->thana); ?>, District: <?php echo e($data->district); ?>, is a <?php echo e($data->profession); ?> by profession. That today, on Mohakhali, at around <?php echo e($data->incident_time); ?>. <br><br>

        In the circumstances, <?php echo e($data->description); ?>. <br> <br>
      <p> Yours truly,
        <?php echo e($data->designation); ?> <?php echo e($data->name_of_applicant); ?><br>
        <span class="font-weight-bold"> Corresponding Address:</span> <?php echo e($data->address); ?>.<br>
        <span class="font-weight-bold"> Email: </span>  <?php echo e($data->email_address); ?><br>
        <span class="font-weight-bold"> Cell No. </span> <?php echo e($data->phone_no); ?> </p>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>