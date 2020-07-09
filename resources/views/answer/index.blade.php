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
        @foreach ($answers as $answer)
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <p>{{ $answer->id }}</p>
                            <p>{{ $answer->bodytext }}</p>
                        </div>
                        <div class="card-footer">
                            <div class="col-md-6">
                            <p>Dibuat pada tanggal {{ $answer->created_at }}</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection