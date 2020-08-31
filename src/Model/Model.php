<?php
namespace Ormen\Model;

use Ormen\Orm\InitDb;

/**
 * Class Model
 * @package Ormen\Model
 */
class Model
{
    protected $db;

    public string $id;
    public string $created_at;
    public string $updated_at;

    public function __construct()
    {
        $this->db = new InitDb;
    }

    public function store()
    {
        foreach ($this as $column => $value)
        {
            //Update an existing row in the database
            if(isset($this->id)) {}
            //Create a new row in the database
            if(!isset($this->id)) {}
            echo $value;
        }
    }

    /**
     * Get a single result by id.
     * @param int $id
     */
    public function get(int $id)
    {

    }

    /**
     * Get an array of values by a condition
     * @param string $column
     * @param string $condition
     * @param string $value
     */
    public function where(string $column, string $condition, string $value)
    {

    }
}