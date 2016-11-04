<?php
require(__DIR__ . '/vendor/autoload.php');
use alipay\AlipayDemo;
$alipayDemo = new AlipayDemo();
$alipayDemo->hello();

require 'Demo.php';
$demo = new \wanpinghui\Demo();
$demo->hello();

