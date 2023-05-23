@extends('layouts/admin')

@section('content')

<div class="container py-5  d-flex flex-column align-items-center justify-content-center">
    <h1 class="text-center py-3">Benvenuto nella tua area privata, {{ Auth::user()->name }}!</h1>
    <p class="col-md-8 fs-4 w-75 py-4">Questa è la tua Area Privata, qui potrai Creare, Modificare o semplicemente riguardare i tuoi progetti.</p>
    <a href="{{route('admin.projects.index')}}" class="btn btn-primary btn-lg text-center px-5" type="button">Vai Subito ai tuoi progetti.</a>
</div>
@endsection