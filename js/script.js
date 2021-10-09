/*
    Функция проверяет поле на введенные символы и если их нет - оставляет кнопку disable.
    Иначе, переключает кнопку в enable.
*/

function checkParams() {
    var city = $('#city').val();
    if(city.length != 0) {
        $('#btn').removeAttr('disabled');
    } else {
        $('#btn').attr('disabled', 'disabled');
    }
}