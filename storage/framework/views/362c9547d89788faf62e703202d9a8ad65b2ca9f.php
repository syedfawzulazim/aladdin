<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aladdin || Home</title>
    <?php echo $__env->make('user.partials.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <!-- Body main wrapper start -->
    <div class="wrapper">
      <!-- START HEADER AREA -->
      <header class="header-area header-wrapper">
            <!-- header-top-area -->
            <?php echo $__env->make('user.partials.headertop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- header-middle-area -->
            <?php echo $__env->make('user.partials.headermid', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </header>
        <!-- END HEADER AREA -->

        <!-- START MOBILE MENU AREA -->
      <?php echo $__env->make('user.partials.mobilemenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- END MOBILE MENU AREA -->

        <!-- START SLIDER AREA -->
        <?php echo $__env->make('user.partials.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">

            <!-- BY BRAND SECTION START-->
            <?php echo $__env->yieldContent('content'); ?>
            <!-- PRODUCT TAB SECTION END -->

            <!-- BLOG SECTION START -->
            <?php echo $__env->make('user.partials.blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- BLOG SECTION END -->
        </section>
        <!-- End page content -->

        <?php echo $__env->make('user.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- START QUICKVIEW PRODUCT -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <?php echo $__env->make('user.partials.model', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- END Modal -->
        </div>
        <!-- END QUICKVIEW PRODUCT -->
    </div>
    <!-- Body main wrapper end -->


    <!-- Placed JS at the end of the document so the pages load faster -->
      <?php echo $__env->make('user.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\Aladdin\resources\views/user/layouts/master.blade.php ENDPATH**/ ?>