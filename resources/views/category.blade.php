@extends('layout')
@section('title', 'Category')
@section('content-title', 'Category')
@section ('content')
    @session('success')
        <div class="alert alert-danger" id="success">Katergori Dihapus</div>
    @endsession
    @session('add')
        <div class="alert alert-success" id="add">Kategori Ditambahkan</div>
    @endsession

    <script>
        setTimeout(() => {
            const successAlert = document.getElementById('success');
            if (successAlert) {
                successAlert.classList.remove('show'); // mulai fade out
                setTimeout(() => successAlert.remove(), 150); // hapus dari DOM setelah animasi
            }
    
            const addAlert = document.getElementById('add');
            if (addAlert) {
                addAlert.classList.remove('show');
                setTimeout(() => addAlert.remove(), 150);
            }
        }, 3000);
    </script>

<div class="col-md-12">
    <a class="btn btn-success" href="{{route('category.create')}}"><i class="bi bi-plus-circle-fill"></i></a>
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
            <a class="btn btn-primary" href="{{route('category.edit', $category->id) }}"><i class="bi bi-pencil-square"></i></a>
            <form action="{{ route('category.destroy', $category->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></button>
            </form>
        </td>
    </tr>
    @empty
        <div class="alert alert-danger">
            belum ada data
        </div>
    @endforelse
    
</table>
</div>
@endsection