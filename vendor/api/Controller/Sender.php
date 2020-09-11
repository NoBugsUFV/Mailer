<?php

namespace Api\Controller;

use Api\Controller\Template;
use Api\Mailer;

class Sender{

    //Destinatário
    private  $toAddress;
    private $toName;
    
    //Rementente
    private $nameFrom;
    private $emailReply;
    
    //Email
    private $template;
    private $subject;

    public function __construct($toAddress, $toName, $nameFrom, $emailReply, $template, $subject){
        $this->setData($toAddress, $toName, $nameFrom, $emailReply, $template, $subject);
    }

    public function setData($toAddress, $toName, $nameFrom, $emailReply, $template, $subject){
        $this->setToAddress($toAddress);
        $this->setToName($toName);
        $this->setNameFrom($nameFrom);
        $this->setEmailReply($emailReply);
        $this->setTemplate($template);
        $this->setSubject($subject);
    }

    public function sendMail(){
        $mailer = new Mailer($this);
        $mailer->send();
    }
    
    public function getToAddress(){
        return $this->toAddress;
    }

    public function getToName(){
        return $this->toName;
    }

    public function getNameFrom(){
        return $this->senderName;
    }

    public function getEmailReply(){
        return $this->emailReply;
    }

    public function getTemplate(){
        return $this->template;
    }

    public function getSubject(){
        return $this->subject;
    }

    public function setToAddress($toAddress){
        $this->toAddress = $toAddress;
    }

    public function setToName($toName){
        $this->toName = $toName;
    }

    public function setNameFrom($name){
        $this->senderName = $name;
    }

    public function setEmailReply($email){
        $this->emailReply = $email;
    }

    public function setTemplate($template){
        $this->template = $template;
    }
    public function setSubject($subject){
        $this->subject = $subject;
    }
}


?>