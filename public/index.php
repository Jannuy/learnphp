<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}

function dump(...$values) {
echo '<pre>';
var_dump(...$values);
echo '</pre>';
}

spl_autoload_register(function ($class){
    $class = substr($class, 4);
    dump($class);
    require_once __DIR__ . '/../src/$class.php'
});



use App\Controllers\PublicController as PC;

$router = new App\Router();
$db = new App\DB();
$controller = new PC();
$controller = new PC();
$controller = new PC();
$controller = new PC();
$controller = new PC();
dump($router, $db, $controller);

switch($_SERVER['REQUEST_URI']){
    case '/':
        include __DIR__ . '/../views/index.php';
        break;
    case '/us':
        include __DIR__ . '/../views/us.php';
        break;
    default:
        echo '404';
}

