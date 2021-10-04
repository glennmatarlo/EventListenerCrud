@include('head')
<body>
    @include('nav')

    @if (session('errors'))
        <div class="alert alert-danger">
            <div class="container">
                Please fix the following errors.
                <ul>
                    @foreach(session('errors')->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    @if (session('Error'))
        <div class="alert alert-danger">
            <div class="container">
                {{session('Error') }}
            </div>
        </div>
    @endif
    @if (session('Message'))
        <div class="alert alert-success">
            <div class="container">
                {{session('Message') }}
            </div>
        </div>
    @endif
    <div class="container d-flex justify-content-center" style="margin-top:20px;">
        @yield('content')
    </div>
</body>
</html>