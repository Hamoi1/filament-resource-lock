<?php

return [
    'navigation_label' => 'Vergrendeling auditlogboek',
    'plural_label' => 'Vergrendeling auditlogboeken',
    'locked' => 'Vergrendeld',
    'unlocked' => 'Ontgrendeld',
    'expired' => 'Verlopen',
    'force_unlocked' => 'Geforceerd ontgrendeld',
    'columns' => [
        'action' => 'Actie',
        'lockable_type' => 'Resourcetype',
        'lockable_id' => 'Resource-ID',
        'user_id' => 'Vergrendeling eigenaar',
        'actor_user_id' => 'Uitgevoerd door',
        'created_at' => 'Opgetreden op',
    ],
    'filters' => [
        'action' => 'Actie',
        'created_at' => 'Datumbereik',
        'from' => 'Van',
        'until' => 'Tot',
    ],
];
