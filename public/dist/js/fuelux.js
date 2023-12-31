/*!
 * Fuel UX v3.4.0
 * Copyright 2012-2014 ExactTarget
 * Licensed under the BSD-3-Clause license ()
 */
!(function (a) {
    "function" == typeof define && define.amd ? define(["jquery", "bootstrap"], a) : a(jQuery);
})(function (a) {
    if ("undefined" == typeof a) throw new Error("Fuel UX's JavaScript requires jQuery");
    if ("undefined" == typeof a.fn.dropdown || "undefined" == typeof a.fn.collapse) throw new Error("Fuel UX's JavaScript requires Bootstrap");
    !(function (a) {
        var b = a.fn.checkbox,
            c = function (b, c) {
                (this.options = a.extend({}, a.fn.checkbox.defaults, c)),
                    (this.$element = a(b).is('input[type="checkbox"]') ? a(b) : a(b).find('input[type="checkbox"]:first')),
                    (this.$label = this.$element.parent()),
                    (this.$parent = this.$label.parent(".checkbox")),
                    (this.$toggleContainer = this.$element.attr("data-toggle")),
                    (this.state = { disabled: !1, checked: !1 }),
                    0 === this.$parent.length && (this.$parent = null),
                    (this.$toggleContainer = Boolean(this.$toggleContainer) ? a(this.$toggleContainer) : null),
                    this.$element.on("change.fu.checkbox", a.proxy(this.itemchecked, this)),
                    this.$label.on("click", a.proxy(this.toggle, this)),
                    this.setState();
            };
        (c.prototype = {
            constructor: c,
            setState: function (a) {
                (a = a || this.$element),
                    (this.state.disabled = Boolean(a.prop("disabled"))),
                    (this.state.checked = Boolean(a.is(":checked"))),
                    this._resetClasses(),
                    this._toggleCheckedState(),
                    this._toggleDisabledState(),
                    this.toggleContainer();
            },
            enable: function () {
                (this.state.disabled = !1), this.$element.attr("disabled", !1), this._resetClasses(), this.$element.trigger("enabled.fu.checkbox");
            },
            disable: function () {
                (this.state.disabled = !0), this.$element.attr("disabled", !0), this._setDisabledClass(), this.$element.trigger("disabled.fu.checkbox");
            },
            check: function () {
                (this.state.checked = !0), this.$element.prop("checked", !0), this._setCheckedClass(), this.$element.trigger("checked.fu.checkbox");
            },
            uncheck: function () {
                (this.state.checked = !1), this.$element.prop("checked", !1), this._resetClasses(), this.$element.trigger("unchecked.fu.checkbox");
            },
            isChecked: function () {
                return this.state.checked;
            },
            toggle: function (a) {
                (a && a.target !== a.originalEvent.target) || (Boolean(a) && (a.preventDefault(), this.$element.trigger("change", a)), (this.state.checked = !this.state.checked), this._toggleCheckedState());
            },
            toggleContainer: function () {
                Boolean(this.$toggleContainer) &&
                    (this.state.checked ? (this.$toggleContainer.removeClass("hide"), this.$toggleContainer.attr("aria-hidden", "false")) : (this.$toggleContainer.addClass("hide"), this.$toggleContainer.attr("aria-hidden", "true")));
            },
            itemchecked: function (b) {
                this.setState(a(b.target));
            },
            destroy: function () {
                return this.$parent.remove(), this.$parent[0].outerHTML;
            },
            _resetClasses: function () {
                var a = [];
                this.state.checked || a.push("checked"), this.state.disabled || a.push("disabled"), (a = a.join(" ")), this.$label.removeClass(a), this.$parent && this.$parent.removeClass(a);
            },
            _toggleCheckedState: function () {
                this.state.checked ? this.check() : this.uncheck();
            },
            _toggleDisabledState: function () {
                this.state.disabled ? this.disable() : this.enable();
            },
            _setCheckedClass: function () {
                this.$label.addClass("checked"), this.$parent && this.$parent.addClass("checked");
            },
            _setDisabledClass: function () {
                this.$label.addClass("disabled"), this.$parent && this.$parent.addClass("disabled");
            },
        }),
            (a.fn.checkbox = function (b) {
                var d,
                    e = Array.prototype.slice.call(arguments, 1),
                    f = this.each(function () {
                        var f = a(this),
                            g = f.data("fu.checkbox"),
                            h = "object" == typeof b && b;
                        g || f.data("fu.checkbox", (g = new c(this, h))), "string" == typeof b && (d = g[b].apply(g, e));
                    });
                return void 0 === d ? f : d;
            }),
            (a.fn.checkbox.defaults = {}),
            (a.fn.checkbox.Constructor = c),
            (a.fn.checkbox.noConflict = function () {
                return (a.fn.checkbox = b), this;
            }),
            a(document).on("mouseover.fu.checkbox.data-api", "[data-initialize=checkbox]", function (b) {
                var c = a(b.target).closest(".checkbox").find("[type=checkbox]");
                c.data("fu.checkbox") || c.checkbox(c.data());
            }),
            a(function () {
                a("[data-initialize=checkbox] [type=checkbox]").each(function () {
                    var b = a(this);
                    b.data("fu.checkbox") || b.checkbox(b.data());
                });
            });
    })(a),
        (function (a) {
            var b = a.fn.combobox,
                c = function (b, c) {
                    (this.$element = a(b)),
                        (this.options = a.extend({}, a.fn.combobox.defaults, c)),
                        (this.$dropMenu = this.$element.find(".dropdown-menu")),
                        (this.$input = this.$element.find("input")),
                        (this.$button = this.$element.find(".btn")),
                        this.$element.on("click.fu.combobox", "a", a.proxy(this.itemclicked, this)),
                        this.$element.on("change.fu.combobox", "input", a.proxy(this.inputchanged, this)),
                        this.$element.on("shown.bs.dropdown", a.proxy(this.menuShown, this)),
                        this.setDefaultSelection();
                };
            (c.prototype = {
                constructor: c,
                destroy: function () {
                    return (
                        this.$element.remove(),
                        this.$element.find("input").each(function () {
                            a(this).attr("value", a(this).val());
                        }),
                        this.$element[0].outerHTML
                    );
                },
                doSelect: function (a) {
                    "undefined" != typeof a[0] ? ((this.$selectedItem = a), this.$input.val(this.$selectedItem.text().trim())) : (this.$selectedItem = null);
                },
                menuShown: function () {
                    this.options.autoResizeMenu && this.resizeMenu();
                },
                resizeMenu: function () {
                    var a = this.$element.outerWidth();
                    this.$dropMenu.outerWidth(a);
                },
                selectedItem: function () {
                    var b = this.$selectedItem,
                        c = {};
                    if (b) {
                        var d = this.$selectedItem.text().trim();
                        c = a.extend({ text: d }, this.$selectedItem.data());
                    } else c = { text: this.$input.val() };
                    return c;
                },
                selectByText: function (b) {
                    var c = a([]);
                    this.$element.find("li").each(function () {
                        return (this.textContent || this.innerText || a(this).text() || "").toLowerCase() === (b || "").toLowerCase() ? ((c = a(this)), !1) : void 0;
                    }),
                        this.doSelect(c);
                },
                selectByValue: function (a) {
                    var b = 'li[data-value="' + a + '"]';
                    this.selectBySelector(b);
                },
                selectByIndex: function (a) {
                    var b = "li:eq(" + a + ")";
                    this.selectBySelector(b);
                },
                selectBySelector: function (a) {
                    var b = this.$element.find(a);
                    this.doSelect(b);
                },
                setDefaultSelection: function () {
                    var a = "li[data-selected=true]:first",
                        b = this.$element.find(a);
                    b.length > 0 && (this.selectBySelector(a), b.removeData("selected"), b.removeAttr("data-selected"));
                },
                enable: function () {
                    this.$element.removeClass("disabled"), this.$input.removeAttr("disabled"), this.$button.removeClass("disabled");
                },
                disable: function () {
                    this.$element.addClass("disabled"), this.$input.attr("disabled", !0), this.$button.addClass("disabled");
                },
                itemclicked: function (b) {
                    (this.$selectedItem = a(b.target).parent()), this.$input.val(this.$selectedItem.text().trim()).trigger("change", { synthetic: !0 });
                    var c = this.selectedItem();
                    this.$element.trigger("changed.fu.combobox", c), b.preventDefault(), this.$element.find(".dropdown-toggle").focus();
                },
                inputchanged: function (b, c) {
                    if (!c || !c.synthetic) {
                        var d = a(b.target).val();
                        this.selectByText(d);
                        var e = this.selectedItem();
                        0 === e.text.length && (e = { text: d }), this.$element.trigger("changed.fu.combobox", e);
                    }
                },
            }),
                (a.fn.combobox = function (b) {
                    var d,
                        e = Array.prototype.slice.call(arguments, 1),
                        f = this.each(function () {
                            var f = a(this),
                                g = f.data("fu.combobox"),
                                h = "object" == typeof b && b;
                            g || f.data("fu.combobox", (g = new c(this, h))), "string" == typeof b && (d = g[b].apply(g, e));
                        });
                    return void 0 === d ? f : d;
                }),
                (a.fn.combobox.defaults = { autoResizeMenu: !0 }),
                (a.fn.combobox.Constructor = c),
                (a.fn.combobox.noConflict = function () {
                    return (a.fn.combobox = b), this;
                }),
                a(document).on("mousedown.fu.combobox.data-api", "[data-initialize=combobox]", function (b) {
                    var c = a(b.target).closest(".combobox");
                    c.data("fu.combobox") || c.combobox(c.data());
                }),
                a(function () {
                    a("[data-initialize=combobox]").each(function () {
                        var b = a(this);
                        b.data("fu.combobox") || b.combobox(b.data());
                    });
                });
        })(a),
        (function (a) {
            var b = "Invalid Date",
                c = "moment.js is not available so you cannot use this function",
                d = [],
                e = !1,
                f = a.fn.datepicker,
                g = !1,
                h = function () {
                    var a, b;
                    for (g = !0, a = 0, b = d.length; b > a; a++) d[a].init.call(d[a].scope);
                    d = [];
                };
            "function" == typeof define && define.amd
                ? require(["moment"], function (a) {
                      (e = a), h();
                  }, function (a) {
                      var b = a.requireModules && a.requireModules[0];
                      "moment" === b && h();
                  })
                : h();
            var i = function (b, c) {
                (this.$element = a(b)),
                    (this.options = a.extend(!0, {}, a.fn.datepicker.defaults, c)),
                    (this.$calendar = this.$element.find(".datepicker-calendar")),
                    (this.$days = this.$calendar.find(".datepicker-calendar-days")),
                    (this.$header = this.$calendar.find(".datepicker-calendar-header")),
                    (this.$headerTitle = this.$header.find(".title")),
                    (this.$input = this.$element.find("input")),
                    (this.$wheels = this.$element.find(".datepicker-wheels")),
                    (this.$wheelsMonth = this.$element.find(".datepicker-wheels-month")),
                    (this.$wheelsYear = this.$element.find(".datepicker-wheels-year")),
                    (this.artificialScrolling = !1),
                    (this.formatDate = this.options.formatDate || this.formatDate),
                    (this.inputValue = null),
                    (this.moment = !1),
                    (this.momentFormat = null),
                    (this.parseDate = this.options.parseDate || this.parseDate),
                    (this.preventBlurHide = !1),
                    (this.restricted = this.options.restricted || []),
                    (this.restrictedParsed = []),
                    (this.restrictedText = this.options.restrictedText),
                    (this.sameYearOnly = this.options.sameYearOnly),
                    (this.selectedDate = null),
                    (this.yearRestriction = null),
                    this.$calendar.find(".datepicker-today").on("click.fu.datepicker", a.proxy(this.todayClicked, this)),
                    this.$days.on("click.fu.datepicker", "tr td button", a.proxy(this.dateClicked, this)),
                    this.$element.find(".dropdown-menu").on("mousedown.fu.datepicker", a.proxy(this.dropdownMousedown, this)),
                    this.$header.find(".next").on("click.fu.datepicker", a.proxy(this.next, this)),
                    this.$header.find(".prev").on("click.fu.datepicker", a.proxy(this.prev, this)),
                    this.$headerTitle.on("click.fu.datepicker", a.proxy(this.titleClicked, this)),
                    this.$input.on("blur.fu.datepicker", a.proxy(this.inputBlurred, this)),
                    this.$input.on("focus.fu.datepicker", a.proxy(this.inputFocused, this)),
                    this.$wheels.find(".datepicker-wheels-back").on("click.fu.datepicker", a.proxy(this.backClicked, this)),
                    this.$wheels.find(".datepicker-wheels-select").on("click.fu.datepicker", a.proxy(this.selectClicked, this)),
                    this.$wheelsMonth.on("click.fu.datepicker", "ul button", a.proxy(this.monthClicked, this)),
                    this.$wheelsYear.on("click.fu.datepicker", "ul button", a.proxy(this.yearClicked, this)),
                    this.$wheelsYear.find("ul").on("scroll.fu.datepicker", a.proxy(this.onYearScroll, this));
                var f = function () {
                    this.checkForMomentJS() && ((e = e || window.moment), (this.moment = !0), (this.momentFormat = this.options.momentConfig.format), this.setCulture(this.options.momentConfig.culture)),
                        this.setRestrictedDates(this.restricted),
                        this.setDate(this.options.date) || (this.$input.val(""), (this.inputValue = this.$input.val())),
                        this.sameYearOnly && (this.yearRestriction = this.selectedDate ? this.selectedDate.getFullYear() : new Date().getFullYear());
                };
                g ? f.call(this) : d.push({ init: f, scope: this });
            };
            (i.prototype = {
                constructor: i,
                backClicked: function () {
                    this.changeView("calendar");
                },
                changeView: function (a, b) {
                    "wheels" === a
                        ? (this.$calendar.hide().attr("aria-hidden", "true"), this.$wheels.show().removeAttr("aria-hidden", ""), b && this.renderWheel(b))
                        : (this.$wheels.hide().attr("aria-hidden", "true"), this.$calendar.show().removeAttr("aria-hidden", ""), b && this.renderMonth(b));
                },
                checkForMomentJS: function () {
                    return (a.isFunction(window.moment) || ("undefined" != typeof e && a.isFunction(e))) && a.isPlainObject(this.options.momentConfig) && this.options.momentConfig.culture && this.options.momentConfig.format ? !0 : !1;
                },
                dateClicked: function (b) {
                    var c,
                        d = a(b.currentTarget).parents("td:first");
                    d.hasClass("restricted") ||
                        (this.$days.find("td.selected").removeClass("selected"),
                        d.addClass("selected"),
                        (c = new Date(d.attr("data-year"), d.attr("data-month"), d.attr("data-date"))),
                        (this.selectedDate = c),
                        this.$input.val(this.formatDate(c)),
                        (this.inputValue = this.$input.val()),
                        this.$input.focus(),
                        this.$element.trigger("dateClicked.fu.datepicker", c));
                },
                destroy: function () {
                    return this.$element.remove(), this.$days.find("tbody").empty(), this.$wheelsYear.find("ul").empty(), this.$element[0].outerHTML;
                },
                disable: function () {
                    this.$element.addClass("disabled"), this.$element.find("input, button").attr("disabled", "disabled"), this.$element.find(".input-group-btn").removeClass("open");
                },
                dropdownMousedown: function () {
                    var a = this;
                    (this.preventBlurHide = !0),
                        setTimeout(function () {
                            a.preventBlurHide = !1;
                        }, 0);
                },
                enable: function () {
                    this.$element.removeClass("disabled"), this.$element.find("input, button").removeAttr("disabled");
                },
                formatDate: function (a) {
                    var b = function (a) {
                        var b = "0" + a;
                        return b.substr(b.length - 2);
                    };
                    return this.moment ? e(a).format(this.momentFormat) : b(a.getMonth() + 1) + "/" + b(a.getDate()) + "/" + a.getFullYear();
                },
                getCulture: function () {
                    if (this.moment) return e.lang();
                    throw c;
                },
                getDate: function () {
                    return this.selectedDate ? this.selectedDate : new Date(0 / 0);
                },
                getFormat: function () {
                    if (this.moment) return this.momentFormat;
                    throw c;
                },
                getFormattedDate: function () {
                    return this.selectedDate ? this.formatDate(this.selectedDate) : b;
                },
                getRestrictedDates: function () {
                    return this.restricted;
                },
                inputBlurred: function () {
                    var a,
                        b = this.$input.val();
                    b !== this.inputValue &&
                        ((a = this.setDate(b)),
                        null === a ? this.$element.trigger("inputParsingFailed.fu.datepicker", b) : a === !1 ? this.$element.trigger("inputRestrictedDate.fu.datepicker", a) : this.$element.trigger("changed.fu.datepicker", a)),
                        this.preventBlurHide || this.$element.find(".input-group-btn").removeClass("open");
                },
                inputFocused: function () {
                    this.$element.find(".input-group-btn").addClass("open");
                },
                isInvalidDate: function (a) {
                    var c = a.toString();
                    return c === b || "NaN" === c ? !0 : !1;
                },
                isRestricted: function (a, b, c) {
                    var d,
                        e,
                        f,
                        g,
                        h = this.restrictedParsed;
                    if (this.sameYearOnly && null !== this.yearRestriction && c !== this.yearRestriction) return !0;
                    for (d = 0, f = h.length; f > d; d++)
                        if (
                            ((e = h[d].from),
                            (g = h[d].to),
                            (c > e.year || (c === e.year && b > e.month) || (c === e.year && b === e.month && a >= e.date)) && (c < g.year || (c === g.year && b < g.month) || (c === g.year && b === g.month && a <= g.date)))
                        )
                            return !0;
                    return !1;
                },
                monthClicked: function (b) {
                    this.$wheelsMonth.find(".selected").removeClass("selected"), a(b.currentTarget).parent().addClass("selected");
                },
                next: function () {
                    var a = this.$headerTitle.attr("data-month"),
                        b = this.$headerTitle.attr("data-year");
                    if ((a++, a > 11)) {
                        if (this.sameYearOnly) return;
                        (a = 0), b++;
                    }
                    this.renderMonth(new Date(b, a, 1));
                },
                onYearScroll: function (b) {
                    if (!this.artificialScrolling) {
                        var c,
                            d,
                            e = a(b.currentTarget),
                            f = "border-box" === e.css("box-sizing") ? e.outerHeight() : e.height(),
                            g = e.get(0).scrollHeight,
                            h = e.scrollTop(),
                            i = (f / (g - h)) * 100,
                            j = (h / g) * 100;
                        if (5 > j) {
                            for (d = parseInt(e.find("li:first").attr("data-year"), 10), c = d - 1; c > d - 11; c--) e.prepend('<li data-year="' + c + '"><button type="button">' + c + "</button></li>");
                            (this.artificialScrolling = !0), e.scrollTop(e.get(0).scrollHeight - g + h), (this.artificialScrolling = !1);
                        } else if (i > 90) for (d = parseInt(e.find("li:last").attr("data-year"), 10), c = d + 1; d + 11 > c; c++) e.append('<li data-year="' + c + '"><button type="button">' + c + "</button></li>");
                    }
                },
                parseDate: function (a) {
                    var b,
                        c,
                        d,
                        f,
                        g,
                        h,
                        i = this;
                    if (a)
                        if (this.moment) {
                            if (
                                ((d = function (a, b) {
                                    return (b = "b" === a ? e(b, i.momentFormat) : e(b)), b.isValid() === !0 ? b.toDate() : new Date(0 / 0);
                                }),
                                (h = "string" == typeof a ? ["b", "a"] : ["a", "b"]),
                                (b = d(h[0], a)),
                                !this.isInvalidDate(b))
                            )
                                return b;
                            if (((b = d(h[1], a)), !this.isInvalidDate(b))) return b;
                        } else if ("string" == typeof a) {
                            if (((b = new Date(Date.parse(a))), !this.isInvalidDate(b))) return b;
                            if (((a = a.split("T")[0]), (c = /^\s*(\d{4})-(\d\d)-(\d\d)\s*$/), (g = c.exec(a)), g && ((f = parseInt(g[2], 10)), (b = new Date(g[1], f - 1, g[3])), f === b.getMonth() + 1))) return b;
                        } else if (((b = new Date(a)), !this.isInvalidDate(b))) return b;
                    return new Date(0 / 0);
                },
                prev: function () {
                    var a = this.$headerTitle.attr("data-month"),
                        b = this.$headerTitle.attr("data-year");
                    if ((a--, 0 > a)) {
                        if (this.sameYearOnly) return;
                        (a = 11), b--;
                    }
                    this.renderMonth(new Date(b, a, 1));
                },
                renderMonth: function (b) {
                    b = b || new Date();
                    var c,
                        d,
                        e,
                        f,
                        g,
                        h,
                        i,
                        j,
                        k,
                        l = new Date(b.getFullYear(), b.getMonth(), 1).getDay(),
                        m = new Date(b.getFullYear(), b.getMonth() + 1, 0).getDate(),
                        n = new Date(b.getFullYear(), b.getMonth(), 0).getDate(),
                        o = this.$headerTitle.find(".month"),
                        p = b.getMonth(),
                        q = new Date(),
                        r = q.getDate(),
                        s = q.getMonth(),
                        t = q.getFullYear(),
                        u = this.selectedDate,
                        v = this.$days.find("tbody"),
                        w = b.getFullYear();
                    for (
                        u && (u = { date: u.getDate(), month: u.getMonth(), year: u.getFullYear() }),
                            o.find(".current").removeClass("current"),
                            o.find('span[data-month="' + p + '"]').addClass("current"),
                            this.$headerTitle.find(".year").text(w),
                            this.$headerTitle.attr({ "data-month": p, "data-year": w }),
                            v.empty(),
                            0 !== l ? ((c = n - l + 1), (i = -1)) : ((c = 1), (i = 0)),
                            h = 35 - l >= m ? 5 : 6,
                            f = 0;
                        h > f;
                        f++
                    ) {
                        for (k = a("<tr></tr>"), g = 0; 7 > g; g++)
                            (j = a("<td></td>")),
                                -1 === i ? j.addClass("last-month") : 1 === i && j.addClass("next-month"),
                                (d = p + i),
                                (e = w),
                                0 > d ? ((d = 11), e--) : d > 11 && ((d = 0), e++),
                                j.attr({ "data-date": c, "data-month": d, "data-year": e }),
                                e === t && d === s && c === r
                                    ? j.addClass("current-day")
                                    : (t > e || (e === t && s > d) || (e === t && d === s && r > c)) && (j.addClass("past"), this.options.allowPastDates || j.addClass("restricted").attr("title", this.restrictedText)),
                                this.isRestricted(c, d, e) && j.addClass("restricted").attr("title", this.restrictedText),
                                u && e === u.year && d === u.month && c === u.date && j.addClass("selected"),
                                j.html(j.hasClass("restricted") ? '<span><b class="datepicker-date">' + c + "</b></span>" : '<span><button type="button" class="datepicker-date">' + c + "</button></span>"),
                                c++,
                                -1 === i && c > n ? ((c = 1), (i = 0)) : 0 === i && c > m && ((c = 1), (i = 1)),
                                k.append(j);
                        v.append(k);
                    }
                },
                renderWheel: function (a) {
                    var b,
                        c,
                        d,
                        e = a.getMonth(),
                        f = this.$wheelsMonth.find("ul"),
                        g = a.getFullYear(),
                        h = this.$wheelsYear.find("ul");
                    for (
                        this.sameYearOnly ? (this.$wheelsMonth.addClass("full"), this.$wheelsYear.addClass("hide")) : (this.$wheelsMonth.removeClass("full"), this.$wheelsYear.removeClass("hide")),
                            f.find(".selected").removeClass("selected"),
                            c = f.find('li[data-month="' + e + '"]'),
                            c.addClass("selected"),
                            f.scrollTop(f.scrollTop() + (c.position().top - f.outerHeight() / 2 - c.outerHeight(!0) / 2)),
                            h.empty(),
                            b = g - 10;
                        g + 11 > b;
                        b++
                    )
                        h.append('<li data-year="' + b + '"><button type="button">' + b + "</button></li>");
                    (d = h.find('li[data-year="' + g + '"]')),
                        d.addClass("selected"),
                        (this.artificialScrolling = !0),
                        h.scrollTop(h.scrollTop() + (d.position().top - h.outerHeight() / 2 - d.outerHeight(!0) / 2)),
                        (this.artificialScrolling = !1),
                        c.find("button").focus();
                },
                selectClicked: function () {
                    var a = this.$wheelsMonth.find(".selected").attr("data-month"),
                        b = this.$wheelsYear.find(".selected").attr("data-year");
                    this.changeView("calendar", new Date(b, a, 1));
                },
                setCulture: function (a) {
                    if (!a) return !1;
                    if (!this.moment) throw c;
                    e.lang(a);
                },
                setDate: function (a) {
                    var b = this.parseDate(a);
                    return (
                        this.isInvalidDate(b)
                            ? ((this.selectedDate = null), this.renderMonth())
                            : this.isRestricted(b.getDate(), b.getMonth(), b.getFullYear())
                            ? ((this.selectedDate = !1), this.renderMonth())
                            : ((this.selectedDate = b), this.renderMonth(b), this.$input.val(this.formatDate(b))),
                        (this.inputValue = this.$input.val()),
                        this.selectedDate
                    );
                },
                setFormat: function (a) {
                    if (!a) return !1;
                    if (!this.moment) throw c;
                    this.momentFormat = a;
                },
                setRestrictedDates: function (a) {
                    var b,
                        c,
                        d = [],
                        e = this,
                        f = function (a) {
                            return a === -1 / 0
                                ? { date: -1 / 0, month: -1 / 0, year: -1 / 0 }
                                : 1 / 0 === a
                                ? { date: 1 / 0, month: 1 / 0, year: 1 / 0 }
                                : ((a = e.parseDate(a)), { date: a.getDate(), month: a.getMonth(), year: a.getFullYear() });
                        };
                    for (this.restricted = a, b = 0, c = a.length; c > b; b++) d.push({ from: f(a[b].from), to: f(a[b].to) });
                    this.restrictedParsed = d;
                },
                titleClicked: function () {
                    this.changeView("wheels", new Date(this.$headerTitle.attr("data-year"), this.$headerTitle.attr("data-month"), 1));
                },
                todayClicked: function () {
                    var a = new Date();
                    (a.getMonth() + "" !== this.$headerTitle.attr("data-month") || a.getFullYear() + "" !== this.$headerTitle.attr("data-year")) && this.renderMonth(a);
                },
                yearClicked: function (b) {
                    this.$wheelsYear.find(".selected").removeClass("selected"), a(b.currentTarget).parent().addClass("selected");
                },
            }),
                (a.fn.datepicker = function (b) {
                    var c,
                        d = Array.prototype.slice.call(arguments, 1),
                        e = this.each(function () {
                            var e = a(this),
                                f = e.data("fu.datepicker"),
                                g = "object" == typeof b && b;
                            f || e.data("fu.datepicker", (f = new i(this, g))), "string" == typeof b && (c = f[b].apply(f, d));
                        });
                    return void 0 === c ? e : c;
                }),
                (a.fn.datepicker.defaults = { allowPastDates: !1, date: new Date(), formatDate: null, momentConfig: { culture: "en", format: "L" }, parseDate: null, restricted: [], restrictedText: "Restricted", sameYearOnly: !1 }),
                (a.fn.datepicker.Constructor = i),
                (a.fn.datepicker.noConflict = function () {
                    return (a.fn.datepicker = f), this;
                }),
                a(document).on("mousedown.fu.datepicker.data-api", "[data-initialize=datepicker]", function (b) {
                    var c = a(b.target).closest(".datepicker");
                    c.data("datepicker") || c.datepicker(c.data());
                }),
                a(document).on("click.fu.datepicker.data-api", ".datepicker .dropdown-menu", function (b) {
                    var c = a(b.target);
                    (!c.is(".datepicker-date") || c.closest(".restricted").length) && b.stopPropagation();
                }),
                a(document).on("click.fu.datepicker.data-api", ".datepicker input", function (a) {
                    a.stopPropagation();
                }),
                a(function () {
                    a("[data-initialize=datepicker]").each(function () {
                        var b = a(this);
                        b.data("datepicker") || b.datepicker(b.data());
                    });
                });
        })(a),
        (function (a) {
            function b(b) {
                a(b).css({ visibility: "hidden" }), c(b) ? b.parent().addClass("dropup") : b.parent().removeClass("dropup"), a(b).css({ visibility: "visible" });
            }
            function c(a) {
                var b = d(a),
                    c = {};
                return (
                    (c.parentHeight = a.parent().outerHeight()),
                    (c.parentOffsetTop = a.parent().offset().top),
                    (c.dropdownHeight = a.outerHeight()),
                    (c.containerHeight = b.overflowElement.outerHeight()),
                    (c.containerOffsetTop = b.isWindow ? b.overflowElement.scrollTop() : b.overflowElement.offset().top),
                    (c.fromTop = c.parentOffsetTop - c.containerOffsetTop),
                    (c.fromBottom = c.containerHeight - c.parentHeight - (c.parentOffsetTop - c.containerOffsetTop)),
                    c.dropdownHeight < c.fromBottom ? !1 : c.dropdownHeight < c.fromTop ? !0 : c.dropdownHeight >= c.fromTop && c.dropdownHeight >= c.fromBottom ? (c.fromTop >= c.fromBottom ? !0 : !1) : void 0
                );
            }
            function d(b) {
                var c, d;
                return (
                    b.attr("data-target") ? ((c = b.attr("data-target")), (d = !1)) : ((c = window), (d = !0)),
                    a.each(b.parents(), function (b, e) {
                        return "visible" !== a(e).css("overflow") ? ((c = e), (d = !1), !1) : void 0;
                    }),
                    { overflowElement: a(c), isWindow: d }
                );
            }
            a(document.body).on("click.fu.dropdown-autoflip", "[data-toggle=dropdown][data-flip]", function () {
                "auto" === a(this).data().flip && b(a(this).next(".dropdown-menu"));
            }),
                a(document.body).on("suggested.fu.pillbox", function (c, d) {
                    b(a(d)), a(d).parent().addClass("open");
                }),
                (a.fn.dropdownautoflip = function () {});
        })(a),
        (function (a) {
            var b = a.fn.loader,
                c = function (b, c) {
                    (this.$element = a(b)),
                        (this.options = a.extend({}, a.fn.loader.defaults, c)),
                        (this.begin = this.$element.is("[data-begin]") ? parseInt(this.$element.attr("data-begin"), 10) : 1),
                        (this.delay = this.$element.is("[data-delay]") ? parseFloat(this.$element.attr("data-delay")) : 150),
                        (this.end = this.$element.is("[data-end]") ? parseInt(this.$element.attr("data-end"), 10) : 8),
                        (this.frame = this.$element.is("[data-frame]") ? parseInt(this.$element.attr("data-frame"), 10) : this.begin),
                        (this.isIElt9 = !1),
                        (this.timeout = {});
                    var d = this.msieVersion();
                    d !== !1 && 9 > d && (this.$element.addClass("iefix"), (this.isIElt9 = !0)), this.$element.attr("data-frame", this.frame + ""), this.play();
                };
            (c.prototype = {
                constructor: c,
                destroy: function () {
                    return this.$element.remove(), this.$element[0].outerHTML;
                },
                ieRepaint: function () {
                    this.isIElt9 && this.$element.addClass("iefix_repaint").removeClass("iefix_repaint");
                },
                msieVersion: function () {
                    var a = window.navigator.userAgent,
                        b = a.indexOf("MSIE ");
                    return b > 0 ? parseInt(a.substring(b + 5, a.indexOf(".", b)), 10) : !1;
                },
                next: function () {
                    this.frame++, this.frame > this.end && (this.frame = this.begin), this.$element.attr("data-frame", this.frame + ""), this.ieRepaint();
                },
                pause: function () {
                    clearTimeout(this.timeout);
                },
                play: function () {
                    var a = this;
                    clearTimeout(this.timeout),
                        (this.timeout = setTimeout(function () {
                            a.next(), a.play();
                        }, this.delay));
                },
                previous: function () {
                    this.frame--, this.frame < this.begin && (this.frame = this.end), this.$element.attr("data-frame", this.frame + ""), this.ieRepaint();
                },
                reset: function () {
                    (this.frame = this.begin), this.$element.attr("data-frame", this.frame + ""), this.ieRepaint();
                },
            }),
                (a.fn.loader = function (b) {
                    var d,
                        e = Array.prototype.slice.call(arguments, 1),
                        f = this.each(function () {
                            var f = a(this),
                                g = f.data("fu.loader"),
                                h = "object" == typeof b && b;
                            g || f.data("fu.loader", (g = new c(this, h))), "string" == typeof b && (d = g[b].apply(g, e));
                        });
                    return void 0 === d ? f : d;
                }),
                (a.fn.loader.defaults = {}),
                (a.fn.loader.Constructor = c),
                (a.fn.loader.noConflict = function () {
                    return (a.fn.loader = b), this;
                }),
                a(function () {
                    a("[data-initialize=loader]").each(function () {
                        var b = a(this);
                        b.data("fu.loader") || b.loader(b.data());
                    });
                });
        })(a),
        (function (a) {
            var b = a.fn.placard,
                c = function (b, c) {
                    var d = this;
                    (this.$element = a(b)),
                        (this.options = a.extend({}, a.fn.placard.defaults, c)),
                        (this.$accept = this.$element.find(".placard-accept")),
                        (this.$cancel = this.$element.find(".placard-cancel")),
                        (this.$field = this.$element.find(".placard-field")),
                        (this.$footer = this.$element.find(".placard-footer")),
                        (this.$header = this.$element.find(".placard-header")),
                        (this.$popup = this.$element.find(".placard-popup")),
                        (this.actualValue = null),
                        (this.clickStamp = "_"),
                        (this.previousValue = ""),
                        -1 === this.options.revertOnCancel && (this.options.revertOnCancel = this.$accept.length > 0 ? !0 : !1),
                        this.$field.on("focus.fu.placard", a.proxy(this.show, this)),
                        this.$accept.on("click.fu.placard", a.proxy(this.complete, this, "accept")),
                        this.$cancel.on("click.fu.placard", function (a) {
                            a.preventDefault(), d.complete("cancel");
                        }),
                        this.ellipsis();
                };
            (c.prototype = {
                constructor: c,
                complete: function (a) {
                    var b = this.options["on" + a[0].toUpperCase() + a.substring(1)],
                        c = { previousValue: this.previousValue, value: this.$field.val() };
                    b ? (b(c), this.$element.trigger(a, c)) : ("cancel" === a && this.options.revertOnCancel && this.$field.val(this.previousValue), this.$element.trigger(a, c), this.hide());
                },
                destroy: function () {
                    return (
                        this.$element.remove(),
                        a(document).off("click.fu.placard.externalClick." + this.clickStamp),
                        this.$element.find("input").each(function () {
                            a(this).attr("value", a(this).val());
                        }),
                        this.$element[0].outerHTML
                    );
                },
                disable: function () {
                    this.$element.addClass("disabled"), this.$field.attr("disabled", "disabled"), this.hide();
                },
                ellipsis: function () {
                    var a, b, c;
                    if ("true" === this.$element.attr("data-ellipsis"))
                        if (((a = this.$field.get(0)), this.$field.is("input"))) a.scrollLeft = 0;
                        else if (((a.scrollTop = 0), a.clientHeight < a.scrollHeight)) {
                            for (this.actualValue = this.$field.val(), this.$field.val(""), c = "", b = 0; a.clientHeight >= a.scrollHeight; ) (c += this.actualValue[b]), this.$field.val(c + "..."), b++;
                            (c = c.length > 0 ? c.substring(0, c.length - 1) : ""), this.$field.val(c + "...");
                        }
                },
                enable: function () {
                    this.$element.removeClass("disabled"), this.$field.removeAttr("disabled");
                },
                externalClickListener: function (a, b) {
                    (b === !0 || this.isExternalClick(a)) && this.complete(this.options.externalClickAction);
                },
                getValue: function () {
                    return null !== this.actualValue ? this.actualValue : this.$field.val();
                },
                hide: function () {
                    this.$element.hasClass("showing") && (this.$element.removeClass("showing"), this.ellipsis(), a(document).off("click.fu.placard.externalClick." + this.clickStamp), this.$element.trigger("hidden.fu.placard"));
                },
                isExternalClick: function (b) {
                    var c,
                        d,
                        e = this.$element.get(0),
                        f = this.options.externalClickExceptions || [],
                        g = a(b.target);
                    if (b.target === e || g.parents(".placard:first").get(0) === e) return !1;
                    for (c = 0, d = f.length; d > c; c++) if (g.is(f[c]) || g.parents(f[c]).length > 0) return !1;
                    return !0;
                },
                setValue: function (a) {
                    this.$field.val(a), this.$element.hasClass("showing") || this.ellipsis();
                },
                show: function () {
                    var b;
                    if (!this.$element.hasClass("showing")) {
                        if (((b = a(document).find(".placard.showing")), b.length > 0)) {
                            if (b.data("fu.placard") && b.data("fu.placard").options.explicit) return;
                            b.placard("externalClickListener", {}, !0);
                        }
                        (this.previousValue = this.$field.val()),
                            this.$element.addClass("showing"),
                            null !== this.actualValue && (this.$field.val(this.actualValue), (this.actualValue = null)),
                            this.$header.length > 0 && this.$popup.css("top", "-" + this.$header.outerHeight(!0) + "px"),
                            this.$footer.length > 0 && this.$popup.css("bottom", "-" + this.$footer.outerHeight(!0) + "px"),
                            this.$element.trigger("shown.fu.placard"),
                            (this.clickStamp = new Date().getTime() + (Math.floor(100 * Math.random()) + 1)),
                            this.options.explicit || a(document).on("click.fu.placard.externalClick." + this.clickStamp, a.proxy(this.externalClickListener, this));
                    }
                },
            }),
                (a.fn.placard = function (b) {
                    var d,
                        e = Array.prototype.slice.call(arguments, 1),
                        f = this.each(function () {
                            var f = a(this),
                                g = f.data("fu.placard"),
                                h = "object" == typeof b && b;
                            g || f.data("fu.placard", (g = new c(this, h))), "string" == typeof b && (d = g[b].apply(g, e));
                        });
                    return void 0 === d ? f : d;
                }),
                (a.fn.placard.defaults = { onAccept: void 0, onCancel: void 0, externalClickAction: "cancel", externalClickExceptions: [], explicit: !1, revertOnCancel: -1 }),
                (a.fn.placard.Constructor = c),
                (a.fn.placard.noConflict = function () {
                    return (a.fn.placard = b), this;
                }),
                a(document).on("focus.fu.placard.data-api", "[data-initialize=placard]", function (b) {
                    var c = a(b.target).closest(".placard");
                    c.data("fu.placard") || c.placard(c.data());
                }),
                a(function () {
                    a("[data-initialize=placard]").each(function () {
                        var b = a(this);
                        b.data("fu.placard") || b.placard(b.data());
                    });
                });
        })(a),
        (function (a) {
            var b = a.fn.radio,
                c = function (b, c) {
                    (this.options = a.extend({}, a.fn.radio.defaults, c)),
                        (this.$radio = a(b).is('input[type="radio"]') ? a(b) : a(b).find('input[type="radio"]:first')),
                        (this.$label = this.$radio.parent()),
                        (this.groupName = this.$radio.attr("name")),
                        (this.$parent = this.$label.parent(".radio")),
                        (this.$toggleContainer = null),
                        0 === this.$parent.length && (this.$parent = null);
                    var d = this.$radio.attr("data-toggle");
                    d && (this.$toggleContainer = a(d)), this.setState(this.$radio), this.$radio.on("change.fu.radio", a.proxy(this.itemchecked, this));
                };
            (c.prototype = {
                constructor: c,
                destroy: function () {
                    return this.$parent.remove(), this.$parent[0].outerHTML;
                },
                setState: function (a) {
                    a = a || this.$radio;
                    var b = a.is(":checked"),
                        c = !!a.prop("disabled");
                    this.$label.removeClass("checked"),
                        this.$parent && this.$parent.removeClass("checked disabled"),
                        b === !0 && (this.$label.addClass("checked"), this.$parent && this.$parent.addClass("checked")),
                        c === !0 && (this.$label.addClass("disabled"), this.$parent && this.$parent.addClass("disabled")),
                        this.toggleContainer();
                },
                resetGroup: function () {
                    var b = a('input[name="' + this.groupName + '"]');
                    b.each(function () {
                        var b = a(this).parent("label");
                        b.removeClass("checked"), b.parent(".radio").removeClass("checked");
                    });
                },
                enable: function () {
                    this.$radio.attr("disabled", !1), this.$label.removeClass("disabled"), this.$parent && this.$parent.removeClass("disabled");
                },
                disable: function () {
                    this.$radio.attr("disabled", !0), this.$label.addClass("disabled"), this.$parent && this.$parent.addClass("disabled");
                },
                itemchecked: function (b) {
                    var c = a(b.target);
                    this.resetGroup(), this.setState(c);
                },
                check: function () {
                    this.resetGroup(), this.$radio.prop("checked", !0), this.setState(this.$radio);
                },
                toggleContainer: function () {
                    var b;
                    this.$toggleContainer &&
                        (this.isChecked()
                            ? ((b = a('input[name="' + this.groupName + '"]')),
                              b.each(function () {
                                  var b = a(this).attr("data-toggle");
                                  a(b).addClass("hide"), a(b).attr("aria-hidden", "true");
                              }),
                              this.$toggleContainer.removeClass("hide"),
                              this.$toggleContainer.attr("aria-hidden", "false"))
                            : (this.$toggleContainer.addClass("hide"), this.$toggleContainer.attr("aria-hidden", "true")));
                },
                uncheck: function () {
                    this.$radio.prop("checked", !1), this.setState(this.$radio);
                },
                isChecked: function () {
                    return this.$radio.is(":checked");
                },
            }),
                (a.fn.radio = function (b) {
                    var d,
                        e = Array.prototype.slice.call(arguments, 1),
                        f = this.each(function () {
                            var f = a(this),
                                g = f.data("fu.radio"),
                                h = "object" == typeof b && b;
                            g || f.data("fu.radio", (g = new c(this, h))), "string" == typeof b && (d = g[b].apply(g, e));
                        });
                    return void 0 === d ? f : d;
                }),
                (a.fn.radio.defaults = {}),
                (a.fn.radio.Constructor = c),
                (a.fn.radio.noConflict = function () {
                    return (a.fn.radio = b), this;
                }),
                a(document).on("mouseover.fu.checkbox.data-api", "[data-initialize=radio]", function (b) {
                    var c = a(b.target).closest(".radio").find("[type=radio]");
                    c.data("fu.radio") || c.radio(c.data());
                }),
                a(function () {
                    a("[data-initialize=radio] [type=radio]").each(function () {
                        var b = a(this);
                        b.data("fu.radio") || b.radio(b.data());
                    });
                });
        })(a),
        (function (a) {
            var b = a.fn.search,
                c = function (b, c) {
                    (this.$element = a(b)),
                        (this.options = a.extend({}, a.fn.search.defaults, c)),
                        (this.$button = this.$element.find("button")),
                        (this.$input = this.$element.find("input")),
                        (this.$icon = this.$element.find(".glyphicon")),
                        this.$button.on("click.fu.search", a.proxy(this.buttonclicked, this)),
                        this.$input.on("keydown.fu.search", a.proxy(this.keypress, this)),
                        this.$input.on("keyup.fu.search", a.proxy(this.keypressed, this)),
                        (this.activeSearch = "");
                };
            (c.prototype = {
                constructor: c,
                destroy: function () {
                    return (
                        this.$element.remove(),
                        this.$element.find("input").each(function () {
                            a(this).attr("value", a(this).val());
                        }),
                        this.$element[0].outerHTML
                    );
                },
                search: function (a) {
                    this.$icon.hasClass("glyphicon") && this.$icon.removeClass("glyphicon-search").addClass("glyphicon-remove"), (this.activeSearch = a), this.$element.addClass("searched"), this.$element.trigger("searched.fu.search", a);
                },
                clear: function () {
                    this.$icon.hasClass("glyphicon") && this.$icon.removeClass("glyphicon-remove").addClass("glyphicon-search"),
                        (this.activeSearch = ""),
                        this.$input.val(""),
                        this.$element.removeClass("searched"),
                        this.$element.trigger("cleared.fu.search");
                },
                action: function () {
                    var a = this.$input.val(),
                        b = "" === a || a === this.activeSearch;
                    this.activeSearch && b ? this.clear() : a && this.search(a);
                },
                buttonclicked: function (b) {
                    b.preventDefault(), a(b.currentTarget).is(".disabled, :disabled") || this.action();
                },
                keypress: function (a) {
                    13 === a.which && a.preventDefault();
                },
                keypressed: function (a) {
                    var b,
                        c = "glyphicon-remove",
                        d = "glyphicon-search";
                    13 === a.which ? (a.preventDefault(), this.action()) : ((b = this.$input.val()), b ? (b !== this.activeSearch ? this.$icon.removeClass(c).addClass(d) : this.$icon.removeClass(d).addClass(c)) : this.clear());
                },
                disable: function () {
                    this.$element.addClass("disabled"), this.$input.attr("disabled", "disabled"), this.$button.addClass("disabled");
                },
                enable: function () {
                    this.$element.removeClass("disabled"), this.$input.removeAttr("disabled"), this.$button.removeClass("disabled");
                },
            }),
                (a.fn.search = function (b) {
                    var d,
                        e = Array.prototype.slice.call(arguments, 1),
                        f = this.each(function () {
                            var f = a(this),
                                g = f.data("fu.search"),
                                h = "object" == typeof b && b;
                            g || f.data("fu.search", (g = new c(this, h))), "string" == typeof b && (d = g[b].apply(g, e));
                        });
                    return void 0 === d ? f : d;
                }),
                (a.fn.search.defaults = {}),
                (a.fn.search.Constructor = c),
                (a.fn.search.noConflict = function () {
                    return (a.fn.search = b), this;
                }),
                a(document).on("mousedown.fu.search.data-api", "[data-initialize=search]", function (b) {
                    var c = a(b.target).closest(".search");
                    c.data("fu.search") || c.search(c.data());
                }),
                a(function () {
                    a("[data-initialize=search]").each(function () {
                        var b = a(this);
                        b.data("fu.search") || b.search(b.data());
                    });
                });
        })(a),
        (function (a) {
            var b = a.fn.selectlist,
                c = function (b, c) {
                    (this.$element = a(b)),
                        (this.options = a.extend({}, a.fn.selectlist.defaults, c)),
                        (this.$button = this.$element.find(".btn.dropdown-toggle")),
                        (this.$hiddenField = this.$element.find(".hidden-field")),
                        (this.$label = this.$element.find(".selected-label")),
                        this.$element.on("click.fu.selectlist", ".dropdown-menu a", a.proxy(this.itemClicked, this)),
                        this.setDefaultSelection(),
                        "auto" === c.resize && this.resize();
                };
            (c.prototype = {
                constructor: c,
                destroy: function () {
                    return this.$element.remove(), this.$element[0].outerHTML;
                },
                doSelect: function (b) {
                    var c;
                    (this.$selectedItem = c = b),
                        this.$hiddenField.val(this.$selectedItem.attr("data-value")),
                        this.$label.html(a(this.$selectedItem.children()[0]).html()),
                        this.$element.find("li").each(function () {
                            c.is(a(this)) ? a(this).attr("data-selected", !0) : a(this).removeData("selected").removeAttr("data-selected");
                        });
                },
                itemClicked: function (b) {
                    this.$element.trigger("clicked.fu.selectlist", this.$selectedItem), b.preventDefault(), a(b.target).parent().is(this.$selectedItem) || this.itemChanged(b), this.$element.find(".dropdown-toggle").focus();
                },
                itemChanged: function (b) {
                    this.doSelect(a(b.target).closest("li"));
                    var c = this.selectedItem();
                    this.$element.trigger("changed.fu.selectlist", c);
                },
                resize: function () {
                    var b = 0,
                        c = a("<div/>").addClass("selectlist-sizer"),
                        d = 0;
                    Boolean(a(document).find("html").hasClass("fuelux")) ? a(document.body).append(c) : a(".fuelux:first").append(c),
                        this.$element.find("a").each(function () {
                            c.text(a(this).text()), (b = c.outerWidth()), b > d && (d = b);
                        }),
                        c.remove(),
                        this.$label.width(d);
                },
                selectedItem: function () {
                    var b = this.$selectedItem.text();
                    return a.extend({ text: b }, this.$selectedItem.data());
                },
                selectByText: function (b) {
                    var c = a([]);
                    this.$element.find("li").each(function () {
                        return (this.textContent || this.innerText || a(this).text() || "").toLowerCase() === (b || "").toLowerCase() ? ((c = a(this)), !1) : void 0;
                    }),
                        this.doSelect(c);
                },
                selectByValue: function (a) {
                    var b = 'li[data-value="' + a + '"]';
                    this.selectBySelector(b);
                },
                selectByIndex: function (a) {
                    var b = "li:eq(" + a + ")";
                    this.selectBySelector(b);
                },
                selectBySelector: function (a) {
                    var b = this.$element.find(a);
                    this.doSelect(b);
                },
                setDefaultSelection: function () {
                    var a = this.$element.find("li[data-selected=true]").eq(0);
                    0 === a.length && (a = this.$element.find("li").has("a").eq(0)), this.doSelect(a);
                },
                enable: function () {
                    this.$element.removeClass("disabled"), this.$button.removeClass("disabled");
                },
                disable: function () {
                    this.$element.addClass("disabled"), this.$button.addClass("disabled");
                },
            }),
                (a.fn.selectlist = function (b) {
                    var d,
                        e = Array.prototype.slice.call(arguments, 1),
                        f = this.each(function () {
                            var f = a(this),
                                g = f.data("fu.selectlist"),
                                h = "object" == typeof b && b;
                            g || f.data("fu.selectlist", (g = new c(this, h))), "string" == typeof b && (d = g[b].apply(g, e));
                        });
                    return void 0 === d ? f : d;
                }),
                (a.fn.selectlist.defaults = {}),
                (a.fn.selectlist.Constructor = c),
                (a.fn.selectlist.noConflict = function () {
                    return (a.fn.selectlist = b), this;
                }),
                a(document).on("mousedown.fu.selectlist.data-api", "[data-initialize=selectlist]", function (b) {
                    var c = a(b.target).closest(".selectlist");
                    c.data("fu.selectlist") || c.selectlist(c.data());
                }),
                a(function () {
                    a("[data-initialize=selectlist]").each(function () {
                        var b = a(this);
                        b.data("fu.selectlist") || b.selectlist(b.data());
                    });
                });
        })(a),
        (function (a) {
            var b = a.fn.spinbox,
                c = function (b, c) {
                    (this.$element = a(b)),
                        this.$element.find(".btn").on("click", function (a) {
                            a.preventDefault();
                        }),
                        (this.options = a.extend({}, a.fn.spinbox.defaults, c)),
                        (this.$input = this.$element.find(".spinbox-input")),
                        this.$element.on("focusin.fu.spinbox", this.$input, a.proxy(this.changeFlag, this)),
                        this.$element.on("focusout.fu.spinbox", this.$input, a.proxy(this.change, this)),
                        this.$element.on("keydown.fu.spinbox", this.$input, a.proxy(this.keydown, this)),
                        this.$element.on("keyup.fu.spinbox", this.$input, a.proxy(this.keyup, this)),
                        this.bindMousewheelListeners(),
                        (this.mousewheelTimeout = {}),
                        this.options.hold
                            ? (this.$element.on(
                                  "mousedown.fu.spinbox",
                                  ".spinbox-up",
                                  a.proxy(function () {
                                      this.startSpin(!0);
                                  }, this)
                              ),
                              this.$element.on("mouseup.fu.spinbox", ".spinbox-up, .spinbox-down", a.proxy(this.stopSpin, this)),
                              this.$element.on("mouseout.fu.spinbox", ".spinbox-up, .spinbox-down", a.proxy(this.stopSpin, this)),
                              this.$element.on(
                                  "mousedown.fu.spinbox",
                                  ".spinbox-down",
                                  a.proxy(function () {
                                      this.startSpin(!1);
                                  }, this)
                              ))
                            : (this.$element.on(
                                  "click.fu.spinbox",
                                  ".spinbox-up",
                                  a.proxy(function () {
                                      this.step(!0);
                                  }, this)
                              ),
                              this.$element.on(
                                  "click.fu.spinbox",
                                  ".spinbox-down",
                                  a.proxy(function () {
                                      this.step(!1);
                                  }, this)
                              )),
                        (this.switches = { count: 1, enabled: !0 }),
                        (this.switches.speed = "medium" === this.options.speed ? 300 : "fast" === this.options.speed ? 100 : 500),
                        (this.lastValue = this.options.value),
                        this.render(),
                        this.options.disabled && this.disable();
                };
            (c.prototype = {
                constructor: c,
                destroy: function () {
                    return (
                        this.$element.remove(),
                        this.$element.find("input").each(function () {
                            a(this).attr("value", a(this).val());
                        }),
                        this.$element[0].outerHTML
                    );
                },
                render: function () {
                    var b = this.parseInput(this.$input.val()),
                        c = "";
                    "" !== b && 0 === this.options.value ? this.value(b) : this.output(this.options.value),
                        this.options.units.length &&
                            a.each(this.options.units, function (a, b) {
                                b.length > c.length && (c = b);
                            });
                },
                output: function (a, b) {
                    return (a = (a + "").split(".").join(this.options.decimalMark)), (b = b || !0), b && this.$input.val(a), a;
                },
                parseInput: function (a) {
                    return (a = (a + "").split(this.options.decimalMark).join("."));
                },
                change: function () {
                    var a = this.parseInput(this.$input.val()) || "";
                    this.options.units.length || "." !== this.options.decimalMark
                        ? (a = this.parseValueWithUnit(a))
                        : a / 1
                        ? (a = this.options.value = this.checkMaxMin(a / 1))
                        : ((a = this.checkMaxMin(a.replace(/[^0-9.-]/g, "") || "")), (this.options.value = a / 1)),
                        this.output(a),
                        (this.changeFlag = !1),
                        this.triggerChangedEvent();
                },
                changeFlag: function () {
                    this.changeFlag = !0;
                },
                stopSpin: function () {
                    void 0 !== this.switches.timeout && (clearTimeout(this.switches.timeout), (this.switches.count = 1), this.triggerChangedEvent());
                },
                triggerChangedEvent: function () {
                    var a = this.value();
                    a !== this.lastValue && ((this.lastValue = a), this.$element.trigger("changed.fu.spinbox", this.output(a, !1)));
                },
                startSpin: function (b) {
                    if (!this.options.disabled) {
                        var c = this.switches.count;
                        1 === c ? (this.step(b), (c = 1)) : (c = 3 > c ? 1.5 : 8 > c ? 2.5 : 4),
                            (this.switches.timeout = setTimeout(
                                a.proxy(function () {
                                    this.iterate(b);
                                }, this),
                                this.switches.speed / c
                            )),
                            this.switches.count++;
                    }
                },
                iterate: function (a) {
                    this.step(a), this.startSpin(a);
                },
                step: function (a) {
                    var b, c, d, e;
                    if ((this.changeFlag && this.change(), (d = this.options.value), (e = a ? this.options.max : this.options.min), a ? e > d : d > e)) {
                        var f = d + (a ? 1 : -1) * this.options.step;
                        this.options.step % 1 !== 0 && ((b = (this.options.step + "").split(".")[1].length), (c = Math.pow(10, b)), (f = Math.round(f * c) / c)), this.value((a ? f > e : e > f) ? e : f);
                    } else if (this.options.cycle) {
                        var g = a ? this.options.min : this.options.max;
                        this.value(g);
                    }
                },
                value: function (a) {
                    return a || 0 === a
                        ? this.options.units.length || "." !== this.options.decimalMark
                            ? (this.output(this.parseValueWithUnit(a + (this.unit || ""))), this)
                            : !isNaN(parseFloat(a)) && isFinite(a)
                            ? ((this.options.value = a / 1), this.output(a + (this.unit ? this.unit : "")), this)
                            : void 0
                        : (this.changeFlag && this.change(), this.unit ? this.options.value + this.unit : this.output(this.options.value, !1));
                },
                isUnitLegal: function (b) {
                    var c;
                    return (
                        a.each(this.options.units, function (a, d) {
                            return d.toLowerCase() === b.toLowerCase() ? ((c = b.toLowerCase()), !1) : void 0;
                        }),
                        c
                    );
                },
                parseValueWithUnit: function (a) {
                    var b = a.replace(/[^a-zA-Z]/g, ""),
                        c = a.replace(/[^0-9.-]/g, "");
                    return b && (b = this.isUnitLegal(b)), (this.options.value = this.checkMaxMin(c / 1)), (this.unit = b || void 0), this.options.value + (b || "");
                },
                checkMaxMin: function (a) {
                    return isNaN(parseFloat(a)) ? a : ((a <= this.options.max && a >= this.options.min) || (a = a >= this.options.max ? this.options.max : this.options.min), a);
                },
                disable: function () {
                    (this.options.disabled = !0), this.$element.addClass("disabled"), this.$input.attr("disabled", ""), this.$element.find("button").addClass("disabled");
                },
                enable: function () {
                    (this.options.disabled = !1), this.$element.removeClass("disabled"), this.$input.removeAttr("disabled"), this.$element.find("button").removeClass("disabled");
                },
                keydown: function (a) {
                    var b = a.keyCode;
                    38 === b ? this.step(!0) : 40 === b && this.step(!1);
                },
                keyup: function (a) {
                    var b = a.keyCode;
                    (38 === b || 40 === b) && this.triggerChangedEvent();
                },
                bindMousewheelListeners: function () {
                    var b = this.$input.get(0);
                    b.addEventListener
                        ? (b.addEventListener("mousewheel", a.proxy(this.mousewheelHandler, this), !1), b.addEventListener("DOMMouseScroll", a.proxy(this.mousewheelHandler, this), !1))
                        : b.attachEvent("onmousewheel", a.proxy(this.mousewheelHandler, this));
                },
                mousewheelHandler: function (a) {
                    var b = window.event || a,
                        c = Math.max(-1, Math.min(1, b.wheelDelta || -b.detail)),
                        d = this;
                    return (
                        clearTimeout(this.mousewheelTimeout),
                        (this.mousewheelTimeout = setTimeout(function () {
                            d.triggerChangedEvent();
                        }, 300)),
                        this.step(0 > c ? !0 : !1),
                        b.preventDefault ? b.preventDefault() : (b.returnValue = !1),
                        !1
                    );
                },
            }),
                (a.fn.spinbox = function (b) {
                    var d,
                        e = Array.prototype.slice.call(arguments, 1),
                        f = this.each(function () {
                            var f = a(this),
                                g = f.data("fu.spinbox"),
                                h = "object" == typeof b && b;
                            g || f.data("fu.spinbox", (g = new c(this, h))), "string" == typeof b && (d = g[b].apply(g, e));
                        });
                    return void 0 === d ? f : d;
                }),
                (a.fn.spinbox.defaults = { value: 0, min: 0, max: 999, step: 1, hold: !0, speed: "medium", disabled: !1, cycle: !1, units: [], decimalMark: "." }),
                (a.fn.spinbox.Constructor = c),
                (a.fn.spinbox.noConflict = function () {
                    return (a.fn.spinbox = b), this;
                }),
                a(document).on("mousedown.fu.spinbox.data-api", "[data-initialize=spinbox]", function (b) {
                    var c = a(b.target).closest(".spinbox");
                    c.data("fu.spinbox") || c.spinbox(c.data());
                }),
                a(function () {
                    a("[data-initialize=spinbox]").each(function () {
                        var b = a(this);
                        b.data("fu.spinbox") || b.spinbox(b.data());
                    });
                });
        })(a),
        (function (a) {
            var b = a.fn.tree,
                c = function (b, c) {
                    (this.$element = a(b)),
                        (this.options = a.extend({}, a.fn.tree.defaults, c)),
                        this.$element.on(
                            "click.fu.tree",
                            ".tree-item",
                            a.proxy(function (a) {
                                this.selectItem(a.currentTarget);
                            }, this)
                        ),
                        this.$element.on(
                            "click.fu.tree",
                            ".tree-branch-name",
                            a.proxy(function (a) {
                                this.openFolder(a.currentTarget);
                            }, this)
                        ),
                        this.options.folderSelect &&
                            (this.$element.off("click.fu.tree", ".tree-branch-name"),
                            this.$element.on(
                                "click.fu.tree",
                                ".icon-caret",
                                a.proxy(function (b) {
                                    this.openFolder(a(b.currentTarget).parent());
                                }, this)
                            ),
                            this.$element.on(
                                "click.fu.tree",
                                ".tree-branch-name",
                                a.proxy(function (b) {
                                    this.selectFolder(a(b.currentTarget));
                                }, this)
                            )),
                        this.render();
                };
            (c.prototype = {
                constructor: c,
                destroy: function () {
                    return this.$element.find("li:not([data-template])").remove(), this.$element.remove(), this.$element[0].outerHTML;
                },
                render: function () {
                    this.populate(this.$element);
                },
                populate: function (b) {
                    var c = this,
                        d = b.hasClass("tree") ? b : b.parent(),
                        e = d.find(".tree-loader:eq(0)"),
                        f = d.data();
                    e.removeClass("hide"),
                        this.options.dataSource(f ? f : {}, function (f) {
                            e.addClass("hide"),
                                a.each(f.data, function (e, f) {
                                    var g;
                                    "folder" === f.type
                                        ? ((g = c.$element.find("[data-template=treebranch]:eq(0)").clone().removeClass("hide").removeAttr("data-template")), g.data(f), g.find(".tree-branch-name > .tree-label").html(f.text || f.name))
                                        : "item" === f.type &&
                                          ((g = c.$element.find("[data-template=treeitem]:eq(0)").clone().removeClass("hide").removeAttr("data-template")), g.find(".tree-item-name > .tree-label").html(f.text || f.name), g.data(f));
                                    var h = f.attr || f.dataAttributes || [];
                                    a.each(h, function (a, b) {
                                        switch (a) {
                                            case "cssClass":
                                            case "class":
                                            case "className":
                                                g.addClass(b);
                                                break;
                                            case "data-icon":
                                                g
                                                    .find(".icon-item")
                                                    .removeClass()
                                                    .addClass("icon-item " + b),
                                                    g.attr(a, b);
                                                break;
                                            case "id":
                                                g.attr(a, b), g.attr("aria-labelledby", b + "-label"), g.find(".tree-branch-name > .tree-label").attr("id", b + "-label");
                                                break;
                                            default:
                                                g.attr(a, b);
                                        }
                                    }),
                                        b.hasClass("tree-branch-header") ? d.find(".tree-branch-children:eq(0)").append(g) : b.append(g);
                                }),
                                c.$element.trigger("loaded.fu.tree", d);
                        });
                },
                selectItem: function (b) {
                    var c = a(b),
                        d = c.data(),
                        e = this.$element.find(".tree-selected"),
                        f = [],
                        g = c.find(".icon-item");
                    this.options.multiSelect
                        ? a.each(e, function (b, d) {
                              var e = a(d);
                              e[0] !== c[0] && f.push(a(d).data());
                          })
                        : e[0] !== c[0] && (e.removeClass("tree-selected").find(".glyphicon").removeClass("glyphicon-ok").addClass("fueluxicon-bullet"), f.push(d));
                    var h = "selected";
                    c.hasClass("tree-selected")
                        ? ((h = "deselected"), c.removeClass("tree-selected"), (g.hasClass("glyphicon-ok") || g.hasClass("fueluxicon-bullet")) && g.removeClass("glyphicon-ok").addClass("fueluxicon-bullet"))
                        : (c.addClass("tree-selected"), (g.hasClass("glyphicon-ok") || g.hasClass("fueluxicon-bullet")) && g.removeClass("fueluxicon-bullet").addClass("glyphicon-ok"), this.options.multiSelect && f.push(d)),
                        this.$element.trigger(h + ".fu.tree", { target: d, selected: f }),
                        c.trigger("updated.fu.tree", { selected: f, item: c, eventType: h });
                },
                openFolder: function (b) {
                    var c,
                        d,
                        e,
                        f = a(b);
                    this.options.folderSelect || (f = a(b).parent()), (c = f.closest(".tree-branch")), (d = c.find(".tree-branch-children")), (e = d.eq(0));
                    var g, h, i;
                    f.find(".glyphicon-folder-close").length
                        ? ((g = "opened"), (h = ".glyphicon-folder-close"), (i = "glyphicon-folder-open"), c.addClass("tree-open"), c.attr("aria-expanded", "true"), e.removeClass("hide"), d.children().length || this.populate(d))
                        : f.find(".glyphicon-folder-open") &&
                          ((g = "closed"), (h = ".glyphicon-folder-open"), (i = "glyphicon-folder-close"), c.removeClass("tree-open"), c.attr("aria-expanded", "false"), e.addClass("hide"), this.options.cacheItems || e.empty()),
                        c.find("> .tree-branch-header .icon-folder").eq(0).removeClass("glyphicon-folder-close glyphicon-folder-open").addClass(i),
                        this.$element.trigger(g + ".fu.tree", c.data());
                },
                selectFolder: function (b) {
                    var c = a(b),
                        d = c.closest(".tree-branch"),
                        e = this.$element.find(".tree-branch.tree-selected"),
                        f = d.data(),
                        g = [],
                        h = "selected";
                    d.hasClass("tree-selected") ? ((h = "deselected"), d.removeClass("tree-selected")) : d.addClass("tree-selected"),
                        this.options.multiSelect
                            ? ((e = this.$element.find(".tree-branch.tree-selected")),
                              a.each(e, function (b, d) {
                                  var e = a(d);
                                  e[0] !== c[0] && g.push(a(d).data());
                              }))
                            : e[0] !== c[0] && (e.removeClass("tree-selected"), g.push(f)),
                        this.$element.trigger(h + ".fu.tree", { target: f, selected: g }),
                        c.trigger("updated.fu.tree", { selected: g, item: c, eventType: h });
                },
                selectedItems: function () {
                    var b = this.$element.find(".tree-selected"),
                        c = [];
                    return (
                        a.each(b, function (b, d) {
                            c.push(a(d).data());
                        }),
                        c
                    );
                },
                collapse: function () {
                    var b = this.options.cacheItems;
                    this.$element.find(".icon-folder-open").each(function () {
                        var c = a(this).removeClass("icon-folder-close icon-folder-open").addClass("icon-folder-close"),
                            d = c.parent().parent(),
                            e = d.children(".tree-branch-children");
                        e.addClass("hide"), b || e.empty();
                    });
                },
            }),
                (a.fn.tree = function (b) {
                    var d,
                        e = Array.prototype.slice.call(arguments, 1),
                        f = this.each(function () {
                            var f = a(this),
                                g = f.data("fu.tree"),
                                h = "object" == typeof b && b;
                            g || f.data("fu.tree", (g = new c(this, h))), "string" == typeof b && (d = g[b].apply(g, e));
                        });
                    return void 0 === d ? f : d;
                }),
                (a.fn.tree.defaults = { dataSource: function () {}, multiSelect: !1, cacheItems: !0, folderSelect: !0 }),
                (a.fn.tree.Constructor = c),
                (a.fn.tree.noConflict = function () {
                    return (a.fn.tree = b), this;
                });
        })(a),
        (function (a) {
            var b = a.fn.wizard,
                c = function (b, c) {
                    var d;
                    (this.$element = a(b)),
                        (this.options = a.extend({}, a.fn.wizard.defaults, c)),
                        (this.options.disablePreviousStep = "previous" === this.$element.attr("data-restrict") ? !0 : this.options.disablePreviousStep),
                        (this.currentStep = this.options.selectedItem.step),
                        (this.numSteps = this.$element.find(".steps li").length),
                        (this.$prevBtn = this.$element.find("button.btn-prev")),
                        (this.$nextBtn = this.$element.find("button.btn-next")),
                        (d = this.$nextBtn.children().detach()),
                        (this.nextText = a.trim(this.$nextBtn.text())),
                        this.$nextBtn.append(d),
                        this.$prevBtn.on("click.fu.wizard", a.proxy(this.previous, this)),
                        this.$nextBtn.on("click.fu.wizard", a.proxy(this.next, this)),
                        this.$element.on("click.fu.wizard", "li.complete", a.proxy(this.stepclicked, this)),
                        this.selectedItem(this.options.selectedItem),
                        this.options.disablePreviousStep && (this.$prevBtn.attr("disabled", !0), this.$element.find(".steps").addClass("previous-disabled"));
                };
            (c.prototype = {
                constructor: c,
                destroy: function () {
                    return this.$element.remove(), this.$element[0].outerHTML;
                },
                addSteps: function (b) {
                    var c,
                        d,
                        e,
                        f,
                        g,
                        h,
                        i = [].slice.call(arguments).slice(1),
                        j = this.$element.find(".steps"),
                        k = this.$element.find(".step-content");
                    for (
                        b = -1 === b || b > this.numSteps + 1 ? this.numSteps + 1 : b,
                            i[0] instanceof Array && (i = i[0]),
                            g = j.find("li:nth-child(" + b + ")"),
                            f = k.find(".step-pane:nth-child(" + b + ")"),
                            g.length < 1 && (g = null),
                            c = 0,
                            d = i.length;
                        d > c;
                        c++
                    )
                        (h = a('<li data-step="' + b + '"><span class="badge badge-info"></span></li>')),
                            h.append(i[c].label || "").append('<span class="chevron"></span>'),
                            h.find(".badge").append(i[c].badge || b),
                            (e = a('<div class="step-pane" data-step="' + b + '"></div>')),
                            e.append(i[c].pane || ""),
                            g ? (g.before(h), f.before(e)) : (j.append(h), k.append(e)),
                            b++;
                    this.syncSteps(), (this.numSteps = j.find("li").length), this.setState();
                },
                removeSteps: function (b, c) {
                    var d,
                        e = "nextAll",
                        f = 0,
                        g = this.$element.find(".steps"),
                        h = this.$element.find(".step-content");
                    (c = void 0 !== c ? c : 1),
                        b > g.find("li").length ? (d = g.find("li:last")) : ((d = g.find("li:nth-child(" + b + ")").prev()), d.length < 1 && ((e = "children"), (d = g))),
                        d[e]().each(function () {
                            var b = a(this),
                                d = b.attr("data-step");
                            return c > f ? (b.remove(), h.find('.step-pane[data-step="' + d + '"]:first').remove(), void f++) : !1;
                        }),
                        this.syncSteps(),
                        (this.numSteps = g.find("li").length),
                        this.setState();
                },
                setState: function () {
                    var b = this.currentStep > 1,
                        c = 1 === this.currentStep,
                        d = this.currentStep === this.numSteps;
                    this.options.disablePreviousStep || this.$prevBtn.attr("disabled", c === !0 || b === !1);
                    var e = this.$nextBtn.attr("data-last");
                    if (e) {
                        this.lastText = e;
                        var f = this.nextText;
                        d === !0 ? ((f = this.lastText), this.$element.addClass("complete")) : this.$element.removeClass("complete");
                        var g = this.$nextBtn.children().detach();
                        this.$nextBtn.text(f).append(g);
                    }
                    var h = this.$element.find(".steps li");
                    h.removeClass("active").removeClass("complete"), h.find("span.badge").removeClass("badge-info").removeClass("badge-success");
                    var i = ".steps li:lt(" + (this.currentStep - 1) + ")",
                        j = this.$element.find(i);
                    j.addClass("complete"), j.find("span.badge").addClass("badge-success");
                    var k = ".steps li:eq(" + (this.currentStep - 1) + ")",
                        l = this.$element.find(k);
                    l.addClass("active"), l.find("span.badge").addClass("badge-info");
                    var m = this.$element.find(".step-content"),
                        n = l.attr("data-step");
                    m.find(".step-pane").removeClass("active"), m.find('.step-pane[data-step="' + n + '"]:first').addClass("active"), this.$element.find(".steps").first().attr("style", "margin-left: 0");
                    var o = 0;
                    this.$element.find(".steps > li").each(function () {
                        o += a(this).outerWidth();
                    });
                    var p = 0;
                    if (((p = this.$element.find(".actions").length ? this.$element.width() - this.$element.find(".actions").first().outerWidth() : this.$element.width()), o > p)) {
                        var q = o - p;
                        this.$element
                            .find(".steps")
                            .first()
                            .attr("style", "margin-left: -" + q + "px"),
                            this.$element.find("li.active").first().position().left < 200 &&
                                ((q += this.$element.find("li.active").first().position().left - 200),
                                1 > q
                                    ? this.$element.find(".steps").first().attr("style", "margin-left: 0")
                                    : this.$element
                                          .find(".steps")
                                          .first()
                                          .attr("style", "margin-left: -" + q + "px"));
                    }
                    if ("undefined" != typeof this.initialized) {
                        var r = a.Event("changed.fu.wizard");
                        this.$element.trigger(r, { step: this.currentStep });
                    }
                    this.initialized = !0;
                },
                stepclicked: function (b) {
                    var c = a(b.currentTarget),
                        d = this.$element.find(".steps li").index(c),
                        e = !0;
                    if ((this.options.disablePreviousStep && d < this.currentStep && (e = !1), e)) {
                        var f = a.Event("stepclicked.fu.wizard");
                        if ((this.$element.trigger(f, { step: d + 1 }), f.isDefaultPrevented())) return;
                        (this.currentStep = d + 1), this.setState();
                    }
                },
                syncSteps: function () {
                    var b = 1,
                        c = this.$element.find(".steps"),
                        d = this.$element.find(".step-content");
                    c.children().each(function () {
                        var c = a(this),
                            e = c.find(".badge"),
                            f = c.attr("data-step");
                        isNaN(parseInt(e.html(), 10)) || e.html(b), c.attr("data-step", b), d.find('.step-pane[data-step="' + f + '"]:last').attr("data-step", b), b++;
                    });
                },
                previous: function () {
                    var b = this.currentStep > 1;
                    if ((this.options.disablePreviousStep && (b = !1), b)) {
                        var c = a.Event("actionclicked.fu.wizard");
                        if ((this.$element.trigger(c, { step: this.currentStep, direction: "previous" }), c.isDefaultPrevented())) return;
                        (this.currentStep -= 1), this.setState();
                    }
                    this.$prevBtn.is(":disabled") ? this.$nextBtn.focus() : this.$prevBtn.focus();
                },
                next: function () {
                    var b = this.currentStep + 1 <= this.numSteps,
                        c = this.currentStep === this.numSteps;
                    if (b) {
                        var d = a.Event("actionclicked.fu.wizard");
                        if ((this.$element.trigger(d, { step: this.currentStep, direction: "next" }), d.isDefaultPrevented())) return;
                        (this.currentStep += 1), this.setState();
                    } else c && this.$element.trigger("finished.fu.wizard");
                    this.$nextBtn.is(":disabled") ? this.$prevBtn.focus() : this.$nextBtn.focus();
                },
                selectedItem: function (a) {
                    var b, c;
                    return (
                        a
                            ? ((c = a.step || -1),
                              c >= 1 && c <= this.numSteps
                                  ? ((this.currentStep = c), this.setState())
                                  : ((c = this.$element.find(".steps li.active:first").attr("data-step")), isNaN(c) || ((this.currentStep = parseInt(c, 10)), this.setState())),
                              (b = this))
                            : (b = { step: this.currentStep }),
                        b
                    );
                },
            }),
                (a.fn.wizard = function (b) {
                    var d,
                        e = Array.prototype.slice.call(arguments, 1),
                        f = this.each(function () {
                            var f = a(this),
                                g = f.data("fu.wizard"),
                                h = "object" == typeof b && b;
                            g || f.data("fu.wizard", (g = new c(this, h))), "string" == typeof b && (d = g[b].apply(g, e));
                        });
                    return void 0 === d ? f : d;
                }),
                (a.fn.wizard.defaults = { disablePreviousStep: !1, selectedItem: { step: -1 } }),
                (a.fn.wizard.Constructor = c),
                (a.fn.wizard.noConflict = function () {
                    return (a.fn.wizard = b), this;
                }),
                a(document).on("mouseover.fu.wizard.data-api", "[data-initialize=wizard]", function (b) {
                    var c = a(b.target).closest(".wizard");
                    c.data("fu.wizard") || c.wizard(c.data());
                }),
                a(function () {
                    a("[data-initialize=wizard]").each(function () {
                        var b = a(this);
                        b.data("fu.wizard") || b.wizard(b.data());
                    });
                });
        })(a),
        (function (a) {
            var b = a.fn.infinitescroll,
                c = function (b, c) {
                    (this.$element = a(b)),
                        this.$element.addClass("infinitescroll"),
                        (this.options = a.extend({}, a.fn.infinitescroll.defaults, c)),
                        (this.curScrollTop = this.$element.scrollTop()),
                        (this.curPercentage = this.getPercentage()),
                        (this.fetchingData = !1),
                        this.$element.on("scroll.fu.infinitescroll", a.proxy(this.onScroll, this)),
                        this.onScroll();
                };
            (c.prototype = {
                constructor: c,
                destroy: function () {
                    return this.$element.remove(), this.$element.empty(), this.$element[0].outerHTML;
                },
                disable: function () {
                    this.$element.off("scroll.fu.infinitescroll");
                },
                enable: function () {
                    this.$element.on("scroll.fu.infinitescroll", a.proxy(this.onScroll, this));
                },
                end: function (b) {
                    var c = a('<div class="infinitescroll-end"></div>');
                    c.append(b ? b : "---------"), this.$element.append(c), this.disable();
                },
                getPercentage: function () {
                    var a = "border-box" === this.$element.css("box-sizing") ? this.$element.outerHeight() : this.$element.height(),
                        b = this.$element.get(0).scrollHeight;
                    return b > a ? (a / (b - this.curScrollTop)) * 100 : 0;
                },
                fetchData: function (b) {
                    var c,
                        d = a('<div class="infinitescroll-load"></div>'),
                        e = this,
                        f = function () {
                            var b = { percentage: e.curPercentage, scrollTop: e.curScrollTop },
                                c = a('<div class="loader"></div>');
                            d.append(c),
                                c.loader(),
                                e.options.dataSource &&
                                    e.options.dataSource(b, function (a) {
                                        var b;
                                        d.remove(), a.content && e.$element.append(a.content), a.end && ((b = a.end !== !0 ? a.end : void 0), e.end(b)), (e.fetchingData = !1);
                                    });
                        };
                    (this.fetchingData = !0),
                        this.$element.append(d),
                        this.options.hybrid && b !== !0
                            ? ((c = a('<button type="button" class="btn btn-primary"></button>')),
                              c.append("object" == typeof this.options.hybrid ? this.options.hybrid.label : '<span class="glyphicon glyphicon-repeat"></span>'),
                              c.on("click.fu.infinitescroll", function () {
                                  c.remove(), f();
                              }),
                              d.append(c))
                            : f();
                },
                onScroll: function () {
                    (this.curScrollTop = this.$element.scrollTop()), (this.curPercentage = this.getPercentage()), !this.fetchingData && this.curPercentage >= this.options.percentage && this.fetchData();
                },
            }),
                (a.fn.infinitescroll = function (b) {
                    var d,
                        e = Array.prototype.slice.call(arguments, 1),
                        f = this.each(function () {
                            var f = a(this),
                                g = f.data("fu.infinitescroll"),
                                h = "object" == typeof b && b;
                            g || f.data("fu.infinitescroll", (g = new c(this, h))), "string" == typeof b && (d = g[b].apply(g, e));
                        });
                    return void 0 === d ? f : d;
                }),
                (a.fn.infinitescroll.defaults = { dataSource: null, hybrid: !1, percentage: 95 }),
                (a.fn.infinitescroll.Constructor = c),
                (a.fn.infinitescroll.noConflict = function () {
                    return (a.fn.infinitescroll = b), this;
                });
        })(a),
        (function (a) {
            var b = a.fn.pillbox,
                c = function (b, c) {
                    (this.$element = a(b)),
                        (this.$moreCount = this.$element.find(".pillbox-more-count")),
                        (this.$pillGroup = this.$element.find(".pill-group")),
                        (this.$addItem = this.$element.find(".pillbox-add-item")),
                        (this.$addItemWrap = this.$addItem.parent()),
                        (this.$suggest = this.$element.find(".suggest")),
                        (this.$pillHTML = '<li class="btn btn-default pill">	<span></span>	<span class="glyphicon glyphicon-close">		<span class="sr-only">Remove</span>	</span></li>'),
                        (this.options = a.extend({}, a.fn.pillbox.defaults, c)),
                        -1 === this.options.readonly ? void 0 !== this.$element.attr("data-readonly") && this.readonly(!0) : this.options.readonly && this.readonly(!0),
                        (this.acceptKeyCodes = this._generateObject(this.options.acceptKeyCodes)),
                        this.$element.on("click.fu.pillbox", ".pill-group > .pill", a.proxy(this.itemClicked, this)),
                        this.$element.on("click.fu.pillbox", a.proxy(this.inputFocus, this)),
                        this.$element.on("keydown.fu.pillbox", ".pillbox-add-item", a.proxy(this.inputEvent, this)),
                        this.options.onKeyDown && this.$element.on("mousedown.fu.pillbox", ".suggest > li", a.proxy(this.suggestionClick, this)),
                        this.options.edit && (this.$element.addClass("pills-editable"), this.$element.on("blur.fu.pillbox", ".pillbox-add-item", a.proxy(this.cancelEdit, this)));
                };
            (c.prototype = {
                constructor: c,
                destroy: function () {
                    return this.$element.remove(), this.$element[0].outerHTML;
                },
                items: function () {
                    var b = this;
                    return this.$pillGroup
                        .children(".pill")
                        .map(function () {
                            return b.getItemData(a(this));
                        })
                        .get();
                },
                itemClicked: function (b) {
                    var c,
                        d = a(b.target);
                    if ((b.preventDefault(), b.stopPropagation(), this._closeSuggestions(), d.hasClass("pill"))) c = d;
                    else if (((c = d.parent()), void 0 === this.$element.attr("data-readonly"))) {
                        if (d.hasClass("glyphicon-close")) return this.options.onRemove ? this.options.onRemove(this.getItemData(c, { el: c }), a.proxy(this._removeElement, this)) : this._removeElement(this.getItemData(c, { el: c })), !1;
                        if (this.options.edit) {
                            if (c.find(".pillbox-list-edit").length) return !1;
                            this.openEdit(c);
                        }
                    }
                    this.$element.trigger("clicked.fu.pillbox", this.getItemData(c));
                },
                readonly: function (a) {
                    a ? this.$element.attr("data-readonly", "readonly") : this.$element.removeAttr("data-readonly"), this.options.truncate && this.truncate(a);
                },
                suggestionClick: function (b) {
                    var c = a(b.currentTarget),
                        d = { text: c.html(), value: c.data("value") };
                    b.preventDefault(), this.$addItem.val(""), c.data("attr") && (d.attr = JSON.parse(c.data("attr"))), (d.data = c.data("data")), this.addItems(d, !0), this._closeSuggestions();
                },
                itemCount: function () {
                    return this.$pillGroup.children(".pill").length;
                },
                addItems: function () {
                    var b,
                        c,
                        d,
                        e = this;
                    !isFinite(String(arguments[0])) || arguments[0] instanceof Array ? ((b = [].slice.call(arguments).slice(0)), (d = b[1] && !b[1].text)) : ((b = [].slice.call(arguments).slice(1)), (c = arguments[0])),
                        b[0] instanceof Array && (b = b[0]),
                        b.length &&
                            (a.each(b, function (a, c) {
                                var d = { text: c.text, value: c.value ? c.value : c.text, el: e.$pillHTML };
                                c.attr && (d.attr = c.attr), c.data && (d.data = c.data), (b[a] = d);
                            }),
                            this.options.edit && this.currentEdit && (b[0].el = this.currentEdit.wrap("<div></div>").parent().html()),
                            d && b.pop(1),
                            e.options.onAdd && d
                                ? this.options.edit && this.currentEdit
                                    ? e.options.onAdd(b[0], a.proxy(e.saveEdit, this))
                                    : e.options.onAdd(b[0], a.proxy(e.placeItems, this))
                                : this.options.edit && this.currentEdit
                                ? e.saveEdit(b)
                                : c
                                ? e.placeItems(c, b)
                                : e.placeItems(b, d));
                },
                removeItems: function (a, b) {
                    var c,
                        d,
                        e = this;
                    if (a) for (b = b ? b : 1, c = 0; b > c && ((d = e.$pillGroup.find("> .pill:nth-child(" + a + ")")), d); c++) d.remove();
                    else this.$pillGroup.find(".pill").remove(), this._removePillTrigger({ method: "removeAll" });
                },
                placeItems: function () {
                    var b,
                        c,
                        d,
                        e,
                        f = [];
                    !isFinite(String(arguments[0])) || arguments[0] instanceof Array ? ((b = [].slice.call(arguments).slice(0)), (e = b[1] && !b[1].text)) : ((b = [].slice.call(arguments).slice(1)), (c = arguments[0])),
                        b[0] instanceof Array && (b = b[0]),
                        b.length &&
                            (a.each(b, function (b, c) {
                                var d = a(c.el);
                                d.attr("data-value", c.value),
                                    d.find("span:first").html(c.text),
                                    c.attr &&
                                        a.each(c.attr, function (a, b) {
                                            "cssClass" === a || "class" === a ? d.addClass(b) : d.attr(a, b);
                                        }),
                                    c.data && d.data("data", c.data),
                                    f.push(d);
                            }),
                            this.$pillGroup.children(".pill").length > 0
                                ? c
                                    ? ((d = this.$pillGroup.find(".pill:nth-child(" + c + ")")), d.length ? d.before(f) : this.$pillGroup.children(".pill:last").after(f))
                                    : this.$pillGroup.children(".pill:last").after(f)
                                : this.$pillGroup.prepend(f),
                            e && this.$element.trigger("added.fu.pillbox", { text: b[0].text, value: b[0].value }));
                },
                inputEvent: function (a) {
                    var b,
                        c,
                        d,
                        e,
                        f = this,
                        g = this.$addItem.val();
                    if (this.acceptKeyCodes[a.keyCode])
                        return (
                            this.options.onKeyDown && this._isSuggestionsOpen() && ((e = this.$suggest.find(".pillbox-suggest-sel")), e.length && ((g = e.html()), (b = e.data("value")), (c = e.data("attr")))),
                            (g.replace(/[ ]*\,[ ]*/, "").match(/\S/) || (this.options.allowEmptyPills && g.length)) &&
                                (this._closeSuggestions(),
                                this.$addItem.hide(),
                                c ? this.addItems({ text: g, value: b, attr: JSON.parse(c) }, !0) : this.addItems({ text: g, value: b }, !0),
                                setTimeout(function () {
                                    f.$addItem.show().val("").attr({ size: 10 });
                                }, 0)),
                            a.preventDefault(),
                            !0
                        );
                    if (8 === a.keyCode || 46 === a.keyCode) {
                        if (!g.length)
                            return (
                                a.preventDefault(),
                                this.options.edit && this.currentEdit
                                    ? (this.cancelEdit(), !0)
                                    : (this._closeSuggestions(), (d = this.$pillGroup.children(".pill:last")), d.hasClass("pillbox-highlight") ? this._removeElement(this.getItemData(d, { el: d })) : d.addClass("pillbox-highlight"), !0)
                            );
                    } else g.length > 10 && this.$addItem.width() < this.$pillGroup.width() - 6 && this.$addItem.attr({ size: g.length + 3 });
                    if ((this.$pillGroup.find(".pill").removeClass("pillbox-highlight"), this.options.onKeyDown)) {
                        if (9 === a.keyCode || 38 === a.keyCode || 40 === a.keyCode) return this._isSuggestionsOpen() && this._keySuggestions(a), !0;
                        (this.callbackId = a.timeStamp),
                            this.options.onKeyDown({ event: a, value: g }, function (b) {
                                f._openSuggestions(a, b);
                            });
                    }
                },
                openEdit: function (a) {
                    var b = a.index() + 1,
                        c = this.$addItemWrap.detach().hide();
                    this.$pillGroup.find(".pill:nth-child(" + b + ")").before(c), (this.currentEdit = a.detach()), c.addClass("editing"), this.$addItem.val(a.find("span:first").html()), c.show(), this.$addItem.focus().select();
                },
                cancelEdit: function (a) {
                    var b;
                    return this.currentEdit
                        ? (this._closeSuggestions(),
                          a && this.$addItemWrap.before(this.currentEdit),
                          (this.currentEdit = !1),
                          (b = this.$addItemWrap.detach()),
                          b.removeClass("editing"),
                          this.$addItem.val(""),
                          void this.$pillGroup.append(b))
                        : !1;
                },
                saveEdit: function () {
                    var b = arguments[0][0] ? arguments[0][0] : arguments[0];
                    (this.currentEdit = a(b.el)),
                        this.currentEdit.data("value", b.value),
                        this.currentEdit.find("span:first").html(b.text),
                        this.$addItemWrap.hide(),
                        this.$addItemWrap.before(this.currentEdit),
                        (this.currentEdit = !1),
                        this.$addItem.val(""),
                        this.$addItemWrap.removeClass("editing"),
                        this.$pillGroup.append(this.$addItemWrap.detach().show()),
                        this.$element.trigger("edited.fu.pillbox", { value: b.value, text: b.text });
                },
                removeBySelector: function () {
                    var b = [].slice.call(arguments).slice(0),
                        c = this;
                    a.each(b, function (a, b) {
                        c.$pillGroup.find(b).remove();
                    }),
                        this._removePillTrigger({ method: "removeBySelector", removedSelectors: b });
                },
                removeByValue: function () {
                    var b = [].slice.call(arguments).slice(0),
                        c = this;
                    a.each(b, function (a, b) {
                        c.$pillGroup.find('> .pill[data-value="' + b + '"]').remove();
                    }),
                        this._removePillTrigger({ method: "removeByValue", removedValues: b });
                },
                removeByText: function () {
                    var b = [].slice.call(arguments).slice(0),
                        c = this;
                    a.each(b, function (a, b) {
                        c.$pillGroup.find('> .pill:contains("' + b + '")').remove();
                    }),
                        this._removePillTrigger({ method: "removeByText", removedText: b });
                },
                truncate: function (b) {
                    var c,
                        d,
                        e,
                        f,
                        g,
                        h = this;
                    this.$element.removeClass("truncate"),
                        this.$addItemWrap.removeClass("truncated"),
                        this.$pillGroup.find(".pill").removeClass("truncated"),
                        b &&
                            (this.$element.addClass("truncate"),
                            (c = this.$element.width()),
                            (d = !1),
                            (e = 0),
                            (f = this.$pillGroup.find(".pill").length),
                            (g = 0),
                            this.$pillGroup.find(".pill").each(function () {
                                var b = a(this);
                                d
                                    ? b.addClass("truncated")
                                    : (e++, h.$moreCount.text(f - e), g + b.outerWidth(!0) + h.$addItemWrap.outerWidth(!0) <= c ? (g += b.outerWidth(!0)) : (h.$moreCount.text(f - e + 1), b.addClass("truncated"), (d = !0)));
                            }),
                            e === f && this.$addItemWrap.addClass("truncated"));
                },
                inputFocus: function () {
                    this.$element.find(".pillbox-add-item").focus();
                },
                getItemData: function (b, c) {
                    return a.extend({ text: b.find("span:first").html() }, b.data(), c);
                },
                _removeElement: function (a) {
                    a.el.remove(), delete a.el, this.$element.trigger("removed.fu.pillbox", a);
                },
                _removePillTrigger: function (a) {
                    this.$element.trigger("removed.fu.pillbox", a);
                },
                _generateObject: function (b) {
                    var c = {};
                    return (
                        a.each(b, function (a, b) {
                            c[b] = !0;
                        }),
                        c
                    );
                },
                _openSuggestions: function (b, c) {
                    var d = a("<ul>");
                    return this.callbackId !== b.timeStamp
                        ? !1
                        : void (
                              c.data &&
                              c.data.length &&
                              (a.each(c.data, function (b, c) {
                                  var e = c.value ? c.value : c.text,
                                      f = a('<li data-value="' + e + '">' + c.text + "</li>");
                                  c.attr && f.data("attr", JSON.stringify(c.attr)), c.data && f.data("data", c.data), d.append(f);
                              }),
                              this.$suggest.html("").append(d.children()),
                              a(document.body).trigger("suggested.fu.pillbox", this.$suggest))
                          );
                },
                _closeSuggestions: function () {
                    this.$suggest.html("").parent().removeClass("open");
                },
                _isSuggestionsOpen: function () {
                    return this.$suggest.parent().hasClass("open");
                },
                _keySuggestions: function (a) {
                    var b,
                        c = this.$suggest.find("li.pillbox-suggest-sel"),
                        d = 38 === a.keyCode;
                    a.preventDefault(),
                        c.length
                            ? ((b = d ? c.prev() : c.next()), b.length || (b = this.$suggest.find(d ? "li:last" : "li:first")), b && (b.addClass("pillbox-suggest-sel"), c.removeClass("pillbox-suggest-sel")))
                            : ((c = this.$suggest.find("li:first")), c.addClass("pillbox-suggest-sel"));
                },
            }),
                (a.fn.pillbox = function (b) {
                    var d,
                        e = Array.prototype.slice.call(arguments, 1),
                        f = this.each(function () {
                            var f = a(this),
                                g = f.data("fu.pillbox"),
                                h = "object" == typeof b && b;
                            g || f.data("fu.pillbox", (g = new c(this, h))), "string" == typeof b && (d = g[b].apply(g, e));
                        });
                    return void 0 === d ? f : d;
                }),
                (a.fn.pillbox.defaults = { onAdd: void 0, onRemove: void 0, onKeyDown: void 0, edit: !1, readonly: -1, truncate: !1, acceptKeyCodes: [13, 188], allowEmptyPills: !1 }),
                (a.fn.pillbox.Constructor = c),
                (a.fn.pillbox.noConflict = function () {
                    return (a.fn.pillbox = b), this;
                }),
                a(document).on("mousedown.fu.pillbox.data-api", "[data-initialize=pillbox]", function (b) {
                    var c = a(b.target).closest(".pillbox");
                    c.data("fu.pillbox") || c.pillbox(c.data());
                }),
                a(function () {
                    a("[data-initialize=pillbox]").each(function () {
                        var b = a(this);
                        b.data("fu.pillbox") || b.pillbox(b.data());
                    });
                });
        })(a),
        (function (a) {
            var b = a.fn.repeater,
                c = function (b, c) {
                    var d,
                        e,
                        f = this;
                    (this.$element = a(b)),
                        (this.$canvas = this.$element.find(".repeater-canvas")),
                        (this.$count = this.$element.find(".repeater-count")),
                        (this.$end = this.$element.find(".repeater-end")),
                        (this.$filters = this.$element.find(".repeater-filters")),
                        (this.$loader = this.$element.find(".repeater-loader")),
                        (this.$pageSize = this.$element.find(".repeater-itemization .selectlist")),
                        (this.$nextBtn = this.$element.find(".repeater-next")),
                        (this.$pages = this.$element.find(".repeater-pages")),
                        (this.$prevBtn = this.$element.find(".repeater-prev")),
                        (this.$primaryPaging = this.$element.find(".repeater-primaryPaging")),
                        (this.$search = this.$element.find(".repeater-search").find(".search")),
                        (this.$secondaryPaging = this.$element.find(".repeater-secondaryPaging")),
                        (this.$start = this.$element.find(".repeater-start")),
                        (this.$viewport = this.$element.find(".repeater-viewport")),
                        (this.$views = this.$element.find(".repeater-views")),
                        (this.eventStamp = new Date().getTime() + (Math.floor(100 * Math.random()) + 1)),
                        (this.currentPage = 0),
                        (this.currentView = null),
                        (this.infiniteScrollingCallback = function () {}),
                        (this.infiniteScrollingCont = null),
                        (this.infiniteScrollingEnabled = !1),
                        (this.infiniteScrollingEnd = null),
                        (this.infiniteScrollingOptions = {}),
                        (this.lastPageInput = 0),
                        (this.options = a.extend({}, a.fn.repeater.defaults, c)),
                        (this.pageIncrement = 0),
                        (this.resizeTimeout = {}),
                        (this.storedDataSourceOpts = null),
                        (this.viewOptions = {}),
                        (this.viewType = null),
                        this.$filters.selectlist(),
                        this.$pageSize.selectlist(),
                        this.$primaryPaging.find(".combobox").combobox(),
                        this.$search.search(),
                        this.$filters.on("changed.fu.selectlist", function (a, b) {
                            f.$element.trigger("filtered.fu.repeater", b), f.render({ clearInfinite: !0, pageIncrement: null });
                        }),
                        this.$nextBtn.on("click.fu.repeater", a.proxy(this.next, this)),
                        this.$pageSize.on("changed.fu.selectlist", function (a, b) {
                            f.$element.trigger("pageSizeChanged.fu.repeater", b), f.render({ pageIncrement: null });
                        }),
                        this.$prevBtn.on("click.fu.repeater", a.proxy(this.previous, this)),
                        this.$primaryPaging.find(".combobox").on("changed.fu.combobox", function (a, b) {
                            f.$element.trigger("pageChanged.fu.repeater", [b.text, b]), f.pageInputChange(b.text);
                        }),
                        this.$search.on("searched.fu.search cleared.fu.search", function (a, b) {
                            f.$element.trigger("searchChanged.fu.repeater", b), f.render({ clearInfinite: !0, pageIncrement: null });
                        }),
                        this.$secondaryPaging.on("blur.fu.repeater", function () {
                            f.pageInputChange(f.$secondaryPaging.val());
                        }),
                        this.$secondaryPaging.on("keyup", function (a) {
                            13 === a.keyCode && f.pageInputChange(f.$secondaryPaging.val());
                        }),
                        this.$views.find("input").on("change.fu.repeater", a.proxy(this.viewChanged, this)),
                        a(window).on("resize.fu.repeater." + this.eventStamp, function () {
                            clearTimeout(f.resizeTimeout),
                                (f.resizeTimeout = setTimeout(function () {
                                    f.resize(), f.$element.trigger("resized.fu.repeater");
                                }, 75));
                        }),
                        this.$loader.loader(),
                        this.$loader.loader("pause"),
                        -1 !== this.options.defaultView ? (e = this.options.defaultView) : ((d = this.$views.find("label.active input")), (e = d.length > 0 ? d.val() : "list")),
                        this.setViewOptions(e),
                        this.initViewTypes(function () {
                            f.resize(), f.$element.trigger("resized.fu.repeater"), f.render({ changeView: e });
                        });
                };
            (c.prototype = {
                constructor: c,
                clear: function (b) {
                    var c = function (b) {
                        var d = [];
                        b.children().each(function () {
                            var b = a(this),
                                e = b.attr("data-preserve");
                            "deep" === e ? (b.detach(), d.push(b)) : "shallow" === e && (c(b), b.detach(), d.push(b));
                        }),
                            b.empty(),
                            b.append(d);
                    };
                    (b = b || {}), b.preserve ? (!this.infiniteScrollingEnabled || b.clearInfinite) && c(this.$canvas) : this.$canvas.empty();
                },
                clearPreservedDataSourceOptions: function () {
                    this.storedDataSourceOpts = null;
                },
                destroy: function () {
                    var b;
                    return (
                        this.$element.find("input").each(function () {
                            a(this).attr("value", a(this).val());
                        }),
                        this.$canvas.empty(),
                        (b = this.$element[0].outerHTML),
                        this.$element.find(".combobox").combobox("destroy"),
                        this.$element.find(".selectlist").selectlist("destroy"),
                        this.$element.find(".search").search("destroy"),
                        this.infiniteScrollingEnabled && a(this.infiniteScrollingCont).infinitescroll("destroy"),
                        this.$element.remove(),
                        a(window).off("resize.fu.repeater." + this.eventStamp),
                        b
                    );
                },
                getDataOptions: function (b, c) {
                    var d,
                        e,
                        f = {},
                        g = {};
                    (b = b || {}),
                        (g.filter = this.$filters.length > 0 ? this.$filters.selectlist("selectedItem") : { text: "All", value: "all" }),
                        (g.view = this.currentView),
                        this.infiniteScrollingEnabled || (g.pageSize = this.$pageSize.length > 0 ? parseInt(this.$pageSize.selectlist("selectedItem").value, 10) : 25),
                        void 0 !== b.pageIncrement && (null === b.pageIncrement ? (this.currentPage = 0) : (this.currentPage += b.pageIncrement)),
                        (g.pageIndex = this.currentPage),
                        (d = this.$search.length > 0 ? this.$search.find("input").val() : ""),
                        "" !== d && (g.search = d),
                        b.dataSourceOptions && ((f = b.dataSourceOptions), b.preserveDataSourceOptions && (this.storedDataSourceOpts = this.storedDataSourceOpts ? a.extend(this.storedDataSourceOpts, f) : f)),
                        this.storedDataSourceOpts && (f = a.extend(this.storedDataSourceOpts, f)),
                        (e = a.fn.repeater.viewTypes[this.viewType] || {}),
                        (e = e.dataOptions),
                        e
                            ? e.call(this, g, function (b) {
                                  c(a.extend(b, f));
                              })
                            : c(a.extend(g, f));
                },
                infiniteScrolling: function (a, b) {
                    var c,
                        d,
                        e = this.$element.find(".repeater-itemization"),
                        f = this.$element.find(".repeater-pagination");
                    (b = b || {}),
                        a
                            ? ((this.infiniteScrollingEnabled = !0), (this.infiniteScrollingEnd = b.end), delete b.dataSource, delete b.end, (this.infiniteScrollingOptions = b), e.hide(), f.hide())
                            : ((c = this.infiniteScrollingCont),
                              (d = c.data()),
                              delete d.infinitescroll,
                              c.off("scroll"),
                              c.removeClass("infinitescroll"),
                              (this.infiniteScrollingCont = null),
                              (this.infiniteScrollingEnabled = !1),
                              (this.infiniteScrollingEnd = null),
                              (this.infiniteScrollingOptions = {}),
                              e.show(),
                              f.show());
                },
                infiniteScrollPaging: function (a) {
                    var b = this.infiniteScrollingEnd !== !0 ? this.infiniteScrollingEnd : void 0,
                        c = a.page,
                        d = a.pages;
                    (this.currentPage = void 0 !== c ? c : 0 / 0), this.currentPage + 1 >= d && this.infiniteScrollingCont.infinitescroll("end", b);
                },
                initInfiniteScrolling: function () {
                    var b,
                        c,
                        d = this.$canvas.find('[data-infinite="true"]:first');
                    (d = d.length < 1 ? this.$canvas : d),
                        d.data("fu.infinitescroll")
                            ? d.infinitescroll("enable")
                            : ((c = this),
                              (b = a.extend({}, this.infiniteScrollingOptions)),
                              (b.dataSource = function (a, b) {
                                  (c.infiniteScrollingCallback = b), c.render({ pageIncrement: 1 });
                              }),
                              d.infinitescroll(b),
                              (this.infiniteScrollingCont = d));
                },
                initViewTypes: function (b) {
                    var c,
                        d,
                        e = [],
                        f = function (a) {
                            var c = function () {
                                a++, d > a ? f(a) : b();
                            };
                            e[a].initialize
                                ? e[a].initialize.call(this, {}, function () {
                                      c();
                                  })
                                : c();
                        };
                    for (c in a.fn.repeater.viewTypes) e.push(a.fn.repeater.viewTypes[c]);
                    (d = e.length), d > 0 ? f(0) : b();
                },
                itemization: function (a) {
                    this.$count.html(a.count || ""), this.$end.html(a.end || ""), this.$start.html(a.start || "");
                },
                next: function () {
                    var a = "disabled";
                    this.$nextBtn.attr(a, a), this.$prevBtn.attr(a, a), (this.pageIncrement = 1), this.$element.trigger("nextClicked.fu.repeater"), this.render({ pageIncrement: this.pageIncrement });
                },
                pageInputChange: function (a) {
                    var b;
                    a !== this.lastPageInput && ((this.lastPageInput = a), (a = parseInt(a, 10) - 1), (b = a - this.currentPage), this.$element.trigger("pageChanged.fu.repeater", a), this.render({ pageIncrement: b }));
                },
                pagination: function (a) {
                    var b,
                        c,
                        d,
                        e = "active",
                        f = "disabled",
                        g = a.page,
                        h = a.pages;
                    if (((this.currentPage = void 0 !== g ? g : 0 / 0), this.$primaryPaging.removeClass(e), this.$secondaryPaging.removeClass(e), h <= this.viewOptions.dropPagingCap)) {
                        for (this.$primaryPaging.addClass(e), b = this.$primaryPaging.find(".dropdown-menu"), b.empty(), c = 0; h > c; c++) (d = c + 1), b.append('<li data-value="' + d + '"><a href="#">' + d + "</a></li>");
                        this.$primaryPaging.find("input.form-control").val(this.currentPage + 1);
                    } else this.$secondaryPaging.addClass(e), this.$secondaryPaging.val(this.currentPage + 1);
                    (this.lastPageInput = this.currentPage + 1 + ""),
                        this.$pages.html(h),
                        this.currentPage + 1 < h ? this.$nextBtn.removeAttr(f) : this.$nextBtn.attr(f, f),
                        this.currentPage - 1 >= 0 ? this.$prevBtn.removeAttr(f) : this.$prevBtn.attr(f, f),
                        0 !== this.pageIncrement && (this.pageIncrement > 0 ? (this.$nextBtn.is(":disabled") ? this.$prevBtn.focus() : this.$nextBtn.focus()) : this.$prevBtn.is(":disabled") ? this.$nextBtn.focus() : this.$prevBtn.focus());
                },
                previous: function () {
                    var a = "disabled";
                    this.$nextBtn.attr(a, a), this.$prevBtn.attr(a, a), (this.pageIncrement = -1), this.$element.trigger("previousClicked.fu.repeater"), this.render({ pageIncrement: this.pageIncrement });
                },
                render: function (b) {
                    var c,
                        d = this,
                        e = !1,
                        f = a.fn.repeater.viewTypes[d.viewType] || {},
                        g = function () {
                            var a = function () {
                                (!d.infiniteScrollingEnabled || (d.infiniteScrollingEnabled && e)) && d.$loader.show().loader("play"),
                                    d.getDataOptions(b, function (a) {
                                        d.viewOptions.dataSource(a, function (a) {
                                            var c = f.renderer;
                                            d.infiniteScrollingEnabled ? d.infiniteScrollingCallback({}) : (d.itemization(a), d.pagination(a)),
                                                c &&
                                                    d.runRenderer(d.$canvas, c, a, function () {
                                                        d.infiniteScrollingEnabled && ((e || b.clearInfinite) && d.initInfiniteScrolling(), d.infiniteScrollPaging(a, b)),
                                                            d.$loader.hide().loader("pause"),
                                                            d.$element.trigger("loaded.fu.repeater");
                                                    });
                                        });
                                    });
                            };
                            (b.preserve = void 0 !== b.preserve ? b.preserve : !e),
                                d.clear(b),
                                !e && f.cleared
                                    ? f.cleared.call(d, {}, function () {
                                          a();
                                      })
                                    : a();
                        };
                    (b = b || {}),
                        b.changeView && this.currentView !== b.changeView
                            ? ((c = this.currentView),
                              (this.currentView = b.changeView),
                              (this.viewType = this.currentView.split(".")[0]),
                              this.setViewOptions(this.currentView),
                              this.$element.attr("data-currentview", this.currentView),
                              this.$element.attr("data-viewtype", this.viewType),
                              (e = !0),
                              this.$element.trigger("viewChanged.fu.repeater", this.currentView),
                              this.infiniteScrollingEnabled && d.infiniteScrolling(!1),
                              (f = a.fn.repeater.viewTypes[d.viewType] || {}),
                              f.selected
                                  ? f.selected.call(this, { prevView: c }, function () {
                                        g();
                                    })
                                  : g())
                            : g();
                },
                resize: function () {
                    var b,
                        c,
                        d = -1 === this.viewOptions.staticHeight ? this.$element.attr("data-staticheight") : this.viewOptions.staticHeight,
                        e = {};
                    this.viewType && (e = a.fn.repeater.viewTypes[this.viewType] || {}),
                        void 0 !== d && d !== !1 && "false" !== d
                            ? (this.$canvas.addClass("scrolling"),
                              (c = { bottom: this.$viewport.css("margin-bottom"), top: this.$viewport.css("margin-top") }),
                              (b =
                                  ("true" === d || d === !0 ? this.$element.height() : parseInt(d, 10)) -
                                  this.$element.find(".repeater-header").outerHeight() -
                                  this.$element.find(".repeater-footer").outerHeight() -
                                  ("auto" === c.bottom ? 0 : parseInt(c.bottom, 10)) -
                                  ("auto" === c.top ? 0 : parseInt(c.top, 10))),
                              this.$viewport.outerHeight(b))
                            : this.$canvas.removeClass("scrolling"),
                        e.resize && e.resize.call(this, { height: this.$element.outerHeight(), width: this.$element.outerWidth() }, function () {});
                },
                runRenderer: function (b, c, d, e) {
                    var f,
                        g,
                        h,
                        i,
                        j = this,
                        k = !1,
                        l = function (a) {
                            var f = { container: b, data: d };
                            c.repeat && ((f.subset = g), (f.index = a)),
                                g.length < 1
                                    ? e()
                                    : m(f, function () {
                                          a++, a < g.length ? l(a) : e();
                                      });
                        },
                        m = function (e, f) {
                            var g = "",
                                h = {
                                    before: function (a) {
                                        a && a.skipNested === !0 && (k = !0), i("render", e);
                                    },
                                    render: function (c) {
                                        var d = c && c.action ? c.action : "append";
                                        c && void 0 !== c.item && ((g = a(c.item)), g.length < 1 && (g = c.item), "none" !== d && b[d](g), (e.item = g)), c && c.skipNested === !0 && (k = !0), i("after", e);
                                    },
                                    after: function (f) {
                                        var l,
                                            m = function (a, b) {
                                                j.runRenderer(a, c.nested[b], d, function () {
                                                    b++, b < c.nested.length ? m(a, b) : i("complete", e);
                                                });
                                            };
                                        f && f.skipNested === !0 && (k = !0),
                                            c.nested && !k ? ((l = a(g)), (l = "true" === l.attr("data-container") ? l : l.find('[data-container="true"]:first')), l.length < 1 && (l = b), m(l, 0)) : h.complete(null);
                                    },
                                    complete: function () {
                                        f && f();
                                    },
                                },
                                i = function (b, d) {
                                    (d = a.extend({}, d)), c[b] ? c[b].call(j, d, h[b]) : h[b](null);
                                };
                            i("before", e);
                        };
                    if (c.repeat) for (f = c.repeat.split("."), "data" === f[0] || "this" === f[0] ? ((g = "this" === f[0] ? this : d), f.shift()) : ((f = []), (g = [""])), h = 0, i = f.length; i > h; h++) g = g[f[h]];
                    else g = [""];
                    l(0);
                },
                setViewOptions: function (b) {
                    var c = {},
                        d = b.split(".")[1];
                    (c = d && this.options.views ? this.options.views[d] || this.options.views[b] || {} : {}), (this.viewOptions = a.extend({}, this.options, c));
                },
                viewChanged: function (b) {
                    var c = a(b.target),
                        d = c.val();
                    this.render({ changeView: d, pageIncrement: null });
                },
            }),
                (a.fn.repeater = function (b) {
                    var d,
                        e = Array.prototype.slice.call(arguments, 1),
                        f = this.each(function () {
                            var f = a(this),
                                g = f.data("fu.repeater"),
                                h = "object" == typeof b && b;
                            g || f.data("fu.repeater", (g = new c(this, h))), "string" == typeof b && (d = g[b].apply(g, e));
                        });
                    return void 0 === d ? f : d;
                }),
                (a.fn.repeater.defaults = { dataSource: function () {}, defaultView: -1, dropPagingCap: 10, staticHeight: -1, views: null }),
                (a.fn.repeater.viewTypes = {}),
                (a.fn.repeater.Constructor = c),
                (a.fn.repeater.noConflict = function () {
                    return (a.fn.repeater = b), this;
                });
        })(a),
        (function (a) {
            a.fn.repeater &&
                ((a.fn.repeater.Constructor.prototype.list_clearSelectedItems = function () {
                    this.$canvas.find(".repeater-list-check").remove(), this.$canvas.find(".repeater-list table tbody tr.selected").removeClass("selected");
                }),
                (a.fn.repeater.Constructor.prototype.list_highlightColumn = function (b, c) {
                    var d = this.$canvas.find(".repeater-list tbody");
                    (this.viewOptions.list_highlightSortedColumn || c) &&
                        (d.find("td.sorted").removeClass("sorted"),
                        d.find("tr").each(function () {
                            var c = a(this).find("td:nth-child(" + (b + 1) + ")");
                            c.addClass("sorted");
                        }));
                }),
                (a.fn.repeater.Constructor.prototype.list_getSelectedItems = function () {
                    var b = [];
                    return (
                        this.$canvas.find(".repeater-list table tbody tr.selected").each(function () {
                            var c = a(this);
                            b.push({ data: c.data("item_data"), element: c });
                        }),
                        b
                    );
                }),
                (a.fn.repeater.Constructor.prototype.list_positionHeadings = function () {
                    var b = this.$element.find(".repeater-list-wrapper"),
                        c = b.offset().left,
                        d = b.scrollLeft();
                    b.find(".repeater-list-heading").each(
                        d > 0
                            ? function () {
                                  var b = a(this),
                                      d = b.parents("th:first").offset().left - c + "px";
                                  b.addClass("shifted").css("left", d);
                              }
                            : function () {
                                  a(this).removeClass("shifted").css("left", "");
                              }
                    );
                }),
                (a.fn.repeater.Constructor.prototype.list_setSelectedItems = function (b, c) {
                    var d,
                        e,
                        f,
                        g,
                        h = this.viewOptions.list_selectable,
                        i = this,
                        j = function () {
                            (f = a(this)), (d = f.data("item_data") || {}), d[b[e].property] === b[e].value && k(f, b[e].selected);
                        },
                        k = function (a, b) {
                            (b = void 0 !== b ? b : !0),
                                b
                                    ? (c || "multi" === h || i.list_clearSelectedItems(),
                                      a.hasClass("selected") || (a.addClass("selected"), a.find("td:first").prepend('<div class="repeater-list-check"><span class="glyphicon glyphicon-ok"></span></div>')))
                                    : (a.find(".repeater-list-check").remove(), a.removeClass("selected"));
                        };
                    for (a.isArray(b) || (b = [b]), g = c === !0 || "multi" === h ? b.length : h && b.length > 0 ? 1 : 0, e = 0; g > e; e++)
                        void 0 !== b[e].index
                            ? ((f = this.$canvas.find(".repeater-list table tbody tr:nth-child(" + (b[e].index + 1) + ")")), f.length > 0 && k(f, b[e].selected))
                            : void 0 !== b[e].property && void 0 !== b[e].value && this.$canvas.find(".repeater-list table tbody tr").each(j);
                }),
                (a.fn.repeater.Constructor.prototype.list_sizeHeadings = function () {
                    var b = this.$element.find(".repeater-list table");
                    b.find("thead th").each(function () {
                        var b = a(this),
                            c = b.find(".repeater-list-heading");
                        c.outerHeight(b.outerHeight()), c.outerWidth(b.outerWidth());
                    });
                }),
                (a.fn.repeater.defaults = a.extend({}, a.fn.repeater.defaults, {
                    list_columnRendered: null,
                    list_columnSizing: !0,
                    list_columnSyncing: !0,
                    list_highlightSortedColumn: !1,
                    list_infiniteScroll: !1,
                    list_noItemsHTML: "",
                    list_selectable: !1,
                    list_sortClearing: !1,
                    list_rowRendered: null,
                })),
                (a.fn.repeater.viewTypes.list = {
                    cleared: function (a, b) {
                        this.viewOptions.list_columnSyncing && this.list_sizeHeadings(), b();
                    },
                    dataOptions: function (a, b) {
                        this.list_sortDirection && (a.sortDirection = this.list_sortDirection), this.list_sortProperty && (a.sortProperty = this.list_sortProperty), b(a);
                    },
                    initialize: function (a, b) {
                        (this.list_sortDirection = null), (this.list_sortProperty = null), b();
                    },
                    selected: function (a, b) {
                        var c,
                            d = this.viewOptions.list_infiniteScroll;
                        (this.list_firstRender = !0), this.$loader.addClass("noHeader"), d && ((c = "object" == typeof d ? d : {}), this.infiniteScrolling(!0, c)), b();
                    },
                    resize: function (a, b) {
                        this.viewOptions.list_columnSyncing && this.list_sizeHeadings(), b();
                    },
                    renderer: {
                        complete: function (a, b) {
                            var c;
                            this.viewOptions.list_columnSyncing && (this.list_sizeHeadings(), this.list_positionHeadings()),
                                (c = this.$canvas.find(".repeater-list-heading.sorted")),
                                c.length > 0 && this.list_highlightColumn(c.data("fu_item_index")),
                                b();
                        },
                        render: function (b, c) {
                            var d,
                                e = this.$element.find(".repeater-list"),
                                f = this;
                            e.length > 0
                                ? c({ action: "none", item: e })
                                : ((d = a(
                                      '<div class="repeater-list" data-preserve="shallow"><div class="repeater-list-wrapper" data-infinite="true" data-preserve="shallow"><table aria-readonly="true" class="table" data-container="true" data-preserve="shallow" role="grid"></table></div></div>'
                                  )),
                                  d.find(".repeater-list-wrapper").on("scroll.fu.repeaterList", function () {
                                      f.viewOptions.list_columnSyncing && f.list_positionHeadings();
                                  }),
                                  c({ item: d }));
                        },
                        nested: [
                            {
                                complete: function (b, c) {
                                    var d,
                                        e,
                                        f,
                                        g,
                                        h = [],
                                        i = this;
                                    if (!this.viewOptions.list_columnSizing || this.list_columnsSame) c();
                                    else {
                                        if (
                                            ((d = 0),
                                            (g = 0),
                                            b.item.find("th").each(function () {
                                                var b,
                                                    c = a(this),
                                                    e = 0 === c.next("th").length;
                                                void 0 !== i.list_columns[d].width
                                                    ? ((b = i.list_columns[d].width), c.outerWidth(b), (g += c.outerWidth()), e ? c.outerWidth("") : (i.list_columns[d]._auto_width = b))
                                                    : h.push({ col: c, index: d, last: e }),
                                                    d++;
                                            }),
                                            (e = h.length),
                                            e > 0)
                                        )
                                            for (f = Math.floor((this.$canvas.width() - g) / e), d = 0; e > d; d++) h[d].last || (h[d].col.outerWidth(f), (this.list_columns[h[d].index]._auto_width = f));
                                        c();
                                    }
                                },
                                render: function (a, b) {
                                    var c = function (a, b) {
                                        var c, d, e;
                                        if (!a) return !0;
                                        if (!b) return !1;
                                        for (c = 0, e = b.length; e > c; c++) {
                                            if (!a[c]) return !0;
                                            for (d in b[c]) if (a[c][d] !== b[c][d]) return !0;
                                        }
                                        return !1;
                                    };
                                    this.list_firstRender || c(this.list_columns, a.data.columns)
                                        ? (this.$element.find(".repeater-list-header").remove(),
                                          (this.list_columns = a.data.columns),
                                          (this.list_columnsSame = !1),
                                          (this.list_firstRender = !1),
                                          this.$loader.removeClass("noHeader"),
                                          b({ item: '<thead data-preserve="deep"><tr data-container="true"></tr></thead>' }))
                                        : ((this.list_columnsSame = !0), b({ skipNested: !0 }));
                                },
                                nested: [
                                    {
                                        render: function (b, c) {
                                            var d,
                                                e,
                                                f,
                                                g,
                                                h,
                                                i = "glyphicon-chevron-down",
                                                j = ".glyphicon.rlc:first",
                                                k = "glyphicon-chevron-up",
                                                l = a('<div class="repeater-list-heading"><span class="glyphicon rlc"></span></div>'),
                                                m = b.index,
                                                n = a("<th></th>"),
                                                o = this,
                                                p = b.subset;
                                            l.data("fu_item_index", m),
                                                l.prepend(b.subset[b.index].label),
                                                n.html(l.html()).find("[id]").removeAttr("id"),
                                                n.append(l),
                                                (d = n.add(l)),
                                                (g = l.find(j)),
                                                (h = g.add(n.find(j))),
                                                (e = p[m].className),
                                                void 0 !== e && d.addClass(e),
                                                (f = p[m].sortable),
                                                f &&
                                                    (d.addClass("sortable"),
                                                    l.on("click.fu.repeaterList", function () {
                                                        (o.list_sortProperty = "string" == typeof f ? f : p[m].property),
                                                            l.hasClass("sorted")
                                                                ? g.hasClass(k)
                                                                    ? (h.removeClass(k).addClass(i), (o.list_sortDirection = "desc"))
                                                                    : o.viewOptions.list_sortClearing
                                                                    ? (d.removeClass("sorted"), h.removeClass(i), (o.list_sortDirection = null), (o.list_sortProperty = null))
                                                                    : (h.removeClass(i).addClass(k), (o.list_sortDirection = "asc"))
                                                                : (b.container.find("th, .repeater-list-heading").removeClass("sorted"), h.removeClass(i).addClass(k), (o.list_sortDirection = "asc"), d.addClass("sorted")),
                                                            o.render({ clearInfinite: !0, pageIncrement: null });
                                                    })),
                                                ("asc" === p[m].sortDirection || "desc" === p[m].sortDirection) &&
                                                    (b.container.find("th, .repeater-list-heading").removeClass("sorted"),
                                                    d.addClass("sortable sorted"),
                                                    "asc" === p[m].sortDirection ? (h.addClass(k), (this.list_sortDirection = "asc")) : (h.addClass(i), (this.list_sortDirection = "desc")),
                                                    (this.list_sortProperty = "string" == typeof f ? f : p[m].property)),
                                                c({ item: n });
                                        },
                                        repeat: "data.columns",
                                    },
                                ],
                            },
                            {
                                render: function (b, c) {
                                    var d,
                                        e,
                                        f = {};
                                    (e = this.$canvas.find(".repeater-list table tbody")),
                                        e.length > 0 ? (f.action = "none") : (e = a('<tbody data-container="true"></tbody>')),
                                        (f.item = e),
                                        b.data.items.length < 1 &&
                                            ((f.skipNested = !0), (d = a('<tr class="empty"><td colspan="' + this.list_columns.length + '"></td></tr>')), d.find("td").append(this.viewOptions.list_noItemsHTML), e.append(d)),
                                        c(f);
                                },
                                nested: [
                                    {
                                        complete: function (a, b) {
                                            var c = { container: a.container, rowData: a.subset[a.index] };
                                            void 0 !== a.item && (c.item = a.item),
                                                this.viewOptions.list_rowRendered
                                                    ? this.viewOptions.list_rowRendered(c, function () {
                                                          b();
                                                      })
                                                    : b();
                                        },
                                        render: function (b, c) {
                                            var d = a('<tr data-container="true"></tr>'),
                                                e = this;
                                            this.viewOptions.list_selectable &&
                                                (d.addClass("selectable"),
                                                d.attr("tabindex", 0),
                                                d.data("item_data", b.subset[b.index]),
                                                d.on("click.fu.repeaterList", function () {
                                                    var b = a(this);
                                                    b.hasClass("selected")
                                                        ? (b.removeClass("selected"), b.find(".repeater-list-check").remove(), e.$element.trigger("deselected.fu.repeaterList", b))
                                                        : ("multi" !== e.viewOptions.list_selectable &&
                                                              (e.$canvas.find(".repeater-list-check").remove(),
                                                              e.$canvas.find(".repeater-list tbody tr.selected").each(function () {
                                                                  a(this).removeClass("selected"), e.$element.trigger("deselected.fu.repeaterList", a(this));
                                                              })),
                                                          b.addClass("selected"),
                                                          b.find("td:first").prepend('<div class="repeater-list-check"><span class="glyphicon glyphicon-ok"></span></div>'),
                                                          e.$element.trigger("selected.fu.repeaterList", b));
                                                }),
                                                d.keyup(function (a) {
                                                    13 === a.keyCode && d.trigger("click.fu.repeaterList");
                                                })),
                                                (this.list_curRowIndex = b.index),
                                                c({ item: d });
                                        },
                                        repeat: "data.items",
                                        nested: [
                                            {
                                                after: function (a, b) {
                                                    var c = { container: a.container, columnAttr: a.subset[a.index].property, rowData: a.data.items[this.list_curRowIndex] };
                                                    void 0 !== a.item && (c.item = a.item),
                                                        this.viewOptions.list_columnRendered
                                                            ? this.viewOptions.list_columnRendered(c, function () {
                                                                  b();
                                                              })
                                                            : b();
                                                },
                                                render: function (b, c) {
                                                    var d = b.subset[b.index].className,
                                                        e = b.data.items[this.list_curRowIndex][b.subset[b.index].property],
                                                        f = a("<td></td>"),
                                                        g = b.subset[b.index]._auto_width;
                                                    f.addClass(void 0 !== d ? d : "").append(e), void 0 !== g && f.outerWidth(g), c({ item: f });
                                                },
                                                repeat: "this.list_columns",
                                            },
                                        ],
                                    },
                                ],
                            },
                        ],
                    },
                }));
        })(a),
        (function (a) {
            a.fn.repeater &&
                ((a.fn.repeater.Constructor.prototype.thumbnail_clearSelectedItems = function () {
                    this.$canvas.find(".repeater-thumbnail-cont .selectable.selected").removeClass("selected");
                }),
                (a.fn.repeater.Constructor.prototype.thumbnail_getSelectedItems = function () {
                    var b = [];
                    return (
                        this.$canvas.find(".repeater-thumbnail-cont .selectable.selected").each(function () {
                            b.push(a(this));
                        }),
                        b
                    );
                }),
                (a.fn.repeater.Constructor.prototype.thumbnail_setSelectedItems = function (b, c) {
                    var d,
                        e,
                        f,
                        g,
                        h = this.viewOptions.thumbnail_selectable,
                        i = this,
                        j = function () {
                            return g === b[d].index ? ((e = a(this)), !1) : void g++;
                        },
                        k = function () {
                            (e = a(this)), e.is(b[d].selector) && l(e, b[d].selected);
                        },
                        l = function (a, b) {
                            (b = void 0 !== b ? b : !0), b ? (c || "multi" === h || i.thumbnail_clearSelectedItems(), a.addClass("selected")) : a.removeClass("selected");
                        };
                    for (a.isArray(b) || (b = [b]), f = c === !0 || "multi" === h ? b.length : h && b.length > 0 ? 1 : 0, d = 0; f > d; d++)
                        void 0 !== b[d].index
                            ? ((e = a()), (g = 0), this.$canvas.find(".repeater-thumbnail-cont .selectable").each(j), e.length > 0 && l(e, b[d].selected))
                            : b[d].selector && this.$canvas.find(".repeater-thumbnail-cont .selectable").each(k);
                }),
                (a.fn.repeater.defaults = a.extend({}, a.fn.repeater.defaults, {
                    thumbnail_alignment: "justify",
                    thumbnail_infiniteScroll: !1,
                    thumbnail_itemRendered: null,
                    thumbnail_selectable: !1,
                    thumbnail_template: '<div class="thumbnail repeater-thumbnail"><img height="75" src="{{src}}" width="65"><span>{{name}}</span></div>',
                })),
                (a.fn.repeater.viewTypes.thumbnail = {
                    selected: function (a, b) {
                        var c,
                            d = this.viewOptions.thumbnail_infiniteScroll;
                        d && ((c = "object" == typeof d ? d : {}), this.infiniteScrolling(!0, c)), b({});
                    },
                    renderer: {
                        render: function (b, c) {
                            var d,
                                e,
                                f = this.viewOptions.thumbnail_alignment,
                                g = this.$canvas.find(".repeater-thumbnail-cont"),
                                h = {};
                            g.length > 0
                                ? (h.action = "none")
                                : ((g = a('<div class="clearfix repeater-thumbnail-cont" data-container="true" data-infinite="true" data-preserve="shallow"></div>')),
                                  f && "none" !== f ? ((e = { center: 1, justify: 1, left: 1, right: 1 }), (f = e[f] ? f : "justify"), g.addClass("align-" + f), (this.thumbnail_injectSpacers = !0)) : (this.thumbnail_injectSpacers = !1)),
                                (h.item = g),
                                b.data.items.length < 1 ? ((h.skipNested = !0), (d = a('<div class="empty"></div>')), d.append(this.viewOptions.thumbnail_noItemsHTML), g.append(d)) : g.find(".empty:first").remove(),
                                c(h);
                        },
                        nested: [
                            {
                                after: function (b, c) {
                                    var d,
                                        e = { container: b.container, itemData: b.subset[b.index] },
                                        f = this.viewOptions.thumbnail_selectable,
                                        g = "selected",
                                        h = this;
                                    void 0 !== b.item &&
                                        ((e.item = b.item),
                                        (d = a(e.item)),
                                        f &&
                                            (d.addClass("selectable"),
                                            d.on("click", function () {
                                                d.hasClass(g)
                                                    ? (d.removeClass(g), h.$element.trigger("deselected.fu.repeaterThumbnail", d))
                                                    : ("multi" !== f &&
                                                          h.$canvas.find(".repeater-thumbnail-cont .selectable.selected").each(function () {
                                                              var b = a(this);
                                                              b.removeClass(g), h.$element.trigger("deselected.fu.repeaterThumbnail", b);
                                                          }),
                                                      d.addClass(g),
                                                      h.$element.trigger("selected.fu.repeaterThumbnail", d));
                                            })),
                                        this.thumbnail_injectSpacers && d.after('<span class="spacer">&nbsp;</span>')),
                                        this.viewOptions.thumbnail_itemRendered
                                            ? this.viewOptions.thumbnail_itemRendered(e, function () {
                                                  c();
                                              })
                                            : c();
                                },
                                render: function (b, c) {
                                    var d = b.subset[b.index],
                                        e = function (b) {
                                            for (
                                                var c = !1,
                                                    e = function () {
                                                        var e, f, g;
                                                        (f = b.indexOf("{{")),
                                                            (e = b.indexOf("}}", f + 2)),
                                                            f > -1 && e > -1 ? ((g = a.trim(b.substring(f + 2, e))), (g = void 0 !== d[g] ? d[g] : ""), (b = b.substring(0, f) + g + b.substring(e + 2))) : (c = !0);
                                                    };
                                                !c && b.search("{{") >= 0;

                                            )
                                                e(b);
                                            return b;
                                        };
                                    c({ item: e(this.viewOptions.thumbnail_template) });
                                },
                                repeat: "data.items",
                            },
                        ],
                    },
                }));
        })(a),
        (function (a) {
            var b = a.fn.scheduler,
                c = function (b, c) {
                    var d = this;
                    (this.$element = a(b)),
                        (this.options = a.extend({}, a.fn.scheduler.defaults, c)),
                        (this.$startDate = this.$element.find(".start-datetime .start-date")),
                        (this.$startTime = this.$element.find(".start-datetime .start-time")),
                        (this.$timeZone = this.$element.find(".timezone-container .timezone")),
                        (this.$repeatIntervalPanel = this.$element.find(".repeat-every-panel")),
                        (this.$repeatIntervalSelect = this.$element.find(".repeat-options")),
                        (this.$repeatIntervalSpinbox = this.$element.find(".repeat-every")),
                        (this.$repeatIntervalTxt = this.$element.find(".repeat-every-text")),
                        (this.$end = this.$element.find(".repeat-end")),
                        (this.$endSelect = this.$end.find(".end-options")),
                        (this.$endAfter = this.$end.find(".end-after")),
                        (this.$endDate = this.$end.find(".end-on-date")),
                        (this.$recurrencePanels = this.$element.find(".repeat-panel")),
                        this.$repeatIntervalSelect.selectlist(),
                        this.$element.find(".selectlist").selectlist(),
                        this.$startDate.datepicker(),
                        this.$startTime.combobox(),
                        "" === this.$startTime.find("input").val() && this.$startTime.combobox("selectByIndex", 0),
                        this.$repeatIntervalSpinbox.spinbox("0" === this.$repeatIntervalSpinbox.find("input").val() ? { value: 1, min: 1 } : { min: 1 }),
                        this.$endAfter.spinbox({ value: 1, min: 1 }),
                        this.$endDate.datepicker(),
                        this.$element.find(".radio-custom").radio(),
                        this.$repeatIntervalSelect.on("changed.fu.selectlist", a.proxy(this.repeatIntervalSelectChanged, this)),
                        this.$endSelect.on("changed.fu.selectlist", a.proxy(this.endSelectChanged, this)),
                        this.$element.find(".repeat-days-of-the-week .btn-group .btn").on("change.fu.scheduler", function (a, b) {
                            d.changed(a, b, !0);
                        }),
                        this.$element.find(".combobox").on("changed.fu.combobox", a.proxy(this.changed, this)),
                        this.$element.find(".datepicker").on("changed.fu.datepicker", a.proxy(this.changed, this)),
                        this.$element.find(".selectlist").on("changed.fu.selectlist", a.proxy(this.changed, this)),
                        this.$element.find(".spinbox").on("changed.fu.spinbox", a.proxy(this.changed, this)),
                        this.$element.find(".repeat-monthly .radio, .repeat-yearly .radio").on("change.fu.scheduler", a.proxy(this.changed, this));
                };
            (c.prototype = {
                constructor: c,
                destroy: function () {
                    var b;
                    return (
                        this.$element.find("input").each(function () {
                            a(this).attr("value", a(this).val());
                        }),
                        this.$element.find(".datepicker .calendar").empty(),
                        (b = this.$element[0].outerHTML),
                        this.$element.find(".combobox").combobox("destroy"),
                        this.$element.find(".datepicker").datepicker("destroy"),
                        this.$element.find(".selectlist").selectlist("destroy"),
                        this.$element.find(".spinbox").spinbox("destroy"),
                        this.$element.find("[type=radio]").radio("destroy"),
                        this.$element.remove(),
                        b
                    );
                },
                changed: function (b, c, d) {
                    d || b.stopPropagation(), this.$element.trigger("changed.fu.scheduler", { data: void 0 !== c ? c : a(b.currentTarget).data(), originalEvent: b, value: this.getValue() });
                },
                disable: function () {
                    this.toggleState("disable");
                },
                enable: function () {
                    this.toggleState("enable");
                },
                setUtcTime: function (a, b, c) {
                    var d = a.split("-"),
                        e = b.split(":"),
                        f = new Date(Date.UTC(d[0], d[1] - 1, d[2], e[0], e[1], e[2] ? e[2] : 0));
                    if ("Z" === c) f.setUTCHours(f.getUTCHours() + 0);
                    else {
                        var g = "(.)",
                            h = ".*?",
                            i = "\\d",
                            j = ".*?",
                            k = "(\\d)",
                            l = new RegExp(g + h + i + j + k, ["i"]),
                            m = l.exec(c);
                        if (null != m) {
                            var n = m[1],
                                o = m[2],
                                p = "+" === n ? 1 : -1;
                            f.setUTCHours(f.getUTCHours() + p * parseInt(o, 10));
                        }
                    }
                    var q = f.getTimezoneOffset();
                    return f.setMinutes(q), f;
                },
                endSelectChanged: function (a, b) {
                    var c, d;
                    b ? (d = b.value) : ((c = this.$endSelect.selectlist("selectedItem")), (d = c.value)),
                        this.$endAfter.parent().addClass("hide"),
                        this.$endAfter.parent().attr("aria-hidden", "true"),
                        this.$endDate.parent().addClass("hide"),
                        this.$endDate.parent().attr("aria-hidden", "true"),
                        "after" === d
                            ? (this.$endAfter.parent().removeClass("hide"), this.$endAfter.parent().attr("aria-hidden", "false"))
                            : "date" === d && (this.$endDate.parent().removeClass("hide"), this.$endDate.parent().attr("aria-hidden", "false"));
                },
                getValue: function () {
                    var b,
                        c = this.$repeatIntervalSpinbox.spinbox("value"),
                        d = "",
                        e = this.$repeatIntervalSelect.selectlist("selectedItem").value;
                    this.$startTime.combobox("selectedItem").value ? ((b = this.$startTime.combobox("selectedItem").value), (b = b.toLowerCase())) : (b = this.$startTime.combobox("selectedItem").text.toLowerCase());
                    var f,
                        g = this.$timeZone.selectlist("selectedItem");
                    f = function (a, b) {
                        var c,
                            d = "";
                        return (d += a.getFullYear()), (d += b), (c = a.getMonth() + 1), (d += 10 > c ? "0" + c : c), (d += b), (c = a.getDate()), (d += 10 > c ? "0" + c : c);
                    };
                    var h, i, j, k, l, m, n, o;
                    (n = "" + f(this.$startDate.datepicker("getDate"), "-")),
                        (n += "T"),
                        (j = b.search("am") >= 0),
                        (k = b.search("pm") >= 0),
                        (b = a.trim(b.replace(/am/g, "").replace(/pm/g, "")).split(":")),
                        (b[0] = parseInt(b[0], 10)),
                        (b[1] = parseInt(b[1], 10)),
                        j && b[0] > 11 ? (b[0] = 0) : k && b[0] < 12 && (b[0] += 12),
                        (n += b[0] < 10 ? "0" + b[0] : b[0]),
                        (n += ":"),
                        (n += b[1] < 10 ? "0" + b[1] : b[1]),
                        (n += "+00:00" === g.offset ? "Z" : g.offset),
                        "none" === e
                            ? (d = "FREQ=DAILY;INTERVAL=1;COUNT=1;")
                            : "hourly" === e
                            ? ((d = "FREQ=HOURLY;"), (d += "INTERVAL=" + c + ";"))
                            : "daily" === e
                            ? ((d += "FREQ=DAILY;"), (d += "INTERVAL=" + c + ";"))
                            : "weekdays" === e
                            ? ((d += "FREQ=DAILY;"), (d += "BYDAY=MO,TU,WE,TH,FR;"), (d += "INTERVAL=1;"))
                            : "weekly" === e
                            ? ((i = []),
                              this.$element.find(".repeat-days-of-the-week .btn-group input:checked").each(function () {
                                  i.push(a(this).data().value);
                              }),
                              (d += "FREQ=WEEKLY;"),
                              (d += "BYDAY=" + i.join(",") + ";"),
                              (d += "INTERVAL=" + c + ";"))
                            : "monthly" === e
                            ? ((d += "FREQ=MONTHLY;"),
                              (d += "INTERVAL=" + c + ";"),
                              (o = this.$element.find("input[name=repeat-monthly]:checked").val()),
                              "bymonthday" === o
                                  ? ((h = parseInt(this.$element.find(".repeat-monthly-date .selectlist").selectlist("selectedItem").text, 10)), (d += "BYMONTHDAY=" + h + ";"))
                                  : "bysetpos" === o &&
                                    ((i = this.$element.find(".month-days").selectlist("selectedItem").value),
                                    (m = this.$element.find(".month-day-pos").selectlist("selectedItem").value),
                                    (d += "BYDAY=" + i + ";"),
                                    (d += "BYSETPOS=" + m + ";")))
                            : "yearly" === e &&
                              ((d += "FREQ=YEARLY;"),
                              (o = this.$element.find("input[name=repeat-yearly]:checked").val()),
                              "bymonthday" === o
                                  ? ((l = this.$element.find(".repeat-yearly-date .year-month").selectlist("selectedItem").value),
                                    (h = this.$element.find(".year-month-day").selectlist("selectedItem").text),
                                    (d += "BYMONTH=" + l + ";"),
                                    (d += "BYMONTHDAY=" + h + ";"))
                                  : "bysetpos" === o &&
                                    ((i = this.$element.find(".year-month-days").selectlist("selectedItem").value),
                                    (m = this.$element.find(".year-month-day-pos").selectlist("selectedItem").value),
                                    (l = this.$element.find(".repeat-yearly-day .year-month").selectlist("selectedItem").value),
                                    (d += "BYDAY=" + i + ";"),
                                    (d += "BYSETPOS=" + m + ";"),
                                    (d += "BYMONTH=" + l + ";")));
                    var p = this.$endSelect.selectlist("selectedItem").value,
                        q = "";
                    "none" !== e && ("after" === p ? (q = "COUNT=" + this.$endAfter.spinbox("value") + ";") : "date" === p && (q = "UNTIL=" + f(this.$endDate.datepicker("getDate"), "") + ";")), (d += q);
                    var r = { startDateTime: n, timeZone: { name: g.name, offset: g.offset }, recurrencePattern: d };
                    return r;
                },
                repeatIntervalSelectChanged: function (a, b) {
                    var c, d, e;
                    switch ((b ? ((d = b.value), (e = b.text)) : ((c = this.$repeatIntervalSelect.selectlist("selectedItem")), (d = c.value), (e = c.text)), this.$repeatIntervalTxt.text(e), d.toLowerCase())) {
                        case "hourly":
                        case "daily":
                        case "weekly":
                        case "monthly":
                            this.$repeatIntervalPanel.removeClass("hide"), this.$repeatIntervalPanel.attr("aria-hidden", "false");
                            break;
                        default:
                            this.$repeatIntervalPanel.addClass("hide"), this.$repeatIntervalPanel.attr("aria-hidden", "true");
                    }
                    this.$recurrencePanels.addClass("hide"),
                        this.$recurrencePanels.attr("aria-hidden", "true"),
                        this.$element.find(".repeat-" + d).removeClass("hide"),
                        this.$element.find(".repeat-" + d).attr("aria-hidden", "false"),
                        "none" === d ? (this.$end.addClass("hide"), this.$end.attr("aria-hidden", "true")) : (this.$end.removeClass("hide"), this.$end.attr("aria-hidden", "false"));
                },
                setValue: function (b) {
                    var c, d, e, f, g, h, i, j, k, l, m;
                    if (b.startDateTime)
                        (j = b.startDateTime.split("T")),
                            (k = j[0]),
                            j[1]
                                ? ((l = j[1]),
                                  (j[1] = j[1].split(":")),
                                  (c = parseInt(j[1][0], 10)),
                                  (g = j[1][1] ? parseInt(j[1][1].split("+")[0].split("-")[0].split("Z")[0], 10) : 0),
                                  (h = 12 > c ? "AM" : "PM"),
                                  0 === c ? (c = 12) : c > 12 && (c -= 12),
                                  (g = 10 > g ? "0" + g : g),
                                  (l = c + ":" + g),
                                  (j = c + ":" + g + " " + h),
                                  this.$startTime.find("input").val(j),
                                  this.$startTime.combobox("selectByText", j))
                                : (l = "00:00");
                    else {
                        l = "00:00";
                        var n = this.$startDate.datepicker("getDate");
                        k = n.getFullYear() + "-" + n.getMonth() + "-" + n.getDate();
                    }
                    if (
                        ((e = "li[data"),
                        b.timeZone
                            ? ((e += "string" == typeof b.timeZone ? '-name="' + b.timeZone : b.timeZone.name ? '-name="' + b.timeZone.name : '-offset="' + b.timeZone.offset),
                              (e += '"]'),
                              (m = b.timeZone.offset),
                              this.$timeZone.selectlist("selectBySelector", e))
                            : b.startDateTime
                            ? ((j = b.startDateTime.split("T")[1]),
                              (j = j ? (j.search(/\+/) > -1 ? "+" + a.trim(j.split("+")[1]) : j.search(/\-/) > -1 ? "-" + a.trim(j.split("-")[1]) : "+00:00") : "+00:00"),
                              (m = "+00:00" === j ? "Z" : j),
                              (e += '-offset="' + j + '"]'),
                              this.$timeZone.selectlist("selectBySelector", e))
                            : (m = "Z"),
                        b.recurrencePattern)
                    ) {
                        for (i = {}, j = b.recurrencePattern.toUpperCase().split(";"), d = 0, f = j.length; f > d; d++) "" !== j[d] && ((e = j[d].split("=")), (i[e[0]] = e[1]));
                        if ("DAILY" === i.FREQ) e = "MO,TU,WE,TH,FR" === i.BYDAY ? "weekdays" : "1" === i.INTERVAL && "1" === i.COUNT ? "none" : "daily";
                        else if ("HOURLY" === i.FREQ) e = "hourly";
                        else if ("WEEKLY" === i.FREQ) {
                            if (i.BYDAY)
                                for (e = this.$element.find(".repeat-days-of-the-week .btn-group"), e.find("label").removeClass("active"), j = i.BYDAY.split(","), d = 0, f = j.length; f > d; d++)
                                    e.find('input[data-value="' + j[d] + '"]')
                                        .parent()
                                        .addClass("active");
                            e = "weekly";
                        } else
                            "MONTHLY" === i.FREQ
                                ? (this.$element.find(".repeat-monthly input").removeAttr("checked").removeClass("checked"),
                                  this.$element.find(".repeat-monthly label.radio-custom").removeClass("checked"),
                                  i.BYMONTHDAY
                                      ? ((j = this.$element.find(".repeat-monthly-date")),
                                        j.find("input").addClass("checked").attr("checked", "checked"),
                                        j.find("label.radio-custom").addClass("checked"),
                                        j.find(".selectlist").selectlist("selectByValue", i.BYMONTHDAY))
                                      : i.BYDAY &&
                                        ((j = this.$element.find(".repeat-monthly-day")),
                                        j.find("input").addClass("checked").attr("checked", "checked"),
                                        j.find("label.radio-custom").addClass("checked"),
                                        i.BYSETPOS && j.find(".month-day-pos").selectlist("selectByValue", i.BYSETPOS),
                                        j.find(".month-days").selectlist("selectByValue", i.BYDAY)),
                                  (e = "monthly"))
                                : "YEARLY" === i.FREQ
                                ? (this.$element.find(".repeat-yearly input").removeAttr("checked").removeClass("checked"),
                                  this.$element.find(".repeat-yearly label.radio-custom").removeClass("checked"),
                                  i.BYMONTHDAY
                                      ? ((j = this.$element.find(".repeat-yearly-date")),
                                        j.find("input").addClass("checked").attr("checked", "checked"),
                                        j.find("label.radio-custom").addClass("checked"),
                                        i.BYMONTH && j.find(".year-month").selectlist("selectByValue", i.BYMONTH),
                                        j.find(".year-month-day").selectlist("selectByValue", i.BYMONTHDAY))
                                      : i.BYSETPOS &&
                                        ((j = this.$element.find(".repeat-yearly-day")),
                                        j.find("input").addClass("checked").attr("checked", "checked"),
                                        j.find("label.radio-custom").addClass("checked"),
                                        j.find(".year-month-day-pos").selectlist("selectByValue", i.BYSETPOS),
                                        i.BYDAY && j.find(".year-month-days").selectlist("selectByValue", i.BYDAY),
                                        i.BYMONTH && j.find(".year-month").selectlist("selectByValue", i.BYMONTH)),
                                  (e = "yearly"))
                                : (e = "none");
                        if (i.COUNT) this.$endAfter.spinbox("value", parseInt(i.COUNT, 10)), this.$endSelect.selectlist("selectByValue", "after");
                        else if (i.UNTIL) {
                            (j = i.UNTIL), 8 === j.length && ((j = j.split("")), j.splice(4, 0, "-"), j.splice(7, 0, "-"), (j = j.join("")));
                            var o = this.$timeZone.selectlist("selectedItem"),
                                p = "+00:00" === o.offset ? "Z" : o.offset;
                            k = j;
                            var q = this.setUtcTime(k, l, p);
                            this.$endDate.datepicker("setDate", q), this.$endSelect.selectlist("selectByValue", "date");
                        }
                        this.endSelectChanged(), i.INTERVAL && this.$repeatIntervalSpinbox.spinbox("value", parseInt(i.INTERVAL, 10)), this.$repeatIntervalSelect.selectlist("selectByValue", e), this.repeatIntervalSelectChanged();
                    }
                    var r = this.setUtcTime(k, l, m);
                    this.$startDate.datepicker("setDate", r);
                },
                toggleState: function (a) {
                    this.$element.find(".combobox").combobox(a),
                        this.$element.find(".datepicker").datepicker(a),
                        this.$element.find(".selectlist").selectlist(a),
                        this.$element.find(".spinbox").spinbox(a),
                        this.$element.find("[type=radio]").radio(a),
                        (a = "disable" === a ? "addClass" : "removeClass"),
                        this.$element.find(".repeat-days-of-the-week .btn-group")[a]("disabled");
                },
                value: function (a) {
                    return a ? this.setValue(a) : this.getValue();
                },
            }),
                (a.fn.scheduler = function (b) {
                    var d,
                        e = Array.prototype.slice.call(arguments, 1),
                        f = this.each(function () {
                            var f = a(this),
                                g = f.data("fu.scheduler"),
                                h = "object" == typeof b && b;
                            g || f.data("fu.scheduler", (g = new c(this, h))), "string" == typeof b && (d = g[b].apply(g, e));
                        });
                    return void 0 === d ? f : d;
                }),
                (a.fn.scheduler.defaults = {}),
                (a.fn.scheduler.Constructor = c),
                (a.fn.scheduler.noConflict = function () {
                    return (a.fn.scheduler = b), this;
                }),
                a(document).on("mousedown.fu.scheduler.data-api", "[data-initialize=scheduler]", function (b) {
                    var c = a(b.target).closest(".scheduler");
                    c.data("fu.scheduler") || c.scheduler(c.data());
                }),
                a(function () {
                    a("[data-initialize=scheduler]").each(function () {
                        var b = a(this);
                        b.data("scheduler") || b.scheduler(b.data());
                    });
                });
        })(a);
});
