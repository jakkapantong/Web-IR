<!doctype html>
<html dir="ltr">
<head>
    <title>  password self service</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta id="application-info" name="application-name" content="sspr password self service" data-sspr-instance="1435e8f6112c5668" data-jsp-name="login.jsp"
          data-url-context="" data-pwmformid="dwhbbsvb1ubg6u3ix70ioydttsinygoa15e279b85f3mbjtd" data-clientetag="344d203d2e2755be27b8f70d1f7af8f8f66fa2b5" data-restclientkey=""/>
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=10; ie=9; ie=8; ie=7" />
    <link rel="icon" type="image/x-icon" href="/public/resources/nonce-j3p8mgh7/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="/public/resources/nonce-j3p8mgh7/font/font-awesome.css"/>
    <link href="/public/resources/nonce-j3p8mgh7/style.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="/public/resources/nonce-j3p8mgh7/themes/custom/style.css" rel="stylesheet" type="text/css" media="screen"/>
    <link media="only screen and (max-width: 600px)" href="/public/resources/nonce-j3p8mgh7/mobilestyle.css" type="text/css" rel="stylesheet"/><link media="only screen and (max-width: 600px)" href="/public/resources/nonce-j3p8mgh7/themes/custom/mobilestyle.css" type="text/css" rel="stylesheet"/><link href="/public/resources/nonce-j3p8mgh7/dojo/dijit/themes/nihilo/nihilo.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" nonce="6zcu1du7ua">
            var pwm_global = pwm_global || {}; pwm_global['startupfunctions'] = [];
        
    </script></head>
<body class="nihilo">
<div id="wrapper" class="login-wrapper">
    <div id="header">
    <div id="header-company-logo">
    </div>
    <div id="header-balance-div">
        <br/></div>
    <div id="header-right-logo" style="position: absolute">
    </div>
    <div id="header-center">
        <div id="header-center-left">
            <div id="header-page">nontri account management</div>
            <div id="header-title">password self service</div>
        </div>
        <div id="header-center-right">
            </div>
    </div>
</div>
<div id="centerbody">
        

        <form action="login" method="post" name="login" enctype="application/x-www-form-urlencoded" id="login">
            <div id="message_wrapper">
<span style="display:none" id="message" class="message">&nbsp;</span>
<div id="capslockwarning" style="display:none;">caps lock is on</div>
</div>
<div style="display: none" id="contextselectorwrapper">
    <h2><label for="context">location</label></h2>
    <select name="context" id="context" class="selectfield">
        </select>
</div>
<h2><label for="username">username</label></h2>
            <input type="text" name="username" id="username" class="inputfield" autofocus="autofocus"  required="required">

            <h2><label for="password">current password</label></h2>
            <input type="password" name="password" id="password" required="required" class="inputfield passwordfield"/>

            <div class="buttonbar">
                <button type="submit" class="btn" name="button" id="submitbtn">
                    <span class="btn-icon fa fa-sign-in"></span>login</button>
                <input type="hidden" name="processaction" value="login">
                <button style="visibility:hidden;" type="button" name="button" class="btn" id="button_cancel">
    <span class="btn-icon fa fa-times"></span>cancel</button>
<input type="hidden" id="pwmformid" name="pwmformid" value="dwhbbsvb1ubg6u3ix70ioydttsinygoa15e279b85f3mbjtd"/>
            </div>
        </form>
        <br/>
        <table style="border:0">
                <tr style="border:0">
                        <td style="border:0" class="menubutton_key">
                            <a class="menubutton" id="title_forgottenpassword" href="/public/forgottenpassword">
                                <span class="btn-icon fa fa-unlock"></span>forgotten password</a>
                        </td>
                        <td style="border: 0">
                            <p>regain access to your account if you have forgotten your password.</p>
                        </td>
                    </tr>
                <tr style="border:0">
                        <td style="border:0" class="menubutton_key">
                            <a class="menubutton" id="title_activateuser" href="/public/activateuser">
                                <span class="btn-icon fa fa-graduation-cap"></span>personal information verification</a>
                        </td>
                        <td style="border: 0">
                            <p>activate a pre-configured account and establish a new password.</p>
                        </td>
                    </tr>
                </table>
        <p>
            <span class="panel-login-display-message"><center><small>please contact ocs:office of computer services for support tel: 02-5620951-6 ext 622541-3</small><br/><b>chrome, firefox, ie(10 or higher) supported</b></center></span>
        </p>
    </div>
    <div class="push"></div>
</div>
<script type="text/javascript" nonce="6zcu1du7ua">
        pwm_global['startupfunctions'].push(function(){
            pwm_main.addeventhandler('login','submit',function(event){
                pwm_main.handleloginformsubmit(pwm_main.getobject('login'),event);
            });
        });
    
</script><div id="footer">
    <div id="footer-content">
        <span class="infotext">
            &nbsp;
        </span>
        <div>
            <span id="idle_wrapper">
            <span id="idle_status">
                idle timeout:15 minutes</span>
            </span>
            &nbsp;&nbsp;&nbsp;&#x2022;&nbsp;&nbsp;&nbsp;<span id="localeselectionmenu">
                <img src="/public/resources/nonce-j3p8mgh7/flags/png/us.png"/>
                
                &nbsp;english</span>
            </div>
    </div>
</div>
<script type="text/javascript" nonce="6zcu1du7ua">
        pwm_global['startupfunctions'].push(function() {
            
        });
    
</script><script nonce="6zcu1du7ua" data-dojo-config="async: true" dojo-sync-loader="false" type="text/javascript" src="/public/resources/nonce-j3p8mgh7/dojo/dojo/dojo.js"></script>
<script type="text/javascript" nonce="6zcu1du7ua" src="/public/resources/nonce-j3p8mgh7/js/main.js"></script></body>
</html>
