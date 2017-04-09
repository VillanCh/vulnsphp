<?php
echo '$ret is a str';
echo '<br>';
$ret = '123.12.123';
echo $ret, ' intval=> ', intval($ret);
echo '<br>';
$ret = '123Saaf';
echo $ret, ' intval=> ', intval($ret);
echo '<br>';
$ret = 'adf123Saaf';
echo $ret, ' intval=> ', intval($ret);
echo '<br>';
$ret = '12.3Saaf';
echo $ret, ' intval=> ', intval($ret);
echo '<br>';
$ret = 'ads1.23Saaf';
echo $ret, ' intval=> ', intval($ret);
echo '<br>';
$ret = '123.789';
echo $ret, ' intval=> ', intval($ret);
echo '<br>';
$ret = 123.789;
echo $ret, ' intval=> ', intval($ret);
echo '<br>';
?>