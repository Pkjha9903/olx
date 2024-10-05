<?php
require 'vendor/autoload.php'; 
// MongoDB connection
$mongoClient = new MongoDB\Client("mongodb://localhost:27017");

// Select database and collection
$database = $mongoClient->selectDatabase('olxlist');
$admins = $database->selectCollection('admins');
$buyrequest = $database->selectCollection('buyrequest');
$categories = $database->selectCollection('categories');
$items = $database->selectCollection('items');
$likes = $database->selectCollection('likes');
$reports = $database->selectCollection('reports');
$site = $database->selectCollection('site');
$users = $database->selectCollection('users');
$chatbox = $database->selectCollection('chatbox');
$messages = $database->selectCollection('messages');
