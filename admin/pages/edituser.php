<?php include '../inc/action.php' ?>
<link rel="stylesheet" type="text/css" href="../css/style.css?<?php echo time(); ?>" />
		<?php $result = select('users',$_GET['id']); $r = mysqli_fetch_object($result);?>
		<h1>Edit the information about user </h1>
			<div class="main_content">
				<div class="main_content_form">
					<form method="POST">
						<input type="hidden" name="id" value="<?php echo $r->id ?>">
						<label>Plan</label>
						<input type="text" placeholder="Plan" value="<?php echo $r->plan ?>" name="plan">
						<label>Course Img</label>
						<input type="text" placeholder="image.jpg/png" value="<?php echo $r->courseimg ?>" name="img">
						<label>Course</label>
                        <input type="text" placeholder="Course name" value="<?php echo $r->courses ?>" name="course">
						<input type="submit" value="Submit" name="update">
					</form>
					<?php if (isset($_POST['update'])){update2();}?>
				</div>
			</div>
