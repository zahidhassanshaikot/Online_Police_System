<?php $__env->startSection('content'); ?>

<section id="news">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <?php $__currentLoopData = $obj_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <article class="news">
            <div class="feature-image">
              <img src="<?php echo e(asset($news->image)); ?>" alt="image">
            </div>
            <div class="news-details">
              <h4 class="news-title"><a href="#"><?php echo e($news->news_title); ?></a></h4>
              <div class="news-meta">
                <p><?php echo e(Carbon\Carbon::parse($news->created_at)->diffForHumans()); ?></p>
              </div>
              <div class="description">
                <p><?php echo e($news->short_description); ?></p>
              </div>
              <div class="read-more-button">
                <a href="<?php echo e(route('news-details',['id'=>$news->id])); ?>" class="read-btn">Read More</a>
              </div>
            </div>
          </article>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <div class="news-pagination">
            <ul>
              <li><a href="#"><i class="fas fa-chevron-left"></i></a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="fas fa-chevron-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>