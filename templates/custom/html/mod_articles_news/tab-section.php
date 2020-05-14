<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$activClass = true;
?>
<div class="products_section">
	<div class="container">
		<h2 class="h2 up-line"><?php echo JText::_('TPL_CUSTOM_PRODUCTS_SECTION_HEADER'); ?></h2>
		<div class="tab_section">
			<div class="tab_btn-block">
				<div class="btn tab_btn tab_active">Vape</div>
				<div class="btn tab_btn">Tinctures</div>
				<div class="btn tab_btn">Spray for food</div>
				<div class="btn tab_btn">Tinctures for pets</div>
			</div>

			<div class="tab_window display-block">
				<div class="row">
					<div class="col-md-16 col-lg-8">
						<img alt="alt" src="/images/product/priduct-2.jpg" class="tab_window_bg">
					</div>
					<div class="col-md-8 col-lg-4">
						<p class="tab_window_text">Many people around the world have appreciated the benefits of CBD oils. Here CBD vapes come into play. These are well-known devices that create sensations similar to ones with CBD oil, plus you can choose from a variety of the tastes available. </p>
						<img alt="alt" src="/images/product/priduct-3.jpg" class="tab_window_bg_litle">
					</div>
					<div class="col-md-8 col-lg-4">
						<img alt="alt" src="/images/product/priduct-4.jpg" class="tab_window_bg_litle">
						<p class="tab_window_text">You can use this relaxation method even in the middle of a workday without getting dirty looks or being asked redundant questions. Your boss and employees won’t see if you’re actually high (because you won’t be). Nice!</p>
					</div>
				</div>
				<?php // <a href="/products/vape" class="btn btn_products_section">Send</a>?>
			</div>
			<div class="tab_window">
				<div class="row">
					<div class="col-md-16 col-lg-8">
						<img alt="alt" src="/images/product/tinctures-1.jpg" class="tab_window_bg">
					</div>
					<div class="col-md-8 col-lg-4">
						<p class="tab_window_text">CBD tinctures are made from natural marijuana oils. They contain 113 cannabinoids, and cannabidiol (CBD) is one of them. This substance finds its use in medicine. Tobacco and marijuana addictions are successfully treated with this substance. </p>
						<img alt="alt" src="/images/product/tinctures-3.jpg" class="tab_window_bg_litle">
					</div>
					<div class="col-md-8 col-lg-4">
						<img alt="alt" src="/images/product/tinctures-2.jpg" class="tab_window_bg_litle">
						<p class="tab_window_text">The CBD has a calming effect, which helps fall asleep in record time. All the oils you will find in our store are full Spectrum. This means they are 100% natural and made from special strains of the best hemp in the world.</p>
					</div>
				</div>
				<?php //<a href="/products/tinctures" class="btn btn_products_section">Send</a> ?>
			</div>
			<div class="tab_window">
				<div class="row">
					<div class="col-md-16 col-lg-8">
						<img alt="alt" src="/images/product/spray-1.jpg" class="tab_window_bg">
					</div>
					<div class="col-md-8 col-lg-4">
						<p class="tab_window_text">Make a salad or barbecue, use the spray over it. Just a few taps - and you get a complete set of sensations, just like from an ordinary CBD tincture. It is easy, very convenient and takes less than two seconds of your time.  </p>
						<img alt="alt" src="/images/product/spray-2.jpg" class="tab_window_bg_litle">
					</div>
					<div class="col-md-8 col-lg-4">
						<img alt="alt" src="/images/product/spray-3.jpg" class="tab_window_bg_litle">
						<p class="tab_window_text">While developing the spray formula, we took into consideration that it would be used with meals. For this reason, we made it so that its effect would not decrease when applied with breakfast or dinner.</p>
					</div>
				</div>
				<?php // <a href="/products/spray-for-food" class="btn btn_products_section">Send</a>?>
			</div>
			<div class="tab_window ">
				<div class="row">
					<div class="col-md-16 col-lg-8">
						<img alt="alt" src="/images/product/for-pets-1.jpg" class="tab_window_bg">
					</div>
					<div class="col-md-8 col-lg-4">
						<p class="tab_window_text">Does your four-legged friend feel restless? Do they have nightmares regularly? Do they have difficulty sitting still even when required?  </p>
						<img alt="alt" src="/images/product/for-pets-2.jpg" class="tab_window_bg_litle">
					</div>
					<div class="col-md-8 col-lg-4">
						<img alt="alt" src="/images/product/product-7.jpg" class="tab_window_bg_litle">
						<p class="tab_window_text">Our CBD pet tincture can easily solve all these problems. These are completely harmless oils obtained by processing hemp of special varieties. These extracts are also used in medicine to treat a wide range of diseases. CBD has no adverse effects on pets. The tincture is not addictive, so your pet will not develop a drug addiction.</p>
					</div>
				</div>
				<?php // <a href="/products/tinctures-for-pets" class="btn btn_products_section">Send</a>?>
			</div>
		</div>
		<?php /* ?>
		<div class="tab_section">
			<div class="tab_btn-block">
				<?php foreach ($list as $item) { ?>
				<div class="btn tab_btn <?= ($activClass)? 'tab_active':'' ?>"><?= $item->title ?></div>
					<?php $activClass = false; ?>
				<?php } ?>
			</div>
			
			<?php foreach ($list as $item) { ?>
			<div class="tab_window">
				<div class="row">
					<div class="col-md-16 col-lg-8">
						<img alt="alt" src="<?= $item->jcfields[1]->rawvalue ;?>" class="tab_window_bg">
					</div>
					<div class="col-md-8 col-lg-4">
						<p class="tab_window_text"><?= $item->jcfields[4]->rawvalue ;?></p>
						<img alt="alt" src="<?= $item->jcfields[2]->rawvalue ;?>" class="tab_window_bg_litle">
					</div>
					<div class="col-md-8 col-lg-4">
						<img alt="alt" src="<?= $item->jcfields[3]->rawvalue ;?>" class="tab_window_bg_litle">
						<p class="tab_window_text"><?= $item->jcfields[5]->rawvalue ;?></p>
					</div>
				</div>
				<a href="<?= $item->link ?>" class="btn btn_products_section"><?php echo JText::_('TPL_CUSTOM_BTN_SEND'); ?></a>
			</div>
			<?php } ?>
		</div>
		<?php */ ?>
	</div>
</div>