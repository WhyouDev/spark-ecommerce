<!-- Menghubungkan dengan view template master -->
@extends('admin.layout.admin')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Edit Categories | Categories List Page')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')
<div class="card">
<div class="card-header border-0">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<table width="100%">
<tr>
	<td width="50%"><h2 class="my-1">Edit Categories Form</h2></td>
	<td align="right"><a href="../category/"><button class="btn btn-primary"><i class="fa fa-reply"></i>  Back to Category</button></a></td>
</tr>
</table>
<hr>
</table>
	<div class="col-lg-8">	
    @foreach($categoryEdit as $ce)
		<form action="/admin/category/storeedit/{{ $ce->categories_id }}" method="POST">
			{{ csrf_field() }}
            <div class="form-group">
			<b>Name</b>
			<input class="form-control" type="text" name="cname" placeholder="Categories Name" value="{{ $ce->categories_name }}">
			</div>
			<input type="submit" value="Save" class="btn btn-success">
	</form>
    @endforeach
</div>
</div>
</div>
@stop
