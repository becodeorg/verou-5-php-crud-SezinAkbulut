<?php


// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern


class CardRepository
{
    private DatabaseManager $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    // Create a new record
    public function create(string $name): void
    {
        // TODO: Create an SQL query to insert a new record with the provided name
        // TODO: Use your database connection (see $this->databaseManager) and execute the query
    }

    // Get one record by ID
    public function find(int $id): ?array
    {
        // TODO: Create an SQL query to retrieve a record by ID
        // TODO: Use your database connection (see $this->databaseManager) and execute the query
        // TODO: Return the fetched data or null if not found
        return null;
    }

    // Get all records
    public function getAll(): array
    {
        // TODO: Create an SQL query to retrieve all records
        // TODO: Use your database connection (see $this->databaseManager) and execute the query
        // TODO: Fetch and return the data
        // Example using dummy data:
        return [
            ['name' => 'dummy one'],
            ['name' => 'dummy two'],
        ];
    }

    // Update a record by ID
    public function update(int $id, string $name): void
    {
        // TODO: Create an SQL query to update a record by ID with the provided name
        // TODO: Use your database connection (see $this->databaseManager) and execute the query
    }

    // Delete a record by ID
    public function delete(int $id): void
    {
        // TODO: Create an SQL query to delete a record by ID
        // TODO: Use your database connection (see $this->databaseManager) and execute the query
    }
}

