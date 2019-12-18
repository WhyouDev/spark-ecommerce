<!-- Menghubungkan dengan view template master -->
@extends('admin.layout.admin')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Product List Page')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')

<table class="table table-bordered" id="product-table">
        <thead>
            <tr>
				<th>No</th>
                <th>Name</th>
                <th>Price</th>
				<th>Action</th>
            </tr>
        </thead>
    </table>
@stop

@push('scripts')
<script>
$(function() {
    $('#product-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/admin/product/json',
        columns: [
			{ data: 'DT_RowIndex', name:'DT_RowIndex'},
            { data: 'products_name', name: 'products_name' },
            { data: 'price', name: 'products_price' },
			{ data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    });
});
</script>
@endpush