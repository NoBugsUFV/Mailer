<?php

namespace Api\Controller;

use Api\Controller\Template;

class Sending{

    //Destinatário
    private  $recipients = [];
    
    //Rementente
    private $senderName;
    private $emailReply;
    
    //Email
    private $template;
    private $subject;
    
    public function getRecipients(){
        return $this->recipients;
    }

    public function getSenderName(){
        return $this->senderName;
    }

    public function getEmailReply(){
        return $this->emailReply;
    }

    public function getTemplate(){
        $this->template = new Template();
        return $template->getnametemplate();
    }

    public function getSubject(){
        return $this->subject;
    }

    public function setRecipients($recipient){
        $this->recipients = array_push($recipient);
    }

    public function setSenderName($name){
        $this->senderName = $name;
    }

    public function setEmailReply($email){
        $this->emailReply = $email;
    }

    public function setTemplate(Template $template){
        $this->template->setpathtemplate($template->getpathtemplate);
    }
}


?>