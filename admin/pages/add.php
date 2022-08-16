<?php include '../inc/action.php' ?>
<link rel="stylesheet" type="text/css" href="../css/style.css?<?php echo time(); ?>" />
			<div class="main_content">
            <h1>Add new article</h1>
				<div class="main_content_form">
					<form enctype="multipart/form-data" method="POST" action="">
						<label>Name</label>
						<input type="text" placeholder="Article name" name="name" required>
                        <label>Description</label>
						<textarea placeholder="Enter article Description" name="Description" required></textarea>
						<label>Img</label>
						<input type="text"  name="img"  placeholder=".jpg/png" required>
						<label>Title</label>
						<input type="text" value="blog" name="title" readonly>
                        <label>Source</label>
						<input type="text" placeholder="Article source" name="src" required>
						<label>Date</label>
                        <input type="date" name="date" required>
						<input type="submit" value="Add" name="insert">
					</form>
					<?php if (isset($_POST['insert'])){insert();}?>
				</div>
			</div>
		
