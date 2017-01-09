@extends('/templates/navbar')
@section('content')
<div class="col-xs-12 col-md-10 display-table-cell valign-top alt-style">
	<h3 class="judul">Daftar API Airtime:</h3>
	
	<div class="row head-title">
		<div class="col-md-9">
			<div class="form-group">
	          <input type="text" class="form-control cari" placeholder="Search here">
	        </div>
		</div>
		<div class="col-md-3">
			<div class="tambah" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
				<h3>Tambah API <span>+</span> </h3>
			</div>
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="exampleModalLabel">New message</h4>
			      </div>
			      <div class="modal-body">
			        <form>
			          <div class="form-group">
			            <label for="recipient-name" class="control-label">Recipient:</label>
			            <input type="text" class="form-control" id="recipient-name">
			          </div>
			          <div class="form-group">
			            <label for="message-text" class="control-label">Message:</label>
			            <textarea class="form-control" id="message-text"></textarea>
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Send message</button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</div>


	<table id="api-table" class="display table table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Status</th>
            <th>URL HIT API</th>
            <th>Last Checked</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="bullet"><span></span></td>
            <td> https://mapi.dompetku.com/belipulsaindosat </td>
            <td>5 minutes ago (24/12/12 7:57:02)</td>
            <td><span class="check">Check Now</span></td>
        </tr>
        <tr>
            <td class="bullet"><span></span></td>
            <td> https://mapi.dompetku.com/belipulsaindosat </td>
            <td>5 minutes ago (24/12/12 7:57:02)</td>
            <td><span class="check">Check Now</span></td>
        </tr>
        <tr>
            <td class="bullet"><span></span></td>
            <td> https://mapi.dompetku.com/belipulsaindosat </td>
            <td>5 minutes ago (24/12/12 7:57:02)</td>
            <td><span class="check">Check Now</span></td>
        </tr>
        <tr>
            <td class="bullet"><span></span></td>
            <td> https://mapi.dompetku.com/belipulsaindosat </td>
            <td>5 minutes ago (24/12/12 7:57:02)</td>
            <td><span class="check">Check Now</span></td>
        </tr>                
    </tbody>
</table>
</div>
@endsection