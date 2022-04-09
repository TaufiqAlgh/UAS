@extends('layouts.generic')

@section('judul')
List Kota
@endsection

@section('subjudul')
Berikut adalah list - list kota dan negara yang tersedia
@endsection
@section('isi')
<a href="{{url ('kota/add')}}"><button class="btn btn-success"><i class="bi bi-plus-circle"></i> Tambah Kota</button></a>
<div class="content mt-3">
    <div class="animated fadeIn"> 
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>no</th>
                    <th>Kota</th>
                    <th>Negara</th>
                    <th></th>
                </tr> 
            </thead>
            <tbody>
                @foreach ($cities as $city)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $city->nama }}</td>
                    <td>{{ $city->negara->nama }}</td>
                    <td>
                        <a href="{{url ('kota/edit/'.$city->id) }}"><button class="btn btn-primary"><i class="bi bi-tools"></i></button></a>
                        <form action="{{url ('kota/'.$city->id)}}"method="post" class="d-inline" onsubmit="return confirm('Yakin Hapus Kota ?')">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger"><i class="bi bi-trash2"></i>
                            </button>
                        </form>
                      </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>      
@endsection
