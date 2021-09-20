
<?php include ('session.php');?>
<?php include ('head.php');?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">   
					
                </div>
				
				<hr/>
				
				<div class="panel panel-default">
				    <div class="panel-heading">
						<h4 class = "alert alert-success"> Result Report</h4>	
				    </div>
						
					<br/>
				    <form method="post" action="sort.php">
							
						<select name="position" id="position" class = "form-control pull-left" style = "width:300px;margin-left:19px; ">
							<option readonly>----Sort by Position----</option>
							<option>President</option>
							<option>Vice President</option>
							<option>General Secretary</option>
							<option>Assistant General Secretary</option>
							<option>Secretary, Science and Technology</option>
							<option>Secretary, International Affairs</option>
							<option>Secretary, Literature </option>
							<option>Secretary, Culture</option>
							<option>Member</option>
						</select>
							
							&nbsp;
							&nbsp;
						<button id ="sort" class = "btn btn-success">Sort</button><button type="button" onclick="window.print();" style = "margin-right:14px;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i> Print</button>	
					</form>	
				    <div class="panel-body">				
						<table class="table table-striped table-bordered table-hover ">
							<thead>
								<td style = "width:600px;" class = "alert alert-success">Candidate for President</td>
								<td style = "width:200px;"class = "alert alert-success">Image</td>
								<td style = "width:200px;"class = "alert alert-success">Symbol</td>
								<td class = "alert alert-success">Total</td>
							
							</thead>
							<?php
							require 'dbcon.php';
								$query = $conn->query("SELECT * FROM candidate WHERE position = 'President'");
							while($fetch = $query->fetch_array())
							{
								$id = $fetch['candidate_id'];
								$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
								$fetch1 = $query1->fetch_assoc();
								
							?>
							<tbody> 
								<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
								<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
								<td><img src = "<?php echo $fetch ['symbol'];?>" style = "width:40px; height:40px; border-radius:500px; " >
								<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
							<?php }?>
							</tbody>	
						</table>	
											
						<table class="table table-striped table-bordered table-hover ">
							<thead>
								<td style = "width:600px;"class = "alert alert-success">Candidate for Vice President</td>
								<td style = "width:200px;" class = "alert alert-success">Image</td>
								<td style = "width:200px;" class = "alert alert-success">Symbol</td>
								<td class = "alert alert-success">Total</td>
							
							</thead>
							<?php
							require 'dbcon.php';
							$query = $conn->query("SELECT * FROM candidate WHERE position = 'Vice President'");
							while($fetch = $query->fetch_array())
							{
								$id = $fetch['candidate_id'];
								$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
								$fetch1 = $query1->fetch_assoc();
								
							?>
							<tbody> 
								<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
								<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " > </td>
								<td><img src = "<?php echo $fetch ['symbol'];?>" style = "width:40px; height:40px; border-radius:500px; " > </td>
								<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
							<?php }?>
							</tbody>
									
									
						</table>	
							
							
						<table class="table table-striped table-bordered table-hover ">
							<thead>
								<td style = "width:600px;"class = "alert alert-success">Candidate for General Secretary</td>
								<td style = "width:200px;" class = "alert alert-success">Image</td>
								<td style = "width:200px;" class = "alert alert-success">Symbol</td>
								<td class = "alert alert-success">Total</td>
							
							</thead>
							<?php
							require 'dbcon.php';
							$query = $conn->query("SELECT * FROM candidate WHERE position = 'General Secretary'");
							while($fetch = $query->fetch_array())
							{
								$id = $fetch['candidate_id'];
								$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
								$fetch1 = $query1->fetch_assoc();
								
							?>
							<tbody> 
								<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
								<td>
									<img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
								</td>
								<td>
									<img src = "<?php echo $fetch ['symbol'];?>" style = "width:40px; height:40px; border-radius:500px; " >
								</td>
								<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
							<?php }?>
							</tbody>
						</table>	
							
										
						<table class="table table-striped table-bordered table-hover ">
							<thead>
								<td style = "width:600px;"class = "alert alert-success">Candidate for Assistant General Secretary</td>
								<td style = "width:200px;" class = "alert alert-success">Image</td>
								<td style = "width:200px;" class = "alert alert-success">Symbol</td>
								<td class = "alert alert-success">Total</td>
							
							</thead>
							<?php
							require 'dbcon.php';
							$query = $conn->query("SELECT * FROM candidate WHERE position = 'Assistant General Secretary'");
							while($fetch = $query->fetch_array())
							{
								$id = $fetch['candidate_id'];
								$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
								$fetch1 = $query1->fetch_assoc();
								
							?>
							<tbody> 
								<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
								<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " > </td>
								<td><img src = "<?php echo $fetch ['symbol'];?>" style = "width:40px; height:40px; border-radius:500px; " > </td>
								<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
							<?php }?>
							</tbody>
									
									
						</table>		
											
						<table class="table table-striped table-bordered table-hover ">
							<thead>
								<td style = "width:600px;"class = "alert alert-success">Candidate for Secretary, Science and Technology</td>
								<td style = "width:200px;" class = "alert alert-success">Image</td>
								<td style = "width:200px;" class = "alert alert-success">Symbol</td>
								<td class = "alert alert-success">Total</td>
								
							</thead>
							<?php
							require 'dbcon.php';
							$query = $conn->query("SELECT * FROM candidate WHERE position = 'Secretary, Science and Technology'");
							while($fetch = $query->fetch_array())
							{	
								$id = $fetch['candidate_id'];
								$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
								$fetch1 = $query1->fetch_assoc();
							
							?>
							<tbody> 
								<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
								<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " > </td>
								<td><img src = "<?php echo $fetch ['symbol'];?>" style = "width:40px; height:40px; border-radius:500px; " > </td>
								<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
									<?php }?>
							</tbody>
									
						</table>	
							
											
						<table class="table table-striped table-bordered table-hover ">
							<thead>
								<td style = "width:600px;"class = "alert alert-success">Candidate for Secretary, International Affiars</td>
								<td style = "width:200px;" class = "alert alert-success">Image</td>
								<td style = "width:200px;" class = "alert alert-success">Symbol</td>
								<td class = "alert alert-success">Total</td>
									
							</thead>
							<?php
								require 'dbcon.php';
								$query = $conn->query("SELECT * FROM candidate WHERE position = 'Secretary, International Affiars'");
								while($fetch = $query->fetch_array())
								{
								$id = $fetch['candidate_id'];
								$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
								$fetch1 = $query1->fetch_assoc();
								
							?>
							<tbody> 
								<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
								<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " ></td>
								<td><img src = "<?php echo $fetch ['symbol'];?>" style = "width:40px; height:40px; border-radius:500px; " > </td>
								<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
							<?php }?>
							</tbody>
									
									
						</table>	
							
							
											
						<table class="table table-striped table-bordered table-hover ">
								<thead>
									<td style = "width:600px;"class = "alert alert-success">Candidate for Secretary, Literature</td>
									<td style = "width:200px;" class = "alert alert-success">Image</td>
									<td style = "width:200px;" class = "alert alert-success">Symbol</td>
									<td class = "alert alert-success">Total</td>
								
								</thead>
								<?php
							require 'dbcon.php';
							$query = $conn->query("SELECT * FROM candidate WHERE position = 'Secretary, Literature'");
							while($fetch = $query->fetch_array())
							{
								$id = $fetch['candidate_id'];
								$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
								$fetch1 = $query1->fetch_assoc();
								
							?>
							<tbody> 
								<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
								<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " > </td>
								<td><img src = "<?php echo $fetch ['symbol'];?>" style = "width:40px; height:40px; border-radius:500px; " > </td>
								<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
							<?php }?>
							</tbody>
							
									
						</table>	
							
											
						<table class="table table-striped table-bordered table-hover ">
								<thead>
									<td style = "width:600px;"class = "alert alert-success">Candidate for Secretary, Culture</td>
									<td style = "width:200px;" class = "alert alert-success">Image</td>
									<td style = "width:200px;" class = "alert alert-success">Symbol</td>
									<td class = "alert alert-success">Total</td>
								
								</thead>
								<?php
								require 'dbcon.php';
								$query = $conn->query("SELECT * FROM candidate WHERE position = 'Secretary, Culture'");
								while($fetch = $query->fetch_array())
								{
									$id = $fetch['candidate_id'];
									$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
									$fetch1 = $query1->fetch_assoc();
									
								?>
								<tbody> 
									<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
									<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " > </td>
									<td><img src = "<?php echo $fetch ['symbol'];?>" style = "width:40px; height:40px; border-radius:500px; " > </td>
									<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
								<?php }?>
								</tbody>
								
								
						</table>	
						
											
						<table class="table table-striped table-bordered table-hover ">
							<thead>
								<td style = "width:600px;"class = "alert alert-success">Candidate for Member </td>
								<td style = "width:200px;" class = "alert alert-success">Image</td>
								<td style = "width:200px;" class = "alert alert-success">Symbol</td>
								<td class = "alert alert-success">Total</td>
							
							</thead>
							<?php
							require 'dbcon.php';
								$query = $conn->query("SELECT * FROM candidate WHERE position = 'Member'");
								while($fetch = $query->fetch_array())
								{
									$id = $fetch['candidate_id'];
									$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
									$fetch1 = $query1->fetch_assoc();
									
								?>
							<tbody> 
								<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
								<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " > </td>
								<td><img src = "<?php echo $fetch ['symbol'];?>" style = "width:40px; height:40px; border-radius:500px; " > </td>
								<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
							<?php }?>
							</tbody>
							
							
						</table>				
							
							
				</div>                    				
              </div>
                <!-- /.table-responsive -->
                
            </div>
            <!-- /.panel-body -->
        </div>
                    <!-- /.panel -->
              
	    </div>
	    <!-- /.row -->
	</div>
        <!-- /#page-wrapper -->



    </div>
    <!-- /#wrapper -->

    <?php include ('script.php');?>

</body>

</html>

