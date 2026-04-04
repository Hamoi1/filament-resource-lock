<?php

return [
    'navigation_label' => 'Журнал аудита блокировок',
    'plural_label' => 'Журналы аудита блокировок',
    'locked' => 'Заблокировано',
    'unlocked' => 'Разблокировано',
    'expired' => 'Истекло',
    'force_unlocked' => 'Принудительно разблокировано',
    'columns' => [
        'action' => 'Действие',
        'lockable_type' => 'Тип ресурса',
        'lockable_id' => 'ID ресурса',
        'user_id' => 'Владелец блокировки',
        'actor_user_id' => 'Выполнено',
        'created_at' => 'Произошло',
    ],
    'filters' => [
        'action' => 'Действие',
        'created_at' => 'Диапазон дат',
        'from' => 'С',
        'until' => 'До',
    ],
];
