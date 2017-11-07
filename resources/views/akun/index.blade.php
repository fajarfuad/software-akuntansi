@extends('default')

@section('title', 'Master Data Perkiraan')
@section('header', 'Master Data Perkiraan')
@section('content')
<div class="box box-primary">
  <div class="box-header">
    <a href="#" data-toggle="modal" data-target="#tambah-akun" class="btn btn-primary btn-flat pull-right"><span class="fa fa-plus"></span> Tambah Akun</a>
  </div>
  <div class="box-body">
    <table class="table table-bordered table-striped table-condensed" id="datatable">
      <thead>
        <tr>
          <th style="width: 5%;">No Perk.</th>
          <th>Nama Perk.</th>
          <th>Tipe</th>
          <th>Level</th>
          <th>D/K</th>
          <th>Group Report</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($index as $data)
          <tr>
            <td>{{$data->kode_rek}}</td>
            <td>{{$data->nama}}</td>
            @if($data->tipe == 1)
              <td>CASH</td>
            @elseif($data->tipe == 2)
              <td>ACCOUNTS RECEIVABLE</td>
            @elseif($data->tipe == 3)
              <td>OTHER ASSET</td>
            @elseif($data->tipe == 4)
              <td>OTHER CURRENT ASSET</td>
            @elseif($data->tipe == 5)
              <td>INVENTORY</td>
            @elseif($data->tipe == 6)
              <td>FIXED ASSET</td>
            @elseif($data->tipe == 7)
              <td>ACCUMULATED DEPRECIATION</td>
            @elseif($data->tipe == 8)
              <td>ACCOUNTS PAYABLE</td>
            @elseif($data->tipe == 9)
              <td>OTHER CURRENT LIABILITIES</td>
            @elseif($data->tipe == 10)
              <td>LONG TERM LIABILITIES</td>
            @elseif($data->tipe == 11)
              <td>EQUITY DOESN'T CLOSE</td>
            @elseif($data->tipe == 12)
              <td>EQUITY RETAINED EARNINGS</td>
            @elseif($data->tipe == 13)
              <td>EQUITY GETS CLOSED</td>
            @elseif($data->tipe == 14)
              <td>INCOME</td>
            @elseif($data->tipe == 15)
              <td>OTHER INCOME</td>
            @elseif($data->tipe == 16)
              <td>EXPENSE</td>
            @endif
            @if($data->level == 1)
              <td>GROUP</td>
            @elseif($data->level == 2)
              <td>SUB GROUP</td>
            @else
              <td>Account</td>
            @endif
            @if($data->normal == 1)
              <td>DEBET</td>
            @elseif($data->normal == 2)
              <td>KREDIT</td>
            @endif
            @if($data->posisi == 1)
              <td>NERACA</td>
            @elseif($data->posisi == 2)
              <td>LABA/RUGI</td>
            @endif
            <td>
              <a href="#" data-value="{{$data->id}}" class="edit"><span class="fa fa-pencil"></span></a>
              <a href="/akun/delete/{{$data->id}}" class="confirm"><span class="fa fa-trash-o"></span></a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<div class="modal fade" id="tambah-akun">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Akun</h4>
      </div>
      <div class="modal-body">
        <form action="/akun/create" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label>Kode Perkiraan</label>
            <input type="text" class="form-control" name="kode" placeholder="Kode Perkiraan">
          </div>
          <div class="form-group">
            <label>Nama Perkiraan</label>
            <input type="text" class="form-control" name="nama" placeholder="Kode Perkiraan">
          </div>
          <div class="form-group">
            <label>Tipe</label>
            <select class="form-control select2" style="width: 100%;" name="tipe">
              <option value="1">CASH</option>
              <option value="2">ACCOUNTS RECEIVABLE</option>
              <option value="3">OTHER ASSETS</option>
              <option value="4">OTHER CURRENT ASSETS</option>
              <option value="5">INVENTORY</option>
              <option value="6">FIXED ASSETS</option>
              <option value="7">ACCUMULATED DEPRECIATION</option>
              <option value="8">ACCOUNTS PAYABLE</option>
              <option value="9">OTHER CURRENT LIABILITIES</option>
              <option value="10">LONG TERM LIABILITIES</option>
              <option value="11">EQUITY DOESN'T CLOSE</option>
              <option value="12">EQUITY-RETAIRNED EARNINGS</option>
              <option value="13">EQUITY GETS CLOSED</option>
              <option value="14">INCOME</option>
              <option value="15">OTHER INCOME</option>
              <option value="16">EXPENSES</option>
            </select>
          </div>
          <div class="form-group">
            <label>Level</label>
            <select class="form-control" name="level" style="width: 100%;">
              <option value="1">GROUP</option>
              <option value="2">SUB GROUP</option>
              <option value="3">Account</option>
            </select>
          </div>
          <div class="form-group">
            <label>D/K</label>
            <select class="form-control" name="normal" style="width: 100%;">
              <option value="1">DEBET</option>
              <option value="2">KREDIT</option>
            </select>
          </div>
          <div class="form-group">
            <label>Group Report</label>
            <select class="form-control" name="posisi" style="width: 100%;">
              <option value="1">Neraca</option>
              <option value="2">Laba/Rugi</option>
            </select>
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
<div class="modal fade" id="update-akun">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Update Akun</h4>
      </div>
      <div class="modal-body">
        <form method="post" id="update-form">
          {{ csrf_field() }}
          <div class="form-group">
            <label>Kode Perkiraan</label>
            <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode Perkiraan">
          </div>
          <div class="form-group">
            <label>Nama Perkiraan</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Perkiraan">
          </div>
          <div class="form-group">
            <label>Tipe</label>
            <select class="form-control select2" id="tipe" style="width: 100%;" name="tipe">
              <option value="1">CASH</option>
              <option value="2">ACCOUNTS RECEIVABLE</option>
              <option value="3">OTHER ASSETS</option>
              <option value="4">OTHER CURRENT ASSETS</option>
              <option value="5">INVENTORY</option>
              <option value="6">FIXED ASSETS</option>
              <option value="7">ACCUMULATED DEPRECIATION</option>
              <option value="8">ACCOUNTS PAYABLE</option>
              <option value="9">OTHER CURRENT LIABILITIES</option>
              <option value="10">LONG TERM LIABILITIES</option>
              <option value="11">EQUITY DOESN'T CLOSE</option>
              <option value="12">EQUITY-RETAIRNED EARNINGS</option>
              <option value="13">EQUITY GETS CLOSED</option>
              <option value="14">INCOME</option>
              <option value="15">OTHER INCOME</option>
              <option value="16">EXPENSES</option>
            </select>
          </div>
          <div class="form-group">
            <label>Level</label>
            <select class="form-control" name="level" id="level" style="width: 100%;">
              <option value="1">GROUP</option>
              <option value="2">SUB GROUP</option>
              <option value="3">Account</option>
            </select>
          </div>
          <div class="form-group">
            <label>D/K</label>
            <select class="form-control" name="normal" id="normal" style="width: 100%;">
              <option value="1">DEBET</option>
              <option value="2">KREDIT</option>
            </select>
          </div>
          <div class="form-group">
            <label>Group Report</label>
            <select class="form-control" name="posisi" id="posisi" style="width: 100%;">
              <option value="1">Neraca</option>
              <option value="2">Laba/Rugi</option>
            </select>
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
  title: "Hapus Perkiraan",
  content: "Anda yakin ingin menghapus Perkiraan ini?",
  placement: "left"
});

$(document).on('click', '.edit',function() {
  var kode_reks = $(this).data("value");
  $.get('/akun/edit/'+kode_reks, function(data) {
    console.log(data);
    $('#kode').val(data.kode_rek);
    $('#nama').val(data.nama);
    $('#tipe').val(data.tipe);
    $('#level').val(data.level);
    $('#normal').val(data.normal);
    $('#posisi').val(data.posisi);
    $('#update-form').attr('action','/akun/update/'+data.id);

    $('#update-akun').modal('show');
  });
})
</script>
@endsection
