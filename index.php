<?PHP

declare(strict_types=1);

namespace App;

require_once("src/utils/debug.php");
require_once("src/controller.php");

$request = [
    'get'=>$_GET,
    'post'=>$_POST
];

(new Controller($request))->run();

////////////////////////////////////////////////




