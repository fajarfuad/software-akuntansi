@extends('default')

@section('title', 'User Management')
@section('header', 'User Management')
@section('content')
<div class="nav-tabs-custom">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tab_1" data-toggle="tab"> Profil User</a></li>
    <li><a href="#tab_2" data-toggle="tab">Rubah Password</a></li>
    @if( Auth::user()->status == null || Auth::user()->status == 0)
    <li style="display: none;"><a href="#tab_3" data-toggle="tab">Hak Akses</a></li>
    @else
    <li><a href="#tab_3" data-toggle="tab">Hak Akses</a></li>
    @endif
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="tab_1">
      <h4>Nama User :</h4>
        <h3>{{ Auth::user()->name }}</h3>
      <h4>Email :</h4>
        <h3>{{ Auth::user()->email }}</h3>
      <h4>Tanggal dibuat :</h4>
        <h3>{{ Auth::user()->created_at }}</h3>
    </div>
    <div class="tab-pane" id="tab_2">
      <form class="" action="index.html" method="post">
        <div class="form-group">
          <label>Password Lama</label>
          <input type="password" class="form-control" name="old_pass" placeholder="Masukkan password lama">
        </div>
        <div class="form-group">
          <label>Password Baru</label>
          <input type="password" name="new_pass" class="form-control" placeholder="Masukkan Password baru">
        </div>
        <div class="form-group">
          <label>Ulangi Password</label>
          <input type="password" name="new_pass_again" class="form-control" placeholder="Ulangi Password baru">
        </div>
        <div class="box-footer">
          <input type="submit" name="save" value="Save" class="btn btn-primary btn-flat pull-right">
        </div>
      </form>
    </div>
    <div class="tab-pane" id="tab_3">
      <form action="/setting/user/akses/{{ Auth::user()->id }}" method="post">
        {{ csrf_field() }}
        <input hidden type="text" name="id" value="{{ Auth::user()->id }}">
        <table class="table table-condensed table-striped table-hover" style="font-size: 15px;">
        <thead><tr><th style="width: 2%">Profil</th><th>&nbsp;</th><th>&nbsp;</th></tr></thead><tbody>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>User Management</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>Master Data</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>-Master Item</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>-Master Supplier</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>-Master Costumer</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>-Master Akun</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>-Master Gudang</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>-Master Cabang</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>-Master Mata Uang & Kurs</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>-Master Pajak</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>-Master Collector</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>-Master Kategori Kas</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>Set Saldo Awal</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>-Set saldo Akun</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>-Set Saldo Kas</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>-Set saldo Stok</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>-Set saldo Hutang</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>-Set saldo Piutang</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>-Set saldo uang muka supplier</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>-Set saldo Uang muka costumer</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>-Set saldo Asset tetap</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Spesifikasi (Add/Edit/View)</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Detail Depresiasi(View)</td><td>&nbsp;</td></tr>
         <tr><td>Pembelian</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>PO</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>Pembelian Usaha</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>Pembelian Selain Usaha</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>Retur Pembelian</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>Penjualan</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>Penjualan Usaha</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>Penjualan Selain Usaha</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>Retur Penjualan </td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>Inventory</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>Kartu Stok (View)</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>Penyesuaian Stok</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>Stok Masuk</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>Stok Keluar</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>Mutasi Stok</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>Stok Opname (Add)</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>Kas/Bank</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>Penerimaan Piutang</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>Penerimaan Piutang Selain Usaha</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>Pembayaran Hutang</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>Pembayaran Hutang Selain Usaha</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>Kas</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>- Kas Masuk</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Umum</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>-Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Uang Muka Costumer</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>-Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>-Kas Keluar</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Umum</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>-Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Uang Muka Supplier</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>-Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>Giro</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>-Giro Masuk</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Umum</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>-Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Uang Muka Costumer</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>-Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>-Giro Keluar</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Umum</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>-Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>Uang Muka Supplier</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>-Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>Kliring</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>-Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>Penyelesaian Non Kas</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>-Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>Kas Bon</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>-Kas Bon Order</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>-Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>-Penyelesaian Kas Bon Order </td><td>&nbsp;</td></tr>
         <tr><td>-Kas Bon Umum</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>-Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>-Penyelesaian Kas Bon Umum</td><td>&nbsp;</td></tr>
         <tr><td>Akuntansi</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>Jurnal Umum</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td><td>-Add/Edit/View</td><td>&nbsp;</td></tr>
         <tr><td>Laporan Akuntansi</td><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td>Closing Periode</td><td>&nbsp;</td><td></td></tr>
        </tbody></table>
      </form>
    </div>
  </div>
</div>
@endsection
