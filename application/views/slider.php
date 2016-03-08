<html>
<head>
<!-- DataTables -->
	 
	</head>
<body>
 <section class="content-header">
          <h1>
            Slider
            <small>Slider</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Slider</li>
          </ol>
        </section>
		<section class="content">
		<div class="row">
		<div class="col-xs-12">
          <div class="box-header">
		
		  <h3 class="box-title">{{name}}</h3>
		 
		  
		<button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i></button>
		<button class="btn btn-danger" ng-click="hapus()"><i class="fa fa-trash"></i></button>
		</div>
		<table datatable="ng" dt-columns="dtColumns"dt-options="dtOptions"class="table table-bordered table-striped">
<thead>
<th><input type="checkbox" ng-click="checkall()"></th>
<th>ALT</th>
<th>Gambar</th>
<th>Action</th>
</thead>
<tbody>
<tr ng-repeat="item in sliderku">
 <td> <input type="checkbox"  checklist-model="user.sliderku" checklist-value="item" role></td>
<td>{{item.alt}}</td>
<td><img ng-src="{{item.gambar}}" width="100" height="100"/></td>
<td><button class="btn btn-success" data-toggle="modal" ng-click="edit(item)"data-target="#myModal2"id="edit"><i class="fa fa-edit"></i></button></td>
</tr>
</tbody>
</table>
		
		
		</div>
		</div>
		<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Input slider</h4>
      </div>
      <div class="modal-body">
	  <div class="form-group">
	  <label>alt</label>
        <input type="text" class="form-control" ng-model="judul" >
		</div>
		<div class="form-group">
		<label>gambar</label>
		<input type="file" class="form-control" file-model="myFile">
		</div>
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" ng-click="tambah()"><i class ="fa fa-plus"></i></button>
      </div>
    </div>

  </div>
</div>
	<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Slider</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
	  <label>Judul</label>
        <input type="text" class="form-control" ng-model="judul" >
        <input type="hidden" class="form-control" ng-model="id" >
		</div>
		<div class="form-group">
		<label>foto</label>
		<input type="file" class="form-control" file-model="myFile">
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" ng-click="actionedit()"><i class ="fa fa-pencil-square-o"></i></button>
      </div>
    </div>

  </div>
</div>


</section>

</body>
</html>
</html>