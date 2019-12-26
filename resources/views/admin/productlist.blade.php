<!-- Menghubungkan dengan view template master -->
@extends('admin.layout.admin')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Product List Page')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')
<div class="card">
<div class="card-header border-0">
@if(session()->has('status'))
  {{ session('status') }}
@endif
<a href="product/add"><button class="btn btn-primary"><i class="fa fa-plus"></i>&nbspAdd Product</button></a>
<hr>
<table class="table table-bordered" id="product-table">
        <thead>
            <tr>
				<th>No</th>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>Stock</th>
                <th>Unit</th>
				<th>Action</th>
            </tr>
        </thead>
    </table>
</div>
</div>
@stop

@push('scripts')
<script>

$(function() {
    var producttable = $('#product-table').DataTable({
		responsive: true,
        processing: true,
        serverSide: true,
        ajax: '/admin/product/json',
        columns: [
			{ data: 'DT_RowIndex', name:'DT_RowIndex'},
            { data: 'products_name', name: 'products_name' },
            { data: 'price', name: 'products_price' },
            { data: 'category', render(data) { 
              return data.categories_name
            }},
            { data: 'products_stock', name:'products_stock'},
            { data: 'products_unittype', name:'products_unittype'},
			{ data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    })


    $(document).on('click','.deleteProduct',function() {
        var id=$(this).data('id')
                
        Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
              if (result.value) {
                $.ajax({
                type: "delete",
                url: "/admin/product/delete/" + id,
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data){
                    producttable.ajax.reload();
                }
                });
            }
            })
        })
});
</script>
@endpush