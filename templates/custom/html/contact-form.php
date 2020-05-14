<?php
	defined('_JEXEC') or die;
?>

<form id="uForm"  class="contact_form _uForm" method="post">
	<input id="uForm__hidden" name="hidden" type="hidden">
	
	<input class="contact_form__input contact_form__input__name" id="uForm__name" name="name" type="text"
	       required placeholder="Name">
	<input class="contact_form__input" id="uForm__tel" name="tel" type="text" required
	       placeholder="Phone number">
	<input class="contact_form__input" id="uForm__email" name="email" required placeholder="Email">
	<textarea class="contact_form__input" id="uForm__text-area" name="text-area" cols="30" rows="10"
	          placeholder="Write a comment"></textarea>
	<div class="contact_form__check-block">
		<span><input type="checkbox" name="checkbox" id="contackt-checkbox" required></span>
		<label for="contackt-checkbox" class="contact_form__for"><a href="/doc/terms_of_service.pdf" target="_blank"><?php echo JText::_('TPL_CUSTOM_BTN_FORM_CHECK'); ?></a></label>
	</div>

	<input class="uForm__extended" name="nospam" type="text" value="uform-empty" required>
	<button class="btn" type="submit" id="uForm__submit" > <?php echo JText::_('TPL_CUSTOM_BTN_SEND'); ?></button>
	<p id="uForm__error-msg" class="uForm__error-msg"></p>
	<div id="uForm__preload" class="uForm__preload"></div>
</form>


<div id="uForm__overlay" class="uForm__overlay"></div>
<div id="uForm__modal" class="uForm__modal">
	<p class="uForm__modal-text"><?php echo JText::_('TPL_CUSTOM_BTN_FORM_MESS'); ?></p>
	<button>Close</button>
</div>