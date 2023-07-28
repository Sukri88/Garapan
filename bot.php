<?php
error_reporting(0);
const
title = "cryptofenz",
versi = "1.0",
status = "online",
server = "disabled",
host = "https://cryptofenz.xyz/",
youtube = "https://youtube.com/c/iewil",
n = "\n";

if( PHP_OS_FAMILY == "Linux" ){
	define("b","\033[1;34m");
	define("c","\033[1;36m");
	define("d","\033[0m");
	define("h","\033[1;32m");
	define("k","\033[1;33m");
	define("m","\033[1;31m");
	define("p","\033[1;37m");
	define("u","\033[1;35m");
	define("mp","\033[101m\033[1;37m");
	define("pm","\033[107m\033[1;31m");
} else {
	define("b","");
	define("c","");
	define("d","");
	define("h","");
	define("k","");
	define("m","");
	define("p","");
	define("u","");
	define("mp","");
	define("pm","");
}

trait TimeZone {public static function TimeZone(){$api = json_decode(file_get_contents("http://ip-api.com/json"),1);if($api){$tz = $api["timezone"];date_default_timezone_set($tz);return $api["country"];}else{date_default_timezone_set("UTC");return "UTC";}}}trait Timer {public static function auth($wr){$nic[] = $wr." i".p."ewil-official";$nic[] = $wr." ie".p."wil-official";$nic[] = $wr." iew".p."il-official";$nic[] = " i".$wr."ewi".p."l-official";$nic[] = " ie".$wr."wil".p."-official";$nic[] = " iew".$wr."il-".p."official";$nic[] = " iewi".$wr."l-o".p."fficial";$nic[] = " iewil".$wr."-of".p."ficial";$nic[] = " iewil".$wr."-of".p."ficial";$nic[] = " iewil-".$wr."off".p."icial";$nic[] = " iewil-o".$wr."ffi".p."cial";$nic[] = " iewil-of".$wr."fic".p."ial";$nic[] = " iewil-of".$wr."fic".p."ial";$nic[] = " iewil-off".$wr."ici".p."al";$nic[] = " iewil-offi".$wr."cia".p."l";$nic[] = p." iewil-offic".$wr."ial";$nic[] = p." iewil-offici".$wr."al";$nic[] = p." iewil-officia".$wr."l";return $nic;}public static function Tmr($tmr){date_default_timezone_set("UTC");$col = [b,c,d,h,k,m,u];$sym = [' ─ ',' / ',' │ ',' \ ',];$timr = time()+$tmr;$a = 0;while(true){$a +=1;$x = $col[array_rand($col)];$nic = self::auth($x);$res=$timr-time();if($res < 1) {break;}print "         ".$x.$sym[$a % 4].p.date('H',$res).$x.":".p.date('i',$res).$x.":".p.date('s',$res).$nic[$a % 18]."\r";usleep(100000);}print "\r                                   \r";}}trait Line {public static function Line(){return b.str_repeat('─',50).n;}}trait Sub {public static function Slow($msg){$slow = str_split($msg);foreach( $slow as $slowmo ){print $slowmo; usleep(70000);}}public static function sub(){print self::slow(p."Jangan lupa \033[101m\033[1;37m Subscribe! \033[0m youtub saya :D");sleep(2);system("termux-open-url ".youtube);}}trait Bn {public static function Acssi_calvin($string){$acssi = ["a" => ["┌─┐","├─┤","┴ ┴"],"b" => ["┌┐ ","├┴┐","└─┘"],"c" => ["┌─┐","│  ","└─┘"],"d" => ["┌┬┐"," ││","─┴┘"],"e" => ["┌─┐","├┤ ","└─┘"],"f" => ["┌─┐","├┤ ","└  "],"g" => ["┌─┐","│ ┬","└─┘"],"h" => ["┬ ┬","├─┤","┴ ┴"],"i" => ["┬","│","┴"],"j" => [" ┬"," │","└┘"],"k" => ["┬┌─","├┴┐","┴ ┴"],"l" => ["┬  ","│  ","┴─┘"],"m" => ["┌┬┐","│││","┴ ┴"],"n" => ["┌┐┌","│││","┘└┘"],"o" => ["┌─┐","│ │","└─┘"],"p" => ["┌─┐","├─┘","┴  "],"q" => ["┌─┐ ","│─┼┐","└─┘└"],"r" => ["┬─┐","├┬┘","┴└─"],"s" => ["┌─┐","└─┐","└─┘"],"t" => ["┌┬┐"," │ "," ┴ "],"u" => ["┬ ┬","│ │","└─┘"],"v" => ["┬  ┬","└┐┌┘"," └┘ "],"w" => ["┬ ┬","│││","└┴┘"],"x" => ["─┐ ┬","┌┴┬┘","┴ └─"],"y" => ["┬ ┬","└┬┘"," ┴ "],"z" => ["┌─┐","┌─┘","└─┘"]," "=>[" "," "," "],"1" => ["┬","│","┴"],  "2" => ["┌─┐","┌─┘","└─┘"],  "3" => ["┌─┐"," ├┤","└─┘"],"4" => ["┬ ┬","└─┤","  ┘"],"5" => ["┌─┐","└─┐","└─┘"],"6" => ["┌─┐","├─┐","└─┘"],"7" => ["┌─┐","  │","  ┘"],"8" => ["┌─┐","├─┤","└─┘"],"9" => ["┌─┐","└─┤","└─┘"],"0" => ["┌─┐","│ │","└─┘"]];$x = str_split($string);print " ";foreach($x as $data){print b.$acssi[$data][0];}print b." versi ".m.": ".p.versi.n." ";foreach($x as $data){print c.$acssi[$data][1];}print c." status".m.": ".p.status.n." ";foreach($x as $data){print p.$acssi[$data][2];}print n;}public static function Bn(){system("clear");$zone = self::TimeZone();$tanggal = Date("d-M-Y");$waktu = Date("H:i:s");$panjang = 50-strlen($zone.$tanggal.$waktu);$spasi = floor($panjang/2);$lokasi = c.$zone.str_repeat(" ",$spasi).$tanggal.str_repeat(" ",$spasi).$waktu;if($panjang % 2 == 1){$lokasi .= " ";}print $lokasi.n;print self::Line();self::Acssi_calvin(title);print mp.str_pad("FREE SCRIPT! NOT FOR SALE",50," ",STR_PAD_BOTH).d."\n";print pm.str_pad("© Copyright IEWIL OFFICIAL 2023",50," ",STR_PAD_BOTH)." ".d."\n";print self::Line();}}trait Simpan{public static function Simpan($n){if(file_exists($n)) {$d = file_get_contents($n);}else{$d = readline(mp."Input ".$n." ".d.h.n);print n;file_put_contents($n,$d);}return $d;}}
trait AutofaucetNoEnergy {public static function h(){$h[] = "Cookie: ".iewil::simpan("Cookie");$h[] = "user-agent: ".iewil::simpan("User_Agent");return $h;}public static function Curl($u, $h = 0, $p = 0,$c = 0) {while(true){$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $u);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);curl_setopt($ch, CURLOPT_COOKIE,TRUE);curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");if($p) {curl_setopt($ch, CURLOPT_POST, true);curl_setopt($ch, CURLOPT_POSTFIELDS, $p);}if($h) {curl_setopt($ch, CURLOPT_HTTPHEADER, $h);}curl_setopt($ch, CURLOPT_HEADER, true);$r = curl_exec($ch);$c = curl_getinfo($ch);if(!$c) return "Curl Error : ".curl_error($ch); else{$hd = substr($r, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));$bd = substr($r, curl_getinfo($ch, CURLINFO_HEADER_SIZE));curl_close($ch);if(!$bd){print m."Check your Connection!";sleep(2);print "\r                    \r";continue;}return array($hd,$bd)[1];}}}public static function Dash(){$r = self::curl(host."dashboard",self::h());$bal = explode(" ",explode('<span class="amount"> ',$r)[1])[0];return $bal;}public static function _run(){if(!self::Dash()){unlink("Cookie");unlink("cookie.txt");return "Cookie Expired";}print h."Balance ".k."-> ".self::Dash().n;print iewil::Line();while(true){$r = self::curl(host."auto",self::h());$tmr = explode(',',explode('let timer = ',$r)[1])[0];if($tmr){iewil::Tmr($tmr);}$token = explode('">',explode('<input type="hidden" name="token" value="',$r)[1])[0];$data = "token=".$token;$r = self::curl(host."auto/verify",self::h(),$data);$ss = explode('has',explode("Swal.fire('Good job!', '",$r)[1])[0];if($ss){print h."Sukses  ".k."-> ".$ss.n;print h."Balance ".k."-> ".self::Dash().n;print iewil::Line();}}}}

class iewil {
	use TimeZone,Timer,Line,Sub,Bn,Simpan;
}
class modul extends iewil {
	use AutofaucetNoEnergy;
}

iewil::bn();
cookie:
iewil::simpan("Cookie");
iewil::simpan("User_Agent");
Iewil::sub();
iewil::bn();
if(modul::_run() == "Cookie Expired")goto cookie;