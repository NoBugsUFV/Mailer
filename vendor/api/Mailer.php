<?php

    namespace Api;

    use Rain\Tpl;

    class Mailer{

        private $username;
        private $password;
        private $mail;

        public function __construct($toAddress, $toName, $nameFrom, $subject, $tplName, $data = []){

            $this->username = getenv("USERNAME");
            $this->password = getenv("PASSWORD");

            $config = array(
                "tpl_dir"       => $_SERVER["DOCUMENT_ROOT"]."/views/email/",
                "cache_dir"     => $_SERVER["DOCUMENT_ROOT"]."/views-cache/",
                "debug"         => false // set to false to improve the speed
            );
            Tpl::configure( $config );

            $tpl = new Tpl;

            foreach ($data as $key => $value) {
                $tpl->assign($key, $value);
            }

            $html = $tpl->draw($tplName, true);

            $this->mail = new \PHPMailer;
            $this->mail->isSMTP();
            $this->mail->SMTPDebug = 0;
            $this->mail->Host = 'smtp.gmail.com';
            $this->mail->Port = 587;
            
            $this->mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            $this->mail->SMTPSecure = 'tls';
            $this->mail->SMTPAuth = true;
            $this->mail->Username = $this->username;
            $this->mail->Password = $this->password;
            $this->mail->setFrom($this->username, $nameFrom);
            $this->mail->addReplyTo('comunicacao@nobugs.com.br', 'Marketing No Bugs');
            $this->mail->addAddress($toAddress, $toName);
            $this->mail->Subject = $subject;
            $this->mail->msgHTML($html);
            $this->mail->AltBody = 'Mensagem alternativa';
            //$this->mail->addAttachment('images/phpmailer_mini.png');
        }
        
        public function send(){
            return $this->mail->send();
        }
    }

?>