@extends('template')
@section('content')

{!! Html::ul($errors->all()) !!}

{!! Form::model($anggaran,array('url'=>'anggaran/'.$anggaran->id,'method'=>'patch')) !!}
<table class="table table-bordered">

@include('anggaran.form') <!-- buat manggil form di view/anggaran/form.blade.php, jadi sekali panggil -->
	<tr><td colspan="2">
		{!! Form::submit('simpan data',['class'=>'btn btn-danger btn-sm']) !!}
		{!! link_to('anggaran','Kembali',['class'=>'btn btn-danger btn-sm']) !!}
	</td></tr>
</table>
{!! Form::close() !!}


@stop