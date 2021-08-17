<?php declare(strict_types=1);
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://swoft.org/docs
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace Swoft\Devtool;

use Swoft;

/**
 * Class DevTool
 */
final class DevTool
{
    public const VERSION      = '2.0.0';

    public const ROUTE_PREFIX = '/__devtool';

    public static $table;

    /**
     * @param string $msg
     * @param array  $data
     * @param string $type
     * @param array  $opts
     */
    public static function log(string $msg, array $data = [], string $type = 'debug', array $opts = []): void
    {
        // if (Swoft::server() && !Swoft::server()->isDaemonize()) {
        //     ConsoleUtil::log($msg, $data, $type, [
        //         'DevTool',
        //         'WorkerId' => App::getWorkerId(),
        //         'CoId'     => Coroutine::tid()
        //     ]);
        // }

        // if ($logger = App::getLogger()) {
        //     $logger->log($type, $msg, $data);
        // }
    }
}
