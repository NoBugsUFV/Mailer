<?php if(!class_exists('Rain\Tpl')){exit;}?>
<div class="newRecipientPageContent">
    <div class="formRecipientBox">
        <h3 class="newRecipientBlueTitle">Editar Endereço</h3>
        <form action="/recipients/<?php echo htmlspecialchars( $recipient["idRecipient"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post" id="formRecipients">
            <div class="recipientField">
                <label for="name"><h6 class="recipientLabel">Nome:</h6></label>
                <input type="text" name="nameRecipient" class="recipientInput" placeholder="Ex: Fulano De Tal" value="<?php echo htmlspecialchars( $recipient["nameRecipient"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
            </div>
            <div class="recipientField">
                <label for="email"><h6 class="recipientLabel">Email:</h6></label>
                <input type="text" name="emailRecipient" class="recipientInput" placeholder="Ex: fulano@email.com" value="<?php echo htmlspecialchars( $recipient["emailRecipient"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
            </div>
            <div class="recipientField">
                <label for="tag"><h6 class="recipientLabel">Tag:</h6></label>
                <input type="text" name="tagRecipient" class="recipientInput" placeholder="Cliente" id="lastInput" value="<?php echo htmlspecialchars( $recipient["tagRecipient"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
            </div>
            <button class="addRecipientButton">Atualizar Endereço</button>
        </form>
    </div>
</div>