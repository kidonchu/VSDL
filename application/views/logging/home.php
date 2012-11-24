<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN'  'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en-US' lang='en-US'>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo $title ?> - Log</title>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <style type="text/css">
            /* -----------------------------------*/
            /* ---------->>> Reset <<<------------*/
            /* -----------------------------------*/
            body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,textarea,p,blockquote,th,td {margin:0;padding:0;}
            table {border-spacing:0;}
            fieldset,img {border:0;}
            address,caption,cite,code,dfn,em,strong,th,var {font-style:normal;font-weight:normal;}
            caption,th {text-align:left;}
            h1,h2,h3,h4,h5,h6 {font-size:100%;font-weight:normal;}
            abbr,acronym { border:0;}
            a {text-decoration: none;}
            ol, ul, li {border: 0;}

            /* -----------------------------------*/
            /* ---------->>> GLOBAL <<<-----------*/
            /* -----------------------------------*/
            body {
                color: #222;
                font: 13px/18px "Arial", Helvetica, sans-serif;
            }

            table {
                border: 1px solid #CCC;
                padding: 20px;
            }

            th {
                font-size: 1.1em;
                font-weight: bold;
            }
            td, th {
                padding: 3px 10px;
                vertical-align: top;
            }

            form {
                margin-top: 20px;
                width: 98%;
            }

            ul, ol {
                margin-left: 20px;
            }
            textarea {
                width: 98%;
                height: 200px;
                padding: 10px;
            }

            input[type=submit] {
                width: 100%;
                padding: 10px 0;
                outline: 0;
            }
            /* -----------------------------------*/
            /* ---------->>> Structure <<<--------*/
            /* -----------------------------------*/
            #wrapper {
                margin: 0 auto;
                width: 1100px;
            }
            #header {
                margin: 20px 0;
                width: 170px;
            }
                #header h1 {
                    font-family: "Arial", Helvetica, sans-serif;
                    font-size: 40px;
                    line-height: 80px;
                }
            #cnt {
            }
            #footer {
                clear: both;
                margin: 20px 0;
                text-align: center;
            }
                #footer div {
                    margin: 10px 0;
                }
        </style>
    </head>
    <body>
        <div id="wrapper">
            <div id="header"><h1>Daily Log</h1></div>
            <div id="cnt">
                <table id="logtable">
                    <thead><tr><th>Data/Time</th><th>Log</th></tr></thead>
                    <?php foreach($logs as $log): ?>
                        <tr>
                            <td><?php echo $log['timeTime']; ?></td>
                            <td><?php echo $log['strLog']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <form method="post" action="logging/record">
                    <textarea name="log"></textarea>
                    <input type="submit" value="Submit"/>
                </form>
            </div>
            <div id="footer">
                <strong>&copy; 2012 kidonchu.com</strong>
            </div>
        </div>
        <script type="text/javascript"></script>
    </body>
</html>

<!--
End of file home.php
Location: ./application/views/login/home.php
-->