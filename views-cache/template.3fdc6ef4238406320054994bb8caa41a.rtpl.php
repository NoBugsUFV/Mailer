<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="templatePageContent">
    <div class="templateButtonArea">
        <a href="/templates/<?php echo htmlspecialchars( $template["idTemplate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" onclick="return confirm('Deseja realmente excluir este template?')">
            <div class="actionButton" id="deleteTemplate">
                <h6 class="actionButtonText">Excluir Template</h6>
            </div>
        </a>
        <a href="/templates/<?php echo htmlspecialchars( $template["idTemplate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/send">
            <div class="actionButton">
                <h6 class="actionButtonText">Enviar Template</h6>
            </div>
        </a>
    </div>
</div>