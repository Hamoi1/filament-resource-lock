<?php

return [
    'navigation_label' => 'Sperr-Auditprotokoll',
    'plural_label' => 'Sperr-Auditprotokolle',
    'locked' => 'Gesperrt',
    'unlocked' => 'Entsperrt',
    'expired' => 'Abgelaufen',
    'force_unlocked' => 'Zwangsweise entsperrt',
    'columns' => [
        'action' => 'Aktion',
        'lockable_type' => 'Ressourcentyp',
        'lockable_id' => 'Ressourcen-ID',
        'user_id' => 'Sperrinhaber',
        'actor_user_id' => 'Durchgeführt von',
        'created_at' => 'Aufgetreten am',
    ],
    'filters' => [
        'action' => 'Aktion',
        'created_at' => 'Datumsbereich',
        'from' => 'Von',
        'until' => 'Bis',
    ],
];
