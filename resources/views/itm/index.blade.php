@extends('dashboard')
@section('content')
<div class="container">
<h3 class="container" style="color:#78A2CC">Welcome {{ Auth::user()->name}}</h3>
    <table class="table table-bordered table-striped table-sm" style="color:#444444">
        <thead class="thead-dark">
            <tr>
                <th colspan="5" class="border border-primary"><h5 class="d-flex justify-content-center" style="color:#78A2CC">Items Listed</h5></th>
            </tr>
            <tr class="border border-success">
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>quantity</th>
                <th>
                    <a class="d-flex justify-content-center btn btn-sm" href="{{url('/dashboard/items/create')}}" >
                    <img src="https://static.thenounproject.com/png/145102-200.png" style="margin-top:3px;" width="20" height="20" alt="">&nbsp;<h5>Item</h5>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody class="border border-warning">
            @foreach($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->quantity }}</td>
                <td style="width:9rem;">
                    <div class="d-flex justify-content-center">
                    <a href="{{url('/dashboard/items/edit/'.$item->id)}}"><img src="https://cdn-icons-png.flaticon.com/512/61/61456.png" width="25" height="25" alt="edit"></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="{{url('/dashboard/items/delete/'.$item->id)}}"><img src="https://www.pngrepo.com/png/243959/512/delete.png" width="30" height="30" alt="delete"></a>
                    </div>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
@stop