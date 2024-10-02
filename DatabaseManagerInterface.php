<?php

namespace Nacosvel\Contracts\DatabaseManager;

use JetBrains\PhpStorm\ArrayShape;

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

    /**
     * Get a database connection instance.
     *
     * @param string|null $name
     *
     * @return mixed
     */
    public function connection(string $name = null): mixed;

    /**
     * Get the configuration for a connection.
     *
     * @param string|null $option
     *
     * @return mixed
     */
    #[ArrayShape([
        'driver'      => 'string',
        'url'         => 'string',
        'host'        => 'string',
        'port'        => 'string',
        'database'    => 'string',
        'username'    => 'string',
        'password'    => 'string',
        'unix_socket' => 'string',
        'charset'     => 'string',
        'collation'   => 'string',
        'prefix'      => 'string',
    ])]
    public function getDatabaseConfig(string $option = null): mixed;

    /**
     * Starts a distributed XA transaction with the given XID.
     *
     * @param string $xid The global transaction identifier (XID).
     *
     * @return void
     */
    public function startTransactionXa(string $xid): void;

    /**
     * Ends the distributed XA transaction with the given XID.
     *
     * @param string $xid The global transaction identifier (XID).
     *
     * @return void
     */
    public function endTransactionXa(string $xid): void;

    /**
     * Prepares the distributed XA transaction with the given XID for commit.
     *
     * @param string $xid The global transaction identifier (XID).
     *
     * @return void
     */
    public function prepareXa(string $xid): void;

    /**
     * Commits the distributed XA transaction with the given XID.
     *
     * @param string $xid The global transaction identifier (XID).
     *
     * @return void
     */
    public function commitXa(string $xid): void;

    /**
     * Rolls back the distributed XA transaction with the given XID.
     *
     * @param string $xid The global transaction identifier (XID).
     *
     * @return void
     */
    public function rollbackXa(string $xid): void;

}
