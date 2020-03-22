<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aladdin || Admin</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php echo $__env->make('admin.partials.link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


  <!-- Main Header -->
  <?php echo $__env->make('admin.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php echo $__env->make('admin.partials.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->yieldContent('res'); ?>

  </div>

  <!-- Main Footer -->
  <?php echo $__env->make('admin.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Control Sidebar -->
  <?php echo $__env->make('admin.partials.slidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<?php echo $__env->make('admin.partials.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Aladdin\resources\views/admin/layouts/master.blade.php ENDPATH**/ ?>