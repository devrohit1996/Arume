(function() {
  /^\/age_auth/.test($(location).attr("pathname")) && $(function() {
    return $(".identification-photo").on("change", function() {
      var n, i;
      return loading.start(), $(this), n = $(".identification-preview"), i = this.files[0], loadImage.parseMetaData(i, function(t) {
        var e;
        return e = {
          canvas: !0,
          crop: !0,
          maxWidth: 320
        }, t.exif && (e.orientation = t.exif.get("Orientation")), loadImage(i, function(t) {
          return n.empty().append(t)
        }, e)
      }), $(".is-initial").hide(), $("body").scrollTop(0), $(".is-edited").show(), loading.dismiss()
    }), $("#identification_form_agree").on("click", function(t) {
      return $(t.currentTarget).is(":checked") ? $(":submit").prop("disabled", !1).removeClass("is-disabled") : $(":submit").prop("disabled", !0).addClass("is-disabled")
    })
  })
}).call(this),
  function() {
    $(function() {
      return $(".remove-balloon").on("click", function() {
        return $(this).closest(".balloon").css("display", "none")
      })
    })
  }.call(this),
  function() {
    var n;
    $(function() {
      var t, e;
      return e = $(".header_banner"), n(e), t = $(".footer_banner"), n(t), $(window).on("load", function() {
        return e.css("height", "auto"), t.css("height", "auto")
      })
    }), n = function(t) {
      var e, n;
      if (null != (n = t.find("img").data())) return e = n.img_height * (t.width() / n.img_width), t.css("height", e + "px")
    }
  }.call(this),
  function() {
    /^\/campaigns\/[0-9]+/.test($(location).attr("pathname")) && $(function() {
      var t, e, n, i, o, r;
      return $("#reverse_show_tutorial0").on("dialog:close", function() {
        return dialog.open($("#reverse_show_tutorial1"))
      }), i = new $.Event("scrollstop"), t = 200, r = 0, o = function() {
        return r && clearTimeout(r), r = setTimeout(function() {
          return $(window).trigger(i)
        }, t)
      }, $(window).on("scroll", o), $(window).on("touchmove", o), n = 150, e = !0, $(".like-message-lp_banner").addClass("is-visible"), $(window).on("scroll", function() {
        var t;
        return $(".btn-reverse-type.is-square").removeClass("is-visible"), t = document.documentElement.scrollTop || document.body.scrollTop, !e && t <= n ? (e = !0, $(".like-message-lp_banner").addClass("is-visible")) : e && n < t ? (e = !1, $(".like-message-lp_banner").removeClass("is-visible")) : void 0
      }), $(window).on("scrollstop", function() {
        return $(".btn-reverse-type.is-square").addClass("is-visible")
      })
    })
  }.call(this),
  function() {
    "/campaign_tutorials" === location.pathname && $(function() {
      var t, e;
      return t = function() {
        var t, e, n, i, o;
        return t = {
          w: 375,
          h: 667
        }, o = (e = $(window)).width() / t.w, i = e.height() / t.h, n = Math.min(o, i), $(".campaign-tutorial-container").css({
          width: t.w * n
        })
      }, new LazyEventListener(window, "resize", t), t(), e = $(".campaign-tutorial_walk-through").slick({
        infinite: !1,
        arrows: !1,
        dots: !0,
        dotsClass: "slick-dots campaign-tutorial_slide-dots",
        slidesToShow: 1
      }), $("[data-js=next_slide]").on("click", function() {
        return e.slick("slickNext")
      })
    })
  }.call(this),
  function() {
    "/campaigns/lp_ifeelpretty" === location.pathname && ($(function() {
      return $("[data-js-agree=1]").on("change", function(t) {
        var e;
        return (e = $(t.target)).attr("name"), e.prop("checked") ? $("[data-js-agree=" + e.attr("name") + "]").addClass("is-active").removeClass("is-disabled") : $("[data-js-agree=" + e.attr("name") + "]").addClass("is-disabled").removeClass("is-active")
      }).trigger("change"), $("a[data-js-agree]").on("click", function(t) {
        if (!$(t.target).hasClass("is-active")) return t.preventDefault()
      }), $("body").on("ajax:success", ".group-participate", function(t, e) {
        return dialog.close(), $(t.target).siblings("form").children(".group_status").addClass("with-animation"), !0 === e.body ? ($(".remove_card_" + e.card_id).addClass("is-active"), $(".join_card_" + e.card_id).removeClass("is-active"), $(".join_card_" + e.card_id + " > button").prop("disabled", !1)) : ($(".join_card_" + e.card_id).addClass("is-active"), $(".remove_card_" + e.card_id).removeClass("is-active"), $(".remove_card_" + e.card_id + " > button").prop("disabled", !1))
      })
    }), $(window).on("load", function() {
      return $("[data-js-agree=1]").trigger("change")
    }))
  }.call(this),
  function() {
    "/campaigns/lp_love_doc" === location.pathname && ($(function() {
      return $("[data-js-agree=1]").on("change", function(t) {
        var e;
        return (e = $(t.target)).attr("name"), e.prop("checked") ? $("[data-js-agree=" + e.attr("name") + "]").addClass("lovedoc-lp_start-button is-active").removeClass("is-disabled") : $("[data-js-agree=" + e.attr("name") + "]").addClass("is-disabled").removeClass("lovedoc-lp_start-button is-active")
      }).trigger("change"), $("a[data-js-agree]").on("click", function(t) {
        if (!$(t.target).hasClass("is-active")) return t.preventDefault()
      })
    }), $(window).on("load", function() {
      return $("[data-js-agree=1]").trigger("change")
    }))
  }.call(this),
  function() {
    $(function() {
      return $(".report-button").click(function() {
        var i, o;
        return i = $(this).data(), o = i.targetId, $.ajax({
          type: "get",
          url: "/users/" + o + "/reports/check",
          data: {
            user_id: o
          },
          success: function(t) {
            var e, n;
            return "limit_over" === t.result.result_type ? (e = $("#report-limit-over"), dialog.open(e)) : (n = "/users/" + o + "/reports/new", i.reportReason && (n += "?report_form[reason]=" + i.reportReason), location.href = n)
          }
        }), !1
      })
    })
  }.call(this),
  function() {
    $(function() {
      return $(document).on("ajax:complete", ".js-close-message-read-receipt-appeal", function() {
        return $(".message-read-receipt-appeal").remove()
      })
    })
  }.call(this),
  function() {
    $(function() {
      return window.ActionSheet = function() {
        function t(t) {
          var n;
          this.deferred = new $.Deferred, this.elem = $("<div/>").addClass("action-sheet"), t.forEach((n = this, function(t, e) {
            return n.addItem(t, e)
          }))
        }
        return t.prototype.open = function() {
          return this.overlay = $("<div/>").addClass("action-sheet-overlay").appendTo("body"), this.elem.appendTo("body").addClass("is-active"), this.deferred.promise()
        }, t.prototype.close = function() {
          return this.overlay.remove(), this.elem.removeClass("is-active").remove()
        }, t.prototype.addItem = function(t, e) {
          var n, i;
          return (n = $("<div/>").addClass("action-sheet_item button flat-button button-primary").text(t).attr("data-button-index", e)).click((i = this, function() {
            return i.select(n)
          })), n.appendTo(this.elem)
        }, t.prototype.select = function(t) {
          var e;
          return e = t.data("buttonIndex"), this.close(), this.deferred.resolve(e)
        }, t
      }()
    })
  }.call(this),
  function() {
    window.animateOnce = function(t, e) {
      return $(t).one("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd", function() {
        return $(this).removeClass(e)
      }).addClass(e)
    }
  }.call(this),
  function() {
    $(function() {
      if (0 !== $(".append-anchor").length) return $(window).on("pageshow", function() {
        return setTimeout(function() {
          return location.hash && 0 < location.hash.length && -1 === location.hash.indexOf("=") ? $("html,body").scrollTop($(location.hash).offset().top - 70) : $("html,body").scrollTop(0)
        }, 200)
      }), $(document).on("click", ".append-anchor", function(t) {
        var e, n;
        if (null != (n = ("A" === t.target.tagName ? $(t.target) : $(t.target).parents("a[id]")).attr("id"))) return e = "#" + n, history.replaceState(e, document.title, e)
      })
    })
  }.call(this),
  function() {
    $(function() {
      if (window.activateAutopager = function() {
          var n, i;
          return $(".autopager_paging-marker").show(), $(".paging").hide(), n = function() {
            var t, e;
            return null != (e = $(".paging_next:last a").attr("href")) && (t = e.replace(/.*page=(.+)/, "$1")), t
          }, i = function() {
            var o;
            return o = [], $(".user-area").each(function(t, e) {
              var n, i;
              if (i = (n = $(e)).data("user-id")) return 0 <= o.indexOf(i) ? n.remove() : o.push(i)
            })
          }, setTimeout(function() {
            var e;
            return e = n(), $(".autopager").jscroll({
              loadingHtml: '<div class="autopager_loading"></div>',
              contentSelector: ".autopager",
              nextSelector: ".paging_next:last a",
              pagingSelector: ".paging",
              callback: function() {
                var t;
                if (t = e, history.replaceState(t, document.title, "?page=" + t), $(".jscroll-added .autopager .grid .user-card-small").unwrap().unwrap().unwrap().appendTo(".grid"), i(), !(e = n())) return $(".paging").hide()
              }
            })
          }, 300)
        }, 0 < $(".autopager").length) return activateAutopager()
    })
  }.call(this),
  function() {
    $(function() {
      return (window.refreshBadges = function() {
        return $("[data-badge]").each(function(t, e) {
          var n, i, o;
          if (0 !== (o = (n = $(e)).data("badge"))) return (i = $('<span class="badge" />')).text(o), n.append(i)
        })
      })()
    })
  }.call(this),
  function() {
    $(function() {
      return $("button:not([class*=is-disabled])").on("touchstart", function(t) {
        return $(t.target).addClass("is-touching")
      }), $("button:not([class*=is-disabled])").on("touchend", function() {
        return setTimeout(function() {
          return $(".is-touching").each(function(t, e) {
            return $(e).removeClass("is-touching")
          })
        }, 100)
      })
    })
  }.call(this),
  function() {
    $(function() {
      var t;
      return t = function() {
        var t, e, n, i, o, r;
        if (0 !== (t = $(".belongs-prefecture")).length && (t.val("").children("option[value!='']").remove(), t.trigger("change"), "" !== (o = $(".has-cities").val()))) {
          for (e in t.append($("<option>").val(0).text("\u672a\u8a2d\u5b9a")), i = [], n = $.parseJSON($("#cities").val())[o]) r = n[e], i.push(t.append($("<option>").val(e).text(r)));
          return i
        }
      }, $(".has-cities").on("change", t), t()
    })
  }.call(this),
  function() {
    this.createRemainingTime = function(t) {
      var e, n, i, o, r, a;
      return a = {}, 0 < (e = (o = new Date(1e3 * t)).getUTCDate() - 1) && (a.day = e), n = o.getUTCHours(), (0 < e || 0 < n) && (a.hour = n), i = o.getUTCMinutes(), (0 < e || 0 < n || 0 < i) && (a.minute = i), r = o.getUTCSeconds(), a.second = r, a.time = o.getTime(), a
    }, this.createRemainingTimeLongText = function(t) {
      var e, n;
      return n = "", 0 < (e = createRemainingTime(t)).day && (n += e.day + "\u65e5"), 0 < e.hour && (n += e.hour + "\u6642\u9593"), 0 < e.minute && (n += e.minute + "\u5206"), n += e.second + "\u79d2"
    }, this.createRemainingTimeShortText = function(t) {
      var e, n;
      return (e = "00" === (e = ("0" + (n = new Date(1e3 * t)).getUTCHours()).slice(-2)) ? "" : e + ":") + ("0" + n.getUTCMinutes()).slice(-2) + (":" + ("0" + n.getUTCSeconds()).slice(-2))
    }, this.setRemainingTimeText = function(t, e) {
      var n, i, o, r, a;
      for (a = [], o = i = 0, r = t.length; i < r; o = ++i) n = t[o], a.push($(n).text(e[o]));
      return a
    }
  }.call(this),
  function() {
    window.countText = function(t) {
      return t.replace(/\n|\r\n/g, "nr").length_unicode
    }
  }.call(this),
  function() {
    $(function() {
      var t;
      return $(document).on("click", ".open-dialog", function(t) {
        var e, n, i;
        return t.preventDefault(), t.stopPropagation(), i = window.innerHeight, $(".dialog_scroll-body").css("max-height", .65 * i), n = $(this).data("dialog-id"), e = $("#" + n), dialog.open(e)
      }), $(document).on("click", ".close-dialog", function(t) {
        return t.preventDefault(), t.stopPropagation(), dialog.close()
      }), $(document).on("click touchmove", ".dialog-overlay", function(t) {
        if (t.preventDefault(), !$(".dialog.is-active").hasClass("is-modal")) return dialog.close()
      }), $(document).on("click touchstart", ".dialog", function(t) {
        return t.stopPropagation()
      }), $(document).on("click touchstart", ".dialog :submit", function(t) {
        var e;
        if (t.stopPropagation(), hasDoubleTouchBug()) return e = function() {
          return !1
        }, $(document).on("click touchstart", e), setTimeout(function() {
          return $(document).off("click touchstart", e)
        }, 1e3)
      }), $(document).on("touchmove", ".dialog", function() {
        return !1
      }), t = ".dialog [data-scrollable]", $(document).on("touchstart touchmove touchend", t, function(t) {
        return t.stopPropagation()
      }).on("touchstart", t, function(t) {
        return $(this).data("lastY", t.originalEvent.touches[0].screenY)
      }).on("touchmove", t, function(t) {
        return t.originalEvent.touches[0].screenY < $(this).data("lastY") ? this.scrollTop + $(this).outerHeight() < this.scrollHeight : 0 !== this.scrollTop
      }), window.dialog = {
        initialPosition: 0,
        open: function(t, e) {
          var i, n, o, r;
          if (t.hasClass("dialog")) return e = e || {}, this.close(), this.initialPosition = $("body").scrollTop(), t.trigger("dialog:beforeOpen"), i = function() {
            var t, e;
            return t = Math.max($(window).height(), $(document).height()), e = $(window).width(), $(".dialog-overlay").css({
              height: t,
              width: e
            })
          }, n = function(t) {
            var e, n;
            return n = (window.innerHeight - t.outerHeight(!1)) / 2, e = ($(window).width() - t.outerWidth(!0)) / 2, t.offset({
              top: $(window).scrollTop() + n,
              left: e
            }), i()
          }, o = $('<div class="dialog-overlay"/>'), e.overlayStyleClass && o.addClass(e.overlayStyleClass), o.appendTo("body"), 0 < t.parents(".rest-mode_contents").length && t.appendTo("body"), "complete" === document.readyState ? (t.addClass("is-active"), n(t), t.addClass("is-animating")) : ($(window).on("loading:ready", function() {
            return loading.start()
          }), $(window).on("load", function() {
            return "undefined" != typeof loading && null !== loading && loading.dismiss(), t.addClass("is-active"), n(t), t.addClass("is-animating")
          })), t.find(":input").on("blur", (r = this, function() {
            return $("body").animate({
              scrollTop: r.initialPosition
            }, "fast")
          })), setTimeout(function() {
            if (0 < t.find(".slick-initialized").length) return n(t)
          }, 1e3), t.trigger("dialog:open"), $("body").css({
            overflow: "hidden",
            height: Math.max($(window).height(), $(document).height())
          })
        },
        close: function() {
          var t;
          return $(".dialog :focus").blur(), (t = $(".dialog.is-active")).trigger("dialog:beforeClose"), t.removeClass("is-active is-animating"), $(".dialog-overlay").remove(), $("body").css({
            overflow: "visible"
          }), t.trigger("dialog:close")
        }
      }, setTimeout(function() {
        return dialog.open($(".dialog.auto-appear:first"))
      }, 500)
    })
  }.call(this),
  function() {
    $(function() {
      return $(document).on("submit", "form", function(t) {
        return $(t.target).find(":submit, :button, :image").attr("disabled", "disabled")
      }), $(window).on("pageshow", function() {
        return $(":submit, :button, :image").not(".is-disabled").removeAttr("disabled")
      })
    })
  }.call(this),
  function() {
    var u, d;
    d = "input,textarea,select", u = ["utf8", "authenticity_token"], $(function() {
      var t, o, e, n, a, i, r, s, c, l;
      for (t = function() {
          var t, e, n, i;
          if (i = JSON.parse(localStorage.getItem(a))) {
            for (t in e = [], i) n = i[t], e.push(o.find("[name='" + t + "']").val(n));
            return e
          }
        }, e = 0, i = (s = $('form[data-js="draft"]')).length; e < i; e++) o = s[e], o = $(o), a = o.attr("id"), $(o).submit(function(t) {
        var e, n, i, o, r;
        for (r = {}, n = 0, i = (o = $(t.target).find(d)).length; n < i; n++) e = o[n], 0 <= u.indexOf(e.name) || (r[e.name] = e.value);
        return localStorage.setItem(a, JSON.stringify(r))
      }), t();
      for (l = [], n = 0, r = (c = $('form[data-js="done"]')).length; n < r; n++) o = c[n], o = $(o), a = o.attr("id"), l.push($(o).submit(function() {
        return localStorage.removeItem(a)
      }));
      return l
    })
  }.call(this),
  function() {
    $(function() {
      return FastClick.attach(document.body)
    })
  }.call(this),
  function() {
    var e = function(t, e) {
      return function() {
        return t.apply(e, arguments)
      }
    };
    $(function() {
      return $(document).on("facebookLoad", function() {
        var i;
        return window.FbPhoto = i = function() {
          function t(t) {
            this.image = t.images.shift().source, this.thumbnail = t.images.pop().source
          }
          return t
        }(), window.FbPhotoClient = function() {
          function t() {
            this.hasPrev = e(this.hasPrev, this), this.hasNext = e(this.hasNext, this), this.nextUrl = null, this.prevUrl = null, this.params = {
              fields: "name,id,photos{id,name,source,picture}"
            }
          }
          return t.prototype.hasNext = function() {
            var t;
            return 0 < (null != (t = this.nextUrl) ? t.length : void 0)
          }, t.prototype.hasPrev = function() {
            var t;
            return 0 < (null != (t = this.prevUrl) ? t.length : void 0)
          }, t.prototype.createPhotos = function(t) {
            var e;
            e = [], this.nextUrl = null, this.prevUrl = null;
            try {
              this.nextUrl = t.paging.next, this.prevUrl = t.paging.prev, t.data.forEach(function(t) {
                return e.push(new i(t))
              })
            } catch (n) {
              n
            }
            return e
          }, t.prototype.fetch = function() {
            var e, n;
            return e = new $.Deferred, FB.api("/me/albums", this.params, (n = this, function(t) {
              return t.data.forEach(function(t) {
                if ("Profile Pictures" === t.name) return e.resolve(n.createPhotos(t.photos))
              }), e.reject("error")
            })), e.promise()
          }, t.prototype.fetchNext = function() {
            var e, n;
            return e = new $.Deferred, FB.api(this.nextUrl, (n = this, function(t) {
              return e.resolve(n.createPhotos(t))
            })), e.promise()
          }, t.prototype.fetchPrev = function() {
            var e, n;
            return e = new $.Deferred, FB.api(this.prevUrl, (n = this, function(t) {
              return e.resolve(n.createPhotos(t))
            })), e.promise()
          }, t
        }()
      })
    })
  }.call(this),
  function() {
    $(function() {
      var s;
      return $("form").on("keypress", function(t) {
        if ("search" !== $(t.target).attr("type") && "TEXTAREA" !== t.target.tagName) return 13 === t.which ? (t.preventDefault(), $(t.target).blur()) : void 0
      }), $(".form-delete-text-button").click(function(t) {
        return $(t.target).parent().find("input").val(null).change()
      }), $(".form-delete-text-button").siblings('input[type="text"], input[type="search"], input[type="email"]').change(function(t) {
        var e, n;
        return n = (e = $(t.target)).parent().find(".form-delete-text-button"), 0 === e.val().length ? n.hide() : n.show(), !0
      }), $('input[type="text"], input[type="search"], input[type="email"]').change(), $(document).on("change", '[data-js="submit"]', function(t) {
        return $(t.target).parents("form").submit()
      }), s = 500, $('[data-js="submit"]').parents("form").on("ajax:beforeSend", function(t, e, n) {
        var r, a;
        return r = new Date, a = n.success, n.success = function(t, e, n) {
          var i, o;
          return i = new Date, s < (o = i - r) ? a(t, e, n) : setTimeout(function() {
            return a(t, e, n)
          }, s - o)
        }
      })
    })
  }.call(this),
  function() {
    $(function() {
      var n, t;
      return n = function(t) {
        return t.preventDefault()
      }, t = ".fullscreen_modal [data-scrollable]", $(document).on("touchstart touchmove touchend", t, function(t) {
        return t.stopPropagation()
      }).on("touchstart", t, function(t) {
        return $(this).data("lastX", t.originalEvent.touches[0].screenX)
      }).on("touchmove", t, function(t) {
        if ($(this).data("lastX")) return this.scrollLeft += ($(this).data("lastX") - t.originalEvent.touches[0].screenX) / 10
      }), window.fullscreenModal = {
        show: function(t) {
          var e;
          return document.addEventListener("touchmove", n, {
            passive: !1
          }), $("body").css({
            overflow: "hidden",
            height: Math.max($(window).height(), $(document).height())
          }), e = $(t), this.fullscreen(e), e.show()
        },
        remove: function(t) {
          return this.scrollable(), $(t).remove()
        },
        removeAll: function() {
          return this.remove(".fullscreen_modal")
        },
        hide: function() {
          return this.scrollable(), $(".fullscreen_modal").hide()
        },
        fullscreen: function(t) {
          var e;
          if ((e = $(t)).offset({
              top: $(window).scrollTop()
            }), isChrome()) return e.height(window.innerHeight)
        },
        scrollable: function() {
          return document.removeEventListener("touchmove", n), $("body").css({
            overflow: "visible"
          })
        }
      }
    })
  }.call(this),
  function() {
    this.keyupToggleSubmitButton = function(t, e) {
      var n, i, o, r, a;
      return n = (i = $(t)).parents("form"), r = n.find('[type="submit"]'), a = function(t) {
        return t ? r.removeClass("is-disabled").removeAttr("disabled") : r.addClass("is-disabled").attr("disabled", "disabled")
      }, (o = function() {
        var t;
        return t = e(), setTimeout(function() {
          return a(t)
        }, 100)
      })(), i.keyup(o)
    }
  }.call(this), Object.defineProperty(String.prototype, "length_unicode", {
    get: function() {
      return this.length - (this.match(/[\uD800-\uDBFF][\uDC00-\uDFFF]/g) || []).length
    }
  }),
  function() {
    $(function() {
      return $('[data-js="go-back"]').click(function(t) {
        return t.preventDefault(), history.back()
      }), $("[data-url]").click(function(t) {
        return t.preventDefault(), location.href = $(t.target).attr("data-url")
      })
    })
  }.call(this),
  function() {
    $(function() {
      return $("a:not([class*=is-disabled])").on("touchstart", function(t) {
        return $(t.target).addClass("is-touching")
      }), $("a:not([class*=is-disabled])").on("touchend", function() {
        return setTimeout(function() {
          return $(".is-touching").each(function(t, e) {
            return $(e).removeClass("is-touching")
          })
        }, 100)
      })
    })
  }.call(this),
  function() {
    $(function() {
      var i, t;
      return window.loading = {
        start: function(t) {
          var e, n;
          return null == t && (t = 1e4), i.show(), setTimeout((e = this, function() {
            return e.dismiss()
          }), t), $(window).on("unload", (n = this, function() {
            return n.dismiss()
          }))
        },
        dismiss: function() {
          return i.hide(), $(window).off("unload")
        }
      }, t = $('<div class="loading"/>').addClass("is-active"), i = $('<div class="loading_background"/>').append(t).appendTo("body").hide(), $(window).trigger("loading:ready")
    })
  }.call(this),
  function() {
    window.LocalImages = {
      detectImageType: function(t) {
        var e;
        return -1 !== (e = this.ab2str(new Uint8Array(t, 0, 6))).search(/^\xFF\xD8/) ? "image/jpeg" : -1 !== e.search(/^\x89PNG/) ? "image/png" : -1 !== e.search(/^GIF(87a|89a)/) ? "image/gif" : null
      },
      createBlob: function(t, e) {
        var n, i;
        try {
          n = new Blob([t], {
            type: e
          })
        } catch (o) {
          o,
          (i = new(window.BlobBuilder || window.WebKitBlobBuilder)).append(t),
          n = i.getBlob(e)
        }
        return n
      },
      toDataURL: function(t, e) {
        var n, i, o, r, a;
        for (n = "", r = 1e4, a = 0; a < t.byteLength;) i = r < t.byteLength - a ? r : t.byteLength - a, o = new Uint8Array(t, a, i), a += i, n += this.ab2str(o);
        return "data:" + e + ";base64," + btoa(n)
      },
      ab2str: function(t) {
        var e, n, i, o;
        try {
          return String.fromCharCode.apply(null, t)
        } catch (r) {
          for (r, o = [], n = 0, i = t.length; n < i; n++) e = t[n], o.push(String.fromCharCode(e));
          return o.join("")
        }
      },
      toArrayBinary: function(t) {
        var e, n, i, o, r;
        for (n = atob(t.split(",")[1]), e = new Uint8Array(new ArrayBuffer(n.length)), i = o = 0, r = n.length; 0 <= r ? o <= r : r <= o; i = 0 <= r ? ++o : --o) e[i] = n.charCodeAt(i);
        return e
      }
    }
  }.call(this),
  function() {
    window.localStorageUtil = {
      getItem: function(t) {
        return storageUtil.isAvailable("localStorage") ? localStorage.getItem(t) : null
      },
      setItem: function(t, e) {
        if (storageUtil.isAvailable("localStorage")) return localStorage.setItem(t, e)
      },
      removeItem: function(t) {
        var e;
        return storageUtil.isAvailable("localStorage") ? (e = localStorage.getItem(t), localStorage.removeItem(t), e) : null
      }
    }
  }.call(this),
  function() {
    window.LazyEventListener = function() {
      function t(t, e, n) {
        var i;
        this.handling = !1, i = function(t) {
          return this.handling = !0, requestAnimationFrame(function() {
            return n(t), this.handling = !1
          })
        }, t.addEventListener(e, i, {
          passive: !0
        })
      }
      return t
    }(), $(function() {
      return window.onlazy = function(t, e, n) {
        var i;
        return null == n && (n = 200), i = null, $(window).on(t, function(t) {
          return i && clearTimeout(i), i = setTimeout(function() {
            return e(t)
          }, n)
        })
      }
    })
  }.call(this),
  function() {
    $(function() {
      if (0 < $(".overlay").length) return $(".hide-overlay").click(function() {
        return $(".overlay").fadeOut()
      })
    })
  }.call(this),
  function() {
    var t, e, n, i, o, r, a, s, c, l, u, d, h;
    window.__gCrWeb || (window.__gCrWeb = {}), (t = window.__gCrWeb).autofill || (t.autofill = {}), (e = window.__gCrWeb.autofill).extractForms || (e.extractForms = function() {}), (r = window.__gCrWeb).message || (r.message = {}), (a = window.__gCrWeb.message).invokeOnHost || (a.invokeOnHost = function() {}), (s = window.__gCrWeb.message).invokeQueues || (s.invokeQueues = function() {}), (c = window.__gCrWeb).suggestion || (c.suggestion = {}), (l = window.__gCrWeb.suggestion).hasPreviousElement || (l.hasPreviousElement = function() {}), (u = window.__gCrWeb.suggestion).hasNextElement || (u.hasNextElement = function() {}), (d = window.__gCrWeb).innerSizeAsString || (d.innerSizeAsString = function() {}), (h = window.__gCrWeb).getElementFromPoint || (h.getElementFromPoint = function() {}), (n = window.__gCrWeb).getPageWidth || (n.getPageWidth = function() {}), (i = window.__gCrWeb).hasPasswordField || (i.hasPasswordField = function() {}), (o = window.__gCrWeb).stringify || (o.stringify = function() {})
  }.call(this),
  function() {
    var i;
    i = function() {
      function t(t) {
        this.elem = t, this.button = this.elem.find(".photo-uploader_add"), this.setupHandlers()
      }
      return t.prototype.isHidden = function() {
        return this.elem.find(".photo-uploader_file-field").hasClass("is-hidden")
      }, t.prototype.setupHandlers = function() {
        var t, e;
        return this.button.click((t = this, function() {
          return t.button.val("")
        })), this.button.change((e = this, function() {
          return e.uploaded(e.button[0].files[0])
        }))
      }, t.prototype.uploaded = function(t) {
        var e;
        return t.type && 0 !== t.type.indexOf("image/") ? (this.button.trigger("error"), void toast("\u753b\u50cf\u3092\u9078\u629e\u3057\u3066\u304f\u3060\u3055\u3044")) : (this.isHidden() || (e = this.elem.find(".photo-uploader_file-field"), this.readDataURL(t, function(t) {
          return e.css({
            "background-image": "url(" + t + ")",
            "background-size": "cover",
            "background-position": "center center"
          })
        })), this.button.trigger("encode"))
      }, t.prototype.readDataURL = function(t, e) {
        var n;
        return (n = new FileReader).onloadend = function(t) {
          return e(t.target.result)
        }, n.readAsDataURL(t)
      }, t
    }(), $(function() {
      return $(".photo-uploader").each(function(t, e) {
        var n;
        return (n = $(e)).data("photoUploader", new i(n))
      })
    })
  }.call(this),
  function() {
    var t;
    window.PreventDisposal = t = function() {
      function t() {
        this.message = "\u79fb\u52d5\u3059\u308b\u3068\u7de8\u96c6\u5185\u5bb9\u304c\u7834\u68c4\u3055\u308c\u307e\u3059"
      }
      return t.prototype.isSubmitting = function() {
        return 0 < $("form").filter(function(t, e) {
          return "true" === $(e).data("submitting")
        }).length
      }, t.prototype.isDirty = function() {
        var o;
        return o = !1, $(":input").not(":button").each(function(t, e) {
          var n, i;
          if ("SELECT" === e.tagName ? (i = $(e).find("[selected]").val() || "", n = $(e).val()) : "checkbox" === $(e).attr("type") ? (i = e.defaultChecked, n = e.checked) : "radio" === $(e).attr("type") ? (i = e.defaultChecked, n = e.checked) : (i = e.defaultValue, n = $(e).val()), i !== n) return !(o = !0)
        }), o
      }, t.prototype.needConfirm = function() {
        return !this.isSubmitting() && this.isDirty()
      }, t.prototype.setup = function() {
        var t, e;
        return $("form").on("submit", function(t) {
          return $(t.target).data("submitting", "true")
        }), $(window).on("beforeunload", (t = this, function() {
          if (t.needConfirm()) return t.message
        })), $('[data-js="prevent-disposal"]').click((e = this, function(t) {
          if (e.needConfirm()) return confirm(e.message) ? $(window).off("beforeunload") : t.preventDefault()
        })), $('[data-js="allow-disposal"]').click(function() {
          return $(window).off("beforeunload")
        })
      }, t
    }(), $(function() {
      if (0 < $('[data-js="prevent-disposal"]').length) return new t({}).setup()
    })
  }.call(this),
  function() {
    $(function() {
      var o;
      return o = {
        before: function() {
          return loading.start()
        },
        beforeSend: function(t, e) {
          return e.timeout = 1e4
        },
        success: function(t) {
          switch (loading.dismiss(), !1) {
            case null == t.toast:
              return customToast(t.toast);
            case !(null != t.message && null != t.image):
              return toastWithImage(t.message, t.image);
            case null == t.message:
              return toast(t.message)
          }
        },
        error: function(t, e) {
          return loading.dismiss(), null == t.responseJSON && null != t.responseText && "" !== t.responseText ? toast(t.responseText) : "timeout" === e ? toast("\u3057\u3070\u3089\u304f\u3057\u3066\u304b\u3089\u518d\u5ea6\u304a\u8a66\u3057\u304f\u3060\u3055\u3044") : 500 <= t.status ? toast("\u30a8\u30e9\u30fc\u304c\u767a\u751f\u3057\u307e\u3057\u305f") : void 0
        }
      }, $("body").on("ajax:before", "[data-remote]", function(t) {
        return o.before(t)
      }).on("ajax:beforeSend", "[data-remote]", function(t, e, n) {
        return o.beforeSend(e, n)
      }).on("ajax:success", "[data-remote]", function(t, e, n, i) {
        return o.success(e, n, i)
      }).on("ajax:error", "[data-remote]", function(t, e, n, i) {
        return o.error(e, n, i), $(t.target).find(":submit, :button, :image").removeAttr("disabled")
      }), window.ajaxOptions = o
    })
  }.call(this),
  function() {
    $(function() {
      return window.requestContext = {
        previousPath: null,
        init: function() {
          var t;
          if (storageUtil.isAvailable("sessionStorage")) return t = "previousPath", this.previousPath = sessionStorage.getItem(t) || "", sessionStorage.setItem(t, location.pathname)
        }
      }, requestContext.init()
    })
  }.call(this),
  function() {
    window.ScaleFitContainer = function() {
      function t(t, e, n, i) {
        this.parent = $(t), this.target = $(e), this.baseSize = {
          w: n,
          h: i
        }
      }
      return t.prototype.fit = function() {
        var t, e, n, i;
        return this.parent.css({
          height: $(window).height()
        }), i = this.parent.width() / this.baseSize.w, n = this.parent.height() / this.baseSize.h, e = Math.min(i, n), t = (this.parent.width() - this.baseSize.w * e) / 2, this.target.css({
          transform: "scale(" + e + ")",
          left: t,
          bottom: 0,
          transformOrigin: "left bottom"
        })
      }, t.prototype.addResizeListener = function(t) {
        var e;
        return e = this, new LazyEventListener(t, "resize", function() {
          return e.fit()
        }), this.fit()
      }, t
    }()
  }.call(this),
  function() {
    $(function() {
      return window.scrollStop = function() {
        return $("html, body").css("overflow", "hidden"), document.addEventListener("touchmove", scrollStop, {
          passive: !1
        })
      }, window.cancellScrollStop = function() {
        return $("html, body").css("overflow", ""), document.removeEventListener("touchmove", scrollStop)
      }
    })
  }.call(this),
  function() {
    $(function() {
      if (isIE()) return $(".form-select-cell select").css({
        width: "auto",
        direction: "ltr",
        "margin-left": "auto",
        "margin-right": 0
      })
    })
  }.call(this),
  function() {
    $(function() {
      var e;
      return e = {
        open: function(t) {
          return $(t).show().removeClass("is-closing").addClass("is-opening")
        },
        close: function(t, e) {
          if ($(t).removeClass("is-opening").addClass("is-closing"), e) return setTimeout(function() {
            return location.href = e
          }, 300)
        }
      }, $(".open-slide-dialog").on("click", function() {
        return e.open("#" + $(this).data("dialog-id"))
      }), $(".slide-dialog").find("[data-js='close-dialog']").on("click", function() {
        var t;
        return t = $(this).data("href"), e.close($(this).parents(".slide-dialog"), t)
      }), setTimeout(function() {
        return e.open(".slide-dialog.auto-appear:first")
      }, 500)
    })
  }.call(this),
  function() {
    $(function() {
      return $(".smooth-scroll").on("click.smoothscroll", function(t) {
        var e, n;
        return t.preventDefault(), e = "#back-to-top" === (n = this.hash) ? 0 : $(n).offset().top - 50, $("html, body").stop().animate({
          scrollTop: e
        }, {
          duration: "normal"
        })
      })
    })
  }.call(this),
  function() {
    $(function() {
      var e, t, n, i, o, r, a, s, c;
      if (c = $("#splash_container")) return i = c.data("event-name"), n = 1 === c.data("embed"), o = 1 === c.data("interstitial"), t = "displaySplash_" + i, e = function(t) {
        return n ? location.href = "with://close" : o ? c.remove() : document.referrer ? history.back() : $(t).data("fallbackPath") ? location.href = $(t).data("fallbackPath") : location.href = "/"
      }, c.find(".splash_close-button").on("click", function() {
        return e(this)
      }), c.find(".splash_opt-out-link").on("click", function() {
        var t;
        return t = $(this).data("opt-out-path"), $.ajax({
          type: "DELETE",
          url: t
        }), e(this)
      }), o ? (s = 216e5, a = (new Date).getTime(), 0 < (r = sessionStorage.getItem(t)) && a - r < s ? void 0 : (c.addClass("is-visible"), sessionStorage.setItem(t, a))) : c.addClass("is-visible")
    })
  }.call(this),
  function() {
    $(function() {
      var a;
      if (window.toast = function(t, e) {
          return null == e && (e = 2500), toastWithImage(t, null, e)
        }, window.toastWithImage = function(t, e, n) {
          var i, o, r;
          return null == n && (n = 2500), r = $('<div class="toast"/>'), e && (o = $('<img class="toast_image" />').attr("src", e), r.append(o).addClass("with-image")), i = $('<div class="toast_body"/>').html(t), r.append(i), a(r, n)
        }, window.customToast = function(t, e) {
          return null == e && (e = 2500), a($(t), e)
        }, a = function(t, e) {
          return t.appendTo("body").wrap('<div class="toast_background"/>').addClass("is-active"), t.hasClass("with-animation") && lottie.loadAnimation({
            container: t.find(".toast_animation-container")[0],
            renderer: "svg",
            loop: !1,
            autoplay: !0,
            path: t.data().path
          }), setTimeout(function() {
            return t.removeClass("is-active")
          }, e), setTimeout(function() {
            return t.unwrap().remove()
          }, e + 200)
        }, window.hideToast = function() {
          return $(".toast").unwrap().removeClass("is-active").remove()
        }, 0 < $(".toast-message").length) {
        if (0 < $(".dialog.auto-appear").length) return;
        window.toast($(".toast-message").text())
      }
      if (0 < $(".show-toast.auto-appear").length) return customToast($(".show-toast.auto-appear").children())
    })
  }.call(this),
  function() {
    $(function() {
      if (0 < $(".toast-bar").length) return $(document).on("click", ".toast-bar_cross-button", function(t) {
        return t.preventDefault(), $(".toast-bar").remove()
      })
    })
  }.call(this),
  function() {
    $(function() {
      return window.enableTouching = function(t) {
        return $(document).on("touchstart", t, function(t) {
          if ($(this).addClass("is-touching"), $(t.target).hasClass("button") || "submit" === t.target.type) return t.stopPropagation()
        }).on("touchend", t, function() {
          return setTimeout(function() {
            return $(".is-touching").each(function(t, e) {
              return $(e).removeClass("is-touching")
            })
          }, 100)
        })
      }, enableTouching(".js-enable-touching")
    })
  }.call(this),
  function() {
    window.isMobile = function() {
      return /mobile/i.test(navigator.userAgent)
    }, window.isAndroid = function() {
      return /android/i.test(navigator.userAgent)
    }, window.isIE = function() {
      return !1
    }, window.isIphone = function() {
      return /iphone/i.test(navigator.userAgent)
    }, window.isIphone4 = function() {
      return isIphone() && 480 === window.screen.height && 320 === window.screen.width
    }, window.isAndroidUnder4_1 = function() {
      return isAndroid() && navigator.userAgent.match(/Android 4.[0-1].\d/i)
    }, window.isAndroidUnder4_4 = function() {
      return isAndroid() && navigator.userAgent.match(/Android 4.[0-3].\d/i)
    }, window.hasDoubleTouchBug = function() {
      return isAndroid() && navigator.userAgent.match(/Android 4.[1-2].\d/i)
    }, window.isChrome = function() {
      return /chrome/i.test(navigator.userAgent.toLowerCase())
    }, window.isSafari = function() {
      return !isChrome() && /safari/i.test(navigator.userAgent.toLowerCase())
    }, window.isIphoneX = function() {
      var t;
      if (isIphone()) return t = window.screen.width * window.screen.height * window.devicePixelRatio, 0 <= [913500, 1112832, 741888, 987480, 1188984].indexOf(t)
    }
  }.call(this),
  function() {
    var l, u;
    u = "input,textarea", l = ["utf8", "authenticity_token"], $(function() {
      var r, a, s, c;
      if (0 !== (r = $('form[data-js="unload_draft"]')).length) return c = r.attr("id"), s = !1, a = [], null != r.data("except-names") && (a = r.data("except-names").split(",")), $(window).unload(function() {
          var t, e, n, i, o;
          if (!s) {
            for (o = {}, e = 0, n = (i = r.find(u)).length; e < n; e++) t = i[e], RegExp("" + a.concat(l).join("|")).test(t.name) || (o[t.name] = t.value);
            return localStorage.setItem(c, JSON.stringify(o))
          }
        }),
        function() {
          var t, e, n, i;
          if (i = JSON.parse(localStorage.getItem(c)))
            for (t in e = [], i) n = i[t], e.push(r.find("[name='" + t + "']").val(n))
        }(), r.on("submit", function() {
          return localStorage.removeItem(c), s = !0
        })
    })
  }.call(this),
  function() {
    $(function() {
      return this.windowClose = function() {
        return open(location, "_self").close(), !1
      }
    })
  }.call(this),
  function() {
    $(function() {
      return $(document).on("keyup", '[data-js="word-counter"]', function(t) {
        var a, s;
        return s = $(t.target), 0 === (a = s.data().counter ? $(s.data().counter) : s.next(".counter")).length && (a = s.parents(".field_with_errors").next(".counter")), requestAnimationFrame(function() {
          var t, e, n, i, o, r;
          return o = s.data("maximum"), r = s.data("minimum"), i = "prop" === s.data().lengthType ? (s.val() || "").length : countText(s.val()), e = o && o < i, (n = r && i < r) || e ? (t = $('<span class="word-count-errors text-error"/>'), n && t.append("<span class='word-count-error-message'>\uff08\u3042\u3068" + (r - i) + "\u6587\u5b57\uff09</span>"), e && t.append("<span class='word-count-error-message'>\u203b\u6587\u5b57\u6570\u5236\u9650\u3092\u8d85\u3048\u3066\u3044\u307e\u3059</span>"), t.append(i + "/" + o), a.empty().append(t)) : a.html(i + "/" + o)
        })
      }), $('[data-js="word-counter"]').keyup()
    })
  }.call(this),
  function() {
    $(function() {
      var t, o, r;
      if (/^\/contacts/.test($(location).attr("pathname"))) return r = $("#contact-form-props").data().props, o = $("#contact_form_inquiry_category").val(), t = function(t) {
        var e, n, i;
        if (e = $(t.target).val(), n = r[e], "" === $("#contact_form_inquiry_detail").val() || confirm(
            "\u3054\u8a18\u5165\u4e2d\u306e\u5185\u5bb9\u304c\u524a\u9664\u3055\u308c\u307e\u3059\u304c\u3088\u308d\u3057\u3044\u3067\u3059\u304b\uff1f")) return "" === (o = e) ? $("#contact_form_inquiry_detail").val("").prop({
          placeholder: "\u304a\u554f\u3044\u5408\u308f\u305b\u5185\u5bb9\u3092\u9078\u3093\u3067\u304f\u3060\u3055\u3044",
          required: !0,
          disabled: !0
        }) : n.template ? $("#contact_form_inquiry_detail").val(n.template).prop({
          placeholder: "\u304a\u554f\u3044\u5408\u308f\u305b\u5185\u5bb9\u306e\u8a73\u7d30\u3092\u3054\u8a18\u5165\u304f\u3060\u3055\u3044",
          required: !0,
          disabled: !1
        }) : $("#contact_form_inquiry_detail").val("").prop({
          placeholder: "\u304a\u554f\u3044\u5408\u308f\u305b\u5185\u5bb9\u306e\u8a73\u7d30\u3092\u3054\u8a18\u5165\u304f\u3060\u3055\u3044",
          required: !0,
          disabled: !1
        }), i = "60" === e ? "withdrawal" : "default", $("[data-js-if-category]").hide(), $("[data-js-if-category=" + i + "]").show();
        $("#contact_form_inquiry_category").val(o)
      }, $("#contact_form_inquiry_category").on("change", t), "" !== o ? $("#contact_form_inquiry_detail").prop({
        placeholder: "\u304a\u554f\u3044\u5408\u308f\u305b\u5185\u5bb9\u306e\u8a73\u7d30\u3092\u3054\u8a18\u5165\u304f\u3060\u3055\u3044",
        disabled: !1
      }) : void 0
    })
  }.call(this),
  function() {
    var t;
    window.CountDownTimer = t = function() {
      function t(t) {
        t || (t = {}), this.options = t, this.labelFormat = t.labelFormat, this.container = $(t.container), t.endAt ? this.remainingTime = t.endAt - Math.floor((new Date).getTime() / 1e3) : this.remainingTime = t.remainingTime
      }
      return t.prototype.start = function() {
        var t, e, n;
        return t = this.options.afterEnd, (n = this).setTime(), e = setInterval(function() {
          if (n.setTime() <= 0 && (clearInterval(e), t)) return t()
        }, 1e3)
      }, t.prototype.setTime = function() {
        var r, a;
        return this.remainingTime = this.remainingTime - 1, "unit" === this.labelFormat ? (r = createRemainingTime(this.remainingTime), ["day", "hour", "minute", "second"].forEach((a = this, function(t) {
          var e, n, i, o;
          if (n = r[t], 0 !== (o = a.container.find(".val." + t)).length) return i = o.data().timeFormat, e = o.data().displayZeroValue || "none", null != n ? "00" === i ? o.text(("0" + n).slice(-2)) : o.text(n) : "none" === e ? (a.container.find(".unit." + t).remove(), a.container.find(".val." + t).remove()) : "display" === e ? "00" === i ? o.text("00") : o.text("0") : void 0
        }))) : "short" === this.labelFormat ? setRemainingTimeText([this.container], [createRemainingTimeShortText(this.remainingTime)]) : setRemainingTimeText([this.container], [createRemainingTimeLongText(this.remainingTime)]), this.remainingTime
      }, t
    }(), $(function() {
      if (0 < $("#countdown_remaining-time-label").length) return new t({
        container: "#countdown_remaining-time-label",
        labelFormat: $("#countdown_remaining-time-label").data("js-remaining-time-label"),
        remainingTime: parseInt($("#countdown_remaining_time").val())
      }).start()
    })
  }.call(this),
  function() {
    $(function() {
      return $("a[data-disable-on-click]").on("click", function() {
        var t;
        if (!(t = $(this)).hasClass("disabled")) return t.addClass("disabled"), setTimeout(function() {
          return t.removeClass("disabled")
        }, 5e3)
      })
    })
  }.call(this),
  function() {
    /\/missions\/easy_konomi_register/.test(location.pathname) && $(function() {
      var a, o, s, c, t, e, n, i;
      return t = $(".easy-konomi-register_contents").width(), n = $(".easy-konomi-register_item:not(.is-large)").outerWidth(!0), e = Math.floor(t / n), i = Math.floor((t - n * e) / 2), $(".easy-konomi-register_contents").css({
        "padding-left": i,
        "padding-right": i
      }), a = function(t, e) {
        return t.one("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd", function() {
          return $(this).removeClass(e)
        }).addClass(e)
      }, c = function() {
        var t;
        return t = $(".easy-konomi-register_item.is-participating").length, $("[data-js=add-count]").text(t), t
      }, o = {
        index: function(t, e) {
          return $.get("/missions/easy_konomi_register", {
            category_id: t,
            page: e
          })
        },
        pick: function(t, e) {
          return $.post("/missions/easy_konomi_register/pick", {
            id: t,
            category_id: e
          })
        },
        remove: function(t) {
          return $.ajax({
            url: "/missions/easy_konomi_register",
            data: {
              id: t
            },
            type: "DELETE",
            dataType: "json"
          })
        },
        complete: function() {
          return $.post("/missions/easy_konomi_register/complete")
        }
      }, (s = {
        init: function(e) {
          var t, n;
          return t = e.data("category-id"), loading.start(), o.index(t, 1).done((n = this, function(t) {
            return $(window).scrollTop(0), n.addItems(t, e), n.select(e), n.enablePaging(e)
          })).always(function() {
            return loading.dismiss()
          })
        },
        select: function(t) {
          if (this.current().data("scrollTop", $(window).scrollTop()).removeClass("is-selected"), 0 !== t.find(".easy-konomi-register_item").length) return t.addClass("is-selected"), t.data("scrollTop") ? $(window).scrollTop(t.data("scrollTop")) : void 0;
          this.init(t)
        },
        addItems: function(t, e) {
          return (e || this.current()).find(".easy-konomi-register_items").append(t)
        },
        enablePaging: function(n) {
          var t, i;
          return (t = $("<div class='js-paging-position'>")).on("inview", (i = this, function(t, e) {
            if (e) return i.paging(n)
          })), n.append(t)
        },
        paging: function(t) {
          var e, n;
          return e = t.data("category-id"), n = (t.data("page") || 1) + 1, loading.start(), o.index(e, n).done(function(t) {
            var e;
            return e = $(t), s.addItems(e), $(window).scrollTop($(window).scrollTop() + 50), a(e, "is-added"), s.current().data("page", n)
          }).always(function() {
            return loading.dismiss()
          })
        },
        current: function() {
          return $(".easy-konomi-register_tab.is-selected")
        }
      }).enablePaging(s.current()), $(document).on("click", ".easy-konomi-register_item", function() {
        var t, r, e, n, i;
        return r = $(this), i = r.data("group-id"), t = s.current().data("category-id"), r.hasClass("is-participating") ? (o.remove(i), r.removeClass("is-participating"), $(".easy-konomi-register_footer-item").each(function(t, e) {
          if ($(e).data("group-id") === i) return $(e).remove()
        }), c()) : (o.pick(i, t).done(function(t) {
          var e, n, i, o;
          for (i = $(t), e = r.offset().top + r.height(), n = r;;) {
            if (n.offset().top + n.height() <= e) {
              if (0 < (o = n.next()).length) {
                n = o;
                continue
              }
              break
            }
            n = n.prev();
            break
          }
          return n.after(i), a(i, "is-added")
        }).fail(function(t) {
          if (t.responseText) return toast(t.responseText)
        }), $(".easy-konomi-register_item[data-group-id='" + i + "']").each(function(t, e) {
          var n;
          if (n = $(e), !r.is(n)) return n.remove()
        }), r.addClass("is-participating"), a(r, "is-animating"), 0 < $(".easy-konomi-register_footer-item.is-empty").length ? (e = $(".easy-konomi-register_footer-item.is-empty:first")).removeClass("is-empty") : (e = $('<div class="easy-konomi-register_footer-item"><img></div>')).appendTo(".easy-konomi-register_footer-items-inner"), e.data("group-id", i), e.find("img").attr("src", r.find("img").attr("src")), (n = $(".easy-konomi-register_footer-items")).width() < e.offset().left + e.width() && n.scrollLeft(9999), a(e, "is-animating"), $(".easy-konomi-register_footer-progress-step.is-step1").remove(), $(".easy-konomi-register_footer-progress-step.is-step2").show(), 8 <= c() ? ($(".easy-konomi-register_footer").addClass("is-complete"), $(".easy-konomi-register_footer-progress_doing").hide(), $(".easy-konomi-register_footer-progress_complete").show()) : void 0)
      }), $(document).on("touchstart", ".easy-konomi-register_item", function(t) {
        return $(t.currentTarget).addClass("is-touching")
      }), $(document).on("touchend", ".easy-konomi-register_item", function(t) {
        var e;
        return e = $(t.currentTarget), setTimeout(function() {
          if (e.hasClass("is-touching")) return e.removeClass("is-touching"), a(e, "is-touchend")
        }, 100)
      }), $(".easy-konomi-register_header-item").on("click", function(t) {
        var i;
        return i = $(t.currentTarget).data("category-id"), $(".easy-konomi-register_header-item").removeClass("is-selected"), $(t.currentTarget).addClass("is-selected"), $(".easy-konomi-register_tab").each(function(t, e) {
          var n;
          if ((n = $(e)).data("category-id") === i) return s.select(n)
        })
      }), $("[data-js=complete]").on("click", function() {
        return o.complete()
      })
    })
  }.call(this),
  function() {
    window.ellipsis = function(t) {
      return $(t).find('[data-js="ellipsis"]').dotdotdot({
        watch: "window",
        wrap: "letter",
        lastCharacter: {
          remove: [" ", ",", ";", ".", "!", "?", "\u3000", "\u3001", "\uff1b", "\u3002", "\uff01", "\uff1f", "\u30fb", "\u2026"]
        }
      })
    }, $(function() {
      return ellipsis(document.body)
    })
  }.call(this),
  function() {
    $(function() {
      if (0 < $(".favorite").length) return $("body").on("ajax:success", ".favorite", function(t, e) {
        var n;
        return dialog.close(), "delete" === $(t.target).data("method") && /^\/mypages\/favorites/.test($(location).attr("pathname")) ? $(t.target).parents(".user-card").fadeOut() : (n = $(t.target).parents(".dialog").attr("id"), $("#" + n).replaceWith(e.body))
      })
    })
  }.call(this),
  function() {
    /^\/for_you/.test($(location).attr("pathname")) && "/for_you/startup_pickup_users" !== $(location).attr("pathname") && $(function() {
      var t, e, n, i, o;
      return i = function() {
        return $.ajax({
          url: "/for_you/only_you_mix"
        }).then(function(t) {
          if ($("#for-you-only-you-mixes").replaceWith(t), 0 < $(".only-you-mix-carousel").length) return $(".only-you-mix-carousel").slick({
            infinite: !1,
            arrows: !1,
            dots: !0,
            dotsClass: "slick-dots for-you-page-control",
            centerMode: !0,
            variableWidth: !0
          })
        })
      }, t = function() {
        return $.ajax({
          url: "/for_you/day_mix"
        }).then(function(t) {
          var e, n, i;
          if ($("#for-you-day-mixes").replaceWith(t), i = $("#for-you-day-mix-24hour-limited"), $("#for-you-day-mix-24hour-limited-place").replaceWith(i), 0 < i.length) return n = {
            labelFormat: (e = $(".for-you-day-mix_countdown").data()).labelFormat,
            endAt: e.endAt,
            container: ".for-you-day-mix_countdown",
            afterEnd: function() {
              return i.remove()
            }
          }, new CountDownTimer(n).start()
        })
      }, n = function() {
        return $.ajax({
          url: "/for_you/new_konomi_users"
        }).then(function(t) {
          return $("#for-you-new-konomi-users").replaceWith(t)
        })
      }, e = function() {
        return $.ajax({
          url: "/for_you/new_konomi_best_users"
        }).then(function(t) {
          return $("#for-you-new-konomi-best-users").replaceWith(t), $(".new-konomi-best-users-carousel").slick({
            infinite: !1,
            arrows: !1,
            dots: !0,
            dotsClass: "slick-dots for-you-page-control",
            centerMode: !0,
            variableWidth: !0
          })
        })
      }, o = function() {
        return $.ajax({
          url: "/for_you/regular_contents"
        }).then(function(t) {
          return $("#for-you-regular-contents").replaceWith(t)
        })
      }, Promise.resolve().then(i).then(t).then(n).then(e).then(o), $(document).on("click", ".open-vip-dialog", function(t) {
        var e, n, i;
        return t.preventDefault(), i = $(this).data("header-img"), n = $('<img class="for-you-vip-header-img" />').attr("src", i), $(".for-you-vip-header").html(n), e = $("#for-you-vip"), dialog.open(e)
      })
    })
  }.call(this),
  function() {
    $(function() {
      var t;
      if (t = ["webkitTransitionEnd", "mozTransitionEnd", "oTransitionEnd", "transitionend"].join(" "), 0 < $(".global-nav_drawer_bg").length) return $(".global-nav_open-drawer").on("click", function(t) {
        return t.preventDefault(), $(".global-nav_drawer_bg").addClass("is-show"), $(".global-nav_drawer_frame").css("display", "block"), $(".global-nav_drawer_frame").animate({
          right: "0px"
        }, "slow"), $(".sp-container").css("height", window.innerHeight + "px")
      }), $(".close-global-nav-drawer").on("click", function(t) {
        return t.preventDefault(), $(".global-nav_drawer_frame").addClass("animation-flag"), $(".global-nav_drawer_frame").css("right", "-100vw"), $(".sp-container").css("height", "auto")
      }), $(".global-nav_drawer_frame").on(t, function() {
        if ($(".global-nav_drawer_frame").hasClass("animation-flag")) return $(this).css("display", "none"), $(".global-nav_drawer_frame").removeClass("animation-flag"), $(".global-nav_drawer_bg").removeClass("is-show")
      })
    })
  }.call(this),
  function() {
    /^\/[groups, mypage]/.test($(location).attr("pathname")) && $(function() {
      var e, n, i, t, o, r, a, s;
      return 0 < $(".category-nav").length && (o = localStorageUtil.removeItem("groupsCategoryNavScrollPosition"), $(".category-nav").scrollLeft(o), $(".category-nav_label").on("click", function() {
        return o = $(".category-nav").scrollLeft(), localStorageUtil.setItem("groupsCategoryNavScrollPosition", o)
      }), e = !1, a = function(t) {
        if (e !== t) return t ? ($(".category-nav").css("position", "fixed"), $(".category-nav_fixed-space").css("height", 70), e = !0) : ($(".category-nav").css("position", "initial"), $(".category-nav_fixed-space").css("height", 0), e = !1)
      }, new LazyEventListener(window, "scroll", function() {
        var t;
        return t = $(this).scrollTop(), a(50 < t)
      })), 0 < $(".category-nav").length && (i = "groupSortInCategoryKey", $("#group-category-sort").submit(function(t) {
        var e;
        return e = $(t.target).find("input:checked").val(), sessionStorage.setItem(i, e)
      }), function() {
        var n;
        if (n = sessionStorage.getItem(i)) $(".category-nav_list a").each(function(t, e) {
          if (!e.href.match(/sort_order=(hottest|latest|largest|smallest)/)) return e.href = e.href + "?sort_order=" + n
        }), $(".paging_prev a, .paging_next a").each(function(t, e) {
          return e.href = e.href + "&sort_order=" + n
        })
      }()), $("body").on("ajax:success", ".group-participate", function(t, e) {
        return dialog.close(), !0 === e.body ? ($(".remove_card_" + e.card_id).addClass("is-active"), $(".join_card_" + e.card_id).removeClass("is-active"), $(".join_card_" + e.card_id + " > button").prop("disabled", !1), $(".group-members_header_image").addClass("participating-mark"), s(-1), r()) : ($(".join_card_" + e.card_id).addClass("is-active"), $(".remove_card_" + e.card_id).removeClass("is-active"), $(".remove_card_" + e.card_id + " > button").prop("disabled", !1), $(".group-members_header_image").removeClass("participating-mark"), s(1))
      }), n = function(t) {
        if ("" !== (t = t.replace(/^\s*|\s*$/, ""))) return $.ajax({
          type: "POST",
          url: "suggestion",
          data: {
            keyword: t
          },
          success: function(t) {
            return $(".group-suggestions").html(t.body)
          }
        })
      }, 0 < $("#group_form_name").length && "" !== (t = $("#group_form_name").val()) && n(t), $("#group_form_name").blur(function(t) {
        return n(t.target.value)
      }), "/groups" === location.pathname && (0 < $(".groups-carousel-banners").length && $(".groups-carousel-banners").slick({
        infinite: !0,
        autoplay: !0,
        autoplaySpeed: 3e3,
        arrows: !1,
        dots: !0
      }), $.get("/groups/latest_konomi_best_users", function(t) {
        return $("#groups-new-konomi-best-users").replaceWith(t), $(".new-konomi-best-users-carousel").slick({
          infinite: !1,
          arrows: !1,
          dots: !0,
          dotsClass: "slick-dots latest-konomi-best-users",
          centerMode: !0,
          variableWidth: !0
        })
      })), $("body").on("ajax:success", ".konomi-pack_action", function(t, e) {
        var n;
        return "join" === e.body ? ($(".konomi-pack_action_join").addClass("is-active"), $(".konomi-pack_action_leave").removeClass("is-active"), $(".konomi-pack_action > button").prop("disabled", !1), (n = $(".konomi-pack_detail_groups").find(".group-card_image")).removeClass("participating-mark"), s(n.length)) : "leave" === e.body ? ($(".konomi-pack_action_leave").addClass("is-active"), $(".konomi-pack_action_join").removeClass("is-active"), $(".konomi-pack_action > button").prop("disabled", !1), (n = $(".konomi-pack_detail_groups").find(".group-card_image")).addClass("participating-mark"), s(-n.length)) : void 0
      }), s = function(t) {
        var e;
        return 0 < (e = parseInt($(".remaining-number").text()) + t) ? $("#promote-register-konomi").show() : $("#promote-register-konomi").hide(), $(".remaining-number").text(e)
      }, r = function() {
        var t;
        if (0 < (t = $(".recommend-groups_container")).length) return t.addClass("is-visible")
      }, $(".recommend-groups_close").on("click", function() {
        return $(".recommend-groups_container").removeClass("is-visible")
      })
    })
  }.call(this),
  function() {
    $(function() {
      var n, i, t, o, r, a, s, e, c, l;
      return n = function() {
        function t(t) {
          this.currentNum = 1, this.lastNum = t
        }
        return t.prototype.getMsg = function() {
          return $(".daigo-guidance-text:nth-child(" + this.currentNum + ")")
        }, t.prototype.isLastMsg = function() {
          return this.currentNum === this.lastNum
        }, t.prototype.convert = function(t) {
          var e;
          return e = $.parseHTML(t.text()), t.empty().append(e)
        }, t.prototype.fadeIn = function(t) {
          return t.css({
            display: "block",
            animation: "guidance-message-fade-in 1.0s ease"
          })
        }, t.prototype.display = function() {
          var t;
          return t = this.getMsg(), this.convert(t), this.fadeIn(t)
        }, t.prototype.remove = function() {
          return this.getMsg().css("display", "none")
        }, t.prototype.next = function() {
          return this.remove(), this.currentNum += 1, this.display()
        }, t
      }(), l = function(t) {
        return t.preventDefault()
      }, i = function() {
        return $("html, body").css("overflow", "hidden"), document.addEventListener("touchmove", l, {
          passive: !1
        })
      }, c = function() {
        return $("html, body").css("overflow", ""), document.removeEventListener("touchmove", l)
      }, t = function() {
        var t, e;
        return $(".guidance").fadeIn(), i(), e = $(".daigo-guidance-text").length, (t = new n(e)).display(), $(".guidance").on("click", function() {
          return t.isLastMsg() ? ($(".guidance").fadeOut(), c(), s(), r(), o()) : (t.next(), a(t.currentNum))
        }), $(".daigo-guidance-close").on("click", function() {
          return $(".guidance").remove(), c(), s(), r()
        })
      }, e = function() {
        var t;
        return t = $(".received-like-actions:not(.guidance-dummy)"), i(), t.css("display", "none"), $(".first-like-guidance").css("display", "block"), $(".first-like-guidance").css("animation", "guidance-first-like-fade-in 0.3s 0.5s ease backwards"), $(".guide_balloon_tap, .first-like-guidance-skip, .first-like-guidance-thanks").css({
          animation: "guidance-first-like-balloon-popup 0.3s 1.1s ease-out backwards"
        }), $(".first-like-guidance").on("click", function() {
          return $(".first-like-guidance").remove(), t.css("display", "block"), c()
        })
      }, s = function() {
        if (0 < $(".first-like-guidance").length) return e()
      }, r = function() {
        if (0 < $(".guidance-first-balloon").length) return $(".groups-carousel-banners").css("border", "4px solid #ff4850"), $(".groups-carousel-banners img").css("margin", "-4px"), $(".guidance-first-balloon").css("display", "block"), $(".guidance-first-balloon").css("animation", "guidance-simple-popup 0.3s ease-out backwards")
      }, a = function(t) {
        if (0 < $(".register-prof-guidance").length && 0 < $(".user-recommend-guidance").length) switch (t) {
          case 2:
            return $(".register-prof-guidance").css("display", "block"), $(".register-prof-guidance > img").css("animation", "guidance-simple-popup 0.3s ease-out backwards");
          case 3:
            return $(".register-prof-guidance").fadeOut(), $(".user-recommend-guidance").css("display", "block"), $(".user-recommend-guidance > img").css("animation", "guidance-simple-popup 0.3s 0.2s ease-out backwards");
          case 4:
            return $(".user-recommend-guidance").fadeOut()
        }
      }, o = function() {
        return setTimeout(function() {
          var t;
          if (0 < (t = $("#promote-profile-mission-after-search-guidance")).length) return dialog.open(t)
        }, 500)
      }, 0 < $(".guidance").length ? t() : s()
    })
  }.call(this),
  function() {
    $(function() {
      var t, e;
      if (t = $(".sp-container.with-header"), e = $(".header"), 0 < t.length && 0 < e.length) return t.css("padding-top", $(".header").height())
    })
  }.call(this),
  function() {
    /^\/identity_confirmations\/accept$/.test($(location).attr("pathname")) && $(function() {
      var e, o, r, a, i;
      return e = function(e, n) {
        var i;
        return function() {
          i = [];
          for (var t = e; e <= n ? t <= n : n <= t; e <= n ? t++ : t--) i.push(t);
          return i
        }.apply(this).reduce(function(t, e) {
          var n;
          return 0 < (n = $("#birthday_" + e)).length && t.push(n.val()), t
        }, [])
      }, a = function() {
        return e(0, 3).join("")
      }, r = function() {
        return ("00" + e(4, 5).join("")).substr(-2)
      }, o = function() {
        return ("00" + e(6, 7).join("")).substr(-2)
      }, i = function() {
        var t, e, n, i;
        return n = [], 0 < ((i = a()) + (e = r()) + (t = o())).length && (4 !== i.length ? n.push(!1) : n.push(!isNaN(Date.parse(i + "-" + e + "-" + t)))), n.every(function(t) {
          return t
        }) ? ($("#confirm").removeClass("button-disabled"), $("#confirm").removeAttr("disabled")) : ($("#confirm").addClass("button-disabled"), $("#confirm").attr("disabled", !0))
      }, $(".input-birthday_items").on("click", function() {
        if (0 === e(0, 7).join("").length) return $("#birthday_0").focus()
      }), $(".input-birthday input").on("keydown", function(t) {
        var e, n;
        if (46 === (e = t.keyCode) || 8 === e) return 0 === (n = $(t.target)).nextAll("input:first").length && 0 < n.val().length ? n.focus() : n.prev().focus()
      }).on("focus", function(t) {
        return "birthday_0" !== t.target.id && 0 === e(0, 7).join("").length ? $("#birthday_0").focus() : ($(t.target).val(""), i())
      }).on("input", function(t) {
        var e, n;
        if (e = (e = (e = (n = $(t.target)).val() || "").replace(/[\uff10-\uff19]/g, function(t) {
            return String.fromCharCode(t.charCodeAt(0) - 65248)
          })).replace(/[^0-9]/g, ""), n.val(e), i(), 0 < n.val().length) return n.nextAll("input:first").focus()
      }), $("input").on("change input", i), $("#confirm").on("click", function() {
        return $(this).attr("disabled", !0), $.ajax({
          type: "POST",
          url: "confirm",
          data: {
            birthday: a() + "-" + r() + "-" + o()
          },
          success: function() {
            return location.href = "/"
          },
          error: function() {
            return dialog.open($("#invalid-birthday-dialog"))
          }
        })
      }), i()
    })
  }.call(this),
  function() {
    var l = [].indexOf || function(t) {
      for (var e = 0, n = this.length; e < n; e++)
        if (e in this && this[e] === t) return e;
      return -1
    };
    /^\/mypages\/profile\/introduction/.test($(location).attr("pathname")) && $(function() {
      var n, i, t, e, o, r, a, s, c;
      if (0 < $("#profile_introduction_form_body").length && (n = $("#profile_introduction_form_body"), i = $("#profile_introduction_form_sample_id"), n.keyup(function(t) {
          if ("" === $(t.target).val()) return i.val(0)
        }), keyupToggleSubmitButton("#profile_introduction_form_body", function() {
          var t;
          return 20 <= (t = n.val().replace(/\n|\r\n/g, "nr")).length_unicode && t.length_unicode <= 1e3
        }), $("#introduction-examples").on("dialog:open", function() {
          return $(".introduction-samples").slick({
            infinite: !1,
            swipe: !1,
            dots: !0,
            fade: !0
          })
        }), $("#introduction-examples").on("dialog:close", function() {
          return $(".introduction-samples").slick("unslick")
        }), $("#introduction-examples").find(".button-primary").on("click", function() {
          var t, e;
          return e = $(".introduction-samples").slick("slickCurrentSlide") + 1, t = $(".introduction-samples").find("[data-sample-key='" + e + "']").val(), n.val(t).keyup(), i.val(e), dialog.close()
        })), $(".intro-auto-radio").on("click", function() {
          return $(".introduction-auto-submit").prop("disabled", !1).removeClass("is-disabled")
        }), $("select").change(function() {
          var t, e;
          return t = $("select").val(), $(".introduction-scroll-button").css("display", "none"), 0 < t && $(".introduction-scroll-button[data-answer-id= " + t + "]").css("display", "block"), $(".intro-auto-radio").prop("checked", !1), $(".introduction-auto-submit").prop("disabled", !0).addClass("is-disabled"), e = $(".introduction-scroll-position").offset().top - 110, $("body, html").stop().animate({
            scrollTop: e
          }, "fast", "swing")
        }), $(".introduction-auto-submit").on("click", function() {
          var t, e;
          if (0 < $("#select-character-category").length && (t = $("select").val(), localStorageUtil.setItem("autoIntroductionCharacterCategory", t), e = $(".intro-auto-radio:checked").val(), localStorageUtil.setItem("autoIntroductionCharacterId", e)), 0 < $("#select-person-category").length) return t = $("select").val(), localStorageUtil.setItem("autoIntroductionPersonCategory", t), e = $(".intro-auto-radio:checked").val(), localStorageUtil.setItem("autoIntroductionPersonId", e)
        }), o = function() {
          if (1 <= $(".intro-auto-radio:checked").length) return $(".introduction-auto-submit").prop("disabled", !1).removeClass("is-disabled")
        }, r = function(t) {
          if ("" !== (t = $(t)).val()) return t.parents(".introduction-step4-box").addClass("is-filled")
        }, e = function() {
          var t, e, n, i, o, r;
          return $("#intro-auto-answer4").val() && $("#intro-auto-answer5").val() && (n = $("#intro-auto-answer4").val().length_unicode, 0 <= l.call(function() {
            for (o = [], t = 1; t <= 300; t++) o.push(t);
            return o
          }.apply(this), n)) && (i = $("#intro-auto-answer5").val().length_unicode, 0 <= l.call(function() {
            for (r = [], e = 1; e <= 300; e++) r.push(e);
            return r
          }.apply(this), i)) ? $("#introduction-step4-submit").prop("disabled", !1).removeClass("is-disabled") : $("#introduction-step4-submit").prop("disabled", !0).addClass("is-disabled")
        }, $(".introduction-step4-textarea textarea").on("keyup", function(t) {
          return r(t.target), e()
        }), t = function(t, e) {
          if (t) return $("select").val(t), $(".intro-auto-radio[value=" + e + "]").prop("checked", !0), $(".introduction-scroll-button").css("display", "none"), 0 < t ? $(".introduction-scroll-button[data-answer-id=" + t + "]").css("display", "block") : void 0
        }, 0 < $("#select-character-category").length && (s = localStorageUtil.getItem("autoIntroductionCharacterCategory"), c = localStorageUtil.getItem("autoIntroductionCharacterId"), t(s, c)), 0 < $("#select-person-category").length && (s = localStorageUtil.getItem("autoIntroductionPersonCategory"), c = localStorageUtil.getItem("autoIntroductionPersonId"), t(s, c)), o(), r("#intro-auto-answer4"), r("#intro-auto-answer5"), e(), function() {
          if (/^\/mypages\/profile\/introduction\/completion/.test($(location).attr("pathname"))) localStorageUtil.removeItem("autoIntroductionCharacterCategory"), localStorageUtil.removeItem("autoIntroductionCharacterId"), localStorageUtil.removeItem("autoIntroductionPersonCategory"), localStorageUtil.removeItem("autoIntroductionPersonId"), setTimeout(function() {
            var t, e;
            return t = $("#generated_text").val(), e = "true" === $("#generated_text").attr("data-embed") ? "with://close?introduction=" + encodeURIComponent(t) : "edit?auto_completed=true", location.href = e
          }, 5e3)
        }(), 0 <= location.search.indexOf("auto_completed")) return a = $("#toast"), toastWithImage(a.data("message"), a.data("image"))
    })
  }.call(this),
  function() {
    $(function() {
      return isMobile() ? ($("body").addClass("mobile"), isIphoneX() ? $("body").addClass("iphonex") : void 0) : $("body").addClass("desktop")
    })
  }.call(this), Kamihubuki = function() {
    this.kamikireArray = [], this.ctx = null, this.cvs = null, this.stageWidth = null, this.stageHeight = null
  }, Kamihubuki.prototype = {
    init: function(t, e) {
      this.cvs = t, e === undefined && (e = {});
      var n = e.generateCount || 100,
        i = e.colors || [];
      this.stageWidth = $(t).width(), this.stageHeight = $(t).height(), this.cvs.width = this.stageWidth, this.cvs.height = this.stageHeight, this.ctx = this.cvs.getContext("2d"), this.ctx.fillStyle = "#FFF", this.ctx.fillRect(0, 0, this.cvs.width, this.cvs.height);
      for (var o = 0; o < n; o++) {
        var r = new Kamikire(5 + Math.floor(5 * Math.random()), this.ctx, i);
        r.x = Math.random() * this.stageWidth, r.y = Math.random() * this.stageHeight, this.ctx.fillStyle = "#" + r._r + r._g + r._b, this.ctx.fillRect(r.x, r.y, r.SIZE, r.SIZE), this.kamikireArray.push(r)
      }
      var a = this;
      setInterval(function() {
        a.enterFrame()
      }, 30)
    },
    enterFrame: function() {
      this.ctx.clearRect(0, 0, this.stageWidth, this.stageHeight);
      for (var t = 0; t < this.kamikireArray.length; ++t) {
        if (0 < this.kamikireArray[t].y) {
          var e = this.kamikireArray[t].y / this.stageHeight;
          e = 1 - e, this.kamikireArray[t].alpha = e
        }
        this.kamikireArray[t].x - this.kamikireArray[t].SIZE / Math.SQRT2 > this.stageWidth && (this.kamikireArray[t].x -= this.stageWidth), this.kamikireArray[t].x + this.kamikireArray[t].SIZE / Math.SQRT2 < 0 && (this.kamikireArray[t].x += this.stageWidth), this.kamikireArray[t].y - this.kamikireArray[t].SIZE / Math.SQRT2 > this.stageHeight && (this.kamikireArray[t].y -= this.stageHeight), this.kamikireArray[t].fall()
      }
    }
  }, Kamikire = function(t, e, n) {
    this.SIZE = t, this.ctx = e, this.x = 0, this.y = 0, this.alpha = 1;
    var i, o, r, a = Math.random() * Math.PI * 2,
      s = null;
    if (0 < n.length) {
      var c = n[Math.floor(Math.random() * n.length)];
      i = c[0], o = c[1], r = c[2], s = c[3]
    } else i = Math.floor(127.9999 * (1 + Math.cos(a))), o = Math.floor(127.9999 * (1 + Math.cos(a + 2 * Math.PI / 3))), r = Math.floor(127.9999 * (1 + Math.cos(a - 2 * Math.PI / 3))), s = 1;
    this._r = i, this._g = o, this._b = r, this._a = s, this._backColor = 65793 * Math.floor(127 + 64 * Math.random()), this._omega = (2 * Math.random() - 1) * Math.PI / 4, this._fallTheta = 0, this._fallSpeed = 1 + 3 * Math.random(), this._theta = Math.random() * Math.PI * 2, this._Ax = 1, this._Ay = Math.random(), this._Az = 2 * Math.random() - 1;
    var l = Math.sqrt(this._Ax * this._Ax + this._Ay * this._Ay + this._Az * this._Az);
    this._Ax /= l, this._Ay /= l, this._Az /= l;
    var u = Math.sqrt(this._Ax * this._Ax + this._Ay * this._Ay);
    0 === u ? (this._Bx = 1, this._By = 0, this._Bz = 0, this._Cx = 0, this._Cy = 1, this._Cz = 0) : (this._Bx = this._Ay, this._By = -this._Ax, this._Bz = 0, this._Cx = this._Ax * this._Az, this._Cy = this._Ay * this._Az, this._Cz = -u * u, this._Bx /= u, this._By /= u, this._Cx /= u * l, this._Cy /= u * l, this._Cz /= u * l)
  }, Kamikire.prototype = {
    getRotation3D: function() {
      return this._theta - 2 * Math.PI * Math.floor(this._theta / (2 * Math.PI))
    },
    setRotation3D: function(t) {
      this._theta = t - 2 * Math.PI * Math.floor(t / (2 * Math.PI));
      var e = Math.cos(this._theta),
        n = Math.sin(this._theta),
        i = this._Ax * this._Ax + (this._Bx * this._Bx + this._Cx * this._Cx) * e,
        o = this._Ax * this._Ay + (this._Bx * this._By + this._Cx * this._Cy) * e + (this._Bx * this._Cy - this._Cx * this._By) * n,
        r = (this._Ax, this._Az, this._Bx, this._Bz, this._Cx, this._Cz, this._Bx, this._Cz, this._Cx, this._Bz, this._Ax * this._Ay + (this._By * this._Bx + this._Cy * this._Cz) * e + (this._By * this._Cx - this._Cy * this._Bx) * n),
        a = this._Ay * this._Ay + (this._By * this._By + this._Cy * this._Cy) * e;
      this._Ay, this._Az, this._By, this._Bz, this._Cy, this._Cz, this._By, this._Cz, this._Cy, this._Bz;
      this.ctx.fillStyle = "rgba(" + this._r + ", " + this._g + ", " + this._b + ", " + this._a + ")", this.ctx.beginPath(), this.ctx.lineTo(this.x + -i * this.SIZE / 2 + r * this.SIZE / 2, this.y + -o * this.SIZE / 2 + a * this.SIZE / 2), this.ctx.lineTo(this.x + -i * this.SIZE / 2 - r * this.SIZE / 2, this.y + -o * this.SIZE / 2 - a * this.SIZE / 2), this.ctx.lineTo(this.x + i * this.SIZE / 2 - r * this.SIZE / 2, this.y + o * this.SIZE / 2 - a * this.SIZE / 2), this.ctx.lineTo(this.x + i * this.SIZE / 2 + r * this.SIZE / 2, this.y + o * this.SIZE / 2 + a * this.SIZE / 2), this.ctx.closePath(), this.ctx.fill()
    },
    fall: function() {
      this.setRotation3D(this.getRotation3D() + this._omega), this.x += this._fallSpeed * Math.sin(this._fallTheta), this.y += this._fallSpeed * Math.cos(this._fallTheta), this._fallTheta += (2 * Math.random() - 1) * Math.PI / 12, this._fallTheta < -Math.PI / 2 && (this._fallTheta = -Math.PI - this._fallTheta), this._fallTheta > Math.PI / 2 && (this._fallTheta = Math.PI - this._fallTheta)
    }
  },
  function() {
    /^\/mypages\/konomi_comments\/(\d+)\/edit/.test($(location).attr("pathname")) && $(function() {
      var e;
      if (0 < $("#new_konomi_comment_form").length) return e = $(".form-textarea"), keyupToggleSubmitButton(".form-textarea", function() {
        var t;
        return 5 <= (t = e.val()).length_unicode && t.length_unicode <= 60
      })
    })
  }.call(this),
  function() {
    /^\/likes\/search\/edit/.test($(location).attr("pathname")) && $(function() {
      var t, e;
      return t = function() {
        return $(".like-filter_disabled-cover").show(), $("input:checkbox, select").prop("disabled", !0)
      }, e = function() {
        return $(".like-filter_disabled-cover").hide(), $("input:checkbox, select").prop("disabled", !1)
      }, $('input[name="search_form[enabled]"]:radio').on("change", function() {
        return "true" === $(this).val() ? e() : t()
      }), $(".check-private-mode-status").on("click", function(t) {
        return t.preventDefault(), t.stopPropagation(), "false" === $("#private_mode_on").val() ? $("#new_search_form").submit() : !0 === $("#search_form_enabled_false").prop("checked") ? $("#new_search_form").submit() : dialog.open($("#like-filter_private-mode"))
      }), $(window).load(function() {
        return $("#search_form_enabled_true").prop("checked") ? e() : t()
      }), $("#like-filter_private-mode_submit").on("click", function() {
        return $("#new_search_form").submit()
      })
    })
  }.call(this),
  function() {
    $(function() {
      var t, a, i, e, s, c, l, u, o;
      return e = "form[data-like-form], .new_like_thanks", l = null, window.likeEvents = $({}), s = function(t) {
        var e;
        if (0 !== (e = $(t)).length) return e.appendTo("body"), dialog.open(e)
      }, $("body").on("ajax:success", e, function(t, e) {
        var n;
        return n = $(e.body).data("user-id"), $(".user_actions[data-user-id=" + n + "]").replaceWith(e.body), fullscreenModal.removeAll(), dialog.close(), ("send_like_mission_v201810" === e.like_campaign_type && "end" === e.send_like_mission_v201810.status || "campaign" === e.like_campaign_type && 0 === e.remaining_free_like_count) && ($('[data-displayable-action-view="free_like"]').hide(), $('[data-displayable-action-view="like"]').show()), e.dialog_id && s("#" + e.dialog_id), i(), o({
          type: "likeSent",
          userId: n
        })
      }).on("ajax:error", e, function(t, e) {
        var n;
        return (n = e.responseJSON) ? (u($(n.body)), s(l.userActions.find("#" + n.dialog_id)), /questions/.test(n.dialog_id) ? (fullscreenModal.hide(), toast(n.message)) : n.dialog_message ? (fullscreenModal.hide(), $("#like-message_error-text").html(n.dialog_message), s(l.userActions.find("#like-message_error"))) : n.message ? toast(n.message) : void 0) : (dialog.close(), fullscreenModal.removeAll())
      }), a = function(t, a) {
        var e, n, i, o;
        return null == t.checkActionId ? a() : (o = "/likes/check/" + t.checkTargetId + "/" + t.checkActionId, i = [], t.routeCode && i.push("route_code=" + t.routeCode), 0 < i.length && (o = o + "?" + i.join("&")), (e = $.extend({}, ajaxOptions)).before(), n = $.extend(e, {
          type: "GET",
          url: o,
          dataType: "json",
          success: function(t) {
            var e, n, i, o, r;
            return loading.dismiss(), o = t.point_check_result.result_type, i = t.point_check_result.current_points, r = t.user, n = t.point_check_result.action, "limit_over" === o ? ((e = $("#like-limit-over")).find(".target-thumbnail img").attr("src", r.main_photo_thumb), s(e)) : "points_shortage" === o ? ((e = $("#points-shortage")).find(".current-points").text(i), s(e)) : "consume_points" === o ? ($(".consume-points_like, .consume-points_like-with-message").hide(), "like" === n ? $(".consume-points_like").show() : $(".consume-points_like-with-message").show(), (e = $("#consume-points")).find(".current-points").text(i), e.find(".target-thumbnail img").attr("src", r.main_photo_thumb), e.find(".button-primary").off("click"), e.find(".close-dialog").off("click"), e.find(".button-primary").on("click", function() {
              return a(t)
            }), e.find(".close-dialog").on("click", function() {
              return e.find(".button-primary").off("click")
            }), s(e)) : "ok" === o ? a(t) : void 0
          }
        }), $.ajax(n))
      }, $("body").on("ajax:success", ".new_like", function(t, e) {
        return l = null, $(t.target).parents(".user_actions").replaceWith(e.body), s("#" + e.dialog_id)
      }), $("body").on("submit click", "[data-check-action-id]", function(t, e) {
        if (!e || !e.force) return null != $(t.target).data("checkActionId") ? c(t, "check") : void 0
      }), $("body").on("submit", ".like_with_question", function(t, e) {
        if ((!e || !e.force) && t.target.checkValidity()) return c(t, "complete_question")
      }), t = function() {
        return $(".like-message_textarea").height(window.innerHeight - 420)
      }, isSafari() && new LazyEventListener(window, "resize", t), c = function(i, t) {
        var e, n, o, r;
        switch (i.preventDefault(), i.stopPropagation(), n = $(i.target), t) {
          case "check":
            return l = {
              action: n.data("action"),
              targetId: n.data("checkTargetId"),
              userActions: n.parents(".user_actions")
            }, a(n.data(), function(t) {
              var e, n;
              return t.questions ? (n = "#like-with-questions-" + l.targetId, u($(t.body)), s(l.userActions.find(n))) : t.is_like_message ? (dialog.close(), (e = $("#like-message-" + l.targetId).parent()).appendTo("body"), fullscreenModal.show(e)) : c(i, "complete_question")
            });
          case "complete_question":
            return "like" === l.action ? n.trigger(i.type, {
              force: !0
            }) : (dialog.close(), e = $(
              "#like-message-" + l.targetId).parent(), o = $("#like-with-questions-" + l.targetId + " [data-like-answer-form]"), r = e.find(".create_like_message"), o.removeAttr("required maxlength").hide().appendTo(r), setTimeout(function() {
              return e.appendTo("body"), fullscreenModal.show(e)
            }, 300))
        }
      }, u = function(t) {
        return l.userActions.replaceWith(t), l.userActions = t
      }, $("body").on("change keyup", ".like-message_textarea", function(t) {
        return 30 <= $(t.target).val().length_unicode && $(t.target).val().length_unicode <= 200 ? $(t.target).parents("form").find(".button-primary").attr({
          disabled: !1
        }).removeClass("is-disabled") : $(t.target).parents("form").find(".button-primary").attr({
          disabled: !0
        }).addClass("is-disabled")
      }), o = function(t) {
        return likeEvents.triggerHandler(t)
      }, i = function() {
        var t, e;
        if ("" !== (t = (e = $(".header-label_like-chance-time span:first-child")).text())) return t = parseInt(t) - 1, e.text(t), t <= 0 ? $(".header-label_like-chance-time").hide() : void 0
      }
    })
  }.call(this),
  function() {
    /^\/like_chance_time\/users$/.test(location.pathname) && $(function() {
      var t, e, n, i, o, r, a, s;
      return t = $(".strip-user-card").length, r = 0, s = parseInt($("#remaining-like-count").html()), $(".like-chance-time-users-container").css("height", window.innerHeight), $(document).on("dialog:close", "#like-chance-time-empty-card, #like-chance-time-finished, #clear-like-chance", function() {
        return location.href = "/search"
      }), o = function() {
        return s--, $("#remaining-like-count").text(s)
      }, a = function() {
        return t <= r && 0 < s && dialog.open($("#like-chance-time-empty-card")), r++
      }, e = new SwipeUserCards({
        onCardChanged: function() {
          return a()
        },
        onLike: function() {
          return $(".new_like:first").submit()
        },
        onSkip: function(t, e) {
          return e()
        }
      }), likeEvents.on("likeSent", function() {
        return e.swipeToLike(), o()
      }), i = {
        labelFormat: (n = $("#like-chance-time_remaining-time-label").data()).labelFormat,
        remainingTime: n.remainingTime,
        container: "#like-chance-time_remaining-time-label",
        afterEnd: function() {
          return dialog.open($("#like-chance-time-finished"))
        }
      }, new CountDownTimer(i).start()
    })
  }.call(this),
  function() {
    "/matchmaking_party_lp" === location.pathname && ($(function() {
      return $(".matchmaking-party_agree_input").on("change", function(t) {
        return $(t.target).prop("checked") ? $("#matchmaking-party_submit").addClass("button-primary").removeClass("button-disabled") : $("#matchmaking-party_submit").addClass("button-disabled").removeClass("button-primary")
      }).trigger("change"), $("a#matchmaking-party_submit").on("click", function(t) {
        if (!$(t.target).hasClass("button-primary")) return t.preventDefault()
      })
    }), $(window).on("load", function() {
      return $(".matchmaking-party_agree_input").trigger("change")
    }))
  }.call(this),
  function() {
    /^\/meet_up_events/.test($(location).attr("pathname")) && $(function() {
      return $("[id^=agree]").on("click", function() {
        return $("#agree1").is(":checked") && $("#agree2").is(":checked") && $("#agree3").is(":checked") && $("#agree4").is(":checked") ? ($("[type=submit]").removeClass("is-disabled"), $("[type=submit]").removeAttr("disabled")) : ($("[type=submit]").addClass("is-disabled"), $("[type=submit]").attr("disabled", !0))
      })
    })
  }.call(this),
  function() {
    var e = function(t, e) {
      return function() {
        return t.apply(e, arguments)
      }
    };
    /^\/messages\/(\d+|(daigo_message))/.test($(location).attr("pathname")) && ($(function() {
      var t, e, n, i, o, r, a, s;
      if (0 !== (e = $(".topic-footer_message-form")).length) return function() {
          var t;
          if (0 !== (t = $("#promote")).length) $("textarea").on("focus", function() {
            return $(this).blur(), dialog.open(t)
          }), e.on("submit", function() {
            return dialog.open(t), !1
          }), $(".message_check-content").on("click", function() {
            return dialog.open(t), !1
          })
        }(), i = $(".topic-footer_message-form_photo.is-disabled"), n = $("#cant-post-image"), i.on("click", function() {
          return dialog.open(n)
        }), o = $("#confirm-post-image"), $(".photo-uploader_add").on("encode", function(t) {
          var e;
          return dialog.open(o), e = t.target.files[0], $(t.target).parents(".photo-uploader").data("photoUploader").readDataURL(e, function(t) {
            return o.find("img").attr("src", t)
          })
        }), $(".submit-photo-button").on("click", function() {
          return $(this).prop("disabled", !0), $(".topic-footer_message-form").submit()
        }), o.on("dialog:close", function() {
          return $("#message_form_photo").val("")
        }), r = e.attr("id"), $(window).on("beforeunload", function() {
          return localStorage.setItem(r, e.find("textarea").val())
        }),
        function() {
          var t;
          if (t = localStorage.getItem(r)) "true" === e.find("#success_flg").val() ? localStorage.removeItem(r) : e.find("textarea").val(t)
        }(),
        function() {
          var a, t;
          if (0 !== (t = $("textarea")).length) a = t[0], this.autoExpandHeight = function() {
            var t, e;
            if (e = $(".topic-footer").css("max-height"), t = $(".topic-footer").height(), a.scrollHeight > a.clientHeight && t < parseInt(e)) return a.style.height = a.scrollHeight + "px", adjustFooterStyle()
          }, this.adjustFooterStyle = function() {
            var t, e, n, i, o, r;
            if (r = n = 20, t = 35, e = n * (i = Math.ceil((a.clientHeight - r) / n)) + t, $(".topic-footer").css({
                height: e
              }), $(".messages > div:last").css("margin-bottom", e), 0 < $(".secret-questions_content").length && (o = e + 10, $(".secret-questions_content").css("bottom", o)), 1 < i) return $(".topic-footer_message-form").css("align-items", "flex-end")
          }, t.on("keyup", autoExpandHeight), autoExpandHeight()
        }(),
        function() {
          var t, e;
          e = $("textarea"), t = $(".topic-footer_message-form_submit"), this.changeSubmitStatus = function() {
            return 0 === e.val().length ? (t.removeClass("is-active"), t.addClass("is-disabled"), t.prop("disabled", !0)) : (t.removeClass("is-disabled"), t.addClass("is-active"), t.prop("disabled", !1))
          }, e.on("keyup", function() {
            return changeSubmitStatus()
          }), changeSubmitStatus()
        }(),
        function() {
          var t, e;
          if (0 !== (e = $("[data-js-camp-talk-event]")).length) 0 < (t = $("[data-js-show-camp-talk-event]")).length ? t.on("click", function() {
            return e.show()
          }) : e.show()
        }(), 0 < $("#fireworks").length && (window.onload = function() {
          return new this.Fireworks("fireworks")
        }), $(".talk-advice-icon_wizard").on("click", function() {
          return $(this).css("display", "none")
        }),
        function() {
          var t;
          if (0 < (t = $(".talk-advice-banner_animation")).length) return lottie.loadAnimation({
            container: t[0],
            renderer: "svg",
            loop: !0,
            autoplay: !0,
            path: t.data().path
          })
        }(), a = (s = document.documentElement).scrollHeight - s.clientHeight, window.scroll(0, a), (t = document.querySelector("#talk-room-animation")) ? ($(".messages").addClass("camp-talk-event_bg-christmas"), lottie.loadAnimation({
          container: t,
          autoplay: !0,
          path: t.dataset.animationPath,
          renderer: "svg"
        }).addEventListener("complete", function() {
          return $(".messages").removeClass("camp-talk-event_bg-christmas")
        })) : void 0
    }), this.Fireworks = function() {
      function t(t) {
        this.update = e(this.update, this), this.initCanvas(t), this.settings = {
          gravity: .2,
          damping: .95,
          sparkSize: 3,
          sparkQuantity: 500
        }, this.fire()
      }
      return t.prototype.initCanvas = function(t) {
        return this.canvas = document.getElementById(t), this.canvas.width = 500, this.canvas.height = 400, this.context = this.canvas.getContext("2d"), this.context.fillStyle = "#2D1368", this.context.fillRect(0, 0, this.canvas.width, this.canvas.height)
      }, t.prototype.initSparks = function() {
        var t, e, n, i, o, r, a, s, c, l, u;
        for (i = (n = [1.8, 2, 3])[Math.floor(Math.random() * n.length)], o = n[Math.floor(Math.random() * n.length)], l = this.canvas.width / i, u = this.canvas.height / o, s = ["#723057", "#209520", "#405010"], this.sparkColor = s[Math.floor(Math.random() * s.length)], a = [], e = 0, r = this.settings.sparkQuantity; 0 <= r ? e <= r : r <= e; 0 <= r ? ++e : --e) t = Math.random() * (2 * Math.PI), c = 6 * Math.random(), a.push(this.sparks.push({
          x: l,
          y: u,
          vx: Math.cos(t) * c,
          vy: Math.sin(t) * c
        }));
        return a
      }, t.prototype.fire = function() {
        return this.sparkSize = this.settings.sparkSize, this.sparks = [], this.initSparks(), requestAnimationFrame(this.update)
      }, t.prototype.update = function() {
        var t, e, n, i, o;
        for (e = 0, n = (i = this.sparks).length; e < n; e++)(o = i[e]).x += o.vx, o.y += o.vy + this.settings.gravity, o.vx *= this.settings.damping, o.vy *= this.settings.damping, this.draw(o);
        if (this.context.globalCompositeOperation = "source-over", (t = this.context.createLinearGradient(150, 0, 0, 400)).addColorStop(0, "rgba(45, 19, 104, 0.1)"), t.addColorStop(1, "rgba(81, 8, 128, 0.1)"), this.context.fillStyle = t, this.context.fillRect(0, 0, this.canvas.width, this.canvas.height), this.sparkSize *= .97, !(this.sparkSize < .03)) return requestAnimationFrame(this.update);
        this.fire()
      }, t.prototype.draw = function(t) {
        return this.context.fillStyle = this.sparkColor, this.context.globalCompositeOperation = "lighter", this.context.beginPath(), this.context.arc(t.x, t.y, this.sparkSize, 0, 2 * Math.PI, !0), this.context.fill()
      }, t
    }())
  }.call(this),
  function() {
    "/mypages/edit" === location.pathname && $(function() {
      if (0 !== $("#profile-mission-v201810").length) return $(document).on("ajax:render", "#profile-mission-v201810", function() {
        return navigationDialog.render()
      }), $(document).on("dialog:open", ".profile-mission-v201810-complete-dialog", function() {
        return setTimeout(function() {
          return (new Kamihubuki).init($(".profile-mission-v201810-complete-dialog canvas")[0], {
            generateCount: 50,
            colors: [
              [237, 87, 255, .7],
              [255, 75, 138, .7],
              [255, 180, 0, .7],
              [145, 232, 52, .7],
              [100, 211, 247, .7]
            ]
          })
        }, 300)
      }), window.navigationDialog = {
        container: ".sp-container",
        current: function() {
          return $('.profile-mission-v201810-dialog[data-is-active="1"]')
        },
        render: function() {
          var t, i;
          if (t = $("#profile-mission-v201810-dialogs").data() || {}, (i = t.dialogs || []).forEach(function(t, e) {
              var n;
              if (n = i[e + 1]) return $(t).data("next-dialog-id", n)
            }), 0 < i.length) return this.open(i[0])
        },
        open: function(t) {
          var e, n, i;
          if ((e = $(t)).hasClass("profile-mission-v201810-dialog")) return hideToast(), (n = 0 === $(".profile-mission-v201810-dialog_overlay").length) && $("<div class='profile-mission-v201810-dialog_overlay'><div/>").insertAfter(this.container), this.hideContents(this.current()), n && (e.addClass("is-first"), i = $(window).scrollTop(), $(this.container).css({
            top: -i,
            left: 0,
            right: 0,
            height: Math.max($(window).height(), $(document).height())
          }), $(this.container).addClass("has-profile-mission-v201810-dialog")), e.insertAfter(this.container), e.find(".profile-mission-v201810-dialog_page:first").show(), this.showContents(e);
          dialog.open(e)
        },
        close: function(t) {
          var e, n, i, o, r;
          if (t) {
            if (i = null, o = (e = $(t)).data("next-dialog-id")) {
              if ((n = $(o)).hasClass("profile-mission-v201810-dialog")) return void this.open(n);
              i = n
            }
            return this.hideContents(e), $(".profile-mission-v201810-dialog_overlay").remove(), r = -$(this.container).offset().top, $(this.container).removeClass("has-profile-mission-v201810-dialog").css({
              top: "",
              left: "",
              right: "",
              height: ""
            }), $(window).scrollTop(r), i ? dialog.open(i) : void 0
          }
          this.close(this.current())
        },
        hideContents: function(t) {
          return t.removeClass("is-active").attr("data-is-active", 0), t.find(".profile-mission-v201810-dialog_page").hide(), t.trigger("dialog:afterHideContents")
        },
        showContents: function(t) {
          return t.addClass("is-active").attr("data-is-active", 1), t.trigger("dialog:afterShowContents")
        }
      }, $(document).on("click", "[data-onclick=open-profile-mission-v201810-dialog]", function() {
        var t;
        return t = $(this), navigationDialog.open(t.data("dialog-id"))
      }), $(document).on("click", "[data-onclick=close-profile-mission-v201810-dialog]", function() {
        return navigationDialog.close()
      }), $(document).on("click", "[data-onclick=paging-profile-mission-v201810-dialog]", function() {
        var t;
        return (t = $(this).parents(".profile-mission-v201810-dialog_page")).hide(), t.next().show()
      }), $(document).on("dialog:afterShowContents", ".profile-mission-v201810-dialog", function(t) {
        var e, n, i, o;
        if (0 < (o = $(t.target).find(".graph")).length) return n = o.data(), 0 < o.find("img").length ? setTimeout(function() {
          return o.toggleClass("is-active")
        }, n.delay) : (i = o[0], e = lottie.loadAnimation({
          container: i,
          renderer: "svg",
          loop: !1,
          autoplay: !1,
          path: n.path
        }), setTimeout(function() {
          return o.toggleClass("is-active")
        }, n.delay), setTimeout(function() {
          return e.play()
        }, n.delay + 500)), $(t.target).one("dialog:afterHideContents", function() {
          if (o.toggleClass("is-active"), e) return e.destroy()
        })
      }), $(document).on("click", "[data-onclick=mindset-main-photo-next-button]", function() {
        return navigationDialog.close(), dialog.open($("#select-main-photos"))
      }), $(document).on("click", "[data-onclick=mindset-basic-profile-next-button]", function() {
        return navigationDialog.close(), $("html,body").animate({
          scrollTop: $("#basic-profile").offset().top
        }, 500, "swing")
      }), $(document).on("click", "[data-onclick=mindset-sub-photo-next-button]", function() {
        return navigationDialog.close(), dialog.open($("#select-sub-photos-1"))
      }), $(document).on("click", "[data-onclick=mindset-introduction-next-button]", function() {
        return location.href = $(this).data("href")
      }), $(document).on("click", "[data-onclick=mindset-diagnose-next-button]", function() {
        return location.href = $(this).data("href")
      }), $(document).on("click", "[data-onclick=mindset-konomi-next-button]", function() {
        return location.href = $(this).data("href")
      }), $(window).load(function() {
        return location.hash ? setTimeout(function() {
          return navigationDialog.render()
        }, 500) : navigationDialog.render()
      })
    })
  }.call(this),
  function() {
    "/mypages/edit" === location.pathname && $(function() {
      if (0 !== $("#profile-mission-v202012").length) return $(document).on("ajax:render", "#profile-mission-v202012", function() {
        return navigationDialog.render()
      }), $(document).on("dialog:open", ".profile-mission-v202012-complete-dialog", function() {
        return setTimeout(function() {
          return (new Kamihubuki).init($(".profile-mission-v202012-complete-dialog canvas")[0], {
            generateCount: 50,
            colors: [
              [237, 87, 255, .7],
              [255, 75, 138, .7],
              [255, 180, 0, .7],
              [145, 232, 52, .7],
              [100, 211, 247, .7]
            ]
          })
        }, 300)
      }), window.navigationDialog = {
        container: ".sp-container",
        current: function() {
          return $('.profile-mission-v202012-dialog[data-is-active="1"]')
        },
        render: function() {
          var t, i;
          if (t = $("#profile-mission-v202012-dialogs").data() || {}, (i = t.dialogs || []).forEach(function(t, e) {
              var n;
              if (n = i[e + 1]) return $(t).data().nextDialogId = n
            }), 0 < i.length) return this.open(i[0])
        },
        open: function(t) {
          var e, n, i, o;
          if ((e = $(t)).hasClass("profile-mission-v202012-dialog")) return hideToast(), o = "profile-mission-v202012-dialog_overlay", (n = 0 === $("." + o).length) && ((i = $("<div class='" + o + "'><div/>")).on("touchmove", function(t) {
            return t.preventDefault()
          }), i.insertAfter(this.container)), this.hideContents(this.current()), n && e.addClass("is-first"), e.insertAfter(this.container), e.find(".profile-mission-v202012-dialog_page:first").show(), this.showContents(e);
          dialog.open(e)
        },
        close: function(t) {
          var e, n, i;
          if (t) {
            if (i = null, (e = $(t)).data().nextDialogId) {
              if ((n = $(e.data().nextDialogId)).hasClass("profile-mission-v202012-dialog")) return void this.open(n);
              i = n
            }
            return this.hideContents(e), $(".profile-mission-v202012-dialog_overlay").remove(), i ? dialog.open(i) : void 0
          }
          this.close(this.current())
        },
        hideContents: function(t) {
          return t.removeClass("is-active").attr("data-is-active", 0), t.find(".profile-mission-v202012-dialog_page").hide(), t.trigger("dialog:afterHideContents")
        },
        showContents: function(t) {
          return t.addClass("is-active").attr("data-is-active", 1), t.trigger("dialog:afterShowContents")
        }
      }, $(document).on("click", "[data-onclick=open-profile-mission-v202012-dialog]", function() {
        var t;
        return t = $(this), navigationDialog.open(t.data("dialog-id"))
      }), $(document).on("click", "[data-onclick=close-profile-mission-v202012-dialog]", function() {
        return navigationDialog.close()
      }), $(document).on("click", "[data-onclick=paging-profile-mission-v202012-dialog]", function() {
        var t;
        return (t = $(this).parents(".profile-mission-v202012-dialog_page")).hide(), t.next().show()
      }), $(document).on("dialog:afterShowContents", ".profile-mission-v202012-dialog", function(r) {
        var t;
        if (0 < (t = $(r.target).find(".lottie-anim")).length) return t.each(function(t, e) {
          var n, i, o;
          return i = (e = $(e)).data(), 0 < e.find("img").length ? setTimeout(function() {
            return e.toggleClass("is-active")
          }, i.delay) : (o = e[0], n = lottie.loadAnimation({
            container: o,
            renderer: "svg",
            loop: !1,
            autoplay: !1,
            path: i.path
          }), setTimeout(function() {
            return e.toggleClass("is-active")
          }, i.delay), setTimeout(function() {
            return n.play()
          }, i.delay + 500)), $(r.target).one("dialog:afterHideContents", function() {
            if (e.toggleClass("is-active"), n) return n.destroy()
          })
        })
      }), $(document).on("click", "[data-onclick=mindset-main-photo-next-button]", function() {
        return navigationDialog.close()
      }), $(document).on("click", "[data-onclick=mindset-basic-profile-next-button]", function() {
        return navigationDialog.close(), $("html,body").animate({
          scrollTop: $("#basic-profile").offset().top
        }, 500, "swing")
      }), $(document).on("click", "[data-onclick=mindset-sub-photo-next-button]", function() {
        return navigationDialog.close(), dialog.open($("#select-sub-photos-1"))
      }), $(document).on("click", "[data-onclick=mindset-introduction-next-button]", function() {
        return location.href = $(this).data("href")
      }), $(document).on("click", "[data-onclick=mindset-diagnose-next-button]", function() {
        return location.href = $(this).data("href")
      }), $(document).on("click", "[data-onclick=mindset-konomi-next-button]", function() {
        return location.href = $(this).data("href")
      }), $(window).load(function() {
        return location.hash ? setTimeout(function() {
          return navigationDialog.render()
        }, 500) : navigationDialog.render()
      })
    })
  }.call(this),
  function() {
    $(function() {
      if (0 !== $("#profile-mission-v202012-login-dialog").length) return $("#profile-mission-v202012-login-dialog .profile-mission-v202012-dialog_close").on("click", function() {
        return $(".profile-mission-v202012-dialog_overlay").remove()
      })
    })
  }.call(this),
  function() {
    "/mypages/edit" === location.pathname && $(function() {
      var t, e;
      if (0 < (t = $(".profile-mission-v202012_mission-status_badge")).length) return e = t.data().animationPath, t.toArray().forEach(function(t) {
        return lottie.loadAnimation({
          container: t,
          renderer: "svg",
          loop: !0,
          autoplay: !0,
          path: e
        })
      })
    })
  }.call(this),
  function() {
    $(function() {
      var e, t, n, i;
      if (["/", "/search"].some(function(t) {
          return t === location.pathname
        }) && 0 !== (n = $("#send-like-mission-v201810")).length) return e = n.data(), n.insertAfter(".search-controller_frame_solid-type"), $(".header_banner").remove(), n.find(".js-remaining-likes").text(e.remainingLikes), (i = function() {
        var t;
        return (t = createRemainingTime(e.endAt - (new Date).getTime() / 1e3)).time <= 0 || (n.find(".js-minutes").text(("0" + (t.minute || 0)).slice(-2)), n.find(".js-seconds").text(("0" + (t.second || 0)).slice(-2)), !1)
      })(), t = setInterval(function() {
        if (i()) return clearInterval(t), n.remove()
      }, 1e3), n.css({
        zoom: n.width() / 375,
        visibility: "visible"
      })
    })
  }.call(this),
  function() {
    $(function() {
      var t, e, n, i, o, r;
      if (0 !== (t = $(".send-like-mission-female-dialog-bg")).length) return i = t.find(".page1"), o = t.find(".page2"), r = function(t, e, n, i, o) {
        if (t.toggleClass("is-" + e, !1).toggleClass("is-" + n, !0), o) return setTimeout(o, i)
      }, e = function(t, e, n) {
        return r(t, "idle", "enter", e, n)
      }, n = function(t, e, n) {
        return r(t, "enter", "exit", e, n)
      }, $(window).on("load", function() {
        return setTimeout(function() {
          return e(i)
        }, 300)
      }), i.find("button").on("click", function() {
        return n(i, 500, function() {
          return i.remove(), e(o)
        })
      }), o.find("button").on("click", function() {
        return n(o, 500, function() {
          return o.remove(), n(t, 500, function() {
            return t.remove()
          })
        })
      })
    })
  }.call(this),
  function() {
    /^\/products\/monthly_subscriptions/.test($(location).attr("pathname")) && $(function() {
      return $(".plan-212-btn").click(function(t) {
        return t.preventDefault(), t.stopPropagation(), dialog.open($("#recommend-3months"))
      })
    })
  }.call(this),
  function() {
    /^\/mypages/.test($(location).attr("pathname")) && $(function() {
      var t, e, n, i, o;
      if ($(document).on("ajax:render", "#basic-profile", function() {
          return i()
        }), (i = function() {
          if (0 < $(".profiles").length && ($("select").each(function(t, e) {
              var n;
              if ("0" === (n = $(e)).val()) return n.addClass("is-blank")
            }), $(".form-link-cell").each(function(t, e) {
              var n;
              if ("\u672a\u8a2d\u5b9a" === (n = $(e)).text()) return n.addClass("is-blank")
            }), $('[data-js="submit"]').change(function(t) {
              var e;
              return "0" === (e = $(t.target)).val() ? e.addClass("is-blank") : e.removeClass("is-blank")
            })), 0 < $(".new_profile_languages_form").length) return $(".new_profile_languages_form").find("select").each(function(t, e) {
            return "" === e.value && $(e).addClass("is-blank"), $(e).change(function(t) {
              return "" === t.target.value ? $(t.target).addClass("is-blank") : $(t.target).removeClass("is-blank")
            })
          })
        })(), 0 < $(location).attr("hash").length && (n = 110, 0 < $($(location).attr("hash")).length && (o = $($(location).attr("hash")).offset().top - n, setTimeout(function() {
          return $(window).scrollTop(o)
        }, 100)), "#show-dialog-select-main-photos" === $(location).attr("hash") && (t = $("#select-main-photos"), dialog.open(t))), 0 < $(".question").length && $("select").each(function(t, e) {
          var n;
          return (n = $(e)).change(function(t) {
            return "-1" === (n = $(t.target)).val() ? (n.addClass("is-blank"), n.parents(".question").find(".question_required").hide(), n.parents(".question").find(".question_required :checkbox").attr("checked", !1)) : (n.removeClass("is-blank"), n.parents(".question").find(".question_required").show()), "0" === n.val() ? n.parents(".question").find(".question_body").show() : (n.parents(".question").find(".question_body").hide(), n.parents(".question").find(".question_body :input").val("").change())
          }), n.change()
        }), 0 < $(".notifications").length && ($(".notification[data-remote]").on("ajax:before", function(t) {
          if (!$(t.target).hasClass("is-unread")) return !1
        }).on("ajax:success", function(t) {
          return $(t.target).removeClass("is-unread")
        }), $("#mark-read-all-notifications a[data-remote]").on("ajax:before", function() {
          if (0 === $(".notification.is-unread").length) return dialog.close(), !1
        }).on("ajax:success", function() {
          return dialog.close(), $(".notification.is-unread").removeClass("is-unread")
        })), $(document).on("ajax:success", "#new_profile_basic_form", function(t, e) {
          var n, i, o, r, a;
          if (null != e.partial) {
            for (o in a = [], r = e.partial) n = r[o], i = "#" + o, $(i).replaceWith(n), a.push($(i).trigger("ajax:render"));
            return a
          }
        }), 0 < $(".konomi-comment-toast").length && customToast($(".konomi-comment-toast"), 2500), 0 < $(".mypage-profile_check-button_badge").length && (e = $(".mypage-profile_check-button_badge"), lottie.loadAnimation({
          container: e[0],
          renderer: "svg",
          loop: !0,
          autoplay: !0,
          path: e.data().path
        })), 0 < $(".my-profile-mission-balloon").length && (e = $(".my-profile-mission-balloon"), lottie.loadAnimation({
          container: e[0],
          renderer: "svg",
          loop: !0,
          autoplay: !0,
          path: e.data().path
        })), 0 < $(".mypage_doctor-notification_mission-countdown").length) return e = $(".mypage_doctor-notification_mission-countdown"), new CountDownTimer({
        labelFormat: "unit",
        container: e,
        remainingTime: e.data().remainingTime,
        afterEnd: function() {
          return $(".mypage_doctor-notification-container").remove()
        }
      }).start()
    })
  }.call(this),
  function() {
    "/mypages/agree_downgrade" !== location.pathname && "/mypages/agree_cancel_vip" !== location.pathname || $(function() {
      return $("#agree").on("change input", function() {
        var t;
        return t = $(this).prop("checked"), $(":submit").toggleClass("is-disabled", !t).toggleClass("button-error", t).prop("disabled", !t)
      })
    })
  }.call(this),
  function() {
    $(function() {
      var e, t;
      if (0 !== $("#nickname-alias-dialog").length) return e = function() {
        var t, e, n;
        return n = (t = $(".js-nickname-alias-input")).data().maximum, t.data().minimum <= (e = t.val().length) && e <= n
      }, t = function() {
        var t;
        return t = !e(), $(".js-nickname-alias-submit").prop("disabled", t).toggleClass("is-disabled", t)
      }, $(".js-nickname-alias-input").on("keyup", t)
    })
  }.call(this),
  function() {
    $(function() {
      return $(document).on("ajax:success", ".js-open-message-read-receipt-dialog", function(t, e) {
        var n, i, o, r;
        if (i = "exchange-message-read-receipt-dialog-container", 0 === (n = $("#" + i)).length && ($(document.body).append("<div id='" + i + "'>"), n = $("#" + i)), r = n.empty().append(e).find(".dialog"), dialog.open(r), "message-read-receipt-explanation-dialog" === r[0].id) return o = $(".message-read-receipt-explanation-dialog_menu"), lottie.loadAnimation({
          container: o[0],
          loop: !1,
          autoplay: !0,
          path: o.data().animationPath
        })
      })
    })
  }.call(this),
  function() {
    /^\/users\/\d+\/permissions/.test($(location).attr("pathname")) && $(function() {
      var t;
      return (t = function() {
        return "0" === $("#permission_form_action_0, #permission_form_action_1").filter(":checked").val() ? ($(".with-blocking").hide(), $(".with-hiding").show()) : ($(".with-blocking").show(), $(".with-hiding").hide())
      })(), $("#permission_form_action_0, #permission_form_action_1").change(function() {
        return t()
      }), $("#new_permission_form").submit(function(t) {
        var e;
        if (e = "\u304a\u76f8\u624b\u3068\u4eca\u5f8c\u4e00\u5207\u306e\u30b3\u30f3\u30bf\u30af\u30c8\u304c\u53d6\u308c\u306a\u304f\u306a\u308a\u307e\u3059\u304c\u3088\u308d\u3057\u3044\u3067\u3059\u304b\uff1f", $("#permission_form_action_1").is(":checked") && !confirm(e)) return t.preventDefault(), t.stopPropagation()
      })
    })
  }.call(this),
  function() {
    $(function() {
      var t;
      if (0 < $(".photo-list").length && ($(".photo-list").slick({
          arrows: !1,
          dots: !0,
          infinite: !1
        }), "" !== location.hash)) return t = parseInt(location.hash.substr(1)), $(".photo-list").slick("slickGoTo", t)
    })
  }.call(this),
  function() {
    /^\/products\/points/.test($(location).attr("pathname")) && $(function() {
      return $(".purchase-point-button[data-point]").click(function(t) {
        var e, n, i;
        return t.preventDefault(), t.stopPropagation(), i = "IMG" === t.target.tagName ? $(t.target).parents("button") : $(t.target), n = i.parents("form"), (e = $("#purchase-points-confirm")).find(".point").text(i.data("point")), e.find(".money").text(i.data("money")), e.find(".button-primary").off("click"), e.find(".button-primary").on("click", function() {
          return dialog.close(), n.submit()
        }), dialog.open(e)
      })
    })
  }.call(this),
  function() {
    "/products_list" === location.pathname && $(function() {
      var e;
      return e = function(t) {
        var e, n;
        return "male" === t ? (n = "male", e = "female") : (n = "female", e = "male"), $(".header-item." + e).removeClass("is-active"), $("#" + e).removeClass("is-active"), $(".header-item." + n).addClass("is-active"), $("#" + n).addClass("is-active"), $(".report-text").dotdotdot({
          wrap: "letter"
        })
      }, $(document).on("click", ".header-item", function() {
        var t;
        return t = $(this).data("gender"), e(t)
      })
    })
  }.call(this),
  function() {
    $(function() {
      return $(".profile-photos_image").click(function(t) {
        var e, n;
        return e = (n = $(t.target)).parents(".profile-photos_item"), $(".profile-photos_item.is-selected").removeClass("is-selected"), e.addClass("is-selected"), $(".profile-thumb_photo_img").attr("src", n.attr("src")), $(".profile-thumb_photo_img").data("order", e.data("order"))
      }), $(".profile-thumb_photo_img[data-preview]").click(function(t) {
        var e, n;
        return n = $(t.target).data("preview"), e = $(t.target).data("order"), location.href = n + "#" + e
      }), $(".open-event-dialog").on("click", function(t) {
        var e, n;
        return t.preventDefault(), n = $(this).data("event-url"), $("#event-entry-url").attr("href", n), e = $("#join-user-event"), dialog.open(e)
      })
    })
  }.call(this),
  function() {
    $(function() {
      var e;
      if (0 < $(".category-nav-slim").length) return $(".category-nav-slim_label").on("click", function() {
        var t;
        return $(".category-nav-slim_label").removeClass("is-selected"), $(this).addClass("is-selected"), 99 === (t = $(this).data("category-id")) ? ($("[data-group-category-id]").css("display", "block"), e($(".group-card"))) : ($("[data-group-category-id]").css("display", "none"), $("[data-group-category-id=" + t + "]").css("display", "block"), e($(".group-card[data-group-category-id=" + t + "]")))
      }), e = function(t) {
        return t.each(function(t, e) {
          return (t + 1) % 3 == 2 ? $(e).css("margin", "0 15px 20px") : $(e).css("margin", "0 0 20px")
        })
      }
    })
  }.call(this),
  function() {
    "/profile_photo_checker" === location.pathname && $(function() {
      var n, t, e, i, o, r;
      return r = function(t) {
          return $(".profile-photo-checker_contents").empty().append(t)
        }, n = function() {
          return $(":submit").removeAttr("disabled"), $(".is-disabled").removeClass("is-disabled")
        },
        function() {
          var t;
          return t = $(".profile-photo-checker_header_animation"), lottie.loadAnimation({
            container: t[0],
            renderer: "svg",
            loop: !0,
            autoplay: !0,
            path: t.data().path
          })
        }(), $("body").on("click", ".js-profile-photo-checker_upload-button-box", function(t) {
          if ("over_limit_count" === $(".js-profile-photo-checker-data").data().error) return t.preventDefault(), dialog.open($("#over-limit-count-dialog"))
        }), i = function() {
          var t;
          return $(".js-profile-photo-checker-uploading").addClass("is-active"), (t = $(".js-profile-photo-checker_uploading-animation")).empty(), lottie.loadAnimation({
            container: t[0],
            renderer: "svg",
            loop: !0,
            autoplay: !0,
            path: t.data().path
          }), $(".profile-photo-checker_upload-button").addClass("is-disabled")
        }, e = function() {
          var t, e, n;
          if (0 < (t = $("#upload-form input[type=file]"))[0].files.length) return i(), n = t.parents("form")[0], e = new FormData(n), $.ajax({
            url: n.action,
            type: n.method,
            data: e,
            processData: !1,
            contentType: !1
          }).done(function() {
            return window.scrollTo(0, 0), location.reload()
          }).fail(function(t) {
            var e;
            return 500 === t.status || 0 === t.status ? o(!0) : (e = 2e3, 413 === t.status ? toast("\u30d5\u30a1\u30a4\u30eb\u30b5\u30a4\u30ba\u304c\u5927\u304d\u3059\u304e\u307e\u3059", e) : toast("\u30a8\u30e9\u30fc\u304c\u767a\u751f\u3057\u307e\u3057\u305f\u3002\u3082\u3046\u4e00\u5ea6\u304a\u8a66\u3057\u304f\u3060\u3055\u3044", e), setTimeout(function() {
              return location.reload()
            }, e))
          })
        }, $("#upload-form input[type=file]").on("change", e), $(".js-profile-photo-checker-upload-error-close").on("click", function() {
          return location.reload()
        }), $(".js-profile-photo-checker-upload-error-retry").on("click", function() {
          return o(!1), e()
        }), o = function(t) {
          return $(".js-profile-photo-checker-upload-error").toggleClass("is-active", t)
        }, $("body").on("click", ".js-open-main-photo-dialog", function() {
          var t, e;
          return t = $(this).data("userPhotoStockId"), (e = $("#set-main-photo-dialog")).find("[name=user_photo_stock_id]").val(t), dialog.open(e)
        }), $("body").on("click", ".js-open-delete-dialog", function() {
          var t, e;
          return t = $(this).data("userPhotoStockId"), (e = $("#delete-photo-dialog")).find("[name=user_photo_stock_id]").val(t), dialog.open(e)
        }), t = function(t, e) {
          return dialog.close(), $("body").css({
            height: "auto"
          }), r(e.partial.contents), n()
        }, $("body").on("ajax:success", "#set-main-photo-form", t), $("body").on("ajax:success", "#delete-photo-form", t), $("body").on("ajax:success", ".js-sort-form", t)
    })
  }.call(this),
  function() {
    "/profile_photo_checker/select_sub_photo" === location.pathname && $(function() {
      return $("input[type=radio]").on("change", function() {
        if (0 <= $("input[type=radio]:checked").length) return $(":submit").removeAttr("disabled").removeClass("is-disabled")
      })
    })
  }.call(this),
  function() {
    $(function() {
      var n, e, i, o, r, a, s, c;
      if (/^\/likes\/received/.test($(location).attr("pathname"))) return n = !0, r = function(t, e) {
        if (n) return n = !1, $.ajax({
          type: "post",
          url: "/likes/" + t + "/not_good",
          data: {
            like_decline: {
              target_id: t
            }
          },
          success: function(t) {
            if (t.result.like_filter_appeal) return dialog.open(o())
          }
        }).always(function() {
          return n = !0, e()
        })
      }, a = function(t, e) {
        if (n) return n = !1, $.ajax({
          type: "post",
          url: "/likes/" + t + "/acceptance",
          data: {
            like_thanks: {
              target_id: t
            }
          }
        }).always(function() {
          return n = !0, e()
        })
      }, s = function(t) {
        var e;
        if (void 0 !== t.attr("data-show-like-message")) return e = $("#like-message-" + t.data().userId), dialog.open(e, {
          overlayStyleClass: e.data("overlay-style-class")
        })
      }, e = function() {
        return location.reload()
      }, i = function() {
        return $(".received-card").length
      }, c = function() {
        return $("#received-card_num").html(i())
      }, o = function() {
        return $("#dialog-vip-option-like-filter")
      }, new SwipeUserCards({
        onThankYou: function(t, e) {
          return a(t, e)
        },
        onSkip: function(t, e) {
          return r(t, e)
        },
        onCardChanged: function(t) {
          return c(), 0 < i() ? s(t) : "none" !== o().css("display") ? o().find(".close-dialog").click(e) : e()
        }
      })
    })
  }.call(this),
  function() {
    /^\/recommend_plan_lp/.test($(location).attr("pathname")) && $(function() {
      return setTimeout(function() {
        return $(".recommend-plan_loading-dialog").fadeOut()
      }, 3e3)
    })
  }.call(this),
  function() {
    (/^\/search/.test($(location).attr("pathname")) || /^\/campaigns\/search/.test($(location).attr("pathname")) || /^\/groups\/search/.test($(location).attr("pathname")) || /^\/likes\/search\/edit/.test($(location).attr("pathname"))) && $(function() {
      var t, e, n, i, o, r, a;
      if ((r = $(".user-card-small.is-basic")).on("touchstart", function(t) {
          return $(t.target).parents(".user-card-small.is-basic").addClass("is-touching")
        }), r.on("touchend", function() {
          return setTimeout(function() {
            return $(".is-touching").removeClass("is-touching")
          }, 100)
        }), 0 !== $("#search-navigation").length) return $.get("/search/prefectures_and_cities", function(t) {
          return $("#search_prefectures-and-cities").replaceWith(t), $(".form-search-accordion-link").on("click", function() {
            return $(this).find(".form-search-accordion-link_icon").toggleClass("is-close"), $(this).parents(".type-tap-area").next(".form-search-accordion").slideToggle("fast")
          }), $(".close-addresses-dialog, .open-addresses-dialog").on("click", function() {
            return $(".addresses-overlay").fadeToggle()
          }), $(".close-hometown-dialog, .open-hometown-dialog").on("click", function() {
            return $(".hometown-overlay").fadeToggle()
          }), $(".close-work-location-dialog, .open-work-location-dialog").on("click", function() {
            return $(".work-location-overlay").fadeToggle()
          }), $(".accordion-item").on("click", function() {
            var t, e, n, i;
            return e = (t = $(this).parents(".form-search-accordion")).find('input[type="checkbox"]').length, i = t.find('input[type="checkbox"]:checked').length, n = t.prev(".type-tap-area").find('input[type="checkbox"]'), 0 === i ? (n.removeClass("is-selected-icon"), n.prop("checked", !1)) : (e === i ? n.removeClass("is-selected-icon") : n.addClass("is-selected-icon"), n.prop("checked", !0))
          }), $(".has-accordion-link").on("click", function() {
            var t;
            return (t = $(this).find('input[type="checkbox"]')).removeClass("is-selected-icon"), $(this).parents(".type-tap-area").next(".form-search-accordion").find('input[type="checkbox"]').prop("checked", t.prop("checked"))
          })
        }), $(document).on("click", 'input[type="checkbox"]', function(t) {
          var e, n;
          return e = (n = (r = $(t.target)).parents("[data-parent]")).find(
            'input[type="checkbox"][value="0"]'), "0" === r.attr("value") ? (n.find('input[type="checkbox"]').prop("checked", !1), r.prop("checked", !0)) : 0 === n.find("input:checked").length ? e.prop("checked", !0) : e.prop("checked", !1), !0
        }), $(document).on("click change", ".form-search-checkbox > input", function() {
          var t, n, e;
          if (e = $(this).parents(".type-multiple_body").data("itemName"), t = $(this).parents(".type-multiple_body").find('input[type="checkbox"]:checked ').not(".not-fill-in"), n = [], t.each(function(t, e) {
              return n.push($(e).next("label").text())
            }), $("span[data-fill-in=" + e + "]").text(n), 0 < t.length) return "0" === t[0].value ? $("span[data-fill-in=" + e + "]").removeClass("is-active") : $("span[data-fill-in=" + e + "]").addClass("is-active")
        }), $('input[type="text"]').focus(function() {
          if (isMobile()) return $("#search-navigation").hide()
        }), $('input[type="text"]').blur(function() {
          if (isMobile()) return $("#search-navigation").show()
        }), a = function(t) {
          var e;
          return e = t ? "show" : "hide", $("#back-to-top").animate({
            opacity: e
          }, 300), !0
        }, onlazy("scroll", function() {
          return a(0 < $(window).scrollTop())
        }), e = function(t) {
          return t.find('input[type="checkbox"]').prop("checked", !1), t.find('input[type="checkbox"][value="0"]').prop("checked", !0).change(), t.find('input[type="radio"][value="false"]').prop("checked", !0).change(), t.find("select").val(0).change(), t.find('input[type="text"]').val(null).change()
        }, $(".remove-all-conditions").click(function() {
          return e($(document)), t(), toast("\u691c\u7d22\u6761\u4ef6\u3092\u30ea\u30bb\u30c3\u30c8\u3057\u307e\u3057\u305f"), !0
        }),
        function(t) {
          var e;
          return 0 < (e = t.find('input[type="checkbox"]:checked')).length && !e.is('[value="0"]')
        },
        function(t) {
          return t.find("select").is(function() {
            return "0" !== this.value
          })
        },
        function(t) {
          return t.find('input[type="text"]').is(function() {
            return 0 < this.value.length
          })
        }, $("[data-available=false]").each(function(t, e) {
          var n;
          switch (e.tagName) {
            case "INPUT":
              return $(e).attr("readonly", "readonly"), $(e).click(function(t) {
                return t.preventDefault(), dialog.open($("#platinum-search"))
              });
            case "OPTION":
              if ((n = $(e).parents("select")).data("platinum-handle")) return;
              return n.change(function(t) {
                if ($(t.target).find(":selected").is("[data-available=false]")) return t.preventDefault(), $(t.target).find("option:first").attr("selected", "selected"), dialog.open($("#platinum-search"))
              }), n.data("platinum-handle", "true")
          }
        }), $("#search_form_is_good_match").on("click", function(t) {
          if ("false" === $(".is-good-match").attr("data-done_bigfive")) return t.preventDefault(), $(t.target).prop("checked", !1).triggerHandler("change"), dialog.open($("#recommend-bigfive"))
        }), $(".close-affinities-dialog, .open-affinities-dialog").on("click", function() {
          return t(), $(".affinities-overlay").fadeToggle()
        }), 0 < (o = $(".select-affinities_categories-tab")).length && new LazyEventListener($("#select-affinities")[0], "scroll", function() {
          return 110 < $("#select-affinities").scrollTop() ? o.addClass("is-fixed") : o.removeClass("is-fixed")
        }), $(".select-affinities_clear_action").on("click", function() {
          return $(".affinities-id").prop("checked", !1), $(".affinities-kind").prop("checked", !1), t()
        }), n = $("#affinity-img-blank").attr("src"), i = $("#affinity-img-selected").attr("src"), $(".affinities-id").on("change", function() {
          if ($(this).prop("checked") && 30 < $(".affinities-id:checked").length) return $(this).prop("checked", !1), dialog.open($("#over-affinity-count"))
        }), (t = function() {
          var t, e;
          return t = (e = $(".affinities-id:checked")).length, $(".affinities-kind").prop("checked", !1), e.each(function(t, e) {
            return $(e).prev().prop("checked", !0)
          }), t <= 0 ? ($(".affinities_count").removeClass("is-active").text("\u672a\u8a2d\u5b9a"), $(".affinities_count").next(".icon-arrow-right").removeClass("is-enabled"), $(".form-affinity-selected").attr("src", n), $(".form-affinity-selected_text").text("")) : t <= 4 ? ($(".affinities_count").addClass("is-active").text(t + "\u500b\u8a2d\u5b9a\u4e2d"), $(".affinities_count").next(".icon-arrow-right").addClass("is-enabled"), $(".form-affinity-selected").attr("src", n), $(".form-affinity-selected_text").text(""), e.each(function(t, e) {
            var n;
            return n = $(e).next().children("img").attr("src"), $(".form-affinity-selected").eq(t).attr("src", n)
          })) : ($(".affinities_count").addClass("is-active").text(t + "\u500b\u8a2d\u5b9a\u4e2d"), $(".affinities_count").next(".icon-arrow-right").addClass("is-enabled"), $(".form-affinity-selected").last().attr("src", i), $(".form-affinity-selected_text").html("\u305d\u306e\u4ed6<br>" + (t - 4) + "\u500b"), e.each(function(t, e) {
            var n;
            if (!(4 <= t)) return n = $(e).next().children("img").attr("src"), $(".form-affinity-selected").eq(t).attr("src", n)
          }))
        })(), $(".close-search-by-histories-dialog, .open-search-by-histories-dialog").on("click", function() {
          return $(".search-by-histories-overlay").fadeToggle(), $(".search-form-history-content").dotdotdot({
            watch: "window",
            wrap: "letter",
            lastCharacter: {
              remove: [" ", ",", ";", ".", "!", "?", "\u3000", "\u3001", "\uff1b", "\u3002", "\uff01", "\uff1f", "\u30fb", "\u2026"]
            }
          })
        }), $(".close-habitus-dialog, .open-habitus-dialog").on("click", function() {
          return $(".habitus-overlay").fadeToggle()
        }), $(".close-marriage-time-dialog, .open-marriage-time-dialog").on("click", function() {
          return $(".marriage-time-overlay").fadeToggle()
        }), $(".close-want-children-dialog, .open-want-children-dialog").on("click", function() {
          return $(".want-children-overlay").fadeToggle()
        }), $(".close-children-dialog, .open-children-dialog").on("click", function() {
          return $(".children-overlay").fadeToggle()
        }), $(".close-marital-history-dialog, .open-marital-history-dialog").on("click", function() {
          return $(".marital-history-overlay").fadeToggle()
        }), $(".close-jobs-dialog, .open-jobs-dialog").on("click", function() {
          return $(".jobs-overlay").fadeToggle()
        }), $(".close-educations-dialog, .open-educations-dialog").on("click", function() {
          return $(".educations-overlay").fadeToggle()
        }), $(".close-drinkings-dialog, .open-drinkings-dialog").on("click", function() {
          return $(".drinkings-overlay").fadeToggle()
        }), $(".close-holidays-dialog, .open-holidays-dialog").on("click", function() {
          return $(".holidays-overlay").fadeToggle()
        }), $(".close-bloods-dialog, .open-bloods-dialog").on("click", function() {
          return $(".bloods-overlay").fadeToggle()
        }), $(".close-housemates-dialog, .open-housemates-dialog").on("click", function() {
          return $(".housemates-overlay").fadeToggle()
        }), $(".close-nth-children-dialog, .open-nth-children-dialog").on("click", function() {
          return $(".nth-children-overlay").fadeToggle()
        }), $(".close-houseworks-dialog, .open-houseworks-dialog").on("click", function() {
          return $(".houseworks-overlay").fadeToggle()
        }), $(".close-meet-timings-dialog, .open-meet-timings-dialog").on("click", function() {
          return $(".meet-timings-overlay").fadeToggle()
        }), $(".close-first-date-payments-dialog, .open-first-date-payments-dialog").on("click", function() {
          return $(".first-date-payments-overlay").fadeToggle()
        }), $(".close-languages-dialog, .open-languages-dialog").on("click", function() {
          return $(".languages-overlay").fadeToggle()
        }), $(".type-block_selected select").change(function() {
          return 0 < $(this).val() ? $(this).addClass("is-active") : $(this).removeClass("is-active")
        }), $('input[type="checkbox"]:checked, select, input[type="text"], input[type="radio"]').change(), $("body").scrollTop(1), $("body").scrollTop(0)
    })
  }.call(this),
  function() {
    /^\/messages\/[0-9]+\/secret_questions/.test($(location).attr("pathname")) && $(function() {
      var t, e, i, n;
      if (i = function(t, e) {
          var n;
          return (n = $(t).val().length_unicode) < 5 ? $(e).prop("disabled", !0).addClass("is-disabled") : 250 < n ? $(e).prop("disabled", !0).addClass("is-disabled") : $(e).prop("disabled", !1).removeClass("is-disabled")
        }, $(".secret-question_answer-textarea").on("keyup", function(t) {
          var e, n;
          return e = (n = $(t.target)).parents(".secret-question_dialog_form").next(".secret-question_dialog_submit").children("input"), i(n, e)
        }), $(".secret-question_unlock").on("click", function() {
          return $(this).css("opacity", "0").css("pointer-events", "none"), localStorage.setItem(e(), $(this).data("unlockNo"))
        }), e = function() {
          return "secret_question_" + n()
        }, n = function() {
          return location.pathname.match(/\d+/)[0]
        }, function() {
          var t;
          if (0 !== $(".secret-questions_list").length) t = localStorage.getItem(e()), $("#unlock_status").val(t), $("[data-unlock-no=" + t + "]").click()
        }(), 0 < $(".secret-question_heading").length) return t = function(t) {
        var e;
        if (0 < (e = $(window).scrollTop() / $(window).height()) && e <= 1.6) return $(t).css("background-position", "0 " + (100 - 60 * e) + "%")
      }, $(window).on("scroll", function() {
        if (!isAndroidUnder4_4()) return t($(".secret-question_parallax-bg")), t($(".secret-question_heading"))
      })
    })
  }.call(this),
  function() {
    $(function() {
      if (0 < $("#select-partner").length) return $("#select-partner").on("click", "a", function() {
        return $(this).append($(".selected-partner")), $(".selected-partner").show()
      })
    })
  }.call(this),
  function() {
    /^\/sign_up$/.test($(location).attr("pathname")) && $(function() {
      var u, i;
      return u = function() {
        return [0, 1, 2, 3, 4, 5, 6, 7].reduce(function(t, e, n) {
          var i;
          return 0 < (i = $("#sign_up_form_birthday_" + n)).length && t.push(i.val()), t
        }, [])
      }, i = function() {
        var t, e, n, i, o, r, a, s, c, l;
        return c = [], s = $("#sign_up_form_nickname"), c.push(0 < s.val().length), 0 < (r = $("#sign_up_form_gender")).length && c.push(0 < r.val().length), 0 < (n = u()).length && (l = n.slice(0, 4).join(""), a = ("00" + n.slice(4, 6).join("")).substr(-2), i = ("00" + n.slice(6, 8).join("")).substr(-2), 4 !== l.length ? c.push(!1) : c.push(!isNaN(Date.parse(l + "-" + a + "-" + i)))), 0 < (t = $("#sign_up_form_address")).length && c.push(0 < t.val().length), 0 < (e = $("#sign_up_form_address_city")).length && c.push(0 < e.val().length), 0 < (o = $("#sign_up_form_email")).length && c.push(0 < o.val().length), c.push($("#sign_up_form_agree_age").prop("checked")), c.push($("#sign_up_form_agree_terms").prop("checked")), c.every(function(t) {
          return t
        }) ? ($("[type=submit]").removeClass("is-disabled"), $("[type=submit]").removeAttr("disabled")) : ($("[type=submit]").addClass("is-disabled"), $("[type=submit]").attr("disabled", !0))
      }, $(".sign-up_birthday_input-items").on("click", function() {
        if (0 === u().join("").length) return $("#sign_up_form_birthday_0").focus()
      }), $(".sign-up_birthday input").on("keydown", function(t) {
        var e, n;
        if (46 === (e = t.keyCode) || 8 === e) return 0 === (n = $(t.target)).nextAll("input:first").length && 0 < n.val().length ? n.focus() : n.prev().focus()
      }).on("focus", function(t) {
        return "sign_up_form_birthday_0" !== t.target.id && 0 === u().join("").length ? $("#sign_up_form_birthday_0").focus() : ($(t.target).val(""), i())
      }).on("input", function(t) {
        var e, n;
        if (e = (e = (e = (n = $(t.target)).val() || "").replace(/[\uff10-\uff19]/g, function(t) {
            return String.fromCharCode(t.charCodeAt(0) - 65248)
          })).replace(/[^0-9]/g, ""), n.val(e), i(), 0 < n.val().length) return n.nextAll("input:first").focus()
      }), $("input, select").on("change input", i), $("select").on("change input", function(t) {
        var e;
        return (e = $(t.currentTarget)).find("option").first().is(":selected") ? e.addClass("is-prompt-selected") : e.removeClass("is-prompt-selected")
      }), $("body").on("change", "#sign_up_form_agree_age", i()), $("body").on("change", "#sign_up_form_agree_terms", i()), i()
    })
  }.call(this),
  function() {
    /^\/sign_up_guide\/(daigo_choice_users)$/.test(location.pathname) && $(function() {
      var e, n, i, o, r, a, t, s;
      return e = $(".strip-user-card").length, n = !(r = 0), t = $(".daigo-choice-users-actions:not(.guidance-dummy)"), scrollStop(), t.css("display", "none"), (s = $(".daigo-choice-users-guidance")).css("display", "block"), s.css("animation", "guidance-daigo-choice-users-fade-in 0.3s 0.5s ease backwards"), $(".daigo-choice-users-guidance-skip, .daigo-choice-users-guidance-like").css({
        animation: "guidance-daigo-choice-users-balloon-popup 0.3s 1.1s ease-out backwards"
      }), s.on("click", function() {
        return s.remove(), t.css("display", "block"), cancellScrollStop()
      }), $(".daigo-choice-users-container_cross-button").on("click", function() {
        return dialog.open($("#daigo-choice-users-confirm"))
      }), $("#daigo-choice-users-complete").on("dialog:close", function() {
        return location.href = "/search"
      }), a = function(t, e) {
        if (n) return n = !1, $.ajax({
          type: "post",
          url: "/likes",
          data: {
            like: {
              target_id: t,
              from_id: 1
            }
          }
        }).always(function() {
          return n = !0, e()
        })
      }, o = function() {
        var t;
        return (t = parseInt($("#card-num").html())) < e ? $("#card-num").text(t + 1) : dialog.open($("#daigo-choice-users-complete"))
      }, i = function(t) {
        return $(".daigo-choice-users-container").css({
          background: "linear-gradient(145deg, " + t.data("themeColor") + " 0%, #FFFFFF 20%) no-repeat 0% 0%/100% 100%"
        })
      }, new SwipeUserCards({
        onCardChanged: function(t) {
          return 0 < r && (o(), i(t)), r++
        },
        onLike: function(t, e) {
          return a(t, e)
        },
        onSkip: function(t, e) {
          return e()
        }
      })
    })
  }.call(this),
  function() {
    /^\/sign_up_guide\/(intro|intro_search|outro)$/.test(location.pathname) && $(function() {
      var n, i, o, r;
      return new ScaleFitContainer(".sp-container", ".sign-up-guide_slide-container", 375, 667).addResizeListener(window), o = function(t) {
        var e;
        if (0 < (e = t.find("[data-animation]")).length) return setTimeout(function() {
          return lottie.loadAnimation({
            container: e[0],
            renderer: "svg",
            loop: !1,
            autoplay: !0,
            path: e.data().path
          })
        }, 500)
      }, n = null, r = 1e3, i = function() {
        var t, e;
        if (e = (new Date).getTime(), (null === n || r < e - n) && (n = e, 0 !== (t = $(".sign-up-guide_slide:first")).length)) return "block" === t.css("display") && t.remove(), 0 < (i = $(".sign-up-guide_slide:first").fadeIn()).length ? o(i) : ($("body").fadeOut(), location.href = $(this).data("nextUrl"))
      }, $(".sign-up-guide_slide-container").on("click", i), $(window).on("load", i)
    })
  }.call(this),
  function() {
    /^\/sign_up_guide\/user\/\d+$/.test(location.pathname) && $(function() {
      var t, n;
      return $(".sign-up-guide-user .user-detail-container").css({
        height: $(window).height()
      }), n = function() {
        return toast("\u30a8\u30e9\u30fc\u304c\u767a\u751f\u3057\u307e\u3057\u305f\u3002<br>\u5225\u306e\u304a\u76f8\u624b\u3067\u304a\u8a66\u3057\u304f\u3060\u3055\u3044"), setTimeout(function() {
          return history.back()
        }, 2e3)
      }, t = $("form:first"), $("body").on("ajax:success", t, function(t, e) {
        return e.success ? location.href = e.location : n()
      }).on("ajax:error", t, function() {
        return n()
      })
    })
  }.call(this),
  function() {
    /^\/(sign_up_photo|sign_up_sub_photo)\//.test($(location).attr("pathname")) && $(function() {
      var o, t, e;
      if ($("[data-js=preview-photo]"), (o = $("[data-js=input-photo]")).on("change", function() {
          var n, i;
          if (i = $(this), n = i.get(0).files[0]) return loading.start(), loadImage.parseMetaData(n, function(t) {
            var e;
            return e = {
              canvas: !0,
              minWidth: 150,
              minHeight: 150,
              maxWidth: 300,
              maxHeight: 300,
              crop: !0
            }, t.exif && (e.orientation = t.exif.get("Orientation")), loadImage(n, function(t) {
              return $("canvas:first").replaceWith(t), $(".sign-up-photo-state.is-initial").hide(), $(".sign-up-photo-state.is-edited").show(), loading.dismiss(), o.removeData("selected"), i.data("selected", 1)
            }, e)
          })
        }), e = function() {
          return o.each(function(t, e) {
            var n;
            if (!(n = $(e)).data("selected")) return n.remove()
          })
        }, $("form").on("submit", function() {
          return e()
        }), 0 < $(".sign-up-photo_main-photo").length && (t = $(".sign-up-photo_main-photo"), lottie.loadAnimation({
          container: t[0],
          renderer: "svg",
          loop: !0,
          autoplay: !0,
          path: t.data().path
        })), 0 < $(".sign-up-photo_sub-photos").length) return t = $(".sign-up-photo_sub-photos"), lottie.loadAnimation({
        container: t[0],
        renderer: "svg",
        loop: !1,
        autoplay: !0,
        path: t.data().path
      })
    })
  }.call(this),
  function() {
    "/sign_up_profile/new" === location.pathname && $(function() {
      var e;
      return $("select").on("change input", function() {
        var t;
        return e(), t = $("select").toArray().every(function(t) {
          return "" !== t.value
        }), $("button[type='submit']").prop("disabled", !t).toggleClass("is-disabled", !t)
      }), (e = function() {
        return $("select").toArray().forEach(function(t) {
          return t.classList.toggle("is-blank", "" === t.value)
        })
      })()
    })
  }.call(this),
  function() {
    $(function() {
      var e, n, i;
      if (!(document.referrer && 0 === document.referrer.indexOf(location.origin) && (i = document.referrer.replace(location.origin, ""), ["/likes", "/mypages", "/messages"].some(function(t) {
          return 0 <= i.indexOf(t)
        })) || 0 === (e = $("#similar-users_container")).length)) return e.one("inview", function() {
        return $.get("/similar_users/" + e.data().userId).then(function(t) {
          if (t) return e.append(t), ellipsis(e), e.on("inview", n)
        })
      }), n = function(t, e) {
        var n;
        return n = $(".user-detail-submit .list-view-button"), e ? n.removeClass("anim-bounce-in").addClass("anim-bounce-out") : n.removeClass("anim-bounce-out").addClass("anim-bounce-in")
      }
    })
  }.call(this),
  function() {
    $(function() {
      return $(".js-search-sort-button").on("click", function(t) {
        var e;
        if (!$(this).hasClass("is-active")) return $(this).is("[data-available=false]") ? (t.preventDefault(), dialog.open($("#platinum-sort-order"))) : (e = $(this).children('input[name="this_sort_order"]').val(), $("#search_form_sort_order").val(e), $("#new_search_form").submit())
      })
    })
  }.call(this),
  function() {
    /^\/for_you\/startup_pickup_users$/.test(location.pathname) && $(function() {
      var e, t, n, i, o, r, a, s, c, l;
      return a = ["bigfive", "campaign", "konomi", "regular", "newcomer"], e = $(".strip-user-card").length, i = 0, $(".startup-pickup-users_container").css("height", window.innerHeight), r = function() {
        return i++, $("#current-card-count").text(i)
      }, s = function(t) {
        var e, n, i, o, r;
        for (o = $(".startup-pickup-users_header-image"), r = $(".startup-pickup-users_header-text"), o.attr("src", t.data().recommendIconUrl), r.text(t.data().recommendText), n = 0, i = a.length; n < i; n++) e = a[n], o.removeClass("is-" + e), r.removeClass("is-" + e);
        return o.addClass("is-" + t.data().recommendCategory), r.addClass("is-" + t.data().recommendCategory), $(".startup-pickup-users_header-balloon").fadeIn(200)
      }, o = function() {
        return $(".startup-pickup-users_header-balloon").fadeOut(200)
      }, l = function(t) {
        var e, n, i, o;
        for (e = $(".startup-pickup-users_container"), i = 0, o = a.length; i < o; i++) n = a[i], e.removeClass("is-" + n);
        return e.addClass("is-" + t.data().recommendCategory)
      }, c = function() {
        return Promise.resolve().then(function() {
          return new Promise(function(t) {
            return $(".startup-pickup-users_container").fadeOut(200, t)
          })
        }).then(function() {
          return new Promise(function(t) {
            return $(".startup-pickup-finished_container").fadeIn(200, t)
          })
        }).then(t).then(function() {
          return new Promise(function(t) {
            return $.ajax({
              type: "POST",
              url: "/for_you/startup_pickup_users/read"
            }).done(t)
          })
        }).then(function() {
          return new Promise(function(t) {
            return setTimeout(t, 2e3)
          })
        }).then(function() {
          return window.location.href = "/search"
        })
      }, t = function() {
        var t;
        return t = document.querySelector(".startup-pickup-finished_animation"), lottie.loadAnimation({
          container: t,
          renderer: "svg",
          loop: !1,
          autoplay: !1,
          path: t.dataset.path
        }).play()
      }, n = new SwipeUserCards({
        onCardChanged: function(t) {
          if (!(e <= i)) return r(), s(t), l(t);
          c()
        },
        onLike: function() {
          return $(".new_like:first").submit()
        },
        onSkip: function(t, e) {
          return o(), e()
        }
      }), likeEvents.on("likeSent", function() {
        return o(), n.swipeToLike()
      })
    })
  }.call(this),
  function() {
    window.storageUtil = {
      isAvailable: function(t) {
        var e, n;
        try {
          return n = window[t], e = "_", n.setItem(e, 1), n.removeItem(e), !0
        } catch (i) {
          return i, !1
        }
      }
    }
  }.call(this),
  function() {
    $(function() {
      if (0 < $(".strip-user-card").length) return $(".strip-user-card_body_photo-wrapper").on("click", function() {
        var t, e;
        return (t = $(".strip-user-card").first()).find(".is-selected").removeClass("is-selected"), $(this).addClass("is-selected"), e = $(this).children("img").attr("src"), t.find(".strip-user-card_main-photo").attr("src", e)
      })
    })
  }.call(this),
  function() {
    window.SwipeUserCards = function() {
      function t(t) {
        this.callbacks = t, this.cards = $(".swipe-user-cards"), this.swipeable = !0, this.init()
      }
      return t.prototype.like = function(t) {
        var e, n;
        if (this.swipeable) return this.tapAnimation(t), e = function() {
          return n.swipeToLike()
        }, (n = this).callbacks.onLike(this.currentUserId(), e)
      }, t.prototype.skip = function(t) {
        var e, n;
        if (this.swipeable) return this.tapAnimation(t), e = function() {
          return n.swipeToSkip()
        }, (n = this).callbacks.onSkip(this.currentUserId(), e)
      }, t.prototype.thankYou = function(t) {
        var e, n;
        if (this.swipeable) return this.tapAnimation(t), e = function() {
          return n.swipeToThankYou()
        }, (n = this).callbacks.onThankYou(this.currentUserId(), e)
      }, t.prototype.swipeToLike = function() {
        var t;
        return this.swipeable = !1, (t = this.currentCard()).find("div.filter").addClass("like-filter"), t.addClass("rotate-left"), this.changeNextCard(t)
      }, t.prototype.swipeToSkip = function() {
        var t;
        return this.swipeable = !1, (t = this.currentCard()).find("div.filter").addClass("not-good-filter"), t.addClass("rotate-right"), this.changeNextCard(t)
      }, t.prototype.swipeToThankYou = function() {
        var t;
        return this.swipeable = !1, (t = this.currentCard()).find("div.filter").addClass("thankyou-filter"), t.addClass("rotate-left"), this.changeNextCard(t)
      }, t.prototype.changeNextCard = function(e) {
        return setTimeout((n = this, function() {
          var t;
          return (t = e.next()).show(), e.remove(), n.callbacks.onCardChanged(t), n.swipeable = !0
        }), 300);
        var n
      }, t.prototype.tapAnimation = function(t) {
        return t.addClass("is-animating"), setTimeout(function() {
          return t.removeClass("is-animating")
        }, 500)
      }, t.prototype.currentCard = function() {
        return this.cards.children().first()
      }, t.prototype.currentUserId = function() {
        return this.currentCard().data().userId
      }, t.prototype.init = function() {
        var t, e, n, i;
        if (0 !== $(".swipe-user-cards").length) return $('[data-js="like"]').on("click", (e = this, function(t) {
          return e.like($(t.target))
        })), $('[data-js="skip"]').on("click", (n = this, function(t) {
          return n.skip($(t.target))
        })), $('[data-js="thankyou"]').on("click", (i = this, function(t) {
          return i.thankYou($(t.target))
        })), (t = this.currentCard()).show(), this.callbacks.onCardChanged(t)
      }, t
    }()
  }.call(this),
  function() {
    $(function() {
      return $("body").on("change", "#terms_of_agreement_agree_terms", function() {
        var t;
        return t = $(".terms-of-agreement_button"), $(this).prop("checked") ? (t.removeClass("is-disabled"), t.removeAttr("disabled")) : (t.addClass("is-disabled"), t.attr("disabled", !0))
      }), $("body").on("ajax:success", ".terms-of-agreement_form", function() {
        return dialog.close()
      }).on("ajax:error", ".terms-of-agreement_form", function() {
        return dialog.close()
      })
    })
  }.call(this),
  function() {
    $(function() {
      var t, e, n, i, o;
      if (0 < (t = $("#splash_container")).size() && t.is(".time-limit-event.is-visible")) return i = !1, e = $("#splash_container.time-limit-event img"), n = 0, e.on("load", function() {
        if ((n += 1) >= e.size()) return o()
      }), o = function() {
        if (!i) return i = !0, t.find('[data-js="animate"]').addClass("animate"), t.find(".time-limit-event-main").css("visibility", "visible")
      }, setTimeout(o, 3e3)
    })
  }.call(this),
  function() {
    var n, i;
    /^\/time_limit_events\/[0-9]+/.test($(location).attr("pathname")) && (i = function() {
      var t, e;
      for (e = Math.floor(5 * Math.random()) + 1, t = 0; t <= e && 0 < $(".time-limit-new-face-user-images:hidden").first().fadeIn("slow").length;) t++;
      return t
    }, n = function() {
      var t, e, n, i;
      return t = parseInt($("#end_time").val()) - 1, $("#end_time").val(t), e = (n = new Date(1e3 * t)).getUTCHours() + ":" + ("0" + n.getUTCMinutes()).slice(-2), i = ":" + ("0" + n.getUTCSeconds()).slice(-2), $(".time-limit-count-down-hm").text(e), $(".time-limit-count-down-s").text(i), t
    }, $(function() {
      var t, e;
      return $(".time-limit-head-accessories")[0] && (e = parseInt($(".time-limit-total-count-up").find("span").text()), e += i(), $(".time-limit-total-count-up").find("span").text(e), setInterval(function() {
        return e += i(), $(".time-limit-total-count-up").find("span").text(e)
      }, 1e4)), n(), t = setInterval(function() {
        if (n() <= 0) return clearInterval(t), location.href = "/"
      }, 1e3)
    }))
  }.call(this),
  function() {
    $(function() {
      if (0 < $("#timeline_entrance").length) return $.get("/timeline/entrance", function(t) {
        return $("#timeline_entrance").replaceWith(t)
      })
    })
  }.call(this),
  function() {
    var t;
    "/timeline_posts/new" === location.pathname && (window.TimelinePostForm = t = function() {
      function t() {
        this.photo = null
      }
      return t.prototype.autoExpandTextArea = function(t) {
        return t.style.height = "auto", t.style.height = t.scrollHeight + "px"
      }, t.prototype.isValidInput = function() {
        var t, e, n;
        return e = (t = $(".timeline-post-form_text")).data().maximum, n = t.val(), !(countText(n) > e) && (this.photo || 0 < n.trim().length)
      }, t.prototype.updateSubmitable = function() {
        var t;
        return t = !this.isValidInput(), $(".timeline-post-form_post-button").prop("disabled", t).toggleClass("is-disabled", t)
      }, t.prototype.renderFile = function(t) {
        return loadImage(t, function(t) {
          var e;
          return (e = $(".timeline-post-form_photo")).find("canvas").remove(), e.append(t).addClass("has-photo")
        }, {
          canvas: !0,
          maxWidth: 400,
          maxHeight: 300,
          crop: !0
        })
      }, t.prototype.addEventListener = function() {
        var n, e, i;
        return $("#timeline_post_form_image").on("change", (n = this, function(t) {
          var e;
          if (e = t.target.files[0]) return n.photo = e, n.renderFile(e), n.updateSubmitable()
        })), $(".timeline-post-form_remove-photo").on("click", (e = this, function() {
          var t;
          return $("#timeline_post_form_image").val(""), e.photo = null, (t = $(".timeline-post-form_photo")).find("canvas").remove(), t.removeClass("has-photo"), e.updateSubmitable()
        })), $(".timeline-post-form_text").on("keyup", (i = this, function(t) {
          return i.updateSubmitable(), i.autoExpandTextArea(t.currentTarget)
        })), $('[data-js="confirm-disposal"]').on("click", function(t) {
          if (new PreventDisposal({}).isDirty()) return t.preventDefault(), dialog.open($("#timeline-post-close-discard-dialog"))
        }), $("#timeline-post-form").on("submit", function(t) {
          if (!$(this).data().existTodaysRemainingPostCount) return t.preventDefault(), toast($(".toast-message").text())
        })
      }, t.prototype.init = function() {
        return this.updateSubmitable(), this.addEventListener()
      }, t
    }(), $(function() {
      return (new t).init()
    }))
  }.call(this),
  function() {
    $(function() {
      if (0 < $(".timeline-post_config").length) return $(document).on("click", '[data-js="report-timeline-post"]', function() {
        var t;
        return (t = $("#report-timeline-post-dialog")).find(".report-button").attr("data-target-id", this.dataset.userId), dialog.open(t)
      }), $(document).on("click", '[data-js="delete-timeline-post"]', function() {
        var t, e;
        return t = $("#delete-timeline-post-dialog"), e = $(this).data("delete-timeline-post-url"), t.find(".delete-timeline-post-button").attr("href", e), dialog.open(t)
      })
    })
  }.call(this),
  function() {
    $(function() {
      var a, t, e, n;
      return a = function() {
        function t(t) {
          this.banner = $(t)
        }
        return t.prototype.startTimer = function() {
          return this.addTimerDom(), this.setCountdown()
        }, t.prototype.addTimerDom = function() {
          var t;
          return t = this.banner.attr("data-timer-class"), this.banner.before("<div class='timer-area " + t + "'>"), this.timer = $(this.banner).siblings("." + t), this.timer.append('<div class="timer-text"></div>'), this.banner.attr("data-timer-started", "true")
        }, t.prototype.setCountdown = function() {
          var e, n;
          return n = this, e = setInterval(function() {
            var t;
            if (t = n.setTime(), n.setTimerText(t), t.time <= 0) return clearInterval(e), n.setEndTimerDom()
          }, 1e3)
        }, t.prototype.setTime = function() {
          var t;
          return t = parseInt(this.banner.attr("data-end-time")) - 1, this.banner.attr("data-end-time", t), createRemainingTime(t)
        }, t.prototype.setTimerText = function(t) {
          var e;
          return (e = this.timer.find(".timer-text")).empty(), e.append('<span class="timer-title-text">\u30ad\u30e3\u30f3\u30da\u30fc\u30f3\u7d42\u4e86\u307e\u3067</span>'), 0 < t.day ? (e.append("<span class='timer-text-day'>" + t.day + "</span>"), e.append("<span class='timer-text-day-unit'>\u65e5</span>")) : (e.append("<span class='timer-text-time'>" + this.formatTime(t.hour) + "</span>"), e.append("<span class='timer-text-time-unit'>:</span>"), e.append("<span class='timer-text-time'>" + this.formatTime(t.minute) + "</span>"), e.append("<span class='timer-text-time-unit'>:</span>"), e.append("<span class='timer-text-time'>" + this.formatTime(t.second) + "</span>"))
        }, t.prototype.formatTime = function(t) {
          return t ? ("0" + t).slice(-2) : "00"
        }, t.prototype.setEndTimerDom = function() {
          return this.timer.find(".timer-text").html('<span class="timer-end-text">\u30ad\u30e3\u30f3\u30da\u30fc\u30f3\u306f<br />\u7d42\u4e86\u3057\u307e\u3057\u305f</span>')
        }, t
      }(), t = function() {
        var t, e, n, i, o, r;
        for (o = [], e = 0, n = (i = $("img[data-timer-class]")).length; e < n; e++) t = i[e], $(t).attr("data-timer-class") && void 0 === $(t).attr("data-timer-started") && (r = new a(t), o.push(r.startTimer()));
        return o
      }, 0 < $("img[data-timer-class]").length && t(), 0 < $(".autopager .grid").length && (n = $(".autopager .grid").get(0), e = {
        childList: !0
      }, new MutationObserver(function() {
        return t()
      }).observe(n, e)), onlazy("load resize", function() {
        if (0 < $(".timer-text").length) return $(".timer-text").each(function(t, e) {
          var n, i;
          return i = $(e).innerWidth(), n = Math.ceil(.07 * i), $(e).css("font-size", n + "px")
        })
      })
    })
  }.call(this),
  function() {
    $(function() {
      return $(".js-upload-confirm-photo").on("change", function() {
        var t, n, e;
        if (e = $(this), n = e.closest("form"), e.data().openDialog && (e.data().openDialog = !1, t = e[0].files[0])) return loadImage(t, function(t) {
          var e;
          return (e = $("#confirm-upload-photo")).find("canvas:first").replaceWith(t), e.data().formRef = n, dialog.open($("#confirm-upload-photo"))
        }, {
          orientation: !0,
          canvas: !0,
          crop: !0,
          minWidth: 100,
          minHeight: 100,
          maxWidth: 512,
          maxHeight: 512
        })
      }).on("click", function() {
        var t;
        return (t = $(this)).val(""), t.data().openDialog = !0
      }), $("#confirm-upload-photo .js-upload-photo").on("click", function() {
        var t;
        if (t = $(this).parents("#confirm-upload-photo").data().formRef) return $(this).prop("disabled", !0), loading.start(), t.submit()
      })
    })
  }.call(this),
  function() {
    $(function() {
      return $(".js-user-photo-uploader").on("change", function() {
        return loading.start()
      }).on("error", function() {
        return loading.dismiss()
      }).on("encode", function() {
        return $(this).parents("form").submit()
      })
    })
  }.call(this),
  function() {
    /^\/welcome/.test($(location).attr("pathname")) && $(function() {
      var o, r, e, t, n;
      return r = ["\u4e0a\u5834\u4f01\u696d\u30fb\u5927\u624b\u4f01\u696d", "\u516c\u52d9\u54e1\u30fb\u5f01\u8b77\u58eb", "\u533b\u5e2b\u30fb\u533b\u7642\u95a2\u4fc2", "\u91d1\u878d\u30fb\u5916\u8cc7\u30fb\u30b3\u30f3\u30b5\u30eb", "\u30de\u30b9\u30b3\u30df\u30fb\u5e83\u544a\u30fb\u901a\u4fe1", "\u7d4c\u55b6\u8005\u30fb\u5f79\u54e1", "IT\u95a2\u9023\u30fbWEB\u696d\u754c", "\u30af\u30ea\u30a8\u30a4\u30c6\u30a3\u30d6", "\u55b6\u696d\u30fb\u8ca9\u58f2", "\u82b8\u80fd\u30fb\u30e2\u30c7\u30eb", "\u5b66\u751f"], o = ["\u4f1a\u793e\u54e1", "\u4e8b\u52d9", "\u5b66\u751f", "\u770b\u8b77\u5e2b\u30fb\u533b\u5e2b\u30fb\u533b\u7642\u95a2\u4fc2", "\u4fdd\u80b2\u58eb\u30fb\u798f\u7949\u30fb\u6559\u80b2\u95a2\u4fc2", "\u7f8e\u5bb9\u95a2\u4fc2", "\u30b5\u30fc\u30d3\u30b9\u696d", "\u30a2\u30d1\u30ec\u30eb\u30fb\u8ca9\u58f2", "\u516c\u52d9\u54e1", "\u82b8\u80fd\u30fb\u30e2\u30c7\u30eb"], 0 <= window.location.search.indexOf("ref=search") && ($('input[type="radio"]').change(function(t) {
        var e, n, i;
        for ($(".form-select-column").css("opacity", "1"), $(".form-select-border").addClass("is-active"), $("select").prop("disabled", !1), $('input[type="radio"]').next("label").children(".search-lp_find_off").css("display", "block"), $('input[type="radio"]').next("label").children(".search-lp_find_on").css("display", "none"), !0 === (i = $(t.target)).prop("checked") && (i.next("label").children(".search-lp_find_off").css("display", "none"), i.next("label").children(".search-lp_find_on").css("display", "block")), e = n = 1; n <= 11; e = ++n) $("select option[value='" + e + "']").remove();
        return "search_female" === $("input:checked").val() ? o.forEach(function(t, e) {
          return e += 1, $("select").append($("<option>").val(e).text(t))
        }) : r.forEach(function(t, e) {
          return e += 1, $("select").append($("<option>").val(e).text(t))
        }), $(".search-lp_sample-profile").css("display", "none"), $(".search-lp_result_num").text("???"), $(".search-lp_result_twenty-num").text("???"), $("select").val("")
      }), $("select").change(function() {
        if (0 < $("select").val() && 0 < $("input:checked").length) return $.ajax({
          url: "/fetch_user_count",
          type: "GET",
          dataType: "json",
          data: "",
          timeout: 5e3,
          success: function(t) {
            return e(t)
          }
        })
      }), e = function(t) {
        var e, n, i;
        return $(".search-lp_sample-profile").css("display", "none"), i = $("select").val() - 1, "search_female" === $("input:checked").val() ? (n = t.body.female[i], $(".search-lp_sample-profile.is-search-female").css("display", "block")) : (n = t.body.male[i], $(".search-lp_sample-profile.is-search-male").css("display", "block")), e = 300 < n.all ? n.all - 300 : 0, setInterval(function() {
          if (e <= n.all) return $(".search-lp_result_num").text(e), e++
        }, .5), $(".search-lp_result_twenty-num").text(n.twenty)
      }), n = function() {
        return 500 < $(window).scrollTop() ? $(".global-nav_header").removeClass("is-modest") : $(".global-nav_header").addClass("is-modest"), !0
      }, t = function() {
        return 700 < $(window).scrollTop() ? $(".welcome-lp_footer_login").removeClass("is-hidden") : $(".welcome-lp_footer_login").addClass("is-hidden"), !0
      }, onlazy("scroll", n), onlazy("scroll", t), n(), t()
    })
  }.call(this),
  function() {
    /^\/with_doctor$/.test($(location).attr("pathname")) && $(function() {
      var t, o, e, r, a;
      if (function() {
          var t;
          return t = $(".with-doctor_head_bg_animation"), lottie.loadAnimation({
            container: t[0],
            renderer: "svg",
            loop: !0,
            autoplay: !0,
            path: t.data().path
          })
        }(), function() {
          var t, e, n;
          if (t = $(location).attr("hash"), 0 < $(t).length) return e = $(".title-area").outerHeight(), n = $(t).offset().top - e, setTimeout(function() {
            return $(window).scrollTop(n)
          }, 100)
        }(), $(".progress-bar_animation, .with-doctor_detail_rank-tag").each(function(t, e) {
          return $(e).one("inview", function() {
            return $(this).addClass("is-shown")
          })
        }), o = {
          inner: 115,
          outer: 127,
          maxAngle: 6.28
        }, r = $(".with-doctor").data(), a = function(t) {
          return 3.6 * t / 180 * Math.PI
        }, function() {
          var t, e, n;
          return (n = d3.select("#with-doctor_head_arc").append("svg").attr("width", 300).attr("height", 300)).append("path").attr("transform", "translate(150,150)").attr("d", d3.arc().innerRadius(o.inner).outerRadius(o.outer).startAngle(0).endAngle(o.maxAngle)).attr("fill", "#D8D8D8"), n.append("path").attr("transform", "translate(150,150)").attr("d", d3.arc().innerRadius(0).outerRadius(o.outer).startAngle(0).endAngle(o.maxAngle)).attr("fill", "#FFF").attr(
            "fill-opacity", "0.6"), 0 < r.lastScore && n.append("path").attr("class", "prev-score").attr("transform", "translate(150,150)").attr("d", d3.arc().innerRadius(o.inner).outerRadius(o.outer).startAngle(0).endAngle(a(r.lastScore)).cornerRadius(8)).attr("fill", "url(#arcGradient)"), e = n.append("defs").append("linearGradient").attr("id", "arcGradient").attr("x1", "100%").attr("y1", "0%").attr("x2", "0%").attr("y2", "50%"), t = null, t = "ng" === r.resultType ? ["#FE6970", "#FE7C5F"] : ["#00C9B5", "#3BE4A1"], e.append("stop").attr("stop-color", t[0]).attr("offset", "0"), e.append("stop").attr("stop-color", t[1]).attr("offset", "100%")
        }(), t = function() {
          var t, e, i, n;
          return e = 1500, t = 200, n = d3.select("#with-doctor_head_arc svg"), i = d3.arc().innerRadius(o.inner).outerRadius(o.outer).startAngle(0).endAngle(function(t) {
            return t.endAngle
          }).cornerRadius(8), n.append("g").attr("transform", "translate(150,150)").selectAll("path.arc").data([{
            start: r.lastScore,
            end: r.totalScore
          }]).enter().append("path").attr("class", "arc").attr("fill", "url(#arcGradient)").transition().delay(t).duration(e).attrTween("d", function(t) {
            var n;
            return n = d3.interpolate(t.start, t.end),
              function(t) {
                var e;
                return e = n(t), i({
                  endAngle: a(e)
                })
              }
          }), setTimeout(function() {
            return $(".prev-score").remove()
          }, t), d3.select("#with-doctor-head-score-text").transition().delay(t).duration(e).textTween(function() {
            return d3.interpolateRound(r.lastScore, r.totalScore)
          }).on("end", function() {
            return this.classList.add("is-animate"), $(".with-doctor_head_up-down-icon").addClass("is-animate")
          })
        }, $("#with-doctor_head_arc").one("inview", t), 0 < $(".with-doctor_countdown-container").length) return e = $(".with-doctor_countdown-container"), new CountDownTimer({
        labelFormat: "unit",
        container: e,
        remainingTime: e.data().remainingTime,
        afterEnd: function() {
          return $(".with-doctor_mission").remove()
        }
      }).start()
    })
  }.call(this),
  function() {
    "/with_doctor/konomi" === location.pathname && $(function() {
      var o, r;
      return $(document).on("touchstart", ".touchable-group-card", function() {
        return $(this).addClass("is-touching")
      }).on("touchend", ".touchable-group-card", function() {
        var t;
        return t = $(this), setTimeout(function() {
          if (t.hasClass("is-touching")) return t.removeClass("is-touching"), animateOnce(t, "is-touchend")
        }, 100)
      }), o = $("#js-with-doctor-konomi-data").data(), $(document).on("click", ".touchable-group-card", function() {
        var t, e, n, i;
        if (t = $(this), !(i = t.data()).working) return i.working = !0, n = !i.join, t.toggleClass("is-join", n), e = function() {
          return i.working = !1
        }, n ? $.post("/groups/" + i.groupId + "/membership").done(function() {
          return i.join = !0, o.konomiCount = o.konomiCount + 1, r()
        }).always(e) : $.ajax({
          url: "/groups/" + i.groupId + "/membership",
          data: {
            id: i.groupId
          },
          type: "DELETE",
          dataType: "json"
        }).done(function() {
          return i.join = !1, o.konomiCount = o.konomiCount - 1, r()
        }).always(e)
      }), r = function() {
        var t;
        return t = Math.max(o.rankAKonomiCount - o.konomiCount, 0), $(".js-with-doctor-score-value-konomi").text(o.konomiCount), $("#remaining-konomi-count").text(t)
      }
    })
  }.call(this),
  function() {
    "/with_doctor/send_like" === location.pathname && $(function() {
      var e, t;
      return e = $("#js-with-doctor-send-like-data").data(), t = function() {
        var t;
        return e.sendLikeCount = e.sendLikeCount + 1, t = Math.max(e.rankACount - e.sendLikeCount, 0), $(".js-with-doctor-score-value-send-like").text(e.sendLikeCount), $("#remaining-send-like-count").text(t)
      }, window.likeEvents.on("likeSent", t), $(".with-doctor_recommend-user_shuffle-button").on("click", function() {
        var t, e, n, i, o, r;
        return r = $(".with-doctor_recommend-user-set"), e = r.eq(0), n = (o = r.eq(1)).data().setIndex, history.replaceState(null, null, location.pathname + "?index=" + n), t = e.find(".with-doctor_recommend-user-card"), i = o.find(".with-doctor_recommend-user-card"), t.addClass("is-close"), setTimeout(function() {
          return e.appendTo(".with-doctor_recommend-users"), t.removeClass("is-open is-close"), i.addClass("is-open")
        }, 300)
      })
    })
  }.call(this),
  function() {
    /^\/with_reports/.test($(location).attr("pathname")) && $(function() {
      var t;
      if (t = $("#movie_report").get(0), $(".with-report_movie").on("click", function() {
          return t.play()
        }), 0 < $("#with-report-info_tab").length) return $(".with-report-list_switch").on("click", function(t) {
        var e;
        return t.preventDefault(), e = $(this).data("category"), $(".with-report-list_switch").removeClass("is-selected"), $(this).addClass("is-selected"), $(".with-report-list").hide(), $('.with-report-list[data-category="' + e + '"]').addClass("is-selected").show()
      })
    })
  }.call(this),
  function() {
    var e, x;
    $(function() {
      var t;
      return 0 < $("#withdraw-reason").length && ((t = function() {
          return $("[name=reason]").val() ? x() : e()
        })(), $(":input").change(function() {
          return t()
        }), $("#withdraw-reason-submit").on("click", function(t) {
          if ("true" === $(".withdrawal-user-data").attr("data-show-advice") && "50" === $("[name=reason]").val()) return t.preventDefault(), location.href = $(".withdrawal-user-data").attr("data-url")
        })), 0 < $("#new_with_report_form").length && $("#with-report_agree-all").on("click", function(t) {
          return $(t.target).is(":checked") ? x() : e()
        }), $("#with_report_form_photo, #with_report_form_photo2").on("change", function() {
          if ("" !== $("#with_report_form_partner_id").val() && "" !== $("#with_report_form_photo").val() && "" !== $("#with_report_form_photo2").val()) return x()
        }), $(".with-report_submit").on("click", function() {
          var t, e, n, i, o, r, a, s, c, l, u;
          if (0 < $("#with-report_entry-form_new").length && (s = $(".with-report_report-type_radio:checked").val(), localStorageUtil.setItem("withReportReportType", s), o = $("#with_report_form_email").val(), localStorageUtil.setItem("withReportOwnEmail", o), r = $("#with_report_form_partner_email").val(), localStorageUtil.setItem("withReportPartnerEmail", r), t = $(".with-report_agree-photo_check").prop("checked"), localStorageUtil.setItem("withReportAgreePhoto", t)), 0 < $("#with-report_entry-form_questionnaire").length) return u = $("#with_report_form_using_period").val(), localStorageUtil.setItem("withReportUsingPeriod", u), c = $("#with_report_form_single_period").val(), localStorageUtil.setItem("withReportSinglePeriod", c), e = $(".with-report_beginning-person_radio:checked").val(), localStorageUtil.setItem("withReportBeginningPerson", e), i = [], $(".with-report_important-states:checked").each(function(t, e) {
            return i.push($(e).val())
          }), localStorageUtil.setItem("withReportImportantStates", i), n = $("#with_report_form_first_meet").val(), localStorageUtil.setItem("withReportFirstMeet", n), l = $("#with_report_form_started_dating").val(), localStorageUtil.setItem("withReportStartedDating", l), a = $(".with-report_agree-receive-message:checked").val(), localStorageUtil.setItem("withReportReceiveMessage", a), localStorageUtil.setItem("withReportQ1", $("#with_report_form_q1").val()), localStorageUtil.setItem("withReportQ2", $("#with_report_form_q2").val()), localStorageUtil.setItem("withReportQ3", $("#with_report_form_q3").val()), localStorageUtil.setItem("withReportQ4", $("#with_report_form_q4").val()), localStorageUtil.setItem("withReportQ6", $("#with_report_form_q6").val()), localStorageUtil.setItem("withReportQ7", $("#with_report_form_q7").val()), localStorageUtil.setItem("withReportQ8", $("#with_report_form_q8").val()), localStorageUtil.setItem("withReportQ9", $("#with_report_form_q9").val()), localStorageUtil.setItem("withReportQ10", $("#with_report_form_q10").val())
        }),
        function() {
          var t, e, n, i, o, r, a, s, c, l, u, d, h, f, p, m, g, v, _, w, y, b, k, C;
          if (0 < $("#with-report_entry-form_new").length && (y = localStorageUtil.getItem("withReportReportType"), v = localStorageUtil.getItem("withReportOwnEmail"), _ = localStorageUtil.getItem("withReportPartnerEmail"), t = localStorageUtil.getItem("withReportAgreePhoto"), 0 < y && $(".with-report_report-type_radio[value=" + y + "]").prop("checked", !0), null !== v && $("#with_report_form_email").val(v), null !== _ && $("#with_report_form_partner_email").val(_), "true" === t && $(".with-report_agree-photo_check").prop("checked", !0), "" !== $("#with_report_form_partner_id").val() && "" !== $("#with_report_form_partner_id").val() && "" !== $("#with_report_form_photo").val() && "" !== $("#with_report_form_photo2").val() && x()), 0 < $("#with-report_entry-form_questionnaire").length) {
            if (C = localStorageUtil.getItem("withReportUsingPeriod"), b = localStorageUtil.getItem("withReportSinglePeriod"), u = localStorageUtil.getItem("withReportBeginningPerson"), f = localStorageUtil.getItem("withReportImportantStates"), h = localStorageUtil.getItem("withReportFirstMeet"), k = localStorageUtil.getItem("withReportStartedDating"), w = localStorageUtil.getItem("withReportReceiveMessage"), e = localStorageUtil.getItem("withReportQ1"), i = localStorageUtil.getItem("withReportQ2"), o = localStorageUtil.getItem("withReportQ3"), r = localStorageUtil.getItem("withReportQ4"), a = localStorageUtil.getItem("withReportQ6"), s = localStorageUtil.getItem("withReportQ7"), c = localStorageUtil.getItem("withReportQ8"), l = localStorageUtil.getItem("withReportQ9"), n = localStorageUtil.getItem("withReportQ10"), $("#with_report_form_using_period").val(C), $("#with_report_form_single_period").val(b), 0 < u && $(".with-report_beginning-person_radio[value=" + u + "]").prop("checked", !0), f)
              for (p = 0, m = (g = f.split(",")).length; p < m; p++) d = g[p], $(".with-report_important-states[value=" + d + "]").prop("checked", !0);
            $("#with_report_form_first_meet").val(h), $("#with_report_form_started_dating").val(k), "" !== w && $(".with-report_agree-receive-message[value=" + w + "]").prop("checked", !0), $("#with_report_form_q1").val(e), $("#with_report_form_q2").val(i), $("#with_report_form_q3").val(o), $("#with_report_form_q4").val(r), $("#with_report_form_q6").val(a), $("#with_report_form_q7").val(s), $("#with_report_form_q8").val(c), $("#with_report_form_q9").val(l), $("#with_report_form_q10").val(n), $("#with-report_agree-all").prop("checked", !1)
          }
        }(),
        function() {
          if (/^\/withdrawals\/completion/.test($(location).attr("pathname"))) return localStorageUtil.removeItem("withReportReportType"), localStorageUtil.removeItem("withReportOwnEmail"), localStorageUtil.removeItem("withReportPartnerEmail"), localStorageUtil.removeItem("withReportAgreePhoto"), localStorageUtil.removeItem("withReportUsingPeriod"), localStorageUtil.removeItem("withReportSinglePeriod"), localStorageUtil.removeItem("withReportBeginningPerson"), localStorageUtil.removeItem("withReportImportantStates"), localStorageUtil.removeItem("withReportFirstMeet"), localStorageUtil.removeItem("withReportStartedDating"), localStorageUtil.removeItem("withReportReceiveMessage"), localStorageUtil.removeItem("withReportQ1"), localStorageUtil.removeItem("withReportQ2"), localStorageUtil.removeItem("withReportQ3"), localStorageUtil.removeItem("withReportQ4"), localStorageUtil.removeItem("withReportQ6"), localStorageUtil.removeItem("withReportQ7"), localStorageUtil.removeItem("withReportQ8"), localStorageUtil.removeItem("withReportQ9"), localStorageUtil.removeItem("withReportQ10")
        }()
    }), x = function() {
      return $("[type=submit]").addClass("button-primary").removeClass("is-disabled").removeAttr("disabled")
    }, e = function() {
      return $("[type=submit]").removeClass("button-primary").addClass("is-disabled").attr("disabled", !0)
    }
  }.call(this);
