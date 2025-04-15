<?php

namespace baikov\work8;

class SmsNotification extends AbstractNotification {
    public function send(string $message): string {
        $this->status = 'Sent';
        return "SMS отправлен с таким содержимым: $message";
    }

    public function getType(): string {
        return 'SMS';
    }
}
