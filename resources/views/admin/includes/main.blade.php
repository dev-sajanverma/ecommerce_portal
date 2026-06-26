@include('admin.includes.header')

<!-- Wrapper Start: Sidebar aur Content dono iske andar hone chahiye -->
<div id="layoutSidenav">

    @include('admin.includes.sidebar')

    <div id="layoutSidenav_content">
        <main>
            @yield('content')
        </main>

        @include('admin.includes.footer')
    </div>

</div>
<!-- Wrapper End -->
