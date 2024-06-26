/* ------------------------------------------------------------------------------
* Author: DMCWebZone
* Author URL: https://web-zone.org
* Code snippets Twenty Twenty theme
* Source: https://wordpress.org/themes/twentytwenty/
* @package Airin Blog
* Description: Pin top menu
* ------------------------------------------------------------------------------ */

"use strict";

var airinblog = airinblog || {};
function airinblogDomReadyMenu(e) {
    if ("function" == typeof e) return "interactive" === document.readyState || "complete" === document.readyState ? e() : void document.addEventListener("DOMContentLoaded", e, !1)
}
function airinblogToggleAttributeMenu(e, t, o, n) {
    void 0 === o && (o = !0),
    void 0 === n && (n = !1),
    e.getAttribute(t) !== o ? e.setAttribute(t, o) : e.setAttribute(t, n)
}
function airinblogFindParentsMenu(e, o) {
    var n = [];
    return function e(t) {
        t = t.parentNode;
        t instanceof HTMLElement && (t.matches(o) && n.push(t), e(t))
    } (e),
    n
}
airinblog.createEvent = function(e) {
    var t;
    return "function" == typeof window.Event ? t = new Event(e) : (t = document.createEvent("Event")).initEvent(e, !0, !1),
    t
},
airinblog.coverModalsMenu = {
    init: function() {
        document.querySelector(".airinblog-css-cover-modal") && (this.onToggleMenu(), this.closeOnEscapeMenu(), this.hideAndShowModalsMenu(), this.keepFocusInModalMenu())
    },
    onToggleMenu: function() {
        document.querySelectorAll(".airinblog-css-cover-modal").forEach(function(e) {
            e.addEventListener("toggledmenu", function(e) {
                var e = e.target,
                t = document.body;
                e.classList.contains("active") ? t.classList.add("showing-modal-menu") : (t.classList.remove("showing-modal-menu"), t.classList.add("hiding-modal-menu"), setTimeout(function() {
                    t.classList.remove("hiding-modal-menu")
                },
                500))
            })
        })
    },
    closeOnEscapeMenu: function() {
        document.addEventListener("keydown", function(e) {
            27 === e.keyCode && (e.preventDefault(), document.querySelectorAll(".airinblog-css-cover-modal.active").forEach(function(e) {
                this.untoggleModalMenu(e)
            }.bind(this)))
        }.bind(this))
    },
    hideAndShowModalsMenu: function() {
        var s = document,
        r = window,
        e = s.querySelectorAll(".airinblog-css-cover-modal"),
        i = s.documentElement.style,
        c = s.querySelector("#wpadminbar-off");
        function d(e) {
            var t, o = r.pageYOffset;
            return c ? (t = o + c.getBoundingClientRect().height, e ? -t : t) : 0 === o ? 0 : -o
        }
        function u() {
            return {
                "overflow-y": r.innerHeight > s.documentElement.getBoundingClientRect().height ? "hidden" : "scroll",
                position: "fixed",
                width: "100%",
                top: d(!0) + "px",
                left: 0
            }
        }
        e.forEach(function(a) {
            a.addEventListener("toggle-target-before-inactive", function(e) {
                var t = u(),
                o = r.pageYOffset,
                n = Math.abs(d()) - o + "px",
                l = r.matchMedia("(max-width: 600px)");
                e.target === a && (Object.keys(t).forEach(function(e) {
                    i.setProperty(e, t[e])
                }), r.airinblog.scrolled = parseInt(t.top, 10), c && (s.body.style.setProperty("padding-top", n), l.matches) && (o >= d() ? a.style.setProperty("top", 0) : a.style.setProperty("top", d() - o + "px")), a.classList.add("show-modal"))
            }),
            a.addEventListener("toggle-target-after-inactive", function(e) {
                e.target === a && setTimeout(function() {
                    var e = airinblog.togglesMenu.clickedEl;
                    a.classList.remove("show-modal"),
                    Object.keys(u()).forEach(function(e) {
                        i.removeProperty(e)
                    }),
                    c && (s.body.style.removeProperty("padding-top"), a.style.removeProperty("top")),
                    !1 !== e && (e.focus(), e = !1),
                    r.scrollTo(0, Math.abs(r.airinblog.scrolled + d())),
                    r.airinblog.scrolled = 0
                },
                500)
            })
        })
    },
    untoggleModalMenu: function(e) {
        var t, o = !1;
        e.dataset.modalTargetString && (t = e.dataset.modalTargetString, o = document.querySelector('*[data-toggle-target="' + t + '"]')),
        o ? o.click() : e.classList.remove("active")
    },
    keepFocusInModalMenu: function() {
        var i = document;
        i.addEventListener("keydown", function(e) {
            var t, o, n, l, a, s, r = airinblog.togglesMenu.clickedEl;
            r && i.body.classList.contains("showing-modal-menu") && (r = r.dataset.toggleTarget, a = "input, a, button", l = i.querySelector(r), t = l.querySelectorAll(a), t = Array.prototype.slice.call(t), ".menu-modal" === r && (o = (o = window.matchMedia("(min-width: 550px)").matches) ? "" : ".airinblog-css-mobile-top-jsmenu", (t = t.filter(function(e) {
                return null !== e.closest(o) && null !== e.offsetParent
            })).unshift(i.querySelector(".close-nav-toggle")), n = i.querySelector(".menu-bottom > nav")) && n.querySelectorAll(a).forEach(function(e) {
                t.push(e)
            }), ".airinblog-css-top-jsmenu-modal" === r && (o = (o = window.matchMedia("(min-width: 700px)").matches) ? "" : ".airinblog-css-mobile-top-jsmenu", (t = t.filter(function(e) {
                return null !== e.closest(o) && null !== e.offsetParent
            })).unshift(i.querySelector(".airinblog-css-close-top-jsmenu-nav-toggle")), n = i.querySelector(".menu-bottom > nav")) && n.querySelectorAll(a).forEach(function(e) {
                t.push(e)
            }), l = t[t.length - 1], r = t[0], n = i.activeElement, a = 9 === e.keyCode, !(s = e.shiftKey) && a && l === n && (e.preventDefault(), r.focus()), s) && a && r === n && (e.preventDefault(), l.focus())
        })
    }
},
airinblog.modalMenu = {
    init: function() {
        this.expandLevel()
    },
    expandLevel: function() {
        document.querySelectorAll(".modal-menu").forEach(function(e) {
            e = e.querySelector(".current-menu-item");
            e && airinblogFindParentsMenu(e, "li").forEach(function(e) {
                e = e.querySelector(".submenu-toggle");
                e && airinblog.togglesMenu.performToggle(e, !0)
            })
        })
    }
},
airinblog.togglesMenu = {
    clickedEl: !1,
    init: function() {
        this.toggle()
    },
    performToggle: function(e, o) {
        var n, l, a = this,
        s = document,
        r = e,
        i = r.dataset.toggleTarget,
        c = "active";
        s.querySelectorAll(".show-modal").length || (a.clickedEl = s.activeElement),
        (n = "next" === i ? r.nextSibling : s.querySelector(i)).classList.contains(c) ? n.dispatchEvent(airinblog.createEvent("toggle-target-before-active")) : n.dispatchEvent(airinblog.createEvent("toggle-target-before-inactive")),
        l = r.dataset.classToToggle || c,
        e = 0,
        n.classList.contains("airinblog-css-cover-modal") && (e = 10),
        setTimeout(function() {
            var e = n.classList.contains("sub-menu") ? r.closest(".menu-item").querySelector(".sub-menu") : n,
            t = r.dataset.toggleDuration;
            "slidetogglemenu" !== r.dataset.toggleType || o || "0" === t ? e.classList.toggle(l) : airinblogMenuToggleMenu(e, t),
            ("next" === i || n.classList.contains("sub-menu") ? r : s.querySelector('*[data-toggle-target="' + i + '"]')).classList.toggle(c),
            airinblogToggleAttributeMenu(r, "aria-expanded", "true", "false"),
            a.clickedEl && -1 !== r.getAttribute("class").indexOf("close-") && airinblogToggleAttributeMenu(a.clickedEl, "aria-expanded", "true", "false"),
            r.dataset.toggleBodyClass && s.body.classList.toggle(r.dataset.toggleBodyClass),
            r.dataset.setFocus && (e = s.querySelector(r.dataset.setFocus)) && (n.classList.contains(c) ? e.focus() : e.blur()),
            n.dispatchEvent(airinblog.createEvent("toggledmenu")),
            n.classList.contains(c) ? n.dispatchEvent(airinblog.createEvent("toggle-target-after-active")) : n.dispatchEvent(airinblog.createEvent("toggle-target-after-inactive"))
        },
        e)
    },
    toggle: function() {
        var o = this;
        document.querySelectorAll("*[data-toggle-target]").forEach(function(t) {
            t.addEventListener("click", function(e) {
                e.preventDefault(),
                o.performToggle(t)
            })
        })
    }
},
airinblogDomReadyMenu(function() {
    airinblog.togglesMenu.init(),
    airinblog.coverModalsMenu.init()
});
