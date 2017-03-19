<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="May Meow Cloud Platform">
    <meta name="author" content="MCloud Team">
    <link rel="icon" href="../../favicon.ico">

    <title><?= $this->fetch('title_for_page') ?>MCloud Platform</title>

    <!-- Page JS Plugins CSS -->
    <?= $this->fetch('css_for_page'); ?>

    <!-- Bootstrap core CSS -->
    <!-- <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">-->
    <?php echo $this->Html->css('CakeBootstrap.' . $CA_DEFAULT_ADMIN_THEME); ?>
    <?php //echo $this->Html->css('Emojione.emojione'); ?>
    <?php /*= $this->Html->css('CakeBootstrap.twbs/codeadvent2')*/ ?>

    <!-- Custom styles for this template -->
    <!-- <link href="sticky-footer-navbar.css" rel="stylesheet">-->
    <?php echo $this->Html->css('CakeBootstrap.app'); ?>
    <?php echo $this->Html->css('CakeFontAwesome.font-awesome.min'); ?>

    <!-- Cake Highlight -->
    <?php echo $this->Html->css('CakeHighlight.atom-one-dark'); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="<?= $this->fetch('page-bg-class') ?>">

<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" style="color: #ffffff;" href="/">
                <i class="fa fa-diamond"></i>
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
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control header-search-input" placeholder="Search Cloud">
                </div>
            </form>

            <ul class="nav navbar-nav">
                <li><a href="<?= $this->Url->build([
                        'prefix' => false, 'plugin' => 'MCloudResources',
                         'controller' =>'OwnedResources', 'action' => 'dashboard'
                    ])?>">Resources</a></li>
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
        <div class="row" style="border-top: 1px solid #e5e5e5">
            <div class="col-md-5">
                <p class="text-muted"><i class="fa fa-code"></i> with <i class="fa fa-heart-o text-smooth"></i> by <a
                            href="https://github.com/MayMeow">SomethingLovely</a>
                </p>
            </div>
            <div class="col-md-2 text-center"><p class="text-muted"><i class="fa fa-diamond"></i></p></div>
            <div class="col-md-5 text-right"><p class="text-muted">&copy; 2017 mcloud</p></div>
        </div>
    </div>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
<?php echo $this->Html->script('CakeBootstrap.jquery-1.12.1.min'); ?>
<!--<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->

<?php echo $this->Html->script('CakeHighlight.highlight.pack'); ?>
<script>
    hljs.initHighlightingOnLoad();
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
