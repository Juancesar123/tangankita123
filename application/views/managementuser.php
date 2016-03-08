<html>
<head>
<!-- DataTables -->
	 
	</head>
<body>
 <section class="content-header">
          <h1>
            Management User
            <small>Management User</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Management User</li>
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
<th>nama depan</th>
<th>email </th>
<th>nama belakang </th>
</thead>
<tbody>
<tr ng-repeat="item in manageuser">
 <td><input type="checkbox"  checklist-model="user.manageuser" checklist-value="item.id" role></td>
<td>{{item.first_name}}</td>
<td>{{item.email}}</td>
<td>{{item.last_name}}</td>
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
        <h4 class="modal-title">Input User</h4>
      </div>
      <div class="modal-body">
	  <div class="form-group">
		<label>Nama depan</label>
       <input type="text" class="form-control" ng-model="firstname">
		</div>
		<div class="form-group">
		<label>Nama belakang</label>
        <input type="text" class="form-control" ng-model="lastname">
		</div>
		<div class="form-group">
		<label>email</label>
        <input type="email" class="form-control" ng-model="email">
		</div>
		<div class="form-group">
		<label>Password</label>
        <input type="password" class="form-control" ng-model="password">
		</div>
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" ng-click="tambah()"><i class ="fa fa-plus"></i></button>
      </div>
    </div>

  </div>
</div>
	


</section>

</body>
</html>
</html>