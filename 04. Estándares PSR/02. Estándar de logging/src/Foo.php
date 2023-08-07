<?php

class Foo {
    private $logger;

    public function _construct(\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function test()
    {
        $this->logger->info("Test message!!!");
    }
}