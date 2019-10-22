<?php

     $dbServername="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbName="voting";
    $conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if(isset($_POST['uchoose']))
{
    if(isset($_POST['user1']))
    {
        $user1=$_POST['user1'];
     
        $sql="SELECT $user1 from count";
        $result=mysqli_query($conn,$sql);
         $resultcheck=mysqli_num_rows($result);
        $row=mysqli_fetch_assoc($result);
                
                if($resultcheck<1)
                {
                    echo("ERROR");
                }
                else
                {  
                            echo $_SESSION['username'];
                            $sql1="update count set $user1=$user1+1 where id=1";
                            $result1=mysqli_query($conn,$sql1);
                            header("location:loggedout.php");
                }
    
    }
    else {
        echo "<script type='text/javascript'>alert('Please Choose A Candidate..!!');</script>";
        echo "<script>setTimeout(\"location.href = 'choose.php';\",0);</script>";
        
    }
}
?>