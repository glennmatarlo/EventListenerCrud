<div class="container">
    <h2>Log CRUD</h2>
    <p>
        Welcome {{$user->name}}!
    </p>
    <p>
    We're glad you're here,
    {{$user->name}}.
    </p>

    <p>
        <a href="{{url('/verification/' . $user->id . "/" . $user->remember_token)}}">Click Here.</a>
    </p>
</div>