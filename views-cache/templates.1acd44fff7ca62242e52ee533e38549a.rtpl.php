<?php if(!class_exists('Rain\Tpl')){exit;}?>
    <div class="templatesPageContent">
        <div class="buttonArea">
            <a href="/templates/new">
                <div class="actionButton">
                    <h6 class="actionButtonText">Novo Template</h6>
                </div>
            </a>
        </div>
        <div class="templatesGrid">
            <?php $counter1=-1;  if( isset($templates) && ( is_array($templates) || $templates instanceof Traversable ) && sizeof($templates) ) foreach( $templates as $key1 => $value1 ){ $counter1++; ?>
            <a href="#">
                <div class="template" href="/templates/:id">
                    <h6 class="templateText">Newsletter Janeiro</h6>
                </div>
            </a>
            <?php } ?>
        </div>
    </div>
    