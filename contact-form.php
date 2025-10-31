<?php

#下3段式抓 為案件編號 $case_code
#$case_code_test 是用來判斷是否為1的測試頁
#$case_code = "jw";特殊案使用
$src =$_SERVER['SERVER_NAME']; 
$case_code_test = substr(substr($src,0,strpos($src,'.')),-1);
$case_code = "yunji-fuyu";

# PDO DB 連線 Start
    $pdo=new pdo('mysql:host=localhost;dbname=unigiant_htw','unigiant_htw','unigiant_htw');
    $pdo->exec("SET NAMES 'utf8'");
# PDO DB 連線 End

# 下3段 抓$case_name 這樣就不會打錯案名了
# $case_name = "鳳翔"; 特殊案使用
$sql_name = "SELECT casename FROM susers WHERE email = '" . $case_code . "'";
$dataList = $pdo->query($sql_name)->fetchAll();
$case_name = $dataList[0]['casename'];

    $name         = isset($_POST['name']) ? $_POST['name'] : '';
    $phone        = isset($_POST['phone']) ? $_POST['phone'] : '';
    $user_email   = isset($_POST['email']) ? $_POST['email'] : '';
    $city         = isset($_POST['city']) ? $_POST['city'] : '';
    $area         = isset($_POST['area']) ? $_POST['area'] : '';
    $gender       = isset($_POST['gender']) ? $_POST['gender'] : '';
    $infosource   = isset($_POST['infosource']) ? $_POST['infosource'] : '';
    $parking      = isset($_POST['parking']) ? $_POST['parking'] : '';
    $houseStyle   = isset($_POST['houseStyle']) ? $_POST['houseStyle'] : '';
    $room         = isset($_POST['room']) ? $_POST['room'] : '';
    $contacttime  = isset($_POST['contacttime']) ? $_POST['contacttime'] : '';
    $msg          = isset($_POST['msg']) ? $_POST['msg'] : '';
    $utm_source   = isset($_POST['utm_source']) ? $_POST['utm_source'] : '';
    $utm_medium   = isset($_POST['utm_medium']) ? $_POST['utm_medium'] : '';
    $utm_content  = isset($_POST['utm_content']) ? $_POST['utm_content'] : '';
    $utm_campaign = isset($_POST['utm_campaign']) ? $_POST['utm_campaign'] : '';
    $datetime     = date ("Y-m-d H:i:s" , mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'))) ;
    
    # 鳳翔 fs 客製資料：房型
    $house        = isset($_POST['house']) ? $_POST['house'] : '';
    
    # 好站 hj 客製資料：可聯絡時間
    $time_start        = isset($_POST['time_start']) ? $_POST['time_start'] : '';
    $time_end        = isset($_POST['time_end']) ? $_POST['time_end'] : '';

    # 不同版本前端相容 Start
    if ($name == '') {
        $name = isset($_POST['widget-contact-form-name']) ? $_POST['widget-contact-form-name'] : '';
    }
    if ($phone == '') {
        $phone = isset($_POST['widget-contact-form-phone']) ? $_POST['widget-contact-form-phone'] : '';
    }
    if ($user_email == '') {
        $user_email = isset($_POST['widget-contact-form-email']) ? $_POST['widget-contact-form-email'] : '';
    }
    if ($city == '') {
        $city = isset($_POST['widget-contact-form-city']) ? $_POST['widget-contact-form-city'] : '';
    }
    if ($area == '') {
        $area = isset($_POST['widget-contact-form-area']) ? $_POST['widget-contact-form-area'] : '';
    }
    if ($msg == '') {
        $msg = isset($_POST['widget-contact-form-msg']) ? $_POST['widget-contact-form-msg'] : '';
    }
    if ($utm_source == '') {
        $utm_source = isset($_POST['widget-contact-form-utm_source']) ? $_POST['widget-contact-form-utm_source'] : '';
    }
    if ($utm_source == '') {
        $utm_source = isset($_POST['widget-contact-form-utm_source']) ? $_POST['widget-contact-form-utm_source'] : '';
    }
    if ($utm_medium == '') {
        $utm_medium = isset($_POST['widget-contact-form-utm_medium']) ? $_POST['widget-contact-form-utm_medium'] : '';
    }
    if ($utm_content == '') {
        $utm_content = isset($_POST['widget-contact-form-utm_content']) ? $_POST['widget-contact-form-utm_content'] : '';
    }
    if ($utm_campaign == '') {
        $utm_campaign = isset($_POST['widget-contact-form-utm_campaign']) ? $_POST['widget-contact-form-utm_campaign'] : '';
    }

    $datetime = date ("Y-m-d H:i:s" , mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'))) ;
    # 不同版本前端相容 End

    $bCheck = true; //信件檢查

    # 取得 IP Start
    if (!empty($_SERVER["HTTP_CLIENT_IP"])){
        $sIp = $_SERVER["HTTP_CLIENT_IP"];
    } else if (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
        $sIp = $_SERVER["HTTP_X_FORWARDED_FOR"];
    } else {
        $sIp = $_SERVER["REMOTE_ADDR"];
    }
    # 取得 IP End

    # 檢查是否時間範圍內重複留言 Start
    $sCheckMsg = ''; //檢查留言內容

    if ($msg == '') {
        $msg = '無留言';
    }

    if ((isset($_COOKIE['msg'])) && ($_COOKIE['msg'] != null)) {
        $sCheckMsg = $_COOKIE['msg'];
    }
    setcookie ("msg", $msg, time()+36400);


    if (($sCheckMsg === $msg)) { //要三個等號, 不然 null 會等於 empty
        $bCheck = false;
    }
    # 檢查是否時間範圍內重複留言 End

    # 檢查所有關鍵字 Start
    $sql = "SELECT * FROM `block_message`";
    $aGetDbList = $pdo->query($sql)->fetchAll();

    $aFilterKeyWordList = array(); //留言關鍵字檢查初始化
    $aFilterNameList = array(); //檢查姓名初始化
    $aFilterEmailList = array();
    $aFilterPhoneList = array();
    $aFilterIpList = array();

    foreach ($aGetDbList as $sKey => $aGetDb) {

        switch ($aGetDb['type']) { //switch Start
            case '1': //留言內容
                $aFilterKeyWordList[] = $aGetDb['content'];
                break;
            case '2': //用戶名稱
                $aFilterNameList[] = $aGetDb['content'];
                break;
            case '3': //信箱
                $aFilterEmailList[] = $aGetDb['content'];
                break;
            case '4':
                $aFilterPhoneList[] = $aGetDb['content'];
                break;
            case '5':
                $aFilterIpList[] = $aGetDb['content'];
                break;
            default:
                # code...
                break;
        } //swutch End

    }
    # 檢查所有關鍵字 End

    # 檢查留言關鍵字 Start
    // $aFilterKeyWordList = array('game', 'casino', '測試', 'test');
    $checkConunt = 0;
    foreach ($aFilterKeyWordList as $key => $sFilterKeyWord) {
        $checkConunt = explode($sFilterKeyWord, $msg);
        if (count($checkConunt) > 1) {
            $bCheck = false;
        }
    }
    # 檢查留言關鍵字 End

    # 檢查姓名 Start
    // $aFilterNameList = array('蔡銘聰');
    $checkConunt = 0;
    foreach ($aFilterNameList as $key => $sFilterName) {
        $checkConunt = explode($sFilterName, $name);
        if (count($checkConunt) > 1) {
            $bCheck = false;
        }
    }
    # 檢查姓名 End

    # 檢查信箱 Start
    $checkConunt = 0;
    foreach ($aFilterEmailList as $key => $aFilterValue) {
        $checkConunt = explode($aFilterValue, $user_email);
        if (count($checkConunt) > 1) {
            $bCheck = false;
        }
    }
    # 檢查信箱 End

    # 檢查電話 Start
    $checkConunt = 0;
    foreach ($aFilterPhoneList as $key => $aFilterValue) {
        $checkConunt = explode($aFilterValue, $phone);
        if (count($checkConunt) > 1) {
            $bCheck = false;
        }
    }
    # 檢查電話 End

    # 檢查IP Start
    $checkConunt = 0;
    foreach ($aFilterIpList as $key => $aFilterValue) {
        $checkConunt = explode($aFilterValue, $sIp);
        if (count($checkConunt) > 1) {
            $bCheck = false;
        }
    }
    # 檢查IP End

    # 取得信箱帳號密碼, Insert google API token Start
    $sql = "SELECT * FROM `mail_token` limit 0,1";
    $aGetMailTokenDbList = $pdo->query($sql)->fetchAll();
    $token    = $aGetMailTokenDbList[0]['token'];
    $mailName = $aGetMailTokenDbList[0]['mail'];
    $mailPwd  = $aGetMailTokenDbList[0]['pwd'];
    # 取得信箱帳號密碼, Insert google API token End

    # 老版本讀取 Start
    $db_host = 'localhost';
    $db_user = 'unigiant_htw';
    $db_pass = 'unigiant_htw';
    $db_name = 'unigiant_htw';

    $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    // mysqli_query("SET NAMES UTF8");
    // mysqli_select_db($db_name, $con);

    $query = "SELECT tomail FROM susers WHERE email = '".$case_code."'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_row($result);

    if (mysqli_num_rows($result))
    {
        $tomail = $row[0];
    }

    $query_admin = "SELECT admin_email FROM admin WHERE email = 'admin'";
    $result_admin = mysqli_query($con, $query_admin);
    $row_admin = mysqli_fetch_row($result_admin);

    if (mysqli_num_rows($result_admin))
    {
        $tomail_admin = $row_admin[0];
    }
    # 老版本讀取 End

    ini_set("display_errors", "On");
    date_default_timezone_set("Asia/Taipei");
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    $mail= new PHPMailer(); //建立新物件
    $mail->IsSMTP(); //設定使用SMTP方式寄信
    $mail->SMTPAuth = true; //設定SMTP需要驗證
    $mail->SMTPAutoTLS = false;
    $mail->Host = "cp39.g-dns.com"; //設定SMTP主機
    $mail->Port = 25; //設定SMTP埠位，預設為25埠。
    $mail->CharSet = "utf-8"; //設定郵件編碼

    $mail->Username = $mailName; //設定驗證帳號
    $mail->Password = $mailPwd; //設定驗證密碼

    $mail->From = "service@unigiants.com.tw"; //設定寄件者信箱
    $mail->FromName = $case_name." - 官網網站"; //設定寄件者姓名

    $mail->Subject = $case_name." - 官網網站"; //設定郵件標題
    $mail->Body = "網站：https://" . $src . "/<BR>姓名：".$name."<BR>手機：".$phone."<BR>居住城市：".$city."<BR>居住地區：".$area."<BR>需求房型：".$room."<BR>電子信箱：".$user_email."<BR>留言：".$msg."<BR>備註："."<BR><BR>填表日期：".$datetime."<BR>廣告來源：".$utm_source."<BR>廣告媒介：".$utm_medium."<BR>廣告名稱：".$utm_campaign."<BR>廣告內容：".$utm_content; //設定郵件內容
    $mail->IsHTML(true); //設定郵件內容為HTML

    $tomail_arr = explode(",",$tomail);

    $mail->IsHTML(true); //設定郵件內容為HTML

    $tomail_arr = explode(",",$tomail);
    $tomail_admin_arr = explode(",",$tomail_admin);

    //檢查沒問題才寄出信件
    $bCheck=true;
    if ($bCheck == true) { //if start

        // var_dump($_SERVER['HTTP_HOST']); exit;
      # 添加到 Googlde 資料DB Start
        try {
            $url = "http://".$_SERVER['HTTP_HOST']."/send.php";
            $url .= "?token=".urlencode($token);
            $url .= "&name=".urlencode($name);
            $url .= "&phone=".urlencode($phone);
            $url .= "&email=".urlencode($user_email);
            $url .= "&city=".urlencode($city);
            $url .= "&area=".urlencode($area);
            $url .= "&message=".urlencode($msg);
            $url .= "&utm_source=".urlencode($utm_source);
            $url .= "&utm_medium=".urlencode($utm_medium);
            $url .= "&utm_content=".urlencode($utm_content);
            $url .= "&utm_campaign=".urlencode($utm_campaign);
            $url .= "&case_code=".urlencode($case_code);
            $url .= "&reservation_datetime=".urlencode($datetime);

            $html=file_get_contents($url);

            // echo "send ok";

        } catch (Exception $e) {

            // echo "send fail";
        }
        # 添加到 Googlde 資料DB End

        foreach($tomail_arr as $email)
        {
           $mail->AddAddress("$email");
        }

        foreach($tomail_admin_arr as $email_admin)
        {
           $mail->AddBCC("$email_admin");
        }

        if (!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
            // exit;
        } else {
            echo "Message sent!";
            // exit;
        }
    } //if end