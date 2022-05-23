<?php

namespace App\Entity;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;

class Category extends Entity
{
    private ?string $title;

    private ?string $description;

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
