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
                text-align:center;
            }
            .green 
            {
                color:green;
                text-align:center;
            }
        </style>
        <script>
            function submitForm()
            {
                
                var hw = document.getElementsByTagName("input")[0];
                var hp = document.getElementsByTagName("input")[1];
                var a3 = document.getElementsByTagName("input")[2];
                
                return true;
            }
        </script>

    </head>
    <body>
        <div class="main-box">
            <form onsubmit="return submitForm()" method="POST">
                <center>
                    <h1>Enter Details</h1>
                <table>
                    <tr>
                        <td>
                            <label>Hours Worked</label>
                        </td>
                        <td>
                            <label><input type="text" name="hw" /></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Hourly Pay </label>
                        </td>
                        <td>
                            <label><input type="text" name="hp" /></label>
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
                if(isset($_POST['hw']) && isset($_POST['hp']))
                {
                   if(is_numeric($_POST['hw']) && is_numeric($_POST['hp']) )
                   {
                       $hw = $_POST['hw'];
                       $hp = $_POST['hp'];

                        if($hw<=40)
                        {
                            $rp = $hw * $hp;
                            $rp = "$".number_format($rp,2);
                            
                            echo("<p class='danger'>Overtime Pay: 0</p>");
                            echo("<p class='danger'>Regular Pay: $rp</p>");
                            echo("<p class='green'>Total Pay: $rp</p>");
                        }
                        else if($hw>40 && $hw<=50)
                        {
                            $rp = 40 * 1.5 * $hp;
                            $op = ( $hw - 40 ) * 1.5 * $hp;
                            $tp = $rp + $op;
                            $rp = "$".number_format($rp,2);
                            $op = "$".number_format($op,2);
                            $tp = "$".number_format($tp,2);
                            echo("<p class='danger'>Overtime Pay: $op</p>");
                            echo("<p class='danger'>Regular Pay: $rp</p>");
                            echo("<p class='green'>Total Pay: $tp</p>");
                        }
                        else if($hw>50 && $hw<=60)
                        {
                            $rp = 40 * 2 * $hp;
                            $op = ( $hw - 40 ) * 2 * $hp;
                            $tp = $rp + $op;
                            $rp = "$".number_format($rp,2);
                            $op = "$".number_format($op,2);
                            $tp = "$".number_format($tp,2);
                            echo("<p class='danger'>Overtime Pay: $op</p>");
                            echo("<p class='danger'>Regular Pay: $rp</p>");
                            echo("<p class='green'>Total Pay: $tp</p>");
                        }
                        else if($hw>60)
                        {
                            $rp = 40 * 2.5 * $hp;
                            $op = ( $hw - 40 ) * 2.5 * $hp;
                            $tp = $rp + $op;
                            $rp = "$".number_format($rp,2);
                            $op = "$".number_format($op,2);
                            $tp = "$".number_format($tp,2);
                            echo("<p class='danger'>Overtime Pay: $op</p>");
                            echo("<p class='danger'>Regular Pay: $rp</p>");
                            echo("<p class='green'>Total Pay: $tp</p>");
                        }
                    
                   }
                   else if(empty($_POST['hw']) && empty($_POST['hp']) )
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