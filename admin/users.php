<?php include 'inc/action.php' ?>
<link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time(); ?>" />
		<?php $result = select('users'); ?>
		
			<div class="main_content">
			<div class="nav">
					<a href="index.php">Admin Dashboard</a>
				</div>
				<div class="main_content_table">
					<?php if(mysqli_num_rows($result) > 0): ?>
					<table class="articles_table">
						<tr>
							<th>ID</th>
                            <th>Plan</th>
                            <th>Courses</th>
                            <th>Course img</th>
                            <th>Edit</th>
                            <th>Delete</th>
						</tr>
						<?php foreach ($result as $value):?>
							<tr>
                                <td><?php echo $value['id'] ?></td>
                                <td><?php echo $value['plan'] ?></td>
                                <td><?php echo $value['courses'] ?></td>
								<td><img src="../images/courses/<?php echo $value['courseimg'] ?>" alt=""></td>
								<td><a href="pages/edituser.php?id=<?php echo $value['id'] ?>" class="btn"><span>Edit</span></a></td>
								<td><a href="pages/deleteuser.php?id=<?php echo $value['id'] ?>" class="btn"><span>Delete</span></a></td>
							</tr>
						<?php endforeach; ?>
					</table>
					<?php else: ?>
						<h2>Users not found</h2>
					<?php endif; ?>
				</div>
			
			</div>
