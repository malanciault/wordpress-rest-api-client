<?php

namespace Malanciault\WpApiClient\Endpoint;

/**
 * Class Comments
 * @package Malanciault\WpApiClient\Endpoint
 */
class Comments extends AbstractWpEndpoint
{
    /**
     * {@inheritdoc}
     */
    protected function getEndpoint()
    {
        return '/wp-json/wp/v2/comments';
    }
}
