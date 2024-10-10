<?php

namespace Nacosvel\Contracts\DatabaseManager;

/**
 * Interface DatabaseManagerInterface
 *
 * @method \void beginTransaction() Start a new database transaction.
 * @method \void commit() Commit the active database transaction.
 * @method \void rollBack() Rollback the active database transaction.
 * @method \void unprepared(string $query) Run a raw, unprepared query against the PDO connection.
 * @method \mixed connection(string $name = null) Get a database connection instance.
 * @method \mixed getDatabaseConfig(string $option = null) Get the configuration for a connection.
 * @method \void startTransactionXa(string $xid) Starts a distributed XA transaction with the given XID.
 * @method \void prepareXa(string $xid) Prepares the distributed XA transaction with the given XID for commit.
 * @method \void commitXa(string $xid) Commits the distributed XA transaction with the given XID.
 * @method \void rollbackXa(string $xid) Rolls back the distributed XA transaction with the given XID.
 */
interface DatabaseManagerInterface
{
}
