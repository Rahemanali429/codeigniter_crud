<?php include('boot_strap.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<?php if ($msg = $this->session->flashdata('msg')) : ?>
		<div class="container">
			<div class="alert alert-success my-4">
				<?php echo $msg; ?>
			</div>
		</div>
	<?php endif; ?>
	<div class="container">
		<a href="welcome/add_view" class="btn btn-success my-4">Add Post</a>
		<div class="table my-5">
			<table>
				<thead>
					<tr>
						<th>Id</th>
						<th>Title</th>
						<th>Description</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php if (count($con)) : ?>
						<?php foreach ($con as $content) : ?>
							<tr>
								<td>
									<?php echo $content->id; ?>
								</td>
								<td>
									<?php echo $content->title; ?>
								</td>
								<td>
									<?php echo $content->description; ?>
								</td>
								<td>
									<?=
										form_open('welcome/edit_data'),
										form_hidden('id', $content->id),
										form_submit(['name' => 'submit', 'value' => 'Edit', 'class' => 'btn btn-primary']),
										form_close();
									?>
								</td>
								<td>
									<?=
										form_open('welcome/delete_data'),
										form_hidden('id', $content->id),
										form_submit(['name' => 'submit', 'value' => 'Delete', 'class' => 'btn btn-danger']),
										form_close();
									?>
								</td>
							</tr>
						<?php endforeach; ?>
					<?php else : ?>
						<tr>
							<td colspan="5">No Data Available.</td>
						</tr>
					<?php endif; ?>
				</tbody>
			</table>
		</div>
	</div>

</body>

</html>