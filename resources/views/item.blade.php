@extends('layout')
@section('title', 'Item')
@section('content-title', 'Item')
@section('content')
@session('Deletesuccess')
    <div class="alert alert-danger" id="success">Item Dihapus</div>
@endsession
@session('Successadd')
    <div class="alert alert-success" id="add">Item Ditambahkan</div>
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
    <a class="btn btn-success" href="{{route('item.create')}}"><i class="bi bi-plus-circle-fill"></i></a>
<table class="table table-striped">
    <th>
        <td>No</td>      
        <td>Name</td>        
        <td>Category</td>        
        <td>Price</td>        
        <td>Stock</td>        
        <td>Action</td>
    </th>
    @forelse ($items as $item)
    <tr>
        <td></td>
        <td>{{$loop->iteration}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->category->name}}</td>
        <td>Rp. {{$item->price}}</td>
        <td>{{$item->stock}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('item.edit', $item->id) }}"><i class="bi bi-pencil-square"></i></a>
            <form action="{{ route('item.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
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