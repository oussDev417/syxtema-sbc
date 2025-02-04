
<?php $__env->startSection('auth'); ?>
<!-- ===============================  CONTENT ======================================== -->
<body class="fixed-header error-page">
    <div class="d-flex justify-content-center full-height full-width align-items-center">
      <div class="error-container text-center">
        <h1 class="error-number">404</h1>
        <h2 class="semi-bold"><?php echo e(__('main.Sorry')); ?></h2>
        <p class="p-b-10"><?php echo e(__('main.This_exsist')); ?> <a href="<?php echo e(url('')); ?>"><?php echo e(__('main.Home')); ?></a>
        </p>
      </div>
    </div>
    <!-- END OVERLAY -->
  </body>
<!-- ========================== CONTENT : END ============================================== -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Dashboard.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\syxtema-sbc\resources\views/errors/404.blade.php ENDPATH**/ ?>