<?php $__env->startSection('content'); ?>

<section id="news">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <article class="news">
            <div class="feature-image">
              <img src="<?php echo e(asset('back-end')); ?>/image/news1.jpg" alt="">
            </div>
            <div class="news-details">
              <h4 class="news-title"><a href="#">I do politics for upholding people’s interest: GM Quader</a></h4>
              <div class="news-meta">
                <p>4 Hour Ago</p>
              </div>
              <div class="description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, velit, minima! Aut voluptatum sit odit vitae quibusdam temporibus delectus magni, eum. Voluptas explicabo ut, repellat illo corrupti similique porro veniam quasi officiis. Ducimus porro minima inventore alias blanditiis suscipit explicabo illo exercitationem. Corrupti consequatur provident sed, rerum sapiente, aspernatur at......</p>
              </div>
              <div class="read-more-button">
                <a href="<?php echo e(route('news-details')); ?>" class="read-btn">Read More</a>
              </div>
            </div>
          </article>
          <article class="news">
            <div class="feature-image">
              <img src="<?php echo e(asset('back-end')); ?>/image/news2.jpg" alt="">
            </div>
            <div class="news-details">
              <h4 class="news-title"><a href="#">Union Digital Centre: Prioritising government’s one-stop rural shop</a></h4>
              <div class="news-meta">
                <p>5 Hour Ago</p>
              </div>
              <div class="description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, velit, minima! Aut voluptatum sit odit vitae quibusdam temporibus delectus magni, eum. Voluptas explicabo ut, repellat illo corrupti similique porro veniam quasi officiis. Ducimus porro minima inventore alias blanditiis suscipit explicabo illo exercitationem. Corrupti consequatur provident sed, rerum sapiente, aspernatur at......</p>
              </div>
              <div class="read-more-button">
                <a href="#" class="read-btn">Read More</a>
              </div>
            </div>
          </article>
          <article class="news">
            <div class="feature-image">
              <img src="<?php echo e(asset('back-end')); ?>/image/news3.jpg" alt="">
            </div>
            <div class="news-details">
              <h4 class="news-title"><a href="#">50 percent less chance of encountering a demand for bribe</a></h4>
              <div class="news-meta">
                <p>6 Hour Ago</p>
              </div>
              <div class="description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, velit, minima! Aut voluptatum sit odit vitae quibusdam temporibus delectus magni, eum. Voluptas explicabo ut, repellat illo corrupti similique porro veniam quasi officiis. Ducimus porro minima inventore alias blanditiis suscipit explicabo illo exercitationem. Corrupti consequatur provident sed, rerum sapiente, aspernatur at......</p>
              </div>
              <div class="read-more-button">
                <a href="#" class="read-btn">Read More</a>
              </div>
            </div>
          </article>
          <article class="news">
            <div class="feature-image">
              <img src="<?php echo e(asset('back-end')); ?>/image/news4.jpg" alt="">
            </div>
            <div class="news-details">
              <h4 class="news-title"><a href="#">A Transparency International Bangladesh (TIB) research report</a></h4>
              <div class="news-meta">
                <p>1 Day Ago</p>
              </div>
              <div class="description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, velit, minima! Aut voluptatum sit odit vitae quibusdam temporibus delectus magni, eum. Voluptas explicabo ut, repellat illo corrupti similique porro veniam quasi officiis. Ducimus porro minima inventore alias blanditiis suscipit explicabo illo exercitationem. Corrupti consequatur provident sed, rerum sapiente, aspernatur at......</p>
              </div>
              <div class="read-more-button">
                <a href="#" class="read-btn">Read More</a>
              </div>
            </div>
          </article>
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