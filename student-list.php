<!-- //<?php
//global $wpdb;
//$alldata = $wpdb->get_results(
    //$wpdb->prepare("SELECT * FROM crud_table", ARRAY_A),
    
//);
//?>


<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    //<?php
    //$i = 0;
    //foreach ($alldata as $value){?>
    <tr>
        <td>test</td>
        <td>test</td>
        <td>Test</td>
        <td>test</td>
    </tr>
   // <?php} ?>

</table> -->
<?php
global $wpdb;
$alldata = $wpdb->get_results("SELECT * FROM crud_table", ARRAY_A);
?>

<table style="border: 1px solid green; width: 80%; margin:0 auto ;border-collapse: collapse;">
    <tr>
        <th style="border: 1px solid black; padding: 5px;">Id</th>
        <th style="border: 1px solid black; padding: 5px;">Name</th>
        <th style="border: 1px solid black; padding: 5px;">Email</th>
        <th style="border: 1px solid black; padding: 5px;">Action</th>
    </tr>
    <?php foreach ($alldata as $value) { ?>
        <tr>
            <td style="border: 1px solid black; padding: 5px;"><?php echo esc_html($value['id']); ?></td>
            <td style="border: 1px solid black; padding: 5px;"><?php echo esc_html($value['name']); ?></td>
            <td style="border: 1px solid black; padding: 5px;"><?php echo esc_html($value['email']); ?></td>
            <td style="border: 1px solid black; padding: 5px;"> <a href="?page=student-add&action=edit&id=<?php echo $value['id'];?>">Edit</a>|Delete</td>
        </tr>
    <?php } ?>
</table>
