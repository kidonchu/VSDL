<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN'  'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en-US' lang='en-US'>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo $title ?> - Log</title>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript">
        if (typeof jQuery == 'undefined') document.write(unescape("%3Cscript src='script/jquery-1.8.2.min.js' type='text/javascript'%3E%3C/script%3E"));
        </script>
        <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>css/style.css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="header"><h1>Very Simple Daily Log</h1></div>
            <div id="cnt">
                <table>
                    <thead><tr><th class="date"><div>Data/Time</div></th><th class="log"><div>Log</div></th></tr></thead>
                    <?php foreach($logs as $log): ?>
                        <tr>
                            <td class="date"><div><?php echo $log['timeTime']; ?></div></td>
                            <td class="log"><div><?php echo $log['strLog']; ?></div></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <form method="post" action="logging/record">
                    <textarea name="log"></textarea>
                    <input type="submit" value="Submit"/>
                </form>
            </div>
        </div>
        <script type="text/javascript"></script>
    </body>
</html>

<!--
End of file home.php
Location: ./application/views/login/home.php
-->