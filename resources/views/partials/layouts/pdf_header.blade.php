<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<style>
body {
	font-family: Arial;
	font-size: 12pt;
	max-height:29.7cm;
	display: flex;
	justify-content: center;
}
.wrapper{
	max-width:21cm;
	width: 8.5in;
	display: block;
}
p {	margin: 0pt; }
table.items {
	border: 0.1mm solid #000000;
}

 td {
	border-left: 0.2mm solid #000000;
	border-right: 0.2mm solid #000000;
}
table thead th { 
	background-color: #000000;
	text-align: center;
	border: 0.1mm solid #000000;
	/*font-variant: small-caps;*/
}

tr td {
	border: 0.2mm solid #000000;
	padding: 4px;
}

tr td, tr th{
	font-size: medium;
}
tr th{
	font-weight: lighter;
	color: #ffffff;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

.row{
	display: flex;
	justify-content: space-between;
	width: 100%;
}
.heading tr td{
	border: 0px;
}
h1{
	color: #25AA4D;
}
footer {
	position: fixed; 
	bottom: -60px; 
	left: 0px; 
	right: 0px;
	height: 50px; 

	/** Extra personal styles **/
	background-color: #25AA4D;
	color: white;
	text-align: center;
	line-height: 35px;
}
</style>
</head>
<body>

 <table class="heading" border="0" width="100%">
 	<tr>
 	<td><img src="{{asset('images/logo.png') }}" width="100px" alt=""></td>
 	<td>
 		<h1>Cashawo Agent Statement</h1>
 		<h4>From {{$search->start}} to {{$search->end}}</h4>
 		<h4>{{ __('reports.starting_balance') }}: {{ __('general.mycurrency')}} 
			{{ number_format($start_balance->balance,2) }}</h4>
	    <h4>{{ __('reports.closing_balance') }}: {{ __('general.mycurrency')}} 
			{{ number_format($close_balance->balance,2) }}</h4>
		
 	</td>
 	</tr>
 </table>

 <hr>
