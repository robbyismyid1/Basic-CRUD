@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <center>
                        <div class="card-header">Tambah Tag</div>
                    </center>
    
                    <div class="card-body">
                        <form action="{{route('tag.update', $tag->id)}}" method="post">
                            <input type="hidden" name="_method" value="PATCH">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">Nama Tag</label>
                                <input class="form-control" type="text" name="nama_tag" id="" value="{{$tag->nama_tag}}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-info">
                                    Simpan Data
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection