<?php
/**
 * OAuth 2.0 Entity trait
 *
 * @package     league/oauth2-server
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 * @link        https://github.com/thephpleague/oauth2-server
 */

namespace League\OAuth2\Server\Entity;

trait EntityTrait
{
    /**
     * Hydrate an entity with properites
     * @param  array  $properties
     */
    public function hydrate(array $properties)
    {
        foreach ($properties as $prop) {
            if (isset($this->{$prop})) {
                $this->{$prop} = $prop;
            }
        }
    }
}
