<?php

declare(strict_types=1);

use Steevanb\ParallelProcess\{
    Console\Application\ParallelProcessesApplication,
    Process\Process
};
use Symfony\Component\Console\Input\ArgvInput;

require $_SERVER['COMPOSER_HOME'] . '/vendor/autoload.php';
$rootDir = dirname(__DIR__, 2);

$application = new ParallelProcessesApplication();

$composerProcess = (new Process([$rootDir . '/bin/composer', 'update', '--ansi']))
    ->setName('composer update');

$phpPpDir = $rootDir . '/vendor/php-pp';
if (is_dir($phpPpDir)) {
    $rmPhpPpProcess = (new Process(['rm', '-rf', $phpPpDir]))->setName('rm -rf vendor/php-pp');
    $application->addProcess($rmPhpPpProcess);
    $composerProcess->getStartCondition()->addProcessSuccessful($rmPhpPpProcess);
}

$symlinksProcess = new Process([$rootDir . '/bin/dev/symlinks']);
$symlinksProcess->getStartCondition()->addProcessSuccessful($composerProcess);

$application
    ->addProcess($composerProcess)
    ->addProcess($symlinksProcess)
    ->run(new ArgvInput($argv));
