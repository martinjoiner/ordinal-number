<?php

include( 'src/OrdinalNumber.php' );

use MartinJoiner\OrdinalNumber\OrdinalNumber as OrdinalNumber;

$pageTitle = 'Demonstration of OrdinalNumber PHP Class';

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
			padding: 0 1.3em;
			line-height: 2em;
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
	
	<code>
		<p>function convert( $num, $appendAnd = false, $titleCase = false )</p>
	</code>

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
				<td class="code">print OrdinalNumber::convert(1);</td>
				<td><?=OrdinalNumber::convert(1)?></td>
			</tr>
			<tr>
				<td>Just convert 378</td>
				<td class="code">print OrdinalNumber::convert(378);</td>
				<td><?=OrdinalNumber::convert(378)?></td>
			</tr>
			<tr>
				<td>Just convert 40</td>
				<td class="code">print OrdinalNumber::convert(40);</td>
				<td><?=OrdinalNumber::convert(40)?></td>
			</tr>
			<tr>
				<td>Just convert 400</td>
				<td class="code">print OrdinalNumber::convert(400);</td>
				<td><?=OrdinalNumber::convert(400)?></td>
			</tr>
			<tr>
				<td>Just convert 4000</td>
				<td class="code">print OrdinalNumber::convert(4000);</td>
				<td><?=OrdinalNumber::convert(4000)?></td>
			</tr>
			<tr>
				<td>Just convert 4000 with the &quot;and&quot; added (no effect)</td>
				<td class="code">print OrdinalNumber::convert(4000,true);</td>
				<td><?=OrdinalNumber::convert(4000,true)?></td>
			</tr>
			<tr>
				<td>Convert 872 in title case</td>
				<td class="code">print OrdinalNumber::convert(872,false,true);</td>
				<td><?=OrdinalNumber::convert(872,false,true)?></td>
			</tr>
			<tr>
				<td>Convert 9278</td>
				<td class="code">print OrdinalNumber::convert(9278);</td>
				<td><?=OrdinalNumber::convert(9278)?></td>
			</tr>
			<tr>
				<td>Convert 9278 with the &quot;and&quot; added</td>
				<td class="code">print OrdinalNumber::convert(9278,true);</td>
				<td><?=OrdinalNumber::convert(9278,true)?></td>
			</tr>
			<tr>
				<td>Convert 101</td>
				<td class="code">print OrdinalNumber::convert(101);</td>
				<td><?=OrdinalNumber::convert(101)?></td>
			</tr>
			<tr>
				<td>Convert 101 with the &quot;and&quot; added</td>
				<td class="code">print OrdinalNumber::convert(101,true);</td>
				<td><?=OrdinalNumber::convert(101,true)?></td>
			</tr>
			<tr>
				<td>Convert 10 with the &quot;and&quot; added</td>
				<td class="code">print OrdinalNumber::convert(10,true);</td>
				<td><?=OrdinalNumber::convert(10,true)?></td>
			</tr>
			<tr>
				<td>Convert 9999 with the &quot;and&quot; added and in title case</td>
				<td class="code">print OrdinalNumber::convert(9999,true,true);</td>
				<td><?=OrdinalNumber::convert(9999,true,true)?></td>
			</tr>
		</tbody>
	</table>


	<h2>Sources</h2>

	<p><a href="https://github.com/martinjoiner/ordinal-number">https://github.com/martinjoiner/ordinal-number</a></p>
	<p><a href="https://packagist.org/packages/martinjoiner/ordinal-number">https://packagist.org/packages/martinjoiner/ordinal-number</a></p>
	

	<h2>List of examples in increments of 7</h2>

	<ul>
		<?php
		for ( $i = 1; $i < 9999; $i = $i + 7 ){
			print "<li>" . number_format( $i ) . " = " . OrdinalNumber::convert($i, true, true) . "</li>";
		}
		?>
	</ul>

</body>
</html>
