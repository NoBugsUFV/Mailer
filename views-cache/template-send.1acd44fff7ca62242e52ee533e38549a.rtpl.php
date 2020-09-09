<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="templateSendContent">
    <form action="#" class="templateSend" method="post">
        <?php $counter1=-1;  if( isset($recipients) && ( is_array($recipients) || $recipients instanceof Traversable ) && sizeof($recipients) ) foreach( $recipients as $key1 => $value1 ){ $counter1++; ?>
        <input type="checkbox" name="recipient" class="recipient">
        <?php } ?>
    </form>
</div>