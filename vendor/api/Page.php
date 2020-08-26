<?php

    namespace Api;

    use Rain\tpl;

    class Page{
        private $tpl;
        private $options = [];
        private $defaults = [
            'header'=> true,
            'footer' => true,
            'data' => []
        ];

        //A função abaixo cria uma ligação entre os valores passados no array com os dados da página e 
        //os valores chamados no template pelo rain.

        private function setData($data = []){
            foreach ($data as $key => $value) {
                $this->tpl->assign($key, $value);
            }
        }

        //A função abaixo configura o rain Tpl

        private function tplConfig($options, $tplDir){
            $this->options = array_merge($this->defaults, $options);

            $config = [
                "tplDir" => $_SERVER["DOCUMENT_ROOT"].$tplDir,
                "cacheDir" => $_SERVER["DOCUMENT_ROOT"]."/views-cache/"
            ];

            Tpl::configure($config);
        }

        //O construtor chama a função que configura o rain e renderiza o cabeçalho da página.

        public function __construct($options = [], $tplDir="/views/"){
            
            tplConfig($options, $tplDir);

            $this->tpl = new Tpl;

            $this->setData($this->options["data"]);
            if ($this->options["header"] === true) {
                $this->tpl->draw("header");
            }
        }

        // A função setTpl é responsável por renderezizar o conteúdo da página (entre cabeçalho e rodapé).

        public function setTpl($name, $data = [], $returnHTML = false){
            $this->setData($data);
            return $this->tpl->draw($name, $returnHTML);
        }

        //O destrutor é responsável por renderizar o rodapé da página.

        public function __destruct(){
            if ($this->options["footer"]===true) {
                $this->tpl->draw("footer");  
            }
        }

    }