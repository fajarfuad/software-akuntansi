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
      <h3>Tab 1</h3>
    </div>
    <div class="tab-pane" id="tab_2">
      //code tab_2
    </div>
    <div class="tab-pane" id="tab_3">
      //code tab_3
    </div>
  </div>
</div>
@endsection
