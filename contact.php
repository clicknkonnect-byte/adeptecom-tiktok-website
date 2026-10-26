<?php
$to      = "adnan@adeptecom.co";
$subject = "Free TikTok Shop audit request from adeptecom.co";

if ($_SERVER["REQUEST_METHOD"] !== "POST") { header("Location: index.html"); exit; }
if (!empty($_POST["company_url"])) { header((isset($_POST["src"]) && $_POST["src"]==="lp") ? "Location: thanks.html" : "Location: index.html?sent=1#contact"); exit; }

function clean($k){ return isset($_POST[$k]) ? trim(strip_tags($_POST[$k])) : ""; }

$name=clean("name"); $brand=clean("brand");
$email=filter_var(clean("email"), FILTER_SANITIZE_EMAIL);
$whatsapp=clean("whatsapp"); $plan=clean("plan"); $market=clean("market"); $message=clean("message"); $shop=clean("shop");
$src=clean("src"); $revenue=clean("revenue"); $tts=clean("tts");
$utm=array(); foreach(array("utm_source","utm_medium","utm_campaign","utm_term","utm_content","gclid","fbclid","landing") as $k){ $v=clean($k); if($v!==""){ $utm[]=str_pad($k.":",14).$v; } }
$isLP = ($src==="lp");
$back = $isLP ? "free-audit.html" : "index.html";
if ($isLP && $message==="") { $message="(no message)"; }

if ($name==="" || $email==="" || $message==="" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: $back?error=1".($isLP ? "#form" : "#contact")); exit;
}

$body  = "New TikTok Shop enquiry from the Adeptecom website\n";
$body .= "----------------------------------------\n";
$body .= "Name:      $name\n";
$body .= "Brand:     $brand\n";
$body .= "Email:     $email\n";
$body .= "WhatsApp:  $whatsapp\n";
$body .= "Package:   $plan\n";
$body .= "Market:    $market\n";
$body .= "Shop/URL:  $shop\n";
if ($isLP) { $body .= "Revenue:   $revenue\n"; $body .= "TikTok Shop: $tts\n"; }
if (count($utm)) { $body .= "---- Source ----\n".implode("\n",$utm)."\n"; }
$body .= "----------------------------------------\n";
$body .= "Message:\n$message\n";

$headers  = "From: Adeptecom Website <adnan@adeptecom.co>\r\n";
$hname = str_replace(array("\r","\n","<",">"), "", $name);
$headers .= "Reply-To: $hname <$email>\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if ($isLP) { $subject = "[AD LEAD] ".$subject; }
if (@mail($to, $subject, $body, $headers)) { header($isLP ? "Location: thanks.html" : "Location: index.html?sent=1#contact"); }
else { header("Location: $back?error=1".($isLP ? "#form" : "#contact")); }
exit;
