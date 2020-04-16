<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil</title>
</head>
<body>
  
@extends('layouts.appa')

<style>
    body {
      background-image: url("{{ asset('assets/img/eki8.jpg') }}");
      background-position: center;
      background-size: cover;
      height: 500px;
    }

    .form {
      margin: auto;
      margin: 0 400px;
    }

    .form .card{
      background-color: #4ACD14);
      margin-top: 130px;
    }

    table {
      margin: 30px 0;
    }

    table tr td {
      padding: 2px 0;
    }

    .submit {
      text-align: right;
    }
  </style>
<div class="form text-left">
      <div class="card text-left">
        <div class="card-body text-center" style="margin: auto;">
          <h4 class="card-title font-weight-bold pt-3"><b>Hasil Survey Data Covid-19</b></h4>
        <hr>
          <table class="text-left" width="100%">
            <tr>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                         {{ session('status') }}
                </div>
                 @endif
              <td> <b>Nama </td>
              <td>:<b> {{Auth::user()->name}}</td>
            </tr>
            <tr>
            @foreach ($scores as $score)
              <td><b>Jawaban Ya </b> </td>
              <td>: <b>{{$score->yes}}</td>
            </tr>
            <tr>
              <td><b>Resiko </td>
              @if( $score->yes <=21 and $score->yes >= 14 )
              <td>: <b>Resiko Anda terkena penyakit Covid-19 adalah Tinggi</td>
              @elseif($score->yes <=14 and $score->yes >= 7)
              <td>: <b>Resiko Anda terkena penyakit Covid-19 adalah sedang</td>
              @elseif($score->yes <=7)
              <td>: <b>Resiko Anda terkena penyakit Covid-19 adalah Rendah</td>
              @endif
            @endforeach
            </tr>
           
          </table>
          <hr>
        <h3><b> Stay Safe and Stay Home</p></h3>
        
        </div>
      </div>
      <br>
      <div class="submit">
      <button class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
      </button>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
      </div>
    </div>
</body>
</html>