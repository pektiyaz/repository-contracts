# Repository Contracts

This repository defines a reusable and extensible set of contracts (interfaces) for implementing the Repository pattern in a clean and consistent way across Laravel applications.

## ✨ Purpose

These contracts provide a foundation for working with data access layers in a decoupled, testable, and flexible manner. By enforcing a contract-based structure, you can:

- Separate business logic from data access logic
- Write cleaner and more maintainable code
- Easily swap implementations or mock repositories in tests
- Support advanced querying via query filters

---

## 📦 Installation
You can install the Repository Contracts package using Composer:
```shell
composer require pektiyaz/repository-contracts
```


## 📦 Interfaces

### `RepositoryContract`

This is the primary interface for a repository. It defines common methods for working with entities:

#### 🔍 Basic Methods

- `findById($id)`
- `findOneBy(array $conditions)`
- `findAllBy(array $conditions)`
- `findAll()`

#### ✏️ Write Operations

- `create(array $data)`
- `update($id, array $data)`
- `delete($id)`
- `bulkCreate(array $records)`
- `bulkUpdate(array $conditions, array $data)`
- `bulkDelete(array $conditions)`

#### 📄 Pagination & Existence

- `paginate(int $page, int $perPage, array $conditions = [])`
- `exists(array $conditions)`
- `count(array $conditions = [])`

#### 🗑️ Soft Deletes

- `restore(int $id)`
- `findTrashed()`
- `findTrashedById($id)`
- `forceDelete($id)`

#### 🧠 Advanced Filtering

- `filter(QueryFilterContract $filter)`
- `countByFilter(QueryFilterContract $filter)`
- `deleteByFilter(QueryFilterContract $filter)`
- `updateByFilter(QueryFilterContract $filter, array $data)`
- `findByCallback(callable $callback)`

Each method returns either a single `EntityContract`, an array of `EntityContract`, a boolean, an integer, or `null`, depending on the operation.

---

### `QueryFilterContract`

Defines a contract for advanced query filtering using filter objects.

```php
public function apply($query);
```




Let me know if you’d like to generate badges, link examples of concrete implementations, or include Laravel-specific helpers in the README.
