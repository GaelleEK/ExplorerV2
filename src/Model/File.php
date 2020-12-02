<?php
namespace App\Model;

use App\Helpers\Text;
use DateTime;


class File {
    private $id;
    private $slug;
    private $name;
    private $url;
    private $created_at;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName (string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getUrl (): ?string
    {
        return $this->url;
    }

    public function setUrl (string $url): self
    {
        $this->url = $url;
        return $this;
    }

    public function getCreatedAt(): DateTime
    {
        return new DateTime($this->created_at);
    }

    public function setCreatedAt(string $date): self
    {
        $this->created_at = $date;
        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;
        return $this;
    }

    public function getID(): ?int
    {
        return $this->id;
    }

    public function setID(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getFormattedContent(): ?string
    {
        return nl2br(e($this->content));
    }

}