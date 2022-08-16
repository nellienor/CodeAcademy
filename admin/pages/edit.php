<?php include '../inc/action.php' ?>
<link rel="stylesheet" type="text/css" href="../css/style.css?<?php echo time(); ?>" />
		<?php $result = select('blog',$_GET['ID']); $r = mysqli_fetch_object($result);?>
		<h1>Edit the article</h1>
			<div class="main_content">
				<div class="main_content_form">
					<form method="POST">
						<input type="hidden" name="ID" value="<?php echo $r->ID ?>">
						<label>Name</label>
						<input type="text" placeholder="Article name" value="<?php echo $r->name ?>" name="name">
						<label>Description</label>
						<textarea placeholder="Enter article description" name="Description" ><?php echo $r->Description ?></textarea>
						<label>Img</label>
						<input type="text" placeholder="image.jpg/png" value="<?php echo $r->img ?>" name="img">
						<label>Source</label>
                        <input type="text" placeholder="Article source" value="<?php echo $r->src ?>" name="src">
                        <label>Date</label>
						<input type="text" placeholder="Published date" value="<?php echo $r->date ?>" name="date">
						<input type="submit" value="Submit" name="update"> 
					</form>
					<?php if (isset($_POST['update'])){update();}?>
				</div>
			</div>
