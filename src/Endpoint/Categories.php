<?php

namespace Malanciault\WpApiClient\Endpoint;

/**
 * Class Categories
 * @package Malanciault\WpApiClient\Endpoint
 */
class Categories extends AbstractWpEndpoint
{
    /**
     * {@inheritdoc}
     */
    protected function getEndpoint()
    {
        return '/wp-json/wp/v2/categories';
    }
}
