@extends('/templates/navbar')
@section('content')
<div class="col-xs-12 col-md-10 display-table-cell valign-top alt-style">
	<h3 class="judul">Daftar API Airtime:</h3>
	
	<div class="row head-title">
		<div class="col-md-9">
			<div class="form-group">
	          <input type="text" class="form-control cari filter" id="filter" placeholder="Search here">
	        </div>
		</div>
		<!-- <div class="col-md-3">
			<div class="tambah" data-toggle="modal" data-target="#tambahApiModal" data-whatever="@mdo">
				<h3>Tambah API <span>+</span> </h3>
			</div>
			<div class="modal fade" id="tambahApiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="exampleModalLabel">Tambah API</h4>
			      </div>
			      <div class="modal-body">
			        <form>
			          <div class="form-group">
			            <label for="category-name" class="control-label">Category Name:</label>
			            <select type="text" class="form-control" id="recipient-name">
			            	<option value="promo">Promo</option>
			            	<option value="promo">Bill</option>
			            	<option value="promo">Airtime</option>
			            	<option value="promo">Transfer</option>
			            </select>
			          </div>
			          <div class="form-group">
			          	<label for="url-name" class="control-label">URL Name:</label>
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
		</div> -->
	</div>


	<table id="api-table" class="display table table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>URL HIT API</th>
            <th>trx_id</th>
            <th>ext ref</th>
            <th>Signature</th>
            <th>Parameter</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> 1 </td>
            <td> https://mapi.dompetku.com/belipulsaindosat </td>
            <td> Lorem </td>
            <td> Ipsum </td>
            <td><span class="act-read"> Read <i class="glyphicon glyphicon-chevron-right"></i></span></td>
            <td><span class="act-read"> Read <i class="glyphicon glyphicon-chevron-right"></i> </span></td>
            <td> 24/12/12 7:57:02 </td>
            <td> 24/12/12 8:57:02 </td>
            <td><span class="act-yellow"> Change to on Proccess </span></td>
        </tr>
        <tr>
            <td> 2 </td>
            <td> https://mapi.dompetku.com/belipulsaindosat </td>
            <td> Lorem </td>
            <td> Ipsum </td>
            <td><span class="act-read"> Read <i class="glyphicon glyphicon-chevron-right"></i></span>
            <td><span class="act-read"> Read <i class="glyphicon glyphicon-chevron-right"></i></span>
            <td> 24/12/12 7:57:02 </td>
            <td> 24/12/12 8:57:02 </td>
            <td><span class="act-yellow"> Change to on Proccess </span></td>
        </tr>
        <tr>
            <td> 3 </td>
            <td> https://mapi.dompetku.com/belipulsaindosat </td>
            <td> Lorem </td>
            <td> Ipsum </td>
            <td><span class="act-read"> Read <i class="glyphicon glyphicon-chevron-right"></i></span>
            <td><span class="act-read"> Read <i class="glyphicon glyphicon-chevron-right"></i></span>
            <td> 24/12/12 7:57:02 </td>
            <td> 24/12/12 8:57:02 </td>
            <td><span class="act-yellow"> Change to on Proccess </span></td>
        </tr>
        <tr>
            <td> 4 </td>
            <td> https://mapi.dompetku.com/belipulsaindosat </td>
            <td> Lorem </td>
            <td> Ipsum </td>
            <td><span class="act-read"> Read <i class="glyphicon glyphicon-chevron-right"></i></span>
            <td><span class="act-read"> Read <i class="glyphicon glyphicon-chevron-right"></i></span>
            <td> 24/12/12 7:57:02 </td>
            <td> 24/12/12 8:57:02 </td>
            <td><span class="act-yellow"> Change to on Proccess </span></td>
        </tr>
    </tbody>
</table>
</div>
@endsection