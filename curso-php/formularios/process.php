<?

 /*
        
        get - informações são passadas por url, assim ficando visivel na url para todos

        VALIDAÇÕES -
    
        funções (filter_input - filter_var)

        FILTER_VALIDATE_INT
        FILTER_VALIDADE_EMAIL
        FILTER_VALIDADE_FLOAT
        FILTER_VALIDADE_IP
        FILTER_VALIDADE_URL
        
    */


$idade = $_POST['idade'];
$email = $_POST['email'];
$peso = $_POST['peso'];
$ip = $_POST['ip'];
$url = $_POST['url'];

echo" vosso nome é $name e seu email é $email <br>";

var_dump($_POST);