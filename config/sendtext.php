<?php
/**
 * Created by PhpStorm.
 * User: afaf
 * Date: 24/07/2018
 * Time: 12:34 م
 */

$to = '01014381577@vtext.com';
$form = 'afafziden@gmail.com';
$message = 'this messgee text \n new line .....';
$headers = "from: $from \n ";
mail($to ,'', $message, $headers);