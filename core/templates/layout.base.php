<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="ng-csp ie ie6 lte9 lte8 lte7" data-placeholder-focus="false"><![endif]-->
<!--[if IE 7]>
<html class="ng-csp ie ie7 lte9 lte8 lte7" data-placeholder-focus="false"><![endif]-->
<!--[if IE 8]>
<html class="ng-csp ie ie8 lte9 lte8" data-placeholder-focus="false"><![endif]-->
<!--[if IE 9]>
<html class="ng-csp ie ie9 lte9" data-placeholder-focus="false"><![endif]-->
<!--[if gt IE 9]>
<html class="ng-csp ie" data-placeholder-focus="false"><![endif]-->
<!--[if !IE]><!-->
<html class="ng-csp" data-placeholder-focus="false"><!--<![endif]-->

<head>
    <title>
        <?php p($theme->getTitle()); ?>
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="shortcut icon" href="<?php print_unescaped(image_path('', 'favicon.png')); ?>"/>
    <link rel="apple-touch-icon-precomposed" href="<?php print_unescaped(image_path('', 'favicon-touch.png')); ?>"/>
    <?php foreach ($_['cssfiles'] as $cssfile): ?>
        <link rel="stylesheet" href="<?php print_unescaped($cssfile); ?>" type="text/css" media="screen"/>
    <?php endforeach; ?>
    <?php foreach ($_['jsfiles'] as $jsfile): ?>
        <script type="text/javascript" src="<?php print_unescaped($jsfile); ?>"></script>
    <?php endforeach; ?>
    <?php foreach ($_['headers'] as $header): ?>
        <?php
        print_unescaped('<' . $header['tag'] . ' ');
        foreach ($header['attributes'] as $name => $value) {
            print_unescaped("$name='$value' ");
        };
        print_unescaped('/>');
        ?>
    <?php endforeach; ?>
    <!-- Bootstrap -->

    <!-- Custom css -->
    <link href="/themes/b2drop/core/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>


</head>
<body id="body-public">

<noscript>
    <div id="nojavascript">
        <div><?php print_unescaped($l->t('This application requires JavaScript for correct operation. Please <a href="http://enable-javascript.com/" target="_blank">enable JavaScript</a> and reload the page.')); ?></div>
    </div>
</noscript>

<div class="header">
    <div id="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="https://eudat.eu">GO TO EUDAT WEBSITE</a>
                </div>
            </div>
        </div>
    </div>
    <div id="header-public">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <a href="/"><img width="232" height="128" src="/themes/b2drop/core/img/logo.png" alt=""/></a>
                </div>
                <div class="col-xs-12 col-sm-9 col-md-9">

                    <div id="gb_menu">
                        <ul>
                            <li><a target="_blank" href="https://eudat.eu/services/b2drop">WHAT IS B2DROP</a></li>
                            <li><a target="_blank" href="https://b2drop.eudat.eu/FAQ.pdf">FAQs</a></li>
                            <li><a target="_blank" href="https://eudat.eu/support-request?Service=B2DROP">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<?php print_unescaped($_['content']); ?>





<footer>
    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-6">
                <p><img width="45" height="31" src="/themes/b2drop/core/img/flag-ce.jpg"
                        style="float:left; margin-right:10px;"/> EUDAT receives funding from the European Union’s
                    Horizon 2020 research and innovation programme under grant agreement No. 654065. <a href="#">Legal
                        Notice</a>.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 text-right">
                <nav class="navbar navbar-footer">
                    <ul id="menu" class="nav navbar-nav navbar-right pull-right">
                        <li><a href="https://b2drop.eudat.eu/ToU.pdf">Terms of Use</a></li>
                        <li><a target="_blank" href="https://eudat.eu/what-eudat">About EUDAT</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/themes/b2drop/core/js/bootstrap.min.js"></script>


</body>


</html>