<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aladdin || Shop</title>
    @include('user.partials.links')
</head>

<body>
    <!-- Body main wrapper start -->
    <div class="wrapper">
      <!-- START HEADER AREA -->
      <header class="header-area header-wrapper">
            <!-- header-top-area -->
            @include('user.partials.headertop')
            <!-- header-middle-area -->
            @include('user.partials.headermid')
      </header>
        <!-- END HEADER AREA -->

        <!-- START MOBILE MENU AREA -->
        @include('user.partials.mobilemenu')

        <!-- END MOBILE MENU AREA -->

        <!-- BREADCRUMBS SETCTION START -->
        @include('user.partials.product.brandsection')
        <!-- BREADCRUMBS SETCTION END -->
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">

            <!-- BY BRAND SECTION START-->
            @yield('content')
            <!-- PRODUCT TAB SECTION END -->

            <!-- BLOG SECTION START -->

            <!-- BLOG SECTION END -->
        </section>
        <!-- End page content -->

        @include('user.partials.footer')

        <!-- START QUICKVIEW PRODUCT -->

        @include('user.partials.product.quickview')

        <!-- END QUICKVIEW PRODUCT -->
    </div>
    <!-- Body main wrapper end -->


    <!-- Placed JS at the end of the document so the pages load faster -->
      @include('user.partials.scripts')

</body>

</html>
