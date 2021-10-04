@auth
    <nav class="d-flex navbar navbar-expand-lg navbar-light sticky-position bg-light" style="top:0;">
        <a class="navbar-brand" href="{{url('/dashboard')}}">
        <img src="https://www.pngkey.com/png/full/239-2398314_logo-store-png-e-store.png" style="margin-left:20px;" width="140" height="60" alt="">
        </a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" style="font-family: Tw Cen MT;font-size:25px; margin-right: 20px; margin-top:20px;" href="/home"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="font-family: Tw Cen MT;font-size:25px; margin-right: 20px; margin-top:20px;" href="#"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="font-family: Tw Cen MT;font-size:25px; margin-right: 20px; margin-top:20px;"  href="#"></a>
            </li>
            </ul>
        </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn-outline-warning" style="margin-right:30px;">Logout {{ Auth::user()->name}}</button>
                </form>
    </nav>
@endauth 
@guest
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position:sticky;position: -webkit-sticky;top:0;">
        <a class="navbar-brand" href="{{url('/')}}">
        <img src="https://www.pngkey.com/png/full/239-2398314_logo-store-png-e-store.png" style="margin-left:20px;" width="140" height="60" alt="">
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" style="font-family: Tw Cen MT;font-size:25px; margin-right: 20px; margin-top:20px;" href="/">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="font-family: Tw Cen MT;font-size:25px; margin-right: 20px; margin-top:20px;" href="#">ABOUT US</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="font-family: Tw Cen MT;font-size:25px; margin-right: 20px; margin-top:20px;"  href="#">FAQs</a>
            </li>
            </ul>
        </div>

        <div class="float-right" style="margin-right:30px;">
                <a type="button" href="{{url('/register')}}" class="btn">Sign-up</a> / &nbsp;
                <a href="{{url('/login')}}" class="btn btn-outline-secondary">Sign-in</a>
        </div>
    </nav>
@endguest