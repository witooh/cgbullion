<div class="loginLogo"><img src="images/loginLogo.png" alt="" /></div>
<div class="loginPanel">
    <div class="head"><h5 class="iUser">Login</h5></div>
    <form action="index.html" id="valid" class="mainForm">
        <fieldset>
            <div class="loginRow noborder">
                <label for="req1">Username:</label>
                <div class="loginInput"><input type="text" name="login" class="validate[required]" id="req1" /></div>
                <div class="fix"></div>
            </div>
            
            <div class="loginRow">
                <label for="req2">Password:</label>
                <div class="loginInput"><input type="password" name="password" class="validate[required]" id="req2" /></div>
                <div class="fix"></div>
            </div>
            
            <div class="loginRow">
                <div class="rememberMe"><input type="checkbox" id="check2" name="chbox" /><label for="check2">Remember me</label></div>
                <input type="submit" value="Log me in" class="greyishBtn submitForm" />
                <div class="fix"></div>
            </div>
        </fieldset>
    </form>
</div>