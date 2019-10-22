<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0055)https://pragyan.org/18/home/events/robovigyan/rushhour/ -->
<html>
    <head>
        <?php include 'inc.php'; ?>
        <?php include 'connect.php'; ?>

    		<!--<link rel="stylesheet" href="./choose_files/commonf700.css">-->
		
    
    <style>

        .swing {
  
            
    float:left;
    position: relative;
    left:80px;
    box-shadow: 5px 5px 10px rgba(0,0,0,0.5);
}
.swing img {
    border: 5px solid #f8f8f8;
    display: block;
}
.swing:after{
    content: '';
    position: absolute;  
    width: 20px; height: 20px;  
    border: 1px solid #999;
    top: -10px; left: 50%;
    z-index: 0;
    border-bottom: none;
    border-right: none;
    transform: rotate(45deg);
}
/* nail */
.swing:before{
    content: '';
    position: absolute;
    width: 5px; height: 5px;
    top: -14px;left: 54%;
    z-index: 5;
    border-radius: 50% 50%;
    background: #000;
}
 
@keyframes swing {
    0% { transform: rotate(3deg); }
    100% { transform: rotate(-3deg); }
}
        
        
        
 
        #hdg{
            font-size: 50px;
            font-family: showcard gothic;
        }   
        .rname{
            font-family: showcard gothic;
            font-size: 20px;
            color: white;
            
        }       
        

        
        
        
        .rad > input{ /* HIDE ORG RADIO & CHECKBOX */
  visibility: hidden;
  position: absolute;
}
/* RADIO & CHECKBOX STYLES */
.rad > i{     /* DEFAULT <i> STYLE */
  display: inline-block;
  vertical-align: middle;
  width:  16px;
  height: 16px;
  border-radius: 50%;
  transition: 0.2s;
  box-shadow: inset 0 0 0 8px #fff;
  border: 1px solid gray;
  background: gray;
}

.rad:hover > i{ /* HOVER <i> STYLE */
  box-shadow: inset 0 0 0 3px #fff;
  background: gray;
}
.rad > input:checked + i{ /* (RADIO CHECKED) <i> STYLE */
  box-shadow: inset 0 0 0 3px #fff;
  background: orange;
} 
        #rad1{
            position: relative;
            left:120px;
        } 
        #rad2{
            position: relative;
            left:180px;
        } 
        #rad3{
            position: relative;
            left:250px;
        } 
        #rad4{
            position: relative;
            left:320px;
        }
        #sbmit{
            
            position: relative;
            width: 150px;
            height: 50px;
        }
        
        
        
        
 
a{
	text-decoration:none;
}

#button{
	text-align:center;
	display:block;
	height:50px;
	width:175px;
	position: absolute;
    top: 550px;
    left: 550px;
	cursor:pointer;
	font-size:25px;
	color:#F0F0F0;
	border-radius:10px;
	border-bottom:4px solid #0045A6;
	box-shadow: 6px 6px 6px #999;
	
	-webkit-user-select: none;        
	-moz-user-select: none;
	-ms-user-select: none;
	-o-user-select: none;
	user-select: none;
	
	background: -webkit-linear-gradient(#00C8F8, #0067F7);
    background: -o-linear-gradient(#00C8F8, #0067F7);
    background: -moz-linear-gradient(#00C8F8, #0067F7);
    background: linear-gradient(#00C8F8, #0067F7);
	
	-webkit-transition: background 0.05s linear;  
    -moz-transition: background 0.05s linear;  
    -o-transition: background 0.05s linear;  
    transition: background 0.05s linear;
	
	background-size:1px 200px;
	
	transition: all .05s linear;
}

#button:hover{
	background-position:100px;
}

#button:active {
	box-shadow: 2px 2px 2px #777;
	border-bottom:1px solid #0045A6;
	transform: translateY(3px);
}
        label{
            font-size: 25px;
            font-family: showcard gothic;
            color:firebrick;
        }
        
        </style>
    

    <script>
        $( document ).ready(function() {
	var audio = $("#clickSound")[0];
	var audio2 = $("#clickSound2")[0];
	$("#button").mousedown(function() {
	  audio2.play();
	});
	$("#button").mouseup(function() {
	  audio.play();
	});
});
        </script>
    </head>    
    
<body background="wood.jpg">
    <center>
    <h1 id="hdg">Vote Your Favourite..!!</h1>
    </center><br><br><br>
    
    <form action="connect.php" method="post">
    <label class="swing rad" id="rad1">
        <img src="modi.jpg" width="200" height="250"><br><input type="radio" value="user1" name="user1" class="rname" /><i></i>User1
        </label>
        
    <label class="swing rad" id="rad2">
        <img src="rahul.jpg" width="200" height="250"><br><input type="radio" value="user2" name="user1" class="rname" /><i></i>User2
        </label>
    <label class="swing rad" id="rad3">
        <img src="kejriwal.jpg" width="200" height="250"><br><input type="radio" value="user3" name="user1" class="rname" /><i></i>User3
        </label>
    <label class="swing rad" id="rad4">
        <img src="mayawati.jpg" width="200" height="250"><br><input type="radio" value="user4" name="user1" class="rname" /><i></i>User4
        </label>  <br><br>
    
    
    
       
    
    
    <center>
        
	
        
       <input type="submit" name="uchoose" value="SUBMIT" id="button">

    </center>
    
    </form>
            
</body></html>