<?php


namespace App\system;


class Application
{
    private $uri = "/";
    private $url;
    public function __construct()
    {
            $this->processURL();
            var_dump($this);
        }

    private function processURL()
    {
            $_GET['url'] = isset($_GET['url']) ? filter_var(trim($_GET['url'],"/"),FILTER_SANITIZE_URL) : "";
            $url = explode("/" , $_GET['url']);

            // TODO : check isset language and Admin Requested in URL

            $sUrl = $_GET['url'];

          // TODO : Process for language Request and Admin Request in URL

          $this -> uri = !empty ($_GET['url']) ? $sUrl : $this->uri;
          $this -> url = trim("/" ,URL) . $_SERVER['REQUEST_URI'];


        }
}