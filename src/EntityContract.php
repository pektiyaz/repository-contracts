<?php

namespace Pektiyaz\RepositoryContracts;

interface EntityContract
{
    /**
     * Get the ID of the entity.
     *
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * Set the ID of the entity.
     *
     * @param int|null $id
     * @return void
     */
    public function setId(?int $id): void;

    /**
     * Get the creation timestamp of the entity.
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string;

    /**
     * Set the creation timestamp of the entity.
     *
     * @param string|null $created_at
     * @return void
     */
    public function setCreatedAt(?string $created_at): void;

    /**
     * Get the last update timestamp of the entity.
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string;

    /**
     * Set the last update timestamp of the entity.
     *
     * @param string|null $updated_at
     * @return void
     */
    public function setUpdatedAt(?string $updated_at): void;

    /**
     * Convert the entity to an array.
     *
     * @return array
     */
    public function toArray(): array;

    /**
     * Convert the entity to a JSON string.
     *
     * @return string
     */
    public function toJson(): string;

    /**
     * Build the entity from another entity object.
     *
     * @param object $item
     * @return self
     */
    public function fromEntity(object $item): self;

    /**
     * Build the entity from an array of data.
     *
     * @param array $item
     * @return self
     */
    public function fromArrayData(array $item): self;

    /**
     * Build the entity from a JSON string.
     *
     * @param string $json
     * @return self
     */
    public function fromJson(string $json): self;
}
