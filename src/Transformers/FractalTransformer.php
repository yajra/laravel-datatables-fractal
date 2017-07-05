<?php

namespace Yajra\DataTables\Transformers;

use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Serializer\SerializerAbstract;
use League\Fractal\TransformerAbstract;

class FractalTransformer
{
    /**
     * @var \League\Fractal\Manager
     */
    protected $fractal;

    /**
     * FractalTransformer constructor.
     *
     * @param \League\Fractal\Manager $fractal
     */
    public function __construct(Manager $fractal)
    {
        $this->fractal = $fractal;
    }

    /**
     * Transform output using the given transformer and serializer.
     *
     * @param mixed $output
     * @param mixed $transformer
     * @param mixed $serializer
     * @return array
     */
    public function transform($output, $transformer, $serializer = null)
    {
        if ($serializer !== null) {
            $this->fractal->setSerializer($this->createSerializer($serializer));
        }

        $resource   = new Collection($output, $this->createTransformer($transformer));
        $collection = $this->fractal->createData($resource)->toArray();

        return $collection['data'];
    }

    /**
     * Get or create transformer serializer instance.
     *
     * @param mixed $serializer
     * @return \League\Fractal\Serializer\SerializerAbstract
     */
    protected function createSerializer($serializer)
    {
        if ($serializer instanceof SerializerAbstract) {
            return $serializer;
        }

        return new $serializer();
    }

    /**
     * Get or create transformer instance.
     *
     * @param mixed $transformer
     * @return \League\Fractal\TransformerAbstract
     */
    protected function createTransformer($transformer)
    {
        if ($transformer instanceof TransformerAbstract) {
            return $transformer;
        }

        return new $transformer();
    }
}
