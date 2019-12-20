<!-- Menghubungkan dengan view template master -->
@extends('admin.layout.admin')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Edit Products | Product List Page')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')
<div class="card">
<div class="card-header border-0">
<table width="100%">
<tr>
	<td width="50%"><h2 class="my-1">Edit Products Form</h2></td>
	<td align="right"><a href="../"><button class="btn btn-primary"><i class="fa fa-reply"></i>  Back to Products</button></a></td>
</tr>
</table>
<hr>
</table>
	<div class="col-lg-8">	
    @foreach($productEdit as $pe)
		<form action="/admin/product/storeedit/{{ $pe->products_id }}" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
            <div class="form-group">
			<b>Name</b>
			<input class="form-control" type="text" name="pname" placeholder="Products Name" value="{{ $pe->products_name }}">
			</div>
			<div class="form-group">
			<b>Tagline</b>
			<input class="form-control" type="text" name="ptag" placeholder="Products Tagline" value="{{ $pe->products_tagline }}">
			</div>
			<div class="form-group">
			<b>Details</b>
			<textarea class="form-control" name="pdetail" cols="30" rows="3">{{ $pe->products_details }}</textarea>
			</div>
            <div class="form-group">
			<b>Categories</b>
			<select class="form-control" name="pcat">
            @foreach($categorieslist as $c)
                <option value="{{ $c->categories_id }}" 
				@if($pe->categories_id == $c->categories_id) selected @endif
				>{{ $c->categories_name }}</option>
            @endforeach
            </select>
			</div>
            <div class="form-group">
			<b>Price</b>
			<input class="form-control" type="number" name="pprice" placeholder="Products Price" value="{{ $pe->price }}">
			</div>
			<div class="form-group">
			<b>Photos</b><br/><br>
            <img width="100px" height="100px" src="/img_products/{{ $pe->products_photo }}"><br><br>
			<input type="file" name="pfile">
			<input type="hidden" name="oldpfile" value="{{ $pe->products_photo }}">
			</div>
			<div class="form-group">
			<b>Qty</b>
			<input class="form-control" type="number" name="pqty" placeholder="Products Qty" value="{{ $pe->products_stock }}">
			</div>
			<div class="form-group">
			<b>Unit Type (ex: pcs)</b>
			<input class="form-control" type="text" name="putype" placeholder="Products Price" value="{{ $pe->products_unittype }}">
			</div>
			<input type="submit" value="Save" class="btn btn-success">
	</form>
    @endforeach
</div>
</div>
</div>
@stop
