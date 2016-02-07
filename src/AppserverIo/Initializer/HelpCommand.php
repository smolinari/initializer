<?php

/**
 * Appserver\Initializer
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Scott Molinari <scott.molinari@adduco.de>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/description
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Initializer;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * This command provides information about the appserver initializer.
 *
 * @author Scott Molinari <scott.molinari@adduco.de>
 */

class HelpCommand extends Command
{
    private $appVersion;

    public function __construct($appVersion)
    {
        parent::__construct();

        $this->appVersion = $appVersion;
    }

    protected function configure()
    {
        $this
            ->setName('help')
            ->setDescription('Appserver Initializer Help.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $commandHelp = <<<COMMAND_HELP

 Appserver Initializer (%s)
 %s

 This is the official initializer to start new projects based on appserver PHP application server stack.

 To create a new project called <info>blog</info> in the current directory using
 the <info>latest stable version</info> of Symfony, execute the following command:

   <comment>%s new blog</comment>

 Create a project based on the <info>Symfony Long Term Support version</info> (LTS):

   <comment>%3\$s new blog lts</comment>

 Create a project based on a <info>specific Symfony branch</info>:

   <comment>%3\$s new blog 2.3</comment>

 Create a project based on a <info>specific Symfony version</info>:

   <comment>%3\$s new blog 2.5.6</comment>

 Create a <info>demo application</info> to learn how a Symfony application works:

   <comment>%3\$s demo</comment>

COMMAND_HELP;

        $output->writeln(sprintf($commandHelp,
            $this->appVersion,
            str_repeat('=', 20 + strlen($this->appVersion)),
            $this->getExecutedCommand()
        ));
    }
}