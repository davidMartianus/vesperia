@extends('/templates/navbar')
@section('content')
<div class="col-xs-12 col-md-10 display-table-cell valign-top alt-style">
	<h3 class="judul">Daftar User:</h3>
	
	<div class="row head-title">
		<div class="col-md-9">
			<div class="form-group">
	          <input type="text" class="form-control cari filter" id="filter" placeholder="Search here">
	        </div>
		</div>
		<div class="col-md-3">
			<div class="tambah" data-toggle="modal" data-target="#tambahApiModal" data-whatever="@mdo">
				<h3>Tambah User <span>+</span> </h3>
			</div>
			<div class="modal fade" id="tambahApiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="exampleModalLabel">Tambah User</h4>
			      </div>
			      <div class="modal-body">
			        <form>
			          <div class="form-group">
			            <label for="category-name" class="control-label">Role:</label>
			            <select type="text" class="form-control" id="recipient-name">
			            	<option value="promo">admin</option>
			            	<option value="promo">user</option>
			            </select>
			          </div>
			          <div class="form-group">
			          	<label for="url-name" class="control-label">Nama:</label>
			            <input type="text" class="form-control" id="recipient-name">            	
			          </div>
  			          <div class="form-group">
			          	<label for="url-name" class="control-label">e-mail:</label>
			            <input type="text" class="form-control" id="recipient-name">            	
			          </div>
			          <div class="form-group">
			          	<label for="url-name" class="control-label">Phone Number:</label>
			            <input type="text" class="form-control" id="recipient-name">            	
			          </div>
  			          <div class="form-group">
			          	<label for="url-name" class="control-label">Password:</label>
			            <input type="text" class="form-control" id="recipient-name">            	
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Add</button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</div>


	<table id="api-table" class="display table table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Nama</th>
            <th>email</th>
            <th>Phone Number</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> Patrick </td>
            <td> patrick@gmail.com </td>
            <td> 0857123456 </td>
            <td class="btn-user"><button class="btn btn-primary act-edit">Edit</button><button class="btn btn-danger act-del">Delete</button></td>
        </tr>
        <tr>
            <td> Patrick </td>
            <td> patrick@gmail.com </td>
            <td> 0857123456 </td>
            <td class="btn-user"><button class="btn btn-primary act-edit">Edit</button><button class="btn btn-danger act-del">Delete</button></td>
        </tr>
        <tr>
            <td> Patrick </td>
            <td> patrick@gmail.com </td>
            <td> 0857123456 </td>
            <td class="btn-user"><button class="btn btn-primary act-edit">Edit</button><button class="btn btn-danger act-del">Delete</button></td>
        </tr>
        <tr>
            <td> Patrick </td>
            <td> patrick@gmail.com </td>
            <td> 0857123456 </td>
            <td class="btn-user"><button class="btn btn-primary act-edit">Edit</button><button class="btn btn-danger act-del">Delete</button></td>
        </tr>
    </tbody>
</table>
</div>
@endsection