<div class="title"><h5>Tables examples</h5></div>

<!-- Statistics -->
<div class="stats">
    <ul>
        <li><a href="#" class="count grey" title="">52</a><span>new pending tasks</span></li>
        
        <li><a href="#" class="count grey" title="">520</a><span>pending orders</span></li>
        <li><a href="#" class="count grey" title="">14</a><span>new opened tickets</span></li>
        <li class="last"><a href="#" class="count grey" title="">48</a><span>new user registrations</span></li>
    </ul>
    <div class="fix"></div>
</div>

<div class="widget first">
    <div class="head"><h5 class="iFrames">cTable</h5></div>
    <div class="">
        <?php
            $this->widget('zii.widgets.grid.CGridView', array(
                'dataProvider'=>$dataProvider,
                'cssFile'=>false,
                'summaryText'=>false,
                'itemsCssClass'=>'tableStatic',
                'rowCssClass'=>false,
                'columns'=>array(
                    array(
                        'class'=>'CCheckBoxColumn',
                        'checkBoxHtmlOptions' => array(
                            'name' => 'cid[]',
                            'class'=> 'checkbox-cid',
                        ),
                        'selectableRows'=>2,
                        'htmlOptions'=>array('style'=>'width:15px;')
                    ),
                    array(
                        'name'=>'id',
                        'header'=>t('ID'),
                        'type'=>'html',
                        'value'=>"CHtml::link(".'$data["id"]'.",url('av/av003',array('id'=>".'$data["id"]'.")))",
                    ),
                    array(
                        'name'=>'request_no',
                        'header'=>t('Request No.'),
                    ),
                    array(
                        'name'=>'declaration_no',
                        'header'=>t('Declaration No.'),
                    ),
                    array(
                        'name'=>'origin_code',
                        'header'=>t('Origin Code'),
                    ),
                    array(
                        'name'=>'destination',
                        'header'=>t('Destination'),
                    ),
                    array(
                        'name'=>'mawb',
                        'header'=>t('MAWB'),
                    ),
                    array(
                        'name'=>'hawb',
                        'header'=>t('HAWB'),
                    ),
                    array(
                        'name'=>'goods_description',
                        'header'=>t('Goods Description'),
                    ),
                    array(
                        'name'=>'activity',
                        'header'=>t('Activity'),
                    ),
                ),
                'pager'=>array(
                    'class'=>'CLinkPager',
                    'header'=>'',
                    'cssFile'=>false,
                    'htmlOptions'=>array('class'=>'pages'),
                ),
            ));
        ?>
    </div>
</div>

<!-- Static table -->
<div class="widget">
    <div class="head"><h5 class="iFrames">Static table</h5></div>
    <table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
        <thead>
            <tr>
                <td width="20%">Column 1</td>
                <td width="20%">Column 2</td>
                <td width="20%">Column 3</td>
                <td width="20%">Column 4</td>
                <td width="20%">Column 5</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Row 1</td>
                <td>Row 1</td>
                <td>Row 1</td>
                <td>Row 1</td>
                <td>Row 1</td>
            </tr>
            <tr>
                <td>Row 2</td>
                <td>Row 2</td>
                <td>Row 2</td>
                <td>Row 2</td>
                <td>Row 2</td>
            </tr>
            <tr>
                <td>Row 3</td>
                <td>Row 3</td>
                <td>Row 3</td>
                <td>Row 3</td>
                <td>Row 3</td>
            </tr>
            <tr>
                <td>Row 4</td>
                <td>Row 4</td>
                <td>Row 4</td>
                <td>Row 4</td>
                <td>Row 4</td>
            </tr>
            <tr>
                <td>Row 5</td>
                <td>Row 5</td>
                <td>Row 5</td>
                <td>Row 5</td>
                <td>Row 5</td>
            </tr>
        </tbody>
    </table>
    <div>123</div>
</div>

<!-- Static table with resizable columns -->
<div class="widget">
    <div class="head"><h5 class="iFrames">Static table with resizable columns</h5></div>
    <table cellpadding="0" cellspacing="0" width="100%" class="tableStatic resize">
        <thead>
            <tr>
              <td>Column 1</td>
              <td>Column 2</td>
              <td>Column 3</td>
              <td>Column 4</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Row 1</td>
                <td>Row 1</td>
                <td>Row 1</td>
                <td>Row 1</td>
            </tr>
            <tr>
                <td>Row 2</td>
                <td>Row 2</td>
                <td>Row 2</td>
                <td>Row 2</td>
            </tr>
            <tr>
                <td>Row 3</td>
                <td>Row 3</td>
                <td>Row 3</td>
                <td>Row 3</td>
            </tr>
            <tr>
                <td>Row 4</td>
                <td>Row 4</td>
                <td>Row 4</td>
                <td>Row 4</td>
            </tr>
            <tr>
                <td>Row 5</td>
                <td>Row 5</td>
                <td>Row 5</td>
                <td>Row 5</td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Table with data on the right head side -->
<div class="widget">
    <div class="head"><h5 class="iFrames">Table with data on the right head side</h5><div class="num"><a href="#" class="blueNum">+545</a></div></div>
    <table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
        <thead>
            <tr>
                <td>Column 1</td>
                <td>Column 2</td>
                <td>Column 3</td>
                <td>Column 4</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Row 1</td>
                <td>Row 1</td>
                <td>Row 1</td>
                <td>Row 1</td>
            </tr>
            <tr>
                <td>Row 2</td>
                <td>Row 2</td>
                <td>Row 2</td>
                <td>Row 2</td>
            </tr>
            <tr>
                <td>Row 3</td>
                <td>Row 3</td>
                <td>Row 3</td>
                <td>Row 3</td>
            </tr>
            <tr>
                <td>Row 4</td>
                <td>Row 4</td>
                <td>Row 4</td>
                <td>Row 4</td>
            </tr>
            <tr>
                <td>Row 5</td>
                <td>Row 5</td>
                <td>Row 5</td>
                <td>Row 5</td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Tables inside tabs -->
<div class="widget tabsRight">
    <div class="head"><h5 class="iFrames">Tables with tabbed navigation</h5></div>       
    <ul class="tabs">
        <li><a href="#tab5">Four cols</a></li>
        <li><a href="#tab6">Five cols</a></li>
        <li><a href="#tab7">Six cols</a></li>
    </ul>
    
    <div class="tab_container">
        <div id="tab5" class="tab_content nopadding">
            <table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
                <thead>
                    <tr>
                        <td width="25%">Column 1</td>
                        <td>Column 2</td>
                        <td>Column 3</td>
                        <td>Column 4</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Row 1</td>
                        <td>Row 1</td>
                        <td>Row 1</td>
                        <td>Row 1</td>
                    </tr>
                    <tr>
                        <td>Row 2</td>
                        <td>Row 2</td>
                        <td>Row 2</td>
                        <td>Row 2</td>
                    </tr>
                    <tr>
                        <td>Row 3</td>
                        <td>Row 3</td>
                        <td>Row 3</td>
                        <td>Row 3</td>
                    </tr>
                    <tr>
                        <td>Row 4</td>
                        <td>Row 4</td>
                        <td>Row 4</td>
                        <td>Row 4</td>
                    </tr>
                    <tr>
                        <td>Row 5</td>
                        <td>Row 5</td>
                        <td>Row 5</td>
                        <td>Row 5</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="tab6" class="tab_content nopadding">
            <table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
                <thead>
                    <tr>
                        <td width="25%">Column 1</td>
                        <td>Column 2</td>
                        <td>Column 3</td>
                        <td>Column 4</td>
                        <td>Column 5</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Row 1</td>
                        <td>Row 1</td>
                        <td>Row 1</td>
                        <td>Row 1</td>
                        <td>Row 1</td>
                    </tr>
                    <tr>
                        <td>Row 2</td>
                        <td>Row 2</td>
                        <td>Row 2</td>
                        <td>Row 2</td>
                        <td>Row 2</td>
                    </tr>
                    <tr>
                        <td>Row 3</td>
                        <td>Row 3</td>
                        <td>Row 3</td>
                        <td>Row 3</td>
                        <td>Row 3</td>
                    </tr>
                    <tr>
                        <td>Row 4</td>
                        <td>Row 4</td>
                        <td>Row 4</td>
                        <td>Row 4</td>
                        <td>Row 4</td>
                    </tr>
                    <tr>
                        <td>Row 5</td>
                        <td>Row 5</td>
                        <td>Row 5</td>
                        <td>Row 5</td>
                        <td>Row 5</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div id="tab7" class="tab_content nopadding">
            <table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
                <thead>
                    <tr>
                        <td>Column 1</td>
                        <td>Column 2</td>
                        <td>Column 3</td>
                        <td>Column 4</td>
                        <td>Column 5</td>
                        <td>Column 6</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Row 1</td>
                        <td>Row 1</td>
                        <td>Row 1</td>
                        <td>Row 1</td>
                        <td>Row 1</td>
                        <td>Row 1</td>
                    </tr>
                    <tr>
                        <td>Row 2</td>
                        <td>Row 2</td>
                        <td>Row 2</td>
                        <td>Row 2</td>
                        <td>Row 2</td>
                        <td>Row 2</td>
                    </tr>
                    <tr>
                        <td>Row 3</td>
                        <td>Row 3</td>
                        <td>Row 3</td>
                        <td>Row 3</td>
                        <td>Row 3</td>
                        <td>Row 3</td>
                    </tr>
                    <tr>
                        <td>Row 4</td>
                        <td>Row 4</td>
                        <td>Row 4</td>
                        <td>Row 4</td>
                        <td>Row 4</td>
                        <td>Row 4</td>
                    </tr>
                    <tr>
                        <td>Row 5</td>
                        <td>Row 5</td>
                        <td>Row 5</td>
                        <td>Row 5</td>
                        <td>Row 5</td>
                        <td>Row 5</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>    
    <div class="fix"></div>     
</div>

<!-- Dynamic table -->
<div class="table">
    <div class="head"><h5 class="iFrames">Dynamic table</h5></div>
    <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
        <thead>
            <tr>
                <th>Rendering engine</th>
                <th>Browser</th>
                <th>Platform(s)</th>
                <th>Engine version</th>
                <th>CSS grade</th>
            </tr>
        </thead>
        <tbody>
            <tr class="gradeX">
                <td>Trident</td>
                <td>Internet
                     Explorer 4.0</td>
                <td>Win 95+</td>
                <td class="center">4</td>
                <td class="center">X</td>
            </tr>
            <tr class="gradeC">
                <td>Trident</td>
                <td>Internet
                     Explorer 5.0</td>
                <td>Win 95+</td>
                <td class="center">5</td>
                <td class="center">C</td>
            </tr>
            <tr class="gradeA">
                <td>Trident</td>
                <td>Internet
                     Explorer 5.5</td>
                <td>Win 95+</td>
                <td class="center">5.5</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Trident</td>
                <td>Internet
                     Explorer 6</td>
                <td>Win 98+</td>
                <td class="center">6</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Trident</td>
                <td>Internet Explorer 7</td>
                <td>Win XP SP2+</td>
                <td class="center">7</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Trident</td>
                <td>AOL browser (AOL desktop)</td>
                <td>Win XP</td>
                <td class="center">6</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Firefox 1.0</td>
                <td>Win 98+ / OSX.2+</td>
                <td class="center">1.7</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Firefox 1.5</td>
                <td>Win 98+ / OSX.2+</td>
                <td class="center">1.8</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Firefox 2.0</td>
                <td>Win 98+ / OSX.2+</td>
                <td class="center">1.8</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Firefox 3.0</td>
                <td>Win 2k+ / OSX.3+</td>
                <td class="center">1.9</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Camino 1.0</td>
                <td>OSX.2+</td>
                <td class="center">1.8</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Camino 1.5</td>
                <td>OSX.3+</td>
                <td class="center">1.8</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Netscape 7.2</td>
                <td>Win 95+ / Mac OS 8.6-9.2</td>
                <td class="center">1.7</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Netscape Browser 8</td>
                <td>Win 98SE+</td>
                <td class="center">1.7</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Netscape Navigator 9</td>
                <td>Win 98+ / OSX.2+</td>
                <td class="center">1.8</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Mozilla 1.0</td>
                <td>Win 95+ / OSX.1+</td>
                <td class="center">1</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Mozilla 1.1</td>
                <td>Win 95+ / OSX.1+</td>
                <td class="center">1.1</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Mozilla 1.2</td>
                <td>Win 95+ / OSX.1+</td>
                <td class="center">1.2</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Mozilla 1.3</td>
                <td>Win 95+ / OSX.1+</td>
                <td class="center">1.3</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Mozilla 1.4</td>
                <td>Win 95+ / OSX.1+</td>
                <td class="center">1.4</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Mozilla 1.5</td>
                <td>Win 95+ / OSX.1+</td>
                <td class="center">1.5</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Mozilla 1.6</td>
                <td>Win 95+ / OSX.1+</td>
                <td class="center">1.6</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Mozilla 1.7</td>
                <td>Win 98+ / OSX.1+</td>
                <td class="center">1.7</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Mozilla 1.8</td>
                <td>Win 98+ / OSX.1+</td>
                <td class="center">1.8</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Seamonkey 1.1</td>
                <td>Win 98+ / OSX.2+</td>
                <td class="center">1.8</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Gecko</td>
                <td>Epiphany 2.20</td>
                <td>Gnome</td>
                <td class="center">1.8</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Webkit</td>
                <td>Safari 1.2</td>
                <td>OSX.3</td>
                <td class="center">125.5</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Webkit</td>
                <td>Safari 1.3</td>
                <td>OSX.3</td>
                <td class="center">312.8</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Webkit</td>
                <td>Safari 2.0</td>
                <td>OSX.4+</td>
                <td class="center">419.3</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Webkit</td>
                <td>Safari 3.0</td>
                <td>OSX.4+</td>
                <td class="center">522.1</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Webkit</td>
                <td>OmniWeb 5.5</td>
                <td>OSX.4+</td>
                <td class="center">420</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Webkit</td>
                <td>iPod Touch / iPhone</td>
                <td>iPod</td>
                <td class="center">420.1</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Webkit</td>
                <td>S60</td>
                <td>S60</td>
                <td class="center">413</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Presto</td>
                <td>Opera 7.0</td>
                <td>Win 95+ / OSX.1+</td>
                <td class="center">-</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Presto</td>
                <td>Opera 7.5</td>
                <td>Win 95+ / OSX.2+</td>
                <td class="center">-</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Presto</td>
                <td>Opera 8.0</td>
                <td>Win 95+ / OSX.2+</td>
                <td class="center">-</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Presto</td>
                <td>Opera 8.5</td>
                <td>Win 95+ / OSX.2+</td>
                <td class="center">-</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Presto</td>
                <td>Opera 9.0</td>
                <td>Win 95+ / OSX.3+</td>
                <td class="center">-</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Presto</td>
                <td>Opera 9.2</td>
                <td>Win 88+ / OSX.3+</td>
                <td class="center">-</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Presto</td>
                <td>Opera 9.5</td>
                <td>Win 88+ / OSX.3+</td>
                <td class="center">-</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Presto</td>
                <td>Opera for Wii</td>
                <td>Wii</td>
                <td class="center">-</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Presto</td>
                <td>Nokia N800</td>
                <td>N800</td>
                <td class="center">-</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>Presto</td>
                <td>Nintendo DS browser</td>
                <td>Nintendo DS</td>
                <td class="center">8.5</td>
                <td class="center">C/A<sup>1</sup></td>
            </tr>
            <tr class="gradeC">
                <td>KHTML</td>
                <td>Konqureror 3.1</td>
                <td>KDE 3.1</td>
                <td class="center">3.1</td>
                <td class="center">C</td>
            </tr>
            <tr class="gradeA">
                <td>KHTML</td>
                <td>Konqureror 3.3</td>
                <td>KDE 3.3</td>
                <td class="center">3.3</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeA">
                <td>KHTML</td>
                <td>Konqureror 3.5</td>
                <td>KDE 3.5</td>
                <td class="center">3.5</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeX">
                <td>Tasman</td>
                <td>Internet Explorer 4.5</td>
                <td>Mac OS 8-9</td>
                <td class="center">-</td>
                <td class="center">X</td>
            </tr>
            <tr class="gradeC">
                <td>Tasman</td>
                <td>Internet Explorer 5.1</td>
                <td>Mac OS 7.6-9</td>
                <td class="center">1</td>
                <td class="center">C</td>
            </tr>
            <tr class="gradeC">
                <td>Tasman</td>
                <td>Internet Explorer 5.2</td>
                <td>Mac OS 8-X</td>
                <td class="center">1</td>
                <td class="center">C</td>
            </tr>
            <tr class="gradeA">
                <td>Misc</td>
                <td>NetFront 3.1</td>
                <td>Embedded devices</td>
                <td class="center">-</td>
                <td class="center">C</td>
            </tr>
            <tr class="gradeA">
                <td>Misc</td>
                <td>NetFront 3.4</td>
                <td>Embedded devices</td>
                <td class="center">-</td>
                <td class="center">A</td>
            </tr>
            <tr class="gradeX">
                <td>Misc</td>
                <td>Dillo 0.8</td>
                <td>Embedded devices</td>
                <td class="center">-</td>
                <td class="center">X</td>
            </tr>
            <tr class="gradeX">
                <td>Misc</td>
                <td>Links</td>
                <td>Text only</td>
                <td class="center">-</td>
                <td class="center">X</td>
            </tr>
            <tr class="gradeX">
                <td>Misc</td>
                <td>Lynx</td>
                <td>Text only</td>
                <td class="center">-</td>
                <td class="center">X</td>
            </tr>
            <tr class="gradeC">
                <td>Misc</td>
                <td>IE Mobile</td>
                <td>Windows Mobile 6</td>
                <td class="center">-</td>
                <td class="center">C</td>
            </tr>
            <tr class="gradeC">
                <td>Misc</td>
                <td>PSP browser</td>
                <td>PSP</td>
                <td class="center">-</td>
                <td class="center">C</td>
            </tr>
            <tr class="gradeU">
                <td>Other browsers</td>
                <td>All others</td>
                <td>-</td>
                <td class="center">-</td>
                <td class="center">U</td>
            </tr>
        </tbody>
    </table>
</div>