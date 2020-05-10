<?php

declare(strict_types=1);

/**
 * File: functions.php
 *
 * @author Bartosz Kubicki b.w.kubicki@gmail.com>
 * Github: https://github.com/bartoszkubicki
 */

if (!function_exists('decle')) {
    /**
     * @param int $count
     * @param string $singularNominativ
     * @param string $pluralNominativ
     * @param string $pluralGenitive
     * @return string
     */
    function decle(
        int $count,
        string $singularNominativ,
        string $pluralNominativ,
        string $pluralGenitive
    ): string {
        $count = (int) abs($count);

        if ($count === 1) {
            return $singularNominativ;
        }

        if ($count % 10 >= 2 && $count % 10 <= 4 && ($count % 100 < 10 || $count % 100 >= 20)) {
            return $pluralNominativ;
        }

        return $pluralGenitive;
    }
}