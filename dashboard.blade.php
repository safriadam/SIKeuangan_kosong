
@extends('template')
@section('content')



<div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h2>Sistem Informasi Keuangan ASRI 12 Kauman Yogyakarta</h2>
            <div class='container'>
                <div class="col-sm-2 " align="center">
                      <a href="{{ url('anggaran')}}"><img src="img/anggaran.png"  width="100" height="100" class="img-responsive" alt="Generic placeholder thumbnail">
                     <h4>ANGGARAN</h4>
                </div>
                <div class="col-sm-2 " align="center">
                      <a href="#"><img src="img/realisasi.png" width="100" height="100" class="img-responsive" alt="Generic placeholder thumbnail">
                      <h4>REALISASI</h4>      
                </div>
                <div class="col-sm-2 placeholder" align="center">
                      <a href="#"><img src="img/pemasukan.png" width="100" height="100" class="img-responsive" alt="Generic placeholder thumbnail">
                      <h4>PEMASUKAN</h4>  
                </div>
                <div class="col-sm-2 placeholder" align="center">
                      <a href="#"><img src="img/laporan.png" width="100" height="50" class="img-responsive" alt="Generic placeholder thumbnail">
                      <h4>LAPORAN</h4>
                </div>
            </div>
            
      </div> <!-- jumbotron -->

    </div> <!-- /container -->
@stop

