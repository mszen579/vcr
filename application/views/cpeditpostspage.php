<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Edit a post</title>
	</head>

	<body>
        <h1>Edit <?= $post['title'] ?></h1>
		<div id="container">
			<form action="editing/<?= $post['id'] ?>" method="post">
			<div class="form-group">
				<label>Title</label>
                <input type="text"   value="<?= $post['title'] ?>"  name="title" class="form-control" id="name" placeholder="Post Title">
                <input type="hidden" name="id" value="<?= $post['id'] ?>">
			</div>
			<div class="form-group">
				<label>Description</label>
				<input type="text"  value="<?= $post['description'] ?>" name="description" class="form-control" id="description" placeholder="description">
			</div>
			<div class="form-group">
				<label>language</label>
				<input type="text"  value="<?= $post['language'] ?>" name="language" class="form-control" id="language" placeholder="language">
			</div>
			<button type="submit" class="btn btn-primary my-1">Submit</button>
			<a class="btn btn-primary" href="/" role="button">Back</a>
		</form>

           
		</div>

	</body>

	</html>