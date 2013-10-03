<?php foreach ($links as $service => $link): ?>
	<?= CHtml::link(CHtml::image($assetsPath.'/'.$service.'.png', 'share via '.$service), $link, array('target' => '_blank')) ?>
<?php endforeach; ?>
