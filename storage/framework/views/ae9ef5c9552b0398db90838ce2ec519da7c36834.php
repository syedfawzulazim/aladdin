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

    <section class="content container-fluid">

      <div class="row">
        <div class="col-md-6">
          <div class="card" style="padding:0px 10px;">
            <div class="card-header">
             <h3>Add New Product</h3>
            </div>
            <div class="card-body">

                  <form  action="<?php echo e(route('admin.pages.product_store')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                      <label for="category"><i class="fas fa-chart-pie"></i> Category ID</label>
                      <input type="number" class="form-control" name="category" placeholder="Product's Category" required>
                    </div>
                    <div class="form-group">
                      <label for="brand"><i class="fab fa-bootstrap"></i> Brand ID</label>
                      <input type="number" class="form-control" name="brand" placeholder="Product's Brand" required>
                    </div>
                    <div class="form-group">
                      <label for="title"><i class="fas fa-pen"></i> Title</label>
                      <input type="text" class="form-control" name="title" placeholder="Product's Title" required>
                    </div>
                    <div class="form-group">
                      <label for="description"><i class="fas fa-edit"></i> Description</label>
                      <textarea name="description" class="form-control" name="description" placeholder="Product's Description" rows="4" cols="80" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="price"><i class="fas fa-dollar-sign"></i> Price</label>
                      <input type="number" class="form-control" name="price" placeholder="Product's Price" required>
                    </div>
                    <div class="form-group">
                      <label for="quantity"><i class="fas fa-tags"></i> Quantity</label>
                      <input type="number" class="form-control" name="quantity" placeholder="Product's Quantity" required>
                    </div>
                    <div class="form-group">
                      <label for="offer_price"><i class="fas fa-tags"></i> Offer Price</label>
                      <input type="number" class="form-control" name="offer_price" placeholder="Product's Offer Price" required>
                    </div>
                    <div class="form-group">
                      <label for="product_image"><i class="fas fa-camera-retro"></i> Product's Image</label>
                      <input type="file" name="product_image" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Add To Database</button>
                  </form>

                  </div>
                  </div>
                </div>
            </div>

    </section>


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
<?php /**PATH C:\xampp\htdocs\Aladdin\resources\views/admin/pages/product_create.blade.php ENDPATH**/ ?>