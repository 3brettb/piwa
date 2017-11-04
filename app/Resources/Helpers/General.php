<?php

/**
 * If the check value is set, return the check value
 * or specified return value. Otherwise, return the
 * default value
 *
 * @param mixed $check
 * @param mixed $default
 * @param mixed $return
 * @return mixed
 */
function issetOr($check, $default, $return = null)
{
    return ($return) ? isset($check) ? $check : $return : isset($check) ? $check : $default;
}