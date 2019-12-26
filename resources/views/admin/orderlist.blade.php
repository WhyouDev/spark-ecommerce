<!-- Menghubungkan dengan view template master -->
@extends('admin.layout.admin')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Order List Page')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')
<div class="card">
<div class="card-header border-0">
@if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
      </div>
@endif
<table class="table table-bordered" id="order-table">
        <thead>
            <tr>
				<th>No</th>
                <th>No Invoice</th>
                <th>Username</th>
                <th>Total QTY</th>
                <th>Total Price</th>
                <th>Order Date</th>
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
    var ordetable = $('#order-table').DataTable({
		responsive: true,
        processing: true,
        serverSide: true,
        ajax: '/admin/order/json',
        columns: [
			{ data: 'DT_RowIndex', name:'DT_RowIndex'},
            { data: 'no_invoice', name: 'no_invoice' },
            { data: 'user' , name : 'user.name'},
            { data: 'qty_total', name:'qty_total'},
            { data: 'price_total', name:'price_total'},
            { data: 'created_at', name:'created_at'},
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