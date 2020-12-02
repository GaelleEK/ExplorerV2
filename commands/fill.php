<?php
use App\Connection;
require 'C:/Users/acs/code/project-explorerV2/vendor/autoload.php';

$faker = Faker\Factory::create('fr_FR');
$pdo = Connection::getPDO();

$pdo->exec('TRUNCATE TABLE files');
$pdo->exec('TRUNCATE TABLE user');

$files = [];

for ($i = 0; $i < 20; $i++) {
    $pdo->exec("INSERT INTO files
                SET name='{$faker->word(2)}',
                slug='{$faker->slug}',
                url='{$faker->slug}',
                created_at='{$faker->date} {$faker->time}'");
                $files[] = $pdo->lastInsertId();
};
$password = password_hash('admin', PASSWORD_BCRYPT);
$pdo->exec("INSERT INTO user SET username='admin', password= '$password'");