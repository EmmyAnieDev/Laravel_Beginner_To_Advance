<?php $__env->startSection('contents'); ?>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Album example</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p>
          <?php if(false): ?>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          <?php endif; ?>
        </p>
      </div>
    </div>
  </section>

  <?php echo $__env->make('gallery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
  <script>
    $(document).ready(function() {
      alert('This script is for Dashboard page!')
    })
  </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/victormarius/Documents/laravel/learn-laravel/resources/views/welcome.blade.php ENDPATH**/ ?>