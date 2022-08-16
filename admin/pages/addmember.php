<?php include '../inc/action.php' ?>
<link rel="stylesheet" type="text/css" href="../css/style.css?<?php echo time(); ?>" />
			<div class="main_content">
            <h1>Add new article</h1>
				<div class="main_content_form">
					<form enctype="multipart/form-data" method="POST" action="">
						<label>Name</label>
						<input type="text" placeholder="Name" name="name" required>
                        <label>Img</label>
						<input type="text" placeholder=".jpg/png" name="img" required>
						<label>Position</label>
						<input type="text"  name="position"  placeholder="Position" required>
						<input type="submit" value="Add" name="insert">
					</form>
					<?php if (isset($_POST['insert'])){insert1();}?>
				</div>
			</div>
		
