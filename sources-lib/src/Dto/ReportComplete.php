<?php

namespace Vin\SourcesLib\Dto;

class ReportComplete
{
    private int $requestId;
    private string $source;
    private array $data;
    private string $status;

    public function getRequestId(): int
    {
        return $this->requestId;
    }

    public function setRequestId(int $requestId): self
    {
        $this->requestId = $requestId;

        return $this;
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function setSource(string $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
