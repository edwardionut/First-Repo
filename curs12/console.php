<?php

require_once "vendor/autoload.php";

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

$application = new Application();

$application->register('info')
    ->setCode(function (InputInterface $input, OutputInterface $output) {
        $output->writeln('Info Console App');
        dump(new G9\Curs12\Shop\Magazin());
        return Command::SUCCESS;
});

$application->run();
