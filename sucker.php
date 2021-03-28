<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!-- saved from url=(0075)http://www.webstepbook.com/supplements/labsection/lab4-buyagrade/sucker.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Buy Your Way to a Better Education!</title>
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet">
	</head>

	<body cz-shortcut-listen="true">
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd>
                <?= $_REQUEST["name"]?>
            </dd>

			<dt>Section</dt>
			<dd>
                <?=$_REQUEST["sections"][0] ?>
            </dd>

			<dt>Credit Card</dt>
			<dd>
                <?= $_REQUEST["creditCardNumber"]?>
                <?= $_REQUEST["cardType"]?>
            </dd>
		</dl>
	
  </body></html>