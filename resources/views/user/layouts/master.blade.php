<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aladdin || Home</title>
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

        <!-- START SLIDER AREA -->
        @include('user.partials.slider')

        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">

            <!-- BY BRAND SECTION START-->
            @yield('content')
            <!-- PRODUCT TAB SECTION END -->

            <!-- BLOG SECTION START -->
            @include('user.partials.blog')
            <!-- BLOG SECTION END -->
        </section>
        <!-- End page content -->

        @include('user.partials.footer')

        <!-- START QUICKVIEW PRODUCT -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            @include('user.partials.model')
            <!-- END Modal -->
        </div>
        <!-- END QUICKVIEW PRODUCT -->
    </div>
    <!-- Body main wrapper end -->


    <!-- Placed JS at the end of the document so the pages load faster -->
      @include('user.partials.scripts')

</body>

</html>
