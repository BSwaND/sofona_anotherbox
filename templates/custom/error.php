<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
	$app  = JFactory::getApplication();
	$user = JFactory::getUser();
	
	// Getting params from template
	$params = $app->getTemplate(true)->params;
	
	jimport('joomla.application.module.helper'); // Подключение вывода модулей из ядра
	$doc = JFactory::getDocument();
	// Detecting Active Variables
	$sitename = htmlspecialchars($app->get('sitename'), ENT_QUOTES, 'UTF-8');
	
	$homPage = '/';
	switch ($this->language) {
		case "en-gb":
			$homPage = '/';
			break;
		case "zh-cn":
			$homPage = '/zh';
			break;
		default:
			$homPage = '/';
			break;
	}
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">
<head>
	<meta charset="utf-8" />
	<title><?php echo $this->title; ?> <?php echo htmlspecialchars($this->error->getMessage(), ENT_QUOTES, 'UTF-8'); ?></title>
	<link rel="icon" type="image/png" href="/favicon.ico"/>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" href="/templates/custom/css/styles.min.css">
</head>
<body class="page404">

<div class="page">
	<div class="header">
		<a href="#mmenu" class="hamburger hamburger--slider">
			<div class="hamburger-box">
				<div class="hamburger-inner"></div>
			</div>
		</a>
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-3  col-xxl-6">
					<div class="logo_section">
						<a href="/" class="logo_linck"><img alt="logo" src="/images/logo.svg"></a>
					</div>
				</div>
				<div class="col-16 col-lg-11 col-lg-7 col-xxl-8 order-2 order-lg-1">
					<?php echo $doc->getBuffer('modules', 'main_menu', array('style' => 'none')); ?>
				</div>
				<div class="col-4  col-lg-1 col-lg-2 col-xxl-2 order-1 order-lg-2">
				</div>
			</div>
		</div>
	</div>
		
		<section class="content404" style="background-image: url('/images/bg-2560.jpg')">
			<div class="container">
				<div class="error">
					<h1 class = "error__title"> Oops ... something went wrong </h1>
					<p class = "error__subtitle"> You are here because you entered the address of a page that is already
						does not exist or has been moved to another address </p>
					<p class="number-error-big">404</p>
					<div class="go-main">
						<a class="btn" href="/"><span>Home</span></a>
					</div>
				</div>
			</div>
		</section>
	<?php echo $doc->getBuffer('modules', 'contact_section', array('style' => 'none')); ?>
	</div>

	<footer class="footer">
		<div class="container">
			<div class="logo_section">
				<a href="/" class="logo_linck"><img alt="logo" src="images/logo.svg"></a>
			</div>
			<?php echo $doc->getBuffer('modules', 'social_block', array('style' => 'none')); ?>
			<?php echo $doc->getBuffer('modules', 'main_menu', array('style' => 'none')); ?>
		</div>
		<?php include_once (JPATH_BASE .'/templates/custom/html/sub-footer.php');  ?>
	</footer>
</div>

	<nav id="mmenu">
		<jdoc:include type="modules" name="mobail_menu" style=""/>
	</nav>

	<script src="/templates/custom/js/scripts.min.js"></script>
	<script src="/templates/custom/uForm/js/script.js"></script>
</body>
</html>
