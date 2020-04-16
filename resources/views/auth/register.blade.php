<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
</head>
<body>
    
@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="login.css">
<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
<img src="slide1" alt="">
<div class="background">
<br><br><br><br><br>
    <div class="container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h2 class="text-center"><b>DAFTAR</b></h2>
            <hr>
            <div class="form-group">
                <label for="name" ><b>{{ __('Nama :') }}</b></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                    </div>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Masukan Nama Anda">
                </div>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group ">
                <label for="email"><b>{{ __('Email :') }}</b></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                    </div>
                
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Masukan Email Anda">
                
                </div>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <hr>
                </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%">
                        {{ __('Simpan') }}
                    </button>                               
                </div>>
            </div>
        </form>
    </div>
</div>
@endsection
</body>
</html>
                


