<?php declare(strict_types=1);

/**
 * api-client
 */

namespace Martin1982\ApiClientStack\Client;

use Psr\Http\Message\ResponseInterface;

/**
 * Interface ClientInterface
 */
interface ClientInterface
{
    public function call(string $method, string $endpoint, array $queryStringParameters = [], array $headers = [], ?string $body = null): ResponseInterface;
}
