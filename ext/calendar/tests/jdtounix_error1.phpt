--TEST--
Test jdtounix() function : error conditions
--CREDITS--
edgarsandi - <edgar.r.sandi@gmail.com>
--INI--
date.timezone=UTC
--SKIPIF--
<?php include 'skipif.inc'; ?>
--FILE--
<?php
try {
    jdtounix(2440579);
} catch (ValueError $ex) {
    echo $ex->getMessage(), PHP_EOL;
}
?>
--EXPECT--
jday must be within the Unix epoch
