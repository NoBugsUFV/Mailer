<?php if(!class_exists('Rain\Tpl')){exit;}?>
    <div class="uploadPageContent">
        <div class="usefullArea">
            <h3 class="uploadBlueTitle">Novo Template</h3>
            <form role="form" action="/templates/new" method="post"enctype="multipart/form-data" class="uploadForm">

                <label for="nameTemplate"><h6 class="templateLabel">Nome do template:</h6></label>
                <input type="text" name="nameTemplate" class="templateInput" placeholder="Ex: Newsletter Janeiro" required>
                
                <label for='selecao-arquivo'class="fileLabel">Upload Template</label>
                <input id='selecao-arquivo' type='file' name="file" required>
                <button type="submit" id="confirmButton">Confirmar</button>
            </form>
        </div>
    </div>
