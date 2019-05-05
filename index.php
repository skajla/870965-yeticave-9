<?php
require_once('helpers.php');

$is_auth = rand(0, 1);
$user_name = 'Виктория';

$categories = ['Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', 'Инструменты', 'Разное'];

$announcements = [
    ['title' => '2014 Rossignol District Snowboard', 'category' => 'Доски и лыжи', 'cost' => 10999, 'img_path' => 'img/lot-1.jpg'],
    ['title' => 'DC Ply Mens 2016/2017 Snowboard', 'category' => 'Доски и лыжи', 'cost' => 159999, 'img_path' => 'img/lot-2.jpg'],
    ['title' => 'Крепления Union Contact Pro 2015 года размер L/XL', 'category' => 'Крепления', 'cost' => 8000, 'img_path' => 'img/lot-3.jpg'],
    ['title' => 'Ботинки для сноуборда DC Mutiny Charocal', 'category' => 'Ботинки', 'cost' => 10999, 'img_path' => 'img/lot-4.jpg'],
    ['title' => 'Куртка для сноуборда DC Mutiny Charocal', 'category' => 'Одежда', 'cost' => 7500, 'img_path' => 'img/lot-5.jpg'],
    ['title' => 'Маска Oakley Canopy', 'category' => 'Разное', 'cost' => 5400, 'img_path' => 'img/lot-6.jpg']
];

function format_cost ($cost) {
    $cost = ceil($cost);
    $final_cost = $cost;

    if ($cost >= 1000) {
        $final_cost = number_format($cost, 0, '.', ' ');
    }

    return $final_cost .= '<b class="rub">р</b>';
}

$content_arguments = [
    'categories' => $categories,
    'announcements' => $announcements
];

$content = include_template('index.php', $content_arguments);

$layout_config = [
    'title' => 'Главная',
    'is_auth' => $is_auth,
    'user_name' => $user_name,
    'content' => $content,
    'categories' => $categories
];

$layout = include_template('layout.php', $layout_config);

print($layout);
?>
