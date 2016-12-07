<?php

/*
Author: Pradeep Khodke
URL: http://www.codingcage.com/
*/


session_start();

if(isset($_SESSION['user_session'])!="")
{
	header("Location: home.php");
}

?>
<!DOCTYPE html>
<!--
    Copyright (c) 2012-2016 Adobe Systems Incorporated. All rights reserved.

    Licensed to the Apache Software Foundation (ASF) under one
    or more contributor license agreements.  See the NOTICE file
    distributed with this work for additional information
    regarding copyright ownership.  The ASF licenses this file
    to you under the Apache License, Version 2.0 (the
    "License"); you may not use this file except in compliance
    with the License.  You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing,
    software distributed under the License is distributed on an
    "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
     KIND, either express or implied.  See the License for the
    specific language governing permissions and limitations
    under the License.
-->
<html>

<head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <!-- This is a wide open CSP declaration. To lock this down for production, see below. -->
    <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline'; style-src 'self' 'unsafe-inline'; media-src *" />
    <!-- Good default declaration:
    * gap: is required only on iOS (when using UIWebView) and is needed for JS->native communication
    * https://ssl.gstatic.com is required only on Android and is needed for TalkBack to function properly
    * Disables use of eval() and inline scripts in order to mitigate risk of XSS vulnerabilities. To change this:
        * Enable inline JS: add 'unsafe-inline' to default-src
        * Enable eval(): add 'unsafe-eval' to default-src
    * Create your own at http://cspisawesome.com
    -->
    <!-- <meta http-equiv="Content-Security-Policy" content="default-src 'self' data: gap: 'unsafe-inline' https://ssl.gstatic.com; style-src 'self' 'unsafe-inline'; media-src *" /> -->

    <!-- <link rel="stylesheet" type="text/css" href="css/index.css" /> -->

    <!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="login/jquery-1.11.3-jquery.min.js"></script>
    <script type="text/javascript" src="login/validation.min.js"></script>
    <link href="login/style.css" rel="stylesheet" type="text/css" media="screen">
    <script type="text/javascript" src="login/script.js"></script>

      <!-- Include the compiled Ratchet CSS -->
      <link href="css/ratchet.css" rel="stylesheet">

      <!-- Include the compiled Ratchet JS -->
      <script src="js/ratchet.js"></script>

    <title>Hello World</title>
</head>

<body>
    <!-- Contenedor -->
    <div class="app content">
        <header class="bar bar-nav">
                <h1 class="title">Pituteando</h1>
        </header>

        <div class="content-padded">

          <div class="container">
          <form class="form-signin" method="post" id="login-form">

            <h2 class="form-signin-heading">Log In to WebApp.</h2><hr />

              <div id="error">
                <!-- error will be shown here ! -->
              </div>

              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" />
                <span id="check-e"></span>
              </div>

              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
            	     <span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
        			      </button>
              </div>

          </form>


        </div>

        </div>
    </div>
    <!-- Fin del contenedor -->


    <script type="text/javascript" src="cordova.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript">
        app.initialize();
    </script>
</body>

</html>
