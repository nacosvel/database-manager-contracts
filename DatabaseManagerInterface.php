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

}
