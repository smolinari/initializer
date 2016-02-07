<?php
namespace AppserverIo\Initializer;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Filesystem\Exception\IOException;
use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local;
use Templates;

/**
 * New initialization command
 *
 */



class NewCommand extends Command
{
// command for creation of bare bones project (no -include)
// 1. Ask for project name
// 2. Ask if virtual host should be created?
// 3. If yes, ask for name of domain (i.e. my-website.com or www.my-website.com)
// 4. Create virtual host
// 5. Add domain to hosts file
// 6. Create file


// command for creation of new project with RoutLt
// 1. Ask for project name
// 2. Ask for name of domain (i.e. my-website.com or www.my-website.com)
// 3. Create virtual host
// 4. Add domain to hosts file
// 5. Create file
}