@extends('layouts.generic')

@section('judul')
Tambah Kota
@endsection

@section('subjudul')
Silahkan Tambah Kota & Negara Yang Di Inginkan
@endsection
@section('isi')
<div class="content mt-3">
    <div class="animated fadeIn"> 
        <div class="card">
            <div class="card-header">
                <div class="pull-right">
                    <a href="{{url ('kota')}}" class="btn btn-primary"> <i class = "bi bi-skip-backward-circle"></i> Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{url('kota')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Kota</label>
                                <input type="text" id="nama" name="nama" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Negara</label>
                                <select class="form-control" aria-label="Default Select Example" name="negara_id">
                                    <option value=""></option>
                                    @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{$country->nama}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-success"><i class="bi bi-heart"></i> SAVE </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection 