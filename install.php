<?php

echo '<form method="POST" action="" name="databaseConfiguration">';
echo '<input type="text" name="admin_input_db_host" placeholder="Hostname" />';
echo '<input type="text" name="admin_input_db_name" placeholder="Database Name" />';
echo '<input type="text" name="admin_input_db_user" placeholder="Database Username" />';
echo '<input type="password" name="admin_input_db_pass" placeholder="Database Password" />';
echo '<input type="submit" name="databaseConfiguration" value="Submit" />';
echo '</form>';

if(isset($_POST['databaseConfiguration'])) {
$admin_input_db_host = $_POST['admin_input_db_host'];
$admin_input_db_name = $_POST['admin_input_db_name'];
$admin_input_db_user = $_POST['admin_input_db_user'];
$admin_input_db_pass = $_POST['admin_input_db_pass'];

$config = array(
	"host" => $admin_input_db_host,
    "database" => $admin_input_db_name,
    "user"     => $admin_input_db_user,
	"password" => $admin_input_db_pass
);

function writeConfig( $filename, $config ) {
    $fh = fopen($filename, "w");
    if (!is_resource($fh)) {
        return false;
    }
    foreach ($config as $key => $value) {
        fwrite($fh, sprintf("%s = %s\n", $key, $value));
    }
    fclose($fh);

    return true;
}

function readConfig( $filename ) {
    return parse_ini_file($filename, false, INI_SCANNER_NORMAL);
}
$random = rand(0,2000000);
var_dump(writeConfig("database.ini", $config));
echo '<script>window.location.href="/?id='.$random.'";</script>';
}

?>