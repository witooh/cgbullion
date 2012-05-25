<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>It's Brain - premium admin HTML template by Eugene Kopyov</title>

<?php
    
    addJquery();
    addCss(baseurl('css/main.css'));
    addCss(baseurl('css/style.css'));
    
    addJs(baseurl('js/plugins/spinner/jquery.mousewheel.js'));
    addJs(baseurl('js/plugins/spinner/ui.spinner.js'));
    
    addJs(baseurl('js/jquery-ui.min.js'));
    
    addJs(baseurl('js/plugins/wysiwyg/jquery.wysiwyg.js'));
    addJs(baseurl('js/plugins/wysiwyg/wysiwyg.image.js'));
    addJs(baseurl('js/plugins/wysiwyg/wysiwyg.link.js'));
    addJs(baseurl('js/plugins/wysiwyg/wysiwyg.table.js'));
    
    addJs(baseurl('js/plugins/flot/jquery.flot.js'));
    addJs(baseurl('js/plugins/flot/jquery.flot.orderBars.js'));
    addJs(baseurl('js/plugins/flot/jquery.flot.pie.js'));
    addJs(baseurl('js/plugins/flot/excanvas.min.js'));
    addJs(baseurl('js/plugins/flot/jquery.flot.resize.js'));
    
    addJs(baseurl('js/plugins/tables/jquery.dataTables.js'));
    addJs(baseurl('js/plugins/tables/colResizable.min.js'));
    
    addJs(baseurl('js/plugins/forms/forms.js'));
    addJs(baseurl('js/plugins/forms/autogrowtextarea.js'));
    addJs(baseurl('js/plugins/forms/autotab.js'));
    addJs(baseurl('js/plugins/forms/jquery.validationEngine-en.js'));
    addJs(baseurl('js/plugins/forms/jquery.validationEngine.js'));
    addJs(baseurl('js/plugins/forms/jquery.dualListBox.js'));
    addJs(baseurl('js/plugins/forms/chosen.jquery.min.js'));
    addJs(baseurl('js/plugins/forms/jquery.maskedinput.min.js'));
    addJs(baseurl('js/plugins/forms/jquery.inputlimiter.min.js'));
    addJs(baseurl('js/plugins/forms/jquery.tagsinput.min.js'));
    
    addJs(baseurl('js/plugins/other/calendar.min.js'));
    addJs(baseurl('js/plugins/other/elfinder.min.js'));
    
    addJs(baseurl('js/plugins/uploader/plupload.js'));
    addJs(baseurl('js/plugins/uploader/plupload.html5.js'));
    addJs(baseurl('js/plugins/uploader/plupload.html4.js'));
    addJs(baseurl('js/plugins/uploader/jquery.plupload.queue.js'));
    
    addJs(baseurl('js/plugins/ui/jquery.progress.js'));
    addJs(baseurl('js/plugins/ui/jquery.jgrowl.js'));
    addJs(baseurl('js/plugins/ui/jquery.tipsy.js'));
    addJs(baseurl('js/plugins/ui/jquery.alerts.js'));
    addJs(baseurl('js/plugins/ui/jquery.colorpicker.js'));
    
    addJs(baseurl('js/plugins/wizards/jquery.form.wizard.js'));
    addJs(baseurl('js/plugins/wizards/jquery.validate.js'));
    
    addJs(baseurl('js/plugins/ui/jquery.breadcrumbs.js'));
    addJs(baseurl('js/plugins/ui/jquery.collapsible.min.js'));
    addJs(baseurl('js/plugins/ui/jquery.ToTop.js'));
    addJs(baseurl('js/plugins/ui/jquery.listnav.js'));
    addJs(baseurl('js/plugins/ui/jquery.sourcerer.js'));
    addJs(baseurl('js/plugins/ui/jquery.timeentry.min.js'));
    addJs(baseurl('js/plugins/ui/jquery.prettyPhoto.js'));
    
    addJs(baseurl('js/custom.js'));
?>
</head>

<body>

<!-- Top navigation bar -->
<div id="topNav">
    <div class="fixed">
        <div class="wrapper">
            <div class="welcome"><a href="#" title=""><img src="<?php echo baseurl('images/userPic.png') ?>" alt="" /></a><span>Howdy, Eugene!</span></div>
            <div class="userNav">
                <ul>
                    <li><a href="#" title=""><img src="<?php echo baseurl('images/icons/topnav/profile.png') ?>" alt="" /><span>Profile</span></a></li>
                    <li><a href="#" title=""><img src="<?php echo baseurl('images/icons/topnav/tasks.png') ?>" alt="" /><span>Tasks</span></a></li>
                    <li class="dd"><a title=""><img src="<?php echo baseurl('images/icons/topnav/messages.png') ?>" alt="" /><span>Messages</span><span class="numberTop">8</span></a>
                        <ul class="menu_body">
                            <li><a href="#" title="" class="sAdd">new message</a></li>
                            <li><a href="#" title="" class="sInbox">inbox</a></li>
                            <li><a href="#" title="" class="sOutbox">outbox</a></li>
                            <li><a href="#" title="" class="sTrash">trash</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title=""><img src="<?php echo baseurl('images/icons/topnav/settings.png') ?>" alt="" /><span>Settings</span></a>
                    </li>
                    <li><a href="<?php echo url('login/logout') ?>" title=""><img src="<?php echo baseurl('images/icons/topnav/logout.png') ?>" alt="" /><span>Logout</span></a></li>
                </ul>
            </div>
            <div class="fix"></div>
        </div>
    </div>
</div>

<!-- Header -->
<div id="header" class="wrapper">
    <div class="logo"><a href="/" title=""><img src="<?php echo baseurl('images/loginLogo.png') ?>" alt="" /></a></div>
    <div class="middleNav">
        <ul>
            <li class="iMes"><a href="#" title=""><span>Support tickets</span></a><span class="numberMiddle">9</span></li>
            <li class="iStat"><a href="#" title=""><span>Statistics</span></a></li>
            <li class="iUser"><a href="#" title=""><span>User list</span></a></li>
            <li class="iOrders"><a href="#" title=""><span>Billing panel</span></a></li>
        </ul>
    </div>
    <div class="fix"></div>
</div>


<!-- Content wrapper -->
<div class="wrapper">
    
    <!-- Left navigation -->
    <div class="leftNav">
        <?php
            $this->widget('ext.template.Sidebarmenu',array(
                'items'=>array(
                    array(
                        'label'=>'Dashboard',
                        'url'=>array('site/index'),
                        'itemOptions'=>array('class'=>'dash'),
                    ),
                    array(
                        'label'=>'Graphs and charts',
                        'url'=>array('site/graph'),
                        'itemOptions'=>array('class'=>'graphs'),
                    ),
                    array(
                        'label'=>'Form elements',
                        'url'=>array('site/form'),
                        'itemOptions'=>array('class'=>'forms'),
                    ),
                    array(
                        'label'=>'Interface elements',
                        'url'=>array('site/interface'),
                        'itemOptions'=>array('class'=>'login'),
                    ),
                    array(
                        'label'=>'Typography',
                        'url'=>array('site/typo'),
                        'itemOptions'=>array('class'=>'typo'),
                    ),
                    array(
                        'label'=>'Tables',
                        'url'=>array('site/table'),
                        'itemOptions'=>array('class'=>'tables'),
                    ),
                    array(
                        'label'=>'Calendar',
                        'url'=>array('site/calendar'),
                        'itemOptions'=>array('class'=>'cal'),
                    ),
                    array(
                        'label'=>'Gallery',
                        'url'=>array('site/gallery'),
                        'itemOptions'=>array('class'=>'gallery'),
                    ),
                    array(
                        'label'=>'Widgets',
                        'url'=>array('site/widget'),
                        'itemOptions'=>array('class'=>'widgets'),
                    ),
                    array(
                        'label'=>'File manager',
                        'url'=>array('site/file'),
                        'itemOptions'=>array('class'=>'files'),
                    ),
                    array(
                        'label'=>'Error pages',
                        'itemOptions'=>array('class'=>'errors'),
                        'items'=>array(
                            array('label'=>'403 page', 'url'=>array('site/error')),
                            array('label'=>'404 page', 'url'=>array('site/error')),
                            array('label'=>'405 page', 'url'=>array('site/error')),
                            array('label'=>'500 page', 'url'=>array('site/error')),
                            array('label'=>'503 page', 'url'=>array('site/error')),
                            array('label'=>'Website is offline', 'url'=>array('site/error')),
                        ),
                        'numbers'=>'6'
                    ),
                    array(
                        'label'=>'Buttons and icons',
                        'url'=>array('site/icon'),
                        'itemOptions'=>array('class'=>'pic'),
                    ),
                    array(
                        'label'=>'Contact list',
                        'url'=>array('site/contact'),
                        'itemOptions'=>array('class'=>'contacts'),
                    ),
                ),
            ));
        ?>
        <div class="fix"></div>
    </div>

    
    <!-- Content -->
    <div class="content">
        <?php if(hasFlash('success')):?>
            <div class="nNote nSuccess hideit">
                <p><strong><?php echo t('SUCCESS:'); ?> </strong><?php echo t(getFlash('success')) ?></p>
            </div> 
        <?php elseif(hasFlash('error')): ?>
            <div class="nNote nFailure hideit">
                <p><strong><?php echo t('FAILURE:'); ?> </strong><?php echo t(getFlash('error')) ?></p>
            </div>
        <?php elseif(hasFlash('warning')): ?>
            <div class="nNote nWarning hideit">
                <p><strong><?php echo t('WARNING:'); ?> </strong><?php echo t(getFlash('warning')) ?></p>
            </div>
        <?php elseif(hasFlash('info')): ?>
            <div class="nNote nInformation hideit">
                <p><strong><?php echo t('INFORMATION:'); ?> </strong><?php echo t(getFlash('info')) ?></p>
            </div>
        <?php endif; ?>
        <?php echo $content ?>
    </div>
    <div class="fix"></div>
</div>

<!-- Footer -->
<div id="footer">
    <div class="wrapper">
        <span>&copy; Copyright 2011. All rights reserved. It's Brain admin theme by <a href="#" title="">Eugene Kopyov</a></span>
    </div>
</div>

</body>
</html>
