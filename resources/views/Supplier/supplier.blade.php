@extends('default')

@section('title', 'Supplier')
@section('header', 'Management Supplier')
@section('content')
<div class="box box-success">
        <div class="box-header with-border ">
          <h3 class="box-title">Supplier</h3>
          <div class="box-tools pull-right">
            <a href="/supplier/create"class="btn btn-block btn-social btn-success">
                <i class="fa fa-plus"></i> Tambah Supplier
              </a>
          </div>
        </div>

     <div class="box-body">
		 <div class="box-body table-responsive no-padding">
		 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
            <th width="3%">No</th>
            <th width="10%">Kode</th>
				    <th width="15%">Nama</th>
			      <th width="20%">Alamat</th>
			      <th width="15%">No Telepon</th>
			      <th width="15%">Email</th>
            <th width="15%">No NPWP</th>
            <th style="text-align: center;" width="7%">Aksi</th>

                </tr>
                </thead>
				        <tbody>

              <tr>
              <td ></td>
              <td ></td>
             	<td ></td>
				      <td ></td>
			 	      <td ></td>
			        <td ></td>
              <td ></td>
			        <td style="text-align: center;"><div class="btn-group">
                      <a href="/profile" id=''><span class="glyphicon glyphicon-eye-open"></span></a>
                      <a href="/profile" id=''><span class="glyphicon glyphicon-pencil"></span></a>
                      <a href="/profile" id=''><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
	         </td>
                </tr>
				</tbody>
              </table>
	</div>
	</div>
  @endsection