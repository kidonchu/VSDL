<div id="cnt">
    <div><a class="bttn" href="<?php echo site_url('log/new_log'); ?>">Add New</a></div>
    <table class="dataTable">
        <thead>
            <tr>
                <th class="date">Date</th>
                <th class="time">Time</th>
                <th class="cat">Category</th>
                <th class="log">Log</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ( $logs as $log ): ?>
            <tr>
                <td class="date"><?php echo $log['Date']; ?></td>
                <td class="date"><?php echo $log['Time']; ?></td>
                <td class="cat"><?php echo $log['Cat']; ?></td>
                <td class="log"><?php echo $log['Log']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script type="text/javascript">
    var display_length = 5;
    var tableOption = {
        "sPaginationType": "full_numbers",
        "aaSorting": [[0, "asc"], [1, "asc"]],
        "iDisplayLength": display_length,
        "aLengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
        "iDisplayStart": ( Math.abs(<?php echo count($logs); ?> - display_length) ) // Show most recent records
        // abs function is needed when # of logs are less than 10 (no negative number allowed)
    };
    
    $(".dataTable").dataTable(tableOption);

    SyntaxHighlighter.all();
</script>

<!-- End of file home.php -->
<!-- Location: ./application/views/log/home.php -->