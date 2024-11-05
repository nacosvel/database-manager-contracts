<?php

namespace Nacosvel\Contracts\DatabaseManager;

class Response
{
    /**
     * @param int    $code
     * @param string $message
     * @param array  $data
     *
     * @return array
     */
    public static function success(int $code = Code::SUCCESS, string $message = 'SUCCESS', array $data = []): array
    {
        return compact('code', 'message', 'data');
    }

    /**
     * @param int    $code
     * @param string $message
     * @param array  $errors
     *
     * @return array
     */
    public static function error(int $code = Code::ERROR, string $message = 'ERROR', array $errors = []): array
    {
        return compact('code', 'message', 'errors');
    }

}
