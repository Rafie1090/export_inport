@extends('kebutuhans.layout')
     
@section('content')
    

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD  Tambahan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('kegiatans.create') }}"> <i class="bi bi-bookmark-plus"></i></a>
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
                <th scope="col">Nama kegiatan</th>
                <th scope="col">pic kegiatan</th>
                <th scope="col">tanggal pelaksanaan</th>
                <th scope="col">tempat/platfrom</th>
                <th></th>
                <th scope="10">Action</th>
    
              </tr>
            </thead>
            
        </tr>
        @foreach ($kegiatans as $kegiatan)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $kegiatan->nama_kegiatan }}</td>
            <td>{{ $kegiatan->pic_kegiatan }}</td>
            <td>{{ $kegiatan->pic_pmli }}</td>
            <td>{{ $kegiatan->tanggal_pelaksanaan }}</td>
            <td>{{ $kegiatan->tempat_platfrom }}</td>
            <td></td>
            <td>
                <form action="{{ route('kegiatans.destroy',$kegiatan->id) }}" method="POST">
   
            <a class="btn btn-info" href="{{ route('kegiatans.show',$kegiatan->id) }}" style="transform: rotate()" ><i class="bi bi-eye"></i></a>
            @csrf
                         
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger"onclick="return confirm('Mau hapus {{ $kegiatan->nama_pemohon }} ?')"><i class="bi bi-trash3"></i></button>
                </form>
                </td>
                    <td>
             
        @endforeach
    </table>

    
    
    {!! $kegiatans->links() !!}
        
@endsection