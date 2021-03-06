<?php
/**
 * User: dongww
 * Date: 2016/4/6
 * Time: 9:17
 */

namespace Dongww\WebMonitor;

use Dongww\WebMonitor\ResourceInterface;
use Dongww\WebMonitor\Response;

interface DetectorInterface
{
    /**
     * @param ResourceInterface $resource
     *
     * @param  array            $options
     *
     * @return ResponseInterface
     */
    public function probe(ResourceInterface $resource = null, array $options = []);
}