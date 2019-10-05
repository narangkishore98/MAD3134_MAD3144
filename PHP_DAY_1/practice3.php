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
                            <label>Number</label>
                        </td>
                        <td>
                            <label><input type="text" name="hw" /></label>
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
                function isPrime($number)
                {
                    for($var = 2; $var<=sqrt($number);$var++)
                    {
                        if($number%$var == 0)
                        {
                            return false;
                        }
                    }
                    return true;
                }
                if(isset($_POST['hw']))
                {
                   if(is_numeric($_POST['hw']) )
                   {
                        $nums = 2;
                        for($var = 2; $var<$_POST['hw'];$var++)
                        {
                            if(isPrime($var))
                            {
                                echo($var." |  ");
                      
                            }
                        }

                   }
                   else if(empty($_POST['hw']))
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