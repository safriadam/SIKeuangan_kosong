@extends('layouts.app')
@section('content')


<div class="container">

{!! link_to('anggaran/create','Tambah Anggaran',['class'=>'btn btn-danger btn-sm']) !!}
<hr>
<h4>pencarian</h4>
{!! Form::open(array('url'=>'anggaran/search')) !!}
{!! form::text('keyword','',['class'=>'form-control','placeholder'=>'masukan nama item'])!!}
<br>
{!! form::submit('Cari Item',['class'=>'btn btn-danger btn-sm']) !!}
{!! form::close() !!}

<hr>

<table class="table table-bordered">
	
	<tr><th>no</th><th>Nama item</th><th>Harga Satuan</th><th>QTY</th><th>Anggaran</th><th>Aksi</th></tr>
	
	@foreach ( $anggaran as $n)
	<tr>
	<td></td>
	<td>{{ $n->nama_item_anggaran }}</td>
	<td>{{ $n->harga_satuan }}</td>
	<td>{{ $n->qty }}</td>
	<td>{{ $n->anggaran }}</td>
	<td>{!! link_to('anggaran/'.$n->id.'/edit','Edit',['class'=>'btn btn-info btn-sm']) !!}
		
		{!! Form::open(array('method'=>'delete','url'=>'anggaran/'.$n->id))!!}
		{!! Form::hidden('_delete','DELETE')!!}
		{!! Form::submit('Hapus',['class'=>'btn btn-info btn-sm'])!!}
		{!! Form::close()!!}

	</td> </tr>
	

	@endforeach
	
</table>
{!! $anggaran->render() !!}
</div>


@stop