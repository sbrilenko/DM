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
            'id'=>'register-form',
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
            <div class="reg-error reg-username">&nbsp;</div>
        </div>
        <div class="clear"></div>
        <div class="left start-form-left">
            <?php echo $form->labelEx($model,'email'); ?>
        </div>
        <div class="left start-form-right">
            <?php echo $form->textField($model,'email'); ?>
            <div class="reg-error reg-email">&nbsp;</div>
        </div>
        <div class="clear"></div>
        <div class="left start-form-left">
            <?php echo $form->labelEx($model,'password'); ?>
        </div>
        <div class="left start-form-right">
            <?php echo $form->passwordField($model,'password'); ?>
            <div class="reg-error reg-password">&nbsp;</div>
        </div>
        <div class="clear"></div>
        <div class="left start-form-left">
            <?php echo $form->labelEx($model,'confirm_password'); ?>
        </div>
        <div class="left start-form-right">
            <?php echo $form->passwordField($model,'confirm_password'); ?>
            <div class="reg-error reg-confirm-password">&nbsp;</div>
        </div>
        <div class="clear"></div>
        <div class="left">
            <?php echo $form->checkBox($model,'agreement',array("id"=>"agreement")); ?>
        </div>
        <div class="left">
            <label class="checkbox" for="agreement">I have read and fully understood the Make Marriage <a href="#">Terms and Conditions</a></label>
        </div>
        <div class="clear"></div>
        <div class="left start-form-left">&nbsp;</div>
        <div class="left start-form-right">
            <div class="reg-error reg-agreement">&nbsp;</div></div>

        <div class="clear"></div>
        <div class="before-reg-submit-button">
            <?php echo CHtml::submitButton("Registration",array("class"=>"reg-form-submit")); ?>
        </div>
        <?php $this->endWidget(); ?>
    </div>
</div>
<div id="sign-in" class="top">
    <div class="start-close-button"></div>
    <div class="start-form-image-back top"></div>
    <div class="title">Sign in</div>
    <div class="register-form">
        <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'sign-in-form',
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
            <div class="signin-error signin-username">&nbsp;</div>
        </div>
        <div class="clear"></div>
        <div class="left start-form-left">
            <?php echo $form->labelEx($model,'password'); ?>
        </div>
        <div class="left start-form-right">
            <?php echo $form->passwordField($model,'password'); ?>
            <div class="signin-error signin-password">&nbsp;</div>
        </div>
        <div class="clear"></div>
        <div class="left start-form-left">&nbsp;</div>
        <div class="left start-form-right sign-in-forgot-pass">
            <a href="#">Forgot password ?</a>
        </div>
        <div class="clear"></div>
        <div class="before-sign-in-submit-button">
            <?php echo CHtml::submitButton("Sign in",array("class"=>"reg-form-submit")); ?>
        </div>
        <?php $this->endWidget(); ?>
    </div>

</div>
<script>
    $(document).ready(function()
    {
        $(document).on('click','.start-close-button',function()
        {
            $(".reg-error,.sigin-error").html("&nbsp;")
            $("#sign-in,#registr,.back").removeClass("visible")
        })

        $("#sign-in-form").on("submit",function()
        {
            $(".reg-error,.signin-error").html("&nbsp;")
            var th=$(this);
            var arr=th.serializeArray();
            console.log(arr)
            //add distributor
            $.ajax({
                url: "/login",
                type: "POST",
                data:arr,
                success: function (data) {
                    data=$.parseJSON(data);
                    console.log(data)
                    if(data.error)
                    {
                        if(data.message.username)
                        {
                            $('.signin-username').text(data.message.username)
                            $('.signin-username').show();
                        }
                        if(data.message.password)
                        {
                            $('.signin-password').text(data.message.password)
                            $('.signin-password').show();
                        }
                    }
                    else
                    {
                        window.location.href="/";
                    }
                }
            })
            return false;
        })
        //registr submit
        $("#register-form").on("submit",function()
        {
            $(".reg-error,.signin-error").html("&nbsp;")
            var th=$(this);
            var arr=th.serializeArray();
            console.log(arr)
            //add distributor
            $.ajax({
                url: "/users/create",
                type: "POST",
                data:arr,
                success: function (data) {
                    data=$.parseJSON(data);
                    console.log(data)
                    if(data.error)
                    {
                        if(data.message.confirm_password)
                        {
                            $('.reg-confirm-password').text(data.message.confirm_password);
                            $('.reg-confirm-password').show();
                        }
                        if(data.message.username)
                        {
                            $('.reg-username').text(data.message.username)
                            $('.reg-username').show();
                        }
                        if(data.message.email)
                        {
                            $('.reg-email').text(data.message.email)
                            $('.reg-email').show();
                        }
                        if(data.message.password)
                        {
                            $('.reg-password').text(data.message.password)
                            $('.reg-password').show();
                        }
                        if(data.message.agreement)
                        {
                            $('.reg-agreement').text(data.message.agreement)
                            $('.reg-agreement').show();
                        }
                    }
                    else
                    {
                        window.location.href="/";
                    }
                }
            })
            return false;
        })
    })

</script>

