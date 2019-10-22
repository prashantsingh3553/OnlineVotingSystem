<?php session_start();


     $dbServername="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbName="voting";
    $conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if(isset($_POST['login']))
{
    
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    
     
        $sql="SELECT * from login where username=$username";
        $result=mysqli_query($conn,$sql);
         $resultcheck=mysqli_num_rows($result);
        $row=mysqli_fetch_assoc($result);
                
                if($resultcheck<1)
                {
                    echo("Your details are not found in database");
                }
                else
                {
                    
                        if($row['password']==$password)
                        {   
                            $_SESSION=array();
							$_SESSION['name']=$row['name'];
                            $_SESSION['username']=$username;
                            header("location:choose.php");

                        }
                    
                    else
                    {
                        echo "<script type='text/javascript'>alert('Either your password/username is wrong or you have already voted.');</script>";
                        echo "Please Go Back..!!";
                        
                    }
                }
    
}




     $dbServername="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbName="voting";
    $conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if(isset($_POST['uchoose']))
{
    if(session_status()==PHP_SESSION_ACTIVE) {
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
                            $uname=$_SESSION['username'];
                            $sql1="update count set $user1=$user1+1 where id=1";
                            $result1=mysqli_query($conn,$sql1);
                            $sql2="delete from login where username=$uname";
                            $result2=mysqli_query($conn,$sql2);
                            session_destroy();
                            header("location:loggedout.php");
                }
    
    }
    else {
        echo "<script type='text/javascript'>alert('Please Choose A Candidate..!!');</script>";
        echo "<script>setTimeout(\"location.href = 'choose.php';\",0);</script>";
        
    }}
}
?>