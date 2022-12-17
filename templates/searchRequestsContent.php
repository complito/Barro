<div class="content text_center text_bg w_310">
    <form name="searchForm" action="scripts/searchRequests.php" method="POST">
        <h2>Поиск заявок</h2>
        <p>Телефон</p>
        <input type="text" name="telephone" class="enter w_264 font outline_none">
        <input type="submit" name="submitRequest" value="Найти" class="submit color_w out_none w_290">
    </form>
    <div id="submitResult" class="text_center"></div>
</div>
<div class="content w_960 text_center" id="submitResponse"></div>
<script src="js/ajaxRequest.js"></script>