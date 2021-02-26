<?php

namespace Pyr0hu\EloquentChanges;

use Illuminate\Support\Arr;

class ChangeExpectation
{
    private string $property;
    private Changes $changes;
    private $from;

    public function __construct(string $property, Changes $changes)
    {
        $this->property = $property;
        $this->changes = $changes;
    }

    public function from($value): self
    {
        $clone = clone $this;
        $clone->from = $value;

        return $clone;
    }

    public function to($value): bool
    {
        $from = Arr::get($this->changes->getOriginal(), $this->property);
        $to = Arr::get($this->changes->getChanges(), $this->property);

        if ($this->from !== $from) {
            return false;
        }

        if ($to !== $value) {
            return false;
        }

        return true;
    }
}
