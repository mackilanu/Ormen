<?php

namespace Ormen\Model;

class ModelResponse
{
    private array $response;

    /**
     * Returns the first row in the response array.
     * @return Model
     */
    public function single() : Model
    {
        return $this->response[0];
    }

    public function get_data()
    {
        return $this->response;
    }
}