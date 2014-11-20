<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<table style="display: table">
<tr>

<td class="span-5 last" style="display: table-cell;padding: 0;">
	<div id="sidebar">
        <div class="profile-name">Hi, <?php echo htmlspecialchars(Users::model()->findByPk(Yii::app()->user->id)->username);?>!</div>
        <?php if(Users::model()->findByPk(Yii::app()->user->id)->role==0) { ?>
        <div class="left-menu">
            <div class="left-menu-titles">My profile</div>
            <ul>
                <li class="current"><a href="">Inbox</a></li>
                <li><a href="">Edit my account</a></li>
                <li><a href="">Member ship</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
            <div class="left-menu-titles">Women gallery</div>
            <ul>
                <li><a href="">Contact list</a></li>
                <li><a href="">Women online-chat</a></li>
                <li><a href="">New profiles</a></li>
                <li><a href="">Search</a></li>
            </ul>
            <div class="left-menu-titles">Information</div>
            <ul>
                <li><a href="">Blog</a></li>
                <li><a href="">FAQ</a></li>
                <li><a href="">Help</a></li>
                <li><a href="">Contact us</a></li>
            </ul>
        </div>
        <?php } elseif(Users::model()->findByPk(Yii::app()->user->id)->role==1) { ?>
            <div class="left-menu">
                <div class="left-menu-titles">My profile</div>
                <ul>
                    <li><a href="">Inbox</a></li>
                    <li><a href="">Edit my account</a></li>
                    <li><a href="">Member ship</a></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </div>
        <?php } elseif(Users::model()->findByPk(Yii::app()->user->id)->role==2) { ?>

        <?php } elseif(Users::model()->findByPk(Yii::app()->user->id)->role==3) { ?>

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
</td>
    <td class="span-19" style="display: table-cell;vertical-align: top;background: #fff;border-radius: 3px;padding:0;">
        <div id="content">
            <?php echo $content; ?>
        </div><!-- content -->
    </td>
    </tr>
</table>
<?php $this->endContent(); ?>