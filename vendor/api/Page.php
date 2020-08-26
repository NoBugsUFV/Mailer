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

        public function __construct($options = [], $tplDir="/views/"){
            this->options = array_merge(this->defaults, $options);

            $config = [
                "tplDir" => $_SERVER["DOCUMENT_ROOT"].$tplDir
                // Continua...
            ];
        }

    }