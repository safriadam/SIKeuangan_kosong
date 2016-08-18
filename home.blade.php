@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Sistem Informasi Keuangan ASRI 12 Kauman</h2></div>

                <div class="panel-body">
                    <div class='container'>
                    <div class="col-sm-2 " align="center">
                      <a href="{{ url('anggaran')}}"><img src="img/anggaran.png"  width="100" height="100" class="img-responsive" alt="Generic placeholder thumbnail">
                     <h4 >ANGGARAN</h4>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
