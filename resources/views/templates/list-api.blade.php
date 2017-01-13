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


	<table id="api-table" class="display table table-bordered table-responsive" cellspacing="0" width="100%">
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
                <td> 331546621 </td>
                <td> Ipsum </td>
                <td><span class="act-read btn-sign" data-toggle="modal" data-target=".modal-signature"> Read <i class="glyphicon glyphicon-chevron-right"></i></span></td>
                <td><span class="act-read btn-param" data-toggle="modal" data-target=".modal-parameter"> Read <i class="glyphicon glyphicon-chevron-right"></i> </span></td>
                <td> 24/12/12 7:57:02 </td>
                <td> 24/12/12 8:57:02 </td>
                <td>
                    <span class="btn-api act-red"> Change to on Proccess </span>
                </td>
            </tr>
            <tr>
                <td> 2 </td>
                <td> https://mapi.dompetku.com/belipulsaindosat </td>
                <td> 123447892 </td>
                <td> Ipsum </td>
                <td><span class="act-read btn-sign" data-toggle="modal" data-target=".modal-signature"> Read <i class="glyphicon glyphicon-chevron-right"></i></span>
                <td><span class="act-read btn-param" data-toggle="modal" data-target=".modal-parameter"> Read <i class="glyphicon glyphicon-chevron-right"></i></span>
                <td> 24/12/12 7:57:02 </td>
                <td> 24/12/12 8:57:02 </td>
                <td><span class="btn-api act-red"> Change to on Proccess </span></td>
            </tr>
            <tr>
                <td> 3 </td>
                <td> https://mapi.dompetku.com/belipulsaindosat </td>
                <td> 213456897 </td>
                <td> Ipsum </td>
                <td><span class="act-read btn-sign" data-toggle="modal" data-target=".modal-signature"> Read <i class="glyphicon glyphicon-chevron-right"></i></span>
                <td><span class="act-read btn-param" data-toggle="modal" data-target=".modal-parameter"> Read <i class="glyphicon glyphicon-chevron-right"></i></span>
                <td> 24/12/12 7:57:02 </td>
                <td> 24/12/12 8:57:02 </td>
                <td><span class="btn-api act-red"> Change to on Proccess </span></td>
            </tr>
            <tr>
                <td> 4 </td>
                <td> https://mapi.dompetku.com/belipulsaindosat </td>
                <td> 54698732 </td>
                <td> Ipsum </td>
                <td><span class="act-read btn-sign" data-toggle="modal" data-target=".modal-signature"> Read <i class="glyphicon glyphicon-chevron-right"></i></span>
                <td><span class="act-read btn-param" data-toggle="modal" data-target=".modal-parameter"> Read <i class="glyphicon glyphicon-chevron-right"></i></span>
                <td> 24/12/12 7:57:02 </td>
                <td> 24/12/12 8:57:02 </td>
                <td><span class="btn-api act-red"> Change to on Proccess </span></td>
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