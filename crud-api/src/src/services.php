<?php

require_once __DIR__ . '/validation.php';
require_once __DIR__ . '/data.php';

function getAllUsers(string $dataFile): array
{
    $data = loadData($dataFile);
    return ['users' => $data['users']];
}

function createUser(string $dataFile, ?array $input): array
{
    if (!is_array($input)) {
        return ['error' => 'Invalid JSON body', 'status' => 400];
    }

    $error = validateRequiredFields($input, ['name', 'age', 'email']);
    if ($error) {
        return ['error' => $error, 'status' => 400];
    }

    $error = validateUserFields($input);
    if ($error) {
        return ['error' => $error, 'status' => 400];
    }

    $user = insertUser($dataFile, [
        'name' => trim($input['name']),
        'age' => (int) $input['age'],
        'email' => $input['email'],
    ]);

    return ['data' => $user, 'status' => 201];
}