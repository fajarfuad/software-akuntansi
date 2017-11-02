@extends('default')

@section('title', 'User Management')
@section('header', 'User Management')
@section('content')
<div class="box box-primary">
  <div class="box-header">
    <a href="/add/item" class="btn btn-primary btn-flat pull-right"><span class="fa fa-plus"></span> Tambah Barang</a>
  </div>
  <div class="box-body">
    <table class="table table-bordered table-striped" id="datatable">
      <thead>
        <tr>
          <th style="width: 5%;">No.</th>
          <th style="width: 15%;">Kode Item</th>
          <th>Nama</th>
          <th style="width: 10%;">Action</th>
        </tr>
      </thead>
    </table>
  </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
$(function () {
  $('#datatble').DataTable();
});
</script>
@endsection
