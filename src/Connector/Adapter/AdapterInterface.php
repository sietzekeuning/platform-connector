<?php

namespace WebservicesNl\Connector\Adapter;

use WebservicesNl\Common\Client\ClientInterface;

/**
 * Interface AdapterInterface.
 *
 * Contract for the connector adapters
 */
interface AdapterInterface
{
    /**
     * Call the client request function.
     *
     * @param string $functionName
     * @param mixed  $arguments
     *
     * @return mixed
     */
    public function call($functionName, $arguments);

    /**
     * Returns this adapter's protocol.
     *
     * @return string
     */
    public function getProtocol();

    /**
     * @return ClientInterface
     */
    public function getClient();
}
