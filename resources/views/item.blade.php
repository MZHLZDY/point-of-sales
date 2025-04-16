@extends('layout')
@section('title', 'Item')
@section('content-title', 'Item')
@section('content')
<div class="col-md-8">
<table class="table table-striped">
    <th>
        <td>No</td>      
        <td>Name</td>        
        <td>Price</td>        
        <td>Stock</td>        
        <td>Action</td>
    </th>
    @forelse ($items as $item)
    <tr>
        <td></td>
        <td>{{$loop->iteration}}</td>
        <td>{{$item->name}}</td>
        <td>Rp. {{$item->price}}</td>
        <td>{{$item->stock}}</td>
        <td>
            <a class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
            <a class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
        </td>
    </tr>
    @empty
        <div class="alert alert-danger">
            belum ada data
        </div>
    @endforelse
    
</table>
</div>
</div class="col-md-4">
@endsection