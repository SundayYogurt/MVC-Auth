<?php

namespace Config;

use CodeIgniter\Config\Filters as BaseFilters; // นำเข้าคลาส BaseFilters จาก CodeIgniter\Config
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;

class Filters extends BaseFilters // ขยาย BaseFilters
{
    public array $aliases = [
        'csrf'     => CSRF::class,
        'toolbar'  => DebugToolbar::class,
        'honeypot' => Honeypot::class,
        'authGuard' => \App\Filters\AuthGuard::class, // ฟิลเตอร์ที่สร้างขึ้นเอง
    ];

    public array $globals = [ // ต้องใช้ array
        'before' => [],
        'after' => [],
    ];

    public array $required = [ // กำหนดฟิลเตอร์ที่จำเป็น
        'before' => [],
        'after' => [],
    ];

    public array $methods = []; // ต้องใช้ array

    public array $filters = []; // ต้องใช้ array
}
