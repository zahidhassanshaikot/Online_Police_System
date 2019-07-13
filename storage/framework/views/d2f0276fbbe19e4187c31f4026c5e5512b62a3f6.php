<?php $__env->startSection('content'); ?>

<section id="single-news">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <article class="news">
            <div class="feature-image">
              <img src="<?php echo e(asset($obj_news->image)); ?>" alt="image">
            </div>
            <div class="news-details">
              <h4 class="news-title"><?php echo e($obj_news->news_title); ?></h4>
              <div class="news-meta">
                <p><?php echo e(Carbon\Carbon::parse($obj_news->created_at)->diffForHumans()); ?></p>
              </div>
              <div class="description">
                <p><?php echo e($obj_news->long_description); ?></p>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>