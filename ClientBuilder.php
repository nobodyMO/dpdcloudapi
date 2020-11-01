<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi;
use Zuckerwelt\Dpdcloudapi\Client;

class ClientBuilder implements ClientBuilderInterface
{
    /**
     * @var string
     */
    protected $sandbox;


    /**
     * @var array meta
     */
    private $meta;

    /**
     * @param string $endpoint
     * @param null $meta
     */
    public function __construct($sandbox = false)
    {
        $this->sandbox = $sandbox;
    }

    /**
     * @return boolean|null
     */
    public function getSandbox()
    {
        return $this->sandbox;
    }


    /**
     * Build the dpd connect client authenticated by user name and password
     *
     * @param string $partnerName partner name to use for the authentication
     * @param string $partnerToken Token associated to the partner name
     * @param string $userName user name to use for the authentication
     * @param string $userToken Token associated to the username
     * @param string $language
     * @return ClientInterface
     */
    public function buildClient($partnerName, $partnerToken, $userName, $userToken, $language='de_DE')
    {
		$client = new Client($partnerName, $partnerToken, $userName, $userToken, $language, $this->sandbox);
		return $client;
	}
}
