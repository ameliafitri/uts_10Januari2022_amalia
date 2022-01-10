<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="content">
			<h1>Write new Article</h1>

			<form action="" method="POST">
				<div>
					<label for="title">Title*</label>
					<input
  type="text"
  name="title"
  class="<?= form_error('title') ? 'invalid' : '' ?>"
  value="<?= form_error('title') ? set_value('title') : $article->title ?>"
  required
  maxlength="128"
/>
					<div class="invalid-feedback">
						<?= form_error('title') ?>
					</div>
				</div>

				<div>
					<label for="content">Konten</label>
					<textarea name="content" cols="30" rows="10" placeholder="Tuliskan isi pikiranmu..."><?= set_value('content') ?></textarea>
				</div>

				<div>
					<button type="submit" name="draft" class="button" value="true">Save to Draft</button>
					<button type="submit" name="draft" class="button button-primary" value="false">Publish</button>
					<div class="invalid-feedback">
						<?= form_error('draft') ?>
					</div>
				</div>
			</form>

			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>
</body>

</html>
<style>
    form {
	box-sizing: border-box;
	display: flex;
	flex-direction: column;
	gap: 1rem;
	padding: 2rem 0;
}
label {
	display: inline-block;
	margin-bottom: 0.5rem;
}
input, textarea {
	display: inline-block;
	padding: 0.5rem;
	width: 100%;
}
input:focus, textarea:focus {
	outline-color: dodgerblue;
}

.invalid {
	border: 2px solid rgb(153, 16, 16);
}

.invalid::placeholder {
	color: rgb(153, 16, 16);
}

.invalid-feedback:empty {
	display: none;
}
.invalid-feedback {
	font-size: smaller;
	color: rgb(153, 16, 16);
}
</style>