<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Stores</title>
		<style type="text/css">
			table.stores {
				width: 100%;
			}
			table.stores thead {
				background-color: #eee;
				text-align: left;

			}
			#click {
				border: solid 1.5px #000000;
				padding: 6px;
				background-color: #C0C0C0C0;

			}
			
			table.stores thead th {
				border: solid 1px #fff;
				padding: 3px;
			}
			table.stores tbody td {
				border: solid 1px #eee;
				padding: 3px;
			}
			a, a:hover, a:active, a:visited {
				color: #ff6347;

			}
		</style>
	</head>
	<body>
		<h3>Store Information</h3>
		<div><a id='click' href="index.php?op=new" >Add store information</a></div><br>
			<table class="store" border="2" cellpadding="3" cellspacing="3">
				<thead>
					<tr>
						<th>Store Name </th>
						<th>Phone </th>
						<th>Street </th>
						<th>City </th>
						<th>State </th>
						<th>Pin Code </th>
						<th>Open Time </th>
						<th>Close Time </th>
						<th>Created At </th>
						<th>Latitude </th>
						<th>Longitude </th>



					</tr>
				</thead>

				<tbody>
					<?php foreach ($stores as $store) : ?>
						<tr>
							<td><?php echo htmlentities($store->name); ?></a></td>
							<td><?php echo htmlentities($store->phone); ?></td>
							<td><?php echo htmlentities($store->street); ?></td>
							<td><?php echo htmlentities($store->city); ?></td>
							<td><?php echo htmlentities($store->state); ?></td>
							<td><?php echo htmlentities($store->pin); ?></td>
							<td><?php echo htmlentities($store->open_time); ?></td>
							<td><?php echo htmlentities($store->close_time); ?></td>
							<td><?php echo htmlentities($store->created_at); ?></td>
							<td><?php echo htmlentities($store->latitude); ?></td>
							<td><?php echo htmlentities($store->longitude); ?></td>
							<td><a  href="index.php?op=edit&id=<?php echo $store->id; ?>" >Edit</a></td>
							<td><a  href="index.php?op=delete&id=<?php echo $store->id; ?>"  onclick="return confirm('Do you want to delete this?');">Delete</a></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
	</body>
</html>
