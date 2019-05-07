<?php
//这个类似用来获取访客信息的
//方便统计

    //获取访客ip
    function getIp()
    {
        $ip=false;
        if(!empty($_SERVER["HTTP_CLIENT_IP"])){
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        }
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
            if ($ip) { array_unshift($ips, $ip); $ip = FALSE; }
            for ($i = 0; $i < count($ips); $i++) {
                if (!eregi ("^(10│172.16│192.168).", $ips[$i])) {
                    $ip = $ips[$i];
                    break;
                }
            }
        }
        return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
    }
 
    //根据ip获取城市、网络运营商等信息
    function findCityByIp($ip){
        $data = file_get_contents('http://ip.taobao.com/service/getIpInfo.php?ip='.$ip);
        return json_decode($data,$assoc=true);
    }
 
   //获取用户浏览器类型
    function getBrowser(){
        $sys = $_SERVER['HTTP_USER_AGENT'];  //获取用户代理字符串 
        if(strpos($sys,'MSIE')!==false || strpos($sys,'rv:11.0')) //ie11判断
            return "ie";
        else if(strpos($sys,'Firefox')!==false)
            return "firefox";
        else if(strpos($sys,'Chrome')!==false)
            return "chrome";
        else if(strpos($sys,'Opera')!==false)
            return 'opera';
        else if((strpos($sys,'Chrome')==false)&&strpos($sys,'Safari')!==false)
            return 'safari';
        else
            return 'unknown';
    }

    //获取网站来源
    function getFromPage(){
        return $_SERVER['HTTP_REFERER'];
    }

    //    /**
    //     * 获取客户端操作系统信息,包括win10
    //     * @param   null
    //     * @author  https://blog.jjonline.cn/phptech/168.html
    //     * @return  string
    //     */
    function get_os(){

            $agent = $_SERVER['HTTP_USER_AGENT'];
            $os = false;

            if (preg_match('/win/i', $agent) && strpos($agent, '95'))
            {
                $os = 'Windows 95';
            }
            else if (preg_match('/win 9x/i', $agent) && strpos($agent, '4.90'))
            {
                $os = 'Windows ME';
            }
            else if (preg_match('/win/i', $agent) && preg_match('/98/i', $agent))
            {
                $os = 'Windows 98';
            }
            else if (preg_match('/win/i', $agent) && preg_match('/nt 6.0/i', $agent))
            {
                $os = 'Windows Vista';
            }
            else if (preg_match('/win/i', $agent) && preg_match('/nt 6.1/i', $agent))
            {
                $os = 'Windows 7';
            }
            else if (preg_match('/win/i', $agent) && preg_match('/nt 6.2/i', $agent))
            {
                $os = 'Windows 8';
            }else if(preg_match('/win/i', $agent) && preg_match('/nt 10.0/i', $agent))
            {
                $os = 'Windows 10';#添加win10判断
            }else if (preg_match('/win/i', $agent) && preg_match('/nt 5.1/i', $agent))
            {
                $os = 'Windows XP';
            }
            else if (preg_match('/win/i', $agent) && preg_match('/nt 5/i', $agent))
            {
                $os = 'Windows 2000';
            }
            else if (preg_match('/win/i', $agent) && preg_match('/nt/i', $agent))
            {
                $os = 'Windows NT';
            }
            else if (preg_match('/win/i', $agent) && preg_match('/32/i', $agent))
            {
                $os = 'Windows 32';
            }
            else if (preg_match('/linux/i', $agent))
            {
                $os = 'Linux';
            }
            else if (preg_match('/unix/i', $agent))
            {
                $os = 'Unix';
            }
            else if (preg_match('/sun/i', $agent) && preg_match('/os/i', $agent))
            {
                $os = 'SunOS';
            }
            else if (preg_match('/ibm/i', $agent) && preg_match('/os/i', $agent))
            {
                $os = 'IBM OS/2';
            }
            else if (preg_match('/Mac/i', $agent) && preg_match('/PC/i', $agent))
            {
                $os = 'Macintosh';
            }
            else if (preg_match('/PowerPC/i', $agent))
            {
                $os = 'PowerPC';
            }
            else if (preg_match('/AIX/i', $agent))
            {
                $os = 'AIX';
            }
            else if (preg_match('/HPUX/i', $agent))
            {
                $os = 'HPUX';
            }
            else if (preg_match('/NetBSD/i', $agent))
            {
                $os = 'NetBSD';
            }
            else if (preg_match('/BSD/i', $agent))
            {
                $os = 'BSD';
            }
            else if (preg_match('/OSF1/i', $agent))
            {
                $os = 'OSF1';
            }
            else if (preg_match('/IRIX/i', $agent))
            {
                $os = 'IRIX';
            }
            else if (preg_match('/FreeBSD/i', $agent))
            {
                $os = 'FreeBSD';
            }
            else if (preg_match('/teleport/i', $agent))
            {
                $os = 'teleport';
            }
            else if (preg_match('/flashget/i', $agent))
            {
                $os = 'flashget';
            }
            else if (preg_match('/webzip/i', $agent))
            {
                $os = 'webzip';
            }
            else if (preg_match('/offline/i', $agent))
            {
                $os = 'offline';
            }
            else
            {
                $os = '未知操作系统';
            }
            return $os;
        }
