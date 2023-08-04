<?php

interface EmailTemplateInterface
{
    public function get(): string;
    public function fillOut(array $data): string;
}
