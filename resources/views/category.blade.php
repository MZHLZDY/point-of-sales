@extends('layout')
@section('title', 'Category')
@section('content-title', 'Category')
@section ('content')
<div class="col-md-8">
    <a class="btn btn-success" href=""><i class="bi bi-plus-circle-fill"></i></a>
<table class="table table-striped">
    <th>
        <td>No</td>
        <td>Name</td>                
        <td>Action</td>
    </th>
    @forelse ($categories as $category)
    <tr>
        <td></td>
        <td>{{$loop->iteration}}</td>
        <td>{{$category->name}}</td>
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