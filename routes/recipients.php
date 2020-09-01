<?php

    use \Api\Page;
    use Api\Controller\User;
    use Api\Controller\Recipient;

    $app->get('/recipients', function () {
        User::verifyLogin();
        $recipients = Recipient::listAll();
        $page = new Page();
        $page->setTpl('recipients', ['recipients'=>Recipient::checkList($recipients)]);
    });

    $app->get('/recipients/new', function () {
        User::verifyLogin();
        $page = new Page();
        $page->setTpl('newRecipient');
    });

    $app->post('/recipients/new', function(){
        User::verifyLogin();
        $recipient = new Recipient();
        $recipient->setData($_POST);
        $recipient->save();
        header("Location: /recipients");
 	    exit;
    });

    $app->get('/recipients/:id', function($id){
        User::verifyLogin();
        $recipient = new Recipient();
        $recipient->getById((int)$id);
        $page = new Page();
        $page->setTpl('recipient', [
            'recipient'=>$recipient->getValues()
        ]);
    });