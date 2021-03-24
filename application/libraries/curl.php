<?php

/**
 *  Configura o Via CEP.
 * 
 * Autor: Victor Laurance
 */

class Curl {

    private $endereco = "http://viacep.com.br/ws";
    private $url;

    public function consulta_cep($cep) {

        $this->url = $this->endereco . '/' . $cep . '/json';

        // Realiza a conexão
        $conn = curl_init();

        // Define as URL's
        curl_setopt($conn, CURLOPT_URL, $this->url);
        curl_setopt($conn, CURLOPT_RETURNTRANSFER, true);

        // Execução
        $resultado = curl_exec($conn);

        if(curl_error($conn)) {

            echo 'Erro' . curl_error($conn);
            return false;
        }

        return $resultado;

        // Close connection
        curl_close($conn);
    }
}