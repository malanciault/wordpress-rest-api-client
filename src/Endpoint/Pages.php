<?php

namespace Malanciault\WpApiClient\Endpoint;

/**
 * Class Pages
 * @package Malanciault\WpApiClient\Endpoint
 */
class Pages extends AbstractWpEndpoint
{
    /**
     * {@inheritdoc}
     */
    protected function getEndpoint()
    {
        return '/wp-json/wp/v2/pages';
    }
}
