<?php

    namespace lib;

    class Application
    {
        private $stController;
        private $stAction;

        private function getRoute()
        {
            $this->stController = $_GET['Controller'];
            $this->stAction     = $_GET['Action'];
        }

        public function dispatch()
        {
            $this->getRoute();
            
            
        }
    }

?>