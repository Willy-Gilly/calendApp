<script>
    //Use Ajax
    function doGet(url,divToUpdate ,params) {
        params = params || {};
        $.get(url, params, function(response) { // requesting url which in form
            console.log(response);
            $(divToUpdate).html(response); // getting response and pushing to element with id #response
        });
    }

    //execute in loop
    $.ready(
        $(function() {
            let f = function() {
                alert("Hey")
            };
            f();
            window.setInterval(f, 10000); // (function executed, milliseconds)
        })
    )
</script>

<script>
    //Update notifs
    $.ready(
        $(function() {
            doGetAdd("/div/getUnseenNotifs",'');//Works

            let f = function() {
                getNewNotification("/div/updateNotifs",'');//Works
            };
            f()
            window.setInterval(f, 5000); // (function executed, milliseconds)
        })
    );
</script>
