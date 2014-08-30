<?php
/**
 * Webiny Framework (http://www.webiny.com/framework)
 *
 * @copyright Copyright Webiny LTD
 */

namespace Webiny\Component\Storage\Driver;

/**
 * @package   Webiny\Component\Storage
 */

interface SizeAwareInterface
{
    /**
     * Get file size
     *
     * @param $key
     *
     * @return int
     */
    public function getSize($key);
}