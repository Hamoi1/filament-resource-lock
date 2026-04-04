<?php

return [
    'navigation_label' => 'Journal d\'audit de verrouillage',
    'plural_label' => 'Journaux d\'audit de verrouillage',
    'locked' => 'Verrouillé',
    'unlocked' => 'Déverrouillé',
    'expired' => 'Expiré',
    'force_unlocked' => 'Déverrouillage forcé',
    'columns' => [
        'action' => 'Action',
        'lockable_type' => 'Type de ressource',
        'lockable_id' => 'ID de ressource',
        'user_id' => 'Propriétaire du verrou',
        'actor_user_id' => 'Effectué par',
        'created_at' => 'Survenu le',
    ],
    'filters' => [
        'action' => 'Action',
        'created_at' => 'Plage de dates',
        'from' => 'Du',
        'until' => 'Au',
    ],
];
