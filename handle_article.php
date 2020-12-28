<?php
set_time_limit(18000); //脚本执行时间

#清除并关闭缓冲，输出到浏览器之前使用这个函数。
ob_end_clean();
#控制隐式缓冲泻出，默认off，打开时，对每个 print/echo 或者输出命令的结果都发送到浏览器。
ob_implicit_flush(1);


${"starttime".__FILE__} = strtotime("now");
echo __FILE__ ." | start time: " . date("Y-m-d H:i:s") . "<br><br>\r\n";

            /**
             * 功能：PHP向服务器发送GET请求
             * @param string $url 要请求的url地址,必选
             */

				function geturl($url){
				$headerArray =array("Content-type:application/json;","Accept:application/json");
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
				curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_HTTPHEADER,$headerArray);
				$output = curl_exec($ch);
				curl_close($ch);
				//$output = json_decode($output,true);
				return $output;
			}
			
            /**
             * 功能：PHP向服务器发送POST请求
             * @param string $url 要请求的url地址,必选
             * @param array $data 请求参数,可选
             */

            //function posturl($url, $data)
            //{
            //    $data = json_encode($data); //如果原始数据已经是json格式，则不需要再做encode
            //    $headerArray = array("Content-type:application/json");
            //    $curl = curl_init();
            //    curl_setopt($curl, CURLOPT_URL, $url);
            //    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
            //    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
            //    curl_setopt($curl, CURLOPT_POST, 1);
            //    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            //    curl_setopt($curl, CURLOPT_HTTPHEADER, $headerArray);
            //    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            //    $output = curl_exec($curl);
            //    curl_close($curl);
            //    return json_decode($output, true);
            //}
			//	function geturl($url){
			//	$headerArray =array("Content-type:application/json;","Accept:application/json");
			//	$ch = curl_init();
			//	curl_setopt($ch, CURLOPT_URL, $url);
			//	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			//	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
			//	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			//	curl_setopt($ch, CURLOPT_HTTPHEADER,$headerArray);
			//	$output = curl_exec($ch);
			//	curl_close($ch);
			//	//$output = json_decode($output,true);
			//	return $output;
			//}
            /**
             * 功能：PHP向服务器发送GET请求
             * @param string $url 要请求的url地址,必选
             */

				function geturl_bing($url){
				//$headerArray = array("Content-type:application/json;","Accept:application/json");
				
				$headerArray = array('Content-type:text/html; charset=utf-8',
				'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
				'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.193 Safari/537.36',
				'Cookie:DUP=Q=1fLRwk9l8OAvjBCb6-lAcg2&T=408793544&A=2&IG=3B7239FA2A6845F3B2889E33CF818DC8; MUID=392558383A406F3312ED574E3B6E6E81; SRCHD=AF=MOZSBR; SRCHUID=V=2&GUID=AF9ED95760B5413CA312B65B03F48D32&dmnchg=1; SRCHUSR=DOB=20201102&T=1607939139000; MUIDB=392558383A406F3312ED574E3B6E6E81; SRCHHPGUSR=HV=' . strtotime("now").'&WTS=63743535939&BRW=M&BRH=S&CW=1344&CH=395&DPR=1.25&UTC=480&DM=0&NEWWND=1&NRSLT=30&SRCHLANG=&AS=1&NNT=1&HAP=0&VSRO=1; MUIDB=3DDC176689446A950CF71804886A6BCA; SNRHOP=I=&TS=; _EDGE_S=mkt=zh-cn&F=1&SID=0A59E9618DCD62942D96E6038CE36300; _SS=PC=MOZI&SID=0A59E9618DCD62942D96E6038CE36300&bIm=577; SRCHS=PC=MOZI; ipv6=hit=1607787707070&t=4; _EDGE_V=1; ENSEARCH=BENVER=1; _FP=hta=on; ENSEARCHZOSTATUS=STATUS=0; ULC=P=1D984|6:1&H=1D984|6:1&T=1D984|6:1'); //
				
				//$headerArray = array(
				//'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
				//'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36',
				//'upgrade-insecure-requests:1',
				////'Accept-Encoding:gzip, deflate, br',
				//'Accept-Language:zh-CN,zh;q=0.8,zh-TW;q=0.7,zh-HK;q=0.5,en-US;q=0.3,en;q=0.2',
				//'Connection:keep-alive',
				//'Pragma:no-cache',
				//'Cookie: DUP=Q=NvGY_l4YuKSNF14A0Y76RA2&T=409457280&A=2&IG=FE90A63D823049238857006E99C982FF; MUID=392558383A406F3312ED574E3B6E6E81; MUIDB=392558383A406F3312ED574E3B6E6E81; SRCHD=AF=MOZSBR; SRCHUID=V=2&GUID=AF9ED95760B5413CA312B65B03F48D32&dmnchg=1; SRCHUSR=DOB=20201102&T=1608602880000; SRCHHPGUSR=HV=1608602880&WTS=63744199680&BRW=M&BRH=S&CW=1280&CH=253&DPR=1.5&UTC=480&DM=0&NEWWND=1&NRSLT=30&SRCHLANG=&AS=0&NNT=1&HAP=1&VSRO=1&PLTL=1054&PLTA=1077&PLTN=14; SNRHOP=I=&TS=; _EDGE_S=mkt=zh-cn&SID=2F6E5DC72E3164A2386E52532F1F65B2; _SS=PC=MOZI&SID=2F6E5DC72E3164A2386E52532F1F65B2&bIm=435194; SRCHS=PC=MOZI; ipv6=hit=1608606481010&t=4; ENSEARCH=BENVER=1; _FP=hta=on; ULC=P=1DAB0|10:3&H=1DAB0|10:3&T=1DAB0|10:3; _EDGE_CD=m=zh-cn; _EDGE_V=1; ABDEF=V=12&ABDV=12&MRNB=1608084700095&MRB=0; _tarLang=default=zh-Hans; _TTSS_IN=hist=WyJkZSIsImF1dG8tZGV0ZWN0Il0=; _TTSS_OUT=hist=WyJlbiIsInpoLUhhbnMiXQ=='); //,
				
				//$headerArray = array('Content-type:text/html; charset=utf-8'); //,
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				//echo $url."<br>";
				
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
				curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_HTTPHEADER,$headerArray);
				
				//代理服务器设置
				$ip = "210.14.134.132"; //"x.yunshan.net.cn"; 
				$Port = "8081";
				$proxyuserpwd = "hechao:Aasdf1234*";
	
				curl_setopt($ch, CURLOPT_PROXYAUTH, CURLAUTH_BASIC); //代理认证模式
				curl_setopt($ch, CURLOPT_PROXY, $ip); //代理服务器地址 183.3.218.34 8080 |200.16.208.187：8080 18.162.50.70 13.233.96.250:80 103.200.39.102:80 168.194.108.133:8080
				curl_setopt($ch, CURLOPT_PROXYPORT, $Port); //代理服务器端口
				curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyuserpwd); //http代理认证帐号，username:password的格式
				curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP); //使用http代理模式
				//代理服务器设置结束
				
				curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,60);  //设置cURL允许执行的最长秒数, 为了防止超时，多等一会。
				curl_setopt($ch, CURLOPT_TIMEOUT, 60);

				$output = curl_exec($ch);
				
				// 检查是否有错误发生
				if(curl_errno($ch))
				{
					echo 'Curl error: ' . curl_error($ch);
				}
				//if(!curl_errno($ch))
				//{
				//	print_r(curl_getinfo($ch));
				//}
				//echo $output;

				curl_close($ch);
				//$output = json_decode($output,true);
				return $output;
			}
			

		/**
		* 功能：PHP通过代理向服务器发送GET请求，
		* @param string $url 要请求的url地址,必选
		*/
		
			function geturl_proxy($url,$ip,$port,$proxyuserpwd){
			//$headerArray = array("Content-type:application/json;","Accept:application/json");
			
			//$headerArray = array('Content-type:text/html; charset=utf-8',
			//'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
			//'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.193 Safari/537.36',
			//'Cookie: __gads=ID=1e70ac84099d37d1-220f771e86c40096:T=1604307572:RT=1604307572:S=ALNI_MYt1S4J1jn1_MZht4gX8fMMbSEA2g; __utmz=154667809.1604307579.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); __utmc=154667809; __utma=154667809.2087699080.1604307572.1605003110.1605074532.10; _pk_id.1.0bc4=16d2ffdbbcaca51c.1604307575.10.1605074540.1605003953.'); //
			
			$headerArray = array('Content-type:text/html; charset=utf-8',
			'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
			'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.193 Safari/537.36',
			'Cookie: __gads=ID=1e70ac84099d37d1-220f771e86c40097:T=1604307571:RT=1604307571:S=ALNI_MYt1S4J1jn1_MZht4gX8fMMbSEA21; __utmz=154667809.1604307579.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); __utmc=154667809; __utma=154667809.2087699081.1604307571.1605003110.1605074532.10; _pk_id.1.0bc4=16d2ffdbbcaca51c.1604307575.10.1605074541.1605003951.'); //,
			
			
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_HTTPHEADER,$headerArray);
			
			//代理服务器设置
			curl_setopt($ch, CURLOPT_PROXYAUTH, CURLAUTH_BASIC); //代理认证模式
			curl_setopt($ch, CURLOPT_PROXY, $ip); //代理服务器地址 183.3.218.34 8080
			curl_setopt($ch, CURLOPT_PROXYPORT, $port); //代理服务器端口
			
			//$proxyuserpwd = "hechao:Aasdf1234*";
			curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyuserpwd); //代理服务器端口
			//curl_setopt($ch, CURLOPT_PROXYUSERPWD, ":"); //http代理认证帐号，username:password的格式
			curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP); //使用http代理模式
			
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,60);  //设置cURL允许执行的最长秒数, 为了防止超时，多等一会。
			curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		
			$output = curl_exec($ch);
			
			// 检查是否有错误发生
			if(curl_errno($ch))
			{
				echo 'Curl error: ' . curl_error($ch);
			}
			//debug 在没有错误的情况输出连接信息。
			//if(!curl_errno($ch))
			//{
			//	print_r(curl_getinfo($ch))."<br><br>";
			//	//echo $output;
			//}
			
		
			curl_close($ch);
			//$output = json_decode($output,true);
			return $output;
		}

//先看网址中是否有指定域名，如果有的话仅搜索这一个域名，如果没有指定域名，则从文件中获取域名列表。
$article_url = isset($_GET['article_url'])? htmlspecialchars($_GET['article_url']) : '';
if($article_url) 
{	
	//$url = 'https://www.google.com/search?client=firefox-b-d&num=30&q='.$domainname;
	//$url = 'https://cn.bing.com/search?q=%2b'.$article_url.'&qs=HS&sk=HS3&sc=8-0&cvid=5EB00AB66D9F4E72B59CBE287304BAE0&FORM=QBLH&sp=4';
	$url = $article_url;
	
	$ip = "210.14.134.132"; //"x.yunshan.net.cn"; 
	$Port = "8081";
	$proxyuserpwd = "hechao:Aasdf1234*";
	
	//$bing_search_result =  geturl_proxy($url,$ip,$Port,$proxyuserpwd);
	$article_result =  geturl($url);
	echo $bing_search_result;
	
	//$match_num_domain_pre = preg_match_all("/\b".$article_url."\b/i",$bing_search_result);
	//
	//if(0 != preg_match_all('/sb_count\">([\S\s]*?) results/i',$bing_search_result,$matches_result)) //sb_count">64,400 results 搜索引擎对这个关键字有多少条搜索结果。
	//	$match_searchresult = str_ireplace(',','',$matches_result[1][0]); ////$matches[0]保存完整模式的所有匹配, $matches[1] 保存第一个子组(括号里面的部分)的所有匹配
	//$match_total = $match_num_domain_pre;// + $match_num_em
	//
	////echo $domainname.": <br>\r\n";
	//echo $domainname.":  match number: ".$match_num_domain_pre." | match_searchresult: ".$match_searchresult." | total number: ".$match_total."<br>\r\n";

	
}


//统计运行时间
${"endtime".__FILE__} = strtotime("now");
echo "<br>" .__FILE__ . " | End time: " . date("Y-m-d H:i:s") . "<br>\r\n";
echo __FILE__ ." | Running time: " . (${"endtime".__FILE__} - ${"starttime".__FILE__}) . " second<br>\r\n";


?>