<?php

    $names = array(
        "John",
        "Mary",
        "Carl",
        "Amy",
        "Mark"
    );
    $subjects = array(
        "Math",
        "English",
        "Geography",
        "History",
        "Biology"
    );

    $marks = array(
        array(87,72,73,90,84),
        array(82,77,94,88,80),
        array(61,84,71,76,67),
        array(74,76,55,64,98),
        array(93,81,86,89,83)
    );

    function transpose($array)
    {
        $returner = array();
        for($i = 0; $i<count($array);$i++)
        {
            $row = array();
            for($j = 0 ; $j<count($array); $j++)
            {
                $row[] = $array[$j][$i];
            }
            $returner[] = $row;
        }
        return $returner;
    }
    function getMinIndex($array)
    {
        $min = 0;
        for($i=0;$i<count($array);$i++)
        {
            if($array[$min]>$array[$i])
            {
                $min = $i;
            }
        }
        return $min;
    }
    function getMaxIndex($array)
    {
        $max = 0;
        for($i=0;$i<count($array);$i++)
        {
            if($array[$max]<$array[$i])
            {
                $max = $i;
            }
        }
        return $max;
    }
?>
<html>
    <head>
        <title>PHP Test 2</title>
        <style>
            tr:nth-child(1)
            {
                background-color:bisque;
            }
            tr:nth-child(2)
            {
                background-color:seagreen;
                color:white;
                text-align:center;
            }
            table {
                margin:20px;
            }
        </style>
    </head>
    <body>

        <?php
            //question 1
            //Print student names and averages.
            //calculating the average for all the studens
            $average_array_for_students = array();

            foreach($marks as $studentmarks)
            {
                $sumofmarks = 0;
                foreach($studentmarks as $mark)
                {
                    $sumofmarks += $mark;
                }
                $average_array_for_students[] = $sumofmarks/count($studentmarks);
            }
            //var_dump($average_array_for_students);

        ?>
        
        <center>
            
            <table width="50%" border="2">
                <tr>
                    <th colspan="2"><h1>Q1. Print Student Names and Averages</h1></th>
                </tr>
                <tr>
                    <td>Student Name</td>
                    <td>Average Marks</td>
                </tr>
                <?php
                    for($i=0;$i<count($average_array_for_students);$i++)
                    {
                ?>
                <tr>
                        <td><?php echo($names[$i]); ?></td>
                        <td><?php echo($average_array_for_students[$i]); ?></td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </center>



        <?php
            //question 2
            //For every student print high/low mark and course name.
            //calculating the average for all the studens
            $average_array_for_students = array();

            foreach(transpose($marks) as $coursemarks )
            {
                $sumofmarks = 0;
                foreach($coursemarks as $mark)
                {
                    $sumofmarks += $mark;
                }
                $average_array_for_students[] = $sumofmarks/count($studentmarks);
            }
            //var_dump($average_array_for_students);

        ?>
        
        <center>
            
            <table width="50%" border="2">
                <tr>
                    <th colspan="2"><h1>Q2. Print Course Names and Averages</h1></th>
                </tr>
                <tr>
                    <td>Course Name</td>
                    <td>Average Marks</td>
                </tr>
                <?php
                    for($i=0;$i<count($average_array_for_students);$i++)
                    {
                ?>
                <tr>
                        <td><?php echo($subjects[$i]); ?></td>
                        <td><?php echo($average_array_for_students[$i]); ?></td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </center>

   





        <?php
            //question 3
            //For every student print high/low mark and course name.
            //calculating the average for all the studens
            

            
            //var_dump($average_array_for_students);
            //reversing the array
            
        ?>
        
        <center>
            
            <table width="50%" border="2">
                <tr>
                    <th colspan="2"><h1>Q3. For every student print high/low mark and course name.</h1></th>
                </tr>
                <tr>
                    <td>Stundet Name</td>
                    <td>High / Low</td>
                </tr>
                <?php
                    for($i=0;$i<count($average_array_for_students);$i++)
                    {
                ?>
                <tr>
                        <td><?php echo($names[$i]); ?></td>
                        <td> High: <?php echo($marks[$i][getMaxIndex($marks[$i])]); ?> (<?php echo(($subjects[getMaxIndex($marks[$i])])); ?> ) <br/> Low: <?php echo($marks[$i][getMinIndex($marks[$i])]); ?> (<?php echo($subjects[getMinIndex($marks[$i])]); ?> ) </td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </center>




        <?php
            //question 4
            //For every course print high/low mark and student name.
            //calculating the average for all the studens
            

            
            //var_dump($average_array_for_students);
            
        ?>
        
        <center>
            
            <table width="50%" border="2">
                <tr>
                    <th colspan="2"><h1>Q4. For every course print high/low mark and student name.</h1></th>
                </tr>
                <tr>
                    <td>Course Name</td>
                    <td>High / Low</td>
                </tr>
                <?php
                    for($i=0;$i<count($average_array_for_students);$i++)
                    {
                ?>
                <tr>
                        <?php $reversemarks = transpose($marks)?>
                        <td><?php echo($subjects[$i]); ?></td>
                        <td> High: <?php echo($reversemarks[$i][getMaxIndex($reversemarks[$i])]); ?> (<?php echo(($names[getMaxIndex($reversemarks[$i])])); ?> ) <br/> Low: <?php echo($reversemarks[$i][getMinIndex($reversemarks[$i])]); ?> (<?php echo($names[getMinIndex($reversemarks[$i])]); ?> ) </td>
                    

                </tr>
                
                <?php
                    }
                ?>
            </table>
        </center>


        
        <?php
            //question 5
            //Print Course Names (and averages) that have a lower and hifher average than average of all courses.
            //calculating the average for all the studens
            $average_array_for_students = array();

            foreach(transpose($marks) as $coursemarks )
            {
                $sumofmarks = 0;
                foreach($coursemarks as $mark)
                {
                    $sumofmarks += $mark;
                }
                $average_array_for_students[] = $sumofmarks/count($studentmarks);
            }
            //var_dump($average_array_for_students);

        ?>
        
        <center>
            
            <table width="50%" border="2">
                <tr>
                    <th colspan="2"><h1>Q5. Print Course Names (and averages) that have a lower and higher average than average of all courses.</h1></th>
                </tr>
                <tr>
                    <td>Course Name</td>
                    <td>Results</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;"> Average Of All Courses: <?php echo(array_sum($average_array_for_students)/5);?></td>
                </tr>

                <tr>
                    <td colspan="2" style="text-align:center; background:lightgrey;">Below Average</td>
                </tr>
               
                <?php

                    for($i=0;$i<count($average_array_for_students);$i++)
                    {
             
                        if(array_sum($average_array_for_students)/5 > $average_array_for_students[$i])
                        {
                    ?>
                        <tr>
                            <td colspan="2" style="text-align:center;">Average Marks: <?php echo($average_array_for_students[$i]);?>  |  <?php echo($subjects[$i]);?>
                            
                        </td>
                </tr>
                    <?php        
                        }
             
                    }
                ?>
                  <tr>
                    <td colspan="2" style="text-align:center; background:lightgrey;">Above Average</td>
                </tr>
                <?php

                    for($i=0;$i<count($average_array_for_students);$i++)
                    {

                        if(array_sum($average_array_for_students)/5 < $average_array_for_students[$i])
                        {
                    ?>
                        <tr>
                            <td colspan="2" style="text-align:center;">Average Marks: <?php echo($average_array_for_students[$i]);?>  |  <?php echo($subjects[$i]);?>
                            
                        </td>
                    </tr>
                    <?php        
                        }

                    }
                    ?>
            </table>
        </center>           


        <?php
            //question 6
            //Print Course Names (and averages) that have a lower and hifher average than average of all courses.
            //calculating the average for all the studens
            $average_array_for_students = array();

            foreach(($marks) as $coursemarks )
            {
                $sumofmarks = 0;
                foreach($coursemarks as $mark)
                {
                    $sumofmarks += $mark;
                }
                $average_array_for_students[] = $sumofmarks/count($studentmarks);
            }
            //var_dump($average_array_for_students);

        ?>
        
        <center>
            
            <table width="50%" border="2">
                <tr>
                    <th colspan="2"><h1>Q6. Print Student Names (and averages) that have a lower and higher average than average of all students.</h1></th>
                </tr>
                <tr>
                    <td>Course Name</td>
                    <td>Results</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;"> Average Of All Students: <?php echo(array_sum($average_array_for_students)/5);?></td>
                </tr>

                <tr>
                    <td colspan="2" style="text-align:center; background:lightgrey;">Below Average</td>
                </tr>
               
                <?php

                    for($i=0;$i<count($average_array_for_students);$i++)
                    {
             
                        if(array_sum($average_array_for_students)/5 > $average_array_for_students[$i])
                        {
                    ?>
                        <tr>
                            <td colspan="2" style="text-align:center;">Average Marks: <?php echo($average_array_for_students[$i]);?>  |  <?php echo($names[$i]);?>
                            
                        </td>
                </tr>
                    <?php        
                        }
             
                    }
                ?>
                  <tr>
                    <td colspan="2" style="text-align:center; background:lightgrey;">Above Average</td>
                </tr>
                <?php

                    for($i=0;$i<count($average_array_for_students);$i++)
                    {

                        if(array_sum($average_array_for_students)/5 < $average_array_for_students[$i])
                        {
                    ?>
                        <tr>
                            <td colspan="2" style="text-align:center;">Average Marks: <?php echo($average_array_for_students[$i]);?>  |  <?php echo($names[$i]);?>
                            
                        </td>
                    </tr>
                    <?php        
                        }

                    }
                    ?>
            </table>
        </center>           










        
        <?php
            //question 7
            //For every student print courses that they scored higher/lower than student average.
            //calculating the average for all the studens
            $average_array_for_students = array();

            foreach(($marks) as $coursemarks )
            {
                $sumofmarks = 0;
                foreach($coursemarks as $mark)
                {
                    $sumofmarks += $mark;
                }
                $average_array_for_students[] = $sumofmarks/count($studentmarks);
            }
            //var_dump($average_array_for_students);

        ?>
        
        <center>
            
            <table width="50%" border="2">
                <tr>
                    <th colspan="2"><h1>Q7. For every student print courses that they scored higher/lower than student average.</h1></th>
                </tr>
                <tr>
                    <td>Student Name</td>
                    <td>Results</td>
                </tr>
                <?php
                    for($i=0;$i<count($average_array_for_students);$i++)
                    {
                ?>
                <tr>
                        <td><?php echo($names[$i]); ?></td>
                        <td>Average Marks: <?php echo($average_array_for_students[$i]);?>
                            <ul>
                                <li>Below Average
                                    <ol>

                                            
                                        <?php 
                                            $studentmarks = $marks[$i];
                                            for($j=0;$j<count($studentmarks);$j++) 
                                            {
                                              
                                                if($average_array_for_students[$i]>$studentmarks[$j])
                                                {
                                                    echo("<li>$studentmarks[$j] ($subjects[$j])</li>");
                                             
                                                }
                                                
                                            }
                                        ?>
                                    </ol>
                                </li>
                                <li>
                                        Above Average
                                        <ol>

                                            
                                        <?php 
                                            $studentmarks = $marks[$i];
                                            for($j=0;$j<count($studentmarks);$j++) 
                                            {
                                              
                                                if($average_array_for_students[$i]<=$studentmarks[$j])
                                                {
                                                    echo("<li>$studentmarks[$j] ($subjects[$j])</li>");
                                             
                                                }
                                                
                                            }
                                        ?>
                                    </ol>
                                </li>
                            </ul>
                        </td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </center>
        



        <?php
            //question 8
            //For every course print students that have scored higher/lower than course average.
            //calculating the average for all the studens
            $average_array_for_students = array();

            foreach(transpose($marks) as $coursemarks )
            {
                $sumofmarks = 0;
                foreach($coursemarks as $mark)
                {
                    $sumofmarks += $mark;
                }
                $average_array_for_students[] = $sumofmarks/count($studentmarks);
            }
            //var_dump($average_array_for_students);

        ?>
        
        <center>
            
            <table width="50%" border="2">
                <tr>
                    <th colspan="2"><h1>Q8. For every course print students that have scored higher/lower than course average.</h1></th>
                </tr>
                <tr>
                    <td>Course Name</td>
                    <td>Results</td>
                </tr>
                <?php
                    for($i=0;$i<count($average_array_for_students);$i++)
                    {
                ?>
                <tr>
                        <td><?php echo($subjects[$i]); ?></td>
                        <td>Average Marks: <?php echo($average_array_for_students[$i]);?>
                            <ul>
                                <li>Below Average
                                    <ol>

                                            
                                        <?php 
                                            $studentmarks = transpose($marks)[$i];
                                            //var_dump($studentmarks);
                                            for($j=0;$j<count($studentmarks);$j++) 
                                            {
                                              
                                                if($average_array_for_students[$i]>$studentmarks[$j])
                                                {
                                                    echo("<li>$studentmarks[$j] ($names[$j])</li>");
                                             
                                                }
                                                
                                            }
                                        ?>
                                    </ol>
                                </li>
                                <li>
                                        Above Average
                                        <ol>

                                            
                                        <?php 
                                            $studentmarks = transpose($marks)[$i];
                                            for($j=0;$j<count($studentmarks);$j++) 
                                            {
                                              
                                                if($average_array_for_students[$i]<=$studentmarks[$j])
                                                {
                                                    echo("<li>$studentmarks[$j] ($names[$j])</li>");
                                             
                                                }
                                                
                                            }
                                        ?>
                                    </ol>
                                </li>
                            </ul>
                        </td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </center>



    </body>
</html>