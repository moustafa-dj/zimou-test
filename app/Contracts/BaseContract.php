<?php


namespace App\Contracts;


interface BaseContract
{
    /**
     * @param array $data
     * @return mixed
     */
    public function new(array $data);
}