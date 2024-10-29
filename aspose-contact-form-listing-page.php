<?php
global $wpdb;
$sql = " SELECT * FROM " .$wpdb->prefix."apc_shortcodes ORDER BY id DESC ";
$result_set = $wpdb->get_results($sql);

?>
<h2>List of ShortCodes Generated by Plugin</h2>
<div class="wrap">
    <table cellspacing="10" cellpadding="10" style="border: none;border-collapse: collapse;" border="1">
        <tr>
            <th>#</th>
            <th>Excel File Name</th>
            <th>Entry Form ShortCode</th>
            <th>Listing Records ShortCode</th>
        </tr>

        <?php if(is_array($result_set)) { ?>
            <?php foreach($result_set as $row) { ?>
                <tr>
                    <td><?php echo esc_html($row->id); ?></td>
                    <td><?php echo esc_html($row->filename); ?></td>
                    <td>[apc action="entry" filename="<?php echo esc_html($row->filename); ?>"]</td>
                    <td>[apc action="list" filename="<?php echo esc_html($row->filename); ?>"]</td>

                </tr>
            <?php } ?>

        <?php } else { ?>
                <tr>
                    <td colspan="4">No Record Found</td>
                </tr>
        <?php } ?>
    </table>

</div>