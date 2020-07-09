
@section('title')
Pertanyaan | Edit
@endsection

@extends('adminlte.master')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Pertanyaan</h1>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-dark">
                    <div class="card-header">
                        Edit
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/pertanyaan/{{ $question->id }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Judul</label>
                                <input type="text" class="form-control" value="{{ $question->title }}" name="title" id="title">
                            </div>
                            <div class="form-group">
                                <label for="bodytext">Isi</label>
                                <textarea name="bodytext" class="form-control" cols="30" rows="10">{{ $question->bodytext }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="created_at">Tanggal</label>
                                <input type="text" name="updated_at" class="form-control" value="{{ now() }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim pertanyaan</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection