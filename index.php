<?php include ('head.php');?>
<body>
    <div class="container">
        <div class="row">
		
		<center><h3>Online Voting Sytem</h3></center>
        <center>
            ​<picture>
                <img src="./images/banner.jpg" width="350" height="150" alt="...">
                </picture>
        </center>
         
            <div class="col-md-4 col-md-offset-4" style="margin-top: -30px;">
			
                <div class="login-panel panel panel-default">
				
                    <div class="panel-heading">
                        <center><h3 class="panel-title"> Log In</h3></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data">
                            <fieldset>
							
                                <div class="form-group">
									<label for = "username" >ID No.</label>
										<input class="form-control" placeholder="Please Enter Voter's ID Number" name="idno" type="text" required = "required" autofocus>
                                </div>
								
                                <div class="form-group">
									<label for = "username" >Password</label>
										<input class="form-control" placeholder="Password" name="password" type="password" required = "required">
                                </div>
                             
                              
                                <button class="btn btn-lg btn-success btn-block " name = "login">Login</a>
								
								
                            </fieldset>
							
									<?php include ('login_query.php');?>
                        </form>
                        <h4><b>Note:</b> </h4>
                        <ol>
                            <li>১৮ বছর এর নিচে কেউ ভোট দিতে পারবেন না।</li>
                            <li> একজন ভোটার ১ বারই ভোটই দিতে পারবেন ২য় বার ভোট দিতে পারবেন না। </li>
                            <li> আপনার পছন্দের প্রার্থীকে ভোট দিয়েছেন কিনা ভালোভাবে দেখে নিন। </li>
                            <li>সৎ ও যোগ্য প্রার্থীকে ভোট দিন।</li>
                            <li>নির্বাচনের আচরণ বিধি মেনে চলুন।</li>
                            <li>সুস্থ, সুন্দর বাংলাদেশ গড়তে আপনার মূল্যবান ভোট প্রয়োগ করুন।</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <?php include ('script.php');?>

</body>

</html>
