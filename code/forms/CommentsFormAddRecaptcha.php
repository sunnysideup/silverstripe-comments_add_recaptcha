<?php

class CommentsFormAddRecaptcha extends Extension
{
    public function alterCommentForm($form)
    {
        $form->Fields()->push(RecaptchaField::create("Recaptcha"));
    }
}
