<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
        <div class="profile-name">Hi, Molly!</div>
        <div></div>
        <?php if($man) { ?>
        <div class="profile-name">Hi, Molly!</div>
        <div></div>
        <?php } elseif($admin) { ?>

        <?php } elseif($agency) { ?>

        <?php } elseif($girl) { ?>

        <?php }?>
<!--	--><?php
//		$this->beginWidget('zii.widgets.CPortlet', array(
//			'title'=>'Operations',
//		));
//		$this->widget('zii.widgets.CMenu', array(
//			'items'=>$this->menu,
//			'htmlOptions'=>array('class'=>'operations'),
//		));
//		$this->endWidget();
//	?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>