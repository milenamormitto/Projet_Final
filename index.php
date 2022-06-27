<?php
    if(isset($_GET['c'])){
        $controller = ucfirst($_GET['c']);
        $path_controller = "controller/$controller.php";

        //verirfica se o arquivo controller existe
        if(file_exists($path_controller))
            require $path_controller;

            //verirfica se foi enviada a variavel $_GET['m']
            //que contém o método do controlador desejado que desejpo executar

                $metodo = $_GET['m'] ?? "index";

                //cria o objeto controlador
                $obj = new $controller();

                //verirfica se cotrolador possui uma função
                if(is_callable(array($obj, $metodo))){
                    echo "Existe a função <br>";
					call_user_func_array(array($obj, $metodo),array());
				}
            }
