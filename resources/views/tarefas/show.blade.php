@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ $tarefa->tarefa}} </div>
                <div class="card-body">
                    <fieldset disabled>
                        <div class="card-body">
                            <label class="form-label">Password</label>
                            <input type="date" class="form-control" value="{{ $tarefa->data_limite_conclusao }}">
                        </div>
                    </fieldset>
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
