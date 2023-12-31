var App = function() {
    var o = 991
      , e = ".header.navbar"
      , n = ".main-container"
      , s = function() {
        $(".menu-categories li > .collapse").not(":first").on("shown.bs.collapse", function(o) {
            o.preventDefault(),
            o.stopPropagation();
            var e = $(this).parent().offset().top
              , n = $(this).parent().children().closest("a").outerHeight();
            $("html, body").stop().animate({
                scrollTop: e - n
            }, 500, "swing", function() {})
        })
    }
      , t = function() {
        $(".menu-categories li > .collapse").on("shown.bs.collapse", function(o) {
            o.preventDefault(),
            o.stopPropagation();
            var e = $(this).parent().offset()
              , n = $("#sidebar").offset()
              , s = e.top - n.top;
            e.left,
            n.left;
            $("#sidebar").mCustomScrollbar("scrollTo", "-=" + s)
        })
    }
      , i = function() {
        $(".sidebarCollapse").on("click", function(o) {
            o.preventDefault(),
            $(n).toggleClass("sidebar-closed"),
            $(e).toggleClass("expand-header"),
            $(n).toggleClass("sbar-open"),
            $(".overlay").toggleClass("show"),
            $("html,body").toggleClass("sidebar-noneoverflow"),
            $("footer .footer-section-1").toggleClass("f-close")
        })
    }
      , r = function() {
        $(".toggle-control-sidebar").click(function(o) {
            o.preventDefault(),
            $(".control-sidebar").toggleClass("control-sidebar-open"),
            $(".cs-overlay").toggleClass("show"),
            $("html,body").toggleClass("cs-noneoverflow")
        })
    }
      , a = function() {
        $("#dismiss, .overlay, cs-overlay").on("click", function() {
            $(n).addClass("sidebar-closed"),
            $(n).removeClass("sbar-open"),
            $(".overlay").removeClass("show"),
            $("html,body").removeClass("sidebar-noneoverflow")
        })
    }
      , l = function() {
        $(".cs-overlay").on("click", function() {
            $(this).removeClass("show"),
            $("html,body").removeClass("cs-noneoverflow"),
            $(".control-sidebar").removeClass("control-sidebar-open")
        })
    }
      , c = function() {
        $("#sidebar").mCustomScrollbar("destroy")
    }
      , d = function() {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal",
            scrollInertia: 1e3
        })
    }
      , f = function() {
        $(".chb").change(function() {
            $(".chb").prop("checked", !1),
            $(this).prop("checked", !0)
        })
    }
      , u = function() {
        window.innerWidth <= o && (t(),
        d())
    }
      , h = function() {
        $(window).on("resize", function(e) {
            e.preventDefault(),
            window.innerWidth <= o && d()
        })
    }
      , p = function() {
        window.innerWidth > o && (c(),
        s())
    }
      , v = function() {
        $(window).on("resize", function(e) {
            e.preventDefault(),
            window.innerWidth > o && ($("footer .footer-section-1").removeClass("f-close"),
            c())
        })
    };
    function w() {
        function o() {
            window.innerWidth <= 991 ? ($("#container").addClass("sidebar-closed"),
            $(".overlay").removeClass("show")) : window.innerWidth > 991 && ($("#container").removeClass("sidebar-closed"),
            $(".navbar").removeClass("expand-header"),
            $(".overlay").removeClass("show"),
            $("#container").removeClass("sbar-open"))
        }
        o(),
        $(window).resize(function(e) {
            !function() {
                if (window.innerWidth <= 991) {
                    if ($(".main-container").hasClass("sbar-open"))
                        return;
                    o()
                } else
                    window.innerWidth > 991 && o()
            }()
        })
    }
    return {
        init: function() {
            f(),
            i(),
            r(),
            a(),
            l(),
            p(),
            v(),
            u(),
            h(),
            w()
        }
    }
}();
