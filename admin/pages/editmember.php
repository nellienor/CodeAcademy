<?php include '../inc/action.php' ?>
<link rel="stylesheet" type="text/css" href="../css/style.css?<?php echo time(); ?>" />
		<?php $result = select('members',$_GET['ID']); $r = mysqli_fetch_object($result);?>
		<h1>Edit the information about team member</h1>
			<div class="main_content">
				<div class="main_content_form">
					<form method="POST">
						<input type="hidden" name="ID" value="<?php echo $r->ID ?>">
						<label>Name</label>
						<input type="text" placeholder="Member name" value="<?php echo $r->name ?>" name="name">
						<label>Img</label>
						<input type="text" placeholder="image.jpg/png" value="<?php echo $r->img ?>" name="img">
						<label>Position</label>
                        <input type="text" placeholder="Position" value="<?php echo $r->position ?>" name="position">
						<input type="submit" value="Submit" name="update">
					</form>
					<?php if (isset($_POST['update'])){update1();}?>
				</div>
			</div>
