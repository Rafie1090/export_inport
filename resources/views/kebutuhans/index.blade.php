@extends('kebutuhans.layout')
     
@section('content')
    

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD Kebutuhan Tambahan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('kebutuhans.create') }}"> <i class="bi bi-bookmark-plus"></i></a>
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
                <th scope="col">Nama Pemohonan</th>
                <th scope="col">Anggaran</th>
                <th></th>
                <th scope="10">Action</th>
    
              </tr>
            </thead>
            
        </tr>
        @foreach ($kebutuhans as $kebutuhan)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $kebutuhan->nama_pemohon }}</td>
            <td>{{ $kebutuhan->anggaran }}</td>
            <td></td>
            <td>
                <form action="{{ route('kebutuhans.destroy',$kebutuhan->id) }}" method="POST">
   
            <a class="btn btn-info" href="{{ route('kebutuhans.show',$kebutuhan->id) }}" style="transform: rotate()" ><i class="bi bi-eye"></i></a>
            @csrf
                         
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger"onclick="return confirm('Mau hapus {{ $kebutuhan->nama_pemohon }} ?')"><i class="bi bi-trash3"></i></button>
                </form>
                </td>
                    <td>
             
        @endforeach
    </table>

    
    
    {!! $kebutuhans->links() !!}
        
@endsection