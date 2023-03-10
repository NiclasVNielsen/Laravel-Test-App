@extends('treasures.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Treasure</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('treasures.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            {{ $treasure->title }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tale:</strong>
            {{ $treasure->tale }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Value:</strong>
            {{ $treasure->value }}
        </div>
    </div>
</div>


@endsection