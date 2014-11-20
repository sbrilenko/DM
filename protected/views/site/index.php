<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="tab">
    <ul class="tab-list">
        <li <?php if(Yii::app()->controller->id=="site"&& Yii::app()->controller->action->id=="index") echo "class='active'"?> >Basic info</li>
        <li class="left">Interests</li>
    </ul>
    <div class="clear"></div>
    <div class="tab-list-border"></div>
    <div class="edit-account-content">
        <?php $profile=Profile::model()->findByAttributes(array("user_id"=>Yii::app()->user->id));?>
        <?php
        if(!$profile) {
            $profile = new Profile();
        }
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'edit-account-' . uniqid(),
                'enableAjaxValidation' => true,
                'enableClientValidation' => true,
                'htmlOptions' => array()
            ));

        echo $form->textField($profile,'name');
        echo $form->textField($profile,'surename');

//        echo $form->dropDown($profile,'countries');
        $this->endWidget();
        ?>
    </div>
</div>
