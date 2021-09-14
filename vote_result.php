<?php include ('head.php');?>
<?php include ('sess.php');?>

<body>

    <div id="row">
        <?php 
			include ('side_bar.php');
			if(ISSET($_POST['submit']))
				{
					if(!ISSET($_POST['pres_id']))
					{
						$_SESSION['pres_id'] = "";
					}
					else
					{
						$_SESSION['pres_id'] = $_POST['pres_id'];
					}
					if(!ISSET($_POST['vp_id']))
					{
						$_SESSION['vp_id'] = "";
					}
					else
					{
						$_SESSION['vp_id'] = $_POST['vp_id'];
					}
					if(!ISSET($_POST['gn_sec_id']))
					{
						$_SESSION['gn_sec_id'] = "";
					}
					else
					{
						$_SESSION['gn_sec_id'] = $_POST['gn_sec_id'];
					}
					if(!ISSET($_POST['agn_sec_id']))
					{
						$_SESSION['agn_sec_id'] = "";
					}
					else
					{
						$_SESSION['agn_sec_id'] = $_POST['agn_sec_id'];
					}
					if(!ISSET($_POST['sec_st_id']))
					{
						$_SESSION['sec_st_id'] = "";
					}
					else
					{
						$_SESSION['sec_st_id'] = $_POST['sec_st_id'];
					}
					if(!ISSET($_POST['sec_ia_id']))
					{
						$_SESSION['sec_ia_id'] = "";
					}
					else
					{
						$_SESSION['sec_ia_id'] = $_POST['sec_ia_id'];
					}
					if(!ISSET($_POST['sec_lit_id']))
					{
						$_SESSION['sec_lit_id'] = "";
					}
					else
					{
						$_SESSION['sec_lit_id'] = $_POST['sec_lit_id'];
					}
					if(!ISSET($_POST['sec_cu_id']))
					{
						$_SESSION['sec_cu_id'] = "";
					}
					else
					{
						$_SESSION['sec_cu_id'] = $_POST['sec_cu_id'];
					}
					if(!ISSET($_POST['mem_id']))
					{
						$_SESSION['mem_id'] = "";
					}
					else
					{
						$_SESSION['mem_id'] = $_POST['mem_id'];
					}
				}
		?>
    </div>
			<center>
		  <div class="col-lg-8" style = "margin-left:240px;" >
		  <div class = "alert alert-info">
			<label>PRESIDENT</label>
			<br />
			<?php
				if(!$_SESSION['pres_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[pres_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-success" >
			<label>VICE PRESIDENT</label>
			<br />
			<?php
				if(!$_SESSION['vp_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[vp_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-info">
			<label>GENERAL SECRETARY</label>
			<br/>
			<?php
				if(!$_SESSION['gn_sec_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[gn_sec_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
				
			</div>
			<div class = "alert alert-success" >
			<label>ASSISTANT GENERAL SECRETARY</label>
			<br />
			<?php
				if(!$_SESSION['agn_sec_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[agn_sec_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info">
			
			<label>SECRETRY, SCIENCE AND TECHNOLOGY</label>
			<br />
			<?php
				if(!$_SESSION['sec_st_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[sec_st_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-success">
			<label>SECRETARY, INTERNATIONAL AFFIARS</label>
			<br />
			<?php
				if(!$_SESSION['sec_ia_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[sec_ia_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info" >
			<label>SECRETARY, LITERATURE</label>
			<br />
			<?php
				if(!$_SESSION['sec_lit_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[sec_lit_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-success">
			<label>SECRETARY, CULTURE</label>
			<br />
			<?php
				if(!$_SESSION['sec_cu_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[sec_cu_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
				
			</div>
			<div class = "alert alert-info">
			<label>MEMBER</label>
			<br />
			<?php
				if(!$_SESSION['mem_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[mem_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<br />
			<button type = "submit" style="margin-bottom: 40px" data-toggle = "modal" data-target = "#result" class = "btn btn-success" >Submit Final Vote</button>
		</div>
	</center>
	<div class="modal fade" id = "result" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">         
												
											</h4>
										</div>
										
										
                                        <div class="modal-body">
										<p class = "alert alert-danger">Are you sure you want to submit your Votes? </p>
                                    </div>
									
									<div class="modal-footer">
								<a href = "submit_vote.php"><button type = "submit" class="btn btn-success"><i class="icon-check"></i>&nbsp;Yes</button></a>
								<a href = "vote.php"><button class="btn btn-danger" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Back</button></a>
									</div>
									</div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
</body>
<?php include ('script.php')?>
</html>

