<?php 
declare(strict_types=1);

namespace App;

require_once("src/view.php");

class Controller {
    private const DEFAULT_ACTION = 'list';

    private array $request;
    private View $view;

    public function __construct(array $request)
    {
        $this->request = $request;  
        $this->view = new View;
    }

    public function run(): void
    {   
        $viewParams = [];
        
        $data = $this->postRequest();
        switch($this->action()) {
            case 'create':
                $page = 'create';
                $created = false;   
            
                if (!empty($data)) {
                    $viewParams = [
                        'title' => $data['title'],
                        'description' => $data['description']
                    ];
                    $created = true;
                    $viewParams['created'] = $created;
                }
                $viewParams['created'] = $created;
            break;
            case 'show':
                $viewParams = [
                    'title' => 'My note',
                    'description' => 'description'
                ];
            break;
            default:
            $page = 'list';
            $viewParams['resultList'] = "list";
            break;
        }
        
        $this->view->render($page, $viewParams);
    }

    private function getRequest(): array 
    {
        return $this->request['get'] ?? [];
    }

    private function postRequest(): array 
    {
        return $this->request['post'] ?? [];
    }

    private function action(): string 
    {   
        $data = $this->getRequest();
        return $data['action'] ?? self::DEFAULT_ACTION;
    }
    
};