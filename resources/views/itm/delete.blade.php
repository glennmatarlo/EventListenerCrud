@extends('dashboard')
@section('content')
<div class="card" style="width: 30rem;">
  <img class="card-img-top" src="https://thumbs.dreamstime.com/b/delete-text-black-green-vintage-lines-stamp-grungy-sign-217924081.jpg" alt="Delete Image">
  <div class="card-body">
  <form action="{{url('/dashboard/items/delete/' . $item->id)}}" method="post">
    @csrf
    @method('delete')
        <h6 class="mt-2 mb-3">
            Do you want to delete the item, {{$item->name}}?
        </h6>
        <div>
            <button class="btn btn-danger" style="width: 100%;">Delete</button>
            <hr class="my-4">
            <a href="{{ url('/dashboard') }}" class="btn btn-outline-primary" style="width: 100%;">Cancel</a>   
        </div>
    </form>
  </div>
</div>
@endsection
