<?php
// config/services.php
use App\Service\FileUploader;

$container->autowire(FileUploader::class)
    ->setArgument('$targetDirectory', '%brochures_directory%');