@extends('/templates/navbar')
@section('content')
<div class="col-xs-12 col-md-10 display-table-cell valign-top">
	<div class="row" id="button-api">
		<div class="col-md-6 button-1">
			<h2>total live api</h2>
			<h1>80</h1>
		</div>
		<div class="col-md-6 button-1">
			<h2>total down api</h2>
			<h1>0</h1>
		</div>
	</div>

	<div class="row" id="button-error">
		<div class="col-md-4 button-2">
			<h1>90</h1>	
			<h2>Days no error</h2>
		</div>
		<div class="col-md-4 button-2">
			<h1>7</h1>	
			<h2>Error found this month</h2>
		</div>
		<div class="col-md-4 button-2">
			<h2>Fastest time to solve</h2>
			<h1>30</h1>	
			<h2>minutes</h2>
		</div>
	</div>
</div>
@endsection