<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="templateSendContent">
    <form action="/templates/<?php echo htmlspecialchars( $template["idTemplate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/send" class="templateSend" method="post">

        <div class="sendContainer">
            <h2 class="sendBlueTitle">Assunto:</h2>
            <div class="sendField">
                <label for="subject"><h6 class="recipientLabel">Assunto:</h6></label>
                <input type="text" name="subject" class="sendInput" placeholder="Ex: Promoção pra você!" required>
            </div>
        </div>
        <div class="sendContainer">
            <h2 class="sendBlueTitle">Nome do remetente:</h2>
            <div class="sendField">
                <label for="name"><h6 class="recipientLabel">Nome:</h6></label>
                <input type="text" name="name" class="sendInput" placeholder="Ex: Fulano De Tal" required>
            </div>
            <h2 class="sendBlueTitle">Enviar template <?php echo htmlspecialchars( $template["nameTemplate"], ENT_COMPAT, 'UTF-8', FALSE ); ?> para:</h2>
        </div>
        
        <div class="recipients-send">
            <?php $counter1=-1;  if( isset($recipients) && ( is_array($recipients) || $recipients instanceof Traversable ) && sizeof($recipients) ) foreach( $recipients as $key1 => $value1 ){ $counter1++; ?>
            <div class="recipient">
                <input name="radio" id="radio" onchange="storeEmail()" type="radio" value="<?php echo htmlspecialchars( $value1["emailRecipient"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                <input type="hidden" name="idRecipient" value="/templates/{idTemplate}"/>
                <h6 class="recipientName"><?php echo htmlspecialchars( $value1["nameRecipient"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h6>
                <h6 class="recipientEmail"><?php echo htmlspecialchars( $value1["emailRecipient"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h6>
                <h6 class="recipientTag"><?php echo htmlspecialchars( $value1["tagRecipient"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h6>
            </div>
            <?php } ?>
            <button class="sendButton">Enviar</button>
        </div>
    </form>
</div>
<script src="/res/js/send-settings.js"></script>