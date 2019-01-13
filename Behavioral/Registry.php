<?php
class Registry
{
    const ALLOWED_KEYS = [
        'stdClass'
    ];
    /**
     * @var array
     */
    protected static $data = [];
    /**
     * @param string $key
     * @return \stdClass
     */
    public static function getData($key)
    {
        if (!array_key_exists($key, self::$data) || !isset(self::$data[$key])) {
            throw new \InvalidArgumentException('Invalid key given');
        }

        return self::$data[$key];
    }
    /**
     * @param $key string
     * @param $data \stdClass
     */
    public static function setData( $key, $data)
    {
        if (!in_array($key, self::ALLOWED_KEYS)) {
            throw new \InvalidArgumentException('Invalid key given');
        }
        self::$data[$key] = $data;
    }
}