<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>

	<?php $this->load->view('_partials/navbar.php'); ?>

	<h1>List Artikel</h1>
	<ul>
		<?php foreach ($articles as $article) : ?>
			<li>
				<a href="<?= site_url('article/'.$article->slug) ?>">
					<?= $article->title ? html_escape($article->title) : "No Title" ?>
				</a>
			</li>
		<?php endforeach ?>
	</ul>

	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>

<style>
    .article {
  max-width: 740px;
  margin: 4em auto;
  padding: 0 2em;
}

.article .post-title {
  font-weight: bolder;
  font-family: sans;
}

.article .post-meta {
  margin: 1em 0;
  font-size: 0.8rem;
  font-family: sans;
  color: grey;
}
.article .post-body {
  line-height: 1.6rem;
}
    </style>
