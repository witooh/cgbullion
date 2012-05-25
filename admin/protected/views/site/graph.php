<?php
    addJs(baseurl('js/charts/chart.js'));
    addJs(baseurl('js/charts/auto.js'));
    addJs(baseurl('js/charts/bar.js'));
    addJs(baseurl('js/charts/hBar.js'));
    addJs(baseurl('js/charts/pie.js'));
?>

<div class="title"><h5>Graphics and charts</h5></div>
        
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
        
<!-- Lines -->        
<div class="widget first">
    <div class="head"><h5 class="iGraph">Charts</h5></div>
    <div class="body">
        <div class="chart"></div>
    </div>
</div>

<!-- Lines with fill -->
<div class="widget">
    <div class="head"><h5 class="iGraph">Charts</h5></div>
    <div class="body">
        <div class="autoUpdate"></div>
    </div>
</div>

<!-- Bars -->
<div class="widget">
    <div class="head"><h5 class="iStats">Bars</h5></div>
    <div class="body">
        <div class="bars" id="vBar"></div>
    </div>
</div>

<div class="widgets">
    <div class="left">
        <div class="widget"><!-- Pie chart 1 -->
            <div class="head"><h5 class="iChart8">Pie charts</h5></div>
            <div class="body">
                <div id="hBar" class="pieWidget"></div>
            </div>
        </div>
    </div>
    
    <div class="right">
        <div class="widget"><!-- Pie chart 2 -->
            <div class="head"><h5 class="iChart8">Pie charts</h5></div>
            <div class="body">
                <div id="pie" class="pieWidget"></div>
            </div>
        </div>
    </div>
    <div class="fix"></div>
</div>