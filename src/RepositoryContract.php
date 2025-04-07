<?php
namespace Pektiyaz\RepositoryContracts;
interface RepositoryContract
{
    /**
     * Find an entity by its primary ID.
     *
     * @param int|string $id
     * @return EntityContract|null
     */
    public function findById(int|string $id): ?EntityContract;

    /**
     * Find a single entity that matches the given conditions.
     *
     * @param array $conditions
     * @return EntityContract|null
     */
    public function findOneBy(array $conditions): ?EntityContract;

    /**
     * Find all entities that match the given conditions.
     *
     * @param array $conditions
     * @return EntityContract[]
     */
    public function findAllBy(array $conditions): array;

    /**
     * Retrieve all entities from the data source.
     *
     * @return array
     */
    public function findAll(): array;

    /**
     * Create a new entity with the given data.
     *
     * @param array $data
     * @return EntityContract
     */
    public function create(array $data): EntityContract;

    /**
     * Update an existing entity by its ID with the given data.
     *
     * @param int|string $id
     * @param array $data
     * @return bool
     */
    public function update(int|string $id, array $data): bool;

    /**
     * Delete an entity by its ID.
     *
     * @param int|string $id
     * @return bool
     */
    public function delete(int|string $id): bool;

    /**
     * Check if any entity exists that matches the given conditions.
     *
     * @param array $conditions
     * @return bool
     */
    public function exists(array $conditions): bool;

    /**
     * Count the number of entities that match the given conditions.
     *
     * @param array $conditions
     * @return int
     */
    public function count(array $conditions = []): int;

    /**
     * Restore a deleted entity
     *
     * @param int $id
     * @return EntityContract
     */
    public function restore(int $id): EntityContract;

    /**
     * Get a paginated list of entities.
     *
     * @param int $page
     * @param int $perPage
     * @param array $conditions
     * @return EntityContract[]
     */
    public function paginate(int $page, int $perPage, array $conditions = []): array;


    /**
     * Find all soft-deleted entities.
     *
     * @return array
     */
    public function findTrashed(): array;

    /**
     * Find a trashed entity by its ID.
     *
     * @param int|string $id
     * @return EntityContract|null
     */
    public function findTrashedById(int|string $id): ?EntityContract;

    /**
     * Permanently delete a soft-deleted entity.
     *
     * @param int|string $id
     * @return bool
     */
    public function forceDelete(int|string $id): bool;


    /**
     * Find entities by a callback or closure (for complex filtering).
     *
     * @param callable $callback
     * @return EntityContract[]
     */
    public function findByCallback(callable $callback): array;

    /**
     * Create multiple entities at once.
     *
     * @param array $records
     * @return EntityContract[]
     */
    public function bulkCreate(array $records): array;

    /**
     * Update multiple entities by conditions.
     *
     * @param array $conditions
     * @param array $data
     * @return int Number of affected rows
     */
    public function bulkUpdate(array $conditions, array $data): int;

    /**
     * Delete multiple entities by conditions.
     *
     * @param array $conditions
     * @return int Number of deleted rows
     */
    public function bulkDelete(array $conditions): int;

    /**
     * Use a filter object to retrieve entities.
     * @param QueryFilterContract $filter
     * @return EntityContract[]
     */
    public function filter(QueryFilterContract $filter): array;

    /**
     * Use a filter object to retrieve count of entities .
     * @param QueryFilterContract $filter
     * @return int
     */
    public function countByFilter(QueryFilterContract $filter): int;

    /**
     * Delete using filter object.
     *
     * @param QueryFilterContract $filter
     * @return int
     */
    public function deleteByFilter(QueryFilterContract $filter): int;

    /**
     * Update using filter object.
     * @param QueryFilterContract $filter
     * @param array $data
     * @return int Number of affected rows
     */
    public function updateByFilter(QueryFilterContract $filter, array $data): int;
}