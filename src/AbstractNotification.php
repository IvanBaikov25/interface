<?php

namespace Baikov\Work8;

abstract class AbstractNotification implements Notification {
    protected string $status;
    protected int $timestamp;

    public function __construct() {
        $this->status = 'Pending'; 
        $this->timestamp = time(); 
    }

    public function getStatus(): string {
        return $this->status;
    }

    abstract public function send(string $message): string;
    abstract public function getType(): string;
}
