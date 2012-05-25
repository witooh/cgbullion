<div class="title"><h5>Interface elements</h5></div>

<!-- Statistics -->
<div class="stats">
    <ul>
        <li><a href="#" class="count grey" title="">52</a><span>new pending tasks</span></li>
        
        <li><a href="#" class="count blue" title="">520</a><span>pending orders</span></li>
        <li><a href="#" class="count green" title="">14</a><span>new opened tickets</span></li>
        <li class="last"><a href="#" class="count red" title="">48</a><span>new user registrations</span></li>
    </ul>
    <div class="fix"></div>
</div>

<!-- Form -->
<form action="" class="mainForm">

    <!-- Sliders -->
    <fieldset>
        <div class="widget first">    
            <div class="head"><h5 class="iSettings2">Sliders</h5></div>
            
            <div class="rowElem noborder">
                <label>Usual slider: </label>
                <div class="formRight">
                    <div class="uiSliderInc"></div>
                </div>
                <div class="fix"></div>
            </div>
            
            <div class="rowElem">
                <label>Slider with increments: </label>
                <div class="formRight">
                    <div class="sliderSpecs">
                        <label for="amount">$50 increments:</label><input type="text" id="amount" />
                        <div class="fix"></div>
                    </div>
                    <div class="uiSliderInc"></div>
                </div>
                <div class="fix"></div>
            </div>
            
            <div class="rowElem">
                <label>Range slider: </label>
                <div class="formRight">
                    <div class="sliderSpecs">
                        <label for="rangeAmount">Price range:</label><input type="text" id="rangeAmount" />
                        <div class="fix"></div>
                    </div>
                    <div class="uiRangeSlider"></div>
                </div>
                <div class="fix"></div>
            </div>
            
            <div class="rowElem">
                <label>With fixed minimum: </label>
                <div class="formRight">
                    <div class="sliderSpecs">
                        <label for="minRangeAmount">Minimum:</label><input type="text" id="minRangeAmount" />
                        <div class="fix"></div>
                    </div>
                    <div class="uiMinRange"></div>
                </div>
                <div class="fix"></div>
            </div>
            
            <div class="rowElem">
                <label>With fixed maximum: </label>
                <div class="formRight">
                    <div class="sliderSpecs">
                        <label for="maxRangeAmount">Maximum:</label><input type="text" id="maxRangeAmount" />
                        <div class="fix"></div>
                    </div>
                    <div class="uiMaxRange"></div>
                </div>
                <div class="fix"></div>
            </div>
                            
            <div class="rowElem">
                <label>Vertical multiple sliders: </label>
                <div class="formRight sliderSpecs">
                    <div id="eq">
                        <span>88</span>
                        <span>77</span>
                        <span>55</span>
                        <span>33</span>
                        <span>40</span>
                        <span>45</span>
                        <span>70</span>
                        <span>82</span>
                    </div>                    
                </div>
                <div class="fix"></div>
            </div>
            
            <div class="fix"></div>
        </div>
    </fieldset>
    
    <!-- Pickers -->
    <fieldset>
        <div class="widget">    
            <div class="head"><h5 class="iDropper">Pickers</h5></div>
            <div class="rowElem noborder">
                <label>Date picker:</label>
                <div class="formRight">
                    <input type="text" class="datepicker" />
                </div>
                <div class="fix"></div>
            </div>
            
            <div class="rowElem">
                <label>Time picker:</label>
                <div class="formRight">
                    <input type="text" class="timepicker" size="10"><span class="ml10">use your mousewheel and keyboard</span>
                </div>
                <div class="fix"></div>
            </div>
            
            <div class="rowElem">
                <label>Color picker:</label>
                <div class="formRight">
                    <input type="text" class="colorpick" id="colorpickerField" value="00ff00" />
                    <label for="colorpickerField" class="pick"></label>
                    <div class="fix"></div> 
                </div>
                <div class="fix"></div> 
            </div>
            
            <div class="rowElem">
                <label>Inline date picker:</label>
                <div class="formRight">
                    <div class="datepickerInline"></div>
                </div>
                <div class="fix"></div>
            </div>            
        </div>
    </fieldset>
    
    <!-- Ajax loaders -->
    <fieldset>
        <div class="widget aligncenter">    
            <div class="head"><h5 class="iRefresh">Ajax loaders</h5></div>
            <img src="images/loaders/loader.gif" alt="" class="p12" />
            <img src="images/loaders/loader2.gif" alt="" class="p12" />
            <img src="images/loaders/loader3.gif" alt="" class="p12" />
            <img src="images/loaders/loader4.gif" alt="" class="p12" />
            <img src="images/loaders/loader5.gif" alt="" class="p12" />
            <img src="images/loaders/loader6.gif" alt="" class="p12" />
            <img src="images/loaders/loader7.gif" alt="" class="p12" />
            <img src="images/loaders/loader8.gif" alt="" class="p12" />
            <img src="images/loaders/loader9.gif" alt="" class="p12" />
            <img src="images/loaders/loader10.gif" alt="" class="p12" />
        </div>
    </fieldset>
    
    <!-- Progress bars -->
    <fieldset>
        <div class="widget">    
            <div class="head"><h5 class="iLoading">Progress bars</h5></div>
            
            <div class="rowElem noborder">
                <label>Progress bar with timer and % counting:</label>
                <div class="formRight">
                    <div id="progress1">
                        <div class="percent"></div>
                        <div class="pbar"></div>
                        <div class="elapsed"></div>
                    </div>
                </div>
                <div class="fix"></div>
            </div>  
            
            <div class="rowElem">
                <label>Progress bar with delay on start:</label>
                <div class="formRight">
                    <div id="progress2">
                        <div class="percent"></div>
                        <div class="pbar"></div>
                        <div class="elapsed"></div>
                    </div>
                </div>
                <div class="fix"></div>
            </div>   
            
            <div class="rowElem">
                <label>Usual progress bar:</label>
                <div class="formRight">
                    <div id="progressbar"></div>
                </div>
                <div class="fix"></div>
            </div>
                     
        </div>
    </fieldset>
    
    <!-- Buttons -->
    <fieldset>
        <div class="widget">    
            <div class="head"><h5 class="iPin">Buttons</h5></div>
            
            <div class="rowElem noborder">
                <label>Submit button:</label>
                <div class="formRight">
                    <input type="submit" value="submit button" class="basicBtn" />
                    <input type="reset" value="reset button" class="basicBtn" />
                    <input type="button" value="usual button" class="basicBtn" />
                </div>
                <div class="fix"></div>
            </div>
            
            <div class="rowElem">
                <label>Button styles:</label>
                <div class="formRight">
                    <input type="button" value="button" class="basicBtn" />
                    <input type="button" value="button" class="blueBtn" />
                    <input type="button" value="button" class="redBtn" />
                    <input type="button" value="button" class="seaBtn" />
                    <input type="button" value="button" class="blackBtn" />
                    <input type="button" value="button" class="greyishBtn" />
                    <input type="button" value="button" class="greenBtn" />
                </div>
                <div class="fix"></div>
            </div>
            
        </div>
    </fieldset>
</form>

<!--Wizard with validation -->

<form action="" method="" id="wizForm" class="mainForm">
    <div class="widget">
        <div class="head"></div>
        <fieldset class="step" id="first">
            <h5>Wizard with validation - First</h5>
            <div class="rowElem noborder"><label>Required field:</label><div class="formRight"><input type="text" name="req"/></div><div class="fix"></div></div>
            <div class="rowElem"><label>Input password:</label><div class="formRight"><input type="password" /></div><div class="fix"></div></div>
            <div class="rowElem"><label>Autogrowing textarea:</label><div class="formRight"><textarea rows="8" cols="" class="auto" name="textarea"></textarea></div><div class="fix"></div></div>
        </fieldset>
        <fieldset class="step" id="second">
            <h5>Wizard with validation - Second</h5>
            <div class="rowElem noborder"><label>Email:</label><div class="formRight"><input type="text" name="email"/></div><div class="fix"></div></div>
            <div class="rowElem">
                <label>Select :</label>
                <div class="formRight">
                <select name="sel" >
                    <option value="">Usual select box</option>
                    <option value="opt2">Option 2</option>
                    <option value="opt3">Option 3</option>
                    <option value="opt4">Option 4</option>
                    <option value="opt5">Option 5</option>
                    <option value="opt6">Option 6</option>
                    <option value="opt7">Option 7</option>
                    <option value="opt8">Option 8</option>
                </select>
                </div>
                <div class="fix"></div>
            </div>
            <div class="rowElem">
                <label>Checkbox: </label>
                <div class="formRight">
                    <input type="checkbox" name="chb" id="chb" /><label for="chb">Checkbox checked</label>
                </div>
                <div class="fix"></div>
            </div>
        </fieldset>
        <div class="wizNav">                             
            <input class="basicBtn" id="back" value="Back" type="reset" />
            <input class="blueBtn" id="next" value="Next" type="submit" />
        </div>
    </div>
</form>

<!-- Growl notifications -->
<div class="widget">    
    <div class="head"><h5 class="iAlert">Growl notifications</h5></div>
    <div class="body aligncenter">
        <input type="button" value="Basic notification" class="basicBtn mr10 ml10" onclick="$.jGrowl('Hello world!');" />
        <input type="button" value="Sticky notification" class="basicBtn mr10 ml10" onclick="$.jGrowl('Stick this!', { sticky: true });"  />
        <input type="button" value="Message with header" class="basicBtn mr10 ml10" onclick="$.jGrowl('A message with a header', { header: 'Important' });" />
        <input type="button" value="Long live message" class="basicBtn mr10 ml10" onclick="$.jGrowl('A message that will live a little longer.', { life: 10000 });"  />
    </div>
</div>

<!-- Tabs -->
<div class="widget">       
    <ul class="tabs">
        <li><a href="#tab3">Tab active</a></li>
        <li><a href="#tab4">Tab inactive</a></li>
    </ul>
    
    <div class="tab_container">
        <div id="tab3" class="tab_content">Widget1</div>
        <div id="tab4" class="tab_content">Widget2</div>
    </div>    
    <div class="fix"></div>     
</div>

<!-- Breadcrumbs -->
<div class="pt20">
    <div class="breadCrumbHolder module">
        <div class="breadCrumb module">
            <ul>
                <li class="firstB"><a href="#">Home</a> </li>
                <li><a href="#">Breadcrumb sample</a></li>
                <li><a href="#">Second level</a></li>
                <li><a href="#">Third level</a></li>
                <li class="lastB">Current page</li>
            </ul>
        </div>
    </div>
    
    <div class="breadCrumbHolder module">
        <div id="breadCrumb" class="breadCrumb module">
            <ul>
                <li><a href="#">Home</a> </li>
                <li><a href="#">Breadcrumb sample</a></li>
                <li><a href="#">Second level</a></li>
                <li><a href="#">Third level</a></li>
                <li><a href="#">Fourth level</a></li>
                <li><a href="#">Fifth level</a></li>
                <li>Current page</li>
            </ul>
        </div>
    </div>
</div>

<!-- Modal alert boxes -->
<div class="widget">    
    <div class="head"><h5 class="iAlert">Modal alert boxes</h5></div>
    <div class="body aligncenter">
        <input type="button" value="Usual alert" class="basicBtn mr10 ml10 bAlert" />
        <input type="button" value="Confirmation dialog" class="basicBtn mr10 ml10 bConfirm" />
        <input type="button" value="Prompt dialog" class="basicBtn mr10 ml10 bPromt" />
        <input type="button" value="Dialog with HTML support" class="basicBtn mr10 ml10 bHtml" />
    </div>
</div>

<!-- jQuery UI dialogs -->
<div class="widget">    
    <div class="head"><h5 class="iAlert">jQuery UI dialogs</h5></div>
    <div class="body aligncenter">
    
        <div class="uDialog">
            <div id="dialog-message" title="Download complete">
                <p><img src="images/icons/color/tick.png" alt="" class="icon" />Your files have downloaded successfully into the My Downloads folder.</p>
                <p>Currently using <strong>36% of your storage space</strong></p>
                
                <div class="uiForm">
                    <form action=""  class="mainForm">
                        <input type="text" value="http://" name="inputtext"/>
                        <input type="radio" name="question1" checked="checked" /><label>Selected radio</label>
                        <input type="radio" name="question1" /><label>Normal state</label>
                    </form>
                </div>
            </div>
            <!-- Sample page content to illustrate the layering of the dialog -->
            <input type="button" value="Usual jQuery UI dialog" class="blueBtn" id="opener" />
        </div>

    </div>
</div>

<!-- Notification messages -->
<div class="pt20">
    <div class="nNote nWarning hideit">
        <p><strong>WARNING: </strong>This is a warning message. You can use this to warn users on any events</p>
    </div>
    <div class="nNote nInformation hideit">
        <p><strong>INFORMATION: </strong>This is a message for information, can be any general information.</p>
    </div>   
    <div class="nNote nSuccess hideit">
        <p><strong>SUCCESS: </strong>Success message! hoooraaay!!!!</p>
    </div>  
    <div class="nNote nFailure hideit">
        <p><strong>FAILURE: </strong>Oops sorry. That action is not valid, or our servers have gone bonkers</p>
    </div>
</div>

<!-- Pagination -->
<div class="pagination">
    <ul class="pages">
        <li class="prev"><a href="#">&lt;</a></li>
        <li><a href="#" class="active">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">6</a></li>
        <li><a href="#">7</a></li>
        <li><a href="#">8</a></li>
        <li>...</li>
        <li><a href="#">30</a></li>
        <li class="next"><a href="#">&gt;</a></li>
    </ul>
</div>

<!-- Tooltip directions -->
<div class="widget">    
    <div class="head"><h5 class="iFull2">Tooltip directions</h5></div>
    <div class="body aligncenter">
        <input type="button" value="left direction" class="basicBtn leftDir mr20 ml20" title="West tooltip direction" />
        <input type="button" value="top direction" class="basicBtn topDir mr20 ml20" title="North tooltip direction" />
        <input type="button" value="bottom direction" class="basicBtn botDir mr20 ml20" title="South tooltip direction" />
        <input type="button" value="right direction" class="basicBtn rightDir mr20 ml20" title="East tooltip direction" />
    </div>
</div>
<div class="fix"></div>