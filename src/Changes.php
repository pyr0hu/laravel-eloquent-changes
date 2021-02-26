<?php

namespace Pyr0hu\EloquentChanges;

use Illuminate\Database\Eloquent\Model;

class Changes
{
    private array $original;
    private array $changes;

    public function __construct(array $original, array $changes)
    {
        $this->original = $original;
        $this->changes = $changes;
    }

    public static function fromModel(Model $model)
    {
        $changes = $model->getChanges();

        // If the model was created recently, load all properties into the changes array.
        if ($model->wasRecentlyCreated) {
            $changes = $model->withoutRelations()->toArray();
        }

        return new self($model->getOriginal(), $changes);
    }

    public function changed(string $property): ChangeExpectation
    {
        return new ChangeExpectation($property, $this);
    }

    public function getOriginal(): array
    {
        return $this->original;
    }

    public function getChanges(): array
    {
        return $this->changes;
    }
}
