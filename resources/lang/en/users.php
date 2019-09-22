<?php

return [
    'plural' => 'Users',
    'singular' => 'User',
    'empty' => 'There is no users',
    'select' => 'Select User',
    'actions' => [
        'list' => 'List Users',
        'show' => 'Show',
        'create' => 'Add new user',
        'edit' => 'Edit',
        'delete' => 'Delete',
    ],
    'messages' => [
        'created' => 'User has been successfully created.',
        'updated' => 'User has been successfully updated.',
        'deleted' => 'User has been successfully deleted',
    ],
    'attributes' => [
        'name' => 'Name',
        'email' => 'Email',
        'password' => 'Password',
        'password_confirmation' => 'Password Confirmation',
        'avatar' => 'Avatar',
        'type' => 'Type',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'You are about to delete user!',
            'info' => 'You cannot undo this action.',
            'confirm' => 'Confirm Delete',
            'cancel' => 'Cancel',
        ],
    ],
];
