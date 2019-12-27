<!-- Menghubungkan dengan view template master -->
@extends('admin.layout.admin')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Detail Order ')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')
<div class="card">
<div class="card-header border-0">
<table width="100%">
<tr>
<td width="50%"><h3>Order Details</h3></td>
<td width="50%" align="right"><a href="{{ url()->previous() }}"><button class="btn btn-success"><i class="fa fa-print"></i>  Print</button></a> <a href="{{ url()->previous() }}"><button class="btn btn-primary"><i class="fa fa-reply"></i>  Back to Order List</button></a></td>
</tr>
</table>
<hr>
<table width="100%">
<tr>
<td width="15%">Customer Name</td>
<td width="1%"> : </td>
<td width="50%"> {{ $orderdetail[0]['order']['user']['name'] }}</td>
<td>Order Date</td>
<td> : </td>
<td>{{ $orderdetail[0]['order']['created_at'] }}</td>
</tr>
<tr>
<td>Customer Address</td>
<td> : </td>
<td> Jl. Lorem Ipsum </td>
<td>Courir Service</td>
<td> : </td>
<td> JNE </td>
</tr>
<tr>
<td>Invoice Number</td>
<td> : </td>
<td>{{ $orderdetail[0]['order']['no_invoice'] }}</td>
<td>Payment Status</td>
<td> : </td>
<td> <font color="red">Not Paid</font></td>
</tr>
</table>
<br />
<h4>Invoice Print</h4>
<hr>
<table class="table table-bordered" id="order-table" data-id="{{ $orderdetail[0]['order']['orders_id'] }}">
        <thead>
            <tr>
				<th>No</th>
                <th>Products Name</th>
                <th>Qty</th>
                <th>Sub Total</th>
            </tr>
        </thead>
    </table>
<table width="100%">
<tr>
<hr>
<td width="80%"></td> 
<td width="20%"><h4>Total : {{ $orderdetail[0]['order']['price_total'] }}</h4></td>
</tr>
</table>
</div>
</div>
@stop

@push('scripts')
<script>
$(function() {
    var id=$(this).data('id')
    var ordetable = $('#order-table').DataTable({
		bFilter: false,
        processing: true,
        serverSide: true,
        ajax: '/admin/orderdetail/json/' + id,
        columns: [
			{ data: 'DT_RowIndex', name:'DT_RowIndex'},
            { data: 'products_name', name: 'products_name' },
            { data: 'sub_qty' , name : 'sub_qty'},
            { data: 'price_subtotal', name:'price_subtotal'},
        ]
    })
})
</script>
@endpush