<?php include 'inc/action.php' ?>
<link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time(); ?>" />
		<?php $result = select('feedback'); ?>
		
			<div class="main_content">
			<div class="nav">
					<a href="index.php">Admin Dashboard</a>
				</div>
				<div class="main_content_table">
					<?php if(mysqli_num_rows($result) > 0): ?>
					<table class="articles_table">
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Lastname</th>
							<th>Email</th>
                            <th>Message</th>
						</tr>
						<?php foreach ($result as $value):?>
							<tr>
								<td><?php echo $value['id'] ?></td>
								<td><?php echo $value['name'] ?></td>
								<td><?php echo $value['lastname']?></td>
                                <td><?php echo $value['email']?></td>
                                <td><?php echo $value['message']?></td>
							</tr>
						<?php endforeach; ?>
					</table>
					<?php else: ?>
						<h2>Messages not found</h2>
					<?php endif; ?>
				</div>
			
			</div>
