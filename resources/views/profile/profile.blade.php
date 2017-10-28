@extends('default')

@section('title', 'Profile Perusahaan')
@section('header', 'Profile Perusahaan')
@section('content')
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="nama" placeholder="Nama Perusahaan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-6">
                    <textarea class="form-control" rows="3" placeholder="Alamat Perusahaan"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">NPWP</label>
                  <div class="col-sm-6">
                <input type="text" placeholder="Masukkan NPWP" class="form-control" data-inputmask='"mask": "99 – 999 – 999 – 9 – 999 – 999"' data-mask>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Pengukuhan NPWP</label>
              <div class="col-sm-6">
            <input type="text" class="form-control" placeholder="Masukkan Tanggal" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" class="btn btn-default btn-flat">Cancel</button>
        <button type="submit" class="btn btn-info btn-flat">Sign in</button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
@endsection
