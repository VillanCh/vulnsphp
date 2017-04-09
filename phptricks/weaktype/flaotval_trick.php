<?php
$ret = '123.456.76';
echo $ret, ' floatval=> ', floatval($ret);
echo '<br>';
$ret = '123.456.76asd';
echo $ret, ' floatval=> ', floatval($ret);
echo '<br>';
$ret = '123.456adf';
echo $ret, ' floatval=> ', floatval($ret);
echo '<br>';
$ret = '.123.456';
echo $ret, ' floatval=> ', floatval($ret);
echo '<br>';
$ret = 'qerqer123.456adf';
echo $ret, ' floatval=> ', floatval($ret);
echo '<br>';
$ret = '456adf';
echo $ret, ' floatval=> ', floatval($ret);
echo '<br>';
$ret = '123';
echo $ret, ' floatval=> ', floatval($ret);
echo '<br>';
$ret = 'asd76';
echo $ret, ' floatval=> ', floatval($ret);
echo '<br>';
?>