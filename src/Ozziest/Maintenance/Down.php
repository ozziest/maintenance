<?php namespace Ozziest\Maintenance;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Down extends Command {   

    /**
     * Class constructer 
     *
     * @param  string       $path 
     * @return null
     */
    public function __construct($path)
    {
        parent::__construct();
        $this->path = $path;
    }

    /**
     * Command configuration
     *
     * @return null
     */
    protected function configure()
    {
        $this->setName('down')
             ->setDescription('Put the application into maintenance mode.');
    }

    /**
     * Execution
     *
     * @param  InputInterface       $input 
     * @param  OutputInterface      $output
     * @return null
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        touch($this->path.'/down');
        $output->writeln('<comment>Application is now in maintenance mode.</comment>');
    }

}