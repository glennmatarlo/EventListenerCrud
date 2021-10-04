@extends('base')
@section('content')
        <div class="card" style="width: 28rem;"><br>
                <div class="card-title text-center"><h4>Create account</h4><p><hr class="my-4"></p></div>
            <div class="cad-body">
                <form action="{{url('/register')}}" method="post">
                {{csrf_field()}}
                    <div class="container">
                        <div class="mb-3">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                        <p class="text-center">Already have an account? Log in <a href="{{url('/login')}}">here</a>.</p>
                        <button class="btn btn-primary" style="width: 100%;">Sign up</button>
                    </div>
                <br>
                </form>
            </div>
        </div>
@stop 