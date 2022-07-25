<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'chat/store',
        '/teacher/find_class',
        '/teacher/find_course',
        '/teacher/find_student',
        '/teacher/find_notes',
        '/student/find_class',
        '/student/find_course',
        '/student/find_my_course',
        '/student/find_notes',
        '/main_find_course',
        '/main_find_course',
    ];
}
