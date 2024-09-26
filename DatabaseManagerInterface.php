<?php

namespace Nacosvel\Contracts\DatabaseManager;

interface DatabaseManagerInterface
{
    /**
     * @return mixed
     */
    public function getManager(): mixed;

    /**
     * @param mixed $manager
     *
     * @return static
     */
    public function setManager(mixed $manager): static;

    /**
     * Start a new database transaction.
     *
     * @return void
     */
    public function beginTransaction(): void;

    /**
     * Commit the active database transaction.
     *
     * @return void
     */
    public function commit(): void;

    /**
     * Rollback the active database transaction.
     *
     * @return void
     */
    public function rollBack(): void;

    /**
     * Run a raw, unprepared query against the PDO connection.
     *
     * @param string $query
     *
     * @return void
     */
    public function unprepared(string $query): void;

}
