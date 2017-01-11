<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vesperia</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/list-api.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/user.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/parsley.css') }}">
	<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{{ asset('/js/bootstrap.min.js') }}}"></script>
    <script src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="{{{ asset('/js/main.js') }}}"></script>
    <script src="{{{ asset('/js/parsley.min.js') }}}"></script>
</head>
<body>
	<div class="container-fluid display-table">
		<div class="row display-table-row">
			<div class="col-xs-2 col-md-2 display-table-cell valign-top" id="side-menu">
				<img src="{{ asset('/img/logo.png') }}" class="img-responsive logo-admin visible-img">

				<!--mobile-->
				<div class="mobile-nav btn btn-danger btn-lg">
					<span class="hamburger glyphicon glyphicon-menu-hamburger"  aria-hidden="true" ></span>
				</div>
				<div class="mobile-close">
					<div class="closebtn"></div>
				</div>
				<!--end mobile-->

				<ul class="list-style visible-nav" id="link">
					<li class="menu {{ Request::is('/') ? 'active' : '' }}">
						<a href="/" class="bullet"><span>Overview</span></a>
					</li>

					<li class="{{ Request::is('list-api') ? 'active' : '' }}">
						<a href="/list-api" class="bullet-red"><span>Errors</span></a>
					</li>

					<li class="{{ Request::is('user-table') ? 'active' : '' }}">
						<a href="/user-table" class="bullet"><span>User</span></a>
					</li>
				</ul>								
			</div>

			<!--modal tambah category-->
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
			<!--end modal tambah categoty-->

			@yield('content')

		</div>
	</div>
</body>
</html>