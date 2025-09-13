<?php
declare(strict_types=1);

use function Hyperf\Support\env;

return [
    'bin_path' => 'php', // PHP 可执行文件的路径，通常就是 'php'
    'xdebug' => [
        // IDE 所在机器的 IP 「如果 Hyperf 运行在 Docker 或虚拟机内，需设置为宿主机的 IP」
        // 例如 Docker 内可设置为 'host.docker.internal'
        // 例如 WSL 内可设置为宿主机对应 vEthernet (WSL) 的 IPv4 地址
        'client_host' => env('XDEBUG_CLIENT_HOST', '127.0.0.1'),
        // PhpStorm 监听的调试端口
        'client_port' => (int)env('XDEBUG_CLIENT_PORT', 9000),
        'mode' => 'debug',
    ],
    'server_name' => env('XDEBUG_SERVER_NAME', 'Unnamed'), // 在 PhpStorm 中配置的 Server Name
];
