<?php if(!class_exists('Rain\Tpl')){exit;}?>
    <section class="recipientsPageContent">
        <div class="buttonArea">
            <a href="/recipients/new">
                <div class="recipientsActionButton">
                    <h6 class="actionButtonText">Novo Endereço</h6>
                </div>
            </a>
        </div>
        <div class="recipients">
            <?php $counter1=-1;  if( isset($recipients) && ( is_array($recipients) || $recipients instanceof Traversable ) && sizeof($recipients) ) foreach( $recipients as $key1 => $value1 ){ $counter1++; ?>
            <div class="recipient">
                <h6 class="recipientName"><?php echo htmlspecialchars( $value1["nameRecipient"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h6>
                <h6 class="recipientEmail"><?php echo htmlspecialchars( $value1["emailRecipient"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h6>
                <h6 class="recipientTag"><?php echo htmlspecialchars( $value1["tagRecipient"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h6>
                <div class="actions">
                    <a href="/recipients/<?php echo htmlspecialchars( $value1["idRecipient"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        <img src="../../res/assets/img/settings.svg" alt="config">
                    </a>
                    <a href="/recipients/<?php echo htmlspecialchars( $value1["idRecipient"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" onclick="return confirm('Deseja realmente excluir este endereço?')">
                        <img src="../../res/assets/img/lixo.png" alt="delete" id="deleteIcon">
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
