//передача данных ajax
$('.form_ajx').submit(function(e){
    e.preventDefault();
    let th = $(this);
    let mess = $('.success');
    $.ajax({
        url: 'app/email.php',
        type: 'POST',
        data: th.serialize(),
        success: function(data) {
            if(data == 1){
                mess.html('<div class="success"> <span style="color: red">Ошибка, данные не переданы!</span></div>');
                setTimeout(() => mess.html(''), 5000); 
                return false;
            }else{
            mess.html('<div class="success"> <span style="color: green">Контакты успешно отправлены!</span></div>');
            $('.name').val('');
            $('.phone').val('');
            $('.email').val('');
            setTimeout(() => mess.html(''), 5000); 
            }        
        }
    });
});