<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Bluecom\Welcome\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use Magento\Framework\App\ObjectManagerFactory;
use Magento\Store\Model\Store;
use Magento\Store\Model\StoreManager;
use Magento\Cron\Observer\ProcessCronQueueObserver;
use Magento\Framework\Console\Cli;
use Magento\Framework\Shell\ComplexParameter;

/**
 * Command for executing cron jobs
 */
class CronCommand extends Command
{


    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName('bluecom:command')
            ->setDescription('test');
        parent::configure();
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $output->writeln('<info>' . 'You did it.' . '</info>');
    }
}
