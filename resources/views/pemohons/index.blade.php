@extends('kebutuhans.layout')
     
@section('content')
    

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD  Tambahan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pemohons.create') }}"> <i class="bi bi-bookmark-plus"></i></a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">

        <table class="table">
            <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama pemohon</th>
                <th scope="col">email</th>
                <th scope="col">no telp</th>
                <th scope="col">asal intansi</th>
                <th></th>
                <th scope="10">Action</th>
    
              </tr>
            </thead>
            
        </tr>
        @foreach ($pemohons as $pemohon)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pemohon->nama_pemohon }}</td>
            <td>{{ $pemohon->email }}</td>
            <td>{{ $pemohon->no_telp }}</td>
            <td>{{ $pemohon->asal_intansi }}</td>
            <td></td>
            <td>
                <form action="{{ route('pemohons.destroy',$pemohon->id) }}" method="POST">
   
            <a class="btn btn-info" href="{{ route('pemohons.show',$pemohon->id) }}" style="transform: rotate()" ><i class="bi bi-eye"></i></a>
            @csrf
                         
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger"onclick="return confirm('Mau hapus {{ $pemohon->nama_pemohon }} ?')"><i class="bi bi-trash3"></i></button>
                </form>
                </td>
                    <td>
             
        @endforeach
    </table>

    
    
    {!! $pemohons->links() !!}
        
@endsection