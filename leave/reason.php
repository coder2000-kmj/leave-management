<?php
                if(isset($_GET['username'],$_GET['subject'],$_GET['reason'])){
                    $username=$_GET['username'];
                    $subject=$_GET['subject'];
                    $reason=$_GET['reason'];
                }
                // Create connection
                $con=mysqli_connect("localhost","root","root","leave");
                $sql = "insert into reason values('$username','$subject','$reason');";
                $result = $con->query($sql);
                
                if ($result) {
                   echo '<script> type="text/javascript">';
                   echo 'alert("New Record Created successfully");';
                   echo 'window.location.href="apply-leave.php"';
                   echo '</script>';
                  
                
                    } else{
                        echo "Something went wrong. Please try again later.";
                    }
                
              
            
                 
    
?> 