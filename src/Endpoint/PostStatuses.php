<?php

namespace Malanciault\WpApiClient\Endpoint;

/**
 * Class PostStatuses
 * @package Malanciault\WpApiClient\Endpoint
 */
class PostStatuses extends AbstractWpEndpoint
{
    /**
     * {@inheritdoc}
     */
    protected function getEndpoint()
    {
        return '/wp-json/wp/v2/statuses';
    }
}
