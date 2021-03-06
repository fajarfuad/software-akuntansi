@extends('default')

@section('title', 'Tambah Kontak')
@section('header', 'Tambah Kontak')
@section('content')
<div class="box box-success nav-tabs-custom">
  <div class="box-header with-border ">
   <h3 class="box-title">Kontak</h3>
  </div>
  <div class="box-body">
  @if (Session::has('success'))
      <div class="alert alert-success">
          <p>{{ Session::get('success') }}</p>
      </div>
  @endif
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tab_1" data-toggle="tab"> Profil </a></li>
    <li><a href="#tab_2" data-toggle="tab">Afiliasi</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="tab_1">
      <form class="form-horizontal" method="post" action="/kontak">
      {{ csrf_field() }}
        <div class="box-body">
          <div class="form-group">
            <label class="col-sm-2 control-label">Kode</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="kode" name="kode" placeholder="AUTO">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Supplier">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-6">
              <textarea class="form-control" name="alamat" rows="3" placeholder="Alamat Supplier"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">No Telepon</label>
            <div class="col-sm-6">
              <input type="text" name="no_tlp" class="form-control" id="nama" placeholder="No Telepon">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-6">
              <input type="text" name="email" class="form-control" id="nama" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Nama Bank</label>
            <div class="col-sm-6">
              <input type="text" name="bank" class="form-control" id="nama" placeholder="Nama Bank">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">No Rekening</label>
            <div class="col-sm-6">
              <input type="text" name="no_rek" class="form-control" id="nama" placeholder="No Rekening">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">NPWP</label>
            <div class="col-sm-6">
          <input type="text" placeholder="Masukkan No NPWP" name="npwp" class="form-control" data-inputmask='"mask": "99 – 999 – 999 – 9 – 999 – 999"' data-mask>
        </div>
      </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Jenis Mitra</label>
          <div class="col-sm-6">
            <input type="checkbox" name="supplier" value="1"> Supplier <br>
            <input type="checkbox" name="customer" value="1"> Customer <br>
            <input type="checkbox" name="collector" value="1"> Collector <br>
            <input type="checkbox" name="karyawan" value="1"> Karyawan <br>
          </div>
        </div>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-default">Reset</button>
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
    <div class="tab-pane" id="tab_2">
      <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                  <div class="box-tools pull-right">
                    <a href="#"class="btn btn-block btn-social btn-success">
                      <i class="fa fa-plus"></i> Tambah Afiliasi
                    </a>
                  </div>
                </div>
           <div class="box-body">
      		 <div class="box-body table-responsive no-padding">
      		 <table id="example2" class="table table-bordered table-striped">
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
    </div>
  </div>
</div>
@endsection
