<?php
/* @var $this SiteController */
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css"/>
<script>
    $(document).ready(function()
    {
        $(document).on('click','.regist',function()
        {
            $("#registr,.back").addClass('visible')
        }).on('click','.sign-in',function()
        {
            $("#sign-in,.back").addClass('visible')
        })

    })
</script>
<div class="back"></div>
<div class="start-content">
    <div class="start-rize"></div>
    <div class="start-logo"></div>
    <div class="buttons">
        <div class="start-button regist">REGISTRATION NOW</div>
        <div class="start-button margin-left sign-in">SIGN IN</div>
    </div>
</div>
<div class="start-license">
    <div class="start-content center">
    <p>Happy family is most cherished wish of every person. Unfortunately, modern rhythm of life and lifestyle doesn’t allow to people find their mates.</p>

    <p>More than 2000 of women are here on site, who saved traditional points and lifeviews about family and marriage.</p>

    <p>Make Marriage Team is directed to search of perfect couple for man  and creation of strong , happy family. We created MMT to make not only marriages, but happy and successful marriages.  And we’re going to  do all possible to help you to find what you are really looking for. Of you had failures and unsuccessfully attempts , you just chosen wrong place for your search. Make Marriage  is targeted to creation only serious relationships.</p>

    <p>Registration on Make Marriage – is first step to happy family life. Do you need for warmth of cozy family nest and care? Do you want to find attractive sexy, serious, family oriented woman? Just use tools provided by our service  to make your search of your second half and your soulmate successful !</p>

    <div class="pod">Don’t wait for miracle, just create it together with Make Marriage Team!<br />
        With respect,<br />
        MM Team &copy;</div>
    </div>

</div>
<div class="start-content">
    <ul class="start-footer">
        <li><a href="#">About Us</a></li>
        <li class="middle"><a href="#">Help</a></li>
        <li><a href="#">FAQ</a></li>
    </ul>
    <div class="start-footer-dec"></div>
</div>
<div id="registr">
    <div class="start-close-button"></div>
    <div class="start-form-image-back"></div>
    <div class="title">Registration</div>
    <div class="register-form">
        <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'contact-form',
            'enableClientValidation'=>true,
            'clientOptions'=>array(
                'validateOnSubmit'=>true,
            ),
        )); ?>
        <?php $model=new Users();?>
        <div class="left start-form-left">
            <?php echo $form->labelEx($model,'username'); ?>
        </div>
        <div class="left start-form-right">
            <?php echo $form->textField($model,'username'); ?>
        </div>
        <div class="clear"></div>
        <div class="left start-form-left">
            <?php echo $form->labelEx($model,'email'); ?>
        </div>
        <div class="left start-form-right">
            <?php echo $form->textField($model,'email'); ?>
        </div>
        <div class="clear"></div>
        <div class="left start-form-left">
            <?php echo $form->labelEx($model,'password'); ?>
        </div>
        <div class="left start-form-right">
            <?php echo $form->textField($model,'password'); ?>
        </div>
        <div class="clear"></div>
        <div class="left start-form-left">
            <?php echo $form->labelEx($model,'confirm_password'); ?>
        </div>
        <div class="left start-form-right">
            <?php echo $form->textField($model,'confirm_password'); ?>
        </div>
        <div class="clear"></div>
        <div class="left">
            <?php echo Chtml::checkBox('agreement'); ?>
        </div>
        <div class="left">
            <label for="agreement">I have read and fully understood the Make Marriage <a href="#">Terms and Conditions</a></label>
        </div>
        <div class="clear"></div>
        <div class="before-reg-submit-button">
            <?php echo CHtml::submitButton("Registration",array("class"=>"reg-form-submit")); ?>
        </div>
        <?php $this->endWidget(); ?>
    </div>
</div>
<div id="sign-in">
    <div class="start-close-button"></div>
    <div class="start-form-image-back"></div>
    <div class="title">Sign in</div>
    <div class="register-form">
        <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'contact-form',
            'enableClientValidation'=>true,
            'clientOptions'=>array(
                'validateOnSubmit'=>true,
            ),
        )); ?>
        <?php $model=new Users();?>
        <div class="left start-form-left">
            <?php echo $form->labelEx($model,'username'); ?>
        </div>
        <div class="left start-form-right">
            <?php echo $form->textField($model,'username'); ?>
        </div>
        <div class="clear"></div>
        <div class="left start-form-left">
            <?php echo $form->labelEx($model,'password'); ?>
        </div>
        <div class="left start-form-right">
            <?php echo $form->textField($model,'password'); ?>
        </div>
        <div class="clear"></div>
        <div class="left start-form-left">&nbsp;</div>
        <div class="left start-form-right sign-in-forgot-pass">
            <a href="#">Forgot password ?</a>
        </div>
        <div class="clear"></div>
        <div class="before-reg-submit-button">
            <?php echo CHtml::submitButton("Sign in",array("class"=>"reg-form-submit")); ?>
        </div>
        <?php $this->endWidget(); ?>
    </div>

</div>

