/**
 * jquery.LavaLamp v1.3.5 - light up your menus with fluid, jQuery powered animations.
 * Requires jQuery v1.2.3 or better from http://jquery.com
 * Tested on jQuery 1.4.4, 1.3.2 and 1.2.6
 * http://nixbox.com/projects/jquery-lavalamp/
 * Source code Copyright (c) 2008, 2009, 2010 Jolyon Terwilliger, jolyon@nixbox.com
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 */

//console.log();
(function(a) {
    jQuery.fn.lavaLamp = function(c) {
        c = a.extend({
            target: "li",
            container: "",
            fx: "swing",
            speed: 500,
            click: function() {
                return true
            },
            startItem: "",
            includeMargins: false,
            autoReturn: true,
            returnDelay: 0,
            setOnClick: true,
            homeTop: 0,
            homeLeft: 0,
            homeWidth: 0,
            homeHeight: 0,
            returnHome: false,
            autoResize: false
        }, c || {});

        function b(d) {
            var e = parseInt(d);
            return (isNaN(e) ? 0 : e)
        }
        if (c.container == "") {
            c.container = c.target
        }
        if (c.autoResize) {
            a(window).resize(function() {
                a(c.target + ".on").trigger("mouseover")
            })
        }
        return this.each(function() {
            if (a(this).css("position") == "static") {
                a(this).css("position", "relative")
            }
            if (c.homeTop || c.homeLeft) {
                var l = a("<" + c.container + ' class="homeLava"></' + c.container + ">").css({
                    left: c.homeLeft,
                    top: c.homeTop,
                    width: c.homeWidth,
                    height: c.homeHeight,
                    position: "absolute",
                    display: "block"
                });
                a(this).prepend(l)
            }
            var r = location.pathname + location.search + location.hash,
                e, i, g = a(c.target + "[class!=noLava]", this),
                f, o = 0,
                n = 0,
                k = 0,
                p = 0,
                j = 0,
                d = 0;
            e = a(c.target + ".on", this);
            if (c.startItem != "") {
                e = g.eq(c.startItem)
            }
            if ((c.homeTop || c.homeLeft) && e.length < 1) {
                e = l
            }
            if (e.length < 1) {
                var m = 0,
                    q;
                g.each(function() {
                    var s = a("a:first", this).attr("href");
                    if (r.indexOf(s) > -1 && s.length > m) {
                        q = a(this);
                        m = s.length
                    }
                });
                if (m > 0) {
                    e = q
                }
            }
            if (e.length < 1) {
                e = g.eq(0)
            }
            e = a(e.eq(0).addClass("on"));
            g.bind("mouseover", function() {
                if (f) {
                    clearTimeout(f);
                    f = null
                }
                h(a(this))
            }).click(function(s) {
                if (c.setOnClick) {
                    e.removeClass("on");
                    e = a(this).addClass("on")
                }
                return c.click.apply(this, [s, this])
            });
            i = a("<" + c.container + ' class="backLava"><div class="leftLava"></div><div class="bottomLava"></div><div class="cornerLava"></div></' + c.container + ">").css({
                position: "absolute",
                display: "block",
                margin: 0,
                padding: 0
            }).prependTo(this);
            if (c.includeMargins) {
                k = b(e.css("marginTop")) + b(e.css("marginBottom"));
                p = b(e.css("marginLeft")) + b(e.css("marginRight"))
            }
            o = b(i.css("borderLeftWidth")) + b(i.css("borderRightWidth")) + b(i.css("paddingLeft")) + b(i.css("paddingRight")) - p;
            n = b(i.css("borderTopWidth")) + b(i.css("borderBottomWidth")) + b(i.css("paddingTop")) + b(i.css("paddingBottom")) - k;
            if (c.homeTop || c.homeLeft) {
                i.css({
                    left: c.homeLeft,
                    top: c.homeTop,
                    width: c.homeWidth,
                    height: c.homeHeight
                })
            } else {
                if (!c.includeMargins) {
                    j = (b(e.css("marginLeft")));
                    d = (b(e.css("marginTop")))
                }
                i.css({
                    left: e.position().left + j,
                    top: e.position().top + d,
                    width: e.outerWidth() - o,
                    height: e.outerHeight() - n
                })
            }
            a(this).bind("mouseleave", function() {
                var s = null;
                if (c.returnHome) {
                    s = l
                } else {
                    if (!c.autoReturn) {
                        return true
                    }
                }
                if (c.returnDelay) {
                    if (f) {
                        clearTimeout(f)
                    }
                    f = setTimeout(function() {
                        h(s)
                    }, c.returnDelay)
                } else {
                    h(s)
                }
                return true
            });

            function h(s) {
                if (!s) {
                    s = e
                }
                if (!c.includeMargins) {
                    j = (b(s.css("marginLeft")));
                    d = (b(s.css("marginTop")))
                }
                var t = {
                    left: s.position().left + j,
                    top: s.position().top + d,
                    width: s.outerWidth() - o,
                    height: s.outerHeight() - n
                };
                i.stop().animate(t, c.speed, c.fx)
            }
        })
    }
})(jQuery);