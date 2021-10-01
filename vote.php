<?php include ('head.php');?>
<?php include("sess.php")?>
<body>
    <div id="wrapper">
        <?php include ('side_bar.php');?>
    </div>
	<form method = "POST" action = "vote_result.php">
		<div class="col-lg-6">

		    <div class="panel panel-primary">
		        <div class="panel-heading"><center>
		            PRESIDENT</center>
		        </div>
		        <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'President'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
				{
				?>
		           <div id = "position" style="overflow:hidden">
					   <div>
					   <img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;float:left" height = "150px" width = "150px" class = "img">
					   <img src = "admin/<?php echo $fetch['symbol']?>" style ="border-radius:6px;float:right" height = "110px" width = "110px" class = "img">
					   </div>
					
					
					<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:30px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
					<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "pres_id" class = "president"></center>
					<center><span style="margin-top:4px;"><?php echo $fetch['year_level']?></span></center>
				</div>

				<?php
					}
				?>

				</div>
		       
		    </div>
		</div>
				
				
				<div class="col-lg-6">
	
                    <div class="panel panel-primary">
                        <div class="panel-heading"><center>
							VICE PRESIDENT</center>
                        </div>
                        <div class="panel-body" style = "background-color:;">
						<?php
							$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Vice President'") or die(mysqli_errno());
							while($fetch = $query->fetch_array()){
						?>
						<div id = "position" style="overflow:hidden">
						<div>
					   <img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;float:left" height = "150px" width = "150px" class = "img">
					   <img src = "admin/<?php echo $fetch['symbol']?>" style ="border-radius:6px;float:right" height = "110px" width = "110px" class = "img">
					   </div>
						<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:30px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "vp_id" class = "vp"></center>
							<center><span style="margin-top:4px;"><?php echo $fetch['year_level']?></span></center>
						</div>
						<?php
							}
						?>

						</div>
                       
                    </div>
                </div>
	
	
	
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>GENERAL SECRETARY</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'General Secretary'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position" style="overflow:hidden">
						<div>
					   <img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;float:left" height = "150px" width = "150px" class = "img">
					   <img src = "admin/<?php echo $fetch['symbol']?>" style ="border-radius:6px;float:right" height = "110px" width = "110px" class = "img">
					   </div>
						<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:30px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "gn_sec_id" class = "gn_sec"></center>
							<center><span style="margin-top:4px;"><?php echo $fetch['year_level']?></span></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>ASSISTANT GENERAL SECRETARY</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Assistant General Secretary'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position" style="overflow:hidden">
						<div>
					   <img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;float:left" height = "150px" width = "150px" class = "img">
					   <img src = "admin/<?php echo $fetch['symbol']?>" style ="border-radius:6px;float:right" height = "110px" width = "110px" class = "img">
					   </div>
							<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:30px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "agn_sec_id" class = "agn_sec"></center>
							<center><span style="margin-top:4px;"><?php echo $fetch['year_level']?></span></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>	
	
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>SECRETRY, SCIENCE AND TECHNOLOGY</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Secretary, Science and Technology'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position" style="overflow:hidden">
						<div>
					   <img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;float:left" height = "150px" width = "150px" class = "img">
					   <img src = "admin/<?php echo $fetch['symbol']?>" style ="border-radius:6px;float:right" height = "110px" width = "110px" class = "img">
					   </div>
							<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:30px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "sec_st_id" class = "sec_st"></center>
							<center><span style="margin-top:4px;"><?php echo $fetch['year_level']?></span></center>
						</div>
	
				<?php
					}
				?>
			</div>    
        </div>
     </div>
	 <div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>SECRETARY, INTERNATIONAL AFFIARS</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Secretary, International Affiars'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position" style="overflow:hidden">
						<div>
					   <img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;float:left" height = "150px" width = "150px" class = "img">
					   <img src = "admin/<?php echo $fetch['symbol']?>" style ="border-radius:6px;float:right" height = "110px" width = "110px" class = "img">
					   </div>
							<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:30px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "sec_ia_id" class = "sec_ia"></center>
							 
							<center><span style="margin-top:4px;"><?php echo $fetch['year_level']?></span></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>SECRETARY, LITERATURE</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Secretary, Literature'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position" style="overflow:hidden">
						<div>
					   <img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;float:left" height = "150px" width = "150px" class = "img">
					   <img src = "admin/<?php echo $fetch['symbol']?>" style ="border-radius:6px;float:right" height = "110px" width = "110px" class = "img">
					   </div>
						<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:30px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "sec_lit_id" class = "sec_lit"></center>
							<center><span style="margin-top:4px;"><?php echo $fetch['year_level']?></span></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>SECRETARY, CULTURE</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Secretary, Culture'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position" style="overflow:hidden">
						<div>
					   <img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;float:left" height = "150px" width = "150px" class = "img">
					   <img src = "admin/<?php echo $fetch['symbol']?>" style ="border-radius:6px;float:right" height = "110px" width = "110px" class = "img">
					   </div>
						<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:30px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "sec_cu_id" class = "sec_cu"></center>
							<center><span style="margin-top:4px;"><?php echo $fetch['year_level']?></span></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>MEMBER</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Member'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position" style="overflow:hidden">
						<div>
					   <img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;float:left" height = "150px" width = "150px" class = "img">
					   <img src = "admin/<?php echo $fetch['symbol']?>" style ="border-radius:6px;float:right" height = "110px" width = "110px" class = "img">
					   </div>
							<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:30px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "mem_id" class = "mem"></center>
							<center><span style="margin-top:4px;"><?php echo $fetch['year_level']?></span></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>		
		<center style="margin-bottom: 40px; margin-top:30px"><button class = "btn btn-success ballot" type = "submit" name = "submit">Submit Ballot</button></center>
		</form>
</body>
<?php include ('script.php')?>
  
  <script type = "text/javascript">
		$(document).ready(function(){
			$(".president").on("change", function(){
				if($(".president:checked").length == 1)
					{
						$(".president").attr("disabled", "disabled");
						$(".president:checked").removeAttr("disabled");
					}
				else
					{
						$(".president").removeAttr("disabled");
					}
			});
			
			$(".vp").on("change", function(){
				if($(".vp:checked").length == 1)
					{
						$(".vp").attr("disabled", "disabled");
						$(".vp:checked").removeAttr("disabled");
					}
				else
					{
						$(".vp").removeAttr("disabled");
					}
			});
			
			$(".gn_sec").on("change", function(){
				if($(".gn_sec:checked").length == 1)
					{
						$(".gn_sec").attr("disabled", "disabled");
						$(".gn_sec:checked").removeAttr("disabled");
					}
				else
					{
						$(".gn_sec").removeAttr("disabled");
					}
			});
			
			$(".agn_sec").on("change", function(){
				if($(".agn_sec:checked").length == 1)
					{
						$(".agn_sec").attr("disabled", "disabled");
						$(".agn_sec:checked").removeAttr("disabled");
					}
				else
					{
						$(".agn_sec").removeAttr("disabled");
					}
			});
			
			$(".sec_st").on("change", function(){
				if($(".sec_st:checked").length == 1)
					{
						$(".sec_st").attr("disabled", "disabled");
						$(".sec_st:checked").removeAttr("disabled");
					}
				else
					{
						$(".sec_st").removeAttr("disabled");
					}
			});
			
			$(".sec_ia").on("change", function(){
				if($(".sec_ia:checked").length == 1)
					{
						$(".sec_ia").attr("disabled", "disabled");
						$(".sec_ia:checked").removeAttr("disabled");
					}
				else
					{
						$(".sec_ia").removeAttr("disabled");
					}
				
			});
			$(".sec_lit").on("change", function(){
				if($(".sec_lit:checked").length == 1)
					{
						$(".sec_lit").attr("disabled", "disabled");
						$(".sec_lit:checked").removeAttr("disabled");
					}
				else
					{
						$(".sec_lit").removeAttr("disabled");
					}
			});
			$(".sec_cu").on("change", function(){
				if($(".sec_cu:checked").length == 1)
				{
					$(".sec_cu").attr("disabled", "disabled");
					$(".sec_cu:checked").removeAttr("disabled");
				}
			else
				{
					$(".sec_cu").removeAttr("disabled");
				}
			});
			$(".mem").on("change", function(){
				if($(".mem:checked").length == 1)
				{
					$(".mem").attr("disabled", "disabled");
					$(".mem:checked").removeAttr("disabled");
				}
			else
				{
					$(".mem").removeAttr("disabled");
				}
			});
			
		});	
	</script>
</html>

