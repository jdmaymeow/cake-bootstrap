<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?= $this->fetch('title_for_page') ?>MayMeow Cloud Platform</title>

    <!-- Page JS Plugins CSS -->
    <?= $this->fetch('css_for_page'); ?>

    <!-- Bootstrap core CSS -->
    <!-- <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">-->
    <?php echo $this->Html->css('CakeBootstrap.bootstrap'); ?>
    <?php //echo $this->Html->css('Emojione.emojione'); ?>
    <?= $this->Html->css('CakeBootstrap.twbs/codeadvent2')?>

    <!-- Coloring for Navigation-->
    <?php //echo $this->request['prefix'] == 'admin' ? $this->Html->css('Bootstrap.twbs/ochin') : $this->Html->css('Bootstrap.twbs/developers'); ?>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
    <!-- <link href="sticky-footer-navbar.css" rel="stylesheet">-->
    <?php echo $this->Html->css('CakeBootstrap.app'); ?>
    <?php echo $this->Html->css('CakeFontAwesome.font-awesome.min'); ?>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- <script src="../../assets/js/ie-emulation-modes-warning.js"></script>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="<?= $this->fetch('page-bg-class') ?>">

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-amethyst-darker navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                <i class="fa fa-diamond"></i> MayMeow Cloud Platform <label class="label label-danger">Beta</label>
            </a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">

            </ul>

            <ul class="nav navbar-nav navbar-right hidden-sm hidden-md">
                <li>
                    <?= $this->element($MCLOUD_ADMIN_TOP_MENU) ?>
                </li>
                <li>
                    <?= $this->element('CakeBootstrap.usermenu') ?>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<!-- Begin page content -->
<div class="gl-content">
    <?= $this->fetch('content') ?>
</div>
<!-- End page Content -->

<footer class="footer">
    <div class="container">
        <p class="text-muted"><i class="fa fa-pencil"></i> with <i class="fa fa-heart-o text-smooth"></i> by <a
                href="https://twitter.com/jdmaymeow">May Meow</a>
            <a href="<?= $this->Url->build(['prefix' => false, 'plugin' => false, 'controller' => 'pages', 'action' => 'display', 'terms']) ?>"
               class="pull-right">TERMS</a>
        </p>
    </div>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
<?php echo $this->Html->script('CakeBootstrap.jquery-1.12.1.min'); ?>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
        $('[data-toggle="popover"]').popover()
        $('[data-toggle="dropdown"]').dropdown()
        $('#myTabs a[href="#profile"]').tab('show')
        $('#myTabs a[href="#home"]').tab('show')
        $('#myTabs a[href="#articles"]').tab('show')
    })
</script>
<!-- <script src="../../dist/js/bootstrap.min.js"></script>-->
<?php echo $this->Html->script('CakeBootstrap.bootstrap.min'); ?>
<?= $this->fetch('scripts_for_page'); ?>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
</body>
</html>
