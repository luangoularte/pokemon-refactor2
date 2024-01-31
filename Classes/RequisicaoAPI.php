<?php 

class RequisicaoAPI {
    
    public function verificacao() {

        $method = $_SERVER['REQUEST_METHOD'];
        $route = $_SERVER['REQUEST_URI'];

        header('Content-Type: application/json');

        http_response_code(200);
        
        if ($method !== 'GET') {

            http_response_code(400);
        
            echo json_encode(['message' => 'Invalid method provided.']);
            exit;
        }
        return $route;
    }
}