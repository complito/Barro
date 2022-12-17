<div class="content text_center text_bg w_310">
    <form action="scripts/submitRequest.php" method="POST">
        <h2>Бронирование</h2>
        <p>ФИО</p>
        <input type="text" name="FIO" class="enter w_264 font outline_none">
        <p>Дата и время</p>
        <input type="text" name="dateAndTime" class="enter w_264 font outline_none">
        <p>Телефон</p>
        <input type="text" name="telephone" class="enter w_264 font outline_none">
        <p>Количество человек</p>
        <input type="text" name="peopleNumber" class="enter w_264 font outline_none">
        <input type="submit" name="submitRequest" value="Отправить заявку" class="submit color_w out_none" style="width: 290px;">
    </form>
    <div id="submitResponse" class="text_center"></div>
</div>
<script src="js/ajaxRequest.js"></script>