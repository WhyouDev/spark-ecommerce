<!-- Menghubungkan dengan view template master -->
@extends('admin.layout.admin')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Category List Page')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')
<div class="card">
<div class="card-header border-0">
@if(session()->has('status'))
  {{ session('status') }}
@endif
<a href="category/add"><button class="btn btn-primary"><i class="fa fa-plus"></i>&nbspAdd Categories</button></a>
<hr>
<table class="table table-bordered" id="category-table">
        <thead>
            <tr>
				<th>No</th>
                <th>Categories Name</th>
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
    var categorytable = $('#category-table').DataTable({
		responsive: true,
        processing: true,
        serverSide: true,
        ajax: '/admin/category/json',
        columns: [
			{ data: 'DT_RowIndex', name:'DT_RowIndex'},
            { data: 'categories_name', name: 'categories_name' },
			{ data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    })


    $(document).on('click','.deleteCategory',function() {
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
                url: "/admin/category/delete/" + id,
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data){
                    categorytable.ajax.reload();
                }
                });
            }
            })
        })
});
</script>
@endpush