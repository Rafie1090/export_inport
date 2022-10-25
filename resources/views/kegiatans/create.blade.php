@extends('kebutuhans.layout')
  
@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('kegiatans.index') }}">kembali</a>
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
     
<form action="{{ route('kegiatans.store') }}" method="POST" enctype="multipart/form-data"> 
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Kegiatan:</strong>
                <input type="text" name="nama_kegiatan" class="form-control" placeholder="nama kegiatan" required>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ppic Kegiatan:</strong>
                    <input type="text" name="pic_kegiatan" class="form-control" placeholder="pic kegiatan" required>
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>pic pmli:</strong>
                <input type="text" name="pic_pmli" class="form-control" placeholder="pic pmli" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>tanggal pelaksanaan:</strong>
                <input type="date" name="tanggal_pelaksanaan" class="form-control" placeholder="tanggal Pelaksanaan" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>tempat/platfrom:</strong>
                <input type="text" name="tempat_platfrom" class="form-control" placeholder="tempat platfrom" required>
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