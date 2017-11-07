@extends('default')

@section('title', 'Master Data Cabang')
@section('header', 'Master Data Cabang')
@section('content')
<div class="box box-primary">
  <div class="box-header">
    <a href="#" data-toggle="modal" data-target="#tambah-cabang" class="btn btn-primary btn-flat pull-right"><span class="fa fa-plus"></span> Tambah Cabang</a>
  </div>
  <div class="box-body">
    <table class="table table-bordered table-striped table-condensed" id="datatable">
      <thead>
        <tr>
          <th style="width: 15%;">Kode</th>
          <th>Nama Cabang</th>
          <th>Alamat</th>
          <th>Telp</th>
          <th>Fax</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($index as $data)
          <tr>
            <td>{{$data->kode}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->alamat}}</td>
            <td>{{$data->no_tlp}}</td>
            <td>{{$data->fax}}</td>
            <td>
              <a href="#" data-value="{{$data->id}}" class="edit"><span class="fa fa-pencil"></span></a> &nbsp;
              <a href="/cabang/delete/{{$data->id}}" class="confirm"><span class="fa fa-trash-o"></span></a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<div class="modal fade" id="tambah-cabang">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Cabang</h4>
      </div>
      <div class="modal-body">
        <form action="/cabang/create" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label>Kode Cabang</label>
            <input type="text" class="form-control" name="kode" placeholder="Kode Cabang">
          </div>
          <div class="form-group">
            <label>Nama Cabang</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama Cabang">
          </div>
          <div class="form-group">
            <label>Alamat Cabang</label>
            <textarea name="alamat" class="form-control" rows="3" style="width: 100%;" placeholder="Alamat Cabang"></textarea>
          </div>
          <div class="form-group">
            <label>No Telpon</label>
            <input type="text" class="form-control" name="no_tlp" placeholder="No Telpon">
          </div>
          <div class="form-group">
            <label>No Fax</label>
            <input type="text" class="form-control" name="fax" placeholder="No Fax">
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
<div class="modal fade" id="update-cabang">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Update Cabang</h4>
      </div>
      <div class="modal-body">
        <form method="post" id="update-form">
          {{ csrf_field() }}
          <div class="form-group">
            <label>Kode Cabang</label>
            <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode cabang">
          </div>
          <div class="form-group">
            <label>Nama Cabang</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama cabang">
          </div>
          <div class="form-group">
            <label>Alamat Cabang</label>
            <textarea name="alamat" rows="3" class="form-control" id="alamat" placeholder="Alamat cabang"></textarea>
          </div>
          <div class="form-group">
            <label>No Telpon</label>
            <input type="text" class="form-control" id="no_tlp" name="no_tlp" placeholder="No Telpon">
          </div>
          <div class="form-group">
            <label>No Fax</label>
            <input type="text" class="form-control" id="fax" name="fax" placeholder="No Fax">
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
  title: "Hapus Cabang",
  content: "Anda yakin ingin menghapus Cabang ini?",
  placement: "top"
});

$(document).on('click', '.edit',function() {
  var id_cabang = $(this).data("value");
  $.get('/cabang/edit/'+id_cabang, function(data) {
    console.log(data);
    $('#kode').val(data.kode);
    $('#nama').val(data.nama);
    $('#alamat').val(data.alamat);
    $('#no_tlp').val(data.no_tlp);
    $('#fax').val(data.fax);
    $('#update-form').attr('action','/cabang/update/'+data.id);

    $('#update-cabang').modal('show');
  });
})
</script>
@endsection
