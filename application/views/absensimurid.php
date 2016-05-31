<html>
<head>
</head>
<body>
  <section class="content-header">
    <h1>
      Absensi Murid
      <small>Absensi Murid</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li>Murid</li>
      <li class="active">Absensi Murid</li>
    </ol>
  </section>
  <div class="row">
    <div class="col-xs-12">
<div class="box box-primary">
<div class="box-body">
  <div class="box-header">
    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Absensi</button>
    <button class="btn btn-danger" ng-click="hapus()"><i class="fa fa-trash"> </i> Hapus Data</button>
  </div>
  <table datatable="ng" dt-columns="dtColumns"dt-options="dtOptions"class="table table-bordered table-striped">
<thead>
<th><input type="checkbox" ng-click="checkall()"></th>
<th>nama</th>
<th>keterangan</th>
<th>Action</th>
</thead>
<tbody>
<tr ng-repeat="item in absensimurid">
 <td> <input type="checkbox"  checklist-model="user.hapusabsensimurid" checklist-value="item.id_absensi_murid" role></td>
<td>{{item.nama}}</td>
<td>{{item.keterangan}}</td>
<td><button class="btn btn-success" data-toggle="modal" ng-click="edit(item)"data-target="#myModal1"><i class="fa fa-edit"></i></button></td>
</tr>
</tbody>
</table>
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ubah Data Absensi Murid</h4>
      </div>
      <div class="modal-body">
       <div class = "form-group">
	   <label>Nama</label>
	   <input type="text" class="form-control" ng-model="nama">
     <input type="hidden" ng-model="id">
     </div>
     <div class = "form-group">
   <label>Keterangan</label>
   <select class="form-control" ng-model="keterangan">
     <option value="izin">Izin</option>
     <option value="alfa">Absen</option>
     <option value="sakit">Sakit</option>
     <option value="masuk">Masuk</option>
   </select>
   </div>
	     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
        <button type="button" class="btn btn-success" ng-click="actionedit()"><i class="fa fa-send"></i> Submit</button>
      </div>
    </div>

  </div>
</div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Input Absensi Murid</h4>
      </div>
      <div class="modal-body">
       <div class = "form-group">
	   <label>Nama</label>
	   <input type="text" class="form-control" ng-model="nama">

	   </div>
     <div class = "form-group">
   <label>Keterangan</label>
   <select class="form-control" ng-model="keterangan">
     <option value="izin">Izin</option>
     <option value="alfa">Absen</option>
     <option value="sakit">Sakit</option>
     <option value="masuk">Masuk</option>
   </select>
   </div>
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
        <button type="button" class="btn btn-primary" ng-click="tambah()"><i class="fa fa-send"></i> Submit</button>
      </div>
    </div>

  </div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
