<?php

namespace Baikov\Work8;

class EmailNotification extends AbstractNotification {
    public function send(string $message): string {
        $this->status = 'Sent';
        return "Email отправлен с таким содержимым: $message";
    }

    public function getType(): string {
        return 'Email';
    }
}
