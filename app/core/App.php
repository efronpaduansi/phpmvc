<?php

class App{

    // membuat controller, method dan params default
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        
        $url = $this->parseURL();
        var_dump($url);
        
    }
   
    public function parseURL()
    {
        if( isset($_GET['url']))
        {
            // menghilangkan tanda slash (/) pada URL
            $url = rtrim($_GET['url'], '/');
            // menyaring karakter jahat pada URL
            $url = filter_var($url, FILTER_SANITIZE_URL);
            // pecahkan URL-nya
            $url = explode('/', $url);
            return $url;

        }
    }

}