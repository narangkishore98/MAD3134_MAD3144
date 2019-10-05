<html>
    <head>
        <title>PHP Test 1</title>
        <style>
            input[type=submit], input[type=reset], input[type=text]
{
    width: 100%;
}

h2,h3{
    text-align:center;
}
td
{
    text-align: right;
}
table{
    background-color:lightblue;
    padding:20px;
    box-shadow: 0 0 10px lightblue;
    border-radius: 20px;
}
input{
    padding: 5px;
   
}
h3
{
    border-left:10px solid rgb(243, 65, 65);
    padding: 15px 5px;
    background-color: rgb(255, 164, 164);
    
}

        </style>
    </head>
    <body>
        <?php
            $error = "no-error";
            $result = "NO RESULT";

            if(isset($_POST["plus"]))
            {
                if(isset($_POST["n1"]) && isset($_POST["n2"]))
                {
                    if((!empty($_POST["n1"]) && !empty($_POST["n2"]))  || ($_POST["n1"]=="0" || $_POST["n2"] == "0"))
                    {
                            if((is_numeric($_POST["n1"]) && is_numeric($_POST["n2"])) )
                            {                            $n1 = floatval($_POST["n1"]);
                            $n2 = floatval($_POST["n2"]);
                            
                            $result= $n1+$n2;

                  
                        }
                        else
                        {
                       
                            $error = "invalid-arguments";
                        
                        }
                    }
                    else
                {
                   $error = "no-arguments";

                  
                }
                }
                
            }
            else if(isset($_POST["minus"]))
            {
                if(isset($_POST["n1"]) && isset($_POST["n2"]))
                {
                    if((!empty($_POST["n1"]) && !empty($_POST["n2"]))  || ($_POST["n1"]=="0" || $_POST["n2"] == "0"))
                    {
                            if(is_numeric($_POST["n1"]) && is_numeric($_POST["n2"]) )
                            {                            $n1 = floatval($_POST["n1"]);
                            $n2 = floatval($_POST["n2"]);
                            
                            $result= $n1-$n2;

                  
                        }
                        else
                        {
                       
                            $error = "invalid-arguments";
                        
                        }
                    }
                    else
                {
                   $error = "no-arguments";

                  
                }
                }
                
            }
            else if(isset($_POST["divide"]))
            {
                if(isset($_POST["n1"]) && isset($_POST["n2"]))
                {
                    if((!empty($_POST["n1"]) && !empty($_POST["n2"]))  || ($_POST["n1"]=="0" || $_POST["n2"] == "0"))
                    {
                            if(is_numeric($_POST["n1"]) && is_numeric($_POST["n2"]) )
                            {                           
                            
                                try{
                                    $n1 = floatval($_POST["n1"]);
                                    $n2 = floatval($_POST["n2"]);
                                    if($n2 == 0.0)
                                    {
                                    $error = "division";

                                    }
                                    else
                                    {
                                    $result= $n1/$n2;
                                    }
                                 }
                                catch(Exception $e)
                                {
                                    $error = "division";
                                }
                            

                  
                        }
                        else
                        {
                       
                            $error = "invalid-arguments";
                        
                        }
                    }
                    else
                {
                   $error = "no-arguments";

                  
                }
                }
                
            }
            else if(isset($_POST["multiply"]))
            {
                if(isset($_POST["n1"]) && isset($_POST["n2"]))
                {
                    if((!empty($_POST["n1"]) && !empty($_POST["n2"]))  || ($_POST["n1"]=="0" || $_POST["n2"] == "0"))
                    {
                            if(is_numeric($_POST["n1"]) && is_numeric($_POST["n2"]) )
                            {                            $n1 = floatval($_POST["n1"]);
                            $n2 = floatval($_POST["n2"]);
                            
                            $result= $n1*$n2;
                    

                  
                        }
                        else
                        {
                       
                            $error = "invalid-arguments";
                        
                        }
                    }
                    else
                {
                   $error = "no-arguments";

                  
                }
                }
                
            }
            elseif(isset($_POST["clear"]))
            {
                /* if(isset($_POST["n1"]) && isset($_POST["n2"]))
                {
                    if(!empty($_POST["n1"]) && !empty($_POST["n2"]))
                    {
                            if(is_numeric($_POST["n1"]) && is_numeric($_POST["n2"]) )
                            {                            $n1 = floatval($_POST["n1"]);
                            $n2 = floatval($_POST["n2"]);
                            
                            $result= $n1+$n2;

                  
                        }
                        else
                        {
                       
                            $error = "invalid-arguments";
                        
                        }
                    }
                    else
                {
                   $error = "no-arguments";

                  
                }
                }
                */
                $result = "";
                $_POST["n1"] = "";
                $_POST["n2"] = "";
          
                
            }
        ?>
        <center>
            
            <form action="" method="POST">
            <table width="40%" cellspacing="10">
                <tr>
                    <td colspan="4">
                    <h2>Simple Calculator</h2>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Number 1:
                    </td>
                    <td colspan="2">
                        <input type="text" name="n1" id="num1" value="<?php
                                if(isset($_POST["n1"]))
                                {
                                    echo($_POST["n1"]);
                                }
                        ?>" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Number 2:
                    </td>
                    <td colspan="2"> 
                        <input type="text" name="n2" id="num1" value="<?php
                                if(isset($_POST["n2"]))
                                {
                                    echo($_POST["n2"]);
                                }
                        ?>" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Result:
                    </td>
                    <td colspan="2">
                        <input type="text"    value="<?php
                            if(isset($_POST["plus"]) || isset($_POST["minus"]) || isset($_POST["divide"]) || isset($_POST["multiply"]))
                            {
                                echo($result);
                            }
                        ?>" readonly="readonly" disabled="disabled"/>
                    </td>
                </tr>
                <tr>
                   
                <td>
                        <input type="submit" name="plus" id="submit_button1" value="+"  />
                    </td>
                    <td>
                        <input type="submit" name="minus" id="submit_button2" value="-"  />
                    </td>
                    <td>
                        <input type="submit" name="divide" id="submit_button3" value="/"  />
                    </td>
                    <td>
                        <input type="submit" name="multiply" id="submit_button4" value="*"  />
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <input type="submit" name="clear" value="Clear All"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                      
                            <?php
                                if($error=="no-arguments")
                                {
                                    echo("  <h3>One or more values are missing</h3>");
                                }
                                else if($error=="invalid-arguments")
                                {
                                    echo("  <h3>One or more values are not numeric</h3>");
                                }
                                else if($error == "division")
                                {
                                    echo("  <h3>Cannot divide by 0</h3>");
                                    
                                }
                            ?>
                        
                        </td>
                        </tr>
            </table>
            </form>
        </center>
    </body>
</html>