<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

    // $collection = collect(Storage::json('projects.json'));

    $rolesPermission= [
        'admin' => [
            'view user', 'create user', 'edit user', 'delete user', 'view post', 'create post', 'edit post', 'delete post', 'view category', 'create category'
        ],
        'user' => [
            'view post', 'create post', 'edit post', 'delete post'
        ],
        'subscriber' => [
            'view post', 'view comment'
        ]
    ];

    $collection = collect($rolesPermission);

    // $users->where('age', '<', 30)->toArray();

    // dump($users->where('age', '<', 30)->toJson(JSON_PRETTY_PRINT));
    // $users->combine($keys)->dump();
    // dd($users->where('age', 30));
    $collection->except('admin', 'subscriber')->dd();

    //  dd(
    //     $users

    // );

    //  dump(
    //     $users

    // );
