@include('user.layouts.header')

<!-- Wrapper Start: Sidebar aur Content dono iske andar hone chahiye -->
<div id="layoutSidenav">

    @include('user.layouts.sidebar')

    <div id="layoutSidenav_content">
        <main>
            @yield('content')
        </main>

        @include('user.layouts.footer')
    </div>

</div>
<!-- Wrapper End -->
