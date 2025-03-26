<?php
global $wpdb;
$msg = "";
if (isset($_POST['btnsubmit'])) {
    $wpdb->insert("crud_table", array(
        'name' => $_POST['name'],
        'email' => $_POST['email'],
    ));
    if ($wpdb->insert_id > 0) {
        $msg = "Data  Saved Successfully!";
    } else {
        $msg = "Data  Failled !";
    }
}
?>
<p><?php echo $msg; ?></p>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>?page=student-add" method="POST">
    <p>
        <label for="">Name:</label>
        <input type="text" name="name">
    </p>
    <p>
        <label for="">Email:</label>
        <input type="email" name="email">
    </p>
    <p>
        <label for=""></label>
        <button name="btnsubmit"> Submit</button>
    </p>
</form>