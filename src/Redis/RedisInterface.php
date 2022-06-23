<?php

namespace Avn\Contracts\Redis;

interface RedisInterface
{
    public function hget($key, $field): ?string;

    public function hset($key, $field, $value);

    public function keys($pattern): array;

    public function hdel($keys): int;

    public function get($key): ?string;

    public function set($key, $value, $expireResolution = null, $expireTTL = null, $flag = null);

    public function del($keys);

    public function rpush($key, array $values);

    public function llen($key): int;

    public function lrange($key, $start, $stop): array;
}
