<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="templateSendContent">
    <h2 class="sendBlueTitle">Enviar template <?php echo htmlspecialchars( $template["nameTemplate"], ENT_COMPAT, 'UTF-8', FALSE ); ?> para:</h2>
    <form action="/templates/<?php echo htmlspecialchars( $template["idTemplate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/send" class="templateSend" method="post">
        <div class="recipients-send">
            <?php $counter1=-1;  if( isset($recipients) && ( is_array($recipients) || $recipients instanceof Traversable ) && sizeof($recipients) ) foreach( $recipients as $key1 => $value1 ){ $counter1++; ?>
            <div class="recipient">
                <input name="checkbox" id="checkbox" type="checkbox" value="<?php echo htmlspecialchars( $value1["emailRecipient"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
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