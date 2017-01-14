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
	</div>

	<table id="api-table" class="table table-bordered responsive-table" cellspacing="0" width="100%">
        <thead>
            <tr id="headrow">
                <th scope="col">Id</th>
                <th scope="col">URL HIT API</th>
                <th scope="col">trx_id</th>
                <th scope="col">ext ref</th>
                <th scope="col">Signature</th>
                <th scope="col">Parameter</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row" data-label="Id"> 1 </td>
                <td data-label="URL HIT API"> https://mapi.dompetku.com/belipulsaindosat </td>
                <td data-label="trx_id"> 331546621 </td>
                <td data-label="ext ref"> Ipsum </td>
                <td data-label="Signature"><span class="act-read btn-sign" data-toggle="modal" data-target=".modal-signature"> Read <i class="glyphicon glyphicon-chevron-right"></i></span></td>
                <td data-label="Parameter"><span class="act-read btn-param" data-toggle="modal" data-target=".modal-parameter"> Read <i class="glyphicon glyphicon-chevron-right"></i> </span></td>
                <td data-label="Created at"> 24/12/12 7:57:02 </td>
                <td data-label="Updated at"> 24/12/12 8:57:02 </td>
                <td data-label="Action">
                    <span class="btn-api act-red"> Change to on Proccess </span>
                </td>
            </tr>

            <tr>
                <td scope="row" data-label="Id"> 2 </td>
                <td data-label="URL HIT API"> https://mapi.dompetku.com/belipulsaxl </td>
                <td data-label="trx_id"> 22334455 </td>
                <td data-label="ext ref"> Ipsum </td>
                <td data-label="Signature"><span class="act-read btn-sign" data-toggle="modal" data-target=".modal-signature"> Read <i class="glyphicon glyphicon-chevron-right"></i></span></td>
                <td data-label="Parameter"><span class="act-read btn-param" data-toggle="modal" data-target=".modal-parameter"> Read <i class="glyphicon glyphicon-chevron-right"></i> </span></td>
                <td data-label="Created at"> 24/12/12 7:57:02 </td>
                <td data-label="Updated at"> 24/12/12 8:57:02 </td>
                <td data-label="Action">
                    <span class="btn-api act-red"> Change to on Proccess </span>
                </td>
            </tr>

            <tr>
                <td scope="row" data-label="Id"> 3 </td>
                <td data-label="URL HIT API"> https://mapi.dompetku.com/belipulsaaxis </td>
                <td data-label="trx_id"> 52413330 </td>
                <td data-label="ext ref"> Ipsum </td>
                <td data-label="Signature"><span class="act-read btn-sign" data-toggle="modal" data-target=".modal-signature"> Read <i class="glyphicon glyphicon-chevron-right"></i></span></td>
                <td data-label="Parameter"><span class="act-read btn-param" data-toggle="modal" data-target=".modal-parameter"> Read <i class="glyphicon glyphicon-chevron-right"></i> </span></td>
                <td data-label="Created at"> 24/12/12 7:57:02 </td>
                <td data-label="Updated at"> 24/12/12 8:57:02 </td>
                <td data-label="Action">
                    <span class="btn-api act-red"> Change to on Proccess </span>
                </td>
            </tr>
            
        </tbody>
    </table>

    <!-- modal signature -->
    <div class="modal fade modal-signature" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Signature</h4>
              </div>
              <div class="modal-body textform">              
                      <textarea class="form-control custom-control form-sign" rows="3" readonly="readonly" style="resize: none">
                        
                      </textarea>
              </div>
        </div>
      </div>
    </div>
    <!-- end modal -->

    <!-- modal parameter -->
    <div class="modal fade modal-parameter" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Parameter</h4>
              </div>
              <div class="modal-body textform">              
                      <textarea class="form-control custom-control form-param" rows="3" readonly="readonly" style="resize: none">
                          
                      </textarea>
              </div>
        </div>
      </div>
    </div>
    <!-- end modal parameter -->

</div>
@endsection