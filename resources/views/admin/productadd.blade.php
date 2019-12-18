<!-- Menghubungkan dengan view template master -->
@extends('admin.layout.admin')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Add Products | Product List Page')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')
<h2 class="my-1">Add Products Form</h2>
	<div class="col-lg-8">	
		<form action="/upload/proses" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
            <div class="form-group">
			<b>Name</b>
			<input class="form-control" type="text" name="pname" placeholder="Products Name">
			</div>
            <div class="form-group">
			<b>Categories</b>
			<select class="form-control" name="pcat">
            @foreach($categorieslist as $c)
                <option value="{{ $c->categories_id }}">{{ $c->categories_name }}</option>
            @endforeach
            </select>
			</div>
            <div class="form-group">
			<b>Price</b>
			<input class="form-control" type="number" name="pprice" placeholder="Products Price">
			</div>
			<div class="form-group">
			<b>Photos</b><br/>
			<input type="file" name="pfile">
			</div>
			<input type="submit" value="Simpan" class="btn btn-primary">
	</form>
</div>
@stop
