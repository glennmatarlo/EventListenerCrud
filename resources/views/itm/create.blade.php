@extends('dashboard')
@section('content')
        <div class="card" style="width:30rem;"><br>
                <div class="card-title text-center"><h4>Add Item</h4><p><hr class="my-4"></p></div>            
            <div class="cad-body">
                <form action="{{url('/dashboard/items/create')}}" method="post">
                {{csrf_field()}}
                    <div class="container">
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="description">Description</label>
                            <input type="text" name="description" id="description" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="price">Price</label>
                            <input type="text" name="price" id="price" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="quantity">Quantity</label>
                            <input type="text" name="quantity" id="quantity" class="form-control">
                        </div>
                        <hr class="my-4">
                        </div>
                        <div class="container">
                        <button class="btn btn-warning" style="width: 100%;">Add Item</button>
                    </div>
                    <br>
                </form>
            </div>
        </div>
@endsection