! function (e, o) {
  "object" == typeof exports && "undefined" != typeof module ? module.exports = o() : "function" == typeof define && define.amd ? define(o) : e.MicroModal = o()
}(this, function () {
  "use strict"
  var e = function (e, o) {
      if (!(e instanceof o)) throw new TypeError("Cannot call a class as a function")
    },
    o = function () {
      function e(e, o) {
        for (var t = 0; t < o.length; t++) {
          var i = o[t]
          i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
        }
      }
      return function (o, t, i) {
        return t && e(o.prototype, t), i && e(o, i), o
      }
    }(),
    t = function (e) {
      if (Array.isArray(e)) {
        for (var o = 0, t = Array(e.length); o < e.length; o++) t[o] = e[o]
        return t
      }
      return Array.from(e)
    }
  return function () {
    var i = ["a[href]", "area[href]", 'input:not([disabled]):not([type="hidden"]):not([aria-hidden])', "select:not([disabled]):not([aria-hidden])", "textarea:not([disabled]):not([aria-hidden])", "button:not([disabled]):not([aria-hidden])", "iframe", "object", "embed", "[contenteditable]", '[tabindex]:not([tabindex^="-"])'],
      n = function () {
        function n(o) {
          var i = o.targetModal,
            a = o.triggers,
            r = void 0 === a ? [] : a,
            s = o.onShow,
            l = void 0 === s ? function () {} : s,
            c = o.onClose,
            d = void 0 === c ? function () {} : c,
            u = o.openTrigger,
            f = void 0 === u ? "data-micromodal-trigger" : u,
            h = o.closeTrigger,
            v = void 0 === h ? "data-micromodal-close" : h,
            g = o.disableScroll,
            m = void 0 !== g && g,
            b = o.disableFocus,
            y = void 0 !== b && b,
            w = o.awaitCloseAnimation,
            k = void 0 !== w && w,
            p = o.debugMode,
            E = void 0 !== p && p
          e(this, n), this.modal = document.getElementById(i), this.config = {
            debugMode: E,
            disableScroll: m,
            openTrigger: f,
            closeTrigger: v,
            onShow: l,
            onClose: d,
            awaitCloseAnimation: k,
            disableFocus: y
          }, r.length > 0 && this.registerTriggers.apply(this, t(r)), this.onClick = this.onClick.bind(this), this.onKeydown = this.onKeydown.bind(this)
        }
        return o(n, [{
          key: "registerTriggers",
          value: function () {
            for (var e = this, o = arguments.length, t = Array(o), i = 0; i < o; i++) t[i] = arguments[i]
            t.forEach(function (o) {
              o.addEventListener("click", function () {
                return e.showModal()
              })
            })
          }
        }, {
          key: "showModal",
          value: function () {
            this.activeElement = document.activeElement, this.modal.setAttribute("aria-hidden", "false"), this.modal.classList.add("is-open"), this.setFocusToFirstNode(), this.scrollBehaviour("disable"), this.addEventListeners(), this.config.onShow(this.modal)
          }
        }, {
          key: "closeModal",
          value: function () {
            var e = this.modal
            this.modal.setAttribute("aria-hidden", "true"), this.removeEventListeners(), this.scrollBehaviour("enable"), this.activeElement.focus(), this.config.onClose(this.modal), this.config.awaitCloseAnimation ? this.modal.addEventListener("animationend", function o() {
              e.classList.remove("is-open"), e.removeEventListener("animationend", o, !1)
            }, !1) : e.classList.remove("is-open")
          }
        }, {
          key: "scrollBehaviour",
          value: function (e) {
            if (this.config.disableScroll) {
              var o = document.querySelector("body")
              switch (e) {
                case "enable":
                  Object.assign(o.style, {
                    overflow: "initial",
                    height: "initial"
                  })
                  break
                case "disable":
                  Object.assign(o.style, {
                    overflow: "hidden",
                    height: "100vh"
                  })
              }
            }
          }
        }, {
          key: "addEventListeners",
          value: function () {
            this.modal.addEventListener("touchstart", this.onClick), this.modal.addEventListener("click", this.onClick), document.addEventListener("keydown", this.onKeydown)
          }
        }, {
          key: "removeEventListeners",
          value: function () {
            this.modal.removeEventListener("touchstart", this.onClick), this.modal.removeEventListener("click", this.onClick), document.removeEventListener("keydown", this.onKeydown)
          }
        }, {
          key: "onClick",
          value: function (e) {
            e.target.hasAttribute(this.config.closeTrigger) && (this.closeModal(), e.preventDefault())
          }
        }, {
          key: "onKeydown",
          value: function (e) {
            27 === e.keyCode && this.closeModal(e), 9 === e.keyCode && this.maintainFocus(e)
          }
        }, {
          key: "getFocusableNodes",
          value: function () {
            var e = this.modal.querySelectorAll(i)
            return Object.keys(e).map(function (o) {
              return e[o]
            })
          }
        }, {
          key: "setFocusToFirstNode",
          value: function () {
            if (!this.config.disableFocus) {
              var e = this.getFocusableNodes()
              e.length && e[0].focus()
            }
          }
        }, {
          key: "maintainFocus",
          value: function (e) {
            var o = this.getFocusableNodes()
            if (this.modal.contains(document.activeElement)) {
              var t = o.indexOf(document.activeElement)
              e.shiftKey && 0 === t && (o[o.length - 1].focus(), e.preventDefault()), e.shiftKey || t !== o.length - 1 || (o[0].focus(), e.preventDefault())
            } else o[0].focus()
          }
        }]), n
      }(),
      a = null,
      r = function (e, o) {
        var t = []
        return e.forEach(function (e) {
          var i = e.attributes[o].value
          void 0 === t[i] && (t[i] = []), t[i].push(e)
        }), t
      },
      s = function (e) {
        if (!document.getElementById(e)) return console.warn("MicroModal v0.3.1: ❗Seems like you have missed %c'" + e + "'", "background-color: #f8f9fa;color: #50596c;font-weight: bold;", "ID somewhere in your code. Refer example below to resolve it."), console.warn("%cExample:", "background-color: #f8f9fa;color: #50596c;font-weight: bold;", '<div class="modal" id="' + e + '"></div>'), !1
      },
      l = function (e) {
        if (e.length <= 0) return console.warn("MicroModal v0.3.1: ❗Please specify at least one %c'micromodal-trigger'", "background-color: #f8f9fa;color: #50596c;font-weight: bold;", "data attribute."), console.warn("%cExample:", "background-color: #f8f9fa;color: #50596c;font-weight: bold;", '<a href="#" data-micromodal-trigger="my-modal"></a>'), !1
      },
      c = function (e, o) {
        if (l(e), !o) return !0
        for (var t in o) s(t)
        return !0
      }
    return {
      init: function (e) {
        var o = Object.assign({}, {
            openTrigger: "data-micromodal-trigger"
          }, e),
          i = [].concat(t(document.querySelectorAll("[" + o.openTrigger + "]"))),
          a = r(i, o.openTrigger)
        if (!0 !== o.debugMode || !1 !== c(i, a))
          for (var s in a) {
            var l = a[s]
            o.targetModal = s, o.triggers = [].concat(t(l)), new n(o)
          }
      },
      show: function (e, o) {
        var t = o || {}
        t.targetModal = e, !0 === t.debugMode && !1 === s(e) || (a = new n(t), a.showModal())
      },
      close: function () {
        a.closeModal()
      }
    }
  }()
})