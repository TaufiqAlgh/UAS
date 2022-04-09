@extends('layouts.generic')

@section('judul')
Edit Kota
@endsection

@section('subjudul')
Silahkan Edit Kota & Negara Yang Di Inginkan
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
                    @foreach($cities as $city)
                        <form action="{{url('kota/'.$city->id)}}" method="post">
                            @method('patch')
                            @endforeach
                            @csrf
                            <div class="form-group">
                                <label>Kota</label>
                                <input type="text" id="nama" name="nama" class="form-control" autofocus >
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