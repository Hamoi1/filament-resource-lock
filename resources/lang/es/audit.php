<?php

return [
    'navigation_label' => 'Registro de auditoría de bloqueo',
    'plural_label' => 'Registros de auditoría de bloqueo',
    'locked' => 'Bloqueado',
    'unlocked' => 'Desbloqueado',
    'expired' => 'Expirado',
    'force_unlocked' => 'Desbloqueo forzado',
    'columns' => [
        'action' => 'Acción',
        'lockable_type' => 'Tipo de recurso',
        'lockable_id' => 'ID de recurso',
        'user_id' => 'Propietario del bloqueo',
        'actor_user_id' => 'Realizado por',
        'created_at' => 'Ocurrido en',
    ],
    'filters' => [
        'action' => 'Acción',
        'created_at' => 'Rango de fechas',
        'from' => 'Desde',
        'until' => 'Hasta',
    ],
];
