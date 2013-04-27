<?php

$nowIp = get_user_ip();


function get_user_ip() {
	if(getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), 'unknown')) {
		$onlineip = getenv('HTTP_CLIENT_IP');
	} elseif(getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), 'unknown')) {
		$onlineip = getenv('HTTP_X_FORWARDED_FOR');
	} elseif(getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), 'unknown')) {
		$onlineip = getenv('REMOTE_ADDR');
	} elseif(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], 'unknown')) {
		$onlineip = $_SERVER['REMOTE_ADDR'];
	}
	return $onlineip;
}


echo 'HTTP_CLIENT_IP:'.getenv('HTTP_CLIENT_IP').'<br />';
echo 'HTTP_X_FORWARDED_FOR:'.getenv('HTTP_X_FORWARDED_FOR').'<br />';
echo 'REMOTE_ADDR:'.getenv('REMOTE_ADDR').'<br />';
echo '$_SERVER["REMOTE_ADDR"]:'.$_SERVER['REMOTE_ADDR'].'<br />';


function real_server_ip()
{
    static $serverip = NULL;
 
    if ($serverip !== NULL)
    {
        return $serverip;
    }
 
    if (isset($_SERVER))
    {
        if (isset($_SERVER['SERVER_ADDR']))
        {
            $serverip = $_SERVER['SERVER_ADDR'];
        }
        else
        {
            $serverip = '0.0.0.0';
        }
    }
    else
    {
        $serverip = getenv('SERVER_ADDR');
    }
 
    return $serverip;
}