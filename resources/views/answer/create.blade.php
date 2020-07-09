
@section('title')
Jawaban | Buat Baru
@endsection

@extends('adminlte.master')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Jawaban</h1>
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
                        Buat Baru
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/jawaban/{{ $id }}">
                            @csrf
                            <div class="form-group">
                                
                                <input type="hidden" name="question_id" class="form-control" value="{{ $id }}">
                            </div>
                            <div class="form-group">
                                <label for="bodytext">Isi Jawaban</label>
                                <textarea name="bodytext" id="bodytext" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="created_at">Tanggal</label>
                                
                                <input type="text" name="created_at" class="form-control" value="{{ now() }}">
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