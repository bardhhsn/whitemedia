<?php
parse_str($_POST['form_data'], $form);

define('TO_EMAIL', 'bardhhyseni28@gmail.com');
define('SUBJECT', 'Pyetje për White Media');
define('FROM_EMAIL', $form['con_email']);

$MESSAGE = 'Përshëndetje White Media, <br/><br/>';
$MESSAGE .= 'Ju keni një mesazh nga një vizitor. Detajet e vizitorit mund ti gjeni më poshtë: <br/><br/>';
$MESSAGE .= 'Name : '.$form['con_name'].'<br/>';
$MESSAGE .= 'Email : '.$form['con_email'].'<br/>';
if(isset($form['con_company']) && $form['con_company'] != ''):
    $MESSAGE .= 'Company : '.$form['con_company'].'<br/>';
endif;
if(isset($form['con_phone']) && $form['con_phone'] != ''):
    $MESSAGE .= 'Phone : '.$form['con_phone'].'<br/>';
endif;
$MESSAGE .= 'Message : <br/>'.$form['con_message'].'<br/><br/>';
$MESSAGE .= 'Regards';

$HEADERS = "MIME-Version: 1.0" . "\r\n";
$HEADERS .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$HEADERS .= 'From: <'.FROM_EMAIL.'>' . "\r\n";

mail(TO_EMAIL, SUBJECT, $MESSAGE, $HEADERS);
echo 1;
exit();