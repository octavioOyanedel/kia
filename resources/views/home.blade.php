@extends('adminlte::page')

@section('title', 'KIA')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-4">
            <input type="text" class="form-control form-control-sm" placeholder="texto">
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control form-control-sm" placeholder="texto">
        </div>
    </div>
    <livewire:counter />
    <p>Welcome to this beautiful admin panel.</p>
@stop