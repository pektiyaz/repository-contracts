<?php
namespace Pektiyaz\RepositoryContracts;
interface EntityContract
{
    public function getId(): ?int;
    public function setId(int|null $id): void;
    public function getCreatedAt(): string;
    public function setUpdatedAt(?string $updated_at): void;
    public function getUpdatedAt(): string;
    public function setCreatedAt(?string $created_at): void;


    public function toArray(): array;
    public function toJson(): string;
    public function fromEntity(object $item): object;
    public function fromArray(array $item): object;

}