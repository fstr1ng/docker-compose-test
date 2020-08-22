<?

$log = array(
  'ip' => $_SERVER['REMOTE_ADDR'],
  're' => $_SERVER['HTTP_REFERER'],
  'ag' => $_SERVER['HTTP_USER_AGENT'],
  'ts' => date("Y-m-d h:i:s",time())
);

echo json_encode($log);

phpinfo();
