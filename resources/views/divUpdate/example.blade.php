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
            let f = function() {
                doGetAdd("/api/updateNotifs",'#test');
            };
            f()
            window.setInterval(f, 5000); // (function executed, milliseconds)
        })
    );
</script>

<!-- Notification ringbell -->
<li class="nav-item dropdown show">
    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="true">
        <i class="far fa-bell"></i>
        <span class="badge badge-warning navbar-badge">15</span>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right show" style="left: inherit; right: 0;">
        <span class="dropdown-item dropdown-header">15 Notifications</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
    </div>
</li>
<!-- Notification ringbell END -->
