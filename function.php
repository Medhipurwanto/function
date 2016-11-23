<table border="1">
<tr>
	<th rowspan="2">Input</th>
	<th colspan="5">Output</th>
</tr>
<tr>
	<th>A</th>
	<th>E</th>
	<th>I</th>
	<th>U</th>
	<th>O</th>
</tr>
<tr>
	<td>
		<?php
		$n1="M.EDHI PURWANTO";
		echo $n1
		?>
	</td>
	<td>
		<?php
		echo substr_count($n1,"A");
		?>
		</td>
	<td>
		<?php
		echo substr_count($n1,"E");
		?>
	</td>
	<td>
		<?php
		echo substr_count($n1,"I");
		?>
	</td>

		<?php
		echo substr_count($n1,"U");
		?>
	</td>
	<td>
		<?php
		echo substr_count($n1,"O");
		?>
	</td>
		</td>
	<td>
		<?php
		echo substr_count($n1,"O");
		?>
	</td>
</table>
