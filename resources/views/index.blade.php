@extends('master')

@section('title')
Project
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Bordered Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        @if(session('sukses'))
            <div class="alert alert-success">
                {{session('sukses')}}
            </div>
        @endif
        <a class="btn btn-primary" href="/project/create">Buat Project Baru</a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th style="width: 10px">ID</th>
                    <th>Judul</th>
                    <th>Isi Pertanyaan</th>
                    <th style="width: 40px">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($data as $i => $info)
                    <tr>
                        <td> {{$i + 1}} </td>
                        <td> {{$info->name}} </td>
                        <td> {{$info->deadline}} </td>
                        <td> {{$info->status}} </td>
                        <td style="display: flex;">
                            <a href="/proyek/{{$info->id}}" class="btn btn-info btn-sm">Show</a>
                            <a href="/proyek/{{$info->id}}/edit" class="btn btn-default btn-sm ml-2 mr-2">Edit</a>
                            <form action="/proyek/{{$info->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" align="center">No Posts!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('script')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush