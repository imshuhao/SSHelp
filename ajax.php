<?php

$action = @$_GET['a'];
$email = @$_POST['email'];
$data = array();
$data['error'] = 1;

switch($action){
	case "getCountry":
		$ip = getip();
		$jsonStr = doGet('http://www.geoplugin.net/json.gp?ip=' . $ip);
		$obj = json_decode($jsonStr);
		$data['error'] = 0;
		$data['ip'] = $ip;
		$data['country'] = $obj->geoplugin_countryName;
		break;
	case "bingEmail":
		$data['error'] = 1;
		$data['message'] = "绑定失败，服务器未响应您的请求。";
		break;
	case "loli":
	    setcookie('openSesame', 'loli.help',time()+3600);
	    $data['error'] = 0;
	    $data['message'] = "cookie set ok!";
	    break;
	case "openSesame":
	    $dcookie = $_COOKIE["openSesame"];
	    if($dcookie==null){
	        $data['error'] = 1;
	    } elseif ($dcookie == "loli.help") {
	        $data['error'] = 0;
	    }
	    
	    break;
}

echo json_encode($data);



/** 
 * 发送post请求 
 * @param string $url 请求地址 
 * @param array $post_data post键值对数据 
 * @return string 
 */  
function send_post($url, $post_data) {
    $postdata = http_build_query($post_data);
    $options = array(
        'http' => array(
            'method' => 'POST',
            'header' => 'Content-type:application/x-www-form-urlencoded',
            'content' => $postdata,
            'timeout' => 15 * 60 // 超时时间（单位:s）
    )
  );
  $context = stream_context_create($options);
  $result = file_get_contents($url, false, $context);

  return $result;
}

// ---->  function
function doGet($url) {
	$options = array(
		'http' => array(
			'method' => 'GET',
			'header' => 'Content-type:application/x-www-form-urlencoded',
			'timeout' => 15 * 60 // 超时时间（单位:s）
		)
	);
	$context = stream_context_create($options);
	$result = file_get_contents($url, false, $context);

	return $result;
}

function getip(){
    if(!empty($_SERVER["HTTP_CLIENT_IP"])){
        $cip = $_SERVER["HTTP_CLIENT_IP"];
    }else if(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
        $cip = $_SERVER["HTTP_X_FORWARDED_FOR"];
    }else if(!empty($_SERVER["REMOTE_ADDR"])){
        $cip = $_SERVER["REMOTE_ADDR"];
    }else{
        $cip = '';
    }
    preg_match("/[\d\.]{7,15}/", $cip, $cips);
    $cip = isset($cips[0]) ? $cips[0] : 'unknown';
    unset($cips);
    return $cip;
}
?>