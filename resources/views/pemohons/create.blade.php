@extends('kebutuhans.layout')
  
@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pemohons.index') }}">kembali</a>
        </div>
    </div>
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('pemohons.store') }}" method="POST" enctype="multipart/form-data"> 
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama pemohon:</strong>
                <input type="text" name="nama_pemohon" class="form-control" value="@error('nama_pemohon') is-invalid @enderror" placeholder="nama pemohon" required>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>email:</strong>
                    <input type="email" name="email" class="form-control" placeholder="email" required>
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>no telp:</strong>
                <input type="number" name="no_telp" class="form-control" placeholder="no telp" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>asal intansi:</strong>
                <input type="text" name="asal_intansi" class="form-control" placeholder="asal_intansi" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
 
</form>
        </div>
    </div>
    @endsection