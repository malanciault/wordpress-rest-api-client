<?php

namespace Malanciault\WpApiClient\Endpoint;

/**
 * Class Media
 * @package Malanciault\WpApiClient\Endpoint
 */
class Media extends AbstractWpEndpoint
{
    /**
     * {@inheritdoc}
     */
    protected function getEndpoint()
    {
        return '/wp-json/wp/v2/media';
    }
}
