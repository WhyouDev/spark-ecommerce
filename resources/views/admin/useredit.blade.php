<!-- Menghubungkan dengan view template master -->
@extends('admin.layout.admin')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Add Users | Users List Page')


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
	<td width="50%"><h2 class="my-1">Edit Users Form</h2></td>
	<td align="right"><a href="{{ url()->previous() }}"><button class="btn btn-primary"><i class="fa fa-reply"></i>  Back to Users</button></a></td>
</tr>
</table>
<hr>
</table>
	<div class="col-lg-8">	
    @foreach($useredit as $ue)
		<form action="/admin/user/storeedit/{{ $ue->id }}" method="POST">
			{{ csrf_field() }}
            <div class="form-group">
			<b>Name</b>
			<input class="form-control" type="hidden" name="id" placeholder="User Name" value="{{ $ue->id }}">
			<input class="form-control" type="text" name="uname" placeholder="User Name" value="{{ $ue->name }}">
			</div>
            <div class="form-group">
			<b>Email</b>
			<input class="form-control" type="email" name="umail" placeholder="User Email" value="{{ $ue->email }}">
			</div>
            <div class="form-group">
			<b>Password</b>
            <input type="hidden" name="oldpassword" value="{{ $ue->password }}">
			<input class="form-control" type="password" name="password" placeholder="User Password">
			</div>
            <div class="form-group">
			<b>Confirm Password</b>
			<input class="form-control" type="password" name="password_confirmation" placeholder="User Confirm Password">
			</div>
            <div class="form-group">
			<b>Roles</b>
			<select name="urole" class="form-control">
            @foreach ($roles as $role)
            <option value="{{ $role->id }}"  {{ $ue->roles->contains($role->id) ? 'selected' : '' }}>{{ $role->name }}</option>
            @endforeach
            </select>
			</div>
			<input type="submit" value="Add" class="btn btn-success">
	</form>
    @endforeach
</div>
</div>
</div>
@stop
