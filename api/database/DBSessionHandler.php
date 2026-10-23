<?php

class DBSessionHandler implements SessionHandlerInterface
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function open(string $path, string $name): bool
    {
        return true;
    }

    public function close(): bool
    {
        return true;
    }

    public function read(string $id): string|false
    {
        $stmt = $this->pdo->prepare(
            "SELECT data FROM sessions WHERE id = :id"
        );

        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row ? (string) $row['data'] : '';
    }

    public function write(string $id, string $data): bool
    {
        $stmt = $this->pdo->prepare("
            REPLACE INTO sessions (id, data, timestamp)
            VALUES (:id, :data, :timestamp)
        ");

        return $stmt->execute([
            'id' => $id,
            'data' => $data,
            'timestamp' => time()
        ]);
    }

    public function destroy(string $id): bool
    {
        $stmt = $this->pdo->prepare(
            "DELETE FROM sessions WHERE id = :id"
        );

        return $stmt->execute(['id' => $id]);
    }

    public function gc(int $max_lifetime): int|false
    {
        $stmt = $this->pdo->prepare(
            "DELETE FROM sessions WHERE timestamp < :old"
        );

        $stmt->execute([
            'old' => time() - $max_lifetime
        ]);

        return $stmt->rowCount();
    }
}