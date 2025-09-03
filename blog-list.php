<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_default">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="profile" href="//gmpg.org/xfn/11">
    <title>ITactics</title>
    <meta name='robots' content='max-image-preview:large' />
    <style>
    img:is([sizes="auto"i], [sizes^="auto,"i]) {
        contain-intrinsic-size: 3000px 1500px
    }
    </style>
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel="alternate" type="application/rss+xml" title="ITactics &raquo; Feed"
        href="https://itactics.themerex.net/feed/" />
    <link rel="alternate" type="application/rss+xml" title="ITactics &raquo; Comments Feed"
        href="https://itactics.themerex.net/comments/feed/" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="ITactics" />
    <meta property="og:description" content="IT Solutions &amp; Digital Startup WordPress Theme + AI" />
    <meta property="og:image" content="https://itactics.themerex.net/wp-content/uploads/2025/05/logo.png" />
    <script type="text/javascript">
    /* <![CDATA[ */
    window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/svg\/",
        "svgExt": ".svg",
        "source": {
            "concatemoji": "https:\/\/itactics.themerex.net\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.8.2"
        }
    };
    /*! This file is auto-generated */
    ! function(s, n) {
        var o, i, e;

        function c(e) {
            try {
                var t = {
                    supportTests: e,
                    timestamp: (new Date).valueOf()
                };
                sessionStorage.setItem(o, JSON.stringify(t))
            } catch (e) {}
        }

        function p(e, t, n) {
            e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
            var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                a = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                    .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
            return t.every(function(e, t) {
                return e === a[t]
            })
        }

        function u(e, t) {
            e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
            for (var n = e.getImageData(16, 16, 1, 1), a = 0; a < n.data.length; a++)
                if (0 !== n.data[a]) return !1;
            return !0
        }

        function f(e, t, n, a) {
            switch (t) {
                case "flag":
                    return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                        n(e, "\ud83c\udde8\ud83c\uddf6", "\ud83c\udde8\u200b\ud83c\uddf6") && !n(e,
                            "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                            "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                case "emoji":
                    return !a(e, "\ud83e\udedf")
            }
            return !1
        }

        function g(e, t, n, a) {
            var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                    300, 150) : s.createElement("canvas"),
                o = r.getContext("2d", {
                    willReadFrequently: !0
                }),
                i = (o.textBaseline = "top", o.font = "600 32px Arial", {});
            return e.forEach(function(e) {
                i[e] = t(o, e, n, a)
            }), i
        }

        function t(e) {
            var t = s.createElement("script");
            t.src = e, t.defer = !0, s.head.appendChild(t)
        }
        "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", i = ["flag", "emoji"], n.supports = {
            everything: !0,
            everythingExceptFlag: !0
        }, e = new Promise(function(e) {
            s.addEventListener("DOMContentLoaded", e, {
                once: !0
            })
        }), new Promise(function(t) {
            var n = function() {
                try {
                    var e = JSON.parse(sessionStorage.getItem(o));
                    if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                        e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                } catch (e) {}
                return null
            }();
            if (!n) {
                if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                    typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                    var e = "postMessage(" + g.toString() + "(" + [JSON.stringify(i), f.toString(), p
                            .toString(), u.toString()
                        ].join(",") + "));",
                        a = new Blob([e], {
                            type: "text/javascript"
                        }),
                        r = new Worker(URL.createObjectURL(a), {
                            name: "wpTestEmojiSupports"
                        });
                    return void(r.onmessage = function(e) {
                        c(n = e.data), r.terminate(), t(n)
                    })
                } catch (e) {}
                c(n = g(i, f, p, u))
            }
            t(n)
        }).then(function(e) {
            for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                    .everythingExceptFlag && n.supports[t]);
            n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                .DOMReady = !1, n.readyCallback = function() {
                    n.DOMReady = !0
                }
        }).then(function() {
            return e
        }).then(function() {
            var e;
            n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
        }))
    }((window, document), window._wpemojiSettings);
    /* ]]> */
    </script>
    <link property="stylesheet" rel='stylesheet' id='trx_addons-icons-css'
        href='https://itactics.themerex.net/wp-content/plugins/trx_addons/css/font-icons/css/trx_addons_icons.css'
        type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='trx_demo_icons-css'
        href='https://itactics.themerex.net/wp-content/plugins/trx_demo/css/font-icons/css/trx_demo_icons.css'
        type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='trx_demo_icons_animation-css'
        href='https://itactics.themerex.net/wp-content/plugins/trx_demo/css/font-icons/css/animation.css'
        type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='itactics-font-google_fonts-css'
        href='https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&#038;family=Outfit:wght@100..900&#038;subset=latin,latin-ext&#038;display=swap'
        type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='itactics-fontello-css'
        href='https://itactics.themerex.net/wp-content/themes/itactics/skins/default/css/font-icons/css/fontello.css'
        type='text/css' media='all' />
    <style id='wp-emoji-styles-inline-css' type='text/css'>
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
    </style>
    <link property="stylesheet" rel='stylesheet' id='wp-block-library-css'
        href='https://itactics.themerex.net/wp-includes/css/dist/block-library/style.min.css?ver=6.8.2' type='text/css'
        media='all' />
    <style id='global-styles-inline-css' type='text/css'>
    :root {
        --wp--preset--aspect-ratio--square: 1;
        --wp--preset--aspect-ratio--4-3: 4/3;
        --wp--preset--aspect-ratio--3-4: 3/4;
        --wp--preset--aspect-ratio--3-2: 3/2;
        --wp--preset--aspect-ratio--2-3: 2/3;
        --wp--preset--aspect-ratio--16-9: 16/9;
        --wp--preset--aspect-ratio--9-16: 9/16;
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--color--theme-color-bg-color: #FFFFFF;
        --wp--preset--color--theme-color-bg-color-2: #F6F8FB;
        --wp--preset--color--theme-color-bd-color: #E0DFE6;
        --wp--preset--color--theme-color-title: #181621;
        --wp--preset--color--theme-color-meta: #A09CB1;
        --wp--preset--color--theme-color-link: #B83DDA;
        --wp--preset--color--theme-color-hover: #9A33B6;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--gradient--vertical-link-to-hover: linear-gradient(to bottom, var(--theme-color-link) 0%, var(--theme-color-hover) 100%);
        --wp--preset--gradient--diagonal-link-to-hover: linear-gradient(to bottom right, var(--theme-color-link) 0%, var(--theme-color-hover) 100%);
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: clamp(14px, 0.875rem + ((1vw - 3.2px) * 0.619), 20px);
        --wp--preset--font-size--large: clamp(22.041px, 1.378rem + ((1vw - 3.2px) * 1.439), 36px);
        --wp--preset--font-size--x-large: clamp(25.014px, 1.563rem + ((1vw - 3.2px) * 1.751), 42px);
        --wp--preset--font-family--p-font: "DM Sans", sans-serif;
        --wp--preset--font-family--post-font: inherit;
        --wp--preset--font-family--h-1-font: Outfit, sans-serif;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
        --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        --wp--custom--spacing--tiny: var(--sc-space-tiny, 1rem);
        --wp--custom--spacing--small: var(--sc-space-small, 2rem);
        --wp--custom--spacing--medium: var(--sc-space-medium, 3.3333rem);
        --wp--custom--spacing--large: var(--sc-space-large, 6.6667rem);
        --wp--custom--spacing--huge: var(--sc-space-huge, 8.6667rem);
    }

    :root {
        --wp--style--global--content-size: 850px;
        --wp--style--global--wide-size: 1290px;
    }

    :where(body) {
        margin: 0;
    }

    .wp-site-blocks>.alignleft {
        float: left;
        margin-right: 2em;
    }

    .wp-site-blocks>.alignright {
        float: right;
        margin-left: 2em;
    }

    .wp-site-blocks>.aligncenter {
        justify-content: center;
        margin-left: auto;
        margin-right: auto;
    }

    :where(.is-layout-flex) {
        gap: 0.5em;
    }

    :where(.is-layout-grid) {
        gap: 0.5em;
    }

    .is-layout-flow>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    .is-layout-flow>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    .is-layout-flow>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    .is-layout-constrained>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    .is-layout-constrained>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    .is-layout-constrained>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important;
    }

    .is-layout-constrained>.alignwide {
        max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
        display: flex;
    }

    .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
    }

    .is-layout-flex> :is(*, div) {
        margin: 0;
    }

    body .is-layout-grid {
        display: grid;
    }

    .is-layout-grid> :is(*, div) {
        margin: 0;
    }

    body {
        padding-top: 0px;
        padding-right: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
    }

    a:where(:not(.wp-element-button)) {
        text-decoration: underline;
    }

    :root :where(.wp-element-button, .wp-block-button__link) {
        background-color: #32373c;
        border-width: 0;
        color: #fff;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
        padding: calc(0.667em + 2px) calc(1.333em + 2px);
        text-decoration: none;
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-theme-color-bg-color-color {
        color: var(--wp--preset--color--theme-color-bg-color) !important;
    }

    .has-theme-color-bg-color-2-color {
        color: var(--wp--preset--color--theme-color-bg-color-2) !important;
    }

    .has-theme-color-bd-color-color {
        color: var(--wp--preset--color--theme-color-bd-color) !important;
    }

    .has-theme-color-title-color {
        color: var(--wp--preset--color--theme-color-title) !important;
    }

    .has-theme-color-meta-color {
        color: var(--wp--preset--color--theme-color-meta) !important;
    }

    .has-theme-color-link-color {
        color: var(--wp--preset--color--theme-color-link) !important;
    }

    .has-theme-color-hover-color {
        color: var(--wp--preset--color--theme-color-hover) !important;
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-theme-color-bg-color-background-color {
        background-color: var(--wp--preset--color--theme-color-bg-color) !important;
    }

    .has-theme-color-bg-color-2-background-color {
        background-color: var(--wp--preset--color--theme-color-bg-color-2) !important;
    }

    .has-theme-color-bd-color-background-color {
        background-color: var(--wp--preset--color--theme-color-bd-color) !important;
    }

    .has-theme-color-title-background-color {
        background-color: var(--wp--preset--color--theme-color-title) !important;
    }

    .has-theme-color-meta-background-color {
        background-color: var(--wp--preset--color--theme-color-meta) !important;
    }

    .has-theme-color-link-background-color {
        background-color: var(--wp--preset--color--theme-color-link) !important;
    }

    .has-theme-color-hover-background-color {
        background-color: var(--wp--preset--color--theme-color-hover) !important;
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-theme-color-bg-color-border-color {
        border-color: var(--wp--preset--color--theme-color-bg-color) !important;
    }

    .has-theme-color-bg-color-2-border-color {
        border-color: var(--wp--preset--color--theme-color-bg-color-2) !important;
    }

    .has-theme-color-bd-color-border-color {
        border-color: var(--wp--preset--color--theme-color-bd-color) !important;
    }

    .has-theme-color-title-border-color {
        border-color: var(--wp--preset--color--theme-color-title) !important;
    }

    .has-theme-color-meta-border-color {
        border-color: var(--wp--preset--color--theme-color-meta) !important;
    }

    .has-theme-color-link-border-color {
        border-color: var(--wp--preset--color--theme-color-link) !important;
    }

    .has-theme-color-hover-border-color {
        border-color: var(--wp--preset--color--theme-color-hover) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-vertical-link-to-hover-gradient-background {
        background: var(--wp--preset--gradient--vertical-link-to-hover) !important;
    }

    .has-diagonal-link-to-hover-gradient-background {
        background: var(--wp--preset--gradient--diagonal-link-to-hover) !important;
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
    }

    .has-p-font-font-family {
        font-family: var(--wp--preset--font-family--p-font) !important;
    }

    .has-post-font-font-family {
        font-family: var(--wp--preset--font-family--post-font) !important;
    }

    .has-h-1-font-font-family {
        font-family: var(--wp--preset--font-family--h-1-font) !important;
    }

    :root :where(.wp-block-button .wp-block-button__link) {
        background-color: var(--theme-color-text_link);
        border-radius: 0;
        color: var(--theme-color-inverse_link);
        font-family: var(--theme-font-button_font-family);
        font-size: var(--theme-font-button_font-size);
        font-weight: var(--theme-font-button_font-weight);
        line-height: var(--theme-font-button_line-height);
    }

    :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
    }

    :root :where(.wp-block-pullquote) {
        border-width: 1px 0;
        font-size: clamp(0.984em, 0.984rem + ((1vw - 0.2em) * 0.851), 1.5em);
        line-height: 1.6;
    }

    :root :where(.wp-block-post-comments) {
        padding-top: var(--wp--custom--spacing--small);
    }

    :root :where(.wp-block-quote) {
        border-width: 1px;
    }
    </style>
    <link property="stylesheet" rel='stylesheet' id='magnific-popup-css'
        href='https://itactics.themerex.net/wp-content/plugins/trx_addons/js/magnific/magnific-popup.min.css'
        type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='trx_demo_panels-css'
        href='https://itactics.themerex.net/wp-content/plugins/trx_demo/css/trx_demo_panels.css' type='text/css'
        media='all' />
    <link property="stylesheet" rel='stylesheet' id='cute-alert-css'
        href='https://itactics.themerex.net/wp-content/plugins/metform/public/assets/lib/cute-alert/style.css?ver=4.0.4'
        type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='text-editor-style-css'
        href='https://itactics.themerex.net/wp-content/plugins/metform/public/assets/css/text-editor.css?ver=4.0.4'
        type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='elementor-frontend-css'
        href='https://itactics.themerex.net/wp-content/uploads/elementor/css/custom-frontend.min.css?ver=1755699134'
        type='text/css' media='all' />
    <style id='elementor-frontend-inline-css' type='text/css'>
    .elementor-kit-5 {
        --e-global-color-primary: #6EC1E4;
        --e-global-color-secondary: #54595F;
        --e-global-color-text: #7A7A7A;
        --e-global-color-accent: #61CE70;
        --e-global-typography-primary-font-family: "Roboto";
        --e-global-typography-primary-font-weight: 600;
        --e-global-typography-secondary-font-family: "Roboto Slab";
        --e-global-typography-secondary-font-weight: 400;
        --e-global-typography-text-font-family: "Roboto";
        --e-global-typography-text-font-weight: 400;
        --e-global-typography-accent-font-family: "Roboto";
        --e-global-typography-accent-font-weight: 500;
        --e-global-color-theme_color_bg_color: #FFFFFF;
        --e-global-color-theme_color_bg_color_2: #F6F8FB;
        --e-global-color-theme_color_bd_color: #E0DFE6;
        --e-global-color-theme_color_title: #181621;
        --e-global-color-theme_color_text: #706C7A;
        --e-global-color-theme_color_meta: #A09CB1;
        --e-global-color-theme_color_link: #B83DDA;
        --e-global-color-theme_color_hover: #9A33B6;
        --e-global-color-theme_color_alt_bg_color: #16111D;
        --e-global-color-theme_color_alt_bg_color_2: #020002;
        --e-global-color-theme_color_alt_bd_color: #34313B;
        --e-global-color-theme_color_alt_title: #FFFEFE;
        --e-global-color-theme_color_alt_text: #A09BAF;
        --e-global-color-theme_color_alt_meta: #7E7A91;
        --e-global-color-theme_color_alt_link: #B83DDA;
        --e-global-color-theme_color_alt_hover: #9A33B6;
        --e-global-typography-theme_font_p-font-family: "DM Sans";
        --e-global-typography-theme_font_p-font-size: 16px;
        --e-global-typography-theme_font_p-font-weight: 400;
        --e-global-typography-theme_font_p-text-transform: none;
        --e-global-typography-theme_font_p-font-style: normal;
        --e-global-typography-theme_font_p-line-height: 1.625em;
        --e-global-typography-theme_font_p-letter-spacing: 0px;
        --e-global-typography-theme_font_post-font-family: "inherit";
        --e-global-typography-theme_font_post-font-weight: inherit;
        --e-global-typography-theme_font_post-text-transform: inherit;
        --e-global-typography-theme_font_post-font-style: inherit;
        --e-global-typography-theme_font_post-text-decoration: inherit;
        --e-global-typography-theme_font_h1-font-family: "Outfit";
        --e-global-typography-theme_font_h1-font-size: 57px;
        --e-global-typography-theme_font_h1-font-weight: 500;
        --e-global-typography-theme_font_h1-text-transform: none;
        --e-global-typography-theme_font_h1-font-style: normal;
        --e-global-typography-theme_font_h1-text-decoration: none;
        --e-global-typography-theme_font_h1-line-height: 1.0351em;
        --e-global-typography-theme_font_h1-letter-spacing: 0px;
        --e-global-typography-theme_font_h2-font-family: "Outfit";
        --e-global-typography-theme_font_h2-font-size: 47px;
        --e-global-typography-theme_font_h2-font-weight: 500;
        --e-global-typography-theme_font_h2-text-transform: none;
        --e-global-typography-theme_font_h2-font-style: normal;
        --e-global-typography-theme_font_h2-text-decoration: none;
        --e-global-typography-theme_font_h2-line-height: 1.0425em;
        --e-global-typography-theme_font_h2-letter-spacing: 0px;
        --e-global-typography-theme_font_h3-font-family: "Outfit";
        --e-global-typography-theme_font_h3-font-size: 35px;
        --e-global-typography-theme_font_h3-font-weight: 500;
        --e-global-typography-theme_font_h3-text-transform: none;
        --e-global-typography-theme_font_h3-font-style: normal;
        --e-global-typography-theme_font_h3-text-decoration: none;
        --e-global-typography-theme_font_h3-line-height: 1.0571em;
        --e-global-typography-theme_font_h3-letter-spacing: 0px;
        --e-global-typography-theme_font_h4-font-family: "Outfit";
        --e-global-typography-theme_font_h4-font-size: 28px;
        --e-global-typography-theme_font_h4-font-weight: 500;
        --e-global-typography-theme_font_h4-text-transform: none;
        --e-global-typography-theme_font_h4-font-style: normal;
        --e-global-typography-theme_font_h4-text-decoration: none;
        --e-global-typography-theme_font_h4-line-height: 1.1429em;
        --e-global-typography-theme_font_h4-letter-spacing: 0px;
        --e-global-typography-theme_font_h5-font-family: "Outfit";
        --e-global-typography-theme_font_h5-font-size: 23px;
        --e-global-typography-theme_font_h5-font-weight: 500;
        --e-global-typography-theme_font_h5-text-transform: none;
        --e-global-typography-theme_font_h5-font-style: normal;
        --e-global-typography-theme_font_h5-text-decoration: none;
        --e-global-typography-theme_font_h5-line-height: 1.1739em;
        --e-global-typography-theme_font_h5-letter-spacing: 0px;
        --e-global-typography-theme_font_h6-font-family: "Outfit";
        --e-global-typography-theme_font_h6-font-size: 19px;
        --e-global-typography-theme_font_h6-font-weight: 500;
        --e-global-typography-theme_font_h6-text-transform: none;
        --e-global-typography-theme_font_h6-font-style: normal;
        --e-global-typography-theme_font_h6-text-decoration: none;
        --e-global-typography-theme_font_h6-line-height: 1.2632em;
        --e-global-typography-theme_font_h6-letter-spacing: 0px;
        --e-global-typography-theme_font_logo-font-family: "Outfit";
        --e-global-typography-theme_font_logo-font-size: 35px;
        --e-global-typography-theme_font_logo-font-weight: 500;
        --e-global-typography-theme_font_logo-text-transform: none;
        --e-global-typography-theme_font_logo-font-style: normal;
        --e-global-typography-theme_font_logo-text-decoration: none;
        --e-global-typography-theme_font_logo-line-height: 1.1142em;
        --e-global-typography-theme_font_logo-letter-spacing: 0px;
        --e-global-typography-theme_font_button-font-family: "Outfit";
        --e-global-typography-theme_font_button-font-size: 16px;
        --e-global-typography-theme_font_button-font-weight: 500;
        --e-global-typography-theme_font_button-text-transform: none;
        --e-global-typography-theme_font_button-font-style: normal;
        --e-global-typography-theme_font_button-text-decoration: none;
        --e-global-typography-theme_font_button-line-height: 19px;
        --e-global-typography-theme_font_button-letter-spacing: 0px;
        --e-global-typography-theme_font_input-font-family: "inherit";
        --e-global-typography-theme_font_input-font-size: 15px;
        --e-global-typography-theme_font_input-font-weight: 400;
        --e-global-typography-theme_font_input-text-transform: none;
        --e-global-typography-theme_font_input-font-style: normal;
        --e-global-typography-theme_font_input-text-decoration: none;
        --e-global-typography-theme_font_input-line-height: 1.6em;
        --e-global-typography-theme_font_input-letter-spacing: 0px;
        --e-global-typography-theme_font_info-font-family: "inherit";
        --e-global-typography-theme_font_info-font-size: 14px;
        --e-global-typography-theme_font_info-font-weight: 400;
        --e-global-typography-theme_font_info-text-transform: none;
        --e-global-typography-theme_font_info-font-style: normal;
        --e-global-typography-theme_font_info-text-decoration: none;
        --e-global-typography-theme_font_info-line-height: 1.5em;
        --e-global-typography-theme_font_info-letter-spacing: 0px;
        --e-global-typography-theme_font_menu-font-family: "DM Sans";
        --e-global-typography-theme_font_menu-font-size: 16px;
        --e-global-typography-theme_font_menu-font-weight: 400;
        --e-global-typography-theme_font_menu-text-transform: none;
        --e-global-typography-theme_font_menu-font-style: normal;
        --e-global-typography-theme_font_menu-text-decoration: none;
        --e-global-typography-theme_font_menu-line-height: 1.5em;
        --e-global-typography-theme_font_menu-letter-spacing: 0px;
        --e-global-typography-theme_font_submenu-font-family: "DM Sans";
        --e-global-typography-theme_font_submenu-font-size: 15px;
        --e-global-typography-theme_font_submenu-font-weight: 400;
        --e-global-typography-theme_font_submenu-text-transform: none;
        --e-global-typography-theme_font_submenu-font-style: normal;
        --e-global-typography-theme_font_submenu-text-decoration: none;
        --e-global-typography-theme_font_submenu-line-height: 1.4em;
        --e-global-typography-theme_font_submenu-letter-spacing: 0px;
    }

    .elementor-section.elementor-section-boxed>.elementor-container {
        max-width: 1290px;
    }

    .e-con {
        --container-max-width: 1290px;
        --container-default-padding-top: 0px;
        --container-default-padding-right: 0px;
        --container-default-padding-bottom: 0px;
        --container-default-padding-left: 0px;
    }

    .elementor-widget:not(:last-child) {
        margin-block-end: 30px;
    }

    .elementor-element {
        --widgets-spacing: 30px 30px;
        --widgets-spacing-row: 30px;
        --widgets-spacing-column: 30px;
    }

        {}

    .sc_layouts_title_caption {
        display: var(--page-title-display);
    }

    @media(max-width:1279px) {
        .elementor-kit-5 {
            --e-global-typography-theme_font_h1-font-size: 45px;
            --e-global-typography-theme_font_h2-font-size: 36px;
            --e-global-typography-theme_font_h3-font-size: 28px;
            --e-global-typography-theme_font_h4-font-size: 22px;
            --e-global-typography-theme_font_h5-font-size: 20px;
            --e-global-typography-theme_font_h6-font-size: 18px;
            --e-global-typography-theme_font_logo-font-size: 28px;
        }

        .elementor-section.elementor-section-boxed>.elementor-container {
            max-width: 1024px;
        }

        .e-con {
            --container-max-width: 1024px;
        }
    }

    @media(max-width:767px) {
        .elementor-kit-5 {
            --e-global-typography-theme_font_p-font-size: 15px;
            --e-global-typography-theme_font_h1-font-size: 36px;
            --e-global-typography-theme_font_h2-font-size: 31px;
            --e-global-typography-theme_font_h3-font-size: 26px;
            --e-global-typography-theme_font_h5-font-size: 19px;
            --e-global-typography-theme_font_h6-font-size: 17px;
            --e-global-typography-theme_font_logo-font-size: 22px;
            --e-global-typography-theme_font_button-font-size: 15px;
        }

        .elementor-section.elementor-section-boxed>.elementor-container {
            max-width: 767px;
        }

        .e-con {
            --container-max-width: 767px;
        }
    }
    </style>
    <style id="elementor-post-266">
    .elementor-266 .elementor-element.elementor-element-41844fc {
        --display: flex;
        --flex-direction: row;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --container-widget-height: 100%;
        --container-widget-flex-grow: 1;
        --container-widget-align-self: stretch;
        --flex-wrap-mobile: wrap;
        --justify-content: space-between;
        --align-items: center;
        --gap: 10px 10px;
        --row-gap: 10px;
        --column-gap: 10px;
        --padding-top: 30px;
        --padding-bottom: 30px;
        --padding-left: 70px;
        --padding-right: 70px;
    }

    .elementor-266 .elementor-element.elementor-element-41844fc .trx_addons_bg_text {
        z-index: 0;
    }

    .elementor-266 .elementor-element.elementor-element-41844fc .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
        padding-right: 50px;
    }

    .elementor-266 .elementor-element.elementor-element-41844fc .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
        padding-left: 50px;
    }

    .elementor-266 .elementor-element.elementor-element-0b98db8 {
        --display: flex;
    }

    .elementor-266 .elementor-element.elementor-element-0b98db8 .trx_addons_bg_text {
        z-index: 0;
    }

    .elementor-266 .elementor-element.elementor-element-0b98db8 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
        padding-right: 50px;
    }

    .elementor-266 .elementor-element.elementor-element-0b98db8 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
        padding-left: 50px;
    }

    .elementor-266 .elementor-element.elementor-element-41ad121 .logo_image {
        max-height: 35px;
    }

    .elementor-266 .elementor-element.elementor-element-4897d60 {
        --display: flex;
        --flex-direction: row;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --container-widget-height: 100%;
        --container-widget-flex-grow: 1;
        --container-widget-align-self: stretch;
        --flex-wrap-mobile: wrap;
        --justify-content: flex-end;
        --align-items: center;
        --gap: 15px 0px;
        --row-gap: 15px;
        --column-gap: 0px;
        --flex-wrap: wrap;
    }

    .elementor-266 .elementor-element.elementor-element-4897d60 .trx_addons_bg_text {
        z-index: 0;
    }

    .elementor-266 .elementor-element.elementor-element-4897d60 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
        padding-right: 50px;
    }

    .elementor-266 .elementor-element.elementor-element-4897d60 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
        padding-left: 50px;
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c.trx-addons-hamburger-menu .trx-addons-main-mobile-menu>.trx-addons-nav-menu-item>.trx-addons-menu-link,
    .elementor-266 .elementor-element.elementor-element-6d3704c.trx-addons-nav-dropdown .trx-addons-main-mobile-menu>.trx-addons-nav-menu-item>.trx-addons-menu-link,
    .elementor-266 .elementor-element.elementor-element-6d3704c.trx-addons-nav-slide .trx-addons-main-mobile-menu>.trx-addons-nav-menu-item>.trx-addons-menu-link {
        justify-content: flex-start;
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c.trx-addons-hamburger-menu .trx-addons-main-mobile-menu .trx-addons-submenu .trx-addons-submenu-link,
    .elementor-266 .elementor-element.elementor-element-6d3704c.trx-addons-nav-dropdown .trx-addons-main-mobile-menu .trx-addons-submenu .trx-addons-submenu-link,
    .elementor-266 .elementor-element.elementor-element-6d3704c.trx-addons-nav-slide .trx-addons-main-mobile-menu .trx-addons-submenu .trx-addons-submenu-link {
        justify-content: flex-start;
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-nav-menu-container .trx-addons-submenu,
    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-mobile-menu-container .trx-addons-submenu {
        background-color: var(--e-global-color-theme_color_alt_bg_color);
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu {
        justify-content: center;
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-submenu .trx-addons-submenu-link {
        justify-content: flex-start;
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-hamburger-toggle {
        justify-content: center;
        align-self: center;
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c.trx-addons-ver-hamburger-menu .trx-addons-mobile-menu-outer-container {
        justify-content: flex-start;
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c.trx-addons-ver-hamburger-menu .trx-addons-mobile-menu-outer-container .trx-addons-mobile-menu-container {
        margin: 50px 0px 0px 0px;
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c.trx-addons-nav-hor>.elementor-widget-container>.trx-addons-nav-widget-container>.trx-addons-ver-inner-container>.trx-addons-nav-menu-container {
        height: 40px;
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu>.trx-addons-nav-menu-item>.trx-addons-menu-link .trx-addons-dropdown-icon {
        font-size: 11px;
        margin: -1px 0px 0px 6px;
        color: var(--e-global-color-theme_color_title);
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu>.trx-addons-nav-menu-item>.trx-addons-menu-link {
        color: var(--e-global-color-theme_color_title);
        padding: 0px 15px 0px 15px;
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu>.trx-addons-nav-menu-item>.trx-addons-menu-link .trx-addons-dropdown-icon svg path {
        fill: var(--e-global-color-theme_color_title);
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu>.trx-addons-nav-menu-item:hover>.trx-addons-menu-link {
        color: var(--e-global-color-theme_color_text);
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu>.trx-addons-nav-menu-item:hover>.trx-addons-menu-link .trx-addons-dropdown-icon {
        color: var(--e-global-color-theme_color_text);
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu>.trx-addons-nav-menu-item:hover>.trx-addons-menu-link .trx-addons-dropdown-icon svg path {
        fill: var(--e-global-color-theme_color_text);
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu>.trx-addons-active-item>.trx-addons-menu-link,
    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu>.current-menu-ancestor>.trx-addons-menu-link,
    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu>.current-menu-item>.trx-addons-menu-link {
        color: var(--e-global-color-theme_color_text);
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu>.trx-addons-active-item>.trx-addons-menu-link .trx-addons-dropdown-icon,
    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu>.current-menu-ancestor>.trx-addons-menu-link .trx-addons-dropdown-icon,
    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu>.current-menu-item>.trx-addons-menu-link .trx-addons-dropdown-icon {
        color: var(--e-global-color-theme_color_text);
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu>.trx-addons-active-item>.trx-addons-menu-link .trx-addons-dropdown-icon svg path,
    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu>.current-menu-ancestor>.trx-addons-menu-link .trx-addons-dropdown-icon svg path,
    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu>.current-menu-item>.trx-addons-menu-link .trx-addons-dropdown-icon svg path {
        fill: var(--e-global-color-theme_color_text);
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-nav-menu-item>.trx-addons-menu-link>.trx-addons-item-icon {
        order: 0;
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-mobile-menu-container .trx-addons-submenu,
    .elementor-266 .elementor-element.elementor-element-6d3704c.trx-addons-nav-ver .trx-addons-nav-menu-item.menu-item-has-children .trx-addons-submenu,
    .elementor-266 .elementor-element.elementor-element-6d3704c.trx-addons-nav-hor .trx-addons-nav-menu-item.menu-item-has-children .trx-addons-submenu {
        min-width: 210px;
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-nav-menu-container .trx-addons-submenu,
    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-mobile-menu-container .trx-addons-submenu {
        padding: 13px 0px 13px 0px;
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-nav-menu-container>.trx-addons-nav-menu>.trx-addons-nav-menu-item>.trx-addons-submenu,
    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-mobile-menu-container>.trx-addons-nav-menu>.trx-addons-nav-menu-item>.trx-addons-submenu {
        margin: 13px 0px 0px -5px;
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-nav-menu-container .trx-addons-submenu .trx-addons-nav-menu-item>.trx-addons-submenu,
    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-mobile-menu-container .trx-addons-submenu .trx-addons-nav-menu-item>.trx-addons-submenu {
        margin: -13px 0px 0px 5px;
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu .trx-addons-submenu .trx-addons-submenu-link .trx-addons-dropdown-icon {
        font-size: 8px;
        margin: 1px 10px -1px 0px;
        color: var(--e-global-color-theme_color_alt_title);
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu .trx-addons-submenu .trx-addons-submenu-link {
        color: var(--e-global-color-theme_color_alt_title);
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu .trx-addons-submenu .trx-addons-submenu-link .trx-addons-dropdown-icon svg path {
        fill: var(--e-global-color-theme_color_alt_title);
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu .trx-addons-submenu .trx-addons-submenu-item>.trx-addons-submenu-link {
        padding: 8px 25px 8px 20px;
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu .trx-addons-submenu-item:hover>.trx-addons-submenu-link {
        color: var(--e-global-color-theme_color_alt_text);
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu .trx-addons-submenu-item:hover>.trx-addons-submenu-link .trx-addons-dropdown-icon {
        color: var(--e-global-color-theme_color_alt_title);
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu .trx-addons-submenu-item:hover>.trx-addons-submenu-link .trx-addons-dropdown-icon svg path {
        fill: var(--e-global-color-theme_color_alt_title);
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu .trx-addons-submenu .trx-addons-active-item>.trx-addons-submenu-link,
    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu .trx-addons-submenu .current-menu-ancestor>.trx-addons-submenu-link,
    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu .trx-addons-submenu .current-menu-item>.trx-addons-submenu-link {
        color: var(--e-global-color-theme_color_alt_text);
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu .trx-addons-submenu .trx-addons-active-item>.trx-addons-submenu-link .trx-addons-dropdown-icon,
    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu .trx-addons-submenu .current-menu-ancestor>.trx-addons-submenu-link .trx-addons-dropdown-icon,
    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu .trx-addons-submenu .current-menu-item>.trx-addons-submenu-link .trx-addons-dropdown-icon {
        color: var(--e-global-color-theme_color_alt_title);
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu .trx-addons-submenu .trx-addons-active-item>.trx-addons-submenu-link .trx-addons-dropdown-icon svg path,
    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu .trx-addons-submenu .current-menu-ancestor>.trx-addons-submenu-link .trx-addons-dropdown-icon svg path,
    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-main-nav-menu .trx-addons-submenu .current-menu-item>.trx-addons-submenu-link .trx-addons-dropdown-icon svg path {
        fill: var(--e-global-color-theme_color_alt_title);
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-submenu-item .trx-addons-submenu-link .trx-addons-sub-item-icon {
        order: 0;
    }

    .elementor-266 .elementor-element.elementor-element-6d3704c .trx-addons-mobile-menu-outer-container .trx-addons-mobile-menu-close {
        padding: 0px 10px 0px 10px;
        margin: 5px 5px 5px 5px;
    }

    .elementor-266 .elementor-element.elementor-element-c3041fc {
        --grid-template-columns: repeat(0, auto);
        --icon-size: 20px;
        --grid-column-gap: 15px;
    }

    .elementor-266 .elementor-element.elementor-element-c3041fc .elementor-widget-container {
        text-align: center;
    }

    .elementor-266 .elementor-element.elementor-element-c3041fc>.elementor-widget-container {
        margin: 0px 0px 0px 28px;
    }

    .elementor-266 .elementor-element.elementor-element-c3041fc .elementor-social-icon {
        background-color: #00000000;
        --icon-padding: 0px;
    }

    .elementor-266 .elementor-element.elementor-element-c3041fc .elementor-social-icon i {
        color: var(--e-global-color-theme_color_title);
    }

    .elementor-266 .elementor-element.elementor-element-c3041fc .elementor-social-icon svg {
        fill: var(--e-global-color-theme_color_title);
    }

    .elementor-266 .elementor-element.elementor-element-0d78df4 {
        --display: flex;
        --flex-direction: row;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --container-widget-height: 100%;
        --container-widget-flex-grow: 1;
        --container-widget-align-self: stretch;
        --flex-wrap-mobile: wrap;
        --justify-content: space-between;
        --align-items: center;
        --flex-wrap: nowrap;
        --padding-top: 30px;
        --padding-bottom: 30px;
        --padding-left: 0px;
        --padding-right: 0px;
    }

    .elementor-266 .elementor-element.elementor-element-0d78df4 .trx_addons_bg_text {
        z-index: 0;
    }

    .elementor-266 .elementor-element.elementor-element-0d78df4 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
        padding-right: 50px;
    }

    .elementor-266 .elementor-element.elementor-element-0d78df4 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
        padding-left: 50px;
    }

    .elementor-266 .elementor-element.elementor-element-6bde1d4 {
        --display: flex;
    }

    .elementor-266 .elementor-element.elementor-element-6bde1d4 .trx_addons_bg_text {
        z-index: 0;
    }

    .elementor-266 .elementor-element.elementor-element-6bde1d4 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
        padding-right: 50px;
    }

    .elementor-266 .elementor-element.elementor-element-6bde1d4 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
        padding-left: 50px;
    }

    .elementor-266 .elementor-element.elementor-element-5008ca6 .logo_image {
        max-height: 35px;
    }

    .elementor-266 .elementor-element.elementor-element-343c241 {
        --display: flex;
        --flex-direction: row;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --container-widget-height: 100%;
        --container-widget-flex-grow: 1;
        --container-widget-align-self: stretch;
        --flex-wrap-mobile: wrap;
        --justify-content: flex-end;
        --align-items: center;
        --gap: 10px 0px;
        --row-gap: 10px;
        --column-gap: 0px;
    }

    .elementor-266 .elementor-element.elementor-element-343c241 .trx_addons_bg_text {
        z-index: 0;
    }

    .elementor-266 .elementor-element.elementor-element-343c241 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
        padding-right: 50px;
    }

    .elementor-266 .elementor-element.elementor-element-343c241 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
        padding-left: 50px;
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-hamburger-menu .trx-addons-main-mobile-menu>.trx-addons-nav-menu-item>.trx-addons-menu-link,
    .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-nav-dropdown .trx-addons-main-mobile-menu>.trx-addons-nav-menu-item>.trx-addons-menu-link,
    .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-nav-slide .trx-addons-main-mobile-menu>.trx-addons-nav-menu-item>.trx-addons-menu-link {
        justify-content: flex-start;
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-hamburger-menu .trx-addons-main-mobile-menu .trx-addons-submenu .trx-addons-submenu-link,
    .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-nav-dropdown .trx-addons-main-mobile-menu .trx-addons-submenu .trx-addons-submenu-link,
    .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-nav-slide .trx-addons-main-mobile-menu .trx-addons-submenu .trx-addons-submenu-link {
        justify-content: flex-start;
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-ham-dropdown .trx-addons-mobile-menu,
    .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-nav-dropdown .trx-addons-mobile-menu,
    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-mobile-menu-outer-container,
    .elementor-266 .elementor-element.elementor-element-5dfa947:not(.trx-addons-nav-slide):not(.trx-addons-ham-slide) .trx-addons-mobile-menu {
        background-color: var(--e-global-color-theme_color_alt_bg_color_2);
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-submenu .trx-addons-submenu-link {
        justify-content: flex-start;
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-hamburger-toggle {
        justify-content: center;
        align-self: center;
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-ver-hamburger-menu .trx-addons-mobile-menu-outer-container {
        justify-content: center;
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-ham-dropdown .trx-addons-main-mobile-menu,
    .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-nav-dropdown .trx-addons-main-mobile-menu {
        width: 390px;
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-ham-slide .trx-addons-mobile-menu-outer-container,
    .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-nav-slide .trx-addons-mobile-menu-outer-container {
        width: 390px;
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-ham-slide.trx-addons-ver-hamburger-menu-left .trx-addons-mobile-menu-outer-container,
    .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-nav-slide.trx-addons-ver-hamburger-menu-left .trx-addons-mobile-menu-outer-container {
        transform: translateX(-390px);
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-ham-slide.trx-addons-ver-hamburger-menu-right .trx-addons-mobile-menu-outer-container,
    .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-nav-slide.trx-addons-ver-hamburger-menu-right .trx-addons-mobile-menu-outer-container {
        transform: translateX(390px);
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu>.trx-addons-nav-menu-item>.trx-addons-menu-link {
        font-size: 23px;
        line-height: 1.2em;
        color: var(--e-global-color-theme_color_alt_title);
        padding: 7px 0px 7px 0px;
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu>.trx-addons-nav-menu-item>.trx-addons-menu-link .trx-addons-dropdown-icon {
        font-size: 13px;
        margin: 0px 0px 0px 8px;
        color: var(--e-global-color-theme_color_alt_title);
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu>.trx-addons-nav-menu-item>.trx-addons-menu-link .trx-addons-dropdown-icon svg path {
        fill: var(--e-global-color-theme_color_alt_title);
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu>.trx-addons-nav-menu-item {
        margin: 10px 0px 10px 0px;
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu>.trx-addons-nav-menu-item:hover>.trx-addons-menu-link {
        color: var(--e-global-color-theme_color_alt_text);
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu>.trx-addons-nav-menu-item:hover>.trx-addons-menu-link .trx-addons-dropdown-icon {
        color: var(--e-global-color-theme_color_alt_text);
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu>.trx-addons-nav-menu-item:hover>.trx-addons-menu-link .trx-addons-dropdown-icon svg path {
        fill: var(--e-global-color-theme_color_alt_text);
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu>.trx-addons-active-item>.trx-addons-menu-link,
    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu>.current-menu-ancestor>.trx-addons-menu-link,
    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu>.current-menu-item>.trx-addons-menu-link {
        color: var(--e-global-color-theme_color_alt_text);
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu>.trx-addons-active-item>.trx-addons-menu-link .trx-addons-dropdown-icon,
    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu>.current-menu-ancestor>.trx-addons-menu-link .trx-addons-dropdown-icon,
    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu>.current-menu-item>.trx-addons-menu-link .trx-addons-dropdown-icon {
        color: var(--e-global-color-theme_color_alt_text);
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu>.trx-addons-active-item>.trx-addons-menu-link .trx-addons-dropdown-icon svg path,
    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu>.current-menu-ancestor>.trx-addons-menu-link .trx-addons-dropdown-icon svg path,
    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu>.current-menu-item>.trx-addons-menu-link .trx-addons-dropdown-icon svg path {
        fill: var(--e-global-color-theme_color_alt_text);
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-nav-menu-item>.trx-addons-menu-link>.trx-addons-item-icon {
        order: 0;
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-nav-menu-container .trx-addons-submenu,
    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-mobile-menu-container .trx-addons-submenu {
        padding: 10px 0px 0px 0px;
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-nav-menu-container .trx-addons-submenu .trx-addons-nav-menu-item>.trx-addons-submenu,
    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-mobile-menu-container .trx-addons-submenu .trx-addons-nav-menu-item>.trx-addons-submenu {
        margin: 0px 0px 0px 10px;
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu .trx-addons-submenu .trx-addons-submenu-link {
        font-size: 15px;
        line-height: 20px;
        color: var(--e-global-color-theme_color_alt_text);
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu .trx-addons-submenu .trx-addons-submenu-link .trx-addons-dropdown-icon {
        font-size: 8px;
        margin: 0px 0px 0px 8px;
        color: var(--e-global-color-theme_color_alt_text);
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu .trx-addons-submenu .trx-addons-submenu-link .trx-addons-dropdown-icon svg path {
        fill: var(--e-global-color-theme_color_alt_text);
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu .trx-addons-submenu .trx-addons-submenu-item>.trx-addons-submenu-link {
        padding: 5px 0px 5px 0px;
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu .trx-addons-submenu .trx-addons-submenu-item {
        margin: 3px 0px 3px 0px;
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu .trx-addons-submenu-item:hover>.trx-addons-submenu-link {
        color: var(--e-global-color-theme_color_alt_title);
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu .trx-addons-submenu-item:hover>.trx-addons-submenu-link .trx-addons-dropdown-icon {
        color: var(--e-global-color-theme_color_alt_title);
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu .trx-addons-submenu-item:hover>.trx-addons-submenu-link .trx-addons-dropdown-icon svg path {
        fill: var(--e-global-color-theme_color_alt_title);
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu .trx-addons-submenu .trx-addons-active-item>.trx-addons-submenu-link,
    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu .trx-addons-submenu .current-menu-ancestor>.trx-addons-submenu-link,
    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu .trx-addons-submenu .current-menu-item>.trx-addons-submenu-link {
        color: var(--e-global-color-theme_color_alt_title);
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu .trx-addons-submenu .trx-addons-active-item>.trx-addons-submenu-link .trx-addons-dropdown-icon,
    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu .trx-addons-submenu .current-menu-ancestor>.trx-addons-submenu-link .trx-addons-dropdown-icon,
    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu .trx-addons-submenu .current-menu-item>.trx-addons-submenu-link .trx-addons-dropdown-icon {
        color: var(--e-global-color-theme_color_alt_title);
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu .trx-addons-submenu .trx-addons-active-item>.trx-addons-submenu-link .trx-addons-dropdown-icon svg path,
    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu .trx-addons-submenu .current-menu-ancestor>.trx-addons-submenu-link .trx-addons-dropdown-icon svg path,
    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu .trx-addons-submenu .current-menu-item>.trx-addons-submenu-link .trx-addons-dropdown-icon svg path {
        fill: var(--e-global-color-theme_color_alt_title);
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-submenu-item .trx-addons-submenu-link .trx-addons-sub-item-icon {
        order: 0;
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-hamburger-toggle i {
        font-size: 24px;
        color: var(--e-global-color-theme_color_title);
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-hamburger-toggle svg {
        width: 24px;
        height: 24px;
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-hamburger-toggle svg path {
        fill: var(--e-global-color-theme_color_title);
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-hamburger-toggle:hover i {
        color: var(--e-global-color-theme_color_text);
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-hamburger-toggle:hover svg path {
        fill: var(--e-global-color-theme_color_text);
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-nav-slide-overlay {
        background: #FFFFFF00;
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-ham-dropdown .trx-addons-mobile-menu,
    .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-nav-dropdown .trx-addons-mobile-menu,
    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-mobile-menu-outer-container {
        padding: 50px 50px 50px 50px;
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-mobile-menu-outer-container .trx-addons-mobile-menu-close {
        margin: 30px 30px 0px 0px;
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-mobile-menu-outer-container .trx-addons-mobile-menu-close i {
        font-size: 24px;
        color: var(--e-global-color-theme_color_alt_title);
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-mobile-menu-outer-container .trx-addons-mobile-menu-close svg {
        width: 24px;
        height: 24px;
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-mobile-menu-outer-container .trx-addons-mobile-menu-close svg path {
        fill: var(--e-global-color-theme_color_alt_title);
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-mobile-menu-outer-container .trx-addons-mobile-menu-close:hover i {
        color: var(--e-global-color-theme_color_alt_text);
    }

    .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-mobile-menu-outer-container .trx-addons-mobile-menu-close:hover svg path {
        fill: var(--e-global-color-theme_color_alt_text);
    }

    .elementor-266 .elementor-element.elementor-element-901118f {
        --display: flex;
        --flex-direction: column;
        --container-widget-width: 100%;
        --container-widget-height: initial;
        --container-widget-flex-grow: 0;
        --container-widget-align-self: initial;
        --flex-wrap-mobile: wrap;
        --padding-top: 0px;
        --padding-bottom: 0px;
        --padding-left: 70px;
        --padding-right: 70px;
    }

    .elementor-266 .elementor-element.elementor-element-901118f .trx_addons_bg_text {
        z-index: 0;
    }

    .elementor-266 .elementor-element.elementor-element-901118f .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
        padding-right: 50px;
    }

    .elementor-266 .elementor-element.elementor-element-901118f .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
        padding-left: 50px;
    }

    .elementor-266 .elementor-element.elementor-element-074c8b9 {
        --divider-border-style: solid;
        --divider-color: var(--e-global-color-theme_color_bd_color);
        --divider-border-width: 1px;
    }

    .elementor-266 .elementor-element.elementor-element-074c8b9 .elementor-divider-separator {
        width: 100%;
    }

    .elementor-266 .elementor-element.elementor-element-074c8b9 .elementor-divider {
        padding-block-start: 0px;
        padding-block-end: 0px;
    }

    .elementor-266 .elementor-element.elementor-element-86ed3a4 {
        --display: flex;
        --padding-top: 140px;
        --padding-bottom: 0px;
        --padding-left: 0px;
        --padding-right: 0px;
    }

    .elementor-266 .elementor-element.elementor-element-86ed3a4 .trx_addons_bg_text {
        z-index: 0;
    }

    .elementor-266 .elementor-element.elementor-element-86ed3a4 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
        padding-right: 50px;
    }

    .elementor-266 .elementor-element.elementor-element-86ed3a4 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
        padding-left: 50px;
    }

    .elementor-266 .elementor-element.elementor-element-b923d84 {
        text-align: center;
    }

    .trx-addons-layout--edit-mode .trx-addons-layout__inner {
        background-color: transparent;
    }

    .trx-addons-layout--single-preview .trx-addons-layout__inner {
        background-color: transparent;
    }

    @media(max-width:1279px) {
        .elementor-266 .elementor-element.elementor-element-901118f {
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 30px;
            --padding-right: 30px;
        }

        .elementor-266 .elementor-element.elementor-element-86ed3a4 {
            --padding-top: 95px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px;
        }
    }

    @media(min-width:768px) {
        .elementor-266 .elementor-element.elementor-element-0b98db8 {
            --width: 23%;
        }

        .elementor-266 .elementor-element.elementor-element-4897d60 {
            --width: 68%;
        }

        .elementor-266 .elementor-element.elementor-element-6bde1d4 {
            --width: 60%;
        }

        .elementor-266 .elementor-element.elementor-element-343c241 {
            --width: 40%;
        }
    }

    @media(max-width:767px) {
        .elementor-266 .elementor-element.elementor-element-0d78df4 {
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --flex-wrap-mobile: wrap;
            --gap: 20px 20px;
            --row-gap: 20px;
            --column-gap: 20px;
            --padding-top: 20px;
            --padding-bottom: 20px;
            --padding-left: 0px;
            --padding-right: 0px;
        }

        .elementor-266 .elementor-element.elementor-element-6bde1d4 {
            --width: 60%;
        }

        .elementor-266 .elementor-element.elementor-element-343c241 {
            --width: 40%;
        }

        .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-ham-dropdown .trx-addons-main-mobile-menu,
        .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-nav-dropdown .trx-addons-main-mobile-menu {
            width: 100%;
        }

        .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-ham-slide .trx-addons-mobile-menu-outer-container,
        .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-nav-slide .trx-addons-mobile-menu-outer-container {
            width: 100%;
        }

        .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-ham-slide.trx-addons-ver-hamburger-menu-left .trx-addons-mobile-menu-outer-container,
        .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-nav-slide.trx-addons-ver-hamburger-menu-left .trx-addons-mobile-menu-outer-container {
            transform: translateX(-100%);
        }

        .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-ham-slide.trx-addons-ver-hamburger-menu-right .trx-addons-mobile-menu-outer-container,
        .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-nav-slide.trx-addons-ver-hamburger-menu-right .trx-addons-mobile-menu-outer-container {
            transform: translateX(100%);
        }

        .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-main-nav-menu>.trx-addons-nav-menu-item>.trx-addons-menu-link {
            padding: 5px 0px 5px 0px;
        }

        .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-ham-dropdown .trx-addons-mobile-menu,
        .elementor-266 .elementor-element.elementor-element-5dfa947.trx-addons-nav-dropdown .trx-addons-mobile-menu,
        .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-mobile-menu-outer-container {
            padding: 40px 40px 40px 40px;
        }

        .elementor-266 .elementor-element.elementor-element-5dfa947 .trx-addons-mobile-menu-outer-container .trx-addons-mobile-menu-close {
            margin: 22px 20px 0px 0px;
        }

        .elementor-266 .elementor-element.elementor-element-901118f {
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 20px;
            --padding-right: 20px;
        }

        .elementor-266 .elementor-element.elementor-element-86ed3a4 {
            --padding-top: 65px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px;
        }
    }
    </style>
    <style id="elementor-post-120">
    .elementor-120 .elementor-element.elementor-element-0889d9e {
        --display: flex;
        --flex-direction: column;
        --container-widget-width: 100%;
        --container-widget-height: initial;
        --container-widget-flex-grow: 0;
        --container-widget-align-self: initial;
        --flex-wrap-mobile: wrap;
        --gap: 40px 40px;
        --row-gap: 40px;
        --column-gap: 40px;
        border-style: solid;
        --border-style: solid;
        border-width: 0px 0px 0px 1px;
        --border-top-width: 0px;
        --border-right-width: 0px;
        --border-bottom-width: 0px;
        --border-left-width: 1px;
        border-color: var(--e-global-color-theme_color_bd_color);
        --border-color: var(--e-global-color-theme_color_bd_color);
        --padding-top: 0px;
        --padding-bottom: 0px;
        --padding-left: 40px;
        --padding-right: 0px;
    }

    .elementor-120 .elementor-element.elementor-element-0889d9e .trx_addons_bg_text {
        z-index: 0;
    }

    .elementor-120 .elementor-element.elementor-element-0889d9e .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
        padding-right: 50px;
    }

    .elementor-120 .elementor-element.elementor-element-0889d9e .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
        padding-left: 50px;
    }

    .elementor-120 .elementor-element.elementor-element-e0a0f37 {
        --display: flex;
        --gap: 0px 0px;
        --row-gap: 0px;
        --column-gap: 0px;
    }

    .elementor-120 .elementor-element.elementor-element-e0a0f37 .trx_addons_bg_text {
        z-index: 0;
    }

    .elementor-120 .elementor-element.elementor-element-e0a0f37 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
        padding-right: 50px;
    }

    .elementor-120 .elementor-element.elementor-element-e0a0f37 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
        padding-left: 50px;
    }

    .elementor-120 .elementor-element.elementor-element-7050512>.elementor-widget-container {
        margin: 0px 0px 30px 0px;
    }

    .elementor-120 .elementor-element.elementor-element-b96d602 .search_style_normal .search_field,
    .elementor-120 .elementor-element.elementor-element-b96d602 .search_style_expand.search_opened .search_field,
    .elementor-120 .elementor-element.elementor-element-b96d602 .search_style_fullscreen.search_opened .search_field {
        text-align: left;
        padding: 12px 12px 12px 42px;
    }

    .elementor-120 .elementor-element.elementor-element-b96d602 .search_style_normal .search_field,
    .elementor-120 .elementor-element.elementor-element-b96d602 .search_style_expand.search_opened .search_field,
    .elementor-120 .elementor-element.elementor-element-b96d602 .search_style_fullscreen.search_opened .search_form {
        width: 100%;
    }

    .elementor-120 .elementor-element.elementor-element-b96d602 .search_style_normal .search_submit:before,
    .elementor-120 .elementor-element.elementor-element-b96d602 .search_style_expand.search_opened .search_submit:before,
    .elementor-120 .elementor-element.elementor-element-b96d602 .search_style_fullscreen.search_opened :where(.search_form_wrap) .search_submit:before {
        color: var(--e-global-color-theme_color_meta);
    }

    .elementor-120 .elementor-element.elementor-element-b96d602 .search_style_normal .search_submit path,
    .elementor-120 .elementor-element.elementor-element-b96d602 .search_style_expand.search_opened .search_submit path,
    .elementor-120 .elementor-element.elementor-element-b96d602 .search_style_fullscreen.search_opened :where(.search_form_wrap) .search_submit path {
        fill: var(--e-global-color-theme_color_meta);
    }

    .elementor-120 .elementor-element.elementor-element-b96d602 .search_style_normal .search_field:focus+.search_submit:before,
    .elementor-120 .elementor-element.elementor-element-b96d602 .search_style_expand.search_opened .search_field:focus+.search_submit:before,
    .elementor-120 .elementor-element.elementor-element-b96d602 .search_style_fullscreen.search_opened :where(.search_form_wrap) .search_field:focus+.search_submit:before {
        color: var(--e-global-color-theme_color_title);
    }

    .elementor-120 .elementor-element.elementor-element-b96d602 .search_style_normal .search_field:focus+.search_submit path,
    .elementor-120 .elementor-element.elementor-element-b96d602 .search_style_expand.search_opened .search_field:focus+.search_submit path,
    .elementor-120 .elementor-element.elementor-element-b96d602 .search_style_fullscreen.search_opened :where(.search_form_wrap) .search_field:focus+.search_submit path {
        fill: var(--e-global-color-theme_color_title);
    }

    .elementor-120 .elementor-element.elementor-element-b96d602 .search_style_normal .search_submit,
    .elementor-120 .elementor-element.elementor-element-b96d602 .search_style_expand.search_opened .search_submit,
    .elementor-120 .elementor-element.elementor-element-b96d602 .search_style_fullscreen.search_opened :where(.search_form_wrap) .search_submit {
        margin: -2px 0px 0px 18px;
    }

    .elementor-120 .elementor-element.elementor-element-2365289 {
        --display: flex;
        --gap: 0px 0px;
        --row-gap: 0px;
        --column-gap: 0px;
    }

    .elementor-120 .elementor-element.elementor-element-2365289 .trx_addons_bg_text {
        z-index: 0;
    }

    .elementor-120 .elementor-element.elementor-element-2365289 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
        padding-right: 50px;
    }

    .elementor-120 .elementor-element.elementor-element-2365289 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
        padding-left: 50px;
    }

    .elementor-120 .elementor-element.elementor-element-7b1256d>.elementor-widget-container {
        margin: 0px 0px 30px 0px;
    }

    .elementor-120 .elementor-element.elementor-element-0dd1faf .trx-addons-list-items.trx-addons-inline-items {
        gap: 10px 10px;
    }

    .elementor-120 .elementor-element.elementor-element-0dd1faf .trx-addons-list-items:not(.trx-addons-inline-items) li:not(:last-child) {
        margin-bottom: 10px;
    }

    .elementor-120 .elementor-element.elementor-element-0dd1faf .trx-addons-list-container .trx-addons-list-items li {
        align-items: center;
    }

    .elementor-120 .elementor-element.elementor-element-0dd1faf .trx-addons-icon-wrapper {
        top: 1px;
    }

    .elementor-120 .elementor-element.elementor-element-0dd1faf .trx-addons-list-items .trx-addons-icon-list-icon {
        font-size: 4px;
        line-height: 7px;
        width: 7px;
        height: 7px;
        color: var(--e-global-color-theme_color_title);
    }

    .elementor-120 .elementor-element.elementor-element-0dd1faf .trx-addons-list-items .trx-addons-icon-list-image img {
        width: 7px;
    }

    .elementor-120 .elementor-element.elementor-element-0dd1faf .trx-addons-list-items .trx-addons-icon-list-image {
        width: 7px;
        height: 7px;
        line-height: 7px;
    }

    body:not(.rtl) .elementor-120 .elementor-element.elementor-element-0dd1faf.trx-addons-icon-left .trx-addons-list-items .trx-addons-icon-wrapper {
        margin-right: 8px;
    }

    body.rtl .elementor-120 .elementor-element.elementor-element-0dd1faf.trx-addons-icon-left .trx-addons-list-items .trx-addons-icon-wrapper {
        margin-left: 8px;
    }

    .elementor-120 .elementor-element.elementor-element-0dd1faf.trx-addons-icon-right .trx-addons-list-items .trx-addons-icon-wrapper {
        margin-left: 8px;
    }

    .elementor-120 .elementor-element.elementor-element-0dd1faf .trx-addons-list-items .trx-addons-icon-list-icon svg {
        fill: var(--e-global-color-theme_color_title);
    }

    .elementor-120 .elementor-element.elementor-element-0dd1faf .trx-addons-icon-list-text {
        color: var(--e-global-color-theme_color_meta);
        line-height: 18px;
    }

    .elementor-120 .elementor-element.elementor-element-0dd1faf .trx-addons-icon-list-item:hover .trx-addons-icon-list-text {
        color: var(--e-global-color-theme_color_title);
    }

    .elementor-120 .elementor-element.elementor-element-a242bd6 {
        --display: flex;
        --gap: 0px 0px;
        --row-gap: 0px;
        --column-gap: 0px;
    }

    .elementor-120 .elementor-element.elementor-element-a242bd6 .trx_addons_bg_text {
        z-index: 0;
    }

    .elementor-120 .elementor-element.elementor-element-a242bd6 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
        padding-right: 50px;
    }

    .elementor-120 .elementor-element.elementor-element-a242bd6 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
        padding-left: 50px;
    }

    .elementor-120 .elementor-element.elementor-element-6bf72a2>.elementor-widget-container {
        margin: 0px 0px 30px 0px;
    }

    .elementor-120 .elementor-element.elementor-element-a9f0d95 .widget_recent_posts .post_item .post_thumb {
        order: 0;
        width: 100px;
        height: auto;
        margin: 0px 22px 0px 0px;
    }

    .elementor-120 .elementor-element.elementor-element-a9f0d95 .widget_recent_posts .post_item {
        align-items: center;
    }

    .elementor-120 .elementor-element.elementor-element-a9f0d95 .widget_recent_posts .post_title {
        margin: 0px 0px 6px 0px;
    }

    .elementor-120 .elementor-element.elementor-element-a9f0d95 .widget_recent_posts .post_categories {
        font-size: 0.875rem;
        font-weight: 500;
        text-transform: uppercase;
        line-height: 1.1875rem;
        letter-spacing: 0.07rem;
        margin: 0px 0px 8px 0px;
    }

    .elementor-120 .elementor-element.elementor-element-a9f0d95 .widget_recent_posts .post_categories>a {
        color: var(--e-global-color-theme_color_title);
    }

    .elementor-120 .elementor-element.elementor-element-a9f0d95 .widget_recent_posts .post_info {
        font-size: 14px;
        line-height: 18px;
    }

    .elementor-120 .elementor-element.elementor-element-a235b87 {
        --display: flex;
    }

    .elementor-120 .elementor-element.elementor-element-a235b87 .trx_addons_bg_text {
        z-index: 0;
    }

    .elementor-120 .elementor-element.elementor-element-a235b87 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
        padding-right: 50px;
    }

    .elementor-120 .elementor-element.elementor-element-a235b87 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
        padding-left: 50px;
    }

    .elementor-120 .elementor-element.elementor-element-b2a05cc.elementor-element {
        --align-self: flex-start;
    }

    .elementor-120 .elementor-element.elementor-element-b2a05cc {
        text-align: left;
    }

    .elementor-120 .elementor-element.elementor-element-b2a05cc img {
        border-style: solid;
        border-width: 15px 15px 15px 15px;
        border-color: var(--e-global-color-theme_color_bg_color_2);
    }

    .trx-addons-layout--edit-mode .trx-addons-layout__inner {
        background-color: transparent;
    }

    .trx-addons-layout--single-preview .trx-addons-layout__inner {
        background-color: transparent;
    }

    @media(max-width:1279px) {
        .elementor-120 .elementor-element.elementor-element-0889d9e {
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --flex-wrap-mobile: wrap;
            --justify-content: space-between;
            --gap: 25px 25px;
            --row-gap: 25px;
            --column-gap: 25px;
            --flex-wrap: wrap;
            border-width: 0px 0px 0px 0px;
            --border-top-width: 0px;
            --border-right-width: 0px;
            --border-bottom-width: 0px;
            --border-left-width: 0px;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px;
        }

        .elementor-120 .elementor-element.elementor-element-7050512>.elementor-widget-container {
            margin: 0px 0px 20px 0px;
        }

        .elementor-120 .elementor-element.elementor-element-7b1256d>.elementor-widget-container {
            margin: 0px 0px 20px 0px;
        }

        .elementor-120 .elementor-element.elementor-element-6bf72a2>.elementor-widget-container {
            margin: 0px 0px 20px 0px;
        }
    }

    @media(max-width:767px) {
        .elementor-120 .elementor-element.elementor-element-7050512>.elementor-widget-container {
            margin: 0px 0px 15px 0px;
        }

        .elementor-120 .elementor-element.elementor-element-b96d602 .search_style_normal .search_submit,
        .elementor-120 .elementor-element.elementor-element-b96d602 .search_style_expand.search_opened .search_submit,
        .elementor-120 .elementor-element.elementor-element-b96d602 .search_style_fullscreen.search_opened :where(.search_form_wrap) .search_submit {
            margin: -1px 0px 0px 18px;
        }

        .elementor-120 .elementor-element.elementor-element-7b1256d>.elementor-widget-container {
            margin: 0px 0px 15px 0px;
        }

        .elementor-120 .elementor-element.elementor-element-6bf72a2>.elementor-widget-container {
            margin: 0px 0px 15px 0px;
        }
    }

    @media(max-width:1279px) and (min-width:768px) {
        .elementor-120 .elementor-element.elementor-element-e0a0f37 {
            --width: 48%;
        }

        .elementor-120 .elementor-element.elementor-element-2365289 {
            --width: 48%;
        }

        .elementor-120 .elementor-element.elementor-element-a242bd6 {
            --width: 48%;
        }
    }
    </style>
    <style id="elementor-post-21">
    .elementor-21 .elementor-element.elementor-element-7d4dd4d {
        --display: flex;
        --flex-direction: column;
        --container-widget-width: 100%;
        --container-widget-height: initial;
        --container-widget-flex-grow: 0;
        --container-widget-align-self: initial;
        --flex-wrap-mobile: wrap;
        --gap: 0px 0px;
        --row-gap: 0px;
        --column-gap: 0px;
        --overflow: hidden;
        --padding-top: 70px;
        --padding-bottom: 0px;
        --padding-left: 70px;
        --padding-right: 70px;
    }

    .elementor-21 .elementor-element.elementor-element-7d4dd4d:not(.elementor-motion-effects-element-type-background),
    .elementor-21 .elementor-element.elementor-element-7d4dd4d>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: var(--e-global-color-theme_color_alt_bg_color);
    }

    .elementor-21 .elementor-element.elementor-element-7d4dd4d .trx_addons_bg_text {
        z-index: 0;
    }

    .elementor-21 .elementor-element.elementor-element-7d4dd4d .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
        padding-right: 50px;
    }

    .elementor-21 .elementor-element.elementor-element-7d4dd4d .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
        padding-left: 50px;
    }

    .elementor-21 .elementor-element.elementor-element-9b2fbe9 {
        --display: flex;
        --flex-direction: row;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --container-widget-height: 100%;
        --container-widget-flex-grow: 1;
        --container-widget-align-self: stretch;
        --flex-wrap-mobile: wrap;
        --align-items: center;
        --padding-top: 0vw;
        --padding-bottom: 4.5vw;
        --padding-left: 0vw;
        --padding-right: 0vw;
    }

    .elementor-21 .elementor-element.elementor-element-9b2fbe9 .trx_addons_bg_text {
        z-index: 0;
    }

    .elementor-21 .elementor-element.elementor-element-9b2fbe9 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
        padding-right: 50px;
    }

    .elementor-21 .elementor-element.elementor-element-9b2fbe9 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
        padding-left: 50px;
    }

    .elementor-21 .elementor-element.elementor-element-5347036 {
        --display: flex;
    }

    .elementor-21 .elementor-element.elementor-element-5347036 .trx_addons_bg_text {
        z-index: 0;
    }

    .elementor-21 .elementor-element.elementor-element-5347036 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
        padding-right: 50px;
    }

    .elementor-21 .elementor-element.elementor-element-5347036 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
        padding-left: 50px;
    }

    .elementor-21 .elementor-element.elementor-element-f807e26 .logo_image {
        max-height: 35px;
    }

    .elementor-21 .elementor-element.elementor-element-9fff0c6 {
        --display: flex;
        --align-items: flex-end;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
    }

    .elementor-21 .elementor-element.elementor-element-9fff0c6 .trx_addons_bg_text {
        z-index: 0;
    }

    .elementor-21 .elementor-element.elementor-element-9fff0c6 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
        padding-right: 50px;
    }

    .elementor-21 .elementor-element.elementor-element-9fff0c6 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
        padding-left: 50px;
    }

    .elementor-21 .elementor-element.elementor-element-aeda8b9 {
        --grid-template-columns: repeat(0, auto);
        --icon-size: 15px;
        --grid-column-gap: 5px;
        --grid-row-gap: 5px;
    }

    .elementor-21 .elementor-element.elementor-element-aeda8b9 .elementor-social-icon {
        background-color: #FFFFFF00;
        --icon-padding: 15px;
        border-style: solid;
        border-width: 1px 1px 1px 1px;
        border-color: var(--e-global-color-theme_color_alt_bd_color);
    }

    .elementor-21 .elementor-element.elementor-element-aeda8b9 .elementor-social-icon i {
        color: #FFFEFE;
    }

    .elementor-21 .elementor-element.elementor-element-aeda8b9 .elementor-social-icon svg {
        fill: #FFFEFE;
    }

    .elementor-21 .elementor-element.elementor-element-aeda8b9 .elementor-icon {
        border-radius: 50% 50% 50% 50%;
    }

    .elementor-21 .elementor-element.elementor-element-aeda8b9 .elementor-social-icon:hover i {
        color: var(--e-global-color-theme_color_alt_text);
    }

    .elementor-21 .elementor-element.elementor-element-aeda8b9 .elementor-social-icon:hover svg {
        fill: var(--e-global-color-theme_color_alt_text);
    }

    .elementor-21 .elementor-element.elementor-element-3f99701 {
        --display: flex;
        --flex-direction: row;
        --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        --container-widget-height: 100%;
        --container-widget-flex-grow: 1;
        --container-widget-align-self: stretch;
        --flex-wrap-mobile: wrap;
        --align-items: center;
    }

    .elementor-21 .elementor-element.elementor-element-3f99701 .trx_addons_bg_text {
        z-index: 0;
    }

    .elementor-21 .elementor-element.elementor-element-3f99701 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
        padding-right: 50px;
    }

    .elementor-21 .elementor-element.elementor-element-3f99701 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
        padding-left: 50px;
    }

    .elementor-21 .elementor-element.elementor-element-afe56c7>.elementor-widget-container {
        margin: -4.5vw 0vw -8.3vw -1.6vw;
    }

    .elementor-21 .elementor-element.elementor-element-afe56c7 .elementor-heading-title {
        font-size: 27.8vw;
        letter-spacing: -0.02em;
        color: var(--e-global-color-theme_color_alt_bd_color);
    }

    .trx-addons-layout--edit-mode .trx-addons-layout__inner {
        background-color: transparent;
    }

    .trx-addons-layout--single-preview .trx-addons-layout__inner {
        background-color: transparent;
    }

    @media(min-width:768px) {
        .elementor-21 .elementor-element.elementor-element-5347036 {
            --width: 50%;
        }

        .elementor-21 .elementor-element.elementor-element-9fff0c6 {
            --width: 50%;
        }
    }

    @media(max-width:1279px) {
        .elementor-21 .elementor-element.elementor-element-7d4dd4d {
            --padding-top: 50px;
            --padding-bottom: 0px;
            --padding-left: 30px;
            --padding-right: 30px;
        }

        .elementor-21 .elementor-element.elementor-element-aeda8b9 .elementor-social-icon {
            --icon-padding: 14px;
        }
    }

    @media(max-width:767px) {
        .elementor-21 .elementor-element.elementor-element-7d4dd4d {
            --padding-top: 50px;
            --padding-bottom: 0px;
            --padding-left: 20px;
            --padding-right: 20px;
        }

        .elementor-21 .elementor-element.elementor-element-9b2fbe9 {
            --padding-top: 0px;
            --padding-bottom: 30px;
            --padding-left: 0px;
            --padding-right: 0px;
        }

        .elementor-21 .elementor-element.elementor-element-5347036 {
            --align-items: center;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        }

        .elementor-21 .elementor-element.elementor-element-9fff0c6 {
            --align-items: center;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
        }

        .elementor-21 .elementor-element.elementor-element-aeda8b9 .elementor-social-icon {
            --icon-padding: 13px;
        }

        .elementor-21 .elementor-element.elementor-element-afe56c7>.elementor-widget-container {
            margin: -3.5vw 0vw -8.6vw -1.2vw;
        }
    }
    </style>
    <link property="stylesheet" rel='stylesheet' id='widget-social-icons-css'
        href='https://itactics.themerex.net/wp-content/plugins/elementor/assets/css/widget-social-icons.min.css?ver=3.31.2'
        type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='e-apple-webkit-css'
        href='https://itactics.themerex.net/wp-content/uploads/elementor/css/custom-apple-webkit.min.css?ver=1755699134'
        type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='widget-divider-css'
        href='https://itactics.themerex.net/wp-content/plugins/elementor/assets/css/widget-divider.min.css?ver=3.31.2'
        type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='font-awesome-5-all-css'
        href='https://itactics.themerex.net/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=3.31.2'
        type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='font-awesome-4-shim-css'
        href='https://itactics.themerex.net/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.31.2'
        type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='widget-heading-css'
        href='https://itactics.themerex.net/wp-content/plugins/elementor/assets/css/widget-heading.min.css?ver=3.31.2'
        type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='widget-image-css'
        href='https://itactics.themerex.net/wp-content/plugins/elementor/assets/css/widget-image.min.css?ver=3.31.2'
        type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='trx_addons-css'
        href='https://itactics.themerex.net/wp-content/plugins/trx_addons/css/__styles.css' type='text/css'
        media='all' />
    <link property="stylesheet" rel='stylesheet' id='trx-addons-elm-icon-list-css'
        href='https://itactics.themerex.net/wp-content/plugins/trx_addons/addons/elementor-widgets/classes/Widgets/IconList/assets/IconList.css'
        type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='trx-addons-elm-nav-menu-css'
        href='https://itactics.themerex.net/wp-content/plugins/trx_addons/addons/elementor-widgets/classes/Widgets/NavMenu/assets/NavMenu.css'
        type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='trx-addons-elm-post-title-css'
        href='https://itactics.themerex.net/wp-content/plugins/trx_addons/addons/elementor-widgets/classes/Widgets/PostTitle/assets/PostTitle.css'
        type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='trx_addons-animations-css'
        href='https://itactics.themerex.net/wp-content/plugins/trx_addons/css/trx_addons.animations.css' type='text/css'
        media='all' />
    <link property="stylesheet" rel='stylesheet' id='trx_addons-elementor-widgets-css'
        href='https://itactics.themerex.net/wp-content/plugins/trx_addons/addons/elementor-widgets/assets/frontend.css'
        type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='elementor-gf-local-roboto-css'
        href='https://itactics.themerex.net/wp-content/uploads/elementor/google-fonts/css/roboto.css?ver=1747305532'
        type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='elementor-gf-local-robotoslab-css'
        href='https://itactics.themerex.net/wp-content/uploads/elementor/google-fonts/css/robotoslab.css?ver=1747305535'
        type='text/css' media='all' />
    <style type="text/css">
    .trx_demo_inline_602705309 {
        color: #ffffff !important;
        border-color: #a31f1f !important;
        background-color: #a31f1f !important;
    }

    .trx_demo_inline_795239796:hover {
        color: #ffffff !important;
        border-color: #bc3030 !important;
        background-color: #bc3030 !important;
    }

    .trx_demo_panel_button.sc_button {
        justify-content: center;
    }
    </style>
    <link property="stylesheet" rel='stylesheet' id='itactics-style-css'
        href='https://itactics.themerex.net/wp-content/themes/itactics/style.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='mediaelement-css'
        href='https://itactics.themerex.net/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css?ver=4.2.17'
        type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='wp-mediaelement-css'
        href='https://itactics.themerex.net/wp-includes/js/mediaelement/wp-mediaelement.min.css?ver=6.8.2'
        type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='itactics-skin-default-css'
        href='https://itactics.themerex.net/wp-content/themes/itactics/skins/default/css/style.css' type='text/css'
        media='all' />
    <link property="stylesheet" rel='stylesheet' id='itactics-plugins-css'
        href='https://itactics.themerex.net/wp-content/themes/itactics/skins/default/css/__plugins.css' type='text/css'
        media='all' />
    <link property="stylesheet" rel='stylesheet' id='itactics-custom-css'
        href='https://itactics.themerex.net/wp-content/themes/itactics/skins/default/css/__custom.css' type='text/css'
        media='all' />
    <link property="stylesheet" rel='stylesheet' id='trx_addons-responsive-css'
        href='https://itactics.themerex.net/wp-content/plugins/trx_addons/css/__responsive.css' type='text/css'
        media='(max-width:1439px)' />
    <link property="stylesheet" rel='stylesheet' id='itactics-responsive-css'
        href='https://itactics.themerex.net/wp-content/themes/itactics/skins/default/css/__responsive.css'
        type='text/css' media='(max-width:1679px)' />
    <script type="text/javascript" src="https://itactics.themerex.net/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"
        id="jquery-core-js"></script>
    <script type="text/javascript"
        src="https://itactics.themerex.net/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
        id="jquery-migrate-js"></script>
    <link rel="https://api.w.org/" href="https://itactics.themerex.net/wp-json/" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://itactics.themerex.net/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.8.2" />
    <meta name="generator"
        content="Elementor 3.31.2; features: e_font_icon_svg, additional_custom_breakpoints; settings: css_print_method-internal, google_font-enabled, font_display-swap">
    <style>
    .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
    .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
        background-image: none !important;
    }

    @media screen and (max-height: 1024px) {

        .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }
    }

    @media screen and (max-height: 640px) {

        .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }
    }
    </style>
    <link rel="icon" href="https://itactics.themerex.net/wp-content/uploads/2025/05/cropped-Favicon-32x32.png"
        sizes="32x32" />
    <link rel="icon" href="https://itactics.themerex.net/wp-content/uploads/2025/05/cropped-Favicon-192x192.png"
        sizes="192x192" />
    <link rel="apple-touch-icon"
        href="https://itactics.themerex.net/wp-content/uploads/2025/05/cropped-Favicon-180x180.png" />
    <meta name="msapplication-TileImage"
        content="https://itactics.themerex.net/wp-content/uploads/2025/05/cropped-Favicon-270x270.png" />
    <style type="text/css" id="trx_addons-inline-styles-inline-css">
    .trx_addons_inline_1181463769 img.logo_image {
        max-height: 35px;
    }

    .trx_addons_inline_2051335450 img.logo_image {
        max-height: 35px;
    }

    .trx_addons_inline_355774474 img.logo_image {
        max-height: 35px;
    }
    </style>
</head>

<body
    class="blog wp-custom-logo wp-embed-responsive wp-theme-itactics trx_addons_customizable_theme skin_default elementor-use-container scheme_default blog_mode_blog body_style_wide  is_stream blog_style_classic_2 blog_template sidebar_show sidebar_right sidebar_small_screen_below trx_addons_present header_type_custom header_style_header-custom-266 header_position_default menu_side_ no_layout fixed_blocks_sticky elementor-default elementor-kit-5">
    <div class="body_wrap">
        <div class="page_wrap">
            <a class="itactics_skip_link skip_to_content_link" href="#content_skip_link_anchor" tabindex="0">Skip to
                content</a>
            <a class="itactics_skip_link skip_to_sidebar_link" href="#sidebar_skip_link_anchor" tabindex="0">Skip to
                sidebar</a>
            <a class="itactics_skip_link skip_to_footer_link" href="#footer_skip_link_anchor" tabindex="0">Skip to
                footer</a>
         
            <div class="page_content_wrap">
                <div class="content_wrap">
                    <div class="content">
                        <span id="content_skip_link_anchor" class="itactics_skip_link_anchor"></span>
                        <div class="posts_container classic_wrap classic_2 columns_wrap columns_padding_bottom">
                            <div class="column-1_2">
                                <article id="post-4779" data-post-id="4779"
                                    class="post_item post_item_container post_format_standard post_layout_classic post_layout_classic_2 post-4779 post type-post status-publish format-standard has-post-thumbnail hentry category-cybersecurity tag-it-solutions tag-tech-innovation">
                                    <div class="post_featured with_thumb hover_default">
                                        <img width="410" height="230"
                                            src="https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-16-copyright-410x230.jpg"
                                            class="attachment-itactics-thumb-med size-itactics-thumb-med wp-post-image"
                                            alt="" decoding="async"
                                            srcset="https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-16-copyright-410x230.jpg 410w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-16-copyright-1290x725.jpg 1290w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-16-copyright-924x520.jpg 924w"
                                            sizes="(max-width: 767px) 100vw, 410px" />
                                        <div class="mask"></div>
                                        <a href="https://itactics.themerex.net/agile-startup-with-efficient-it-solutions/"
                                            aria-hidden="true" class="cover-link"></a>
                                    </div>
                                    <div class="post_header entry-header">
                                        <div class="post_category">
                                            <div class="post_meta"><span
                                                    class="post_meta_item post_categories cat_sep"><a
                                                        href="https://itactics.themerex.net/category/cybersecurity/"
                                                        rel="category tag">Cybersecurity</a></span></div>
                                        </div>
                                        <h3 class="post_title entry-title"><a
                                                href="https://itactics.themerex.net/agile-startup-with-efficient-it-solutions/"
                                                rel="bookmark">Agile startup with efficient IT solutions</a></h3>
                                    </div>
                                    <div class="post_meta"><span class="post_meta_item post_date"><a
                                                href="https://itactics.themerex.net/agile-startup-with-efficient-it-solutions/">May
                                                16, 2025</a></span><a
                                            href="https://itactics.themerex.net/agile-startup-with-efficient-it-solutions/#comments"
                                            class="post_meta_item post_meta_comments icon-comment-light"><span
                                                class="post_meta_number">2</span><span
                                                class="post_meta_label">Comments</span></a></div>
                                    <div class="post_content entry-content">
                                        <div class="post_content_inner">Maecenas facilisis egestas lacus, eu pulvinar
                                            nunc varius dapibus. Nunc velit nulla, vestibulum vitae volutpat sed,
                                            ultrices id nisi. Fusce id tristique ipsum. Nunc tincidunt&hellip;</div>
                                    </div>
                                </article>
                            </div>
                            <div class="column-1_2">
                                <article id="post-4778" data-post-id="4778"
                                    class="post_item post_item_container post_format_standard post_layout_classic post_layout_classic_2 post-4778 post type-post status-publish format-standard has-post-thumbnail hentry category-cybersecurity tag-cloud-services tag-it-solutions">
                                    <div class="post_featured with_thumb hover_default">
                                        <img width="410" height="230"
                                            src="https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-148-copyright-410x230.jpg"
                                            class="attachment-itactics-thumb-med size-itactics-thumb-med wp-post-image"
                                            alt="" decoding="async"
                                            srcset="https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-148-copyright-410x230.jpg 410w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-148-copyright-1290x725.jpg 1290w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-148-copyright-924x520.jpg 924w"
                                            sizes="(max-width: 767px) 100vw, 410px" />
                                        <div class="mask"></div>
                                        <a href="https://itactics.themerex.net/security-essentials-for-tech-startups/"
                                            aria-hidden="true" class="cover-link"></a>
                                    </div>
                                    <div class="post_header entry-header">
                                        <div class="post_category">
                                            <div class="post_meta"><span
                                                    class="post_meta_item post_categories cat_sep"><a
                                                        href="https://itactics.themerex.net/category/cybersecurity/"
                                                        rel="category tag">Cybersecurity</a></span></div>
                                        </div>
                                        <h3 class="post_title entry-title"><a
                                                href="https://itactics.themerex.net/security-essentials-for-tech-startups/"
                                                rel="bookmark">Security essentials for tech startups</a></h3>
                                    </div>
                                    <div class="post_meta"><span class="post_meta_item post_date"><a
                                                href="https://itactics.themerex.net/security-essentials-for-tech-startups/">May
                                                16, 2025</a></span><a
                                            href="https://itactics.themerex.net/security-essentials-for-tech-startups/#respond"
                                            class="post_meta_item post_meta_comments icon-comment-light"><span
                                                class="post_meta_number">0</span><span
                                                class="post_meta_label">Comments</span></a></div>
                                    <div class="post_content entry-content">
                                        <div class="post_content_inner">Sed facilisis, leo id sodales malesuada, magna
                                            turpis volutpat leo, ut consectetur odio lorem sed ex. Quisque tincidunt
                                            magna et lorem maximus semper. Curabitur ultrices&hellip;</div>
                                    </div>
                                </article>
                            </div>
                            <div class="column-1_2">
                                <article id="post-4777" data-post-id="4777"
                                    class="post_item post_item_container post_format_standard post_layout_classic post_layout_classic_2 post-4777 post type-post status-publish format-standard has-post-thumbnail hentry category-digital-transformation tag-cloud-services tag-software-development">
                                    <div class="post_featured with_thumb hover_default">
                                        <img width="410" height="230"
                                            src="https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-147-copyright-410x230.jpg"
                                            class="attachment-itactics-thumb-med size-itactics-thumb-med wp-post-image"
                                            alt="" decoding="async"
                                            srcset="https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-147-copyright-410x230.jpg 410w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-147-copyright-1290x725.jpg 1290w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-147-copyright-924x520.jpg 924w"
                                            sizes="(max-width: 767px) 100vw, 410px" />
                                        <div class="mask"></div>
                                        <a href="https://itactics.themerex.net/ais-role-in-shaping-digital-startup-strategies/"
                                            aria-hidden="true" class="cover-link"></a>
                                    </div>
                                    <div class="post_header entry-header">
                                        <div class="post_category">
                                            <div class="post_meta"><span
                                                    class="post_meta_item post_categories cat_sep"><a
                                                        href="https://itactics.themerex.net/category/digital-transformation/"
                                                        rel="category tag">Digital Transformation</a></span></div>
                                        </div>
                                        <h3 class="post_title entry-title"><a
                                                href="https://itactics.themerex.net/ais-role-in-shaping-digital-startup-strategies/"
                                                rel="bookmark">AI’s role in shaping digital startup strategies</a></h3>
                                    </div>
                                    <div class="post_meta"><span class="post_meta_item post_date"><a
                                                href="https://itactics.themerex.net/ais-role-in-shaping-digital-startup-strategies/">May
                                                16, 2025</a></span><a
                                            href="https://itactics.themerex.net/ais-role-in-shaping-digital-startup-strategies/#comments"
                                            class="post_meta_item post_meta_comments icon-comment-light"><span
                                                class="post_meta_number">2</span><span
                                                class="post_meta_label">Comments</span></a></div>
                                    <div class="post_content entry-content">
                                        <div class="post_content_inner">Donec id blandit felis. Aenean placerat sodales
                                            commodo. In sed odio at sapien consequat semper ac a elit. Nunc consequat ac
                                            tortor quis dignissim. Integer&hellip;</div>
                                    </div>
                                </article>
                            </div>
                            <div class="column-1_2">
                                <article id="post-4776" data-post-id="4776"
                                    class="post_item post_item_container post_format_standard post_layout_classic post_layout_classic_2 post-4776 post type-post status-publish format-standard has-post-thumbnail hentry category-cybersecurity tag-digital-startup tag-it-solutions">
                                    <div class="post_featured with_thumb hover_default">
                                        <img width="410" height="230"
                                            src="https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-156-copyright-410x230.jpg"
                                            class="attachment-itactics-thumb-med size-itactics-thumb-med wp-post-image"
                                            alt="" decoding="async"
                                            srcset="https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-156-copyright-410x231.jpg 410w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-156-copyright-300x169.jpg 300w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-156-copyright-1024x576.jpg 1024w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-156-copyright-768x432.jpg 768w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-156-copyright-1536x864.jpg 1536w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-156-copyright-370x208.jpg 370w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-156-copyright-1290x725.jpg 1290w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-156-copyright-924x520.jpg 924w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-156-copyright.jpg 1920w"
                                            sizes="(max-width: 767px) 100vw, 410px" />
                                        <div class="mask"></div>
                                        <a href="https://itactics.themerex.net/leveraging-cloud-solutions-to-enhance-startup-operations/"
                                            aria-hidden="true" class="cover-link"></a>
                                    </div>
                                    <div class="post_header entry-header">
                                        <div class="post_category">
                                            <div class="post_meta"><span
                                                    class="post_meta_item post_categories cat_sep"><a
                                                        href="https://itactics.themerex.net/category/cybersecurity/"
                                                        rel="category tag">Cybersecurity</a></span></div>
                                        </div>
                                        <h3 class="post_title entry-title"><a
                                                href="https://itactics.themerex.net/leveraging-cloud-solutions-to-enhance-startup-operations/"
                                                rel="bookmark">Leveraging cloud solutions to enhance startup
                                                operations</a></h3>
                                    </div>
                                    <div class="post_meta"><span class="post_meta_item post_date"><a
                                                href="https://itactics.themerex.net/leveraging-cloud-solutions-to-enhance-startup-operations/">May
                                                16, 2025</a></span><a
                                            href="https://itactics.themerex.net/leveraging-cloud-solutions-to-enhance-startup-operations/#respond"
                                            class="post_meta_item post_meta_comments icon-comment-light"><span
                                                class="post_meta_number">0</span><span
                                                class="post_meta_label">Comments</span></a></div>
                                    <div class="post_content entry-content">
                                        <div class="post_content_inner">Quisque metus metus, vulputate ut rutrum nec,
                                            tempus ut quam. Fusce ultricies nulla vitae odio fringilla faucibus.
                                            Phasellus id metus dui. Aliquam erat volutpat. Curabitur&hellip;</div>
                                    </div>
                                </article>
                            </div>
                            <div class="column-1_2">
                                <article id="post-4775" data-post-id="4775"
                                    class="post_item post_item_container post_format_standard post_layout_classic post_layout_classic_2 post-4775 post type-post status-publish format-standard has-post-thumbnail hentry category-startup-growth tag-software-development tag-tech-innovation">
                                    <div class="post_featured with_thumb hover_default">
                                        <img width="410" height="230"
                                            src="https://itactics.themerex.net/wp-content/uploads/2025/05/image-01-copyright-410x230.jpg"
                                            class="attachment-itactics-thumb-med size-itactics-thumb-med wp-post-image"
                                            alt="" decoding="async"
                                            srcset="https://itactics.themerex.net/wp-content/uploads/2025/05/image-01-copyright-410x231.jpg 410w, https://itactics.themerex.net/wp-content/uploads/2025/05/image-01-copyright-300x169.jpg 300w, https://itactics.themerex.net/wp-content/uploads/2025/05/image-01-copyright-1024x576.jpg 1024w, https://itactics.themerex.net/wp-content/uploads/2025/05/image-01-copyright-768x432.jpg 768w, https://itactics.themerex.net/wp-content/uploads/2025/05/image-01-copyright-1536x864.jpg 1536w, https://itactics.themerex.net/wp-content/uploads/2025/05/image-01-copyright-370x208.jpg 370w, https://itactics.themerex.net/wp-content/uploads/2025/05/image-01-copyright-1290x725.jpg 1290w, https://itactics.themerex.net/wp-content/uploads/2025/05/image-01-copyright-924x520.jpg 924w, https://itactics.themerex.net/wp-content/uploads/2025/05/image-01-copyright.jpg 1920w"
                                            sizes="(max-width: 767px) 100vw, 410px" />
                                        <div class="mask"></div>
                                        <a href="https://itactics.themerex.net/choosing-the-right-tech-stack/"
                                            aria-hidden="true" class="cover-link"></a>
                                    </div>
                                    <div class="post_header entry-header">
                                        <div class="post_category">
                                            <div class="post_meta"><span
                                                    class="post_meta_item post_categories cat_sep"><a
                                                        href="https://itactics.themerex.net/category/startup-growth/"
                                                        rel="category tag">Startup Growth</a></span></div>
                                        </div>
                                        <h3 class="post_title entry-title"><a
                                                href="https://itactics.themerex.net/choosing-the-right-tech-stack/"
                                                rel="bookmark">Choosing the right tech stack</a></h3>
                                    </div>
                                    <div class="post_meta"><span class="post_meta_item post_date"><a
                                                href="https://itactics.themerex.net/choosing-the-right-tech-stack/">May
                                                16, 2025</a></span><a
                                            href="https://itactics.themerex.net/choosing-the-right-tech-stack/#comments"
                                            class="post_meta_item post_meta_comments icon-comment-light"><span
                                                class="post_meta_number">2</span><span
                                                class="post_meta_label">Comments</span></a></div>
                                    <div class="post_content entry-content">
                                        <div class="post_content_inner">Quisque metus metus, vulputate ut rutrum nec,
                                            tempus ut quam. Fusce ultricies nulla vitae odio fringilla faucibus.
                                            Phasellus id metus dui. Aliquam erat volutpat. Curabitur&hellip;</div>
                                    </div>
                                </article>
                            </div>
                            <div class="column-1_2">
                                <article id="post-4774" data-post-id="4774"
                                    class="post_item post_item_container post_format_standard post_layout_classic post_layout_classic_2 post-4774 post type-post status-publish format-standard has-post-thumbnail hentry category-business-strategy tag-cloud-services tag-digital-startup">
                                    <div class="post_featured with_thumb hover_default">
                                        <img width="410" height="230"
                                            src="https://itactics.themerex.net/wp-content/uploads/2025/05/image-02-copyright-410x230.jpg"
                                            class="attachment-itactics-thumb-med size-itactics-thumb-med wp-post-image"
                                            alt="" decoding="async"
                                            srcset="https://itactics.themerex.net/wp-content/uploads/2025/05/image-02-copyright-410x231.jpg 410w, https://itactics.themerex.net/wp-content/uploads/2025/05/image-02-copyright-300x169.jpg 300w, https://itactics.themerex.net/wp-content/uploads/2025/05/image-02-copyright-1024x576.jpg 1024w, https://itactics.themerex.net/wp-content/uploads/2025/05/image-02-copyright-768x432.jpg 768w, https://itactics.themerex.net/wp-content/uploads/2025/05/image-02-copyright-1536x864.jpg 1536w, https://itactics.themerex.net/wp-content/uploads/2025/05/image-02-copyright-370x208.jpg 370w, https://itactics.themerex.net/wp-content/uploads/2025/05/image-02-copyright-1290x725.jpg 1290w, https://itactics.themerex.net/wp-content/uploads/2025/05/image-02-copyright-924x520.jpg 924w, https://itactics.themerex.net/wp-content/uploads/2025/05/image-02-copyright.jpg 1920w"
                                            sizes="(max-width: 767px) 100vw, 410px" />
                                        <div class="mask"></div>
                                        <a href="https://itactics.themerex.net/overcoming-startup-challenges-with-digital-strategies/"
                                            aria-hidden="true" class="cover-link"></a>
                                    </div>
                                    <div class="post_header entry-header">
                                        <div class="post_category">
                                            <div class="post_meta"><span
                                                    class="post_meta_item post_categories cat_sep"><a
                                                        href="https://itactics.themerex.net/category/business-strategy/"
                                                        rel="category tag">Business Strategy</a></span></div>
                                        </div>
                                        <h3 class="post_title entry-title"><a
                                                href="https://itactics.themerex.net/overcoming-startup-challenges-with-digital-strategies/"
                                                rel="bookmark">Overcoming startup challenges with digital strategies</a>
                                        </h3>
                                    </div>
                                    <div class="post_meta"><span class="post_meta_item post_date"><a
                                                href="https://itactics.themerex.net/overcoming-startup-challenges-with-digital-strategies/">May
                                                16, 2025</a></span><a
                                            href="https://itactics.themerex.net/overcoming-startup-challenges-with-digital-strategies/#respond"
                                            class="post_meta_item post_meta_comments icon-comment-light"><span
                                                class="post_meta_number">0</span><span
                                                class="post_meta_label">Comments</span></a></div>
                                    <div class="post_content entry-content">
                                        <div class="post_content_inner">Sed ut mauris turpis. Etiam tortor sapien,
                                            vestibulum nec nulla et, malesuada commodo sem. Ut suscipit maximus quam,
                                            vel volutpat nibh ultricies eget. Nunc quis&hellip;</div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <nav class="navigation pagination" aria-label="Posts pagination">
                            <h2 class="screen-reader-text">Posts pagination</h2>
                            <div class="nav-links"><span aria-current="page" class="page-numbers current"><span
                                        class="meta-nav screen-reader-text">Page </span>1</span><a class="page-numbers"
                                    href="https://itactics.themerex.net/blog-grid/page/2/"><span
                                        class="meta-nav screen-reader-text">Page </span>2</a><a class="page-numbers"
                                    href="https://itactics.themerex.net/blog-grid/page/3/"><span
                                        class="meta-nav screen-reader-text">Page </span>3</a><a class="page-numbers"
                                    href="https://itactics.themerex.net/blog-grid/page/4/"><span
                                        class="meta-nav screen-reader-text">Page </span>4</a><a
                                    class="next page-numbers"
                                    href="https://itactics.themerex.net/blog-grid/page/2/">&gt;</a></div>
                        </nav>
                    </div>
                    <div class="sidebar widget_area
                     right sidebar_below sidebar_custom		" role="complementary">
                        <span id="sidebar_skip_link_anchor" class="itactics_skip_link_anchor"></span>
                        <div class="sidebar_inner">
                            <div data-elementor-type="cpt_layouts" data-elementor-id="120"
                                class="elementor elementor-120">
                                <div class="elementor-element elementor-element-0889d9e e-con-full e-flex sc_layouts_column_icons_position_left e-con e-parent"
                                    data-id="0889d9e" data-element_type="container">
                                    <div class="elementor-element elementor-element-e0a0f37 e-con-full e-flex sc_layouts_column_icons_position_left e-con e-child"
                                        data-id="e0a0f37" data-element_type="container">
                                        <div class="sc_layouts_item elementor-element elementor-element-7050512 sc_fly_static elementor-widget elementor-widget-heading"
                                            data-id="7050512" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h6 class="elementor-heading-title elementor-size-default">Search</h6>
                                            </div>
                                        </div>
                                        <div class="sc_layouts_item elementor-element elementor-element-b96d602 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_search"
                                            data-id="b96d602" data-element_type="widget"
                                            data-widget_type="trx_sc_layouts_search.default">
                                            <div class="elementor-widget-container">
                                                <div class="sc_layouts_search">
                                                    <div
                                                        class="search_wrap search_style_normal layouts_search trx_addons_customizable search_icon_valign_center">
                                                        <div class="search_form_wrap">
                                                            <form role="search" method="get" class="search_form"
                                                                action="https://itactics.themerex.net/">
                                                                <input type="hidden" value="" name="post_types">
                                                                <label for="4532956"
                                                                    class="search_field_label screen-reader-text">Search</label>
                                                                <input id="4532956" type="text" class="search_field"
                                                                    placeholder="Search" value="" name="s">
                                                                <button type="submit" class="search_submit"
                                                                    aria-label="Start search">
                                                                    <span class="search_submit_icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 16.3 16.77">
                                                                            <path
                                                                                d="M7.37,14.73C3.3,14.73,0,11.43,0,7.37S3.3,0,7.37,0s7.37,3.3,7.37,7.37-3.3,7.37-7.37,7.37ZM7.37,1.3C4.02,1.3,1.3,4.02,1.3,7.37s2.72,6.07,6.07,6.07,6.06-2.72,6.06-6.07S10.71,1.3,7.37,1.3Z">
                                                                            </path>
                                                                            <path
                                                                                d="M15.65,16.77c-.17,0-.33-.06-.46-.19l-2.36-2.36c-.25-.25-.25-.67,0-.92s.67-.25,.92,0l2.36,2.36c.25,.25,.25,.67,0,.92-.13,.13-.29,.19-.46,.19Z">
                                                                            </path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-2365289 e-con-full e-flex sc_layouts_column_icons_position_left e-con e-child"
                                        data-id="2365289" data-element_type="container">
                                        <div class="sc_layouts_item elementor-element elementor-element-7b1256d sc_fly_static elementor-widget elementor-widget-heading"
                                            data-id="7b1256d" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h6 class="elementor-heading-title elementor-size-default">Categories
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="sc_layouts_item elementor-element elementor-element-0dd1faf trx-addons-icon-list-traditional elementor-list-item-link-inline trx-addons-icon-left sc_fly_static elementor-widget elementor-widget-trx_elm_icon_list"
                                            data-id="0dd1faf" data-element_type="widget"
                                            data-widget_type="trx_elm_icon_list.default">
                                            <div class="elementor-widget-container">
                                                <div class="trx-addons-list-container">
                                                    <ul class="trx-addons-list-items">
                                                        <li
                                                            class="trx-addons-icon-list-item elementor-repeater-item-c4c6936">
                                                            <a
                                                                href="https://itactics.themerex.net/category/business-strategy/">
                                                                <span class="trx-addons-icon-wrapper">
                                                                    <span
                                                                        class="trx-addons-icon-list-icon trx-addons-icon ">
                                                                        <svg aria-hidden="true"
                                                                            class="e-font-icon-svg e-fas-circle"
                                                                            viewBox="0 0 512 512"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                                                            </path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="trx-addons-icon-list-text">
                                                                    Business Strategy </span>
                                                            </a>
                                                        </li>
                                                        <li
                                                            class="trx-addons-icon-list-item elementor-repeater-item-929a154">
                                                            <a
                                                                href="https://itactics.themerex.net/category/cybersecurity/">
                                                                <span class="trx-addons-icon-wrapper">
                                                                    <span
                                                                        class="trx-addons-icon-list-icon trx-addons-icon ">
                                                                        <svg aria-hidden="true"
                                                                            class="e-font-icon-svg e-fas-circle"
                                                                            viewBox="0 0 512 512"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                                                            </path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="trx-addons-icon-list-text">
                                                                    Cybersecurity </span>
                                                            </a>
                                                        </li>
                                                        <li
                                                            class="trx-addons-icon-list-item elementor-repeater-item-4573a35">
                                                            <a
                                                                href="https://itactics.themerex.net/category/digital-transformation/">
                                                                <span class="trx-addons-icon-wrapper">
                                                                    <span
                                                                        class="trx-addons-icon-list-icon trx-addons-icon ">
                                                                        <svg aria-hidden="true"
                                                                            class="e-font-icon-svg e-fas-circle"
                                                                            viewBox="0 0 512 512"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                                                            </path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="trx-addons-icon-list-text">
                                                                    Digital Transformation </span>
                                                            </a>
                                                        </li>
                                                        <li
                                                            class="trx-addons-icon-list-item elementor-repeater-item-6eb1ea9">
                                                            <a
                                                                href="https://itactics.themerex.net/category/startup-growth/">
                                                                <span class="trx-addons-icon-wrapper">
                                                                    <span
                                                                        class="trx-addons-icon-list-icon trx-addons-icon ">
                                                                        <svg aria-hidden="true"
                                                                            class="e-font-icon-svg e-fas-circle"
                                                                            viewBox="0 0 512 512"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                                                            </path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="trx-addons-icon-list-text">
                                                                    Startup Growth </span>
                                                            </a>
                                                        </li>
                                                        <li
                                                            class="trx-addons-icon-list-item elementor-repeater-item-b1a74e9">
                                                            <a
                                                                href="https://itactics.themerex.net/category/tech-trends/">
                                                                <span class="trx-addons-icon-wrapper">
                                                                    <span
                                                                        class="trx-addons-icon-list-icon trx-addons-icon ">
                                                                        <svg aria-hidden="true"
                                                                            class="e-font-icon-svg e-fas-circle"
                                                                            viewBox="0 0 512 512"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                                                            </path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="trx-addons-icon-list-text">
                                                                    Tech Trends </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-a242bd6 e-con-full e-flex sc_layouts_column_icons_position_left e-con e-child"
                                        data-id="a242bd6" data-element_type="container">
                                        <div class="sc_layouts_item elementor-element elementor-element-6bf72a2 sc_fly_static elementor-widget elementor-widget-heading"
                                            data-id="6bf72a2" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h6 class="elementor-heading-title elementor-size-default">Recent Posts
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="sc_layouts_item elementor-element elementor-element-a9f0d95 sc_fly_static elementor-widget elementor-widget-trx_widget_recent_posts"
                                            data-id="a9f0d95" data-element_type="widget"
                                            data-widget_type="trx_widget_recent_posts.default">
                                            <div class="elementor-widget-container">
                                                <div class="widget_area sc_widget_recent_posts">
                                                    <aside class="widget widget_recent_posts">
                                                        <article class="post_item trx_addons_customizable with_thumb">
                                                            <div class="post_thumb"><a
                                                                    href="https://itactics.themerex.net/agile-startup-with-efficient-it-solutions/"><img
                                                                        width="150" height="150"
                                                                        src="https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-16-copyright-150x150.jpg"
                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                        alt="Agile startup with efficient IT solutions"
                                                                        decoding="async"
                                                                        srcset="https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-16-copyright-150x150.jpg 150w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-16-copyright-300x300.jpg 300w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-16-copyright-1024x1024.jpg 1024w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-16-copyright-768x768.jpg 768w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-16-copyright-1536x1536.jpg 1536w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-16-copyright-370x370.jpg 370w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-16-copyright-90x90.jpg 90w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-16-copyright-924x924.jpg 924w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-16-copyright-410x410.jpg 410w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-16-copyright.jpg 1920w"
                                                                        sizes="(max-width: 150px) 100vw, 150px" /></a>
                                                            </div>
                                                            <div class="post_content">
                                                                <div class="post_categories"><a
                                                                        href="https://itactics.themerex.net/category/cybersecurity/"
                                                                        title="View all posts in Cybersecurity">Cybersecurity</a>
                                                                </div>
                                                                <h6 class="post_title"><a
                                                                        href="https://itactics.themerex.net/agile-startup-with-efficient-it-solutions/">Agile
                                                                        startup with efficient IT solutions</a></h6>
                                                                <div class="post_info"><span
                                                                        class="post_info_item post_info_posted"><a
                                                                            href="https://itactics.themerex.net/agile-startup-with-efficient-it-solutions/"
                                                                            class="post_info_date">May 16,
                                                                            2025</a></span></div>
                                                            </div>
                                                        </article>
                                                        <article class="post_item trx_addons_customizable with_thumb">
                                                            <div class="post_thumb"><a
                                                                    href="https://itactics.themerex.net/security-essentials-for-tech-startups/"><img
                                                                        width="150" height="150"
                                                                        src="https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-148-copyright-150x150.jpg"
                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                        alt="Security essentials for tech startups"
                                                                        decoding="async"
                                                                        srcset="https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-148-copyright-150x150.jpg 150w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-148-copyright-300x300.jpg 300w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-148-copyright-1024x1024.jpg 1024w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-148-copyright-768x768.jpg 768w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-148-copyright-1536x1536.jpg 1536w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-148-copyright-370x370.jpg 370w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-148-copyright-90x90.jpg 90w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-148-copyright-924x924.jpg 924w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-148-copyright-410x410.jpg 410w, https://itactics.themerex.net/wp-content/uploads/2025/05/custom-img-148-copyright.jpg 1920w"
                                                                        sizes="(max-width: 150px) 100vw, 150px" /></a>
                                                            </div>
                                                            <div class="post_content">
                                                                <div class="post_categories"><a
                                                                        href="https://itactics.themerex.net/category/cybersecurity/"
                                                                        title="View all posts in Cybersecurity">Cybersecurity</a>
                                                                </div>
                                                                <h6 class="post_title"><a
                                                                        href="https://itactics.themerex.net/security-essentials-for-tech-startups/">Security
                                                                        essentials for tech startups</a></h6>
                                                                <div class="post_info"><span
                                                                        class="post_info_item post_info_posted"><a
                                                                            href="https://itactics.themerex.net/security-essentials-for-tech-startups/"
                                                                            class="post_info_date">May 16,
                                                                            2025</a></span></div>
                                                            </div>
                                                        </article>
                                                    </aside>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-a235b87 e-con-full e-flex sc_layouts_column_icons_position_left e-con e-child"
                                        data-id="a235b87" data-element_type="container">
                                        <div class="sc_layouts_item elementor-element elementor-element-b2a05cc sc_fly_static elementor-widget elementor-widget-image"
                                            data-id="b2a05cc" data-element_type="widget"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <a href="#">
                                                    <img width="300" height="250"
                                                        src="https://itactics.themerex.net/wp-content/uploads/2024/09/banner—copyright.jpg"
                                                        class="attachment-full size-full wp-image-6636" alt="" /> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <span id="footer_skip_link_anchor" class="itactics_skip_link_anchor"></span>
            <!-- footer  -->
            <?php include 'includes/footer.php'?>
    