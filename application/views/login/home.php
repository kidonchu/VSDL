<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN'  'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en-US' lang='en-US'>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo $title ?> - Log</title>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript">
        if (typeof jQuery == 'undefined') document.write(unescape("%3Cscript src='script/jquery-1.8.2.min.js' type='text/javascript'%3E%3C/script%3E"));
        </script>
        <style type="text/css">
            /* -----------------------------------*/
            /* ---------->>> Reset <<<------------*/
            /* -----------------------------------*/
            body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,textarea,p,blockquote,th,td {margin:0;padding:0;}
            table {border-spacing:0;}
            fieldset,img {border:0;}
            address,caption,cite,code,dfn,em,strong,th,var {font-style:normal;font-weight:normal;}
            ol,ul {list-style:none;}
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

            /* -----------------------------------*/
            /* ---------->>> Structure <<<--------*/
            /* -----------------------------------*/
            #wrapper {
                margin: 0 auto;
                width: 660px;
            }
            #header {
                margin: 20px auto;
                width: 170px;
            }
                #header h1 {
                    font-family: "Arial", Helvetica, sans-serif;
                    font-size: 40px;
                    line-height: 80px;
                }
            #cnt {
                border: 1px solid #CCC;
                padding: 20px 20px 0px 20px
            }
            #qs {
                clear: both;
                margin: 10px auto;
                width: 600px;
            }
                #qs label {
                    display: block;
                    float: none;
                    width: 100%;
                }
                #qs .qs_col {
                    float: left;
                    width: 200px
                }
                #qs .qs_block {
                    margin: 0 0 10px 0;
                }
            #footer {
                clear: both;
                margin: 20px 0;
                text-align: center;
            }
                #footer div {
                    margin: 10px 0;
                }
            /* -----------------------------------*/
            /* ---------->>> Forms <<<------------*/
            /* -----------------------------------*/
            form {}
            form fieldset {
                padding: 0 0 10px 0;
            }
            form fieldset div {

            }
            form fieldset div label {
                float: left;
                font-weight: bold;
                width: 200px;
            }
            form fieldset div select.selectOne {
                margin: 0 0 0 10px;
                width: 140px;
            }
            form fieldset div input.inputText {
                margin: 0 0 0 10px;
                width: 100px;
            }
            form fieldset label.labelCheckbox {
                font-weight: normal;
            }
            form fieldset label.labelCheckbox input.inputCheckbox {
                margin: 0 5px 5px 0;
                vertical-align: middle;
            }
            form fieldset div button.inputButton,
            form fieldset div input.inputSubmit {
                border: 1px solid #9A9A9A;
                border-radius: 4px;
                box-shadow: inset 0 1px 0 rgba(255, 255, 255, 1), 0 1px 0 rgba(0, 0, 0, 0.09);
                cursor: pointer;
                float: left;
                font: 0.9em/16px "Lucida Grande", "Lucida Sans Unicode", sans-serif;
                margin: -5px 0 0 20px;
                outline: 0;
                padding: 5px;
            }
            form fieldset div button.inputButton:hover ,
            form fieldset div input.inputSubmit:hover {
                background-color: #CCC;
            }
            form fieldset.submit {
                border: none;
            }
            form fieldset.submit div button.inputButton,
            form fieldset.submit div input.inputSubmit {
                margin: 5px 10px;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
            <div id="header"><h1>Daily Log</h1></div>
            <div id="cnt">
                <form class="login" action='login/log_in' method='post' accept-charset='UTF-8'>
                    <fieldset>
                        <div><label for='username' >Username :<input type='text' name='username' id='username' maxlength="50" class="inputText" /></label></div>
                        <div><label for='password' >Password :<input type='password' name='password' id='password' maxlength="50" class="inputText" /></label></div>
                        <div class="submit"><input type='submit' class="inputSubmit" value='Log In' /></div>
                    </fieldset>
                </form>
                <p class="error"><?php echo $err; ?></p>
            </div>
            <div id="footer">
                <strong>&copy; 2012 kidonchu.com</strong>
            </div>
        </div>
        <script type="text/javascript">
            $("#username").focus();
        </script>
    </body>
</html>

<!--
End of file home.php
Location: ./application/views/login/home.php
-->