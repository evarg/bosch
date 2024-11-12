<?php

use App\Enums\EventsUploadStatus;

return [
    EventsUploadStatus::UPLOADED->value => 'UPLOADED',
    EventsUploadStatus::IMPORTED->value => 'IMPORTED',
];
