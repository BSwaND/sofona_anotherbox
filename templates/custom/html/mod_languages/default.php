<?php
defined('_JEXEC') or die;
JHtml::_('stylesheet', 'mod_languages/template.css', array('version' => 'auto', 'relative' => true));
if ($params->get('dropdown', 0) && !$params->get('dropdownimage', 1))
{
	JHtml::_('formbehavior.chosen');
}
?>
<div class="lang_block <?php echo $moduleclass_sfx; ?>">
	<?php foreach ($list as $language) { ?>
		<?php if($language->active){ ?>
				<div class="lang_active"><?= $language->title_native ?><i class="fa fa-angle-down" aria-hidden="true"></i></div>
		<?php } ?>
		<ul class="lang_dropdown">
			<?php if(!$language->active) { ?>
				<li><a href="<?= $language->link ?>"><?= $language->title_native ?></a></li>
			<?php }?>
		</ul>
	<?php } ?>
</div>



