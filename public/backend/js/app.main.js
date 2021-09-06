function scrollTop()
{
    $('html, body').animate({scrollTop:  0}, 700);
}

function errorAlertMessages(messages)
{
    var finalMessage = '<ul>';
    $.each(messages,function(i,k,v){
        finalMessage += '<li>'+($.isArray(k) ? k[0] : k)+'</li>';
    });
    finalMessage += '</ul>';

    return '<div class="alert alert-danger">'+finalMessage+'</div>'
}

function errorMessage(message)
{
    return '<div class="alert alert-danger">'+message+'</div>'
}



function getFormSerialize(formSelector)
{
    return formSelector.serialize();
}

function getFormData(formSelector)
{
    return new FormData(formSelector[0]);
}

function disableAndLoadingButton(selector,loadingText)
{
    selector.attr('disabled',true).html('<div class="fa fa-spinner fa-spin"></div> ' + loadingText);
}

function enableAndLoadingButton(selector,normalText)
{
    selector.attr('disabled', false).html(normalText);
}


function bootstrapNotify(message)
{
    let types = {'s':'success','i':'info','w':'warning','d':'danger'};
    let icons = {'s':'fa fa-check-circle','i':'fa fa-info-circle','w':'fa fa-warning','d':'fa fa-warning'};
    $.notify({
        icon: icons[message.type],
        message: message.text
    },{
        type: types[message.type],
        animate: {
            enter: 'animated fadeInDown',
            exit: 'animated fadeOutUp'
        },
        allow_dismiss: true,
        newest_on_top: true,
        placement: {
            from: "top",
            align: "left"
        },
        offset: 20,
        spacing: 10,
        z_index: 1031,
        delay: 5000,
        timer: 100,
    });
}


function notify(message,notifyMethod,selector=null)
{
    switch (notifyMethod) {
        case 'popover':
            bootstrapNotify(message);
            break;
        case 'html':
            selector.html(alertMessage(message.text,message.type));
            break;

    }
}


function alertMessage(message,type)
{
    let alertMessagesTypes = {'s':'success','i':'info','w':'warning','d':'danger','p':'primary'};

    return '<div class="alert alert-'+(alertMessagesTypes[type])+'">'+(message)+'</div>';
}


$('input').change(function(){
    let id = $(this).attr('id');
    if(id == 'mobile'){
        $('#invalid-feedback-mobile').show().find("strong").html('');
    }
    $(this).removeClass('is-invalid').next('.invalid-feedback').hide().find("strong").html('');
});


$('select').change(function(){
    let id = $(this).attr('id');
    $('#_'+id+'_').removeClass('is-invalid').next('.invalid-feedback').hide().find("strong").html('');
});


$('textarea').change(function(){
    let id = $(this).attr('id');
    $(this).removeClass('is-invalid').next('.invalid-feedback').hide().find("strong").html('');
});


function makeid(length) {
    var result           = '';
    var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
}
