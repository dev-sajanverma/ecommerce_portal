@include('vendor.includes.header')

<!-- Wrapper Start: Sidebar aur Content dono iske andar hone chahiye -->
<div id="layoutSidenav">

    @include('vendor.includes.sidebar')

    <div id="layoutSidenav_content">
        <main>
            @yield('content')
        </main>

        @include('vendor.includes.footer')
    </div>

</div>
<!-- Wrapper End -->
