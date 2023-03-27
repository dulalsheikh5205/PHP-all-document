
  /* 
  Create an HTML page that displays a table with two columns: "Name" and "Age". The table should have three rows with the following information:

John, 25

Sarah, 30

Mike, 28

Also, add a form that asks for the user's name and age, and has a submit button that displays the user's input in the table.
  
  */     
  
  <!DOCTYPE html>
<html>
<head>
	<title>Table with User Input</title>
</head>
<body>
	<table>
		<tr>
			<th>Name</th>
			<th>Age</th>
		</tr>
		<tr>
			<td>John</td>
			<td>25</td>
		</tr>
		<tr>
			<td>Sarah</td>
			<td>30</td>
		</tr>
		<tr>
			<td>Mike</td>
			<td>28</td>
		</tr>
	</table>
	<form>
		<label for="name">Name:</label>
		<input type="text" id="name" name="name"><br><br>
		<label for="age">Age:</label>
		<input type="text" id="age" name="age"><br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
