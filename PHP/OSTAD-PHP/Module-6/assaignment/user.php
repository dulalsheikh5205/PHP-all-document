<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
</head>
<body>
	<h2>Users</h2>
	<table>
		<thead>
			<tr>
				<th>Name</th>
                <th>Email</th>
				<th>Profile Picture</th>
				<th>Date Registered</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// Read user data from CSV file
			$users = array_map('str_getcsv', file('users.csv'));
			foreach ($users as $user) {
				echo '<tr>';
				echo '<td>' . $user[0] . '</td>';
				echo '<td>' . $user[1] . '</td>';
				echo '<td><img src="uploads/' . $user[2] . '" width="50"></td>';
				echo '<td>' . $user[3] . '</td>';
				echo '</tr>';
			}
			?>
		</tbody>
	</table>
</body>
</html>

				
