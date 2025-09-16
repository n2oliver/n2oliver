<?php
class DBSessionHandler implements SessionHandlerInterface
{
    private $pdo;

    public function __construct(PDO $pdo)
    {   // Testa se a pasta padrão está funcional (local vs servidor)
        $sessionPath = __DIR__ . '/sessao-temp';

        if (!is_dir($sessionPath)) {
            mkdir($sessionPath, 0700, true); // cria a pasta se não existir
        }

        ini_set('session.save_handler', 'files');
        ini_set('session.save_path', $sessionPath);
        $this->pdo = $pdo;
    }

    public function open($savePath, $sessionName) {
        return true;
    }

    public function close() {
        return true;
    }

    public function read($id) {
        $stmt = $this->pdo->prepare("SELECT data FROM sessions WHERE id = :id");
        $stmt->execute(['id' => $id]);
        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            return $row['data'];
        }
        return '';
    }

    public function write($id, $data) {
        $timestamp = time();
        $stmt = $this->pdo->prepare("
            REPLACE INTO sessions (id, data, timestamp)
            VALUES (:id, :data, :timestamp)
        ");
        return $stmt->execute([
            'id' => $id,
            'data' => $data,
            'timestamp' => $timestamp
        ]);
    }

    public function destroy($id) {
        $stmt = $this->pdo->prepare("DELETE FROM sessions WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }

    public function gc($maxLifetime) {
        $old = time() - $maxLifetime;
        $stmt = $this->pdo->prepare("DELETE FROM sessions WHERE timestamp < :old");
        return $stmt->execute(['old' => $old]);
    }
}
