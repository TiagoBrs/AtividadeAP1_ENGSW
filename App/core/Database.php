<?php
class Database {
    // Guarda a instância única do PDO
    private static $instance;

    // Método estático: você chama Database::getInstance() sem dar new
    public static function getInstance() {
        // Se ainda não existe conexão, cria agora (lazy)
        if (!self::$instance) {

            // Monta o DSN: informa driver (mysql), host, porta, nome do banco e charset
            $dsn = "mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;

            // Opções do PDO (boas práticas)
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Erros como exceção
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // fetch padrão em array associativo
                PDO::ATTR_EMULATE_PREPARES   => false,                  // usa prepared statements nativos
                // PDO::ATTR_PERSISTENT      => true,                   // (opcional) conexão persistente
            ];

            try {
                // Cria a conexão
                self::$instance = new PDO($dsn, DB_USER, DB_PASS, $options);

                // (opcional) Ajuste de fuso horário da sessão do MySQL
                // self::$instance->exec("SET time_zone = '-03:00'");

            } catch (PDOException $e) {
                // Em produção, evite vazar detalhes do erro
                http_response_code(500);
                exit('Falha ao conectar ao banco de dados.');
            }
        }

        // Retorna SEMPRE a mesma instância nesta requisição
        return self::$instance;
    }
}
