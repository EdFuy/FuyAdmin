<?php
/**
 * Created by PhpStorm.
 * User: mastrt
 * Date: 17/2/23
 * Time: 下午4:19
 */
if (!function_exists('active_class')) {
    /**
     * Get the active class if the condition is not falsy
     *
     * @param        $condition
     * @param string $activeClass
     * @param string $inactiveClass
     *
     * @return string
     */
    function active_class($condition, $activeClass = 'active', $inactiveClass = '')
    {
        return app('active')->getClassIf($condition, $activeClass, $inactiveClass);
    }
}
if (!function_exists('if_uri_pattern')) {
    /**
     * Check if the current URI matches one of specific patterns (using `str_is`)
     *
     * @param array|string $patterns
     *
     * @return bool
     */
    function if_uri_pattern($patterns)
    {
        return app('active')->checkUriPattern($patterns);
    }
}