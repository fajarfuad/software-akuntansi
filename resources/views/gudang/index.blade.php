@extends('default')

@section('title', 'Master Data Gudang')
@section('header', 'Master Data Gudang')
@section('content')
<div class="box box-primary">
  <div class="box-header">
    <a href="#" data-toggle="modal" data-target="#tambah-gudang" class="btn btn-primary btn-flat pull-right"><span class="fa fa-plus"></span> Tambah Gudang</a>
  </div>
  <div class="box-body">
    <table class="table table-bordered table-striped table-condensed" id="datatable">
      <thead>
        <tr>
          <th style="width: 15%;">Kode</th>
          <th>Nama Gudang</th>
          <th>Alamat</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($index as $data)
          <tr>
            <td>{{$data->kode}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->alamat}}</td>
            <td>
              <a href="#" data-value="{{$data->id}}" class="edit"><span class="fa fa-pencil"></span></a> &nbsp;
              <a href="/gudang/delete/{{$data->id}}" class="confirm"><span class="fa fa-trash-o"></span></a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<div class="modal fade" id="tambah-gudang">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Gudang</h4>
      </div>
      <div class="modal-body">
        <form action="/gudang/create" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label>Kode Gudang</label>
            <input type="text" class="form-control" name="kode" placeholder="Kode Gudang">
          </div>
          <div class="form-group">
            <label>Nama Gudang</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama Gudang">
          </div>
          <div class="form-group">
            <label>Alamat Gudang</label>
            <textarea name="alamat" class="form-control" rows="8" style="width: 100%;" placeholder="Alamat Gudang"></textarea>
          </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary btn-flat" value="Save">
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
</div>
<div class="modal fade" id="update-gudang">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Update Gudang</h4>
      </div>
      <div class="modal-body">
        <form method="post" id="update-form">
          {{ csrf_field() }}
          <div class="form-group">
            <label>Kode Gudang</label>
            <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode Gudang">
          </div>
          <div class="form-group">
            <label>Nama Gudang</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Gudang">
          </div>
          <div class="form-group">
            <label>Alamat Gudang</label>
            <textarea name="alamat" rows="8" class="form-control" id="alamat" placeholder="Alamat Gudang"></textarea>
          </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary btn-flat" value="Update">
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
$(function () {
  $('#datatable').DataTable();
});
$(".confirm").popConfirm({
  title: "Hapus Gudang",
  content: "Anda yakin ingin menghapus Gudang ini?",
  placement: "left"
});

$(document).on('click', '.edit',function() {
  var id_gudang = $(this).data("value");
  $.get('/gudang/edit/'+id_gudang, function(data) {
    console.log(data);
    $('#kode').val(data.kode);
    $('#nama').val(data.nama);
    $('#alamat').val(data.alamat);
    $('#update-form').attr('action','/gudang/update/'+data.id);

    $('#update-gudang').modal('show');
  });
})
</script>
@endsection
