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
            <div class="backTo"><a href="/" title=""><img src="<?php echo baseurl('images/icons/topnav/mainWebsite.png') ?>" alt="" /><span>Main website</span></a></div>
            <div class="userNav">
                <ul>
                    <li><a href="<?php echo url('login/forgetpassword') ?>" title=""><img src="<?php echo baseurl('images/icons/topnav/contactAdmin.png') ?>" alt="" /><span>Forget Password?</span></a></li>
                </ul>
            </div>
            <div class="fix"></div>
        </div>
    </div>
</div>

<div class="loginWrapper">
    <?php echo $content ?>
</div>

<!-- Footer -->
<div id="footer">
    <div class="wrapper">
        <span>&copy; Copyright 2012. All rights reserved.</span>
    </div>
</div>

</body>
</html>
