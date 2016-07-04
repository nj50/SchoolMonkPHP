<?php 
	define("EncrptKey", "test");
	define("SessionTime",60000);
	define("SessionPrefix", "SMonk_");
	define("WSHOME", "http://localhost/SM_dev/");
	
	session_start();
	ob_start();
	$SKey = SessionPrefix."SKey";
	$UID = SessionPrefix."UID";	//USER ID 
	$UType = SessionPrefix."UType";	//USER Type 
	$SInit = SessionPrefix."SInit";
	$UAgent = SessionPrefix."UAgent";
	$UIPAddrress = SessionPrefix."UIPAddrress";


	
	function Register_SessionID($UID,$UAgent){
		global $SKey,$UID,$UAgent;
		$sid = md5($UID.$UAgent);
		$iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND);
		$_SESSION[$SKey]=mcrypt_encrypt(MCRYPT_RIJNDAEL_256, EncrptKey, $sid, MCRYPT_MODE_CBC, $iv);
		//$decrypted_string = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, EncrptKey, $_SESSION[$SKey], MCRYPT_MODE_CBC, $iv);

	} 
	
	function CreateSession($UID,$UType){
		global $SKey,$UID,$UType,$SInit,$UAgent,$UIPAddrress;
		$_SESSION[$UAgent] = $_SERVER['HTTP_USER_AGENT'];
		$_SESSION[$UIPAddrress] = $_SERVER['REMOTE_ADDR'];
		$_SESSION[$SInit] = true;
		$_SESSION[$UID] = $UID;
		$_SESSION[$UType] = $UType;
		$_SESSION['timestamp'] = time();  
		Register_SessionID($UID,$_SERVER['HTTP_USER_AGENT']);
	}
	
	function destroySession(){
		global $SKey,$UID,$UType,$SInit,$UAgent,$UIPAddrress;
		
		if(isset($_SESSION[$SKey])) unset($_SESSION[$SKey]);
		if(isset($_SESSION[$UID])) unset($_SESSION[$UID]);
		if(isset($_SESSION[$SInit])) unset($_SESSION[$SInit]);
		if(isset($_SESSION[$UAgent])) unset($_SESSION[$UAgent]);
		if(isset($_SESSION[$UIPAddrress])) unset($_SESSION[$UIPAddrress]);
		if(isset($_SESSION['timestamp'])) unset($_SESSION['timestamp']);
		session_destroy();redirect();
	}
	
	function redirect(){
		header("Location:".WSHOME."index.php");exit;
	}
	
	
	function Validate(){ 
		global $SKey,$UID,$UType,$SInit,$UAgent,$UIPAddrress;

		$sid = md5($UID.$UAgent);
		$decrypted_string ='';
		if(isset($_SESSION[$UID]) && isset($_SESSION[$UAgent])){
			$iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND);
			$decrypted_string = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, EncrptKey, $_SESSION[$SKey], MCRYPT_MODE_CBC, $iv);
		}

		
		if(!isset($_SESSION[$SKey]) || !isset($_SESSION[$UID]) || !isset($_SESSION[$UType]) || !isset($_SESSION[$UAgent]) || !isset($_SESSION[$UIPAddrress]) || $_SESSION[$SInit] == false && $decrypted_string == $_SESSION[$SKey]){
			destroySession();redirect();
			exit;
		}
		
		
		if (isset($_SESSION['timestamp'])){  
			if ((time() - $_SESSION['timestamp']) > SessionTime){ destroySession(); exit;  } 
		}
		else {  
			$_SESSION['timestamp'] = time();  
		}
		
	}
	
	/*if(isset($_SESSION[$UID])){
		Validate();
	}else{
		//redirect();
	}*/
	
if(isset($_POST['uid']) || isset($_POST['utype']) ){
	CreateSession($_POST['uid'],$_POST['utype']);
}
	
//-------------- Logout Script ---------------------
$id_logout = substr( $_SERVER['REQUEST_URI'], strrpos( $_SERVER['REQUEST_URI'], '/' )+1 );
if(isset($id_logout)){ 
	if($id_logout=='logout'){
		destroySession();
	}
}






	
?>