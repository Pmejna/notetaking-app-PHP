<?PHP

declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', '1');

function dump($data)
{
    echo'
    <br/>
    <div style="
        background-color: grey;
        display: inline-block;
        color: white;
        padding: 0 10px;
        margin-bottom: 10px;
    ">
    <pre>';
    print_r($data);
    echo'</pre>
    </div>
    </br>';
}
