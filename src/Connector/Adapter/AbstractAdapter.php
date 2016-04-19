<?php

namespace WebservicesNl\Connector\Adapter;

use WebservicesNl\Common\Client\ClientInterface;

/**
 * Class AbstractAdapter.
 */
abstract class AbstractAdapter implements AdapterInterface
{
    const PROTOCOL_NAME = 'abstract';

    /**
     * @var ClientInterface
     */
    protected $client;
    
    /**
     * Constructor.
     *
     * @param ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * {@inheritdoc}
     */
    public function getProtocol()
    {
        return $this->client->getProtocolName();
    }
}
