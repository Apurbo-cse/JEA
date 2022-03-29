<!DOCTYPE html>
<html lang="en">

@include('backend.layouts.head')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('backend.layouts.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('backend.layouts.header')

                <!-- Begin Page Content -->
                @yield('main-content')

                <!-- End of Main Content -->
                @include('backend.layouts.footer')

            </div>

        </div>
    </div>
    <!-- End of Main Content -->
    @include('backend.layouts.scripts')
</body>

</html>
