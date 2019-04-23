$(document).ready(function() {
    $(".navbar-btn").click(function() {
    $(".group-ham").addClass("hidehambuger");
    $(".navbar-btn").addClass("exit-img");
    var nav = document.getElementById("full-nav")
    if(nav.style.display === 'block') {
        nav.style.display = 'none';
        $(".group-ham").removeClass("hidehambuger");
        $(".navbar-btn").removeClass("exit-img");
    } else if (nav.style.display =  'none') {
        nav.style.display = 'block';
    }
    })
})
