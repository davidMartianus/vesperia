@extends('/templates/navbar')
@section('content')
<div class="col-xs-12 col-md-10 display-table-cell valign-top alt-style body">
	<h3 class="judul">Daftar User:</h3>
	
	<div class="row head-title">
		<div class="col-xs-11 col-md-9">
			<div class="form-group">
	          <input type="text" class="form-control cari filter" id="filter" placeholder="Search here">
	        </div>
		</div>
		<div class="col-xs-5 col-md-3">
			<div class="tambah" data-toggle="modal" id="add-btn-user" data-whatever="@mdo">
				<h3>Tambah User <span>+</span> </h3>
			</div>

			<!-- modal add user -->
			<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="modalLabel"></h4>
			      </div>
			      
			      <div class="modal-body">
			        <form id="modal-form" data-parsley-validate method="get" action="" >
			          <div class="form-group">
			            <label for="category-name" class="control-label">Role:</label>
			            <select type="text" class="form-control" id="role">
			            	<option value="promo">admin</option>
			            	<option value="promo">user</option>
			            </select>
			          </div>
			          
			          <div class="form-group">
			          	<label for="url-name" class="control-label">Nama:</label>
			            <input type="text" class="form-control" id="nama" name="nama" required data-parsley-required="true">            	
			          </div>
  			          
  			          <div class="form-group">
			          	<label for="url-name" class="control-label">e-mail:</label>
			            <input type="email" class="form-control" id="mail" name="mail" required data-parsley-required="true" data-required="false" size="20" maxlength="40">	
			          </div>

			          <div class="form-group">
			          	<label for="url-name" class="control-label">Phone Number:</label>
			            <input type="text" class="form-control" id="phone" name="phone" required data-parsley-required="true" maxlength="12">            	
			          </div>

  			          <div class="form-group" id="passwordValidation">
			          	<label for="url-name" class="control-label">Password:</label>
			            <input type="password" class="form-control" id="password" name="password" required data-parsley-required="true">            	

			            <label for="url-name" class="control-label">Confirm Password:</label>
			            <input type="password" class="form-control" id="confirmpassword" name="confirmpassword"> 
			          </div>

				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary actionButton" id="modalSubmit"></button>
				        <input type="hidden" id="user_id" name="user_id" value="0">
				      </div>
			        </form>
			      </div>
			      
			    </div>
			  </div>
			</div>
			<!-- end modal add -->

			<!-- modal delete -->
			<div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="modalLabel"></h4>
			      </div>
			      <div class="modal-body">
			          <h2 class="text-center">Are you sure want to delete <span class="dname"></span> ? <span
							class="hidden did"></span></h2>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="delete btn btn-primary">Yes</button>
			        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</div>
	<!-- <div class="responsive-table"> -->
		<table id="api-table" class="tbl-user table table-bordered responsive-table" cellspacing="0" width="100%">
		    <thead>
		        <tr id="headrow">
		        	<th scope="col">Id</th>
		            <th scope="col">Nama</th>
		            <th scope="col">Email</th>
		            <th scope="col">Phone Number</th>
		            <th scope="col">Role</th>
		            <th scope="col">Action</th>
		        </tr>
		    </thead>
		    <tbody>    	
		        <tr>
		        	<td id="uid" scope="row" data-label="Id"> 1 </td>
		            <td id="uname" data-label="Nama"> Patrick </td>
		            <td id="umail" data-label="Email"> patrick@gmail.com </td>
		            <td id="uphone" data-label="Phone Number"> 085712345 </td>
		            <td id="urole" data-label="Role"> User </td>
		            <td class="btn-user" data-label="Action">
			            <div id="btn">
				            <button class="btn btn-primary act-edit" id="edit-btn-user">Edit</button>
				            <button class="btn btn-danger act-del" id="del-btn-user">Delete</button>
			            </div>
		            </td>
		        </tr>        
		        <!-- <tr>
		            <td> Thomas </td>
		            <td> thomas@gmail.com </td>
		            <td> 0857123457 </td>
		            <td class="btn-user"><button class="btn btn-primary act-edit" id="edit-btn-user" data-toggle="modal" data-target="#userModal">Edit</button><button class="btn btn-danger act-del" data-toggle="modal" data-target="#delModal">Delete</button></td>
		        </tr>
		        <tr>
		            <td> Woof </td>
		            <td> woof@gmail.com </td>
		            <td> 0857123458 </td>
		            <td class="btn-user"><button class="btn btn-primary act-edit" id="edit-btn-user" data-toggle="modal" data-target="#userModal">Edit</button><button class="btn btn-danger act-del" data-toggle="modal" data-target="#delModal">Delete</button></td>
		        </tr>
		        <tr>
		            <td> Kenny </td>
		            <td> kenny@gmail.com </td>
		            <td> 0857123459 </td>
		            <td class="btn-user"><button class="btn btn-primary act-edit" id="edit-btn-user" data-toggle="modal" data-target="#userModal">Edit</button><button class="btn btn-danger act-del" data-toggle="modal" data-target="#delModal">Delete</button></td>
		        </tr> -->
		    </tbody>
		</table>
	<!-- </div> -->
</div>
@endsection