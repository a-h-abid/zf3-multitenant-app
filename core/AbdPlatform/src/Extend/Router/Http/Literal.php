<?php

namespace AbdPlatform\Extend\Router\Http;

use Traversable;
use Zend\Router\Exception;
use Zend\Stdlib\ArrayUtils;
use Zend\Stdlib\RequestInterface as Request;
use Zend\Router\Http\Literal as ZendLiteral;
use Zend\Router\Http\Segment as ZendSegment;

class Literal extends ZendLiteral {

    /**
     * Route Method.
     *
     * @var string
     */
    protected $verb;

    /**
     * Create a new literal route.
     *
     * @param  string $route
     * @param  array  $defaults
     * @param  string $verb
     */
    public function __construct($route, array $defaults = [], $verb = 'get')
    {
        $this->route    = $route;
        $this->defaults = $defaults;
        $this->verb     = $verb;
    }

    /**
     * factory(): defined by RouteInterface interface.
     *
     * @see    \Zend\Router\RouteInterface::factory()
     * @param  array|Traversable $options
     * @return Literal
     * @throws Exception\InvalidArgumentException
     */
    public static function factory($options = [])
    {
        if ($options instanceof Traversable) {
            $options = ArrayUtils::iteratorToArray($options);
        } elseif (!is_array($options)) {
            throw new Exception\InvalidArgumentException(sprintf(
                '%s expects an array or Traversable set of options',
                __METHOD__
            ));
        }

        if (!isset($options['route'])) {
            throw new Exception\InvalidArgumentException('Missing "route" in options array');
        }

        if (!isset($options['verb'])) {
            throw new Exception\InvalidArgumentException('Missing "verb" in options array');
        }

        if (!isset($options['defaults'])) {
            $options['defaults'] = [];
        }

        return new static($options['route'], $options['defaults'], $options['verb']);
    }

    /**
     * match(): defined by RouteInterface interface.
     *
     * @see    \Zend\Router\RouteInterface::match()
     * @param  Request      $request
     * @param  integer|null $pathOffset
     * @return RouteMatch|null
     */
    public function match(Request $request, $pathOffset = null)
    {
        if (!method_exists($request, 'getMethod')) {
            return;
        }

        $requestVerb = strtoupper($request->getMethod());
        $matchVerbs  = explode(',', strtoupper($this->verb));
        $matchVerbs  = array_map('trim', $matchVerbs);

        if ( ! in_array($requestVerb, $matchVerbs)) {
            return;
        }

        return parent::match($request, $pathOffset);
    }

}