<?php


// Require the correct variable type to be used (no auto-converting)
declare (strict_types=1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Load you classes
require_once 'config.php';
require_once 'classes/DatabaseManager.php';
require_once 'classes/CardRepository.php';

$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);
$databaseManager->connect();
try {
    $dbobj = new DatabaseManager();
    $pdo = $dbobj->connect();

    // $pdo for database operations


} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

// This example is about a Pokémon card collection
// Update the naming if you'd like to work with another collection
$cardRepository = new CardRepository($databaseManager);
$cards = $cardRepository->get();

// Get the current action to execute
// If nothing is specified, it will remain empty (home should be loaded)
// $action = $_GET['action'] ?? null;
$page = $_SERVER["REQUEST_URI"];
$BASE_PATH = "localhost:8080/BeCode/The-Mountain/php-crud";

// Load the relevant action
// This system will help you to only execute the code you want, instead of all of it (or complex if statements)
switch ($page) {
    case $BASE_PATH:
        overview($databaseManager);
        break;
    case $BASE_PATH . 'create':
        create($databaseManager);
        break;
    case $BASE_PATH . 'edit':
        echo "Editing ...";
        break;
    default:
        overview();
        break;
}

function overview()
{
    // Load your view
    // Tip: you can load this dynamically and based on a variable, if you want to load another view
    require 'overview.php';
}

function create($databaseManager)
{
    if (isset($_POST['submit'])) {
        $cardRepository = new CardRepository($databaseManager);
        $cardRepository->create();
    }
    require 'createView.php';
    // TODO: provide the create logic
}
/*
function create(CardRepository $cardRepository)
{
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit'])) {
        // TODO: Handle form submission, extract form data, and call the create method
        // Example: $cardRepository->create($_POST['name']);
    }
    // Load your create view
    require 'createView.php';
}
*/