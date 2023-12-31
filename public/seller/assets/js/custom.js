$(".scrollTop").click(function() {
    $("html, body").animate({
        scrollTop: 0
    })
});
var hRe = $(".tasks").height()
  , aRe = $("aside.control-sidebar").height()
  , winHei = $(window).height();
function checkall(o, n) {
    var e = $("#" + o)
      , t = $("." + n);
    e.click(function() {
        t.prop("checked", $(this).prop("checked"))
    })
}
function collapse(o) {
    "panel" === o ? $(".js-collapse").on("click", function(o) {
        o.preventDefault(),
        $(this).parent().parent().parent().parent().find(".panel-collapse").slideToggle("slow")
    }) : "card" === o && console.log("currently in progress")
}
function reload(o) {
    "panel" === o ? $(".js-refresh").on("click", function() {
        var o = $(".panel-collapse");
        $(o).block({
            message: '<i class="flaticon-reload-line spin"></i>',
            timeout: 2e3,
            overlayCSS: {
                backgroundColor: "#000",
                opacity: .8,
                cursor: "wait"
            },
            css: {
                border: 0,
                color: "#fff",
                padding: 0,
                backgroundColor: "transparent"
            }
        })
    }) : "card" === o && $(".js-refresh").on("click", function() {
        var o = $(".reload-widget-area");
        $(o).block({
            message: '<i class="flaticon-reload-line spin"></i>',
            timeout: 2e3,
            overlayCSS: {
                backgroundColor: "#000",
                opacity: .8,
                cursor: "wait"
            },
            css: {
                border: 0,
                color: "#fff",
                padding: 0,
                backgroundColor: "transparent"
            }
        })
    })
}
function multiCheck(o) {
    o.on("change", ".chk-parent", function() {
        var o = $(this).closest("table").find("td:first-child .child-chk")
          , n = $(this).is(":checked");
        $(o).each(function() {
            n ? ($(this).prop("checked", !0),
            $(this).closest("tr").addClass("active")) : ($(this).prop("checked", !1),
            $(this).closest("tr").removeClass("active"))
        })
    }),
    o.on("change", "tbody tr .new-control", function() {
        $(this).parents("tr").toggleClass("active")
    })
}
function checkall(o, n) {
    var e = $("#" + o)
      , t = $("." + n);
    e.click(function() {
        t.prop("checked", $(this).prop("checked"))
    })
}
function cDropdown(o) {
    for (var n = document.getElementsByClassName("c-dropdown-content"), e = 0; e < n.length; e++)
        n[e].classList.remove("show");
    o.classList.toggle("show")
}
$(".control-sidebar").mCustomScrollbar({
    advanced: {
        updateOnContentResize: !0
    },
    theme: "minimal"
}),
$(".nav-item.notification-dropdown .notification-list").mCustomScrollbar({
    advanced: {
        updateOnContentResize: !0
    },
    theme: "minimal",
    dir: "rtl",
    setHeight: 290
}),
$(".navbar .dropdown.notification-dropdown > .dropdown-menu, .navbar .dropdown.message-dropdown > .dropdown-menu ").click(function(o) {
    o.stopPropagation()
}),
$(window).on("resize", function(o) {
    $(".control-sidebar .tab-content #feeds-tab").mCustomScrollbar("update")
}),
$(function() {
    $(".js-cancel").on("click", function(o) {
        $(this).parents("#cancel-row").fadeOut("slow", function(o) {})
    })
}),
$(".bs-tooltip").tooltip(),
$(".bs-popover").popover(),
$(".t-dot").tooltip({
    template: '<div class="tooltip status rounded-tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
});
for (var classname = document.getElementsByClassName("c-dropbtn"), i = 0; i < classname.length; i++)
    classname[i].addEventListener("click", function() {
        cDropdown(this.nextElementSibling)
    });
function GetIEVersion() {
    var o = window.navigator.userAgent
      , n = o.indexOf("MSIE");
    return n > 0 ? parseInt(o.substring(n + 5, o.indexOf(".", n))) : navigator.userAgent.match(/Trident\/7\./) ? 11 : 0
}
function hideDropdown(o, n, e) {
    var t = o
      , i = n
      , c = e;
    "" != t && "" != i && "" != c ? $(document).on("click touchend", function() {
        $(t).removeClass(c),
        $(i).removeClass(c)
    }) : console.error("Fn hideDropdown requires three parameters")
}
$(".c-dropdown-item").on("click", function(o) {
    o.preventDefault(),
    $(this).parent().removeClass("show")
}),
window.onclick = function(o) {
    if (!$(o.target).hasClass("c-dropbtn")) {
        var n, e = document.getElementsByClassName("c-dropdown-content");
        for (n = 0; n < e.length; n++) {
            var t = e[n];
            t.classList.contains("show") && t.classList.remove("show")
        }
    }
}
,
hideDropdown(".app-dropdown, .message-dropdown, .notification-dropdown", ".app-dropdown .dropdown-menu, .message-dropdown .dropdown-menu, .notification-dropdown .dropdown-menu", "show");
