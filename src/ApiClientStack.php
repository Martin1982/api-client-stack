<?php declare(strict_types=1);

/**
 * api-client
 */
namespace Martin1982\ApiClientStack;

use Martin1982\ApiClientStack\Client\ClientInterface;
use Martin1982\ApiClientStack\Exception\ApiClientStackException;
use Martin1982\ApiClientStack\Plugin\ClientPluginInterface;

/**
 * Class ApiClientStack
 */
class ApiClientStack
{
    /**
     * @var ClientPluginInterface[]
     */
    private array $plugins = [];

    /**
     * Add a plugin to the client stack
     *
     * @param ClientPluginInterface $plugin
     *
     * @return $this
     */
    public function addClient(ClientPluginInterface $plugin): ApiClientStack
    {
        $this->plugins[$plugin->getPluginIdentifier()] = $plugin;

        return $this;
    }

    /**
     * Get an API client from the plugin
     *
     * @param string $key
     *
     * @return ClientInterface
     */
    public function getClient(string $key): ClientInterface
    {
        if (array_key_exists($key, $this->plugins)) {
            throw new ApiClientStackException(sprintf('No such client "%s"', $key));
        }

        return $this->plugins[$key]->getClient();
    }
}
