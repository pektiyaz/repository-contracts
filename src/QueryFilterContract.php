<?php
namespace Pektiyaz\RepositoryContracts;
interface QueryFilterContract
{
    /**
     * Apply filters to the query builder.
     */
    public function apply($query);
}