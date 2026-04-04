<?php

return [
    'navigation_label' => 'سجل تدقيق القفل',
    'plural_label' => 'سجلات تدقيق القفل',
    'locked' => 'مقفل',
    'unlocked' => 'غير مقفل',
    'expired' => 'منتهي الصلاحية',
    'force_unlocked' => 'فتح القفل إجباريًا',
    'columns' => [
        'action' => 'الإجراء',
        'lockable_type' => 'نوع المورد',
        'lockable_id' => 'معرّف المورد',
        'user_id' => 'مالك القفل',
        'actor_user_id' => 'نُفِّذ بواسطة',
        'created_at' => 'وقع في',
    ],
    'filters' => [
        'action' => 'الإجراء',
        'created_at' => 'نطاق التاريخ',
        'from' => 'من',
        'until' => 'حتى',
    ],
];
