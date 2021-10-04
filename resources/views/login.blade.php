@extends('base')
@section('content')
        <div class="card"><br>
                <div class="card-title text-center"><h4>Sign in</h4><p><hr class="my-4"></p></div>            
            <div class="cad-body">
                <form action="{{url('/login')}}" method="post">
                {{csrf_field()}}
                    <div class="container">
                        <div class="mb-3">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                        <button class="btn btn-warning" style="width: 100%;">Sign in</button>
                        <hr class="my-4">
                        <a class="btn btn-outline-primary" style="width: 100%;" href="{{url('/register')}}">Create New Account</a>
                    </div>
                    
                <br>
                </form>
            </div>
        </div>
        
@stop