<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


 $EMAIL_TEMPLATE_HEADER = "
    <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
    <html xmlns=\"http://www.w3.org/1999/xhtml\">

    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <style>
        
            html, body, div, span, applet, object, iframe,
            blockquote, pre,
            a, abbr, acronym, address, big, cite, code,
            del, dfn, em, img, ins, kbd, q, s, samp,
            small, strike, strong, sub, sup, tt, var,
            b, u, i, center,
            dl, dt, dd, ol, ul, li,
            fieldset, form, label, legend,
            table, caption, tbody, tfoot, thead, tr, th, td,
            article, aside, canvas, details, embed, 
            figure, figcaption, footer, header, hgroup, 
            menu, nav, output, ruby, section, summary,
            time, mark, audio, video, button{
                margin: 0;
                padding: 0;
                border: 0;
                font-size: 100%;
                font: inherit;
                vertical-align: baseline;
            }
            
            article, aside, details, figcaption, figure, 
            footer, header, hgroup, menu, nav, section {
                display: block;
            }
            body {
                line-height: 1;
            }
            #banner, #footer {
                width: 1024px;
                background-repeat: no-repeat;
                background-color: #ddd;
            }
            #banner {
                height: 165px;
                background: url(banner.jpg) no-repeat center center;
            }
            #footer {
                clear: both;
                height: 114px;
                background: url(footer.jpg);
            }
            body {
                background: #fffaa2;
                width: 1024px;
                font-family:arial;
            }
            .content{
                text-align:center;
            }
        </style>
    </head>

    <body>
        <div class=\"center max-size\">
            <div class=\"cover\" id=\"banner\"></div>
            <div class=\"content\">
";

$EMAIL_TEMPLATE_FOOTER = "
            </div>
        </div>
        
        <div id=\"footer\" class=\"cover\"></div>
    <body>
    </html>
";

if(! function_exists('get_client_ip')) {
    function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
}

if ( ! function_exists('xTimeAgo'))
{
	function xTimeAgo ($oldTime, $newTime) {
		$timeCalc = strtotime($newTime) - strtotime($oldTime);

		if ($timeCalc > (60*60*24)) {
			$timeCalc = round($timeCalc/60/60/24) . " days ago";
			if($timeCalc > 12) {
				$timeCalc = date("F jS, Y",strtotime($oldTime));
			}
		}
		else if ($timeCalc > (60*60)) {
			$timeCalc = round($timeCalc/60/60);
			if($timeCalc == 1) {
				$timeCalc .= " hour ago";
			}
			else {
				$timeCalc .= " hours ago";
			}
		}
		else if ($timeCalc > 60) {
			$timeCalc = round($timeCalc/60);
			if($timeCalc == 1) {
				$timeCalc .= " minute ago";
			}
			else {
				$timeCalc .= " minutes ago";
			}
		}
		else if ($timeCalc > 0) {
			if($timeCalc == 1) {
				$timeCalc .= " second ago";
			}
			else {
				$timeCalc .= " seconds ago";
			}
		}
		else {
			$timeCalc = "a few seconds ago";
		}
		
		return $timeCalc;
	}
}


// send mail wrap
/*
if(! function_exists('send_mail')) {
    function send_mail($email, $name, $address, $subject, $content) {
   
        $headers = "From: " . strip_tags($_POST['req-email']) . "\r\n";
        $headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
        $headers .= "CC: jhesed.tacadena@gmail.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
   
        // send to jsos

        $html = "";
        $html .= $EMAIL_TEMPLATE_HEADER;
        $html .= sprintf($TO_JSOS, $name, $email, $address, $subject, $content);
        $html .= $EMAIL_TEMPLATE_FOOTER;
        mail($email, sprintf($TO_JSOS_SUBJ, $name), $html, $headers);
        
        // confirmation to sender

        $html = "";
        $html .= $EMAIL_TEMPLATE_HEADER;
        $html .= sprintf($CONFIRMATION, $name, $subject);
        $html .= $EMAIL_TEMPLATE_FOOTER;
        mail($email, $CONFIRMATION_SUBJECT, $html, $headers);
     
    }
}
*/

// revise this!!
if(! function_exists('contact_us_mail')) {
	function contact_us_mail($email, $name, $address, $subject, $content) {
		$headers = "From: " . strip_tags($_POST['req-email']) . "\r\n";
        $headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
        $headers .= "CC: jhesed.tacadena@gmail.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        
        // $JSOS_TEAM = array("jsosc8@yahoo.com", "jhesed.tacadena@gmail.com", "jhesed_astigsilord@yahoo.com", "jdtacadena@chikka.com", "hannahtanlangco@yahoo.com", "joe_tacadena2011@yahoo.com");
        $JSOS_TEAM = array("jhesed_astigsilord@yahoo.com", "jhesed.tacadena@gmail.com");
        

        $CONFIRMATION_SUBJECT = "[jsos.com] Your email was successfully sent.";
        $CONFIRMATION = "	
            <p>Hello <b>%s</b>,</p>
            <h4>SUCCESS!</h4>
            <p>We have received your email with subject <b>%s</b>.</p>
            <p>We will get in touch with you as soon as possible.</p>
            <p>Thanks!</p>
            <h4>JSOS Team</h4>
        ";
        
        $TO_JSOS_SUBJ = "[jsos.com] %s contacts us.";
        $TO_JSOS = "
            <p>Hello <b>JSOS Team</b>!</p>
            <p><b>%s</b> sent us an email.</p>
            <p>Please see details below: </p>
            <p>EMAIL: %s </p>
            <p>ADDRESS: %s </p>
            <p>SUBJECT: %s </p>
            <p>CONTENT: %s </p>
            <p></p>
        ";

        $EMAIL_TEMPLATE_HEADER = "
            <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
            <html xmlns=\"http://www.w3.org/1999/xhtml\">

            <head>
                <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
                <style>
                
                    html, body, div, span, applet, object, iframe,
                    blockquote, pre,
                    a, abbr, acronym, address, big, cite, code,
                    del, dfn, em, img, ins, kbd, q, s, samp,
                    small, strike, strong, sub, sup, tt, var,
                    b, u, i, center,
                    dl, dt, dd, ol, ul, li,
                    fieldset, form, label, legend,
                    table, caption, tbody, tfoot, thead, tr, th, td,
                    article, aside, canvas, details, embed, 
                    figure, figcaption, footer, header, hgroup, 
                    menu, nav, output, ruby, section, summary,
                    time, mark, audio, video, button{
                        margin: 0;
                        padding: 0;
                        border: 0;
                        font-size: 100%;
                        font: inherit;
                        vertical-align: baseline;
                    }
                    
                    article, aside, details, figcaption, figure, 
                    footer, header, hgroup, menu, nav, section {
                        display: block;
                    }
                    body {
                        line-height: 1;
                    }
                    #banner, #footer {
                        width: 1024px;
                        background-repeat: no-repeat;
                        background-color: #ddd;
                    }
                    #banner {
                        height: 165px;
                        background: url(banner.jpg) no-repeat center center;
                    }
                    #footer {
                        clear: both;
                        height: 114px;
                        background: url(footer.jpg);
                    }
                    body {
                        background: #fffaa2;
                        width: 1024px;
                        font-family:arial;
                    }
                    .content{
                        text-align:center;
                    }
                </style>
            </head>

            <body>
                <div class=\"center max-size\">
                    <div class=\"cover\" id=\"banner\"></div>
                    <div class=\"content\">
        ";
        
        $EMAIL_TEMPLATE_FOOTER = "
                    </div>
                </div>
                
                <div id=\"footer\" class=\"cover\"></div>
            <body>
            </html>
        ";
	  
        $html = "";
        $html .= $EMAIL_TEMPLATE_HEADER;
        $html .= sprintf($TO_JSOS, $name, $email, $address, $subject, $content);
        $html .= $EMAIL_TEMPLATE_FOOTER;
    
        // emails jsos team     
        foreach ($JSOS_TEAM as $admin_mail) {
            mail($admin_mail, sprintf($TO_JSOS_SUBJ, $name), $html, $headers);
        }

        // confirmation to sender

        $html = "";
        $html .= $EMAIL_TEMPLATE_HEADER;
        $html .= sprintf($CONFIRMATION, $name, $subject);
        $html .= $EMAIL_TEMPLATE_FOOTER;
        mail($email, $CONFIRMATION_SUBJECT, $html, $headers);
     
        
	}
    
}
