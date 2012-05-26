<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->title ?></title>

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
            <div class="welcome"><a href="#" title=""><img src="<?php echo baseurl('images/userPic.png') ?>" alt="" /></a><span><?php echo userName(); ?></span></div>
            <div class="userNav">
                <ul>
                    <li><a href="#" title=""><img src="<?php echo baseurl('images/icons/topnav/profile.png') ?>" alt="" /><span>Profile</span></a></li>
                    <li><a href="#" title=""><img src="<?php echo baseurl('images/icons/topnav/tasks.png') ?>" alt="" /><span>Tasks</span></a></li>
                    <li class="dd"><a title=""><img src="<?php echo baseurl('images/icons/topnav/settings.png') ?>" alt="" /><span>Settings</span></a>
                        <ul class="menu_body">
                            <li><a href="#" title="" class="sTasks">Change Password</a></li>
                            <li><a href="#" title="" class="sTasks">Emails</a></li>
                        </ul>
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
    <!-- <div class="logo"><a href="/" title=""><img src="<?php echo baseurl('images/loginLogo.png') ?>" alt="" /></a></div> -->
    <?php $this->widget('ext.template.Pagemenu',array(
        'items'=>$this->pageMenu,
    ));
    ?>
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
                        'label'=>'News',
                        'url'=>array('news/index'),
                        'itemOptions'=>array('class'=>'typo'),
                    ),
                    array(
                        'label'=>'Report',
                        'url'=>array('report/index'),
                        'itemOptions'=>array('class'=>'typo'),
                    ),
                    array(
                        'label'=>'Gold Index',
                        'url'=>array('gold/index'),
                        'itemOptions'=>array('class'=>'pricetags'),
                    ),
                    array(
                        'label'=>'Currency Index',
                        'itemOptions'=>array('class'=>'money'),
                        'items'=>array(
                            array('label'=>'Exchange rate to USD', 'url'=>array('currency/exchange')),
                            array('label'=>'Inverse rate to USD', 'url'=>array('currency/inverse')),
                        ),
                    ),
                ),
            ));
        ?>
        <div class="fix"></div>
    </div>

    
    <!-- Content -->
    <div class="content">
        <div class="title"><h5><?php echo $this->title ?></h5></div>
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
        <span>&copy; Copyright 2012. All rights reserved.</span>
    </div>
</div>

</body>
</html>
