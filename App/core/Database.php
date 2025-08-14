<?php

// Usando o padrão Singleton para garantir uma única instância da conexão
class Database {
    private static $instance = null;
    private $connection;

    // O construtor é privado para impedir a criação de instâncias diretas
    private function __construct() {
        // Data Source Name (DSN) - a string que informa ao PDO como se conectar
        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET;

        // Opções para a conexão PDO
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Lança exceções em caso de erros
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Retorna os resultados como array associativo
            PDO::ATTR_EMULATE_PREPARES   => false,                  // Usa prepared statements nativos do MySQL
        ];

        try {
            // Cria a instância do PDO
            $this->connection = new PDO($dsn, DB_USER, DB_PASS, $options);
        } catch (PDOException $e) {
            // Em caso de falha na conexão, encerra a aplicação e mostra o erro
            // Em produção, você pode querer logar o erro em vez de exibi-lo
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    // O método estático que controla o acesso à instância
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Método para obter o objeto de conexão PDO
    public function getConnection() {
        return $this->connection;
    }
}