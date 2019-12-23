<!-- Menghubungkan dengan view template master -->
@extends('admin.layout.admin')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Users List Page')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')
<div class="card">
<div class="card-header border-0">
@if(session()->has('status'))
  {{ session('status') }}
@endif
<a href="user/add"><button class="btn btn-primary"><i class="fa fa-plus"></i>&nbspAdd User</button></a>
<hr>
<table class="table table-bordered" id="user-table">
        <thead>
            <tr>
				<th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Roles</th>
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
    var usertable = $('#user-table').DataTable({
		responsive: true,
        processing: true,
        serverSide: true,
        ajax: '/admin/user/json',
        columns: [
			{ data: 'DT_RowIndex', name:'DT_RowIndex'},
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'roles', render(data)
            { if(data[0] != undefined ){
              return data[0].name
            }} },
			{ data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    })


    $(document).on('click','.deleteUser',function() {
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
                url: "/admin/user/delete/" + id,
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data){
                    usertable.ajax.reload();
                }
                });
            }
            })
        })
});
</script>
@endpush