<?php
/*
 Title: Membaca file xml.
	GET xmlfile 
 */
require_once '../../restler/restler.php';
require_once 'tugas1class.php';

spl_autoload_register('spl_autoload');

$r = new Restler();
$r->setSupportedFormats('JsonFormat', 'XmlFormat');
$r->addAPIClass('Baca');
$r->handle();