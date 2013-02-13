<div id="cnt">
    <table class="dataTable">
        <thead>
            <tr>
                <th class="date">Date</th>
                <th class="time">Time</th>
                <th class="cat">Category</th>
                <th class="log">Log</th>
            </tr>
        </thead>
        <?php foreach ( $logs as $log ): ?>
            <tr>
                <td class="date"><?php echo $log['Date']; ?></td>
                <td class="date"><?php echo $log['Time']; ?></td>
                <td class="cat"><?php echo $log['Cat']; ?></td>
                <td class="log"><?php echo $log['Log']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<script type="text/javascript">
    // var tableOption = {
    //     "sPaginationType": "full_numbers",
    //     "aaSorting": [[0, "asc"], [1, "asc"]],
    //     "iDisplayLength": 10,
    //     "iDisplayStart": ( <?php echo count( $logs ); ?> - 10 ) // Show 10 most recent records
    //     //                "bPaginate": false,
    //     //                "bInfo": false
    //     //    "bFilter": false
    // };
    // $( ".dataTable" ).dataTable( tableOption );
</script>

<!-- End of file home.php -->
<!-- Location: ./application/views/log/home.php -->