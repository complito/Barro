<div class="content text_center text_bg w_310">
    <form action="scripts/authorization.php" method="POST">
        <h2>Авторизация</h2>
        <p>Логин</p>
        <input type="text" name="login" class="enter w_264 font outline_none">
        <p>Пароль</p>
        <input type="password" name="password" class="enter w_264 font outline_none">
        <input type="submit" name="authorization" value="Войти" class="submit color_w out_none w_290">
    </form>
    <div id="submitResult" class="text_center"></div>
</div>
<script src="js/ajaxRequest.js"></script>