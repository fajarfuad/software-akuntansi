@extends('default')

@section('title', 'Supplier')
@section('header', 'Management Supplier')
@section('content')
<div class="box box-success">
        <div class="box-header with-border ">
          <h3 class="box-title">Supplier</h3>
          <div class="box-tools pull-right">
            <a href="/setting/mitra/create" class="btn btn-flat btn-sm btn-social btn-success">
                <i class="fa fa-plus"></i> Tambah Mitra Kerja
              </a>
          </div>
        </div>

     <div class="box-body">
		 <div class="box-body table-responsive no-padding">
		 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
            <th width="3%">No</th>
            <th width="10%">Kode</th>
				    <th width="15%">Nama</th>
			      <th width="20%">Alamat</th>
			      <th width="15%">No Telepon</th>
            <th width="15%">No NPWP</th>
            <th style="text-align: center;" width="7%">Aksi</th>

                </tr>
                </thead>
				        <tbody>
            @foreach($kontak as $i => $kontaks)
              <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $kontaks->kode }}</td>
                <td>{{ $kontaks->nama }}</td>
                <td>{{ $kontaks->alamat }}</td>
                <td>{{ $kontaks->no_tlp }}</td>
                <td>{{ $kontaks->npwp }}</td>
                <td>
                  <a href="{{ Route('kontak.show', $kontaks->id) }}" ><span class="fa fa-eye"></span></a>
                  <a href="{{ Route('kontak.edit', $kontaks->id) }}" ><span class="fa fa-pencil"></span></a>
                  <a href="/kontak/destroy/{{$kontaks->id}}" class="confirm" ><span class="fa fa-trash-o"></span></a>
                </td>
              </tr>
            @endforeach
				</tbody>
    </table>
	</div>
	</div>
  @endsection
@section('script')
<script type="text/javascript">
$(".confirm").popConfirm({
  title: "Hapus Kontak",
  content: "Anda yakin ingin menghapus kontak ini?",
  placement: "left"
});
</script>
@endsection
