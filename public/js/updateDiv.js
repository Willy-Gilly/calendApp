
function doGetReplace(url,divToUpdate ,params) {
    params = params || {};
    $.get(url, params, function(response) { // requesting url which in form
        //console.log(response);
        $(divToUpdate).html(response); // getting response and pushing to element with id #response
        return response;
    });
}

function doGetAdd(url,divToUpdate ,params) {
    params = params || {}
    $.get(url, params, function(response) { // requesting url which in form
        //console.log(response);
        $(divToUpdate).append(response) // getting response and pushing to element with id #response
        return response;
    });
}

function doGetChangeText(url,divToUpdate ,params) {
    params = params || {}
    $.get(url, params, function(response) { // requesting url which in form
        //console.log(response);
        $(divToUpdate).text(response) // getting response and pushing to element with id #response
        return response;
    });
}

function updateNotifBox()
{
    doGetReplace("/div/menu/getNumberNewNotif","#notificationNumberId");
    doGetReplace("/div/menu/getNumberNewMessage","#notificationNewMessageId");
    doGetReplace("/div/menu/getNumberNewFriendRequest", "#notificationFriendRequestId");
    doGetReplace("/div/menu/getNumberNewInvitation", "#notificationInvitationId");
    $.get('/div/menu/getNotifBoxLabel', {}, function(response) { // requesting url which in form
        //console.log(response);
        let labelNotifBox = $('#notificationNumberLabelId');
        labelNotifBox.text(response); // getting response and pushing to element with id #response
        if(response === '')
        {
            labelNotifBox.removeClass('badge badge-success');
        }
        else
        {
            labelNotifBox.addClass('badge badge-success');
        }
        return response;
    });
}

function toastNotif(idNotif, notificationType)
{
    let a = '';
    $.get('/div/menu/text/notificationType/'+notificationType, {async: false}, function (response) {
        a = response;
    });
    let b = '';
    $.get('/div/menu/text/notificationText/'+idNotif, {async: false}, function (response) {

        b = response;
    });
    setTimeout(() => {
        $(document).Toasts('create',
        {
            title: a,
            autohide: true,
            delay: 7500,
            body: b,
            class: 'bg-gradiant-purple',
        });}
        ,2000);
}

function getNewNotification(url,divToUpdate ,params) {
    params = params || {}
    $.get(url, params, function(response) { // requesting url which in form
        //console.log(response);
        //$(divToUpdate).append(response); // getting response and pushing to element with id #response
        if(!(response ===  ""))
        {
            let htmlObject = $(response);
            let idElement = htmlObject.attr('id');
            //console.log(idElement);
            let notificationType = htmlObject.attr('class').split("_")[1];
            //console.log(notificationType)
            let idElementSplit = idElement.split("_")[1];

            toastNotif(idElementSplit,notificationType);
        }
    });
}

function updateNotif()
{
    getNewNotification("/div/updateNotifs",'');//Works
    updateNotifBox();
}
