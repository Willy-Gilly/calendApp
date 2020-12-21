
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


