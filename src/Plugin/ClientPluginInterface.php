<?php declare(strict_types=1);

namespace Martin1982\ApiClientStack\Plugin;

use Martin1982\ApiClientStack\Client\ClientInterface;

/**
 * api-client - All rights reserved
 */
interface ClientPluginInterface
{
    /**
     * Returns the plugin identifier.
     *
     * @return string
     */
    public function getPluginIdentifier(): string;

    /**
     * Return a fully initialized client
     *
     * @return ClientInterface
     */
    public function getClient(): ClientInterface;
}
