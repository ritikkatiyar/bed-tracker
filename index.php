<?php
	require_once('header.php');
	require_once('connect.php');
	$error="";
?>  
<style>
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>




        <div id="containerHolder">
		
			<div id="container">
				
        		
                
                <!-- h2 stays for breadcrumbs -->
                <!-- <h2>User Login</h2> -->
				<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Login</button>
  
  <div id="myDropdown" class="dropdown-content">
    <a href="http://localhost/Hosptal-Bed-Management-master/hospital-bed-tracker/User.php">User login</a>
    <a href="http://localhost/Hosptal-Bed-Management-master/hospital-bed-tracker/index.php">Admin login</a>
   
  </div>
</div>
                
                <div id="main">
                <form method="post" class="jNice" name="frm1">
					<!-- <h3>Login Form</h3> -->
					
					
                    <?php
						if(isset($_POST['save']))
						{
							$uname=$_POST['uname'];
							$pword=$_POST['pword'];
							
							if($uname==""){ $error="<br><span class=error>Please enter a username</span><br><br>"; }
							elseif($pword==""){ $error="<br><span class=error>Please enter the password</span><br><br>"; }
							else
							{
								$result=mysqli_query($server,"SELECT * FROM users WHERE uname='$uname' AND pword='$pword'");
								if(mysqli_num_rows($result)==0){ $error="<br><span class=error>Invalid Username/Password</span><br><br>"; }
								else
								{
									$row=mysqli_fetch_array($result);
									session_start();
									$_SESSION['user_id']=$row['user_id'];
									$_SESSION['name']=$row['name'];
									Redirect('dashboard.php'); 
								}
							}
							if($error!=""){ echo $error; }
						}
					?>
                    	<fieldset>
							<br>
                            <p><label>Username:</label><input type="text" name="uname" class="text-long"  /></p>
                            <p><label>Password:</label><input type="password" name="pword" class="text-long" /></p>
                            <input type="submit" value="Log In" name="save" />
                        </fieldset>
                    </form>
                        <br /><br />
                </div>
				<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" >
    Chat with us
  </a>
  
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
	<style>
		#bot {
  margin: 50px 0;
  height: 700px;
  width: 450px;
  background: white;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 3px 3px 15px rgba(0, 0, 0, 0.2) ;
  border-radius: 20px;
}
#container1 {
  height: 90%;
  border-radius: 6px;
  width: 90%;
  background: #F3F4F6;
}
#header {
  width: 100%;
  height: 10%;
  border-radius: 6px;
  background: #3B82F6;
  color: white;
  text-align: center;
  font-size: 2rem;
  padding-top: 12px;
  box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
}
.messages {
  max-width: 60%;
  margin: .5rem;
  font-size: 1.2rem;
  padding: .5rem;
  border-radius: 7px;
}

/* Targeted styling for just user messages */
.user-message {
  margin-top: 1rem;
  text-align: left;
  background: #3B82F6;
  color: white;
  float: left;
}
.bot-reply {
  text-align: right;
  background: #E5E7EB;
  margin-top: 1rem;
  float: right;
  color: black;
  box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
}

/* Style the input area */
#inputArea {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 10%;
  padding: 1rem;
  background: transparent;
}
#userInput {
  height: 20px;
  width: 80%;
  background-color: white;
  border-radius: 6px;
  padding: 1rem;
  font-size: 1rem;
  border: none;
  outline: none;
  box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
}

/* Style send button */
#send {
  height: 50px;
  padding: .5rem;
  font-size: 1rem;
  text-align: center;
  width: 20%;
  color: white;
  background: #3B82F6;
  cursor: pointer;
  border: none;
  border-radius: 6px;
  box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
}
#body1 {
  width: 100%;
  height: 75%;
  background-color: #F3F4F6;
  overflow-y: auto;
}
.userSection {
  width: 100%;
}

/* Seperates user message from bot reply */
.seperator {
  width: 100%;
  height: 50px;
}

	</style>



  <div id="bot">
  <div id="container1">
    <div id="header">
        How can I help u!
    </div>

    <div id="body1">
        <!-- This section will be dynamically inserted from JavaScript -->
        <div class="userSection">
          <div class="messages user-message">

          </div>
          <div class="seperator"></div>
        </div>
        <div class="botSection">
          <div class="messages bot-reply">

          </div>
          <div class="seperator"></div>
        </div>                
    </div>

    <div id="inputArea">
      <input type="text" name="messages" id="userInput" placeholder="Please enter your message here" required>
      <input type="submit" id="send" value="Send">
    </div>
  </div>
  </div>

    
  </div>
</div>
				
				
					
                <!-- // #main -->
				<style>
					#containerHolder{
						background-color:#90EE90;
						text-align:center;
					}
					#main{
						background-color:	#ADD8E6;
						
                        }
					
					
					
				</style>
