<?php
defined('_JEXEC') or die;
?>
<div class="check_section" id="check-code">
	<div class="container">
		<div class="h2 up-line"><?php echo JText::_('TPL_CUSTOM_CHECKCODE_HEADER'); ?></div>
	</div>
	<div class="check_code_block">
		<div class="container">
			<div class="row">
				<div class="col-8 col-lg-5">
					<div class="check_code_item">
						<div class="check_code_item__header"><?php echo JText::_('TPL_CUSTOM_CHECKCODE_STEP_1'); ?></div>
						<img alt="alt" src="/images/check-1.png" title="check" class="check_code_item__img">
					</div>
				</div>
				<div class="col-8 col-lg-5">
					<div class="check_code_item">
						<div class="check_code_item__header"><?php echo JText::_('TPL_CUSTOM_CHECKCODE_STEP_2'); ?></div>
						<img alt="alt" src="/images/check-2.png" title="check" class="check_code_item__img">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="check_code_item">
						<div class="check_code_item__header"><?php echo JText::_('TPL_CUSTOM_CHECKCODE_STEP_3'); ?></div>
						<form action="" class="check_code_item__form">
							<div class="check_code_item__text"><?php echo JText::_('TPL_CUSTOM_CHECKCODE_CTA'); ?></div>
							<input type="text" class="check_code_item__input">
							<button class="check_code_item__submit"><?php echo JText::_('TPL_CUSTOM_BTN_CHECK'); ?></button>
							<br>
							<p>The security code that appears on the packaging of each of our CBD products is the best authentication. Erase the protective layer on the sticker and enter the numbers you see in the box below. Our database stores all the product numbers ever released. Thus, you can always tell if the CBD product was released by us.</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>