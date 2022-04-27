<?php

declare(strict_types=1);

namespace Marick\LaravelStrict;

class Strict
{
    private string $helper;
    private array $args;

    public function __construct(string $helper, ...$args)
    {
        $this->helper = $helper;
        $this->args = $args;
    }

    public function string(): string
    {
        return $this->execute();
    }

    public function stringOrNull(): ?string
    {
        return $this->execute();
    }

    public function int(): int
    {
        return $this->execute();
    }

    public function intOrNull(): ?int
    {
        return $this->execute();
    }

    public function float(): float
    {
        return $this->execute();
    }

    public function floatOrNull(): ?float
    {
        return $this->execute();
    }

    public function array(): array
    {
        return $this->execute();
    }

    public function arrayOrNull(): ?array
    {
        return $this->execute();
    }

    private function execute()
    {
        return call_user_func_array($this->helper, $this->args);
    }
}
