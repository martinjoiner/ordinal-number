<?php

include( 'ordinal.class.php' );
$objOrdinal = new Ordinal();

$pageTitle = 'Demonstration of Ordinal PHP Class';

?><!DOCTYPE html>
<html>
<head>
	<title><?=$pageTitle?></title>

	<style type="text/css">
		body{
			font-family: arial, sans-serif;
		}
		table{
			border-collapse: collapse;
		}
		td, th{
			padding: 0 1.4em;
			line-height: 3em;
			border: 1px solid #CCC;
		}
		.code{
			font-family: monospace;
			background-color: #333;
			color: #EEE;
		}
	</style>
</head>
<body>

	<h1><?=$pageTitle?></h1>
	<h2>By Martin Joiner</h2>

	<p>function convert( $num, $appendAnd = false, $titleCase = false )</p>

	<table>
		<thead>
			<tr>
				<th>Scenario</th>
				<th>PHP code</th>
				<th>Resulting string</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Convert the number 1</td>
				<td class="code">print $objOrdinal-&gt;convert(1);</td>
				<td><?=$objOrdinal->convert(1)?></td>
			</tr>
			<tr>
				<td>Just convert 378</td>
				<td class="code">print $objOrdinal-&gt;convert(378);</td>
				<td><?=$objOrdinal->convert(378)?></td>
			</tr>
			<tr>
				<td>Just convert 400</td>
				<td class="code">print $objOrdinal-&gt;convert(400);</td>
				<td><?=$objOrdinal->convert(400)?></td>
			</tr>
			<tr>
				<td>Convert 872 in title case</td>
				<td class="code">print $objOrdinal-&gt;convert(872,false,true);</td>
				<td><?=$objOrdinal->convert(872,false,true)?></td>
			</tr>
			<tr>
				<td>Convert 9278</td>
				<td class="code">print $objOrdinal-&gt;convert(9278);</td>
				<td><?=$objOrdinal->convert(9278)?></td>
			</tr>
			<tr>
				<td>Convert 9278 with the &quot;and&quot; added</td>
				<td class="code">print $objOrdinal-&gt;convert(9278,true);</td>
				<td><?=$objOrdinal->convert(9278,true)?></td>
			</tr>
			<tr>
				<td>Convert 101</td>
				<td class="code">print $objOrdinal-&gt;convert(101);</td>
				<td><?=$objOrdinal->convert(101)?></td>
			</tr>
			<tr>
				<td>Convert 101 with the &quot;and&quot; added</td>
				<td class="code">print $objOrdinal-&gt;convert(101,true);</td>
				<td><?=$objOrdinal->convert(101,true)?></td>
			</tr>
			<tr>
				<td>Convert 10 with the &quot;and&quot; added</td>
				<td class="code">print $objOrdinal-&gt;convert(10,true);</td>
				<td><?=$objOrdinal->convert(10,true)?></td>
			</tr>
			<tr>
				<td>Convert 9999 with the &quot;and&quot; added and in title case</td>
				<td class="code">print $objOrdinal-&gt;convert(9999,true,true);</td>
				<td><?=$objOrdinal->convert(9999,true,true)?></td>
			</tr>
		</tbody>
	</table>

	<p><a href="https://github.com/martinjoiner/ordinal">https://github.com/martinjoiner/ordinal</a></p>

</body>
</html>
