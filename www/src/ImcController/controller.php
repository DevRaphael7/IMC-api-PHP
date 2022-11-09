<?php

require dirname(__DIR__) . "\models\\response_model.php";

class ImcController {

    public function processRequest(string $method, $path) {
        switch($method) {
            case "GET":
                $peso = (float) $path[6];
                $altura = (float) $path[7];
                $imc = $peso / ($altura * $altura);
                $categoria = $this->categoria($imc);

                echo successResponse(array([
                    "Valor do IMC" => (float) number_format($imc, 2),
                    "Categoria" => $categoria
                ]), "Peso do IMC");
            break;
            default:
                // http_response_code(400) //Setar como status 400.
                echo "Method not right - 400";
            break;
        }
    }

    private function categoria(float $imc) {
        if($imc < 18.5) {
            return "Peso baixo";
        } else {
            return "Obesidade";
        }
    }
}

?>