<?php declare(strict_types=1);

namespace Martin1982\ApiClientStack\Client;

use Psr\Http\Message\ResponseInterface;

/**
 * api-client - All rights reserved
 */
interface ClientInterface
{
    public function call(string $method, string $endpoint, array $queryStringParameters = [], array $headers = [], ?string $body = null): ResponseInterface;
}
