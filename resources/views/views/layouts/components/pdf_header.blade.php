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

table{
    width: 100%;
    border-collapse: collapse;
}

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
	padding: 1px;
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
	color: #ba0c2f;
}
footer {
	position: fixed; 
	bottom: -60px; 
	left: 0px; 
	right: 0px;
	height: 50px; 

	/** Extra personal styles **/
	background-color: #ba0c2f;
	color: white;
	text-align: center;
	line-height: 35px;
}
</style>
</head>
<body>

 <table class="heading" border="0" width="100%">
 	<tr>
 	<td>
 		<h1>{{$title ?? 'Data Export'}}</h1>
        @if(@$search)
 		<h4>From {{$search->from}} to {{$search->to}}</h4>
        @endif
 	</td>
 	</tr>
 </table>

 <hr>
