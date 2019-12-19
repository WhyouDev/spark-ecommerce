<!-- Menghubungkan dengan view template master -->
@extends('admin.layout.admin')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Add Products | Product List Page')


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
	<td width="50%"><h2 class="my-1">Add Products Form</h2></td>
	<td align="right"><a href="../product/"><button class="btn btn-primary"><i class="fa fa-reply"></i>  Back to Products</button></a></td>
</tr>
</table>
<hr>
</table>
	<div class="col-lg-8">	
		<form action="/admin/product/store" method="POST" enctype="multipart/form-data">
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
			<div class="form-group">
			<b>Qty</b>
			<input class="form-control" type="number" name="pqty" placeholder="Products Quantity">
			</div>
			<div class="form-group">
			<b>Unit Type (ex: pcs)</b>
			<input class="form-control" type="text" name="putype" placeholder="Products Unit Type">
			</div>
			<input type="submit" value="Add" class="btn btn-success">
	</form>
</div>
</div>
</div>
@stop
