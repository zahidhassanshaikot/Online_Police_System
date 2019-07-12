<?php $__env->startSection('content'); ?>
<section id="add-vehicle">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <form class="add-vehicle-form">
            <h3 class="form-title">Add Vehicle</h3>

              <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="inputEmail4">car number</label>
                      <input type="email" class="form-control" id="inputEmail4" >
                  </div>
                  <div class="form-group col-md-6">
                      <label for="inputPassword4">car type</label>
                      <input type="password" class="form-control" id="inputPassword4" >
                  </div>
              </div>

              <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="inputCity">owner name</label>
                      <input type="text" class="form-control" id="inputCity">
                  </div>

                  <div class="form-group col-md-6">
                      <label for="inputCity">owner address</label>
                      <input type="text" class="form-control" id="inputCity">
                  </div>
              </div>

              <div class="form-row">

                  <div class="form-group col-md-6">
                      <label for="inputCity">owner contact</label>
                      <input type="text" class="form-control" id="inputCity">
                  </div>

                  <div class="form-group col-md-6">
                      <label for="inputCity">registration date</label>
                      <input type="text" class="form-control" id="inputCity">
                  </div>

              </div>
              <div class="form-row">

                  <div class="form-group col-md-6">
                      <label for="inputCity">seller address</label>
                      <input type="text" class="form-control" id="inputCity">
                  </div>

                  <div class="form-group col-md-6">
                      <label for="inputCity">insurance</label>
                      <input type="text" class="form-control" id="inputCity">
                  </div>
  
              </div>
              <div class="form-row">

                  <div class="form-group col-md-6">
                      <label for="inputCity">insurance expire date</label>
                      <input type="text" class="form-control" id="inputCity">
                  </div>


              </div>


              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>