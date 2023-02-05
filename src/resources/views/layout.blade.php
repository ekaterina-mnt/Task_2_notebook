<title>
    @yield('title')
</title>
<style>
    body {
        text-align: center;
    }

    .error {
        color: red;
    }

    .success {
        color:lime;
    }
</style>

<body>
    @if (Session::has('success'))
    <div class="success">
        {{ Session::get('success') }}
    </div>
    @endif

    @yield('content')
</body>