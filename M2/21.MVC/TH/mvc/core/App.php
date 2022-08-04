<?php
class App{
    //Project_MVC/?url=Home/Action/P1/P2
    protected $controller = "Home";
    protected $action = "Index";
    protected $params = [];

    function __construct(){
        $arr_url = ($this->urlProcess());
        //xu ly controller
        if(file_exists("./mvc/controllers/".$arr_url[0].".php")){
            $this->controller = $arr_url[0];
        }
        require_once "./mvc/controllers/".$this->controller.".php";

        //xu ly action
        if(isset($arr_url[1])){
            if(method_exists($this->controller, $arr_url[1])){
                $this->action = $arr_url[1];
            }
        }

        //xu ly params
        $this->params = $arr_url;
        array_splice($this->params, 0, 2);
        call_user_func_array([new $this->controller, $this->action], $this->params );
    }

    function urlProcess(){
        if(isset($_GET["url"])){
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }
}
?>