<html>
    <head>
        <title>Practice Test 1</title>
        <style>
            .main-box 
            {
                width:70%;
                border: 2px solid blue;
                padding:10px;
                margin:10px auto;
            }
            td 
            {
                text-align:center;

            }
            h1 
            {
                text-align:center;
            }
            .danger 
            {
                color:red;
            }
        </style>
        <script>
            function submitForm()
            {
                
                var a1 = document.getElementsByTagName("input")[0];
                var a2 = document.getElementsByTagName("input")[1];
                var a3 = document.getElementsByTagName("input")[2];
                
                return true;
            }
        </script>

    </head>
    <body>
        <div class="main-box">
            <form onsubmit="return submitForm()" method="POST">
                <center>
                    <h1>Please Enter Marks</h1>
                <table>
                    <tr>
                        <td>
                            <label>Assignemnt 1</label>
                        </td>
                        <td>
                            <label><input type="text" name="a1" /></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Assignemnt 2</label>
                        </td>
                        <td>
                            <label><input type="text" name="a2" /></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Assignemnt 3</label>
                        </td>
                        <td>
                            <label><input type="text" name="a3" /></label>
                        </td>
                    </tr>
                    <tr>
                       
                        <td colspan="2">
                            <label><input type="submit" /></label>
                        </td>
                    </tr>
                </table>
                </center>
            </form>
            <?php
                if(isset($_POST['a1']) && isset($_POST['a2']) && isset($_POST['a3']))
                {
                   if(is_numeric($_POST['a1']) && is_numeric($_POST['a2']) && is_numeric($_POST['a3']))
                   {
                    $result = ($_POST['a1'] + $_POST['a2'] + $_POST['a3'] )/ 3;
                    $result = number_format($result,2);
                    echo("<h1>The Average Marks are: $result</h1>");
                   }
                   else if(empty($_POST['a1']) && empty($_POST['a2']) && empty($_POST['a3']))
                   {
                       echo("<h1 class='danger'>Please Enter All Values.</h1>");
                   }
                   else
                   {
                    echo("<h1 class='danger'>Please Enter Correct Values.</h1>");
                   }
                }
               
                
            ?>
        </div>
    </body>
</html>