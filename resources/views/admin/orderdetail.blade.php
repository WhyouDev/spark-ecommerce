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
@foreach($orderdetail as $od)
<table width="100%">
<tr>
<td width="50%"><h3>Order Details</h3></td>
<td width="50%" align="right"><a href="{{ url()->previous() }}"><button class="btn btn-success"><i class="fa fa-print"></i>  Print</button></a> <a href="{{ url()->previous() }}"><button class="btn btn-primary"><i class="fa fa-reply"></i>  Back to Order List</button></a></td>
</tr>
</table>
<hr>
<table width="100%">
<tr>
<td width="13%">Customer Name</td>
<td width="1%"> : </td>
<td width="50%"> {{ $od->order->user->name }}</td>
<td>Order Date</td>
<td> : </td>
<td>{{ $od->order->created_at }}</td>
</tr>
<tr>
<td>Customer Adress</td>
<td> : </td>
<td> Jl. Lorem Ipsum </td>
<td>Courir Service</td>
<td> : </td>
<td> JNE </td>
</tr>
<tr>
<td>Invoice Number</td>
<td> : </td>
<td>{{ $od->order->no_invoice }}</td>
<td>Payment Status</td>
<td> : </td>
<td> <font color="red">Not Yet Paid</font></td>
</tr>
</table>
<br />
<h4>Invoice Print</h4>
<hr>
<table class="table table-bordered" id="order-table">
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
<td width="85%"></td> 
<td width="15%"><h4>Total : {{ $od->order->price_total }}</h4></td>
</tr>
</table>
</div>
</div>
@endforeach
</div>
</div>
@stop
