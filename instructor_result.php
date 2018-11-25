<html> <head>
<title>Instuctor</title> </head>
<body>
<h1>Instuctor Search Results</h1> <?php
// create short variable names
$firstname=$HTTP_POST_VARS['firstname'];
$lastname=$HTTP_POST_VARS['lastname'];
$department=$HTTP_POST_VARS['department'];

$firstname = trim($searchterm);
$lastname = trim($lastname);
$department = trim($department);

if (!$firstname && !$lastname && !$department)
{
 	echo 'You have not entered search details. Please go back and try again.';
 	exit; 
}


// connect to the database 

@ $db = mysql_pconnect('localhost', 'username', 'password');



if (!$db) {
echo 'Error: Could not connect to database. Please try again later.';
exit; }


mysql_select_db('professor');
$query = "select * from professor where ".$Lastname." like '%".$lastname."%' AND ".$Firstname." like '%".$firstname."%'"; 
$result = mysql_query($query);
$num_results = mysql_num_rows($result);
echo '<p>Number of Professors found: '.$num_results.'</p>';

for ($i=0; $i <$num_results; $i++) {
$row = mysql_fetch_array($result);
echo '<br />Firstname: ';
echo stripslashes($row['Firstname']);
echo '<br />Lastname: ';
echo stripslashes($row['Lastname']);
echo '<br />Department: ';
echo stripslashes($row['Department']);
echo '<br />Rating: ';
echo stripslashes($row['Rating']);

echo '</p>';
} ?>
</body>
</html>