<?php

use App\Enums\EventsUploadStatus;

return [
    EventsUploadStatus::UPLOADED->value => 'These credentials do not match our records 1.',
    EventsUploadStatus::IMPORTED->value => 'These credentials do not match our records 2.',

];
