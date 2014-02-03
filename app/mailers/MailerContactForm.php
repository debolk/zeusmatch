<?php

class MailerContactForm
{
     /**
        * Sends a contact form email
        * @param string $name
        * @param string $contact_method
        * @param string $message_type
        * @param string $content
        * @return void
        */
    public static function send($name, $contact_method, $message_type, $content)
    {
        Mail::send('contact/email', [
            'name' => $name,
            'contact_method' => $contact_method,
            'message_type' => $message_type,
            'content' => $content,
        ], function($mail){
            $mail->to("zeusmatch@debolk.nl");
            $mail->from('website@tinder.i.bolkhuis.nl');
            $mail->subject('Contactformulier ZeusMatch');
        });
    }
}
