
<?php
	if(!$bool){
?>

<div class="modal fade" id="edit_candidate<?php  echo $candidate_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">         
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>Edit Candidate</center>
						</div>    
					</div>
				</h4>
			</div>
			
            <div class="modal-body">
				<form method = "post" enctype = "multipart/form-data">	
					<input type="hidden" name="candidate_id" value="<?php echo $row['candidate_id'] ?>">
					<div class="form-group">
						<label>Position</label>
						<select class = "form-control" name = "position">
								<option><?php echo $row ['position'];?></option>
								<option>President</option>
								<option>Vice President</option>
								<option>General Secretary</option>
								<option>Assistant General Secretary</option>
								<option>ecretary, Science and Technology</option>
								<option>Secretary, International Affiars</option>
								<option>Secretary, Literature</option>
								<option>Secretary, Culture</option>
								<option>Member</option>
								
								
								
							
							</select>
							
					</div>
	
				
					<div class="form-group">
						<label>Firstname</label>
							<input class="form-control" type ="text" name = "firstname" required="true" value = "<?php echo $row ['firstname']?>">
					</div>
					<div class="form-group">
						<label>Lastname</label>
							<input class="form-control"  type = "text" name = "lastname" value = "<?php echo $row ['lastname']?>" required="true">
					</div>
					
					<div class="form-group">
						<label>Year_Level</label>
							<select class = "form-control" name = "year_level" required="true">
								<option><?php echo $row ['year_level']?></option>
								<option></option>
								<option>1st Year</option>
								<option>2nd Year</option>
								<option>3rd Year</option>
								<option>4th Year</option>
							</select>
					</div>
					
					<div class="form-group">
						<label>Gender</label>
							<select class = "form-control" name = "gender">
								<option><?php echo $row ['gender']?></option>
								<option></option>
								<option>Male</option>
								<option>Female</option>
							</select>
					</div>
					<div class="form-group">
									<label>Image</label>
									<input type="file" name="image"required> 
					</div>

					<div class="form-group">
                        <label>Candidate Symbol</label>
						<input type="file" name="symbol" required> 
                    </div>

					<button name = "update" type="submit" class="btn btn-primary">Save Data</button>
				</form>
			</div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
            </div>
		</div>
	</div>
</div>
<!-- /.modal-content -->
                               
	<?php 
		require 'dbcon.php';
		
		if(ISSET($_POST['update'])){
			$bool = true;
			$position=$_POST['position'];
			$firstname=$_POST['firstname'];
			$lastname=$_POST['lastname'];
			$year_level=$_POST['year_level'];
			$gender=$_POST['gender'];
			$candidate_id=$_POST['candidate_id'];
			$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$image_name= addslashes($_FILES['image']['name']);
			$image_size= getimagesize($_FILES['image']['tmp_name']);
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
			$location="upload/" . $_FILES["image"]["name"];
			move_uploaded_file($_FILES["symbol"]["tmp_name"],"upload/" . $_FILES["symbol"]["name"]);	
			$symbol_image_location= "upload/" . $_FILES["symbol"]["name"];	

		
	
			$conn->query("UPDATE candidate SET position = '$position', firstname = '$firstname', lastname = '$lastname', year_level = '$year_level', gender = '$gender',img='$location', symbol ='$symbol_image_location' WHERE candidate_id = '$candidate_id'") or die(mysql_error());
			echo "<script> window.location='candidate.php' </script>";
		}	
	?>
								
<?php
	}
?>