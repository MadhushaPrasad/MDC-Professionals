var CircularProgressBar = function () {
    "use strict";

    function e(e, t, n) {
        return t in e ? Object.defineProperty(e, t, {
            value: n,
            enumerable: !0,
            configurable: !0,
            writable: !0
        }) : e[t] = n, e
    }

    function t(e, t) {
        var n = Object.keys(e);
        if (Object.getOwnPropertySymbols) {
            var r = Object.getOwnPropertySymbols(e);
            t && (r = r.filter((function (t) {
                return Object.getOwnPropertyDescriptor(e, t).enumerable
            }))), n.push.apply(n, r)
        }
        return n
    }

    function n(n) {
        for (var r = 1; r < arguments.length; r++) {
            var i = null != arguments[r] ? arguments[r] : {};
            r % 2 ? t(Object(i), !0).forEach((function (t) {
                e(n, t, i[t])
            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(n, Object.getOwnPropertyDescriptors(i)) : t(Object(i)).forEach((function (e) {
                Object.defineProperty(n, e, Object.getOwnPropertyDescriptor(i, e))
            }))
        }
        return n
    }

    var r = {
        colorCircle: !1,
        colorSlice: "#00a1ff",
        end: 264,
        fontColor: "#365b74",
        fontSize: "1.6rem",
        fontWeight: 400,
        lineargradient: !1,
        number: !0,
        opacity: 10,
        round: !1,
        size: 200,
        stroke: 10
    };
    return function t(i) {
        var o = this;
        !function (e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }(this, t), e(this, "initial", (function (e) {
            if ("IntersectionObserver" in window) {
                var t = new IntersectionObserver((function (e, t) {
                    e.map((function (e) {
                        e.isIntersecting && e.intersectionRatio > .75 && (o.createSvg(e.target), t.unobserve(e.target))
                    }))
                }), {root: null, rootMargin: "0px", threshold: 1});
                e.map((function (e) {
                    t.observe(e)
                }))
            } else e.map((function (e) {
                o.createSvg(e)
            }))
        })), e(this, "hex2rgb", (function (e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 10,
                n = "string" == typeof e ? parseInt(e.replace("#", ""), 16) : e;
            return "rgba(".concat(n >> 16, ", ").concat((65280 & n) >> 8, ", ").concat(255 & n, ", ").concat(t / 100, ")")
        })), e(this, "progressBar", (function (e, t, r) {
            var i = r.index, c = r.number, a = r.stroke, s = r.round, l = r.lineargradient, u = r.colorSlice,
                d = r.colorCircle, p = r.opacity, f = r.size;
            c && e.insertBefore(o.percentElement(r), e.firstElementChild);
            var g = document.querySelector(".".concat(o.pieName, "-circle-").concat(i)), h = {
                fill: "none",
                transform: "rotate(-90, 50, 50)",
                "stroke-width": a,
                "stroke-linecap": s ? "round" : ""
            };
            o.setAttr(g, h, !1), o.animationTo(n(n({}, r), {}, {element: g}), !0), g.setAttribute("stroke", l ? "url(#linear-".concat(i, ")") : u);
            var m = d ? "" : "border-radius:50%;box-shadow:inset 0px 0px ".concat(a, "px ").concat(a, "px ").concat(o.hex2rgb(u, p));
            t.setAttribute("style", "width:".concat(f, "px;height:").concat(f, "px;position:relative;").concat(m))
        })), e(this, "animationTo", (function (e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1], i = Math.round(e.percent),
                c = document.querySelector(".".concat(o.pieName, "-circle-").concat(e.index));
            if (c) {
                var a = JSON.parse(c.getAttribute("data-angel")), s = t ? e : n(n({}, r), e),
                    l = document.querySelector(".".concat(o.pieName, "-percent-").concat(e.index));
                if (!(i > 100 || i < 0 || a === i)) {
                    var u, d = t ? 0 : a, p = function e() {
                        a >= s.percent ? d-- : d++, u = requestAnimationFrame(e), c.setAttribute("stroke-dasharray", 2.64 * d + ", 20000"), l && s.number && (l.textContent = "".concat(d, "%")), d === i && (c.setAttribute("data-angel", d), cancelAnimationFrame(u))
                    };
                    requestAnimationFrame(p)
                }
            }
        })), e(this, "percentElement", (function (e) {
            var t = e.index, n = e.fontSize, r = e.fontWeight, i = e.fontColor,
                c = document.createElementNS(o.svg, "text"), a = {
                    class: "".concat(o.pieName, "-percent-").concat(t),
                    x: "50%",
                    y: "50%",
                    "font-size": n,
                    "font-weight": r,
                    fill: i,
                    "text-anchor": "middle",
                    "dominant-baseline": "central"
                };
            return o.setAttr(c, a, !1), c
        })), e(this, "createSvg", (function (e) {
            var t = JSON.parse(e.getAttribute("data-pie")), i = e.getAttribute("data-index"),
                c = n(n(n({}, r), t), {}, {index: i}), a = document.createElementNS(o.svg, "svg"),
                s = {width: c.size, height: c.size, viewBox: "0 0 100 100"};
            o.setAttr(a, s, !1), c.colorCircle && a.appendChild(o.circleSvg(c, "bottom")), c.lineargradient && a.appendChild(o.gradient(c)), a.appendChild(o.circleSvg(c, "top", !0)), e.appendChild(a), o.progressBar(a, e, c)
        })), e(this, "gradient", (function (e) {
            var t = e.index, n = e.lineargradient, r = document.createElementNS(o.svg, "defs"),
                i = document.createElementNS(o.svg, "linearGradient");
            i.id = "linear-".concat(t);
            var c = [].slice.call(n);
            r.appendChild(i);
            var a = 0;
            return c.map((function (e) {
                var t = document.createElementNS(o.svg, "stop"),
                    n = {offset: "".concat(a, "%"), "stop-color": "".concat(e)};
                o.setAttr(t, n, !1), i.appendChild(t), a += 100 / (c.length - 1)
            })), r
        })), e(this, "circleSvg", (function (e, t) {
            var r = e.index, i = e.colorCircle, c = e.stroke,
                a = arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
                s = document.createElementNS(o.svg, "circle"), l = {fill: "none", stroke: i, "stroke-width": c},
                u = "top" === t ? {class: "".concat(o.pieName, "-circle-").concat(r)} : l,
                d = n({cx: 50, cy: 50, r: 42, "shape-rendering": "geometricPrecision", "data-angle": a ? 0 : ""}, u);
            return o.setAttr(s, d, !1), s
        })), e(this, "setAttr", (function (e, t) {
            var n = arguments.length > 2 && void 0 !== arguments[2] && arguments[2];
            for (var r in t) n ? e.setAttributeNS(null, r, t[r]) : e.setAttribute(r, t[r])
        })), this.pieName = i, this.svg = "http://www.w3.org/2000/svg";
        var c = document.querySelectorAll(".".concat(i)), a = [].slice.call(c);
        a.map((function (e, t) {
            e.setAttribute("data-index", t + 1)
        })), this.initial(a)
    }
}();
