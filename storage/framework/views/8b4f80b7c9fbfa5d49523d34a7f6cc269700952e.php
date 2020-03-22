<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <title><?php echo e(config('app.name', 'Aladdin || Log In')); ?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php echo $__env->make('admin.partials.link_login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">

<form class="text-center border border-light p-5" action="#" method="post">
  <?php echo csrf_field(); ?>

    <p class="h4 mb-4">Sign in</p>

    <!-- Email -->
    <input type="email" id="email" name="email" class="form-control mb-4 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="E-mail">

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
    <!-- Password -->
    <input id="password" type="password" class="form-control mb-4 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password" placeholder="Password">

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

    <div class="d-flex justify-content-around">

      <?php if(Route::has('password.request')): ?>
          <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
              <?php echo e(__('Forgot Your Password?')); ?>

          </a>
      <?php endif; ?>
    </div>

    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="submit"><?php echo e(__('Login')); ?></button>



    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

</form>
<!-- Default form login -->





<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<?php echo $__env->make('admin.partials.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Aladdin\resources\views/admin/auth/login.blade.php ENDPATH**/ ?>