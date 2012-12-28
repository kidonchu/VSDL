<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Log - VSDL</title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>
            if (typeof jQuery == 'undefined') document.write(unescape("%3Cscript src='<?php echo $base_url; ?>script/jquery-1.8.2.min.js' type='text/javascript'%3E%3C/script%3E"));
        </script>
        <script src="<?php echo $base_url; ?>script/DataTables-1.9.4/jquery.dataTables.js"></script>

        <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>css/DataTables-1.9.4/jquery.dataTables.css" />
    </head>
    <body>
        <div id="wrapper">
            <header><h1>Very Simple Daily Log</h1></header>
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
                            <td class="date"><?php echo $log[ 'Date' ]; ?></td>
                            <td class="date"><?php echo $log[ 'Time' ]; ?></td>
                            <td class="cat"><?php echo $log[ 'Cat' ]; ?></td>
                            <td class="log"><?php echo $log[ 'Log' ]; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <form class="log" method="post" action="log/record">
                    <div><label>Choose Category : </label>
                        <select name="sCat">
                            <?php foreach ( $cats as $cat ): ?>
                                <option value="<?php echo $cat; ?>"><?php echo $cat; ?></option>
                            <?php endforeach; ?>
                        </select>
                        or <label>Add new Category : </label>
                        <input type="text" name="itCat" class="it" /></div>
                    <div>
                    </div>
                    <div><textarea name="tLog"></textarea></div>
                    <div><input type="submit" class="is" value="Submit"/></div>
                </form>
            </div>
        </div>
        <script type="text/javascript">
            var tableOption = {
                "sPaginationType": "full_numbers",
                "aaSorting": [[0, "asc"], [1, "asc"]],
                "iDisplayLength": 10,
                "iDisplayStart": ( <?php echo count( $logs ); ?> - 10 ) // Show 10 most recent records
                //                "bPaginate": false,
                //                "bInfo": false
                //    "bFilter": false
            };
            $( ".dataTable" ).dataTable( tableOption );
        </script>
    </body>
</html>

<!--
End of file log_home.php
Location: ./application/views/log_home.php
-->