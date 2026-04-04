<?php

return [
    'navigation_label' => 'Registro de auditoria de bloqueio',
    'plural_label' => 'Registros de auditoria de bloqueio',
    'locked' => 'Bloqueado',
    'unlocked' => 'Desbloqueado',
    'expired' => 'Expirado',
    'force_unlocked' => 'Desbloqueio forçado',
    'columns' => [
        'action' => 'Ação',
        'lockable_type' => 'Tipo de recurso',
        'lockable_id' => 'ID do recurso',
        'user_id' => 'Proprietário do bloqueio',
        'actor_user_id' => 'Realizado por',
        'created_at' => 'Ocorrido em',
    ],
    'filters' => [
        'action' => 'Ação',
        'created_at' => 'Intervalo de datas',
        'from' => 'De',
        'until' => 'Até',
    ],
];
