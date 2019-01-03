<?php

    namespace App;

    class App
    {
        public function run()
        {
            $site = isset($_GET['site']) ? $_GET['site'] : null;
            if($site === null){
                $site = 'index';
            }

            $path = sprintf('src/sites/%s.php', $site);

            if(!file_exists($path)){
                http_response_code(404);
                // @TODO error template

                exit;
            }

            require_once($path);
        }
    }