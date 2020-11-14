<?php
 echo "<table border=\"1\">";
        for ($row=1; $row<=101; $row++)
        {
            echo "<tr>";
            // echo "<td>$row</td>";
            for ($col=1; $col<=101; $col++)
            {
                $result = ($row-1)*($col-1);
                if($row==1 && $col==1)
                {
                  $new = 0;
                  echo "<td>$new</td>";
                }
                if($row==1 && $col!=101)
                {
                  $new = $col;
                  echo "<td>$new</td>";
                }
                else if($col==1)
                {
                  $new = $row-1;
                  echo "<td>$new</td>";
                }
                else
                {
                  echo "<td>$result</td>";
                }
            }
           echo "</tr>";
        }
  echo"</table>";
?>
