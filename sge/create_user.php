<?php
$user = \App\Models\User::where('email', 'admin@distribuidora.com')->first();
if (!$user) {
    $user = new \App\Models\User();
    $user->name = 'Administrador';
    $user->email = 'admin@distribuidora.com';
    $user->password = bcrypt('password');
    $user->save();
}
echo "User created";
