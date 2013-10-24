<?php
/**
* Helpers for the template file.
*/
$zl->data['header'] = '<h1>Header: Zlatan</h1>';
$zl->data['main']   = '<p>Main: Now with a theme engine, Not much more to report for now.</p>';
$zl->data['footer'] = '<p>Footer: Based on Lydia by Mikael Roos. Modified to Zlatan by Klas Boman</p>';


/**
* Print debuginformation from the framework.
*/
function get_debug() {
  $zl = CZlatan::Instance();
  $html = "<h2>Debuginformation</h2><hr><p>The content of the config array:</p><pre>" . htmlentities(print_r($zl->config, true)) . "</pre>";
  $html .= "<hr><p>The content of the data array:</p><pre>" . htmlentities(print_r($zl->data, true)) . "</pre>";
  $html .= "<hr><p>The content of the request array:</p><pre>" . htmlentities(print_r($zl->request, true)) . "</pre>";
  return $html;
}
