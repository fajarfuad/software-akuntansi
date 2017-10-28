@extends('default')

@section('title', 'User Management')
@section('header', 'User Management')
@section('content')
<div class="nav-tabs-custom">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tab_1" data-toggle="tab"> Profil User</a></li>
    <li><a href="#tab_2" data-toggle="tab">Rubah Password</a></li>
    <li><a href="#tab_3" data-toggle="tab">Hak Akses</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="tab_1">
      
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
        <input type="submit" name="save" value="Save" class="btn btn-primary btn-flat">
      </form>
    </div>
    <div class="tab-pane" id="tab_3">
      //code tab_3
    </div>
  </div>
</div>
@endsection
