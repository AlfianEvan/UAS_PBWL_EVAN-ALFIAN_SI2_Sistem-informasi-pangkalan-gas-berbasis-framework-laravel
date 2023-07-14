@extends('layouts.main')

@section('main-body')
@if (session()->has('loginSuccess'))
        {!! session('loginSuccess') !!}
@endif

<h1 class="mt-4">Dashboard</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Sistem Informasi Pembelian Tabung Gas LPG Di Pangkalan Tirtajaya</li>
</ol>
<div class="row">
    <div class="alert alert-success" role="alert">
        <h3>
            Selamat datang, {{ auth()->user()->user_nama }}!
        </h3>
        <img src="{{ asset('img/kios.jpg') }}" alt="" width="" height="400" position="center"> 

    </div>
</div>
@endsection