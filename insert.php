
<?
if (isset($_POST['insert'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $file_path = 'data.txt';

    $data = "$email, $pass\n";

    $file_handle = fopen($file_path, 'a');

    fwrite($file_handle, $data);

    fclose($file_handle);
}
?>