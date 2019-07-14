<?php
$students = [
	[
		'id' => 1,
		'name' => 'ASASD',
		'age' => 1997,
		'add' => 'Ha Noi',
		'money' => 100000,
		'gender' => 1
	],
	[
		'id' => 2,
		'name' => 'BBBB',
		'age' => 1996,
		'add' => 'Hai Duong',
		'money' => 200000,
		'gender' => 0
	],
	[
		'id' => 3,
		'name' => 'TRTYRT',
		'age' => 1999,
		'add' => 'Ha Noi',
		'money' => 300000,
		'gender' => 0
	]
];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PHP demo</title>
	<style type="text/css" media="screen">
		.chan{
			background-color: green;
		}
		.le{
			background-color: blue;
		}
	</style>
</head>
<body>
	<h1>Thong tin sinh vien</h1>
	<br>
	<table width="100%" border="1" cellpadding="0" cellspacing="0">
		<thead>
			<tr>
				<th>MaSV</th>
				<th>Ho Ten</th>
				<th>Gioi tinh</th>
				<th>Nam sinh</th>
				<th>Dia chi</th>
				<th>Hoc bong</th>
			</tr>
		</thead>
		<tbody>
			<?php $totalMoney = 0; ?>
			<?php foreach($students as $key => $val): ?>
			<tr class="<?= ($key % 2 == 0) ? 'chan' : 'le'; ?>">
				<td><?= $val['id']; ?></td>
				<td>
					<?php echo htmlentities($val['name']); ?>
				</td>
				<?php if($val['gender'] == 1): ?>
				<td>
					Nam
				</td>
				<?php else: ?>
				<td>
					Nu
				</td>
				<?php endif; ?>
				<td>
					<?= $val['age']; ?>
				</td>
				<td>
					<?= $val['add']; ?>
				</td>
				<td>
					<?= number_format($val['money']); ?>
				</td>
			</tr>
				<?php $totalMoney += $val['money']; ?>
			<?php endforeach; ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="5">Tong hoc bong</td>
				<td><?= number_format($totalMoney); ?></td>
			</tr>
		</tfoot>
	</table>
</body>
</html>

