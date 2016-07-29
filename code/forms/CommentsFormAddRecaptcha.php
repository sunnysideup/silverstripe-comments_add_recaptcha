<?php

class CommentsFormAddRecaptcha extends Extension
{

    function alterCommentForm($form)
    {
        $form->Fields()->push(RecaptchaField::create("Recaptcha"));
    }

}
