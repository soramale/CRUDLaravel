@extends('adminlte.master')

@section('title')
    Pertanyaan
@endsection
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
                    @foreach ($questions as $question)
                    <div class="card">
                        <div class="card-body">
                            <a href="/jawaban/{{ $question->id }}"><h3>{{ $question->title }}</h3></a>
                            <p>{{ $question->bodytext }}</p>
                            
                        </div>
                        <div class="card-footer">
                            Dibuat pada tanggal {{ $question->created_at }}
                            <a href="/jawaban/{{ $question->id }}/create" class="btn btn-sm btn-success">Jawab</a>
                            <a href="/pertanyaan/{{ $question->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                            <form action="/pertanyaan/{{ $question->id }}" method="POST" style="display : inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</a>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection