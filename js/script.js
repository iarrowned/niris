function checkParams() {
    var city = $('#city').val();
    if(city.length != 0) {
        $('#btn').removeAttr('disabled');
    } else {
        $('#btn').attr('disabled', 'disabled');
    }
}