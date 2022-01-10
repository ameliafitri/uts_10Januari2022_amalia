<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin - Beritacoding</title>

<link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>" />
<style>
    body {
	margin: 0;
	padding: 0;
}

.main {
	display: flex;
}

.side-nav {
	background: teal;
	width: 25vw;
	max-width: 200px;
	height: 100vh;
}

.side-nav .brand {
	padding: 0 1rem;
	color: white;
}

.side-nav nav {
	display: flex;
	flex-direction: column;
}

.side-nav nav a {
	font-family: sans;
	text-decoration: none;
	color: white;
	padding: 0.8rem;
}

.side-nav nav a:hover {
	background-color: rgba(0, 0, 0, 0.2);
}

.content {
	padding: 1rem;
	padding-right: 2rem;
	width: 100%;
	position: static;
}

.toolbar {
	display: flex;
	margin: 1rem 0;
}

.table {
	width: 100%;
	border-collapse: collapse;
}

.table,
th,
td {
	border: 1px solid grey;
	border-left: none;
	border-right: none;
	padding: 0.5rem;
	text-align: left;
}

.action {
	display: flex;
	justify-content: center;
	gap: 0.8rem;
}

.footer {
	position: absolute;
	bottom: 1rem;
	text-align: center;
	font-family: sans-serif;
	font-size: 0.7rem;
}

/* Form */
form {
	box-sizing: border-box;
	padding: 0rem;
}
label {
	display: inline-block;
	margin-bottom: 0.5rem;
}
input, textarea {
	display: inline-block;
	padding: 0.5rem;
	margin-bottom: 1rem;
	width: 100%;
}
input:focus, textarea:focus {
	outline-color: dodgerblue;
}

/* Card */
.card {
	border: 1px solid lightgray;
	padding: 1rem;
	margin: 1rem 0;
}

.card-header {
	display: flex;
	justify-content: space-between;
	font-family: sans-serif;
}

/* Button */
.button {
	background-color: #e7e7e7;
	border: 2px solid transparent;
	border-radius: 8px;
	color: black;
	padding: 8px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 1rem;
	font-family: sans-serif;
}

.button:hover {
	opacity: 0.8;
}

.button:active {
	border: 2px solid rgba(0, 0, 0, 0.5);
}

.button-success {
	background-color: #4caf50;
	color: white;
}
.button-primary {
	background-color: #008cba;
	color: white;
}
.button-danger {
	background-color: #f44336;
	color: white;
}

.button-small {
	font-size: 0.7rem;
}

/* Text */
.text-green {
	color: #4caf50;
}

.text-gray {
	color: grey;
}

.text-center {
	text-align: center;
}
    </style>