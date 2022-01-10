<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
	<?php $this->load->view('_partials/navbar.php'); ?>
	
	<h1>Tidak ada artikel</h1>

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
