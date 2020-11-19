<?php
//https://php_benchmark.onlinephpfunctions.com/
//PHP benchmarker by Paul Taulborg (njaguar at https://forums.d2jsp.org) - Modified by Jeroen Post

$bm = new benchmarkManage();

$head = str_pad("#", 36, "#");

if ($bm::SHOW_OUTPUT) {
    echo "<pre>" . str_pad(' PHP ' . PHP_VERSION . ' BENCHMARK ', 36, "#", STR_PAD_BOTH) . "\nStart : " . date("m/d/Y H:i:s a") . "\nServer : {$_SERVER['SERVER_NAME']}@{$_SERVER['SERVER_ADDR']}\nPlatform : " . PHP_OS . "\nPHP version: " . phpversion() . "\n$head\n";
}

$details_array = array(PHP_VERSION, $_SERVER['SERVER_NAME'], $_SERVER['SERVER_ADDR'], PHP_OS);

echo json_encode($details_array) . '<br>';

$run_times = 1000000;
$run_times_slow_function = 10000;

$string_1 = 'bob & jim & tim & kim & me & you are &&&& =%"';
$string_2 = '     what      ';
$string_3 = strtoupper($string_1);
$string_4 = '1234a';
$string_5 = '64x32';
$string_6 = 'this is a link to https://google.com which is a really popular site';
$string_7 = 'number %d is like a string %s that likes to hex %x it out';
$string_8 = $string_7 . ' and then some';
$string_9 = 'quotes\'are "fun" to use\'. Most of the time. \\ ya';

$array_1 = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h' => 1, 'i' => 2, 'j' => 0);
$array_2 = array('coffee', 'brown', 'caffeine');

$time_1 = '12/29/2011 10:15:37pm';

$now = time();


$bm->startTimer();

for ($i = 0; $i < $run_times; ++$i)
    ;

$bm->stop('for');


$bm->startTimer();

while ($i > 0)
    --$i;

$bm->stop('while');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++) {

    $z = $i % 4;

    if ($z == 0) {

    } else if ($z == 1) {

    } else if ($z == 2) {

    } else {

    }
}

$bm->stop('if else');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++) {

    $z = $i % 4;

    switch ($z) {

        case 0:
            break;

        case 1:
            break;

        case 2:
            break;

        default:
            break;
    }
}

$bm->stop('switch');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++) {

    $z = ($i % 2 == 0 ? 1 : 0);
}

$bm->stop('Ternary');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++)
    str_replace('&', '&amp;', $string_1);

$bm->stop('str_replace');


$bm->startTimer();

for ($i = 0; $i < $run_times_slow_function; $i++)
    preg_replace("#(^|\s)(http[s]?://\w+[^\s\[\]\<]+)#i", '\1<a href="\2">\2</a>', $string_6);

$bm->stop('preg_replace');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++)
    preg_match("#http[s]?://\w+[^\s\[\]\<]+#", $string_6);

$bm->stop('preg_match');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++)
    count($array_1);

$bm->stop('count');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++) {

    isset($array_1['i']);

    isset($array_1['zzNozz']);
}

$bm->stop('isset');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++)
    time();

$bm->stop('time');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++)
    strlen($string_1);

$bm->stop('strlen');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++)
    sprintf($string_7, $i, $string_5, $i);

$bm->stop('sprintf');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++)
    strcmp($string_7, $string_8);

$bm->stop('strcmp');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++)
    trim($string_2);

$bm->stop('trim');


$bm->startTimer();

for ($i = 0; $i < $run_times_slow_function; $i++)
    explode('&', $string_1);

$bm->stop('explode');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++)
    implode('&', $array_1);

$bm->stop('implode');


$f1 = $bm->totalTime;

$bm->startTimer();

for ($i = 0; $i < $run_times; $i++)
    number_format($f1, 3);

$bm->stop('number_format');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++)
    floor($f1);

$bm->stop('floor');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++)
    strpos($string_2, 't');

$bm->stop('strpos');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++)
    substr($string_1, 10);

$bm->stop('substr');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++)
    intval($string_4);

$bm->stop('intval');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++)
    intval($string_4);

$bm->stop('(int)');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++) {

    is_array($array_1);

    is_array($string_1);
}

$bm->stop('is_array');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++) {

    is_numeric($f1);

    is_numeric($string_4);
}

$bm->stop('is_numeric');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++) {

    is_int($f1);

    is_int($string_4);
}

$bm->stop('is_int');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++) {

    is_string($f1);

    is_string($string_4);
}

$bm->stop('is_string');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++)
    ip2long('1.2.3.4');

$bm->stop('ip2long');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++)
    long2ip(89851921);

$bm->stop('long2ip');


$bm->startTimer();

for ($i = 0; $i < $run_times_slow_function; $i++)
    date('F j, Y, g:i a', $now);

$bm->stop('date');


$bm->startTimer();

for ($i = 0; $i < $run_times_slow_function; $i++)
    strftime('%B %e, %Y, %l:%M %P', $now);

$bm->stop('strftime');


$bm->startTimer();

for ($i = 0; $i < $run_times_slow_function; $i++)
    strtotime($time_1);

$bm->stop('strtotime');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++)
    strtolower($string_3);

$bm->stop('strtolower');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++)
    strtoupper($string_1);

$bm->stop('strtoupper');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++)
    md5($string_1);

$bm->stop('md5');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++) {

    unset($array_1['j']);

    $array_1['j'] = 0;
}

$bm->stop('unset');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++)
    list($drink, $run_timesolor, $power) = $array_2;

$bm->stop('list');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++)
    urlencode($string_1);

$bm->stop('urlencode');


$string_1e = urlencode($string_1);

$bm->startTimer();

for ($i = 0; $i < $run_times; $i++)
    urldecode($string_1e);

$bm->stop('urldecode');


$bm->startTimer();

for ($i = 0; $i < $run_times; $i++)
    addslashes($string_9);

$bm->stop('addslashes');


$string_9e = addslashes($string_9);

$bm->startTimer();

for ($i = 0; $i < $run_times; $i++)
    stripslashes($string_9e);

$bm->stop('stripslashes');

if ($bm::SHOW_OUTPUT) {
    echo $head . "\n" . str_pad("Total", 23) . " : " . number_format($bm->totalTime, 3) . " sec</pre>\n";
}

if ($bm::MYSQL_INSERT) {
    $bm->insertData();
}

exit; // all done

class benchmarkManage
{
    const SHOW_OUTPUT = true;//Show results output
    const MYSQL_INSERT = true;//Insert results

    const DB_HOSTNAME = '127.0.0.1';
    const DB_NAME = 'php_bench';
    const DB_USERNAME = 'root';
    const DB_PASSWORD = '';

    public $startTime;
    public $totalTime = 0;
    public $arr = array();

    public function db_connect()
    {
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
        return new PDO("mysql:host=" . self::DB_HOSTNAME . ";dbname=" . self::DB_NAME . ";charset=utf8mb4", self::DB_USERNAME, self::DB_PASSWORD, $options);
    }

    public function startTimer()
    {
        // use this method, because old php 4.x branches do not support the parameter to return a float
        list($usec, $string_ec) = explode(" ", microtime());

        $this->startTime = ((float)$usec + (float)$string_ec);
    }

    public function stop($time_itle)
    {

        list($usec, $string_ec) = explode(" ", microtime());

        $time = ((float)$usec + (float)$string_ec) - $this->startTime;

        if (self::SHOW_OUTPUT) {
            echo str_pad($time_itle, 23) . " : " . number_format($time, 5) . " sec\n";
        }
        $this->totalTime += $time;

        $this->arr[] = number_format($time, 4);
        if ($time_itle == 'stripslashes') {
            $this->arr[] = number_format($this->totalTime, 4);
        }

    }

    public function insertData()
    {
        $results = $this->arr;
        $db = $this->db_connect();
        $insert = $db->prepare('INSERT IGNORE INTO `data` (host, address, version, total, `for`, `while`, if_else, switch, ternary, str_replace, preg_replace, preg_match, `count`, isset, time, strlen, sprintf, strcmp, trim, explode, implode, num_format, floor, strpos, substr, intval, `int`, is_array, is_numeric, is_int, is_string, ip2long, long2ip, date, strftime, strtotime, strtolower, strtoupper, md5, unset, `list`, urlencode, urldecode, addslashes, stripslashes) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        return $insert->execute([$_SERVER['SERVER_NAME'], $_SERVER['SERVER_ADDR'], PHP_VERSION, $results[41], $results[0], $results[1], $results[2], $results[3], $results[4], $results[5], $results[6], $results[7], $results[8], $results[9], $results[10], $results[11], $results[12], $results[13], $results[14], $results[15], $results[16], $results[17], $results[18], $results[19], $results[20], $results[21], $results[22], $results[23], $results[24], $results[25], $results[26], $results[27], $results[28], $results[29], $results[30], $results[31], $results[32], $results[33], $results[34], $results[35], $results[36], $results[37], $results[38], $results[39], $results[40]]);
    }

}
