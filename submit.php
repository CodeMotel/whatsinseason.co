<?php

// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

	// then send the form to your email
	mail( 'chris@see8ch.com', 'Contact Form', print_r($_POST,true) );
}

// otherwise, let the spammer think that they got their message through

?>

<?php include('includes/head.php'); ?>

<body id="submit">

<?php include('includes/nav.php'); ?>

<h1>Thanks!</h1>
<p>We'll get back to you as soon as possible.</p>
<a href="/">Home<span class="genericon genericon-home"></span></a>


<?php include('includes/footer.php'); ?>