@extends('layouts.app')

@section('content')
<style>
    a {
      text-align: "center";
    }

    .container {
        width: 40%;
    }
</style>
  
  <br><br>
  <div class="container">
  <div class="card text-center" style="width: 500px">
  <div class="card-header">
    <h2>Hasil Tes Anda</b></h2>
  </div>
  <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    <a href="{{ url('/score/'.Auth::user()->id)}}" class="btn btn-primary">Lihat Hasil</a>
  </div>
  <div class="card-footer text-muted">
        <?php
            $tgl=date('l, d-m-Y');
            echo $tgl;
        ?>
  </div>
</div>
</div>
<!-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ url('/score/'.Auth::user()->id)}}" class="btn btn-primary">Lihat Hasil</a>
                    
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection