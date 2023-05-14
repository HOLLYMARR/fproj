<?php

/**
 * 生成php数
 * @param $str
 * @return mixed
 */
function prase($str) {
    return yaml_parse($str);
}

/**
 * Created by PhpStorm.
 * User: martindou
 * Date: 2017/10/31
 * Time: 下午2:33
 */

function parseFromFile($filename) {
    return yaml_parse_file($filename);
}

/**
 * 通过php数组生成yaml数据
 * @param $data
 * @return mixed
 */
function emit($data) {

    return yaml_emit($data);
}

/**
 * 将php数组生成数据到yaml文件
 * @param $filename
 * @param $data
 * @return bool
 */
function emit2File($filename, $data) {
    return yaml_emit_file($filename, $data);
}


/*
$filename = '../http/bdmap.yaml';
$ret = parseFromFile($filename);
var_dump($ret);
*/


/*
$data = array(

    'proto' => 'http',
    'server' => array(
        array(
            'ip' => '127.0.0.1',
            'port' => '8080',
        ),
        array(
            'host' => 'bdmap.baidu.com',
        ),
    ),

    'ctimeout' => 1000,
    'rtimeout' => 1000,
    'wtimeout' => 1000,
    'timeout' => 1000,
);

$ret = emit($data);
//$ret = emit2File('test.yaml',$data);
var_dump($data);
*/
