<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('images/admin/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Adnan Sparrow</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">HEADER</li>
      <!-- Optionally, you can add icons to the links -->
      <li class=" treeview">
        <a href="#"><i class="fab fa-battle-net"></i> <span>Adder</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('admin.pages.product.product_create')}}"><i class="fas fa-plus-circle"></i>  <span>Add Products</span></a></li>
          <li><a href="{{ route('admin.pages.category.create')}}"><i class="fas fa-plus-circle"></i>  <span>Add Categories</span></a></li>
          <li><a href="{{ route('admin.pages.product.product_create')}}"><i class="fas fa-plus-circle"></i>  <span>Add Brands</span></a></li>
        </ul>
      </li>

      
      
      <li class="treeview">
        <a href="#"> <span>Manager</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('admin.pages.product.product_view')}}"><i class="fab fa-vaadin"></i>  <span>Products</span></a></li>
          <li><a href="{{ route('admin.pages.product.product_create')}}"><i class="fab fa-vaadin"></i>  <span>Categories</span></a></li>
          <li><a href="{{ route('admin.pages.product.product_create')}}"><i class="fab fa-vaadin"></i>  <span>Brands</span></a></li>
        </ul>
      </li>
      <li><a href=""><i class="fa fa-link"></i> <span>Add New Products</span></a></li>

      <li><a href="#"><i class="fa fa-add"></i> <span>View Order</span></a></li>

    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
