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
        <table class="table table-condensed table-striped">
          <thead>
            <tr>
              <th></th>
              <th width="20%">Hak Akses</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>Profile</th>
              <td></td>
            </tr>
            <tr>
              <td>Add / Edit</td>
              <td><input type="checkbox" name="akses[]" value="profile-2"></td>
            </tr>
            <tr>
              <th>User Management</th>
              <td></td>
            </tr>
            <tr>
              <td>View</td>
              <td><input type="checkbox" name="akses[]" value="user-1"></td>
            </tr>
            <tr>
              <td>Edit</td>
              <td><input type="checkbox" name="akses[]" value="user-2"></td>
            </tr>

            <tr>
              <td></td>
              <td><input type="submit" name="save" value="save" class="btn btn-primary btn-flat"></td>
            </tr>
          </tbody>
        </table>
      </form>
    </div>
  </div>
</div>
@endsection
