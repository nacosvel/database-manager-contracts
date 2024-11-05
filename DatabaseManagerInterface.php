<?php

namespace Nacosvel\Contracts\DatabaseManager;

use PDO;

/**
 * Interface DatabaseManagerInterface
 *
 * @method null|string getName() Get the database connection name.
 * @method mixed getConnectionConfiguration(string $option = null, mixed $default = null) Get the configuration for a connection.
 * @method PDO getPdo() Get the current PDO connection.
 * @method void unprepared(string $query) Run a raw, unprepared query against the PDO connection.
 * @method void beginTransaction() Start a new database transaction.
 * @method void commit() Commit the active database transaction.
 * @method void rollBack() Rollback the active database transaction.
 * @method void xaBeginTransaction(string $xid) Starts a distributed XA transaction with the given XID.
 * @method void xaPrepare(string $xid) Prepares the distributed XA transaction with the given XID for commit.
 * @method void xaCommit(string $xid) Commits the distributed XA transaction with the given XID.
 * @method void xaRollBack(string $xid) Rolls back the distributed XA transaction with the given XID.
 * @method void xaRecover(string $xid) Recovers the distributed XA transaction with the given XID.
 */
interface DatabaseManagerInterface
{
    /**
     * Get a database connection instance.
     *
     * @param string|null $name
     *
     * @return mixed
     */
    // public function connection(string $name = null): mixed;

    /**
     * Set the default database connection for the callback execution.
     *
     * @param string   $name
     * @param callable $callback
     *
     * @return mixed
     */
    // public function usingConnection(string $name, callable $callback): mixed;

}
