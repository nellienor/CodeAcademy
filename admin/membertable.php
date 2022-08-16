<?php include 'inc/action.php' ?>
<link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time(); ?>" />
		<?php $result = select('members'); ?>
		
			<div class="main_content">
			<div class="nav">
					<a href="index.php">Admin Dashboard</a>
				</div>
				<div class="main_content_table">
					<?php if(mysqli_num_rows($result) > 0): ?>
					<table class="articles_table">
						<tr>
							<th>ID</th>
							<th>Image</th>
							<th>Name</th>
							<th>Position</th>
                            <th>Edit</th>
                            <th>Delete</th>
						</tr>
						<?php foreach ($result as $value):?>
							<tr>
								<td><?php echo $value['ID'] ?></td>
								<td><img src="../images/about/<?php echo $value['img'] ?>" alt=""></td>
								<td><?php echo $value['name'] ?></td>
								<td><?php echo $value['position']?></td>
								<td><a href="pages/editmember.php?ID=<?php echo $value['ID'] ?>" class="btn"><span>Edit</span></a></td>
								<td><a href="pages/delete.php?ID=<?php echo $value['ID'] ?>" class="btn"><span>Delete</span></a></td>
							</tr>
						<?php endforeach; ?>
					</table>
					<?php else: ?>
						<h2>Members not found</h2>
					<?php endif; ?>
				</div>
			
			</div>
