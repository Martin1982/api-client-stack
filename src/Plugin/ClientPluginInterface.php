<?php declare(strict_types=1);

/**
 * api-client
 */

namespace Martin1982\ApiClientStack\Plugin;

use Martin1982\ApiClientStack\Client\ClientInterface;

/**
 * Interface ClientPluginInterface
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
