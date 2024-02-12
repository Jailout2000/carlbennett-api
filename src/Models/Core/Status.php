<?php

namespace CarlBennett\API\Models\Core;

class Status extends \CarlBennett\API\Models\Errorable implements \JsonSerializable
{
    public array $status = [];

    public function jsonSerialize(): mixed
    {
        return \array_merge(parent::jsonSerialize(), ['status' => $this->status]);
    }
}
