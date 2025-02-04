<?php $__env->startSection('auth'); ?>
<span class="display-zero"><?php echo e($Locale = LaravelLocalization::getCurrentLocale()); ?></span>
<div class="login-wrapper">
  <!-- START Login Background Pic Wrapper-->
  <div class="bg-pic">
    <!-- START Background Pic-->
    <img src="<?php echo e(asset(option('settings'))); ?>" data-src="<?php echo e(asset(option('settings'))); ?>" class="lazy">
    <!-- END Background Pic-->
    <!-- START Background Caption-->
    <!-- START Background Caption-->
    <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
      <h2 class="semi-bold text-white"><?php echo e(option('SiteTitle')); ?></h2>
      <p class="small">
       <?php if($Locale == 'fr'): ?>
       <?php echo e(option('Home_fr')); ?>

       <?php else: ?>
       <?php echo e(option('Home_en')); ?>

       <?php endif; ?>
     </p>
   </div>
   <!-- END Background Caption-->
 </div>
 <!-- END Login Background Pic Wrapper-->
 <!-- START Login Right Container-->
 <div class="login-container bg-white">
  <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
    <img src="<?php echo e(asset(option('logo'))); ?>" alt="logo" data-src="<?php echo e(asset(option('logo'))); ?>" data-src-retina="<?php echo e(asset(option('logo'))); ?>">
    <p class="p-t-35"><?php echo e(__('main.Sign_Up')); ?></p>
    <!-- START Login Form -->
    <form method="POST" class="p-t-15" role="form" action="<?php echo e(route('register')); ?>">
      <?php echo csrf_field(); ?>
      <!-- START Form Control-->
      <div class="form-group form-group-default">
        <label><?php echo e(__('main.Name')); ?></label>
        <div class="controls">
          <input placeholder="<?php echo e(__('main.Name')); ?>" id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>
          <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <span class="invalid-feedback" role="alert">
            <strong><?php echo e($message); ?></strong>
          </span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
      </div>
      <div class="form-group form-group-default">
        <label><?php echo e(__('main.E-Mail_Address')); ?></label>
        <div class="controls">
          <input placeholder="<?php echo e(__('main.E-Mail_Address')); ?>" id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">
          <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <span class="invalid-feedback" role="alert">
            <strong><?php echo e($message); ?></strong>
          </span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
      </div>
      <!-- END Form Control-->
      <!-- START Form Control-->
      <div class="form-group form-group-default">
        <label><?php echo e(__('main.Password')); ?></label>
        <div class="controls">
          <input placeholder="<?php echo e(__('main.Password')); ?>" id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">
          <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <span class="invalid-feedback" role="alert">
            <strong><?php echo e($message); ?></strong>
          </span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
      </div>
      <div class="form-group form-group-default">
        <label><?php echo e(__('main.Confirm_Password')); ?></label>
        <div class="controls">
          <input placeholder="<?php echo e(__('main.Confirm_Password')); ?>" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
      </div>
      <!-- END Form Control-->
      <button class="btn btn-primary btn-cons m-t-10" type="submit"><?php echo e(__('main.Sign_Up')); ?></button>
    </form>
  </div>
</div>
<!-- END Login Right Container-->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Dashboard.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\syxtema-sbc\resources\views/auth/register.blade.php ENDPATH**/ ?>