(function ($) {
    "use strict";
    $(window).on("load", function () {
        $(".prealoader").delay(1000).fadeOut("slow");
    });
    
    jQuery(document).ready(function () {
        jQuery(".funfact-wrapper .funfact-item").each(function () {
            jQuery(this).hover(function () {
                jQuery(this).parents(".funfact-wrapper").find(".funfact-item").removeClass("active");
                jQuery(this).addClass("active");
            });
        });
    });

    $(document).ready(function () {
        function authorToggleHandler(o) {
            var t = $(".about-toggle"),
                e = $(".author-close");
            $("body").toggleClass("author-popup-active"), $("body").toggleClass("overlay-enabled"), $("body").hasClass("author-popup-active") ? e.focus() : t.focus(), authorPopupAccessibility();
        }
        function hideAuthorPopup(o) {
            var t = $(".about-toggle"),
                e = $(".author-popup");
            $(o.target).closest(t).length ||
                $(o.target).closest(e).length ||
                ($("body").hasClass("author-popup-active") && ($("body").removeClass("author-popup-active"), $("body").removeClass("overlay-enabled"), t.focus(), o.stopPropagation()));
        }
        function authorPopupAccessibility() {
            var links,
                i,
                len,
                searchItem = document.querySelector(".author-popup"),
                fieldToggle = document.querySelector(".author-close");
            let focusableElements = 'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])';
            let firstFocusableElement = fieldToggle;
            let focusableContent = searchItem.querySelectorAll(focusableElements);
            let lastFocusableElement = focusableContent[focusableContent.length - 1];
            if (!searchItem) {
                return !1;
            }
            links = searchItem.getElementsByTagName("button");
            for (i = 0, len = links.length; i < len; i++) {
                links[i].addEventListener("focus", toggleFocus, !0);
                links[i].addEventListener("blur", toggleFocus, !0);
            }
            function toggleFocus() {
                var self = this;
                while (-1 === self.className.indexOf("author-anim")) {
                    if ("input" === self.tagName.toLowerCase()) {
                        if (-1 !== self.className.indexOf("focus")) {
                            self.className = self.className.replace("focus", "");
                        } else {
                            self.className += " focus";
                        }
                    }
                    self = self.parentElement;
                }
            }
            document.addEventListener("keydown", function (e) {
                let isTabPressed = e.key === "Tab" || e.keyCode === 9;
                if (!isTabPressed) {
                    return;
                }
                if (e.shiftKey) {
                    if (document.activeElement === firstFocusableElement) {
                        lastFocusableElement.focus();
                        e.preventDefault();
                    }
                } else {
                    if (document.activeElement === lastFocusableElement) {
                        firstFocusableElement.focus();
                        e.preventDefault();
                    }
                }
            });
        }
        $(document).on("click", ".about-toggle", authorToggleHandler), $(document).on("click", ".author-close", authorToggleHandler), $(document).on("click", hideAuthorPopup);
        activePostFilter();
        function activePostFilter() {
            var postFilter = $(".av-filter-init");
            $.each(postFilter, function (t, a) {
                var e = $(this),
                    i = $(this).parent().parent().parent().attr("class"),
                    n = $("#" + e.attr("id"));
                $(n).imagesLoaded(function () {
                    var t = $(n).isotope({ itemSelector: ".av-filter-item", layout: "masonry", percentPosition: !0, masonry: { columnWidth: 0, gutter: 0 } }),
                        a = {
                            numberGreaterThan50: function () {
                                var t = $(this).find(".number").text();
                                return parseInt(t, 10) > 20;
                            },
                            ium: function () {
                                return $(this).find(".name").text().match(/ium$/);
                            },
                        };
                    if (
                        ($(document).on("click", "." + i + " .av-tab-filter.filters-theme a", function () {
                            var e = $(this).attr("data-filter");
                            (e = a[e] || e), t.isotope({ filter: e });
                        }),
                        $("." + i + " .av-tab-filter").hasClass("filters-load"))
                    ) {
                        var e = 3,
                            s = t.data("isotope");
                        function l(a) {
                            t.find(".hidden").removeClass("hidden");
                            var e = s.filteredItems.slice(a, s.filteredItems.length).map(function (t) {
                                return t.element;
                            });
                            $(e).addClass("hidden"), t.isotope("layout"), 0 == e.length && $("#load-more").text("No Item");
                        }
                        l(3),
                            t.after(
                                '<div class="theme-column-12 text-center mt-6"><button id="load-more" class="awp-btn awp-btn-secondary">Load More <i class="fa fa-spinner"></i></button></div>'
                            ),
                            $("#load-more").click(function () {
                                $("." + i + " .av-tab-filter.filters-load").data("clicked") ? ((e = 3), $("." + i + " .av-tab-filter.filters-load").data("clicked", !1)) : (e = e), l((e += 3));
                            }),
                            $("." + i + " .av-tab-filter.filters-load").click(function () {
                                $(this).data("clicked", !0), l(3);
                            });
                    }
                });
            });
        }
        $(document).on("click", ".av-tab-filter.filters-theme a", function () {
            $(this).siblings().removeClass("active");
            $(this).addClass("active");
        });
        $(".mgf-popup").magnificPopup({
            delegate: "a.image",
            type: "image",
            gallery: { enabled: true, navigateByImgClick: true, preload: [0, 1] },
            callbacks: {
                elementParse: function (item) {
                    if (item.el[0].className == "video") {
                        (item.type = "iframe"),
                            (item.iframe = {
                                patterns: {
                                    youtube: { index: "youtube.com/", id: "v=", src: "//www.youtube.com/embed/%id%?autoplay=1" },
                                    vimeo: { index: "vimeo.com/", id: "/", src: "//player.vimeo.com/video/%id%?autoplay=1" },
                                    gmaps: { index: "//maps.google.", src: "%id%&output=embed" },
                                },
                            });
                    } else {
                        (item.type = "image"), (item.tLoading = "Loading image #%curr%..."), (item.mainClass = "mfp-img-mobile"), (item.image = { tError: '<a href="%url%">The image #%curr%</a> could not be loaded.' });
                    }
                },
            },
        });

        $(".av-load-3").slice(0, 6).show();
        $(".av-load-4").slice(0, 8).show();
        $(".av-load-more").on("click", function (e) {
            e.preventDefault();
            $(".av-load-more").addClass("loadspinner");
            $(".av-load-more").animate({ display: "block" }, 2000, function () {
                $(".av-load-3:hidden").slice(0, 3).slideDown();
                $(".av-load-4:hidden").slice(0, 4).slideDown();
                if ($(".av-load-item:hidden").length === 0) {
                    $(".av-load-more").text("No more");
                }
                $(".av-load-more").removeClass("loadspinner");
            });
        });
        $(".widget_social_widget")
            .find("li a")
            .each(function () {
                $(this).on("mouseenter focus", function () {
                    var icon = this.querySelector("i");
                    if (icon) {
                        var burst = new mojs.Burst({ radius: { 15: 45 }, parent: icon, children: { fill: ["var(--sp-primary)", "var(--sp-primary2)", "var(--sp-primary)"] } });
                        var shape = new mojs.Shape({ parent: icon, type: "circle", radius: { 0: 30 }, fill: "transparent", stroke: "var(--sp-primary)", strokeWidth: { 15: 0 }, opacity: 0.6, duration: 1000, easing: mojs.easing.sin.out });
                        shape.play();
                        burst.play();
                    }
                });
            });
        // $(".awp-btn-bubble").each(function () {
        //     var $circlesTopLeft = $(this).find(".circle.top-left");
        //     var $circlesBottomRight = $(this).find(".circle.bottom-right");
        //     var tl = new TimelineLite();
        //     var tl2 = new TimelineLite();
        //     var btTl = new TimelineLite({ paused: true });
        //     tl.to($circlesTopLeft, 1.2, { x: -25, y: -25, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false) });
        //     tl.to($circlesTopLeft.eq(0), 0.1, { scale: 0.2, x: "+=6", y: "-=2" });
        //     tl.to($circlesTopLeft.eq(1), 0.1, { scaleX: 1, scaleY: 0.8, x: "-=10", y: "-=7" }, "-=0.1");
        //     tl.to($circlesTopLeft.eq(2), 0.1, { scale: 0.2, x: "-=15", y: "+=6" }, "-=0.1");
        //     tl.to($circlesTopLeft.eq(0), 1, { scale: 0, x: "-=5", y: "-=15", opacity: 0 });
        //     tl.to($circlesTopLeft.eq(1), 1, { scaleX: 0.4, scaleY: 0.4, x: "-=10", y: "-=10", opacity: 0 }, "-=1");
        //     tl.to($circlesTopLeft.eq(2), 1, { scale: 0, x: "-=15", y: "+=5", opacity: 0 }, "-=1");
        //     var tlBt1 = new TimelineLite();
        //     var tlBt2 = new TimelineLite();
        //     tlBt1.set($circlesTopLeft, { x: 0, y: 0, rotation: -45 });
        //     tlBt1.add(tl);
        //     tl2.set($circlesBottomRight, { x: 0, y: 0 });
        //     tl2.to($circlesBottomRight, 1.1, { x: 30, y: 30, ease: SlowMo.ease.config(0.1, 0.7, false) });
        //     tl2.to($circlesBottomRight.eq(0), 0.1, { scale: 0.2, x: "-=6", y: "+=3" });
        //     tl2.to($circlesBottomRight.eq(1), 0.1, { scale: 0.8, x: "+=7", y: "+=3" }, "-=0.1");
        //     tl2.to($circlesBottomRight.eq(2), 0.1, { scale: 0.2, x: "+=15", y: "-=6" }, "-=0.2");
        //     tl2.to($circlesBottomRight.eq(0), 1, { scale: 0, x: "+=5", y: "+=15", opacity: 0 });
        //     tl2.to($circlesBottomRight.eq(1), 1, { scale: 0.4, x: "+=7", y: "+=7", opacity: 0 }, "-=1");
        //     tl2.to($circlesBottomRight.eq(2), 1, { scale: 0, x: "+=15", y: "-=5", opacity: 0 }, "-=1");
        //     tlBt2.set($circlesBottomRight, { x: 0, y: 0, rotation: 45 });
        //     tlBt2.add(tl2);
        //     btTl.add(tlBt1);
        //     btTl.to($(this).find(".button.effect-button"), 0.8, { scaleY: 1.1 }, 0.1);
        //     btTl.add(tlBt2, 0.2);
        //     btTl.to($(this).find(".button.effect-button"), 1.8, { scale: 1, ease: Elastic.easeOut.config(1.2, 0.4) }, 1.2);
        //     btTl.timeScale(2.6);
        //     $(this).on("mouseenter focus", function () {
        //         btTl.restart();
        //     });
        // });
        $(".faq-type").isotope({ itemSelector: ".faq-item", layoutMode: "fitRows", stagger: 30 });
        var filterFns = {
            numberGreaterThan50: function () {
                var a = $(this).find(".number").text();
                return parseInt(a, 10) > 50;
            },
            ium: function () {
                return $(this).find(".name").text().match(/ium$/);
            },
        };
        function layoutIsotope() {
            $(".faq-type").isotope("layout");
        }
        $(".filters-faq").on("click", "a", function () {
            var a = $(this).attr("data-filter");
            (a = filterFns[a] || a), $(".faq-type").isotope({ filter: a });
        }),
            $(".av-tab-filter.filters-faq").each(function (a, t) {
                var e = $(t);
                e.on("click", "a", function () {
                    e.find(".active").removeClass("active"), $(this).addClass("active");
                });
            }),
            $(".faq-type").on("click", ".accordion-title", function (a) {
                var t = $(a.currentTarget).parents(".faq-item"),
                    e = t.hasClass("is-accordion-open");
                $(".faq-type").find(".is-accordion-open").removeClass("is-accordion-open").find(".accordion-content").slideUp("normal", layoutIsotope),
                    $(".faq-type").find(".fa-minus").removeClass("fa-minus").addClass("fa-plus"),
                    e || (t.addClass("is-accordion-open").find(".accordion-content").slideDown("normal", layoutIsotope), t.find(".fa-plus").removeClass("fa-plus").addClass("fa-minus"));
            });
        $(".pricing-two .pricing-item").each(function () {
            $(this).hover(function () {
                $(this).parents(".pricing-row").find(".pricing-item").removeClass("active");
                $(this).addClass("active");
            });
        });
        $(".funfact-wrapper .funfact-item").each(function () {
            $(this).hover(function () {
                $(this).parents(".funfact-wrapper").find(".funfact-item").removeClass("active");
                $(this).addClass("active");
            });
        });
        $(".contactinfo-row .contactinfo-item").each(function () {
            $(this).hover(function () {
                $(this).parents(".contactinfo-row").find(".contactinfo-item").removeClass("active");
                $(this).addClass("active");
            });
        });
        $(".skillbar").each(function () {
            $(this)
                .find(".skillbar-bar")
                .animate({ width: $(this).attr("data-percent") }, 6000);
            $(this)
                .find(".skill-bar-percent")
                .animate({ left: $(this).attr("data-percent") }, 6000);
        });
        $(".count-bar").each(function () {
            var $this = $(this);
            $({ Counter: 0 }).animate(
                { Counter: $this.text() },
                {
                    duration: 6000,
                    easing: "swing",
                    step: function () {
                        $this.text(Math.ceil(this.Counter));
                    },
                }
            );
        });
        $(".counter").counterUp({ delay: 10, time: 1000 });
        $(".pricing-tab a").click(function () {
            var tab_id = $(this).attr("data-tab");
            $(".pricing-tab a").removeClass("active");
            $(".tab-content .tab-pane").removeClass("active").removeClass("show");
            $(this).addClass("active");
            setTimeout(function () {
                $("#" + tab_id)
                    .addClass("active")
                    .addClass("show");
            }, 100);
        });
    });
  
})(jQuery);
