<?php
$login_routes = [
    "/set-language/{lang}" => "Lang_ctrl@set_lang@name.setLang",
    "/login" => 'Auth@user_login_page@name.userLogin',
    "/logout" => 'Auth@logout@name.logout',
    "/user-login-ajax" => 'Auth@user_login@name.userLoginAjax',
    "/admin-login" => 'Auth@admin_login_page@name.adminLogin',
    "/admin-login-ajax" => 'Auth@admin_login@name.adminLoginAjax',
    "/register" => 'Auth@registration_page@name.register',
    "/user-registration-ajax" => 'Auth@register@name.registerAjax',
    "/reset-password" => 'Auth@reset_password_page@name.resetPassword',
    "/reset-password-ajax" => 'Auth@reset_password_ajax@name.resetPasswordAjax',
    "/cnp/{prt}" => 'Auth@create_new_password_page@name.createNewPassword',
    "/send-temp-pass-on-ajax" => 'Auth@send_me_temp_password_ajax@name.sendMeTempPassAjax',
    "/send-otp-on-ajax" => 'Auth@send_otp@name.sendOtpAjax',
];