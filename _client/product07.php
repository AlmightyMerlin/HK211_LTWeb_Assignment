<?php
require_once 'php/init.php';

$product = findProductById('SP007');
?>

<?php
if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = '₫') {
        if (!empty($number)) {
            return number_format($number, 0, ',', '.') . "{$suffix}";
        }
    }
}
?>

<!doctype html>
<html data-n-head-ssr lang="vi" data-n-head="%7B%22lang%22:%7B%22ssr%22:%22vi%22%7D%7D">

<head>
    <title>Dell Inspiron 15 3505</title>
    <meta data-n-head="ssr" charset="utf-8">
    <meta data-n-head="ssr" name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta data-n-head="ssr" data-hid="lang" name="lang" content="vi">

    <meta data-n-head="ssr" data-hid="theme-color" name="theme-color" content="#06C1D4">

    <meta data-n-head="ssr" data-hid="description" name="description" content="Dell Inspiron 15 3505">
    <meta data-n-head="ssr" data-hid="keywords" name="keywords" content="">
    <meta data-n-head="ssr" data-hid="og:type" name="og:type" content="website">

    <meta data-n-head="ssr" data-hid="og:title" name="og:title" content="Dell Inspiron 15 3505">
    <meta data-n-head="ssr" data-hid="og:description" name="og:description" content="Dell Inspiron 15 3505">



    <meta data-n-head="ssr" name="appleid-signin-scope" content="name email">

    <meta data-n-head="ssr" name="appleid-signin-use-popup" content="true">


    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <script data-n-head="ssr" data-hid="gtm-script">
        if (!window._gtm_init) {
            window._gtm_init = 1;
            (function(w, n, d, m, e, p) {
                w[d] = (w[d] == 1 || n[d] == 'yes' || n[d] == 1 || n[m] == 1 || (w[e] && w[e][p] && w[e][p]())) ? 1 : 0
            })(window, navigator, 'doNotTrack', 'msDoNotTrack', 'external', 'msTrackingProtectionEnabled');
            (function(w, d, s, l, x, y) {
                w[x] = {};
                w._gtm_inject = function(i) {
                    if (w.doNotTrack || w[x][i])
                        return;
                    w[x][i] = 1;
                    w[l] = w[l] || [];
                    w[l].push({
                        'gtm.start': new Date().getTime(),
                        event: 'gtm.js'
                    });
                    var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s);
                    j.async = true;
                    j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i;
                    f.parentNode.insertBefore(j, f);
                };
                w[y]('GTM-THD95QT')
            })(window, document, 'script', 'dataLayer', '_gtm_ids', '_gtm_inject')
        }
    </script>


    <style data-vue-ssr-id="38dfa7e4:0 d5573df6:0 978821d4:0">
        * {
            margin: 0;
            padding: 0;
        }

        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
        }

        body {
            margin: 0;
        }

        main {
            display: block;
        }

        h1 {
            font-size: 2em;
            margin: .67em 0;
        }

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible;
        }

        pre {
            font-family: monospace, monospace;
            font-size: 1em;
        }

        a {
            background-color: transparent;
        }

        abbr[title] {
            border-bottom: none;
            text-decoration: underline;
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
        }

        b,
        strong {
            font-weight: bolder;
        }

        code,
        kbd,
        samp {
            font-family: monospace, monospace;
            font-size: 1em;
        }

        small {
            font-size: 80%;
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }

        sub {
            bottom: -.25em;
        }

        sup {
            top: -.5em;
        }

        img {
            border-style: none;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }

        button,
        input {
            overflow: visible;
        }

        button,
        select {
            text-transform: none;
        }

        fieldset {
            padding: .35em .75em .625em;
        }

        legend {
            box-sizing: border-box;
            color: inherit;
            display: table;
            max-width: 100%;
            padding: 0;
            white-space: normal;
        }

        progress {
            vertical-align: baseline;
        }

        textarea {
            overflow: auto;
        }

        [type=checkbox],
        [type=radio] {
            box-sizing: border-box;
            padding: 0;
        }

        [type=number]::-webkit-inner-spin-button,
        [type=number]::-webkit-outer-spin-button {
            height: auto;
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px;
        }

        [type=search]::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit;
        }

        details {
            display: block;
        }

        summary {
            display: list-item;
        }

        [hidden],
        template {
            display: none;
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0;
        }

        button {
            background-color: transparent;
            background-image: none;
        }

        button:focus {
            outline: 1px dotted;
            outline: 5px auto -webkit-focus-ring-color;
        }

        fieldset,
        ol,
        ul {
            margin: 0;
            padding: 0;
        }

        ol,
        ul {
            list-style: none;
        }

        html {
            font-family: "Times New Roman", Times, serif;
            line-height: 1.5;
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #f7f9fb;
        }

        hr {
            border-top-width: 1px;
        }

        img {
            border-style: solid;
        }

        table {
            border-collapse: collapse;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit;
        }

        a {
            color: inherit;
            text-decoration: inherit;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            padding: 0;
            line-height: inherit;
            color: inherit;
        }

        code,
        kbd,
        pre,
        samp {
            font-family: "Times New Roman", Times, serif;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .container {
            width: 100%;
            margin-right: auto;
            margin-left: auto;
            padding-right: 10px;
            padding-left: 10px;
        }

        @media (min-width: 640px) {
            .container {
                max-width: 640px;
            }
        }

        @media (min-width: 768px) {
            .container {
                max-width: 768px;
            }
        }

        @media (min-width: 1024px) {
            .container {
                max-width: 1024px;
            }
        }

        @media (min-width: 1280px) {
            .container {
                max-width: 1280px;
            }
        }

        @media (min-width: 1536px) {
            .container {
                max-width: 1536px;
            }
        }

        @media (min-width: 1600px) {
            .container {
                max-width: 1600px;
            }
        }

        .bg-black {
            --bg-opacity: 1;
            background-color: #000;
            background-color: rgba(0, 0, 0, var(--bg-opacity));
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity));
        }

        .bg-gray-10 {
            --bg-opacity: 1;
            background-color: #fbfbfb;
            background-color: rgba(251, 251, 251, var(--bg-opacity));
        }

        .bg-gray-50 {
            --bg-opacity: 1;
            background-color: #f3f5f8;
            background-color: rgba(243, 245, 248, var(--bg-opacity));
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #e3e7ef;
            background-color: rgba(227, 231, 239, var(--bg-opacity));
        }

        .bg-gray-200 {
            --bg-opacity: 1;
            background-color: #eff0f4;
            background-color: rgba(239, 240, 244, var(--bg-opacity));
        }

        .bg-gray-500 {
            --bg-opacity: 1;
            background-color: #5f737c;
            background-color: rgba(95, 115, 124, var(--bg-opacity));
        }

        .bg-red-400 {
            --bg-opacity: 1;
            background-color: #d53b2a;
            background-color: rgba(213, 59, 42, var(--bg-opacity));
        }

        .bg-orange-400 {
            --bg-opacity: 1;
            background-color: #ed6e33;
            background-color: rgba(237, 110, 51, var(--bg-opacity));
        }

        .bg-blue-400 {
            --bg-opacity: 1;
            background-color: #276ff2;
            background-color: rgba(39, 111, 242, var(--bg-opacity));
        }

        .bg-blue {
            --bg-opacity: 1;
            background-color: #053fff;
            background-color: rgba(5, 63, 255, var(--bg-opacity));
        }

        .bg-brand {
            --bg-opacity: 1;
            background-color: #06c1d4;
            background-color: rgba(6, 193, 212, var(--bg-opacity));
        }

        .bg-dark-blue {
            --bg-opacity: 1;
            background-color: #000529;
            background-color: rgba(0, 5, 41, var(--bg-opacity));
        }

        .bg-dark-gray {
            --bg-opacity: 1;
            background-color: #181818;
            background-color: rgba(24, 24, 24, var(--bg-opacity));
        }

        .bg-light-magenta {
            --bg-opacity: 1;
            background-color: #fe3464;
            background-color: rgba(254, 52, 100, var(--bg-opacity));
        }

        .bg-cyan-400 {
            --bg-opacity: 1;
            background-color: #27bece;
            background-color: rgba(39, 190, 206, var(--bg-opacity));
        }

        .bg-platinum-300 {
            --bg-opacity: 1;
            background-color: #a1bdca;
            background-color: rgba(161, 189, 202, var(--bg-opacity));
        }

        .bg-primitives-400 {
            --bg-opacity: 1;
            background-color: #21a453;
            background-color: rgba(33, 164, 83, var(--bg-opacity));
        }

        .bg-default {
            --bg-opacity: 1;
            background-color: #06c1d4;
            background-color: rgba(6, 193, 212, var(--bg-opacity));
        }

        .hover\:bg-gray-50:hover,
        .hover\:bg-gray-400:hover {
            --bg-opacity: 1;
            background-color: #f3f5f8;
            background-color: rgba(243, 245, 248, var(--bg-opacity));
        }

        .hover\:bg-brand:hover {
            --bg-opacity: 1;
            background-color: #06c1d4;
            background-color: rgba(6, 193, 212, var(--bg-opacity));
        }

        .bg-opacity-60 {
            --bg-opacity: 0.60;
        }

        .border-white {
            --border-opacity: 1;
            border-color: #fff;
            border-color: rgba(255, 255, 255, var(--border-opacity));
        }

        .border-gray-50 {
            --border-opacity: 1;
            border-color: #f3f5f8;
            border-color: rgba(243, 245, 248, var(--border-opacity));
        }

        .border-gray-100 {
            --border-opacity: 1;
            border-color: #e3e7ef;
            border-color: rgba(227, 231, 239, var(--border-opacity));
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #d2d7e1;
            border-color: rgba(210, 215, 225, var(--border-opacity));
        }

        .border-brand,
        .border-primary,
        .hover\:border-brand:hover {
            --border-opacity: 1;
            border-color: #06c1d4;
            border-color: rgba(6, 193, 212, var(--border-opacity));
        }



        .rounded-none {
            border-radius: 0;
        }

        .rounded-sm {
            border-radius: .125rem;
        }

        .rounded {
            border-radius: .25rem;
        }

        .rounded-md {
            border-radius: .375rem;
        }

        .rounded-lg {
            border-radius: .5rem;
        }

        .rounded-xl {
            border-radius: .75rem;
        }

        .rounded-2xl {
            border-radius: 1rem;
        }

        .rounded-3xl {
            border-radius: 1.5rem;
        }

        .rounded-full {
            border-radius: 9999px;
        }

        .border-solid {
            border-style: solid;
        }

        .border-2 {
            border-width: 2px;
        }

        .border {
            border-width: 1px;
        }

        .border-t-0 {
            border-top-width: 0;
        }

        .border-r-0 {
            border-right-width: 0;
        }

        .border-b-0 {
            border-bottom-width: 0;
        }

        .border-l-0 {
            border-left-width: 0;
        }

        .border-b-2 {
            border-bottom-width: 2px;
        }

        .border-t {
            border-top-width: 1px;
        }

        .border-b {
            border-bottom-width: 1px;
        }

        .border-l {
            border-left-width: 1px;
        }

        .last\:border-t-0:last-child {
            border-top-width: 0;
        }

        .last\:border-b-0:last-child {
            border-bottom-width: 0;
        }

        .first\:border-t-0:first-child {
            border-top-width: 0;
        }

        .cursor-pointer {
            cursor: pointer;
        }

        .cursor-move {
            cursor: move;
        }

        .block {
            display: block;
        }

        .inline-block {
            display: inline-block;
        }

        .inline {
            display: inline;
        }

        .flex {
            display: flex;
        }

        .table {
            display: table;
        }

        .grid {
            display: grid;
        }



        .flex-col {
            flex-direction: column;
        }

        .flex-wrap {
            flex-wrap: wrap;
        }

        .items-start {
            align-items: flex-start;
        }

        .items-end {
            align-items: flex-end;
        }

        .items-center {
            align-items: center;
        }

        .items-stretch {
            align-items: stretch;
        }

        .content-center {
            align-content: center;
        }

        .justify-start {
            justify-content: flex-start;
        }

        .justify-end {
            justify-content: flex-end;
        }

        .justify-center {
            justify-content: center;
        }

        .justify-between {
            justify-content: space-between;
        }

        .justify-around {
            justify-content: space-around;
        }

        .flex-1 {
            flex: 1 1 0%;
        }

        .flex-shrink-0 {
            flex-shrink: 0;
        }

        .flex-shrink {
            flex-shrink: 1;
        }

        .order-1 {
            order: 1;
        }

        .order-last {
            order: 9999;
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        .font-default {
            font-family: "Times New Roman", Times, serif;
        }

        .font-primary {
            font-family: "Times New Roman", Times, serif;

        }

        .font-thin {
            font-weight: 200;
        }

        .font-light {
            font-weight: 300;
        }

        .font-normal {
            font-weight: 400;
        }

        .font-medium {
            font-weight: 500;
        }

        .font-semibold {
            font-weight: 600;
        }

        .font-bold {
            font-weight: 700;
        }

        .font-extrabold {
            font-weight: 800;
        }

        .font-black {
            font-weight: 900;
        }

        .font-extralight {
            font-weight: 200;
        }

        .text-xs {
            font-size: .75rem;
        }

        .text-sm {
            font-size: .875rem;

        }

        .text-base {
            font-size: 1rem;
        }

        .text-lg {
            font-size: 1.125rem;
        }

        .text-xl {
            font-size: 1.25rem;
        }

        .text-2xl {
            font-size: 1.5rem;
        }

        .text-4xl {
            font-size: 2.25rem;
        }

        .text-5xl {
            font-size: 3rem;
        }

        .text-10px {
            font-size: .625rem;
        }

        .text-12px {
            font-size: .75rem;
        }

        .text-14px {
            font-size: .875rem;
        }

        .text-21px {
            font-size: 21px;
        }

        .text-22px {
            font-size: 1.375rem;
        }

        .text-24px {
            font-size: 24px;
        }

        .text-2rem {
            font-size: 2rem;
        }

        .text-40px {
            font-size: 2.5rem;
        }

        .text-200px {
            font-size: 200px;
        }

        .text-8\/3xl {
            font-size: 2rem;
        }

        .leading-4 {
            line-height: 1rem;
        }

        .leading-5 {
            line-height: 1.25rem;
        }

        .leading-6 {
            line-height: 1.5rem;
        }

        .leading-7 {
            line-height: 1.75rem;
        }

        .leading-10 {
            line-height: 2.5rem;
        }

        .leading-110 {
            line-height: 1.1;
        }

        .leading-120 {
            line-height: 1.2;
        }

        .leading-130 {
            line-height: 1.3;
        }

        .leading-140 {
            line-height: 1.4;
        }

        .leading-150 {
            line-height: 1.5;
        }

        .leading-160 {
            line-height: 1.6;
        }

        .leading-none {
            line-height: 1;
        }

        .leading-tight {
            line-height: 1.25;
        }

        .list-disc {
            list-style-type: disc;
        }

        .m-auto {
            margin: auto;
        }

        .my-0 {
            margin-top: 0;
            margin-bottom: 0;
        }

        .mx-2 {
            margin-left: .5rem;
            margin-right: .5rem;
        }

        .my-4 {
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        .mx-4 {
            margin-left: 1rem;
            margin-right: 1rem;
        }

        .mx-7 {
            margin-left: 1.75rem;
            margin-right: 1.75rem;
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .-mx-1 {
            margin-left: -.25rem;
            margin-right: -.25rem;
        }

        .-mx-2 {
            margin-left: -.5rem;
            margin-right: -.5rem;
        }

        .-mx-3 {
            margin-left: -.75rem;
            margin-right: -.75rem;
        }

        .-mx-4 {
            margin-left: -1rem;
            margin-right: -1rem;
        }



        .max-w-xs {
            max-width: 20rem;
        }

        .max-w-sm {
            max-width: 24rem;
        }

        .max-w-120px {
            max-width: 120px;
        }

        .max-w-262px {
            max-width: 262px;
        }

        .max-w-503px {
            max-width: 503px;
        }

        .max-w-656px {
            max-width: 656px;
        }

        .max-w-850px {
            max-width: 850px;
        }

        .min-h-screen {
            min-height: 100vh;
        }

        .min-h-180px {
            min-height: 180px;
        }

        .min-w-120px {
            min-width: 120px;
        }

        .min-w-262px {
            min-width: 262px;
        }

        .min-w-295px {
            min-width: 295px;
        }

        .min-w-360px {
            min-width: 360px;
        }

        .opacity-50 {
            opacity: .5;
        }

        .hover\:opacity-100:hover {
            opacity: 1;
        }

        .overflow-hidden {
            overflow: hidden;
        }

        .overflow-x-hidden {
            overflow-x: hidden;
        }

        .overflow-y-scroll {
            overflow-y: scroll;
        }

        .p-1 {
            padding: .25rem;
        }

        .p-4 {
            padding: 1rem;
            font-size: large;
        }

        .p-6 {
            padding: 1.5rem;
        }

        .px-0 {
            padding-left: 0;
            padding-right: 0;
        }

        .py-1 {
            padding-top: .25rem;
            padding-bottom: .25rem;
        }

        .px-1 {
            padding-left: .25rem;
            padding-right: .25rem;
        }

        .py-2 {
            padding-top: .5rem;
            padding-bottom: .5rem;
        }

        .px-2 {
            padding-left: .5rem;
            padding-right: .5rem;
        }

        .py-3 {
            padding-top: .75rem;
            padding-bottom: .75rem;
        }

        .px-3 {
            padding-left: .75rem;
            padding-right: .75rem;
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .py-5 {
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
        }

        .px-5 {
            padding-left: 1.25rem;
            padding-right: 1.25rem;
        }

        .py-6 {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .px-8 {
            padding-left: 2rem;
            padding-right: 2rem;
        }

        .px-10 {
            padding-left: 2.5rem;
            padding-right: 2.5rem;
        }

        .px-20 {
            padding-left: 5rem;
            padding-right: 5rem;
        }

        .px-32 {
            padding-left: 8rem;
            padding-right: 8rem;
        }

        .py-10px {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .py-6px {
            padding-top: 6px;
            padding-bottom: 6px;
        }

        .py-11px {
            padding-top: 11px;
            padding-bottom: 11px;
        }

        .py-18px {
            padding-top: 18px;
            padding-bottom: 18px;
        }

        .px-24px {
            padding-left: 24px;
            padding-right: 24px;
        }

        .px-141px {
            padding-left: 141px;
            padding-right: 141px;
        }

        .pt-0 {
            padding-top: 0;
        }

        .pb-0 {
            padding-bottom: 0;
        }

        .pt-1 {
            padding-top: .25rem;
        }

        .pt-2 {
            padding-top: .5rem;
        }

        .pr-2 {
            padding-right: .5rem;
        }

        .pl-2 {
            padding-left: .5rem;
        }

        .pt-3 {
            padding-top: .75rem;
        }

        .pr-3 {
            padding-right: .75rem;
        }

        .pb-3 {
            padding-bottom: .75rem;
        }

        .pl-3 {
            padding-left: .75rem;
        }

        .pt-4 {
            padding-top: 1rem;
        }

        .pr-4 {
            padding-right: 1rem;
        }

        .pb-4 {
            padding-bottom: 1rem;
        }

        .pt-5 {
            padding-top: 1.25rem;
        }

        .pr-5 {
            padding-right: 1.25rem;
        }

        .pb-5 {
            padding-bottom: 1.25rem;
        }

        .pl-5 {
            padding-left: 1.25rem;
        }

        .pt-6 {
            padding-top: 1.5rem;
        }

        .pr-6 {
            padding-right: 1.5rem;
        }

        .pb-6 {
            padding-bottom: 1.5rem;
        }

        .pl-6 {
            padding-left: 1.5rem;
        }

        .pl-7 {
            padding-left: 1.75rem;
        }

        .pt-8 {
            padding-top: 2rem;
        }

        .pb-8 {
            padding-bottom: 2rem;
        }

        .pb-9 {
            padding-bottom: 2.25rem;
        }

        .pt-10 {
            padding-top: 2.5rem;
        }

        .pb-10 {
            padding-bottom: 2.5rem;
        }

        .pr-12 {
            padding-right: 3rem;
            font-size: 16px;
        }

        .pt-14 {
            padding-top: 3.5rem;
        }

        .pt-15 {
            padding-top: 3.75rem;
        }

        .pb-15 {
            padding-bottom: 3.75rem;
        }

        .pt-20 {
            padding-top: 5rem;
        }

        .pb-20 {
            padding-bottom: 5rem;
        }

        .pt-32 {
            padding-top: 8rem;
        }

        .pr-10px {
            padding-right: 10px;
        }

        .pb-6px {
            padding-bottom: 6px;
        }

        .pr-11px {
            padding-right: 11px;
        }

        .pr-14px {
            padding-right: 14px;
        }

        .pb-18px {
            padding-bottom: 18px;
        }

        .pt-22px {
            padding-top: 22px;
        }

        .pb-22px {
            padding-bottom: 22px;
        }

        .last\:pb-9:last-child {
            padding-bottom: 2.25rem;
        }

        .static {
            position: static;
        }

        .fixed {
            position: fixed;
        }

        .absolute {
            position: absolute;
        }

        .relative {
            position: relative;
        }

        .sticky {
            position: -webkit-sticky;
            position: sticky;
        }

        .top-0 {
            top: 0;
        }

        .right-0 {
            right: 0;
        }

        .bottom-0 {
            bottom: 0;
        }

        .left-0 {
            left: 0;
        }

        .top-4 {
            top: 1rem;
        }

        .right-4 {
            right: 1rem;
        }

        .left-4 {
            left: 1rem;
        }

        .shadow-1 {
            box-shadow: 0 2px 8px rgba(0, 0, 0, .25);
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        }

        .hover\:shadow-4:hover {
            box-shadow: 0 4px 24px rgba(0, 0, 0, .25);
        }

        .text-left {
            text-align: left;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .text-black {
            --text-opacity: 1;
            color: #000;
            color: rgba(0, 0, 0, var(--text-opacity));
        }

        .text-white {
            --text-opacity: 1;
            color: #fff;
            color: rgba(255, 255, 255, var(--text-opacity));
        }

        .text-gray-100 {
            --text-opacity: 1;
            color: #e3e7ef;
            color: rgba(227, 231, 239, var(--text-opacity));
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #d2d7e1;
            color: rgba(210, 215, 225, var(--text-opacity));
        }

        .text-gray-400,
        .text-gray-500 {
            --text-opacity: 1;
            color: #a7acb4;
            color: rgba(167, 172, 180, var(--text-opacity));
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #414956;
            color: rgba(65, 73, 86, var(--text-opacity));
        }

        .text-gray {
            --text-opacity: 1;
            color: #4b5161;
            color: rgba(75, 81, 97, var(--text-opacity));
        }

        .text-gray-b1 {
            --text-opacity: 1;
            color: #b1b1b1;
            color: rgba(177, 177, 177, var(--text-opacity));
        }

        .text-red-400 {
            --text-opacity: 1;
            font-size: x-large;

            color: rgba(213, 59, 42, var(--text-opacity));

        }

        .text-red {
            --text-opacity: 1;
            color: #f73391;
            color: rgba(247, 51, 145, var(--text-opacity));
        }

        .text-orange-400 {
            --text-opacity: 1;
            color: #ed6e33;
            color: rgba(237, 110, 51, var(--text-opacity));
        }

        .text-yellow-400 {
            --text-opacity: 1;
            color: #ffad0b;
            color: rgba(255, 173, 11, var(--text-opacity));
        }

        .text-green-neon {
            --text-opacity: 1;
            color: #2eff75;
            color: rgba(46, 255, 117, var(--text-opacity));
        }

        .text-blue-400 {
            --text-opacity: 1;
            color: #276ff2;
            color: rgba(39, 111, 242, var(--text-opacity));
        }

        .text-blue-gray3 {
            --text-opacity: 1;
            color: #dadde0;
            color: rgba(218, 221, 224, var(--text-opacity));
        }

        .text-blue-gray5 {
            --text-opacity: 1;
            color: #f8fafc;
            color: rgba(248, 250, 252, var(--text-opacity));
        }

        .text-body-main {
            --text-opacity: 1;
            color: #161616;
            color: rgba(22, 22, 22, var(--text-opacity));
        }

        .text-primary {
            --text-opacity: 1;
            color: #27bece;
            color: rgba(39, 190, 206, var(--text-opacity));
        }

        .text-brand {
            --text-opacity: 1;
            color: #06c1d4;
            color: rgba(6, 193, 212, var(--text-opacity));
        }

        .text-dark-gray {
            --text-opacity: 1;
            color: #0e0e0e;
            color: rgba(14, 14, 14, var(--text-opacity));
        }

        .text-topbar {
            --text-opacity: 1;
            color: #c6ccff;
            color: rgba(198, 204, 255, var(--text-opacity));
        }

        .text-cyan-400 {
            --text-opacity: 1;
            color: #27bece;
            color: rgba(39, 190, 206, var(--text-opacity));
        }

        .text-platinum-300 {
            --text-opacity: 1;
            color: #a1bdca;
            color: rgba(161, 189, 202, var(--text-opacity));
        }

        .hover\:text-white:hover {
            --text-opacity: 1;
            color: #fff;
            color: rgba(255, 255, 255, var(--text-opacity));
        }

        .hover\:text-primary:hover {
            --text-opacity: 1;
            color: #27bece;
            color: rgba(39, 190, 206, var(--text-opacity));
        }

        .hover\:text-brand:hover {
            --text-opacity: 1;
            color: #06c1d4;
            color: rgba(6, 193, 212, var(--text-opacity));
        }

        .text-opacity-50 {
            --text-opacity: 0.5;
        }

        .text-opacity-60 {
            --text-opacity: 0.6;
        }

        .text-opacity-70 {
            --text-opacity: 0.7;
        }

        .uppercase {
            text-transform: uppercase;
        }

        .underline {
            text-decoration: underline;
        }

        .align-top {
            vertical-align: top;
        }

        .align-middle {
            vertical-align: middle;
        }

        .visible {
            visibility: visible;
        }

        .break-words {
            word-wrap: break-word;
        }

        .break-all {
            word-break: break-all;
        }

        .truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .w-3 {
            width: .75rem;
        }

        .w-4 {
            width: 1rem;
        }

        .w-5 {
            width: 1.25rem;
        }

        .w-6 {
            width: 1.5rem;
        }

        .w-7 {
            width: 1.75rem;
        }

        .w-8 {
            width: 2rem;
        }

        .w-10 {
            width: 2.5rem;
        }

        .w-12 {
            width: 3rem;
        }

        .w-20 {
            width: 5rem;
        }

        .w-auto {
            width: auto;
        }

        .w-1\/2 {
            width: 50%;
        }

        .w-1\/3 {
            width: 33.333333%;
        }

        .w-3\/12 {
            width: 25%;
        }

        .w-6\/12 {
            width: 50%;
        }

        .w-full {
            width: 100%;
        }

        .w-screen {
            width: 100vw;
        }

        .w-3\.5 {
            width: .875rem;
        }

        .w-30px {
            width: 30px;
        }

        .w-36px {
            width: 36px;
        }

        .w-56px {
            width: 56px;
        }

        .w-292px {
            width: 292px;
        }

        .z-10 {
            z-index: 10;
        }

        .z-11 {
            z-index: 11;
        }

        .z-20 {
            z-index: 20;
        }

        .z-30 {
            z-index: 30;
        }

        .z-50 {
            z-index: 50;
        }

        .transform {
            --transform-translate-x: 0;
            --transform-translate-y: 0;
            --transform-rotate: 0;
            --transform-skew-x: 0;
            --transform-skew-y: 0;
            --transform-scale-x: 1;
            --transform-scale-y: 1;
            transform: translateX(var(--transform-translate-x)) translateY(var(--transform-translate-y)) rotate(var(--transform-rotate)) skewX(var(--transform-skew-x)) skewY(var(--transform-skew-y)) scaleX(var(--transform-scale-x)) scaleY(var(--transform-scale-y));
        }

        .rotate-180 {
            --transform-rotate: 180deg;
        }

        .translate-y-3 {
            --transform-translate-y: 0.75rem;
        }

        .transition {
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform;
        }

        @-webkit-keyframes spin {
            to {
                transform: rotate(1turn);
            }
        }

        @keyframes spin {
            to {
                transform: rotate(1turn);
            }
        }

        @-webkit-keyframes ping {

            75%,
            to {
                transform: scale(2);
                opacity: 0;
            }
        }

        @keyframes ping {

            75%,
            to {
                transform: scale(2);
                opacity: 0;
            }
        }

        @-webkit-keyframes pulse {
            50% {
                opacity: .5;
            }
        }

        @keyframes pulse {
            50% {
                opacity: .5;
            }
        }

        @-webkit-keyframes bounce {

            0%,
            to {
                transform: translateY(-25%);
                -webkit-animation-timing-function: cubic-bezier(.8, 0, 1, 1);
                animation-timing-function: cubic-bezier(.8, 0, 1, 1);
            }

            50% {
                transform: none;
                -webkit-animation-timing-function: cubic-bezier(0, 0, .2, 1);
                animation-timing-function: cubic-bezier(0, 0, .2, 1);
            }
        }

        @keyframes bounce {

            0%,
            to {
                transform: translateY(-25%);
                -webkit-animation-timing-function: cubic-bezier(.8, 0, 1, 1);
                animation-timing-function: cubic-bezier(.8, 0, 1, 1);
            }

            50% {
                transform: none;
                -webkit-animation-timing-function: cubic-bezier(0, 0, .2, 1);
                animation-timing-function: cubic-bezier(0, 0, .2, 1);
            }
        }

        @media (min-width: 640px) {
            .sm\:container {
                width: 100%;
                margin-right: auto;
                margin-left: auto;
                padding-right: 10px;
                padding-left: 10px;
            }
        }

        @media (min-width: 640px) and (min-width:640px) {
            .sm\:container {
                max-width: 640px;
            }
        }

        @media (min-width: 640px) and (min-width:768px) {
            .sm\:container {
                max-width: 768px;
            }
        }

        @media (min-width: 640px) and (min-width:1024px) {
            .sm\:container {
                max-width: 1024px;
            }
        }

        @media (min-width: 640px) and (min-width:1280px) {
            .sm\:container {
                max-width: 1280px;
            }
        }

        @media (min-width: 640px) and (min-width:1536px) {
            .sm\:container {
                max-width: 1536px;
            }
        }

        @media (min-width: 640px) and (min-width:1600px) {
            .sm\:container {
                max-width: 1600px;
            }
        }

        @media (min-width: 768px) {
            .md\:container {
                width: 100%;
                margin-right: auto;
                margin-left: auto;
                padding-right: 10px;
                padding-left: 10px;
            }
        }

        @media (min-width: 768px) and (min-width:640px) {
            .md\:container {
                max-width: 640px;
            }
        }

        @media (min-width: 768px) and (min-width:768px) {
            .md\:container {
                max-width: 768px;
            }
        }

        @media (min-width: 768px) and (min-width:1024px) {
            .md\:container {
                max-width: 1024px;
            }
        }

        @media (min-width: 768px) and (min-width:1280px) {
            .md\:container {
                max-width: 1280px;
            }
        }

        @media (min-width: 768px) and (min-width:1536px) {
            .md\:container {
                max-width: 1536px;
            }
        }

        @media (min-width: 768px) and (min-width:1600px) {
            .md\:container {
                max-width: 1600px;
            }
        }

        @media (min-width: 768px) {
            .md\:space-y-0>:not(template)~:not(template) {
                --space-y-reverse: 0;
                margin-top: calc(0px*(1 - var(--space-y-reverse)));
                margin-bottom: calc(0px*var(--space-y-reverse));
            }

            .md\:space-x-3>:not(template)~:not(template) {
                --space-x-reverse: 0;
                margin-right: calc(0.75rem*var(--space-x-reverse));
                margin-left: calc(0.75rem*(1 - var(--space-x-reverse)));
            }

            .md\:space-y-4>:not(template)~:not(template) {
                --space-y-reverse: 0;
                margin-top: calc(1rem*(1 - var(--space-y-reverse)));
                margin-bottom: calc(1rem*var(--space-y-reverse));
            }

            .md\:space-x-4>:not(template)~:not(template) {
                --space-x-reverse: 0;
                margin-right: calc(1rem*var(--space-x-reverse));
                margin-left: calc(1rem*(1 - var(--space-x-reverse)));
            }

            .md\:space-x-5>:not(template)~:not(template) {
                --space-x-reverse: 0;
                margin-right: calc(1.25rem*var(--space-x-reverse));
                margin-left: calc(1.25rem*(1 - var(--space-x-reverse)));
            }

            .md\:space-x-8>:not(template)~:not(template) {
                --space-x-reverse: 0;
                margin-right: calc(2rem*var(--space-x-reverse));
                margin-left: calc(2rem*(1 - var(--space-x-reverse)));
            }

            .md\:space-x-10>:not(template)~:not(template) {
                --space-x-reverse: 0;
                margin-right: calc(2.5rem*var(--space-x-reverse));
                margin-left: calc(2.5rem*(1 - var(--space-x-reverse)));
            }

            .md\:space-x-12>:not(template)~:not(template) {
                --space-x-reverse: 0;
                margin-right: calc(3rem*var(--space-x-reverse));
                margin-left: calc(3rem*(1 - var(--space-x-reverse)));
            }

            .md\:bg-white {
                --bg-opacity: 1;
                background-color: #fff;
                background-color: rgba(255, 255, 255, var(--bg-opacity));
            }

            .md\:bg-gray-50 {
                --bg-opacity: 1;
                background-color: #f3f5f8;
                background-color: rgba(243, 245, 248, var(--bg-opacity));
            }

            .md\:bg-red-400 {
                --bg-opacity: 1;
                background-color: #d53b2a;
                background-color: rgba(213, 59, 42, var(--bg-opacity));
            }

            .md\:bg-yellow-400 {
                --bg-opacity: 1;
                background-color: #ffad0b;
                background-color: rgba(255, 173, 11, var(--bg-opacity));
            }

            .md\:rounded-none {
                border-radius: 0;
            }

            .md\:rounded-2xl {
                border-radius: 1rem;
            }

            .md\:rounded-3xl {
                border-radius: 1.5rem;
            }

            .md\:border {
                border-width: 1px;
            }

            .md\:border-t-0 {
                border-top-width: 0;
            }

            .md\:border-b-0 {
                border-bottom-width: 0;
            }

            .md\:border-t {
                border-top-width: 1px;
            }

            .md\:border-r {
                border-right-width: 1px;
            }

            .md\:border-b {
                border-bottom-width: 1px;
            }

            .md\:border-l {
                border-left-width: 1px;
            }

            .md\:block {
                display: block;
            }

            .md\:inline {
                display: inline;
            }

            .md\:flex {
                display: flex;
            }

            .md\:hidden {
                display: none;
            }

            .md\:flex-row {
                flex-direction: row;
            }

            .md\:flex-wrap {
                flex-wrap: wrap;
            }

            .md\:justify-center {
                justify-content: center;
            }

            .md\:justify-between {
                justify-content: space-between;
            }

            .md\:order-first {
                order: -9999;
            }

            .md\:order-none {
                order: 0;
            }

            .md\:font-normal {
                font-weight: 400;
            }

            .md\:font-semibold {
                font-weight: 600;
            }

            .md\:h-6 {
                height: 1.5rem;
            }

            .md\:h-7 {
                height: 1.75rem;
            }

            .md\:h-9 {
                height: 2.25rem;
            }

            .md\:h-12 {
                height: 3rem;
            }

            .md\:h-16 {
                height: 4rem;
            }

            .md\:h-56 {
                height: 14rem;
            }

            .md\:h-64 {
                height: 16rem;
            }

            .md\:h-16px {
                height: 16px;
            }

            .md\:h-34px {
                height: 34px;
            }

            .md\:h-63px {
                height: 63px;
            }

            .md\:h-168px {
                height: 168px;
            }

            .md\:h-191px {
                height: 191px;
            }

            .md\:text-xs {
                font-size: .75rem;
            }

            .md\:text-sm {
                font-size: .875rem;

            }

            .md\:text-base {
                font-size: 1rem;
            }

            .md\:text-lg {
                font-size: 1.125rem;
            }

            .md\:text-xl {
                font-size: 1.25rem;
            }

            .md\:text-2xl {
                font-size: 1.5rem;
            }

            .md\:text-4xl {
                font-size: 2.25rem;
            }

            .md\:text-21px {
                font-size: 21px;
            }

            .md\:text-22px {
                font-size: 1.375rem;
            }

            .md\:text-24px {
                font-size: 24px;
            }

            .md\:text-28px {
                font-size: 1.75rem;
            }

            .md\:text-2rem {
                font-size: 2rem;
            }

            .md\:text-40px {
                font-size: 2.5rem;
            }

            .md\:leading-6 {
                line-height: 1.5rem;
            }

            .md\:leading-7 {
                line-height: 1.75rem;
            }

            .md\:leading-8 {
                line-height: 2rem;
            }

            .md\:leading-10 {
                line-height: 2.5rem;
            }

            .md\:leading-120 {
                line-height: 1.2;
            }

            .md\:leading-160 {
                line-height: 1.6;
            }

            .md\:my-0 {
                margin-top: 0;
                margin-bottom: 0;
            }

            .md\:mx-0 {
                margin-left: 0;
                margin-right: 0;
            }

            .md\:my-6 {
                margin-top: 1.5rem;
                margin-bottom: 1.5rem;
            }

            .md\:-mx-2 {
                margin-left: -.5rem;
                margin-right: -.5rem;
            }

            .md\:-mx-3 {
                margin-left: -.75rem;
                margin-right: -.75rem;
            }

            .md\:mt-0 {
                margin-top: 0;
            }

            .md\:mr-0 {
                margin-right: 0;
            }

            .md\:mb-0 {
                margin-bottom: 0;
            }

            .md\:ml-0 {
                margin-left: 0;
            }

            .md\:mb-1 {
                margin-bottom: .25rem;
            }

            .md\:mr-2 {
                margin-right: .5rem;
            }

            .md\:mb-2 {
                margin-bottom: .5rem;

            }

            .md\:ml-2 {
                margin-left: .5rem;
            }

            .md\:mr-3 {
                margin-right: .75rem;
            }

            .md\:mb-3 {
                margin-bottom: .75rem;
                font-size: large;
            }

            .md\:mb-4 {
                margin-bottom: 1rem;
            }

            .md\:mt-5 {
                margin-top: 1.25rem;
            }

            .md\:mb-5 {
                margin-bottom: 1.25rem;
            }

            .md\:mt-6 {
                margin-top: 1.5rem;
            }

            .md\:mr-6 {
                margin-right: 1.5rem;
            }

            .md\:mb-6 {
                margin-bottom: 1.5rem;
            }

            .md\:mb-7 {
                margin-bottom: 1.75rem;
            }

            .md\:mb-8 {
                margin-bottom: 2rem;
            }

            .md\:mr-9 {
                margin-right: 2.25rem;
            }

            .md\:mb-9 {
                margin-bottom: 2.25rem;
            }

            .md\:mb-10 {
                margin-bottom: 2.5rem;
            }

            .md\:mb-12 {
                margin-bottom: 3rem;
            }

            .md\:mb-13 {
                margin-bottom: 3.25rem;
            }

            .md\:mb-14 {
                margin-bottom: 3.5rem;
            }

            .md\:mb-15 {
                margin-bottom: 3.75rem;
            }

            .md\:mb-20 {
                margin-bottom: 5rem;
            }

            .md\:-ml-px {
                margin-left: -1px;
            }

            .md\:mr-15px {
                margin-right: 15px;
            }

            .md\:max-w-880px {
                max-width: 880px;
            }

            .md\:min-h-360px {
                min-height: 360px;
            }

            .md\:p-0 {
                padding: 0;
            }

            .md\:p-6 {
                padding: 1.5rem;
            }

            .md\:px-0 {
                padding-left: 0;
                padding-right: 0;
            }

            .md\:px-1 {
                padding-left: .25rem;
                padding-right: .25rem;
            }

            .md\:px-2 {
                padding-left: .5rem;
                padding-right: .5rem;
            }

            .md\:py-3 {
                padding-top: .75rem;
                padding-bottom: .75rem;
            }

            .md\:px-3 {
                padding-left: .75rem;
                padding-right: .75rem;
            }

            .md\:px-4 {
                padding-left: 1rem;
                padding-right: 1rem;
            }

            .md\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }

            .md\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem;
            }

            .md\:py-9 {
                padding-top: 2.25rem;
                padding-bottom: 2.25rem;
            }

            .md\:py-10 {
                padding-top: 2.5rem;
                padding-bottom: 2.5rem;
            }

            .md\:px-10 {
                padding-left: 2.5rem;
                padding-right: 2.5rem;
            }

            .md\:px-20 {
                padding-left: 5rem;
                padding-right: 5rem;
            }

            .md\:py-10px {
                padding-top: 10px;
                padding-bottom: 10px;
            }

            .md\:px-141px {
                padding-left: 141px;
                padding-right: 141px;
            }

            .md\:pt-0 {
                padding-top: 0;
            }

            .md\:pr-0 {
                padding-right: 0;
            }

            .md\:pb-0 {
                padding-bottom: 0;
            }

            .md\:pr-2 {
                padding-right: .5rem;
            }

            .md\:pl-2 {
                padding-left: .5rem;
            }

            .md\:pt-4 {
                padding-top: 1rem;
            }

            .md\:pb-4 {
                padding-bottom: 1rem;
            }

            .md\:pl-4 {
                padding-left: 1rem;
            }

            .md\:pt-5 {
                padding-top: 1.25rem;
            }

            .md\:pr-5 {
                padding-right: 1.25rem;
            }

            .md\:pb-5 {
                padding-bottom: 1.25rem;
            }

            .md\:pt-6 {
                padding-top: 1.5rem;
            }

            .md\:pr-6 {
                padding-right: 1.5rem;
            }

            .md\:pb-6 {
                padding-bottom: 1.5rem;
            }

            .md\:pt-10 {
                padding-top: 2.5rem;
            }

            .md\:pr-10 {
                padding-right: 2.5rem;
            }

            .md\:pb-10 {
                padding-bottom: 2.5rem;
            }

            .md\:pl-10 {
                padding-left: 2.5rem;
            }

            .md\:pb-12 {
                padding-bottom: 3rem;
            }

            .md\:pb-13 {
                padding-bottom: 3.25rem;
            }

            .md\:pr-15 {
                padding-right: 3.75rem;
            }

            .md\:pb-15 {
                padding-bottom: 3.75rem;
            }

            .md\:pt-16 {
                padding-top: 4rem;
            }

            .md\:pt-20 {
                padding-top: 5rem;
            }

            .md\:pb-20 {
                padding-bottom: 5rem;
            }

            .md\:pt-45px {
                padding-top: 45px;
            }

            .md\:relative {
                position: relative;
            }

            .md\:right-5 {
                right: 1.25rem;
            }

            .md\:top-10 {
                top: 2.5rem;
            }

            .md\:shadow-none {
                box-shadow: none;
            }

            .md\:text-left {
                text-align: left;
            }

            .md\:text-center {
                text-align: center;
            }

            .md\:text-right {
                text-align: right;
            }

            .md\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity));
            }

            .md\:w-4 {
                width: 1rem;
            }

            .md\:w-7 {
                width: 1.75rem;
            }

            .md\:w-9 {
                width: 2.25rem;
            }

            .md\:w-auto {
                width: auto;
            }

            .md\:w-1\/2 {
                width: 50%;
            }

            .md\:w-1\/4 {
                width: 25%;
            }

            .md\:w-2\/12 {
                width: 16.666667%;
            }

            .md\:w-3\/12 {
                width: 25%;
            }

            .md\:w-4\/12 {
                width: 33.333333%;
            }

            .md\:w-6\/12 {
                width: 50%;
            }

            .md\:w-9\/12 {
                width: 75%;
            }

            .md\:w-full {
                width: 100%;
            }

            .md\:w-168px {
                width: 168px;
            }
        }

        @media (min-width: 1024px) {
            .lg\:container {
                width: 100%;
                margin-right: auto;
                margin-left: auto;
                padding-right: 10px;
                padding-left: 10px;
            }
        }

        @media (min-width: 1024px) and (min-width:640px) {
            .lg\:container {
                max-width: 640px;
            }
        }

        @media (min-width: 1024px) and (min-width:768px) {
            .lg\:container {
                max-width: 768px;
            }
        }

        @media (min-width: 1024px) and (min-width:1024px) {
            .lg\:container {
                max-width: 1024px;
            }
        }

        @media (min-width: 1024px) and (min-width:1280px) {
            .lg\:container {
                max-width: 1280px;
            }
        }

        @media (min-width: 1024px) and (min-width:1536px) {
            .lg\:container {
                max-width: 1536px;
            }
        }

        @media (min-width: 1024px) and (min-width:1600px) {
            .lg\:container {
                max-width: 1600px;
            }
        }

        @media (min-width: 1024px) {
            .lg\:flex {
                display: flex;
            }

            .lg\:w-1\/2 {
                width: 50%;
            }

            .lg\:w-3\/12 {
                width: 25%;
            }
        }

        @media (min-width: 1280px) {
            .xl\:container {
                width: 100%;
                margin-right: auto;
                margin-left: auto;
                padding-right: 10px;
                padding-left: 10px;
            }
        }

        @media (min-width: 1280px) and (min-width:640px) {
            .xl\:container {
                max-width: 640px;
            }
        }

        @media (min-width: 1280px) and (min-width:768px) {
            .xl\:container {
                max-width: 768px;
            }
        }

        @media (min-width: 1280px) and (min-width:1024px) {
            .xl\:container {
                max-width: 1024px;
            }
        }

        @media (min-width: 1280px) and (min-width:1280px) {
            .xl\:container {
                max-width: 1280px;
            }
        }

        @media (min-width: 1280px) and (min-width:1536px) {
            .xl\:container {
                max-width: 1536px;
            }
        }

        @media (min-width: 1280px) and (min-width:1600px) {
            .xl\:container {
                max-width: 1600px;
            }
        }

        @media (min-width: 1280px) {
            .xl\:rounded-3xl {
                border-radius: 1.5rem;
            }

            .xl\:text-lg {
                font-size: 1.125rem;
            }

            .xl\:text-28px {
                font-size: 1.75rem;
            }

            .xl\:text-7xl {
                font-size: 4.5rem;
            }

            .xl\:mb-0 {
                margin-bottom: 0;
            }

            .xl\:py-10 {
                padding-top: 2.5rem;
                padding-bottom: 2.5rem;
            }

            .xl\:px-20 {
                padding-left: 5rem;
                padding-right: 5rem;
            }

            .xl\:top-10 {
                top: 2.5rem;
            }
        }

        @media (min-width: 1536px) {
            .\32xl\:container {
                width: 100%;
                margin-right: auto;
                margin-left: auto;
                padding-right: 10px;
                padding-left: 10px;
            }
        }

        @media (min-width: 1536px) and (min-width:640px) {
            .\32xl\:container {
                max-width: 640px;
            }
        }

        @media (min-width: 1536px) and (min-width:768px) {
            .\32xl\:container {
                max-width: 768px;
            }
        }

        @media (min-width: 1536px) and (min-width:1024px) {
            .\32xl\:container {
                max-width: 1024px;
            }
        }

        @media (min-width: 1536px) and (min-width:1280px) {
            .\32xl\:container {
                max-width: 1280px;
            }
        }

        @media (min-width: 1536px) and (min-width:1536px) {
            .\32xl\:container {
                max-width: 1536px;
            }
        }

        @media (min-width: 1536px) and (min-width:1600px) {
            .\32xl\:container {
                max-width: 1600px;
            }
        }

        @media (min-width: 1600px) {
            .\33xl\:container {
                width: 100%;
                margin-right: auto;
                margin-left: auto;
                padding-right: 10px;
                padding-left: 10px;
            }
        }

        @media (min-width: 1600px) and (min-width:640px) {
            .\33xl\:container {
                max-width: 640px;
            }
        }

        @media (min-width: 1600px) and (min-width:768px) {
            .\33xl\:container {
                max-width: 768px;
            }
        }

        @media (min-width: 1600px) and (min-width:1024px) {
            .\33xl\:container {
                max-width: 1024px;
            }
        }

        @media (min-width: 1600px) and (min-width:1280px) {
            .\33xl\:container {
                max-width: 1280px;
            }
        }

        @media (min-width: 1600px) and (min-width:1536px) {
            .\33xl\:container {
                max-width: 1536px;
            }
        }

        @media (min-width: 1600px) and (min-width:1600px) {
            .\33xl\:container {
                max-width: 1600px;
            }
        }

        :root {
            --black: #0e0e0e;
            --color_main: #06c1d4;
            --color_main_hover: #06c1d4;
            --color_main_active: #06c1d4;
            --color_main_hover: #d1f5f9;
            --cyan50: #d1f5f9;
            --white: #fff;
            --dark_gray: #171c27;
            --dark_blue: #242368;
            --gray700: #272e3c;
            --gray600: #414956;
            --gray500: #7a8088;
            --gray200: #d2d7e1;
            --gray100: #e3e7ef;
            --gray50: #f3f5f8;
            --gray10: #fbfbfb;
            --red: #d53b2a;
            --oranger: #ed6e33;
            --green: #21a453;
            --font_main: "SF_Pro_Display";
            --font_second: "SFProText";
        }

        .thumb_img {
            height: 0;
        }

        .thumb_img img {
            transition: all .4s ease 0s;
        }

        body {
            font-family: "SFProText";
            font-weight: 400;
            color: #0e0e0e;
            color: var(--black);
            font-size: 16px;
            line-height: 1.5;
            text-align: left;
            font-synthesis: none;
            -moz-font-feature-settings: "kern";
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            width: 100%;
        }

        a,
        a:focus {
            outline: none;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        img {
            font-size: 0;
            line-height: 0;
            max-width: 100%;
            height: auto;
            vertical-align: middle;
        }

        hr,
        img {
            border: 0;
        }

        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border-top: 1px solid rgba(0, 0, 0, .1);
        }

        .form-control {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        input[type=email],
        input[type=password],
        input[type=text],
        select,
        textarea {
            font-family: "SFProText";
            font-size: 16px;
            width: 100%;
            transition: .4s ease;
        }

        input[type=email]::-webkit-input-placeholder,
        input[type=password]::-webkit-input-placeholder,
        input[type=text]::-webkit-input-placeholder,
        select::-webkit-input-placeholder,
        textarea::-webkit-input-placeholder {
            color: #a7acb4;
        }

        input[type=email]:-moz-placeholder,
        input[type=email]::-moz-placeholder,
        input[type=password]:-moz-placeholder,
        input[type=password]::-moz-placeholder,
        input[type=text]:-moz-placeholder,
        input[type=text]::-moz-placeholder,
        select:-moz-placeholder,
        select::-moz-placeholder,
        textarea:-moz-placeholder,
        textarea::-moz-placeholder {
            color: #a7acb4;
        }

        input[type=email]:-ms-input-placeholder,
        input[type=password]:-ms-input-placeholder,
        input[type=text]:-ms-input-placeholder,
        select:-ms-input-placeholder,
        textarea:-ms-input-placeholder {
            color: #a7acb4;
        }

        input[type=email]:focus,
        input[type=email]:hover,
        input[type=password]:focus,
        input[type=password]:hover,
        input[type=text]:focus,
        input[type=text]:hover,
        select:focus,
        select:hover,
        textarea:focus,
        textarea:hover {
            border: 1px solid #06c1d4 !important;
            border: 1px solid var(--color_main) !important;
        }

        .clearfix:after,
        .clearfix:before {
            content: "";
            display: block;
            height: 0;
            overflow: hidden;
        }

        .clearfix:after {
            clear: both;
        }

        .left {
            float: left;
        }

        .sticky {
            position: sticky;
            position: -webkit-sticky;
            top: 0;
        }

        .container {
            width: 100%;
            clear: both;
        }

        .min-container {
            max-width: 808px !important;
            margin: 0 auto;
        }

        html {
            -webkit-text-size-adjust: none;
        }

        .gray {
            background: #f8f8f6;
        }

        .color-gray {
            color: #414956;
            color: var(--gray600);
        }

        .error {
            color: #d53b2a;
            color: var(--red);
            font-size: 14px;
            margin-top: 5px;
            display: block;
            font-family: "SF_Pro_Display";
            font-family: var(--font_main);
        }

        .center {
            text-align: center;
        }

        .color-main {
            color: #06c1d4;
            color: var(--color_main);
        }

        .btn-default {
            background: #06c1d4;
            background: var(--color_main);
            font-weight: 600;
            font-size: 16px;
            height: 48px;
            line-height: 48px;
            border-radius: 56px;
            display: inline-block;
            padding: 0 40px;
            transition: .5s ease;
            box-shadow: none;
            text-align: center;
            cursor: pointer;
        }

        .btn-default,
        .btn-default:hover {
            color: #171c27;
            color: var(--dark_gray);
        }

        .btn-default.gray {
            background: #d2d7e1;
            background: var(--gray200);
        }

        .btn-default.oranger {
            background: #ed6e33;
            background: var(--oranger);
            border: 1px solid #ed6e33;
            border: 1px solid var(--oranger);
            color: #fff;
        }

        .btn-default.white {
            background: #fff;
            border: 1px solid #e3e7ef;
            border: 1px solid var(--gray100);
        }

        .btn-default.white:hover {
            background: #2c95a0;
            color: #fff;
            border-color: #2c95a0;
        }

        .btn-default.full {
            width: 100%;
        }

        .btn-default.color-white {
            color: #fff;
        }

        .btn-default.mfp-close {
            opacity: 1;
            font-size: 16px;
            width: auto;
            height: 48px;
            line-height: 48px;
            position: static;
        }



        .black {
            color: #0e0e0e;
            color: var(--black);
        }

        .red {
            color: #d53b2a;
            color: var(--red);
        }

        .oranger {
            color: #ed6e33;
            color: var(--oranger);
        }

        @-webkit-keyframes animation-bottom {
            0% {
                bottom: -3px;
            }

            25% {
                bottom: -1px;
            }

            50% {
                bottom: 1px;
            }

            75% {
                bottom: -1px;
            }

            to {
                bottom: -3px;
            }
        }

        @keyframes animation-bottom {
            0% {
                bottom: -3px;
            }

            25% {
                bottom: -1px;
            }

            50% {
                bottom: 1px;
            }

            75% {
                bottom: -1px;
            }

            to {
                bottom: -3px;
            }
        }

        .space-between {
            justify-content: space-between;
        }

        .thumb_img {
            display: block;
            overflow: hidden;
            height: 1px;
            position: relative;
            width: 100%;
            background: #f4f4f4;
        }

        .thumb_img img {
            -o-object-fit: cover;
            object-fit: cover;
            -o-object-position: center;
            object-position: center;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }

        .thumb_img.thumb_5x2 {
            padding-bottom: 45%;
        }

        #pagination {
            margin: 40px 0 0;
        }

        #pagination .pagination {
            display: flex;
            justify-content: center;
            padding-left: 0;
            list-style: none;
            border-radius: .25rem;
        }

        #pagination li {
            margin: 0 5px;
        }

        #pagination li a {
            background: #fff;
            border-radius: 50%;
            color: #171c27;
            color: var(--dark_gray);
            font-weight: 600;
            border: 1px solid #e3e7ef;
            border: 1px solid var(--gray100);
            display: flex;
            align-items: center;
            width: 40px;
            justify-content: center;
            height: 40px;
            position: relative;
        }

        #pagination li a.prev:before {
            transform: rotate(45deg);
            left: 15px;
        }

        #pagination li a.next:before,
        #pagination li a.prev:before {
            content: "";
            border-bottom: 2px solid #171c27;
            border-bottom: 2px solid var(--dark_gray);
            border-left: 2px solid #171c27;
            border-left: 2px solid var(--dark_gray);
            width: 10px;
            height: 10px;
            position: absolute;
            top: 14px;
        }

        #pagination li a.next:before {
            transform: rotate(-135deg);
            left: 12px;
        }

        #pagination li.active a,
        #pagination li:hover a {
            background: #06c1d4;
            background: var(--color_main);
            border: 1px solid #06c1d4;
            border: 1px solid var(--color_main);
        }

        .hcmut-toast.rounded-full {
            border-radius: 99px !important;
        }

        .hcmut-toast.success {
            background-color: #0b9574 !important;
            color: #fff !important;
        }

        .hcmut-toast.error {
            background-color: #d42a53 !important;
            color: #fff !important;
        }

        .hcmut-toast .hcmut-check:after {
            width: 24px;
            height: 24px;
            content: "";
            background: url(/images/landing/lg-landing-page/check-toast.svg) no-repeat;
            float: left;
            display: block;
            margin-right: 16px;
        }

        .swiper-container {
            margin: 0 auto;
            position: relative;
            overflow: hidden;
            list-style: none;
            padding: 0;
            z-index: 1;
        }

        .swiper-container-no-flexbox .swiper-slide {
            float: left;
        }

        .swiper-container-vertical>.swiper-wrapper {
            flex-direction: column;
        }

        .swiper-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 1;
            display: flex;
            transition-property: transform;
            box-sizing: content-box;
        }

        .swiper-container-android .swiper-slide,
        .swiper-wrapper {
            transform: translateZ(0);
        }

        .swiper-container-multirow>.swiper-wrapper {
            flex-wrap: wrap;
        }

        .swiper-container-free-mode>.swiper-wrapper {
            transition-timing-function: ease-out;
            margin: 0 auto;
        }

        .swiper-slide {
            flex-shrink: 0;
            width: 100%;
            height: 100%;
            position: relative;
            transition-property: transform;
        }

        .swiper-slide-invisible-blank {
            visibility: hidden;
        }

        .swiper-container-autoheight,
        .swiper-container-autoheight .swiper-slide {
            height: auto;
        }

        .swiper-container-autoheight .swiper-wrapper {
            align-items: flex-start;
            transition-property: transform, height;
        }

        .swiper-container-3d {
            perspective: 1200px;
        }

        .swiper-container-3d .swiper-cube-shadow,
        .swiper-container-3d .swiper-slide,
        .swiper-container-3d .swiper-slide-shadow-bottom,
        .swiper-container-3d .swiper-slide-shadow-left,
        .swiper-container-3d .swiper-slide-shadow-right,
        .swiper-container-3d .swiper-slide-shadow-top,
        .swiper-container-3d .swiper-wrapper {
            transform-style: preserve-3d;
        }

        .swiper-container-3d .swiper-slide-shadow-bottom,
        .swiper-container-3d .swiper-slide-shadow-left,
        .swiper-container-3d .swiper-slide-shadow-right,
        .swiper-container-3d .swiper-slide-shadow-top {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 10;
        }

        .swiper-container-3d .swiper-slide-shadow-left {
            background-image: linear-gradient(270deg, rgba(0, 0, 0, .5), transparent);
        }

        .swiper-container-3d .swiper-slide-shadow-right {
            background-image: linear-gradient(90deg, rgba(0, 0, 0, .5), transparent);
        }

        .swiper-container-3d .swiper-slide-shadow-top {
            background-image: linear-gradient(0deg, rgba(0, 0, 0, .5), transparent);
        }

        .swiper-container-3d .swiper-slide-shadow-bottom {
            background-image: linear-gradient(180deg, rgba(0, 0, 0, .5), transparent);
        }

        .swiper-container-wp8-horizontal,
        .swiper-container-wp8-horizontal>.swiper-wrapper {
            touch-action: pan-y;
        }

        .swiper-container-wp8-vertical,
        .swiper-container-wp8-vertical>.swiper-wrapper {
            touch-action: pan-x;
        }

        .swiper-button-next,
        .swiper-button-prev {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: #f3f5f8;
            background: var(--gray50);
            width: 56px;
            height: 56px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            border-radius: 50%;
            z-index: 2;
            cursor: pointer;
            outline: 0;
            transition: all .5s ease;
        }

        @media (max-width: 576px) {

            .swiper-button-next,
            .swiper-button-prev {
                width: 36px;
                height: 36px;
                line-height: 36px;
            }
        }

        .swiper-button-next.swiper-button-disabled,
        .swiper-button-prev.swiper-button-disabled {
            display: none;
            cursor: auto;
            pointer-events: none;
        }

        .swiper-button-prev,
        .swiper-container-rtl .swiper-button-next {
            left: 0;
            right: auto;
        }

        .swiper-button-next,
        .swiper-container-rtl .swiper-button-prev {
            right: 0;
            left: auto;
        }


        .swiper-button-lock {
            display: none;
        }

        .swiper-pagination {
            position: absolute;
            text-align: center;
            transition: opacity .3s;
            transform: translateZ(0);
            z-index: 10;
        }

        .swiper-pagination.swiper-pagination-hidden {
            opacity: 0;
        }

        .swiper-container-horizontal>.swiper-pagination-bullets,
        .swiper-pagination-custom,
        .swiper-pagination-fraction {
            bottom: 10px;
            left: 0;
            width: 100%;
        }

        .swiper-pagination-bullets-dynamic {
            overflow: hidden;
            font-size: 0;
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            transform: scale(.33);
            position: relative;
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active,
        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-main {
            transform: scale(1);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev {
            transform: scale(.66);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev-prev {
            transform: scale(.33);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next {
            transform: scale(.66);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next-next {
            transform: scale(.33);
        }

        .swiper-pagination-bullet {
            width: 8px;
            height: 8px;
            display: inline-block;
            border-radius: 100%;
            background: #000;
            opacity: .2;
        }

        button.swiper-pagination-bullet {
            border: none;
            margin: 0;
            padding: 0;
            box-shadow: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .swiper-pagination-clickable .swiper-pagination-bullet {
            cursor: pointer;
        }

        .swiper-pagination-bullet-active {
            opacity: 1;
            background: #007aff;
        }

        .swiper-container-vertical>.swiper-pagination-bullets {
            right: 10px;
            top: 50%;
            transform: translate3d(0, -50%, 0);
        }

        .swiper-container-vertical>.swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 6px 0;
            display: block;
        }

        .swiper-container-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
            top: 50%;
            transform: translateY(-50%);
            width: 8px;
        }

        .swiper-container-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            display: inline-block;
            transition: transform .2s, top .2s;
        }

        .swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 0 4px;
        }

        .swiper-container-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
            left: 50%;
            transform: translateX(-50%);
            white-space: nowrap;
        }

        .swiper-container-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            transition: transform .2s, left .2s;
        }

        .swiper-container-horizontal.swiper-container-rtl>.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            transition: transform .2s, right .2s;
        }

        .swiper-pagination-progressbar {
            background: rgba(0, 0, 0, .25);
            position: absolute;
        }

        .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
            background: #007aff;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            transform: scale(0);
            transform-origin: left top;
        }

        .swiper-container-rtl .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
            transform-origin: right top;
        }

        .swiper-container-horizontal>.swiper-pagination-progressbar,
        .swiper-container-vertical>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite {
            width: 100%;
            height: 4px;
            left: 0;
            top: 0;
        }

        .swiper-container-horizontal>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite,
        .swiper-container-vertical>.swiper-pagination-progressbar {
            width: 4px;
            height: 100%;
            left: 0;
            top: 0;
        }

        .swiper-pagination-white .swiper-pagination-bullet-active {
            background: #fff;
        }

        .swiper-pagination-progressbar.swiper-pagination-white {
            background: hsla(0, 0%, 100%, .25);
        }

        .swiper-pagination-progressbar.swiper-pagination-white .swiper-pagination-progressbar-fill {
            background: #fff;
        }

        .swiper-pagination-black .swiper-pagination-bullet-active {
            background: #000;
        }

        .swiper-pagination-progressbar.swiper-pagination-black {
            background: rgba(0, 0, 0, .25);
        }

        .swiper-pagination-progressbar.swiper-pagination-black .swiper-pagination-progressbar-fill {
            background: #000;
        }

        .swiper-pagination-lock {
            display: none;
        }

        .swiper-scrollbar {
            border-radius: 10px;
            position: relative;
            -ms-touch-action: none;
            background: rgba(0, 0, 0, .1);
        }

        .swiper-container-horizontal>.swiper-scrollbar {
            position: absolute;
            left: 1%;
            bottom: 3px;
            z-index: 50;
            height: 5px;
            width: 98%;
        }

        .swiper-container-vertical>.swiper-scrollbar {
            position: absolute;
            right: 3px;
            top: 1%;
            z-index: 50;
            width: 5px;
            height: 98%;
        }

        .swiper-scrollbar-drag {
            height: 100%;
            width: 100%;
            position: relative;
            background: rgba(0, 0, 0, .5);
            border-radius: 10px;
            left: 0;
            top: 0;
        }

        .box-bottom {
            margin-top: 10px;
            display: flex;

        }

        .box-bottom img {
            width: 150px;
            height: 150px;
        }

        .swiper-scrollbar-cursor-drag {
            cursor: move;
        }

        .swiper-scrollbar-lock {
            display: none;
        }

        .swiper-zoom-container {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .swiper-zoom-container>canvas,
        .swiper-zoom-container>img {
            max-width: 100%;
            max-height: 100%;
            -o-object-fit: contain;
            object-fit: contain;
        }

        .swiper-slide-zoomed {
            cursor: move;
        }

        .swiper-lazy-preloader {
            width: 42px;
            height: 42px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -21px;
            margin-top: -21px;
            z-index: 10;
            transform-origin: 50%;
            -webkit-animation: swiper-preloader-spin 1s steps(12) infinite;
            animation: swiper-preloader-spin 1s steps(12) infinite;
        }

        @-webkit-keyframes swiper-preloader-spin {
            to {
                transform: rotate(1turn);
            }
        }

        @keyframes swiper-preloader-spin {
            to {
                transform: rotate(1turn);
            }
        }

        .swiper-container .swiper-notification {
            position: absolute;
            left: 0;
            top: 0;
            pointer-events: none;
            opacity: 0;
            z-index: -1000;
        }

        .swiper-container-fade.swiper-container-free-mode .swiper-slide {
            transition-timing-function: ease-out;
        }

        .swiper-container-fade .swiper-slide {
            pointer-events: none;
            transition-property: opacity;
        }

        .swiper-container-fade .swiper-slide .swiper-slide {
            pointer-events: none;
        }

        .swiper-container-fade .swiper-slide-active,
        .swiper-container-fade .swiper-slide-active .swiper-slide-active {
            pointer-events: auto;
        }

        .swiper-container-cube {
            overflow: visible;
        }

        .swiper-container-cube .swiper-slide {
            pointer-events: none;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            z-index: 1;
            visibility: hidden;
            transform-origin: 0 0;
            width: 100%;
            height: 100%;
        }

        .swiper-container-cube .swiper-slide .swiper-slide {
            pointer-events: none;
        }

        .swiper-container-cube.swiper-container-rtl .swiper-slide {
            transform-origin: 100% 0;
        }

        .swiper-container-cube .swiper-slide-active,
        .swiper-container-cube .swiper-slide-active .swiper-slide-active {
            pointer-events: auto;
        }

        .swiper-container-cube .swiper-slide-active,
        .swiper-container-cube .swiper-slide-next,
        .swiper-container-cube .swiper-slide-next+.swiper-slide,
        .swiper-container-cube .swiper-slide-prev {
            pointer-events: auto;
            visibility: visible;
        }

        .swiper-container-cube .swiper-slide-shadow-bottom,
        .swiper-container-cube .swiper-slide-shadow-left,
        .swiper-container-cube .swiper-slide-shadow-right,
        .swiper-container-cube .swiper-slide-shadow-top {
            z-index: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .swiper-container-cube .swiper-cube-shadow {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            background: #000;
            opacity: .6;
            filter: blur(50px);
            z-index: 0;
        }

        .swiper-container-flip {
            overflow: visible;
        }

        .swiper-container-flip .swiper-slide {
            pointer-events: none;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            z-index: 1;
        }

        .swiper-container-flip .swiper-slide .swiper-slide {
            pointer-events: none;
        }

        .swiper-container-flip .swiper-slide-active,
        .swiper-container-flip .swiper-slide-active .swiper-slide-active {
            pointer-events: auto;
        }

        .swiper-container-flip .swiper-slide-shadow-bottom,
        .swiper-container-flip .swiper-slide-shadow-left,
        .swiper-container-flip .swiper-slide-shadow-right,
        .swiper-container-flip .swiper-slide-shadow-top {
            z-index: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .swiper-container-coverflow .swiper-wrapper {
            -ms-perspective: 1200px;
        }

        .container {
            max-width: 1254px;
            margin: auto;
            padding-left: 16px;
            padding-right: 16px;
            position: relative;
        }

        .row {
            margin-left: -15px;
            margin-right: -15px;
            display: flex;
            flex-wrap: wrap;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        [class*=col-] {
            padding-left: 15px;
            padding-right: 15px;
            width: 100%;
        }

        @media (min-width: 992px) {
            .col-md-4 {
                width: 33.33333%;
            }

            .col-md-6 {
                width: 50%;
            }

            .col-md-12 {
                width: 100%;
            }
        }

        body::-webkit-scrollbar {
            width: 6px;
            background-color: #fff;
            border-radius: 3px;
        }

        body::-webkit-scrollbar-thumb {
            background-color: #06c1d4;
            border-radius: 3px;
        }

        body::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px #fff;
            background-color: #fff;
            border-radius: 3px;
        }

        .tooltip.info {
            width: 292px;
            font-size: 12px;
            font-weight: 600;
            line-height: 20px;
            background: #0e0e0e;
            color: #fff;
            padding: 12px 16px;
            border-radius: 4px;
            z-index: 9999;
        }

        .tooltip[x-placement^=top] .tooltip-arrow {
            width: 0;
            height: 0;
            border-color: #0e0e0e transparent transparent;
            border-style: solid;
            border-width: 7px 7px 0;
            position: absolute;
            bottom: -7px;
        }

        .tooltip[x-placement^=bottom] .tooltip-arrow {
            width: 0;
            height: 0;
            border-color: transparent transparent #0e0e0e;
            border-style: solid;
            border-width: 0 7px 7px;
            position: absolute;
            top: -7px;
        }

        .tooltip .popover-inner {
            padding: 0;
            margin-left: 0;
        }

        .title_cate {
            font-family: "SF_Pro_Display";
            font-size: 32px;
            margin-bottom: 24px;
            font-weight: 700;
            line-height: 1;
            color: #0e0e0e;
        }

        .title_cate .view {
            color: #06c1d4;
            color: var(--color_main);
            display: block;
            font-size: 14px;
            margin-top: 5px;
        }

        .title_cate .count {
            font-size: 14px;
            margin-left: 5px;
            font-weight: 400;
        }

        .icon.bg-blue {
            background: #ebf5f7;
            width: 88px;
            height: 88px;
            line-height: 88px;
            margin: 0 auto 16px;
            border-radius: 50%
        }

        .icon.bg-blue,
        .view-more {
            text-align: center
        }

        .view-more a {
            font-weight: 600;
            transition: .5s ease
        }

        .view-more__border {
            margin-top: 24px
        }

        .view-more__border a {
            height: 48px;
            line-height: 44px;
            display: inline-block;
            color: #414956;
            font-size: 16px;
            font-weight: 600;
            border-radius: 56px;
            border: 1px solid #e3e7ef;
            padding: 0 32px
        }

        .view-more__border a:hover {
            border: 1px solid #06c1d4;
            border: 1px solid var(--color_main);
            background: #06c1d4;
            background: var(--color_main);
            color: #fff
        }

        @media (min-width: 768px) {
            .view-more:active a {
                color: #004d78;
                text-decoration: underline
            }
        }

        .border-warp {
            border: 1px solid #e3e7ef;
            border: 1px solid var(--gray100);
            overflow: hidden
        }

        .padding_24 {
            padding: 24px
        }

        .mb56 {
            margin-bottom: 56px
        }

        .list-product {
            margin: 0
        }

        .list-product.has-border {
            border-left: 1px solid #e3e7ef;
            border-left: 1px solid var(--gray100);
            border-top: 1px solid #e3e7ef;
            border-top: 1px solid var(--gray100)
        }

        .list-product .items {
            width: 20%;
            padding: 16px;
            border: 1px solid #e3e7ef;
            border: 1px solid var(--gray100);
            border-left: 0;
            border-top: 0;
            position: relative;
            transition: .5s ease;
            color: #7a8088;
            color: var(--gray500)
        }

        .list-product .items .ava {
            display: block;
            width: 100%;
            padding-bottom: 100%;
            position: relative;
            margin-bottom: 10px;
            background: #fff
        }

        .list-product .items .ava img {
            width: 100%;
            height: auto;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            transition: .5s ease
        }

        .list-product .items .ava .status {
            color: #fff;
            color: var(--white);
            font-weight: 600;
            position: absolute;
            bottom: 0;
            left: 0;
            height: 28px;
            line-height: 28px;
            padding: 0 8.4px
        }

        .list-product .items .content {
            color: #0e0e0e;
            color: var(--black);
            font-size: 14px
        }

        .list-product .items .content .date {
            font-size: 14px;
            font-weight: 600
        }

        .list-product .items .content .name {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 8px;
            line-height: 1.3;
            height: 40px;
            overflow: hidden;
            text-overflow: ellipsis;
            -webkit-line-clamp: 2;
            display: -webkit-box;
            -webkit-box-orient: vertical
        }

        .list-product .items .content .name a {
            color: #0e0e0e;
            color: var(--black)
        }

        .list-product .items .content .name a:hover {
            color: #06c1d4
        }

        .list-product .items .content .ch {
            margin-bottom: 6px
        }

        .list-product .items .content .price {
            font-size: 14px;
            margin-bottom: 10px;
            color: #7a8088;
            color: var(--gray500)
        }

        .list-product .items .content .price strong {
            color: #d53b2a;
            color: var(--red);
            font-size: 18px
        }

        .list-product .items .price {
            font-size: 14px;
            margin-bottom: 8px;
            color: #7a8088;
            color: var(--gray500)
        }

        .list-product .items .price strong {
            color: #d53b2a;
            color: var(--red);
            font-size: 18px;
            font-weight: 600
        }

        .list-product .items .price .btn-default {
            width: 212px;
            display: none;
            margin: 0
        }

        .list-product .items .price_old {
            display: block;
            color: #7a8088;
            color: var(--gray500);
            font-size: 14px;
            text-decoration: line-through
        }

        .list-product .items .code {
            color: #7a8088;
            color: var(--gray500);
            display: block;
            margin-bottom: 5px
        }

        .list-product .items .note {
            display: block
        }

        .list-product .items .note img {
            vertical-align: middle;
            margin-right: 2px
        }

        .list-product .items .changer_color {
            color: #000;
            display: none;
            background: #fff
        }

        .list-product .items .changer_color ul {
            display: flex
        }

        .list-product .items .changer_color ul li {
            display: inline-block;
            margin: 6px 8px 0 0;
            border: 1px solid transparent
        }

        .list-product .items .changer_color ul li .mode,
        .list-product .items .changer_color ul li a {
            display: block;
            width: 32px;
            height: 32px;
            position: relative
        }

        .list-product .items .changer_color ul li .mode img,
        .list-product .items .changer_color ul li a img {
            width: auto;
            height: auto;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto
        }

        .list-product .items .changer_color ul li.active,
        .list-product .items .changer_color ul li:hover {
            border: 1px solid #06c1d4;
            border: 1px solid var(--color_main)
        }

        .list-product .items .more {
            color: #0e0e0e;
            color: var(--black);
            background: #f3f5f8;
            background: var(--gray50);
            position: absolute;
            bottom: -1px;
            display: none;
            left: -1px;
            right: -1px;
            border: 1px solid #e3e7ef;
            border: 1px solid var(--gray100);
            border-top: 0
        }

        .list-product .items .more .description {
            padding: 16px;
            max-height: 105px;
            overflow: hidden
        }

        .list-product .items .more .description p {
            margin: 0
        }

        .list-product .items .more p {
            margin: 3px 0 0
        }

        .list-product .items .desc-global {
            padding: 16px
        }

        .list-product .items .more_btn {
            padding: 16px;
            background: #fff
        }

        .list-product .items .more_btn .btn-default {
            font-size: 14px;
            height: 36px;
            line-height: 35px;
            width: 100%;
            padding: 0 5px
        }

        .list-product .items .more_btn .btn-default:not(:last-child) {
            margin-bottom: 8px
        }

        .list-product .items:hover .name {
            color: #06c1d4
        }

        .list-product .items:hover .note {
            display: none
        }

        .list-product .items:hover .changer_color {
            display: block
        }

        .list-product .items:hover .more {
            display: block;
            z-index: 2;
            overflow: visible;
            transform: translateY(100%)
        }

        .list-product .items:hover .ava img {
            transform: translateY(-5px)
        }

        .list-product.gird_4col {
            margin-right: -1px
        }

        .list-product.gird_4col .items {
            width: 25%;
            border-top: 0
        }

        .list-product.gird_4col .item-grid {
            width: 25%;
            margin-bottom: -1px;
            margin-top: 0
        }

        @media (max-width: 1025px) {
            .list-product .items {
                width: 25%
            }

            .list-product.gird_4col .item-grid,
            .list-product.gird_4col .items {
                width: 33.33%
            }
        }

        @media (max-width: 991px) {
            .list-product .items {
                width: 33.33%
            }
        }

        @media (max-width: 480px) {
            .list-product .items {
                width: 50%;
                padding: 10px
            }

            .list-product .items .ava {
                height: 180px !important
            }

            .list-product .items .ava .status {
                font-size: 10px;
                height: 22px;
                line-height: 22px;
                padding: 0 12px
            }

            .list-product .items .content .price strong {
                font-size: 14px
            }

            .list-product.show-more .items .more {
                margin: 0 -5px -10px
            }

            .list-product.list-product_5item .item-grid:nth-child(5),
            .list-product.list-product_5item .items:nth-child(5) {
                display: none
            }

            .list-product.gird_4col .item-grid,
            .list-product.gird_4col .items {
                width: 50%
            }
        }

        .list-product.show-more .more {
            position: static;
            transform: translateY(0);
            display: block;
            border: 0;
            margin: 0 -16px -16px
        }

        .list-product.show-more .items:hover .more {
            transform: translateY(0)
        }

        .list-product__like {
            border-left: 0
        }

        .list-product__like .items {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            border-left: 1px solid #e3e7ef;
            border-left: 1px solid var(--gray100);
            border-bottom: 1px solid #e3e7ef;
            border-bottom: 1px solid var(--gray100)
        }

        .list-product__like .items .ava {
            width: 207px;
            height: 207px;
            padding-bottom: 0;
            margin-right: 16px;
            margin-bottom: 0
        }

        .list-product__like .items .content {
            width: 490px;
            width: calc(100% - 485px)
        }

        .list-product__like .items .content .name {
            height: inherit
        }

        .list-product__like .items .content .code {
            display: block
        }

        .list-product__like .items .more {
            display: block;
            position: static;
            background: #fff;
            background: var(--white);
            border: 0;
            padding: 0
        }

        .list-product__like .items .like {
            position: absolute;
            right: 30px;
            top: 84px
        }

        .list-product__like .items:hover .more {
            box-shadow: none;
            height: auto;
            background: #fff;
            padding: 0;
            transform: translateY(0)
        }

        .list-product__like .items:hover .more:before {
            display: none
        }

        @media (max-width: 1200px) {
            .list-product__like .items {
                flex-wrap: wrap
            }

            .list-product__like .items .content {
                width: calc(100% - 426px)
            }

            .list-product__like .items .ava {
                width: 150px;
                height: 150px
            }
        }

        @media (max-width: 991px) {
            .list-product__like .items .ava {
                width: 200px;
                height: 200px;
                margin-bottom: 0
            }

            .list-product__like .items .content {
                width: calc(100% - 216px)
            }

            .list-product__like .items .price {
                display: none
            }
        }

        @media (max-width: 480px) {
            .list-product__like .items {
                margin-bottom: 16px;
                border-top: 1px solid #e3e7ef;
                border-top: 1px solid var(--gray100);
                border-bottom: 1px solid #e3e7ef;
                border-bottom: 1px solid var(--gray100);
                border-left: 1px solid #e3e7ef;
                border-left: 1px solid var(--gray100)
            }

            .list-product__like .items .ava {
                width: 128px;
                height: 128px !important;
                margin-right: 10px
            }

            .list-product__like .items .content {
                width: calc(100% - 138px)
            }

            .list-product__like .items .content .name {
                font-size: 14px
            }

            .list-product__like .items .like {
                right: inherit;
                left: 8px;
                top: 8px;
                background: rgba(227, 231, 239, .9);
                width: 48px;
                height: 48px;
                line-height: 48px;
                text-align: center;
                border-radius: 50%
            }
        }

        @media (max-width: 480px) {
            .list-product__like {
                border-top: 0;
                border-bottom: 0;
                border-left: 0
            }
        }

        .padding-swiper {
            padding: 0 28px;
            position: relative;
            margin: 0 -28px
        }

        @media (min-width: 768px) and (max-width:1025px) {
            .padding-swiper {
                padding: 0 15px;
                margin: 0 -15px
            }

            .padding-swiper:after,
            .padding-swiper:before {
                display: none
            }

            .padding-swiper .swiper-button-next,
            .padding-swiper .swiper-button-prev {
                width: 40px;
                height: 40px
            }
        }

        .padding-swiper .swiper-button-next,
        .padding-swiper .swiper-button-prev {
            z-index: 3
        }

        .padding-swiper:before {
            left: -1px
        }

        .padding-swiper:after,
        .padding-swiper:before {
            content: "";
            background: #fff;
            width: 28px;
            height: 100%;
            position: absolute;
            top: 0;
            z-index: 2
        }

        .padding-swiper:after {
            right: -1px
        }

        .breadcrumb li:not(:first-child) {
            margin-left: 8px;
            position: relative
        }

        .breadcrumb li:not(:first-child) a:before {
            content: "/";
            margin-right: 8px
        }

        .breadcrumb li.home img {
            height: 20px
        }

        .check-list {
            position: relative;
            cursor: pointer;
            display: block;
            margin-bottom: 8px
        }

        .check-list .text {
            color: #000;
            display: inline-block;
            font-size: 14px;
            font-weight: 400;
            line-height: 20px
        }

        .check-list .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 17px;
            width: 17px;
            border: 2px solid #d2d7e1;
            border-radius: 2px
        }

        .check-list .checkmark:after {
            content: "";
            position: absolute;
            display: none;
            left: 4px;
            top: 2px;
            width: 5px;
            height: 8px;
            border: solid #171c27;
            border: solid var(--dark_gray);
            border-width: 0 2px 2px 0;
            transform: rotate(45deg)
        }

        .check-list input {
            position: absolute;
            opacity: 0;
            cursor: pointer
        }

        .check-list input:checked~.checkmark {
            background: #06c1d4;
            border-color: #000
        }

        .check-list input:checked~.checkmark:after {
            display: block
        }

        .check-list.cricle {
            padding-left: 28px
        }

        .check-list.cricle .checkmark {
            border-radius: 50%;
            top: 5px
        }

        .check-list.inline {
            display: inline-block;
            margin-right: 24px
        }

        .catalogue__list .check-list {
            padding-left: 28px
        }

        .catalogue__list .check-list .checkmark {
            top: 4px
        }

        .check-compare {
            position: absolute;
            top: 8px;
            left: 8px;
            z-index: 1;
            display: none
        }

        .check-compare .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 20px;
            width: 20px;
            border: 2px solid #000;
            border-radius: 3px
        }

        .check-compare .checkmark:after {
            content: "";
            position: absolute;
            display: none;
            left: 5px;
            top: 2px;
            width: 5px;
            height: 10px;
            border: solid #171c27;
            border: solid var(--dark_gray);
            border-width: 0 2px 2px 0;
            transform: rotate(45deg)
        }

        .check-compare input {
            position: absolute;
            opacity: 0;
            width: 20px;
            height: 20px;
            z-index: 2;
            cursor: pointer
        }

        .check-compare input:checked~.checkmark {
            background: #06c1d4;
            background: var(--color_main)
        }

        .check-compare input:checked~.checkmark:after,
        .col_right.show-compare .check-compare {
            display: block
        }

        .text-base .check-list {
            padding-left: 28px
        }

        .text-base .check-list .text {
            font-size: 16px
        }

        .text-base .check-list .checkmark {
            border-radius: 0;
            top: 2px
        }

        .text-base .check-list.cricle {
            padding-left: 28px
        }

        .text-base .check-list.cricle .checkmark {
            border-radius: 50%
        }

        .table-responsive {
            width: 100%;
            overflow-x: auto
        }

        .table-default {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0
        }

        .table-default td,
        .table-default th {
            border: 1px solid #e3e7ef;
            color: #0e0e0e;
            padding: 13px 16px
        }

        .table-default .border_0 td {
            border: 0;
            padding: 24px 16px 10px
        }

        .slideshow__gallery-wrap {
            will-change: transform;
            transition-timing-function: cubic-bezier(0, 0, .3, .98);
            transform: translateZ(0)
        }

        .slideshow__gallery-slide {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            font-size: 32px;
            color: #fff;
            letter-spacing: 3.2px;
            transform: translateZ(0);
            will-change: font-size;
            transition: font-size .3s ease
        }

        .slideshow__gallery-slide.active {
            font-size: 36px
        }

        .slideshow__thumbs-wrap {
            will-change: transform;
            transition-timing-function: cubic-bezier(0, 0, .3, .98);
            transform: translateZ(0)
        }

        .slideshow__thumbs-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid #e3e7ef;
            border: 1px solid var(--gray100);
            box-sizing: border-box;
            border-radius: 4px;
            padding: 2px;
            will-change: font-size;
            transition: font-size .3s ease
        }

        .slideshow__thumbs-slide.swiper-slide-thumb-active {
            border: 2px solid #06c1d4;
            border: 2px solid var(--color_main)
        }

        .slideshow2__gallery {
            position: relative;
            margin-bottom: 18px
        }

        .slideshow2__gallery .slide_img {
            position: relative;
            width: 100%;
            padding-bottom: 66.666666666667%
        }

        .slideshow2__gallery .slide_img img {
            width: auto;
            height: auto;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            -o-object-fit: cover;
            object-fit: cover;
            width: 100%;
            height: 100%
        }

        .slideshow2__gallery .swiper-button-prev {
            left: 10px
        }

        .slideshow2__gallery .swiper-button-next {
            right: 10px
        }

        @media (max-width: 992px) {

            .slideshow2__gallery .swiper-button-next,
            .slideshow2__gallery .swiper-button-prev {
                width: 36px;
                height: 36px
            }
        }

        @media (max-width: 576px) {

            .slideshow2__gallery .swiper-button-next,
            .slideshow2__gallery .swiper-button-prev {
                display: none
            }
        }

        .slideshow2__thumbs {
            position: relative;
            padding: 0 80px
        }

        .slideshow2__thumbs .slideshow__thumbs-slide {
            overflow: hidden;
            max-height: 60px
        }

        .slideshow2__thumbs .slide_thumb {
            position: relative;
            max-width: 90px;
            width: 100%;
            padding-top: 66.666667%;
            cursor: pointer
        }

        .slideshow2__thumbs .slide_thumb a {
            display: block
        }

        .slideshow2__thumbs .slide_thumb img {
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            -o-object-fit: cover;
            object-fit: cover
        }

        .slideshow2__thumbs .text {
            position: absolute;
            bottom: -50px;
            text-align: center;
            height: 42px
        }

        .slideshow2__thumbs .swiper-button-next,
        .slideshow2__thumbs .swiper-button-prev {
            top: 50%;
            width: 30px;
            height: 30px;
            background: none;
            cursor: pointer;
            transform: translateY(-50%)
        }

        .slideshow2__thumbs .swiper-button-next:before,
        .slideshow2__thumbs .swiper-button-prev:before {
            background: none;
            width: 30px;
            height: 30px;
            line-height: 30px
        }

        .slideshow2__thumbs .swiper-button-next:hover:before,
        .slideshow2__thumbs .swiper-button-prev:hover:before {
            color: #171c27;
            color: var(--dark_gray)
        }

        .slideshow2__thumbs .swiper-button-prev {
            left: 40px
        }

        .slideshow2__thumbs .swiper-button-next {
            right: 40px
        }

        @media (max-width: 992px) {
            .slideshow2__thumbs {
                padding: 0 20px
            }

            .slideshow2__thumbs .swiper-button-prev {
                left: -10px
            }

            .slideshow2__thumbs .swiper-button-next {
                right: -10px
            }
        }

        .slideshow2 .slideshow__thumbs-slide {
            padding: 0
        }

        .slideshow2 .swiper-button-disabled {
            display: none !important
        }

        .list-star {
            margin-bottom: 24px
        }

        .list-star li {
            display: inline-block;
            margin: 0 4px
        }

        .loading-page {
            min-height: 100vh;
            min-height: calc(var(--vh, 1vh)*100);
            display: flex;
            align-items: center;
            justify-content: center
        }

        .loading-page .sk-child {
            margin: 0 2px;
            width: 11px;
            height: 11px;
            background: #06c1d4;
            background: var(--color_main);
            border-radius: 100%;
            display: inline-block;
            -webkit-animation: sk-three-bounce 1.4s ease-in-out 0s infinite both;
            animation: sk-three-bounce 1.4s ease-in-out 0s infinite both
        }

        .loading-page .sk-bounce1 {
            -webkit-animation-delay: -.32s;
            animation-delay: -.32s
        }

        .loading-page .sk-bounce2 {
            -webkit-animation-delay: -.16s;
            animation-delay: -.16s
        }

        .loading-page.style-1 {
            min-height: 400px
        }

        .loadding-new {
            text-align: center;
            margin: 35px 0;
            font-size: 16px
        }

        .loadding-new span {
            display: block
        }

        .loadding-new .sk-child {
            margin: 0 2px;
            width: 11px;
            height: 11px;
            background: #06c1d4;
            background: var(--color_main);
            border-radius: 100%;
            display: inline-block;
            -webkit-animation: sk-three-bounce 1.4s ease-in-out 0s infinite both;
            animation: sk-three-bounce 1.4s ease-in-out 0s infinite both
        }

        .loadding-new .sk-bounce1 {
            -webkit-animation-delay: -.32s;
            animation-delay: -.32s
        }

        .loadding-new .sk-bounce2 {
            -webkit-animation-delay: -.16s;
            animation-delay: -.16s
        }

        @media (max-width: 414px) {
            .loadding-new {
                margin: 24px 0
            }
        }

        @-webkit-keyframes sk-three-bounce {

            0%,
            80%,
            to {
                transform: scale(0)
            }

            40% {
                transform: scale(1)
            }
        }

        @keyframes sk-three-bounce {

            0%,
            80%,
            to {
                transform: scale(0)
            }

            40% {
                transform: scale(1)
            }
        }

        @keyframes fadeInUp {
            0% {
                transform: translate3d(0, 5px, 0)
            }

            to {
                transform: translateZ(0);
                opacity: 1
            }
        }

        @-webkit-keyframes fadeInUp {
            0% {
                transform: translate3d(0, 5px, 0)
            }

            to {
                transform: translateZ(0);
                opacity: 1
            }
        }

        .form-default .row {
            margin: 0 -8px
        }

        .form-default .row [class*=col-] {
            padding-left: 8px;
            padding-right: 8px
        }

        .form-default .form-group {
            margin-bottom: 16px
        }

        .form-default .form-group label.block {
            font-size: 16px;
            display: block;
            color: #000;
            margin-bottom: 6px;
            font-weight: 600;
            text-align: left
        }

        .form-default .form-group .input-wrap {
            width: 100%
        }

        .form-default .form-group .form-control {
            background: #f3f5f8;
            background: var(--gray50);
            padding: 10px 16px;
            height: 48px;
            box-shadow: none;
            color: #0e0e0e;
            font-size: 16px;
            border-radius: 4px
        }

        .form-default .form-group .form-control.error {
            background: #f6d9d6 !important;
            border: 1px solid #d53b2a;
            border: 1px solid var(--red)
        }

        .form-default .form-group .form-control:disabled {
            cursor: default;
            background: #d2d7e1
        }

        .form-default .form-group .textarea {
            height: 124px;
            resize: none
        }

        .form-default .form-group select.form-control {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: #f3f5f8 url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0nMjQnIGhlaWdodD0nMjQnIHZpZXdCb3g9JzAgMCAyNCAyNCcgZmlsbD0nbm9uZScgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJz48cGF0aCBkPSdNMTIuNzEgMTUuNTRMMTguMzYgOS44Nzk5OEMxOC40NTM3IDkuNzg3MDIgMTguNTI4MSA5LjY3NjQyIDE4LjU3ODkgOS41NTQ1NkMxOC42Mjk2IDkuNDMyNyAxOC42NTU4IDkuMzAxOTkgMTguNjU1OCA5LjE2OTk4QzE4LjY1NTggOS4wMzc5NyAxOC42Mjk2IDguOTA3MjYgMTguNTc4OSA4Ljc4NTQxQzE4LjUyODEgOC42NjM1NSAxOC40NTM3IDguNTUyOTQgMTguMzYgOC40NTk5OEMxOC4xNzI2IDguMjczNzMgMTcuOTE5MSA4LjE2OTE5IDE3LjY1NSA4LjE2OTE5QzE3LjM5MDggOC4xNjkxOSAxNy4xMzczIDguMjczNzMgMTYuOTUgOC40NTk5OEwxMS45NSAxMy40MUw2Ljk5OTk2IDguNDU5OThDNi44MTI2IDguMjczNzMgNi41NTkxNSA4LjE2OTE5IDYuMjk0OTYgOC4xNjkxOUM2LjAzMDc4IDguMTY5MTkgNS43NzczMyA4LjI3MzczIDUuNTg5OTYgOC40NTk5OEM1LjQ5NTQ4IDguNTUyNiA1LjQyMDMxIDguNjYzMDQgNS4zNjg4MSA4Ljc4NDkyQzUuMzE3MzEgOC45MDY3OSA1LjI5MDUxIDkuMDM3NjcgNS4yODk5NiA5LjE2OTk4QzUuMjkwNTEgOS4zMDIyOSA1LjMxNzMxIDkuNDMzMTcgNS4zNjg4MSA5LjU1NTA1QzUuNDIwMzEgOS42NzY5MiA1LjQ5NTQ4IDkuNzg3MzcgNS41ODk5NiA5Ljg3OTk4TDExLjI0IDE1LjU0QzExLjMzMzYgMTUuNjQxNSAxMS40NDczIDE1LjcyMjUgMTEuNTczOCAxNS43Nzc5QzExLjcwMDMgMTUuODMzMyAxMS44MzY5IDE1Ljg2MTkgMTEuOTc1IDE1Ljg2MTlDMTIuMTEzMSAxNS44NjE5IDEyLjI0OTcgMTUuODMzMyAxMi4zNzYyIDE1Ljc3NzlDMTIuNTAyNyAxNS43MjI1IDEyLjYxNjMgMTUuNjQxNSAxMi43MSAxNS41NFonIGZpbGw9JyMwRTBFMEUnLz48L3N2Zz4=) no-repeat right 10px top 10px;
            background: var(--gray50) url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0nMjQnIGhlaWdodD0nMjQnIHZpZXdCb3g9JzAgMCAyNCAyNCcgZmlsbD0nbm9uZScgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJz48cGF0aCBkPSdNMTIuNzEgMTUuNTRMMTguMzYgOS44Nzk5OEMxOC40NTM3IDkuNzg3MDIgMTguNTI4MSA5LjY3NjQyIDE4LjU3ODkgOS41NTQ1NkMxOC42Mjk2IDkuNDMyNyAxOC42NTU4IDkuMzAxOTkgMTguNjU1OCA5LjE2OTk4QzE4LjY1NTggOS4wMzc5NyAxOC42Mjk2IDguOTA3MjYgMTguNTc4OSA4Ljc4NTQxQzE4LjUyODEgOC42NjM1NSAxOC40NTM3IDguNTUyOTQgMTguMzYgOC40NTk5OEMxOC4xNzI2IDguMjczNzMgMTcuOTE5MSA4LjE2OTE5IDE3LjY1NSA4LjE2OTE5QzE3LjM5MDggOC4xNjkxOSAxNy4xMzczIDguMjczNzMgMTYuOTUgOC40NTk5OEwxMS45NSAxMy40MUw2Ljk5OTk2IDguNDU5OThDNi44MTI2IDguMjczNzMgNi41NTkxNSA4LjE2OTE5IDYuMjk0OTYgOC4xNjkxOUM2LjAzMDc4IDguMTY5MTkgNS43NzczMyA4LjI3MzczIDUuNTg5OTYgOC40NTk5OEM1LjQ5NTQ4IDguNTUyNiA1LjQyMDMxIDguNjYzMDQgNS4zNjg4MSA4Ljc4NDkyQzUuMzE3MzEgOC45MDY3OSA1LjI5MDUxIDkuMDM3NjcgNS4yODk5NiA5LjE2OTk4QzUuMjkwNTEgOS4zMDIyOSA1LjMxNzMxIDkuNDMzMTcgNS4zNjg4MSA5LjU1NTA1QzUuNDIwMzEgOS42NzY5MiA1LjQ5NTQ4IDkuNzg3MzcgNS41ODk5NiA5Ljg3OTk4TDExLjI0IDE1LjU0QzExLjMzMzYgMTUuNjQxNSAxMS40NDczIDE1LjcyMjUgMTEuNTczOCAxNS43Nzc5QzExLjcwMDMgMTUuODMzMyAxMS44MzY5IDE1Ljg2MTkgMTEuOTc1IDE1Ljg2MTlDMTIuMTEzMSAxNS44NjE5IDEyLjI0OTcgMTUuODMzMyAxMi4zNzYyIDE1Ljc3NzlDMTIuNTAyNyAxNS43MjI1IDEyLjYxNjMgMTUuNjQxNSAxMi43MSAxNS41NFonIGZpbGw9JyMwRTBFMEUnLz48L3N2Zz4=) no-repeat right 10px top 10px
        }

        .align-middle {
            vertical-align: middle
        }

        .d-flex {
            display: flex
        }

        .w-56px {
            width: 56px
        }

        .h-56px {
            height: 56px
        }

        .h-72px {
            height: 72px
        }

        .hover\:bg-gray-50:hover {
            background-color: #f3f5f8
        }

        .modal-mask {
            display: block;
            position: fixed;
            z-index: 9998;
            background-color: rgba(0, 0, 0, .8);
            transition: opacity .3s ease;
            overflow-x: hidden;
            overflow-y: auto;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            -ms-scroll-chaining: none;

        }

        .modal-wrapper {
            padding-top: 0;
            padding-bottom: 0;
            margin: 20px auto;
            min-height: calc(100% - 40px);
            display: flex;
            align-items: center
        }

        .modal-container {
            border-radius: 8px;
            width: auto;
            background: #fff;
            margin: 0 auto;
            overflow: hidden;
            transition: all .3s ease
        }

        .modal-header {
            border-bottom: 1px solid #e3e7ef;
            border-bottom: 1px solid var(--gray100);
            padding: 10px 15px;
            font-size: 18px;
            text-align: center;
            font-weight: 700;
            color: #0e0e0e;
            color: var(--black)
        }

        .modal-body {
            margin: 0;
            padding: 16px
        }

        .modal-enter,
        .modal-leave-active {
            opacity: 0
        }

        .modal-enter .modal-container,
        .modal-leave-active .modal-container {
            transform: scale(.5)
        }

        @media (max-width: 991px) {
            .modal-wrapper {
                padding-top: 0;
                padding-bottom: 0;
                width: 100%;
                margin: 0;
                height: 100vh;
                height: calc(var(--vh, 1vh)*100)
            }

            .modal-body {
                padding: 0
            }

            .content_lightbox {
                padding: 20px 16px
            }
        }

        .nuxt-error {
            text-align: center;
            min-height: 100vh;
            min-height: calc(var(--vh, 1vh)*100)
        }

        .nuxt-error .fs-logo {
            margin-top: 16px;
            margin-bottom: 80px;
            display: inline-block
        }

        .nuxt-error .box_search_null {
            margin-bottom: 0
        }

        .type__toggle-button span {
            font-size: 16px;
            font-weight: 600;
            color: #000
        }

        .toggle_button {
            height: 24px;
            width: 40px;
            border-radius: 24px;
            background: rgba(120, 120, 128, .16);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            position: relative;
            outline: none;
            cursor: pointer
        }

        .toggle_button:focus {
            outline: none
        }

        .toggle_button:before {
            content: "";
            background: #fff;
            position: absolute;
            top: 1px;
            left: 1px;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            border: .5px solid rgba(0, 0, 0, .04);
            box-shadow: 0 3px 8px rgba(0, 0, 0, .15), 0 3px 1px rgba(0, 0, 0, .06)
        }

        .toggle_button:checked {
            background: #06c1d4
        }

        .toggle_button:checked:before {
            right: 1px;
            left: inherit
        }

        #fb-root {
            position: relative;
            z-index: 99
        }

        .text-red {
            color: #d43b2a
        }

        .text-gray-600 {
            color: #414956
        }

        .has-line {
            position: relative
        }

        .has-line:before {
            content: "";
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            height: 1px;
            background: #e3e7ef
        }

        .has-line span {
            position: relative;
            z-index: 1
        }

        .border-1 {
            border: 1px solid #d2d7e1
        }

        .text-main {
            color: #06c1d4;
            color: var(--color_main)
        }

        .z-index-1 {
            z-index: 1
        }

        .z-index-2 {
            z-index: 2
        }

        .z-index-3 {
            z-index: 3
        }

        .z-index-4 {
            z-index: 4
        }

        .z-index-5 {
            z-index: 5
        }

        .z-index-6 {
            z-index: 6
        }

        .z-index-7 {
            z-index: 7
        }

        .z-index-8 {
            z-index: 8
        }

        .z-index-9 {
            z-index: 9
        }

        .text-clip-1 {
            background: linear-gradient(90deg, #8cbfff, #b1f6ff 60.19%);
            -webkit-background-clip: text;
            background-clip: text
        }

        .text-clip-1,
        .text-clip-2 {
            -webkit-text-fill-color: transparent
        }

        .text-clip-2 {
            background: linear-gradient(272.99deg, #0f0278 -.04%, #326bff);
            -webkit-background-clip: text;
            background-clip: text
        }

        .text-clip-3 {
            background: linear-gradient(260.88deg, #ea2a00 5.32%, #ff9c40 81.75%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent
        }

        .whitespace-nowrap {
            white-space: nowrap
        }

        .text-clip-4 {
            background: linear-gradient(260.88deg, #ea2a00 5.32%, #ff9c40 81.75%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent
        }

        .bg-gradient-1 {
            background: linear-gradient(96.95deg, #1ddcef -2.28%, #03bbce 82.59%)
        }

        .bg-gradient-4 {
            background: linear-gradient(272.99deg, #0f0278 -.04%, #326bff)
        }

        .bg-gradient-5 {
            background: linear-gradient(260.89deg, #ea2a00 5.31%, #ff9c40 92.63%)
        }

        @-webkit-keyframes fadeDownLeft {
            0% {
                opacity: 0;
                transform: translate(50%, -50%)
            }

            to {
                opacity: 1;
                transform: translate(0)
            }
        }

        @keyframes fadeDownLeft {
            0% {
                opacity: 0;
                transform: translate(50%, -50%)
            }

            to {
                opacity: 1;
                transform: translate(0)
            }
        }

        @-webkit-keyframes fadeUpRight {
            0% {
                opacity: 0;
                transform: translate(-50%, 50%)
            }

            to {
                opacity: 1;
                transform: translate(0)
            }
        }

        @keyframes fadeUpRight {
            0% {
                opacity: 0;
                transform: translate(-50%, 50%)
            }

            to {
                opacity: 1;
                transform: translate(0)
            }
        }

        @-webkit-keyframes fadeScale {
            0% {
                opacity: 0;
                transform: translate(-50%, -50%) scale(0)
            }

            to {
                opacity: 1;
                transform: translate(-50%, -50%) scale(1)
            }
        }

        @keyframes fadeScale {
            0% {
                opacity: 0;
                transform: translate(-50%, -50%) scale(0)
            }

            to {
                opacity: 1;
                transform: translate(-50%, -50%) scale(1)
            }
        }

        @-webkit-keyframes zoomSlide {
            0% {
                width: 110px;
                height: 185px
            }

            to {
                width: 100%;
                height: 100%
            }
        }

        @keyframes zoomSlide {
            0% {
                width: 110px;
                height: 185px
            }

            to {
                width: 100%;
                height: 100%
            }
        }

        @media (min-width: 992px) {
            @-webkit-keyframes zoomSlide {
                0% {
                    width: 200px;
                    height: 337px
                }

                to {
                    width: 100%;
                    height: 100%
                }
            }

            @keyframes zoomSlide {
                0% {
                    width: 200px;
                    height: 337px
                }

                to {
                    width: 100%;
                    height: 100%
                }
            }
        }

        @-webkit-keyframes changeBg {
            0% {
                width: 110px;
                height: 185px
            }

            to {
                width: calc(100% + 160px);
                height: calc(100% + 160px)
            }
        }

        @keyframes changeBg {
            0% {
                width: 110px;
                height: 185px
            }

            to {
                width: calc(100% + 160px);
                height: calc(100% + 160px)
            }
        }

        @media (min-width: 992px) {
            @-webkit-keyframes changeBg {
                0% {
                    width: 200px;
                    height: 337px
                }

                to {
                    width: calc(100% + 160px);
                    height: calc(100% + 160px)
                }
            }

            @keyframes changeBg {
                0% {
                    width: 200px;
                    height: 337px
                }

                to {
                    width: calc(100% + 160px);
                    height: calc(100% + 160px)
                }
            }
        }



        #db-image {
            min-height: 100vh;
            position: relative
        }

        #db-image .content-db-image {
            position: -webkit-sticky;
            position: sticky;
            height: 100vh;
            height: calc(var(--vh, 1vh)*100);
            top: 0;
            background: url(/_nuxt/img/bg-window-mobile.065ffa7.png) no-repeat scroll bottom #0b0b0b
        }

        @media (min-width: 992px) {
            #db-image .content-db-image {
                background: url(/_nuxt/img/bg-window.5005e59.png) no-repeat scroll bottom #0b0b0b;
                top: 0;
                height: 100vh;
                height: calc(var(--vh, 1vh)*100)
            }
        }

        #over-window-view {
            transform: translateY(0);
            margin-left: -1px
        }

        @media (min-width: 992px) {
            #over-window-view {
                transform: translateY(40px)
            }
        }

        @media (min-width: 1600px) {
            #over-window-view {
                transform: translateY(80px)
            }
        }

        #over-window-view:before {
            content: "";
            width: 110px;
            height: 185px;
            position: absolute;
            background: #fff;
            left: 50%;
            bottom: -80px;
            transform: translateX(-50%)
        }

        @media (min-width: 992px) {
            #over-window-view:before {
                width: 200px;
                height: 337px
            }
        }

        @media (max-width: 991px) {
            #over-window-view:before {
                display: none
            }
        }

        @media (max-width: 767px) {
            .tabs-phien {
                overflow-x: scroll;
                overflow-y: hidden;
                -webkit-overflow-scrolling: touch;
                white-space: nowrap;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                width: 100vw;
                justify-content: flex-start
            }

            .tabs-phien>div:last-child {
                padding-right: 16px
            }
        }

        .tabs-phien>div {
            position: relative
        }

        .tabs-phien>div:before {
            content: "";
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background: #0e0e0e;
            transition: all .35s ease
        }

        .tabs-phien>div.active:before,
        .tabs-phien>div:hover:before {
            width: 100%
        }

        .content-daobuoc .swiper-container-horizontal>.swiper-pagination-bullets {
            bottom: 20px;
            left: 30px;
            text-align: left;
            width: inherit
        }

        .content-daobuoc .swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 0 2px
        }

        @media (max-width: 992px) {
            .content-daobuoc .swiper-container-horizontal>.swiper-pagination-bullets {
                bottom: 10px;
                left: 20px
            }
        }

        .content-daobuoc .swiper-pagination-bullet {
            position: relative;
            width: 80px;
            height: 16px;
            background: transparent;
            opacity: 1
        }

        @media (max-width: 992px) {
            .content-daobuoc .swiper-pagination-bullet {
                width: 40px
            }
        }

        .content-daobuoc .swiper-pagination-bullet:after {
            width: 100%;
            background: hsla(0, 0%, 100%, .3)
        }

        .content-daobuoc .swiper-pagination-bullet:after,
        .content-daobuoc .swiper-pagination-bullet:before {
            content: "";
            position: absolute;
            height: 2px;
            left: 0;
            top: 50%;
            -webkit-backdrop-filter: blur(5px);
            backdrop-filter: blur(5px);
            border-radius: 100px;
            transform: translateY(-50%)
        }

        .content-daobuoc .swiper-pagination-bullet:before {
            visibility: hidden;
            width: 0;
            background: #fff;
            z-index: 1;
            transition: width 3s linear
        }

        .content-daobuoc .swiper-pagination-bullet.swiper-pagination-bullet-active {
            opacity: 1
        }

        .content-daobuoc .swiper-pagination-bullet.swiper-pagination-bullet-active:before {
            visibility: visible;
            width: 100%
        }

        .landing-daobuoc {
            width: 100vw;
            overflow-x: hidden
        }

        .landing-daobuoc .modal-mask {
            background: rgba(0, 0, 0, .2);
            -ms-scroll-chaining: none;

            display: block
        }

        .landing-daobuoc .modal-mask .modal-wrapper {
            padding-top: 0;
            padding-bottom: 0;
            margin: 20px auto;
            min-height: calc(100% - 40px);
            display: flex;
            align-items: center
        }

        @media (max-width: 991px) {
            .landing-daobuoc .modal-mask .modal-wrapper {
                margin: 0 auto;
                width: 100%
            }
        }

        .landing-daobuoc .modal-mask #modal-content {
            margin: 0 auto
        }

        .landing-daobuoc .checkmark {
            height: 24px;
            width: 24px;
            border: 2px solid #06c1d4;
            border-radius: 4px;
            display: inline-block;
            position: relative
        }

        .landing-daobuoc .checkmark.disable {
            border: 2px solid #d2d7e1
        }

        .landing-daobuoc .checkmark.checked {
            border: 2px solid #06c1d4;
            background: #06c1d4
        }

        .landing-daobuoc .checkmark.checked:before {
            content: "";
            position: absolute;
            left: 6px;
            top: 2px;
            width: 8px;
            height: 14px;
            border: solid #fff;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg)
        }

        @media (max-width: 991px) {
            .landing-daobuoc .container {
                padding-left: 16px;
                padding-right: 16px
            }

            .landing-daobuoc .sale-label {
                position: relative;
                font-weight: 400;
                margin-left: 5px;
                padding-left: 6px;
                border-radius: 0;
                line-height: 1
            }

            .landing-daobuoc .sale-label:before {
                content: "";
                position: absolute;
                width: 2px;
                background-color: #e3e7ef;
                height: 12px;
                top: 4px;
                left: 0
            }
        }

        .list-dkdt {
            position: relative
        }

        .list-dkdt:before {
            content: "";
            height: .5px;
            background: linear-gradient(90deg, #22dfff, #6980ff 55.73%, #8d52ff);
            transform: rotate(90deg);
            width: 129px;
            left: -59.5px;
            top: 79.5px;
            position: absolute
        }

        .list-dkdt>div:first-child {
            position: relative
        }

        .list-dkdt>div:first-child:after {
            content: "";
            position: absolute;
            background: #22dfff;
            width: 11px;
            height: 11px;
            border-radius: 50%;
            top: 8px;
            left: -24px
        }

        .list-dkdt>div:nth-child(2) {
            position: relative
        }

        .list-dkdt>div:nth-child(2):after {
            content: "";
            position: absolute;
            background: #6980ff;
            width: 11px;
            height: 11px;
            border-radius: 50%;
            top: 8px;
            left: -24px
        }

        .list-dkdt>div:nth-child(3) {
            position: relative
        }

        .list-dkdt>div:nth-child(3):after {
            content: "";
            position: absolute;
            width: 11px;
            height: 11px;
            border-radius: 50%;
            top: 8px;
            left: -24px;
            background: #8d52ff
        }

        #event-sessions.event-sessions-fixed {
            background: #f3f5f8;
            box-shadow: 0 2px 4px rgba(0, 0, 0, .1);
            padding: 12px 0;
            z-index: 11
        }

        #event-sessions.event-sessions-fixed .mb-10 {
            margin-bottom: 0
        }

        #event-sessions.event-sessions-fixed .tabs-phien {
            text-align: left;
            border: none;
            font-size: 14px
        }

        #event-sessions.event-sessions-fixed .tabs-phien>div {
            padding-bottom: 0
        }

        #event-sessions.event-sessions-fixed .tabs-phien>div:before {
            display: none
        }

        #event-sessions.event-sessions-fixed .tabs-phien>div:first-child {
            padding-left: 16px
        }

        .flashsale-top {
            background: url(/_nuxt/img/bg-flashsale-top.d7a4b47.png) repeat-x scroll 0 0;
            background-size: contain
        }

        .flashsale-bottom {
            background: url(/_nuxt/img/bg-flashsale-bottom.449fe08.png) no-repeat scroll 0 0 #fff;
            background-size: cover;
            padding: 32px 20px
        }

        @media (min-width: 1200px) {
            .flashsale-bottom {
                padding: 35px 134px 37px 208px
            }
        }

        @media (max-width: 991px) {
            .flashsale-bottom {
                background-image: url(/_nuxt/img/bg-flashsale-bottom-mobile.54d7606.png)
            }
        }

        .flashsale-bottom img {
            max-width: 288px
        }

        .flashsale-bottom .fb-left {
            padding-right: 93px
        }

        @media (max-width: 991px) {
            .flashsale-bottom .fb-left {
                padding-right: 0
            }

            .flashsale-bottom .fb-left img {
                max-width: 222px;
                display: inline-block
            }
        }

        .callback-wrapper {
            align-items: center;
            background-image: url(/_nuxt/img/bg-callback-top.d164a64.png), url(/_nuxt/img/bg-callback-bottom.43ce854.png);
            background-position: top 0 right 0, bottom 0 left 0;
            background-repeat: no-repeat, no-repeat;
            display: flex;
            justify-content: center;
            height: 100vh;
            height: calc(var(--vh, 1vh)*100)
        }

        .callback-container {
            width: 350px;
            height: 350px;
            border-radius: 100%;
            background: linear-gradient(165deg, #fff, #dcdcdc 50%, #aaa 98%, #0a0a0a);
            position: relative;
            opacity: .5
        }

        .callback-container .loader {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 100%
        }

        .callback-container .loader:before {
            position: absolute;
            content: "";
            width: 100%;
            height: 100%;
            border-radius: 100%;
            border-bottom: 0 solid hsla(0, 0%, 100%, .01961);
            box-shadow: inset 0 -10px 20px 20px hsla(0, 0%, 100%, .25098), inset 0 -5px 15px 10px hsla(0, 0%, 100%, .31373), inset 0 -2px 5px hsla(0, 0%, 100%, .50196), inset 0 -3px 2px hsla(0, 0%, 100%, .73333), 0 2px 0 #fff, 0 2px 3px #fff, 0 5px 5px hsla(0, 0%, 100%, .56471), 0 10px 15px hsla(0, 0%, 100%, .37647), 0 10px 20px 20px hsla(0, 0%, 100%, .25098);
            filter: blur(3px);
            -webkit-animation: callback-rotate 2s linear infinite;
            animation: callback-rotate 2s linear infinite
        }

        .callback-container .loader-text {
            font-size: 1.125rem;
            font-weight: 400
        }

        @-webkit-keyframes callback-rotate {
            to {
                transform: rotate(1turn)
            }
        }

        @keyframes callback-rotate {
            to {
                transform: rotate(1turn)
            }
        }

        .sticky-bar {
            opacity: 0;
            position: fixed;
            left: 0;
            bottom: 0;
            transition: opacity .2s;
            width: 100%;
            will-change: opacity;
            z-index: 9
        }

        .sticky-bar .active span.text {
            background: linear-gradient(272.99deg, #0f0278 -.04%, #326bff);
            background-clip: border-box;
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 500
        }

        .sticky-bar.visible {
            opacity: 1
        }

        .sticky-bar_list {
            white-space: nowrap
        }

        @media (max-width: 991px) {
            .sticky-bar_list {
                overflow-x: auto
            }
        }

        .product-slide .list-product {
            overflow: hidden
        }

        .sticky_zindex {
            background: #fff;
            z-index: 12
        }

        .site-topbar {
            transition: all .35s linear
        }

        .header-sticky {
            position: fixed;
            left: 0;
            width: 100%;
            top: 0;
            background: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .05);
            -webkit-animation-delay: 0;

            -webkit-animation-duration: .5s;
            animation-duration: .5s;
            -webkit-animation-name: fadeDownHeader;
            animation-name: fadeDownHeader
        }

        .landing-daobuoc {
            padding-top: 0 !important
        }

        .landing-daobuoc .header-sticky {
            -webkit-animation: none;
            animation: none
        }

        .landing-daobuoc .sticky_zindex {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            transition: all .2s linear
        }

        .body-flashsale .sticky_zindex {
            position: relative
        }

        .header-pc .fs-logo {
            position: relative;
            display: inline-block
        }

        .header-pc:not(.blog) .fs-logo:before {
            content: "";
            width: 1px;
            height: 32px;
            background: #f3f5f8;
            position: absolute;
            right: -24px;
            top: 50%;
            margin-top: -16px
        }

        .header-pc .fs-search .action-wrap {
            display: block;
            width: 450px;
            position: relative;
            z-index: 11
        }

        .header-pc .fs-search .action-wrap input {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            width: 100%;
            border-radius: 48px;
            height: 40px;
            font-size: 14px;
            font-weight: 400;
            padding: 0 60px 0 16px;
            border: 1px solid #e3e7ef;
            background: #fbfbfb;
            outline: 0
        }

        .header-pc .fs-search .action-wrap input:active,
        .header-pc .fs-search .action-wrap input:focus {
            box-shadow: none
        }

        .header-pc .fs-search .action-wrap button {
            position: absolute;
            top: 0;
            right: 0;
            border: none;
            background: none;
            cursor: pointer
        }

        .header-pc .fs-search .action-wrap.active .suggest-search {
            display: block
        }

        @media (min-width: 992px) and (max-width:1024px) {
            .header-pc .fs-search .action-wrap {
                width: 360px
            }
        }

        .header-pc .fs-search .suggest-search {
            font-size: 16px;
            line-height: 24px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, .25);
            position: absolute;
            display: block;
            top: 41px;
            background: #fff;
            background: var(--white);
            left: 0;
            right: 0;
            border-radius: 4px;
            overflow: hidden
        }

        .header-pc .fs-search .suggest-search .block {
            padding: 16px 0 8px
        }

        .header-pc .fs-search .suggest-search .block:not(:last-child) {
            border-bottom: 1px solid #e3e7ef
        }

        .header-pc .fs-search .suggest-search .block.suggest-keyword {
            padding-bottom: 4px
        }

        .header-pc .fs-search .suggest-search .key {
            font-size: 16px;
            color: #414956;
            margin-bottom: 16px;
            padding-left: 16px
        }

        .header-pc .fs-search .suggest-search .delete {
            color: #d53b2a;
            font-weight: 400;
            font-size: 14px;
            line-height: 20px;
            margin-left: 18px
        }

        .header-pc .fs-search .suggest-search .view-all {
            color: #27bece;
            font-weight: 400;
            font-size: 14px;
            line-height: 20px;
            margin-left: 18px
        }

        .header-pc .fs-search .suggest-search .list-key {
            padding: 0 16px
        }

        .header-pc .fs-search .suggest-search .list-key li {
            padding: 12px 0
        }

        .header-pc .fs-search .suggest-keyword .list-key {
            padding: 0 16px
        }

        .header-pc .fs-search .suggest-keyword .list-key li {
            display: inline-block;
            padding: 7px 16px;
            margin-right: 8px;
            margin-bottom: 12px;
            border: 1px solid #e3e7ef;
            border-radius: 100px;
            line-height: 24px
        }

        .header-pc .fs-search .suggest-product .items {
            position: relative;
            display: flex;
            align-items: center;
            padding: 5px 16px;
            width: 100%
        }

        .header-pc .fs-search .suggest-product .items .ava {
            display: block;
            width: 60px;
            height: 60px;
            position: relative;
            margin-right: 10px
        }

        .header-pc .fs-search .suggest-product .items .ava img {
            max-height: 90%;
            max-width: 90%;
            width: auto;
            height: auto;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto
        }

        .header-pc .fs-search .suggest-product .items .name,
        .header-pc .fs-search .suggest-product .items .prie {
            color: #d53b2a;
            color: var(--red);
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 0
        }

        .header-pc .fs-search .suggest-product .items .name a,
        .header-pc .fs-search .suggest-product .items .prie a {
            color: #0e0e0e;
            color: var(--black);
            font-weight: 400
        }

        .header-pc .fs-search .suggest-product .items .prie {
            flex-grow: 3;
            text-align: right
        }

        .header-pc .fs-search .suggest-product .items:hover {
            background: #f3f5f8
        }

        .header-pc .fs-search .suggest-product .items:hover .prie {
            font-family: "SF_Pro_Display";
            font-weight: 700
        }

        .header-pc .fs-search .suggest-product .items:hover .name a {
            color: #414956;
            font-family: "SF_Pro_Display";
            font-weight: 700
        }

        .header-pc .wrap-fill {
            position: absolute;
            text-align: left;
            top: 50px;
            width: auto;
            left: 50%;
            transform: translateX(-50%);
            padding-top: 15px;
            font-size: 16px;
            min-width: 295px
        }

        .header-pc .wrap-fill:before {
            width: 13px;
            height: 13px;
            border: 1px solid #e3e7ef;
            border: 1px solid var(--gray100);
            border-width: 0 1px 1px 0;
            content: "";
            position: absolute;
            top: 8px;
            left: calc(50% - 6px);
            background: #fff;
            transform: rotate(225deg);
            z-index: 1
        }

        .header-pc .wrap-fill.wrap-fill-account {
            left: inherit;
            right: 0;
            transform: translateX(0)
        }

        .header-pc .wrap-fill.wrap-fill-account:before {
            left: inherit;
            right: 22px
        }

        .header {
            height: 60px;
            z-index: 998;
            background: #fff;
            background: var(--white);
            padding: 0 16px
        }

        .header .ava-text {
            width: 28px;
            height: 28px;
            line-height: 28px;
            text-align: center
        }

        .header .btn_control_menu {
            cursor: pointer;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 16px
        }

        .header__right {
            display: flex;
            flex-grow: 3;
            justify-content: flex-end
        }

        .header .wrap-fill {
            position: fixed;
            z-index: 999;
            font-size: 16px;
            background: #fff;
            background: var(--white);
            left: 0;
            right: 0;
            top: 0;
            width: 100%;
            max-width: 100vw
        }

        .header .wrap-fill.active {
            visibility: visible
        }

        .header .wrap-fill .title {
            height: 48px;
            color: #171c27;
            color: var(--dark_gray);
            font-size: 16px;
            padding: 15px 20px
        }

        .header .wrap-fill .title .close {
            position: absolute;
            right: 15px;
            top: 10px;
            font-size: 30px;
            line-height: 1;
            font-weight: 400;
            color: #171c27;
            color: var(--dark_gray);
            text-shadow: none;
            opacity: 1
        }

        .header .wrap-fill ul {
            padding: 20px;
            margin-bottom: 0
        }

        .header .wrap-fill ul:after,
        .header .wrap-fill ul:before {
            left: 50%
        }

        .header .wrap-fill .note {
            color: #06c1d4;
            color: var(--color_main);
            text-align: center;
            padding: 0 10px
        }

        .header .wrap-fill .list .items {
            display: flex;
            margin-bottom: 20px
        }

        .header .wrap-fill .list .items .ava {
            position: relative;
            width: 56px;
            height: 56px
        }

        .header .wrap-fill .list .items .ava img {
            max-height: 90%;
            max-width: 90%;
            width: auto;
            height: auto;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            transition: .5s ease
        }

        .header .wrap-fill .list .items .ava .delete {
            width: 70px;
            height: 70px;
            align-items: center;
            display: flex;
            justify-content: center;
            opacity: 0
        }

        .header .wrap-fill .list .items .ava:hover {
            background: #ececec
        }

        .header .wrap-fill .list .items .ava:hover .delete {
            opacity: 1
        }

        .header .wrap-fill .list .items .ava:active {
            background: #d3d3d3
        }

        .header .wrap-fill .list .items .content {
            width: calc(100% - 70px);
            padding-left: 20px
        }

        .header .wrap-fill .list .items .content h3 {
            font-size: 16px;
            font-weight: 400
        }

        .header .wrap-fill .btn-bottom {
            text-align: center;
            margin: 0 auto
        }

        .header .wrap-fill .btn-bottom .buy {
            background: #06c1d4;
            background: var(--color_main);
            border-radius: 56px;
            height: 48px;
            line-height: 48px;
            padding: 0 16px;
            font-size: 16px;
            color: #171c27;
            color: var(--dark_gray);
            display: block;
            font-weight: 600;
            color: #fff
        }

        .header .wrap-fill .btn-bottom span {
            color: #06c1d4;
            color: var(--color_main)
        }

        .header .close-search {
            position: absolute;
            left: 7px;
            top: 9px;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            background: #fff;
            background: var(--white);
            cursor: pointer
        }

        .header #auto_search_button {
            background: none;
            outline: 0;
            width: 36px;
            height: 36px;
            text-align: center;
            display: block;
            border-radius: 50%;
            border: 1px solid #d2d7e1;
            border: 1px solid var(--gray200);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .header #auto_search_button.active {
            position: relative;
            z-index: 2;
            color: #d3d3d3
        }

        .header .block_search {
            position: absolute;
            left: 55px;
            top: 11px;
            right: 10px;
            background: #fff;
            background: var(--white);
            z-index: 8
        }

        .header .block_search .search-input {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            height: 36px;
            width: 100%;
            padding: 0 16px;
            border: 1px solid #d2d7e1;
            border: 1px solid var(--gray200);
            border-radius: 48px;
            font-size: 16px;
            outline: none;
            box-shadow: none;
            background: none
        }

        .header .block_search .search-input:active,
        .header .block_search .search-input:focus {
            box-shadow: none
        }

        .header .block_search .search-button {
            background: none;
            outline: 0;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 0;
            position: absolute;
            right: 10px;
            top: 0
        }

        .header .block_search .search.active .suggest-search {
            display: block
        }

        .header .block_search .suggest-search {
            display: none;
            position: absolute;
            left: -60px;
            top: 49px;
            right: -10px;
            margin: 0;
            background: #fff;
            background: var(--white);
            box-shadow: 0 2px 6px rgba(0, 0, 0, .25);
            border-radius: 3px
        }

        .header .block_search .suggest-product label {
            color: #414956;
            color: var(--gray600);
            font-weight: 600;
            display: block;
            padding: 16px 16px 8px
        }

        .header .block_search .suggest-product hr {
            margin: 5px 0;
            border-top: 1px solid #d2d7e1;
            border-top: 1px solid var(--gray200)
        }

        .header .block_search .suggest-product .items {
            background: #fff;
            background: var(--white);
            display: flex;
            align-items: center;
            border-radius: 0;
            padding: 10px 16px
        }

        .header .block_search .suggest-product .items .ava {
            display: block;
            width: 48px;
            height: 48px;
            position: relative;
            margin-right: 10px
        }

        .header .block_search .suggest-product .items .ava img {
            max-height: 90%;
            max-width: 90%;
            width: auto;
            height: auto;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto
        }

        .header .block_search .suggest-product .items .content {
            width: calc(100% - 40px);
            color: #414956;
            color: var(--gray600)
        }

        .header .block_search .suggest-product .items .name,
        .header .block_search .suggest-product .items .prie {
            font-size: 14px;
            margin-bottom: 0;
            font-weight: 400
        }

        .header .block_search .suggest-product .items .name a,
        .header .block_search .suggest-product .items .prie a {
            color: #414956;
            color: var(--gray600);
            margin-bottom: 5px;
            display: block
        }

        .header .block_search .suggest-product .items .prie strong {
            font-size: 16px;
            color: #d53b2a;
            color: var(--red);
        }

        .header .gio-hang {
            margin-left: 8px;
            position: relative;
        }

        .header .gio-hang .onclick {
            width: 36px;
            height: 36px;
            line-height: 36px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .header .gio-hang .countTotalCart {
            color: #171c27;
            color: var(--dark_gray);
            font-size: 12px;
            font-weight: 600;
            width: 18px;
            height: 18px;
            line-height: 17px;
            border-radius: 50%;
            border: 1px solid #06c1d4;
            border: 1px solid var(--color_main);
            position: absolute;
            text-align: center;
            top: 0;
            right: -3px;
            background: #06c1d4;
            background: var(--color_main)
        }

        .main--menu {
            width: 289px;
            z-index: 999;
            will-change: transform;
            transition: .4s;
            transform: translate(-100%)
        }

        .show_main_menu .main--menu {
            transform: translate(0)
        }

        .overlay-bg {
            position: fixed;
            display: none;
            background: rgba(0, 0, 0, .6);
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: 998
        }

        .close-menu {
            left: 303px;
            z-index: 999
        }

        .show_main_menu .close-menu,
        .show_main_menu .overlay-bg {
            display: block
        }

        .open-header .header {
            z-index: 9999
        }

        .open-header .overlay-bg {
            display: block;
            z-index: 6
        }

        @media (max-width: 1279px) {
            .fs-header .f-hdtop .fs-search>form {
                max-width: 500px
            }

            .fs-header .f-hdtop .fs-hdmn>li {
                margin-left: 30px
            }
        }

        @media (max-width: 1100px) {
            .fs-header .f-hdtop .fs-search {
                margin-left: 30px
            }

            .fs-header .f-hdtop .fs-search>form {
                max-width: 400px
            }

            .fs-header .f-hdtop .fs-hdmn>li {
                margin-left: 10px
            }
        }

        .slide-enter-active {
            transition-duration: .35s;
            transition-timing-function: ease-in
        }

        .slide-leave-active {
            transition-duration: .1s
        }

        .slide-enter-to,
        .slide-leave {
            max-height: 490px;
            overflow: hidden
        }

        .slide-enter,
        .slide-leave-to {
            overflow: hidden;
            max-height: 0
        }

        @-webkit-keyframes fadeInDownCenter {
            to {
                opacity: 1;
                transform: translate3d(-50%, 0, 0)
            }
        }

        @keyframes fadeInDownCenter {
            0% {
                opacity: 0;
                transform: translate3d(-50%, -5%, 0)
            }

            to {
                opacity: 1;
                transform: translate3d(-50%, 0, 0)
            }
        }

        @-webkit-keyframes fadeOutUpCenter {
            to {
                opacity: 0;
                transform: translate3d(-50%, -5%, 0)
            }
        }

        @keyframes fadeOutUpCenter {
            0% {
                opacity: 1
            }

            to {
                opacity: 0;
                transform: translate3d(-50%, -5%, 0)
            }
        }

        @-webkit-keyframes fadeInDown {
            to {
                opacity: 1;
                transform: translateZ(0)
            }
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translate3d(0, -5%, 0)
            }

            to {
                opacity: 1;
                transform: translateZ(0)
            }
        }


        #overlay-menu {
            visibility: hidden;
            position: fixed;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            background: #0e0e0e;
            opacity: 0;
            z-index: 10;
            transition: opacity .3s cubic-bezier(0, 1, .5, 1) .3s;
        }

        @media (max-width: 991px) {
            #overlay-menu {
                display: none;
            }
        }

        .view-grid.list-product .items .like {
            display: none
        }

        .product-slide {
            position: relative
        }

        .product-slide .swiper-button-next,
        .product-slide .swiper-button-prev {
            top: 150px;
            transform: translate(0)
        }

        .product-slide .swiper-button-next:hover,
        .product-slide .swiper-button-prev:hover {
            background-color: #06c1d4;
            color: #fff
        }

        .product-slide .list-product {
            border: 0;
            padding-top: 24px;
            margin-top: -24px
        }

        .product-slide .list-product .items {
            border-top: 1px solid #e3e7ef;
            border-top: 1px solid var(--gray100)
        }

        .product-slide .list-product .col-md-4 {
            padding: 0 35px
        }

        .product-slide .list-product .items {
            border-bottom: 1px solid #e3e7ef;
            border-bottom: 1px solid var(--gray100)
        }

        .product-slide .list-product .items:first-child {
            border-left: 1px solid #e3e7ef;
            border-left: 1px solid var(--gray100)
        }

        .product-slide .list-product .items .ava {
            height: 212px
        }

        .product-slide .list-product .items .content .name {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            height: 40px
        }

        .product-slide .list-product .items .content .name a {
            color: #000
        }

        .product-slide .list-product .items .content .price {
            flex-grow: 3;
            text-align: left;
            margin-bottom: 0
        }

        .product-slide .list-product .items .content .price .new {
            color: #d90000;
            font-weight: 700;
            display: inline-block
        }

        .product-slide .list-product .items .price {
            margin-bottom: 0
        }

        @media (max-width: 480px) {
            .product-slide .list-product .items .ava {
                height: 160px
            }

            .product-slide .list-product .items .content .name {
                height: 36px
            }
        }

        @media (max-width: 768px) {

            .product-slide .padding-swiper:after,
            .product-slide .padding-swiper:before {
                display: none
            }

            .product-slide .swiper-container {
                padding: 0 16px;
                margin: 0 -16px
            }

            .product-slide .swiper-container .item-grid {
                width: 50%
            }
        }

        .fixed_toptop {
            position: fixed;
            bottom: 20px;
            right: 40px;
            z-index: 10;
            text-align: center;
            cursor: pointer
        }

        .fixed_toptop .hotline {
            width: 86px;
            height: 86px;
            line-height: 86px;
            background: #06c1d4;
            background: var(--color_main);
            text-align: center;
            display: block;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: none
        }

        .fixed_toptop #to_top {
            width: 56px;
            height: 56px;
            line-height: 50px;
            text-align: center;
            display: none;
            border: 1px solid #06c1d4;
            border: 1px solid var(--color_main);
            border-radius: 50%;
            margin: 0 auto;
            cursor: pointer
        }

        .col_left {
            width: 247px
        }

        .col_left .catalogue-wrap {
            top: 72px;
            max-height: calc(100vh - 73px);
            overflow-y: auto
        }

        .col_left .catalogue-wrap::-webkit-scrollbar {
            width: 6px;
            background-color: #fff;
            border-radius: 3px
        }

        .col_left .catalogue-wrap::-webkit-scrollbar-thumb {
            background-color: #f3f5f8;
            border-radius: 3px
        }

        .col_left .catalogue-wrap::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px #fff;
            background-color: #fff
        }

        .col_left .catalogue-wrap .back_step {
            display: block;
            margin: 0 -16px;
            background: #fff;
            padding: 22px 30px 22px 18px;
            text-align: center;
            border-bottom: 1px solid #e3e7ef;
            border-bottom: 1px solid var(--gray100);
            position: -webkit-sticky;
            position: sticky;
            display: none;
            top: 0;
            z-index: 1
        }

        .col_left .catalogue-wrap .back_step .back {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            display: inline-block;
            line-height: 1
        }

        .col_left .catalogue-wrap .back_step .title_cate {
            margin-bottom: 0;
            font-size: 16px;
            font-weight: 700
        }

        .col_left .catalogue-wrap .back_step .apply {
            height: 36px;
            line-height: 36px;
            color: #fff;
            position: absolute;
            font-size: 14px;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            background: transparent;
            color: #000;
            border: 1px solid #e3e7ef
        }

        .col_left .catalogue-wrap .back_step .apply.active {
            background: #06c1d4;
            color: #fff;
            border-color: #06c1d4
        }

        .col_left .catalogue-wrap .scrollbar-inner {
            max-height: 70vh
        }

        @media (max-width: 767px) {
            .col_left .catalogue-wrap {
                max-height: unset
            }
        }

        .col_left .catalogue {
            border-top: 1px solid #e3e7ef;
            border-top: 1px solid var(--gray100);
            margin-top: 16px;
            padding-top: 16px
        }

        .col_left .catalogue.catalogue_final {
            margin-top: 0;
            margin-bottom: -12px
        }

        .col_right {
            width: 977px;
            width: calc(100% - 247px)
        }



        @media (max-width: 991px) {
            .col_left {
                width: 100%;
                margin-bottom: 10px
            }

            .col_left .tong_sp {
                display: none
            }

            .col_left .sort-mobile {
                display: flex
            }



            .col_left .catalogue-wrap {
                position: fixed;
                top: 0;
                left: 0;
                background: #fff;
                width: 100%;
                height: 100vh;
                height: calc(var(--vh, 1vh)*100);
                overflow: scroll;
                padding: 0 16px;
                z-index: 998;
                transform: translateX(100%);
                transition: all .35s ease-in-out
            }

            .col_left .catalogue-wrap .back_step {
                display: block
            }

            .col_left .catalogue-wrap .catalogue_final {
                border-top: none
            }

            .col_left .catalogue-wrap.show {
                transform: translateX(0)
            }

            .col_left .catalogue-wrap.back-step {
                transform: translateX(-100%)
            }

            .col_right {
                width: 100%
            }

            .col_right .sort-fillter {
                display: none
            }
        }



        .folder-show .tab {
            display: flex;
            margin-bottom: 40px;
            overflow-x: auto
        }

        .folder-show .tab a {
            font-family: "SF_Pro_Display";
            display: inline-block;
            font-size: 20px;
            line-height: 28px;
            font-weight: 700;
            margin: 0 48px 0 0;
            color: #0e0e0e;
            padding-bottom: 16px;
            border-bottom: 2px solid transparent;
            white-space: nowrap
        }

        .folder-show .tab a.active,
        .folder-show .tab a:hover {
            color: #06c1d4;
            color: var(--color_main);
            border-bottom: 2px solid #06c1d4;
            border-bottom: 2px solid var(--color_main)
        }

        .folder-show .tab a span {
            color: #7a8088;
            color: var(--gray500);
            font-weight: 400;
            margin-left: 5px
        }

        @media (max-width: 768px) {
            .folder-show .tab {
                margin-bottom: 30px
            }

            .folder-show .tab a {
                font-size: 16px;
                line-height: 20px;
                margin: 0 30px 0 0;
                padding-bottom: 8px
            }
        }

        .sort-fillter {
            justify-content: space-between;
            font-size: 16px;
            margin-bottom: 10px
        }

        .sort-fillter__left strong {
            margin-right: 16px
        }

        .sort-fillter__left a {
            margin-right: 24px
        }

        .sort-fillter__left a.active {
            color: #06c1d4;
            color: var(--color_main)
        }

        .sort-fillter__right {
            margin-top: -5px;
            margin-left: auto
        }

        .sort-fillter__right a.active {
            background: #f3f5f8;
            background: var(--gray50)
        }

        @media (max-width: 991px) {
            .sort-fillter {
                display: none
            }

            .sort-fillter__left {
                margin-bottom: 16px
            }

            .sort-fillter__right {
                display: none
            }
        }

        .result_box {
            margin-bottom: 10px
        }

        .result_box .title_cate {
            font-size: 24px;
            width: 200px
        }

        .result_box .wrap {
            width: 1024px;
            width: calc(100% - 200px)
        }

        .result_box .wrap .tr {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin-bottom: 16px
        }

        .result_box .wrap .tr .text-base {
            width: 80px
        }

        .result_box .wrap .check-list {
            margin-bottom: 0;
            margin-right: 16px
        }

        @media (max-width: 991px) {
            .result_box .title_cate {
                font-size: 16px;
                width: 150px
            }

            .result_box .wrap {
                width: calc(100% - 150px)
            }
        }

        @media (max-width: 767px) {

            .result_box .title_cate,
            .result_box .wrap {
                width: 100%
            }
        }

        @media (max-width: 576px) {
            .result_box .wrap .scroll {
                overflow-x: scroll;
                overflow-y: hidden;
                -webkit-overflow-scrolling: touch;
                white-space: nowrap;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                display: block;
                margin-right: -15px
            }

            .result_box .wrap .tr .check-list {
                display: inline-block
            }

            .result_box .wrap .tr .text-base {
                display: none
            }
        }

        .tab-default {
            border-bottom: 1px solid #e3e7ef
        }

        .tab-default a {
            color: #7a8088;
            font-size: 24px;
            font-weight: 700;
            line-height: 64px;
            display: inline-block;
            padding: 0 16px;
            position: relative
        }

        .tab-default a.active {
            color: #0e0e0e
        }

        .tab-default a.active:before {
            content: "";
            background: #06c1d4;
            left: 0;
            right: 0;
            height: 3px;
            position: absolute;
            bottom: -1px
        }

        @media (max-width: 991px) {
            .tab-default {
                overflow-x: scroll;
                overflow-y: hidden;
                -webkit-overflow-scrolling: touch;
                white-space: nowrap;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                display: block !important
            }

            .tab-default a {
                font-size: 16px;
                line-height: 44px
            }
        }

        .tab-default_2 {
            margin-bottom: 24px
        }

        .tab-default_2 a {
            font-size: 18px;
            line-height: 50px;
            padding: 0;
            margin-right: 40px
        }

        .box-tra-cuu {
            display: flex
        }

        .box-tra-cuu__mobile {
            display: none
        }

        @media (max-width: 991px) {
            .box-tra-cuu {
                display: none
            }

            .box-tra-cuu__mobile {
                display: block;
                border: 0
            }
        }

        .box_left {
            width: 624px;
            width: calc(100% - 508px)
        }

        @media (max-width: 991px) {
            .box_left {
                width: 100%;
                margin-bottom: 24px
            }
        }

        .catalogue {
            position: relative
        }

        .catalogue__list {
            display: none
        }

        .catalogue__list.show {
            display: block
        }

        .catalogue h3 {
            font-size: 16px;
            font-weight: 600;
            color: #000;
            margin-bottom: 8px;
            position: relative;
            cursor: pointer
        }

        .catalogue h3 span {
            margin-right: auto
        }

        .catalogue .view-more {
            text-decoration: underline;
            text-underline-position: under;
            cursor: pointer
        }

        .catalogue_final ul li {
            margin-right: 8px;
            font-size: 14px;
            color: #0e0e0e;
            margin-bottom: 12px
        }

        .sort-mobile {
            font-size: 16px;
            margin-bottom: 8px;
            display: none
        }

        .sort-mobile strong {
            font-weight: 600;
            color: #000;
            font-size: 14px;
            margin-right: 5px
        }

        .sort-mobile select {
            border: 0 !important;
            outline: 0;
            width: auto
        }

        .sort-mobile #resizing_select {
            padding-right: 20px;
            font-size: 14px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0nMjQnIGhlaWdodD0nMjQnIHZpZXdCb3g9JzAgMCAyNCAyNCcgZmlsbD0nbm9uZScgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJz48cGF0aCBkPSdNMTIuNzEgMTUuNTRMMTguMzYgOS44Nzk5OEMxOC40NTM3IDkuNzg3MDIgMTguNTI4MSA5LjY3NjQyIDE4LjU3ODkgOS41NTQ1NkMxOC42Mjk2IDkuNDMyNyAxOC42NTU4IDkuMzAxOTkgMTguNjU1OCA5LjE2OTk4QzE4LjY1NTggOS4wMzc5NyAxOC42Mjk2IDguOTA3MjYgMTguNTc4OSA4Ljc4NTQxQzE4LjUyODEgOC42NjM1NSAxOC40NTM3IDguNTUyOTQgMTguMzYgOC40NTk5OEMxOC4xNzI2IDguMjczNzMgMTcuOTE5MSA4LjE2OTE5IDE3LjY1NSA4LjE2OTE5QzE3LjM5MDggOC4xNjkxOSAxNy4xMzczIDguMjczNzMgMTYuOTUgOC40NTk5OEwxMS45NSAxMy40MUw2Ljk5OTk2IDguNDU5OThDNi44MTI2IDguMjczNzMgNi41NTkxNSA4LjE2OTE5IDYuMjk0OTYgOC4xNjkxOUM2LjAzMDc4IDguMTY5MTkgNS43NzczMyA4LjI3MzczIDUuNTg5OTYgOC40NTk5OEM1LjQ5NTQ4IDguNTUyNiA1LjQyMDMxIDguNjYzMDQgNS4zNjg4MSA4Ljc4NDkyQzUuMzE3MzEgOC45MDY3OSA1LjI5MDUxIDkuMDM3NjcgNS4yODk5NiA5LjE2OTk4QzUuMjkwNTEgOS4zMDIyOSA1LjMxNzMxIDkuNDMzMTcgNS4zNjg4MSA5LjU1NTA1QzUuNDIwMzEgOS42NzY5MiA1LjQ5NTQ4IDkuNzg3MzcgNS41ODk5NiA5Ljg3OTk4TDExLjI0IDE1LjU0QzExLjMzMzYgMTUuNjQxNSAxMS40NDczIDE1LjcyMjUgMTEuNTczOCAxNS43Nzc5QzExLjcwMDMgMTUuODMzMyAxMS44MzY5IDE1Ljg2MTkgMTEuOTc1IDE1Ljg2MTlDMTIuMTEzMSAxNS44NjE5IDEyLjI0OTcgMTUuODMzMyAxMi4zNzYyIDE1Ljc3NzlDMTIuNTAyNyAxNS43MjI1IDEyLjYxNjMgMTUuNjQxNSAxMi43MSAxNS41NFonIGZpbGw9JyMwRTBFMEUnLz48L3N2Zz4=) no-repeat right 0 top 0;
            background-size: 20px
        }

        .sort-mobile .fillter {
            border: 1px solid #e3e7ef;
            border: 1px solid var(--gray100);
            border-radius: 56px;
            height: 36px;
            line-height: 34px;
            padding: 0 15px;
            font-size: 14px;
            margin-left: auto;
            cursor: pointer
        }

        .sort-mobile .fillter.active {
            display: none
        }

        .sort-mobile .fillter.active+.apply {
            display: block
        }

        .sort-mobile .apply {
            float: right;
            margin-top: -10px;
            display: none;
            font-size: 14px;
            color: #fff;
            height: 36px;
            line-height: 36px
        }

        .open-fillter .col_left .catalogue-wrap {
            display: block;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: #fff;
            z-index: 9899;
            padding: 0 10px
        }

        .open-fillter .col_left .catalogue-wrap .scrollbar-inner {
            max-height: calc(100vh - 60px)
        }

        .open-fillter .col_left .catalogue-wrap .catalogue.catalogue_final {
            border-top: 0
        }

        .tong_sp {
            font-size: 14px;
            margin-bottom: 20px
        }

        .width-article {
            max-width: 1030px;
            margin: 0 auto
        }

        .slide-other .title_cate {
            text-align: center;
            margin-bottom: 40px
        }

        @media (max-width: 480px) {
            .slide-other .title_cate {
                margin-bottom: 16px;
                text-align: left
            }
        }

        .article_other .title_cate {
            text-align: center;
            margin-bottom: 40px
        }

        @media (max-width: 480px) {
            .article_other .title_cate {
                margin-bottom: 0;
                text-align: left
            }
        }

        .box_stream {
            display: flex;
            flex-wrap: wrap
        }

        .box_stream .art_item {
            margin-bottom: 24px;
            float: left;
            width: 100%
        }

        .box_stream .art_item .ava {
            float: left;
            width: 288px;
            margin: 0 25px 0 0
        }

        .box_stream .art_item .content {
            overflow: hidden
        }

        .box_stream .art_item .content .tag {
            margin-bottom: 5px
        }

        .box_stream .art_item .content .title_news {
            font-size: 18px !important;
            font-weight: 600
        }

        @media (max-width: 1200px) {
            .box_stream .art_item .ava {
                width: 200px;
                margin-right: 15px
            }
        }

        @media (max-width: 991px) {
            .box_stream .art_item {
                padding: 0
            }
        }

        @media (max-width: 576px) {
            .box_stream .art_item .ava {
                width: 100%;
                margin: 0 0 15px;
                float: none
            }
        }

        .tag-other-prodcut {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 90px
        }

        .tag-other-prodcut h3 {
            background: #f3f5f8;
            background: var(--gray50);
            font-size: 14px;
            padding: 0 24px;
            height: 40px;
            line-height: 40px;
            font-weight: 600;
            display: inline-block;
            text-align: center;
            margin: 0 8px 8px 0
        }

        .box_search_null {
            text-align: center;
            max-width: 440px;
            color: #414956;
            font-size: 16px;
            margin: 0 auto 70px
        }

        .box_search_null img {
            display: block;
            margin: 0 auto
        }

        .box_search_null h4 {
            font-size: 24px;
            color: #0e0e0e;
            margin-bottom: 8px;
            font-family: "SF_Pro_Display"
        }

        .box_search_null .btn-default {
            color: #fff;
            margin-top: 32px;
            line-height: 56px;
            height: 56px
        }

        @media (max-width: 576px) {
            .box_search_null h4 {
                font-size: 20px
            }
        }

        .notifi-user {
            margin-bottom: 60px
        }

        .notifi-user .head {
            font-size: 16px;
            font-weight: 600
        }

        .notifi-user .head .option {
            margin-top: 8px
        }

        .notifi-user .head .option a {
            margin-left: 24px;
            font-size: 14px
        }

        @media (max-width: 1025px) {
            .notifi-user .head .option {
                margin-top: 2px
            }
        }

        @media (max-width: 576px) {
            .notifi-user .head {
                justify-content: center
            }

            .notifi-user .head .title_cate {
                width: 100%
            }

            .notifi-user .head .option {
                display: none
            }
        }

        .notifi-user .list-notifi li {
            display: flex;
            padding: 24px 25px 18px;
            font-size: 16px;
            margin-bottom: 0;
            cursor: pointer;
            border: 1px solid #e3e7ef;
            border-bottom: 0;
            position: relative
        }

        .notifi-user .list-notifi li:last-child {
            border-bottom: 1px solid #e3e7ef
        }

        .notifi-user .list-notifi li .delete {
            opacity: 0
        }

        .notifi-user .list-notifi li:hover {
            background: #f3f5f8;
            background: var(--gray50)
        }

        .notifi-user .list-notifi li:hover .delete {
            opacity: 1
        }

        .notifi-user .list-notifi li.active {
            background: #d1f5f9;
            background: var(--color_main_hover)
        }

        .notifi-user .list-notifi li .content {
            position: relative;
            width: 91%;
            width: calc(100% - 28px);
            padding-left: 32px
        }

        .notifi-user .list-notifi li .content .tag {
            color: #06c1d4;
            color: var(--color_main);
            font-weight: 600
        }

        .notifi-user .list-notifi li .content .time {
            color: #7a8088;
            color: var(--gray500);
            font-size: 12px;
            font-weight: 600;
            margin-left: 15px
        }

        .notifi-user .list-notifi li .content p {
            margin-bottom: 0;
            margin-top: 14px;
            padding: 0
        }

        @media (max-width: 576px) {
            .notifi-user .list-notifi li {
                padding: 16px;
                margin: 0 -15px;
                border-left: 0;
                border-right: 0
            }
        }

        #login-popup .back_step {
            display: none
        }

        @media (max-width: 767px) {
            #login-popup {
                min-height: 100vh;
                min-height: calc(var(--vh, 1vh)*100)
            }

            #login-popup .back_step {
                display: block;
                width: 100%;
                background: #fff;
                z-index: 998;
                padding: 22px 30px 22px 18px;
                text-align: center
            }

            #login-popup .back_step .back {
                position: absolute;
                left: 16px;
                top: 18px;
                cursor: pointer
            }

            #login-popup .back_step .title_cate {
                margin-bottom: 0;
                font-size: 16px;
                font-weight: 700;
                color: transparent
            }
        }

        .box-search-suggest {
            position: relative
        }

        .box-search-suggest input {
            width: 100%;
            height: 40px;
            font-size: 16px;
            font-weight: 300;
            padding: 0 60px 0 15px;
            border: 1px solid transparent;
            background: #f3f5f8;
            border-radius: 4px;
            outline: 0;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        .box-search-suggest input:active,
        .box-search-suggest input:focus {
            box-shadow: none
        }

        .box-search-suggest button {
            width: 50px;
            height: 40px;
            display: inline-block;
            position: absolute;
            top: 0;
            right: 0;
            border: none;
            background: none;
            cursor: pointer
        }

        .box-search-suggest .suggest-search {
            display: none
        }

        .box-search-suggest .suggest-search .scrollbar-inner {
            box-shadow: 0 2px 8px rgba(0, 0, 0, .25);
            max-height: 328px
        }

        .box-search-suggest .suggest-search .scrollbar-inner li a {
            padding: 15px 34px 15px 24px;
            display: block;
            font-size: 16px;
            border-bottom: 1px solid #e3e7ef;
            border-bottom: 1px solid var(--gray100);
            position: relative
        }

        .box-search-suggest .suggest-search .scrollbar-inner li a strong {
            font-weight: 600
        }

        @media (max-width: 991px) {
            .box-search-suggest .suggest-search .scrollbar-inner li a {
                padding: 12px 20px 12px 15px;
                font-size: 14px
            }
        }

        .box-search-suggest.active .suggest-search {
            display: block
        }

        @media (max-width: 991px) {
            #fb-root iframe {
                bottom: 72px !important;
                right: -2px !important
            }
        }

        .rte h1,
        .rte h2,
        .rte h3 {
            font-weight: 700;
            font-family: "SF_Pro_Display";
            font-size: 18px;
            color: #0e0e0e;
            margin-bottom: 24px;
        }

        .rte p {
            margin-bottom: 24px;
            font-size: 20px;
        }

        .rte .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar;
        }

        .rte table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
            font-size: 14px;
            border: 1px solid #e3e7ef;
        }

        .rte table p {
            margin-bottom: 0;
        }

        .rte table td,
        .rte table th {
            padding: .75rem;
            border: 1px solid #e3e7ef;
        }

        .rte table th {
            text-align: center;
            white-space: nowrap;
        }

        .rte b,
        .rte strong {
            font-weight: 600;
        }

        .rte ol,
        .rte ul {
            margin-bottom: 16px;
            padding-left: 20px;
        }

        .rte ol li:not(:last-child),
        .rte ul li:not(:last-child) {
            margin-bottom: 8px;
        }

        .rte ol li {
            list-style: decimal;
        }

        .rte .list-disc li {
            list-style: disc;
        }

        @media (max-width: 991px) {

            .rte h1,
            .rte h2,
            .rte h3,
            .rte p {
                margin-bottom: 16px;
            }

            .compare-detail {
                overflow-x: scroll;
                padding-top: 71px;
                margin-left: -15px;
                margin-right: -15px;
            }

            .page-compare #main {
                padding-top: 0;
            }

            .page-compare .header-mobile {
                display: none !important;
            }

            .page-compare .back_step {
                display: flex;
                align-items: center;
                padding: 22px 15px;
                text-align: center;
                position: fixed;
                width: 100%;
                left: 0;
                background: #fff;
                z-index: 2;
            }

            .page-compare .back_step .back {
                display: inline-block;
                line-height: 1;
            }

            .page-compare .back_step .title_cate {
                flex: 1;
                margin-bottom: 0;
                font-size: 16px;
            }

            .page-compare .compare-detail .warp-list-product {
                margin: 0;
            }

            .page-compare .compare-detail .compare-content-item {
                flex: 0 0 180px;
                width: 180px;
            }

            .page-compare .compare-detail .collapse-list {
                border-right: none;
                white-space: nowrap;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
            }

            .page-compare .compare-detail .compare-name {
                display: none;
            }

            .page-compare .compare-detail_info {
                margin: 0;
            }
        }

        @media (max-width: 590px) {
            .white-popup {
                border-radius: 0;
            }
        }

        .content_lightbox p {
            font-size: 16px;
        }

        .content_lightbox hr {
            border-top: 1px solid hsla(0, 0%, 43.9%, .5);
            margin: 18px 0;
        }

        .content_lightbox .button-bottom {
            justify-content: center;
        }

        .content_lightbox .button-bottom .btn {
            min-width: 143px;
            padding: 0 32px;
            border: none;
        }

        @media (max-width: 767px) {
            .content_lightbox {
                padding: 20px 16px;
            }
        }

        @media (max-width: 599px) {
            .content_lightbox .tab-login a {
                font-size: 18px;
            }
        }

        .login-popup .content_lightbox {
            padding: 17px;
        }

        .hide-close .mfp-close {
            display: none;
        }

        .tab-login {
            justify-content: center;
            border-bottom: 2px solid #f3f5f8;
            margin: -33px -33px 30px;
        }

        .tab-login a {
            font-size: 20px;
            width: 50%;
            text-align: center;
            color: #161616;
        }

        .tab-login a.active:before {
            content: "";
            background: #06c1d4;
            left: 0;
            right: 0;
            height: 2px;
            position: absolute;
            bottom: -2px;
        }

        .form-control {
            border: 1px solid #f2f2f2;
        }

        .form-control:focus {
            background: #f2f2f2;
            color: #050505;
            border: 1px solid #06c1d4;
            border: 1px solid var(--color_main);
            outline: 0;
            box-shadow: none;
        }

        .tong-quan__uudiem ul {
            padding-left: 20px;
        }

        .tong-quan__uudiem ul li {
            margin-bottom: 5px;
            list-style: disc;
        }

        .form-control,
        .header .search-input,
        .header .wrap-fill .list .items .ava * {
            transition: .5s ease;
            -webkit-transition: .5s ease;
        }

        .productdetail .service ul {
            padding-left: 16px;
        }

        .productdetail .service ul li {
            list-style-type: disc;
            margin-bottom: 3px;
        }

        .page-detail .sticky {
            top: 94px;
        }

        .page-detail .gifts {
            font-size: 14px;
            font-weight: 600;
            color: #000;
            margin-top: 12px;
        }

        .page-detail hr {
            border-top: 1px solid #e3e7ef;
            border-top: 1px solid var(--gray100);
            margin: 16px 0;
        }

        .page-detail .check-list .checkmark {
            top: auto;
            left: auto;
            bottom: 0;
            right: 0;
        }

        .page-detail .label-new {
            background: #21a453;
        }

        .page-detail .label-comming {
            background: #ed6e33;
        }

        .content-bottom .rte ul {
            padding-left: 18px;
        }

        .content-bottom .rte ul li {
            list-style: disc;
        }

        .content-bottom .rte ol {
            padding-left: 18px;
            list-style: decimal;
        }

        .content-bottom .rte ol li {
            list-style: inherit;
        }

        .content-bottom .rte p {
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .content-bottom .has-toggle .rte {
            max-height: 500px;
            overflow: hidden;
        }

        .content-bottom .box-tag {
            display: flex;
            margin-bottom: 56px;
            align-items: center;
        }

        .content-bottom .box-tag .title {
            font-size: 18px;
            font-weight: 600;
            margin-right: 10px;
        }

        @media (max-width: 576px) {
            .content-bottom .box-tag {
                margin-bottom: 16px;
            }
        }

        .sticky_detail {
            background: #fbfbfb;
            padding: 12px 0;
            position: fixed;
            bottom: 0;
            z-index: 98;
            left: 0;
            right: 0;
            box-shadow: 0 0 7px #d2d7e1;
            box-shadow: 0 0 7px var(--gray200);
        }

        .sticky_detail .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .sticky_detail__hotline span {
            font-size: 14px;
            color: #171c27;
            opacity: .5;
            font-weight: 600;
        }

        .sticky_detail__hotline strong {
            color: #171c27;
            color: var(--dark_gray);
            font-size: 24px;
            font-weight: 600;
            display: block;
        }

        .sticky_detail__right .sticky_detail__btn {
            display: flex;
            align-items: center;
        }

        .sticky_detail__right .price {
            font-size: 14px;
            color: #000;
            margin-right: 24px;
        }

        .sticky_detail__right .price strong {
            color: #d53b2a;
            font-size: 24px;
        }

        .sticky_detail__right .price .btn-default {
            width: 212px;
            display: none;
            margin: 0;
        }

        .sticky_detail__right .price .price_old {
            color: #000;
            font-size: 14px;
            text-decoration: line-through;
        }

        .sticky_detail__right .like {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .sticky_detail__right .like.active {
            color: #06c1d4;
            color: var(--color_main);
            background: #f3f5f8;
        }

        .sticky_detail__right .btn-default {
            height: 52px;
            line-height: 52px;
            font-size: 18px;
        }

        .sticky_detail__right .btn-default.add-cart {
            color: #fff;
        }

        .sticky_detail__right .btn-default:not(:last-child) {
            margin-right: 16px;
        }

        .sticky_detail__right .add-compare {
            background: #fff;
            border: 1px solid #ebf5f7;
            color: #0e0e0e;
            font-weight: 400;
        }

        @media only screen and (max-width: 1024px) and (min-width:700px) {
            .sticky_detail {
                padding: 14px 0;
            }

            .sticky_detail .container {
                justify-content: flex-start;
                align-items: center;
            }

            .sticky_detail__hotline strong {
                font-size: 20px;
            }

            .sticky_detail__right {
                margin-left: 40px;
            }

            .sticky_detail__right .price {
                margin-bottom: 0;
            }

            .sticky_detail__right .price strong {
                font-size: 24px;
            }

            .sticky_detail__right .sticky_detail__btn .btn-default {
                font-size: 16px;
                height: 40px;
                line-height: 40px;
            }
        }

        @media (min-width: 992px) {
            .sticky_detail .add-compare-mobile {
                display: none;
            }
        }

        @media (max-width: 767px) {
            .sticky_detail {
                padding: 16px 0 10px;
                bottom: inherit;
                top: 0;
                z-index: 9;
            }

            .sticky_detail__hotline {
                display: none;
            }

            .sticky_detail__right {
                width: 100%;
                align-items: start;
            }

            .sticky_detail__right .price {
                margin-bottom: 0;
            }

            .sticky_detail__right .price strong {
                font-size: 20px;
            }

            .sticky_detail .sticky_detail__btn {
                display: block;
                width: 100%;
                flex: 1;
            }

            .sticky_detail .sticky_detail__btn .btn-default {
                margin-top: 0;
                margin-right: 0;
                padding: 0 10px;
                width: 100%;
                font-size: 14px;
                justify-content: center;
            }

            .sticky_detail .sticky_detail__btn .add-compare {
                display: none;
            }

            .sticky_detail .sticky_detail__btn .add-compare-mobile {
                display: block;
                margin-top: 10px;
                font-size: 12px;
            }

            .sticky_detail .sticky_detail__btn .add-compare-mobile .icon {
                width: 16px;
                height: 16px;
                color: #06c1d4;
                display: inline-block;
                vertical-align: middle;
                margin-right: 4px;
            }

            .sticky_detail .sticky_detail__btn .add-compare-mobile span {
                display: inline-block;
                vertical-align: middle;
            }

            .sticky_detail .like {
                margin: 10px 0 0 10px;
                width: 30px;
                height: 30px;
            }

            .sticky_detail .btn-default {
                height: 36px;
                line-height: 36px;
                font-size: 14px;
                margin: 10px 10px 0 0;
                padding: 0 10px;
            }
        }

        @media (max-width: 375px) {
            .sticky_detail .sticky_detail__right .price {
                margin-right: 15px;
            }

            .sticky_detail .sticky_detail__right .price strong {
                font-size: 16px;
            }

            .sticky_detail .sticky_detail__btn .btn-default {
                font-size: 12px;
            }
        }

        .sticky_compare {
            background: #fbfbfb;
            border-top: 1px solid #e3e7ef;
            border-top: 1px solid var(--gray100);
            padding: 24px 0;
            position: fixed;
            bottom: 0;
            z-index: 98;
            left: 0;
            right: 0;
        }

        .sticky_compare .list {
            background: #fff;
            border: 1px solid #e3e7ef;
            width: calc(100% - 240px);
            display: flex;
        }

        .sticky_compare .list .items {
            width: 25%;
            padding: 8px 30px 8px 8px;
            border-left: 1px solid #e3e7ef;
            border-left: 1px solid var(--gray100);
            position: relative;
        }

        .sticky_compare .list .items:first-child {
            border-left: 0;
        }

        .sticky_compare .list .items .ava {
            width: 48px;
            height: 48px;
            float: left;
            margin-right: 8px;
        }

        .sticky_compare .list .items .content {
            overflow: hidden;
        }

        .sticky_compare .list .items .name {
            line-height: 1.2;
            margin-bottom: 4px;
        }

        .sticky_compare .list .items .code {
            font-size: 12px;
            color: #7a8088;
        }

        .sticky_compare .list .items .delete {
            position: absolute;
            top: 0;
            right: 10px;
            font-size: 22px;
        }

        .sticky_compare .btn-control {
            width: 240px;
            padding-left: 60px;
            text-align: center;
        }

        .sticky_compare .btn-control .btn-default {
            color: #fff;
            font-size: 14px;
            line-height: 36px;
            height: 36px;
        }

        .sticky_compare .btn-control .cancel {
            display: block;
            font-weight: 600;
            margin-top: 24px;
        }

        @media (max-width: 1025px) {
            .sticky_compare .list {
                width: calc(100% - 150px);
            }

            .sticky_compare .list .items {
                width: 33.33%;
            }

            .sticky_compare .btn-control {
                width: 150px;
                padding-left: 30px;
            }

            .sticky_compare .btn-control .cancel {
                margin-top: 10px;
            }
        }

        @media (max-width: 991px) {
            .sticky_compare {
                padding: 8px 0;
            }

            .sticky_compare .list {
                width: 100%;
                flex-wrap: wrap;
                border: 1px solid #e3e7ef;
                border: 1px solid var(--gray100);
            }

            .sticky_compare .list .items {
                width: 50%;
                border-right: 1px solid #e3e7ef;
                border-right: 1px solid var(--gray100);
                border-top: 1px solid #e3e7ef;
                border-top: 1px solid var(--gray100);
                border-left: 0;
            }

            .sticky_compare .list .items:nth-child(2),
            .sticky_compare .list .items:nth-child(4) {
                border-right: 0;
            }

            .sticky_compare .list .items:first-child,
            .sticky_compare .list .items:nth-child(2) {
                border-top: 0;
            }

            .sticky_compare .btn-control {
                margin-top: 10px;
                width: 100%;
                padding-left: 0;
            }

            .sticky_compare .btn-control .cancel {
                margin-top: 10px;
            }
        }

        @media (max-width: 576px) {
            .sticky_compare {
                padding: 8px 0;
            }

            .sticky_compare .list {
                width: 100%;
                overflow-y: scroll;
                height: 130px;
            }

            .sticky_compare .list .items {
                width: 100%;
                border-right: 0;
                min-height: 66px;
            }

            .sticky_compare .list .items:nth-child(2) {
                border-top: 1px solid #e3e7ef;
                border-top: 1px solid var(--gray100);
            }
        }


        .detail_tin {
            position: relative;
            margin-bottom: 55px;
            color: #171c27;
            color: var(--dark_gray);
            margin-top: 40px;
            font-size: 18px;
        }

        .detail_tin h1 {
            font: 700 32px "SF_Pro_Display";
            font: 700 32px var(--font_main);
            margin: 0 auto 24px;
            line-height: 1.4;
            text-align: center;
            max-width: 850px;
        }

        .detail_tin .min-width {
            max-width: 656px;
            margin: 0 auto;
        }

        .detail_tin .author {
            text-align: center;
            margin-bottom: 40px;
            font-size: 14px;
        }

        .detail_tin .author .ava {
            width: 40px;
            height: 40px;
            margin: 0 auto 10px;
        }

        .detail_tin .author span {
            display: block;
        }

        .detail_tin ul {
            padding-left: 20px;
            margin-bottom: 16px;
        }

        .detail_tin ul li {
            margin-bottom: 5px;
            list-style-type: disc;
        }

        .detail_tin ol {
            padding-left: 20px;
            margin-bottom: 16px;
        }

        .detail_tin ol li {
            margin-bottom: 5px;
            list-style-type: inherit;
        }

        .detail_tin table {
            margin-bottom: 16px;
            border-collapse: collapse;
        }

        .detail_tin table td,
        .detail_tin table th {
            border: 1px solid #171c27;
            padding: 5px;
        }

        .detail_tin h2,
        .detail_tin h3 {
            font: 700 20px "SF_Pro_Display";
            font: 700 20px var(--font_main);
            margin: 0 0 20px;
            line-height: 1.2;
        }

        .detail_tin h2 {
            font-size: 22px;
        }

        .detail_tin p {
            line-height: 1.5;
            margin-bottom: 16px;
        }

        .detail_tin p a {
            color: #06c1d4;
            color: var(--color_main);
            text-decoration: underline;
            text-underline-position: under;
        }

        .detail_tin p img {
            max-width: 100%;
            margin: 0 auto;
            display: block;
        }

        .detail_tin .social {
            text-align: center;
        }

        .detail_tin .social p {
            text-transform: uppercase;
        }

        .detail_tin .social a {
            display: inline-block;
            margin: 0 10px;
            color: #34608c;
            width: 30px;
            font-size: 15px;
            height: 30px;
            border: 1px solid #34608c;
            line-height: 25px;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            transition: .5s ease;
            -webkit-transition: .5s ease;
        }

        @media (max-width: 991px) {
            .detail_tin {
                margin-top: 0;
                font-size: 16px;
                margin-bottom: 30px;
            }

            .detail_tin h1 {
                font-size: 20px;
            }

            .detail_tin .author {
                margin-bottom: 12px;
            }

            .detail_tin p {
                margin-bottom: 10px;
            }

            .detail_tin h2,
            .detail_tin h3 {
                margin-bottom: 15px;
                font-size: 18px;
            }
        }


        .account-information__left {
            width: 209px;
        }

        .account-information__right {
            width: 1015px;
            width: calc(100% - 209px);
        }

        @media (max-width: 991px) {
            .account-information__left {
                display: none;
            }

            .account-information__right {
                width: 100%;
            }

            .account-information__right .mt30 {
                margin-top: 0 !important;
            }
        }

        .account-information .menu__nav {
            font-size: 16px;
            border-left: 1px solid #e3e7ef;
            padding-left: 10px;
        }

        .account-information .menu__nav li {
            margin-bottom: 16px;
            position: relative;
        }

        .account-information .menu__nav li.active:before {
            content: "";
            background: #06c1d4;
            background: var(--color_main);
            position: absolute;
            left: -13px;
            width: 3px;
            height: 24px;
        }

        .account-information .menu__nav li.active a {
            font-weight: 600;
        }

        .min-width {
            max-width: 808px;
        }

        .choose-ava {
            display: flex;
            align-items: center;
        }

        .choose-ava .ava {
            width: 72px;
            height: 72px;
            margin-right: 8px;
            border-radius: 50%;
            overflow: hidden;
        }

        .choose-ava .ava img {
            width: 100%;
            height: auto;
        }

        .choose-ava .ava-text {
            width: 72px;
            height: 72px;
            line-height: 72px;
            text-align: center;
        }

        .choose-ava .choose {
            cursor: pointer;
        }

        .choose-ava .choose input {
            display: none;
        }

        .choose-ava .choose span {
            color: #414956;
            font-weight: 600;
            font-size: 14px;
            border: 1px solid #e3e7ef;
            border-radius: 56px;
            padding: 0 20px;
            height: 36px;
            line-height: 35px;
            text-align: center;
            display: inline-block;
        }

        @media (max-width: 991px) {
            .choose-ava {
                flex-wrap: wrap;
                justify-content: center;
            }

            .choose-ava .ava {
                margin: 0 0 16px;
            }

            .choose-ava .choose {
                width: 100%;
                text-align: center;
            }
        }

        .history-order__mobile {
            display: none;
            font-size: 14px;
        }

        .history-order__mobile .hed {
            cursor: pointer;
            font-size: 16px;
            margin: 0 -15px;
            position: relative;
            padding: 18px 30px 18px 18px;
            border-bottom: 1px solid #e3e7ef;
            border-bottom: 1px solid var(--gray100);
            text-align: center;
        }

        .history-order__mobile ul {
            margin: 0 -15px;
        }

        .history-order__mobile ul li {
            padding: 14px 16px;
            border-bottom: 1px solid #e3e7ef;
            border-bottom: 1px solid var(--gray100);
        }

        .history-order__mobile ul li .title {
            font-size: 14px;
            margin-bottom: 8px;
        }

        .back_step,
        .page-step .back_step {
            display: none;
        }

        @media (max-width: 480px) {
            .page-step main {
                padding: 0;
            }

            .page-step .fixed_toptop,
            .page-step footer,
            .page-step header {
                display: none;
            }

            .page-step .back_step {
                display: block;
                width: 100%;
                background: #fff;
                z-index: 998;
                padding: 22px 30px 22px 18px;
                text-align: center;
                border-bottom: 1px solid #e3e7ef;
                border-bottom: 1px solid var(--gray100);
            }

            .page-step .back_step .back {
                position: absolute;
                left: 16px;
                top: 18px;
                cursor: pointer;
            }

            .page-step .back_step .title_cate {
                margin-bottom: 0;
                font-size: 16px;
                font-weight: 700;
            }

            .account-information__right .items_dropdown {
                position: relative;
                margin-left: -15px;
                margin-right: -15px;
                border-bottom: 1px solid #e3e7ef;
                border-bottom: 1px solid var(--gray100);
            }

            .account-information__right .items_dropdown.mb40 {
                margin-bottom: 0 !important;
            }

            .account-information__right .items_dropdown .title_cate {
                cursor: pointer;
                font-size: 16px;
                font-weight: 600;
                margin-bottom: 0;
                position: relative;
                padding: 18px 30px 18px 18px;
            }

            .account-information__right .items_dropdown .title_cate.active+.border-warp {
                display: block;
            }

            .account-information__right .border-warp {
                border: 0 !important;
                padding: 6px 16px 16px !important;
                position: relative;
                display: none;
            }

            .list-product__like {
                margin-top: 24px !important;
            }

            .history-order {
                display: none;
            }

            .history-order__mobile {
                display: block;
            }
        }

        .page-login .back_step {
            border-bottom-color: transparent;
        }

        .page-login .title_cate {
            color: transparent;
        }

        .page-login .tab-default {
            border-bottom-width: 3px;
        }

        .page-login .tab-default a {
            width: 50%;
            text-align: center;
            height: 55px;
            line-height: 55px;
            font-size: 18px
        }

        .page-login .tab-default a:before {
            bottom: -3px;
        }

        .page-login .tab-container {
            padding: 0 16px;
        }

        .page-login .button-bottom .btn {
            display: block;
            width: 100%;
        }

        .row1 {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }

        .row1.center {
            justify-content: center;
        }

        .row1.left {
            justify-content: left;
        }

        footer {
            font-size: large;
            height: 150px;
            grid-area: footer;
            background-color: #151B54;
            color: #ffffff;
            padding: 0 12rem 0;
        }

        footer .logo {
            width: 60px;
            height: 60px;
        }

        @media (max-width: 1254px) {
            .fs-header .f-hdtop {
                padding: 0 10px;
            }
        }

        @media (max-width: 1025px) {
            .breadcrumb {
                margin-bottom: 30px;
            }

            .mb56 {
                margin-bottom: 24px;
            }

            .title_cate {
                font-size: 25px;
                margin-bottom: 15px;
            }

            .btn-default {
                padding: 0 25px;
            }
        }

        @media (min-width: 768px) {
            .close-modal {
                display: none;
            }
        }

        @media (max-width: 991px) {
            .container {
                max-width: 768px;
            }

            .fs-header .f-hdtop .fs-search {
                position: absolute;
                right: 0;
                top: 12px;
            }

            .fs-header .f-hdtop .fs-search>form {
                max-width: 50px;
                float: right;
            }

            .fs-header .f-hdtop .fs-search>form input {
                padding: 0;
                width: 0;
            }

            .fs-header .f-hdtop .fs-search>form button {
                background: none;
                font-size: 0;
            }

            .fs-header .f-hdtop .fs-hdmn,
            .list-product .items .more {
                display: none;
            }

            .breadcrumb {
                margin-bottom: 20px;
            }

            .fixed_toptop {
                top: inherit;
                bottom: 15px;
                right: 15px;
            }

            .fixed_toptop .hotline {
                width: 48px;
                height: 48px;
                line-height: 48px;
                margin-bottom: 0;
                margin-left: 10px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .fixed_toptop #to_top {
                display: none !important;
            }
        }

        @media (max-width: 768px) {
            #modal-content {
                max-width: 100%;
                width: 100% !important;
                min-height: 100vh;
            }

            #modal-content .content_lightbox {
                padding: 0 17px;
            }

            #modal-content .tab-login {
                margin: 0 -17px 24px !important;
                overflow: hidden;
            }

            #modal-content .tab-login a.active:before {
                bottom: 0;
            }

            .close-modal {
                height: 40px;
                text-align: right;
                padding: 8px 6px;
                background: #fff;
            }

            .close-modal .icon {
                width: 24px;
                height: 24px;
            }
        }

        @media (max-width: 767px) {
            .header-pc {
                display: none;
            }
        }

        @media (max-width: 576px) {
            #pagination {
                display: none;
            }

            iframe {
                max-width: 100%;
            }


            .title_cate {
                font-size: 20px;
            }

            .breadcrumb {
                display: none;
            }
        }

        @media (max-width: 480px) {

            .title_cate {
                font-size: 20px;
                margin: 0 0 16px;
            }

            .view-more__border {
                margin-top: 16px;
            }

            .view-more__border a {
                height: 36px;
                font-size: 14px;
                line-height: 36px;
            }

            .folder-show .breadcrumb {
                display: flex;
            }

            .tag-other-prodcut {
                display: block;
                margin-top: 32px;
                width: calc(100% + 15px);
                margin-right: -15px;
                overflow-x: scroll;
                overflow-y: hidden;
                -webkit-overflow-scrolling: touch;
                white-space: nowrap;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
            }
        }

        .nuxt-progress {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            width: 0;
            opacity: 1;
            transition: width .1s, opacity .4s;
            background-color: #06c1d4;
            z-index: 999999;
        }
    </style>
</head>

<body>
<noscript data-n-head="ssr" data-hid="gtm-noscript" data-pbody="true">
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-THD95QT&" height="0" width="0" style="display:none;visibility:hidden" title="gtm"></iframe>
        </noscript>
        <div data-server-rendered="true" id="__nuxt">
            <!---->
            <div id="__layout">
                <div id="app" class="min-h-screen flex flex-col">
                    <div data-fetch-key="Header:0" class="sticky_zindex relative z-20">
                        <div id="appleid-signin" data-color="black" data-border="true" data-type="sign in" style="display:none;"></div>
                        <header id="header" class="setcion header header-mobile">
                            <div class="f-hdtop flex items-center h-15 w-full bg-white">
                                <a href="index.html" class="fs-logo nuxt-link-active">
                                    <img src="Images/hcmut.png" width="40" height="40" alt="hcmut">
                                </a>
                                <div class="header__right text-dark-gray">
                                    <div class="gio-hang">
                                        
                                        <a id="cart-mobile" href="javascript:;" class="onclick">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 icon icon-icons">
                                                    <use href="/_nuxt/9342dacb4eaef0aefc03c6d91ee1fb27.svg#i-cart" xlink:href="/_nuxt/9342dacb4eaef0aefc03c6d91ee1fb27.svg#i-cart"></use>
                                                </svg>
                                            </span>
                                            <!---->
                                        </a>
                                        <div class="wrap-fill" style="display:none;">
                                            <div class="title flex justify-center">
                                                <strong>0 sản phẩm</strong>
                                                trong giỏ hàng
                 <a href="javascript:;" class="close">×</a>
                                            </div>
                                               <div class="note">Bạn chưa có sản phẩm nào trong giỏ hàng</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                    </div>
                    <main id="main" class="md:pt-6 mb-auto border-t border-gray-100 md:border-t-0">
                        
			<div class="container clearfix">
                            <div>
                                <div>
                                    <div itemtype="http://schema.org/Product" itemscope="itemscope" class="page-detail pt-4 md:pt-0">
                                        <section class="content-middle productdetail clearfix mb-7 md:mb-14">
                                            <div class="md:flex">
                                                <div class="productdetail__thumb md:w-1/2 md:pr-6">
                                                    <div class="block md:hidden">
                                                        <?php echo $product['pro_name'] ?>
						    </div>
                                                    <div class="box-large">
                                                        <div class="box-top">
                                                            <img id="img-large" class="img-fluid" src="Images/Images-Dell-XPS15-7590/item01.jpg" alt="">
                                                        </div>
							<div class="box-bottom">
							<div>
								<a href="#" onclick="changeImage(1)"><img src="Images/Images-Dell-XPS15-7590/item01.jpg" alt=""></a>
							</div>
							<div>
								<a href="#" onclick="changeImage(2)"><img src="Images/Images-Dell-XPS15-7590/item02.jpg" alt=""></a>
							</div>
							<div>
								<a href="#" onclick="changeImage(3)"><img src="Images/Images-Dell-XPS15-7590/item03.jpg" alt=""></a>
							</div>
							<div>
								<a href="#" onclick="changeImage(4)"><img src="Images/Images-Dell-XPS15-7590/item04.jpg" alt=""></a>
							</div>
						    </div>
                                                  </div>
                                                </div>
					     
                                                <div class="text-sm productdetail__info md:w-1/2">
                                                    <div class="hidden md:block">
                                                        <h2 itemprop="name" class="mb-4 font-bold leading-tight font-primary text-2rem">
                                                            <?php echo $product['pro_name'] ?> (Chính hãng)
                                                        </h2>
                                                    <div class="flex flex-col justify-between mb-2 md:flex-row">
                                                        <div class="flex-1 mb-4 description">
                                                            <div itemprop="brand" itemtype="http://schema.org/Brand" itemscope="itemscope" class="flex items-center mb-3">
                                                                <span>Thương hiệu:</span>&nbsp;
                                                                
                                                                    <img class="w-10" src=<?php echo $product['url'] ?> alt="Dell">
                                                                
                                                                <meta itemprop="name" content="Dell">
                                                            </div>
                                                            <div itemprop="description" class="pr-12">
                                                                <p>
                                                                    <strong>XPS7590</strong>
                                                                </p>
                                                                <ul>
                                                                    <li>
                                                                        <strong>Vi xử lý</strong>: <?php echo $product['processor'] ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Màn hình</strong>: <?php echo $product['display'] ?> 
                                                                    </li>
                                                                    <li>
                                                                        <strong>RAM</strong>: <?php echo $product['memory'] ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Card đồ họa</strong>: <?php echo $product['graphics'] ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Lưu trữ</strong>: <?php echo $product['storage'] ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Pin</strong>: <?php echo $product['battery'] ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Kết nối chính</strong>: <?php echo $product['ports'] ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Cân nặng</strong>: <?php echo $product['weight'] ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Hệ điều hành</strong>: <?php echo $product['os'] ?>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="mt-4 changer_color" style="font-size:16px;">
                                                                <div>
                                                                    <strong>Màu sắc</strong>: Đen
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="mb-4 text-sm service text-dark-gray">
                                                                <div class="p-4 border border-gray-100 rounded min-w-262px max-w-262px">
                                                                    <div class="mb-2 text-base font-semibold leading-6">Bảo hành</div>
                                                                    <div>
                                                                        <ul>
                                                                            <li>
                                                                                Sản phẩm <strong>chính hãng</strong>
                                                                            </li>
                                                                            <li>
                                                                                Bảo hành <strong>12 tháng</strong> tại TTBH BKU
                                                                            </li>
                                                                            <li>
                                                                                <strong>Bảo hành tại nhà 24/7</strong>
                                                                            </li>
                                                                            <li>Đổi mới trong <strong>15 ngày</strong> đầu tiên
									</ul>
                                                                    </div>
                                                                    <!---->
                                                                </div>
                                                            </div>
                                                                <div class="p-4 text-red border border-gray-100 rounded min-w-262px max-w-262px">Giảm giá <strong>800.000đ</strong> khi mua các sản phẩm khác của Dell.</div>
                                                         </div>
                                                </div>   
					</div>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <div itemprop="offers" itemtype="http://schema.org/AggregateOffer" itemscope="itemscope" class="tr cau_hinh">
                                                        <!---->
                                                        <meta itemprop="offerCount" content="3">
                                                        <meta itemprop="priceCurrency" content="VND">
                                                        <meta itemprop="itemCondition" content="https://schema.org/UsedCondition">
                                                        
                                                            
                                                            
                                                                <!---->
                                                                <meta itemprop="highPrice" content="28990000">
                                                                <div class="relative items-start md:flex">
                                                                    
                                                                    <div class="text-sm font-semibold price md:text-right">
                                                                        
									<div class="text-red-400" style="color: #d53b2a;">28.990.000 ₫</div>
                                                                        <!---->
                                                                    </div>
                                                                </div>
                                                                <!---->
                                                      </div>
                                           </div>	
                                                        
                                                    
                                                    <!---->
                                                </div>
                                        </section>
				   </div>
                                        <section class="content-bottom clearfix">
                                            <div class="min-container">
                                                <div class="tong-quan">
                                                    <div class="content-danhgia mb-10 has-toggle">
                                                        <h2 class="font-primary font-bold text-xl md:text-2rem mb-4 md:mb-13 leading-tight">Đánh giá chi tiết</h2>
                                                        <!---->
                                                        <div class="rte">
                                                            <p>XPS 15 7590 là dòng laptop nổi tiếng đến từ Dell. Đây là mẫu laptop với hiệu năng cao đi kèm với màn hình hiện đại, bắt mắt. Dell XPS 15 7590 sẽ phù hợp với các khách hàng làm việc đòi hỏi sức mạnh phần cứng nhưng vẫn muốn có được sự cơ động, linh hoạt.</p>
                                                        </div>
                                                     </div>
                                                </div>
                                            </div>
                                            <!---->
                                            <!---->
					</section>
				   </div>
				</div>
				
			   </div>
                    </main>
                    <div>
                        <!---->
			<footer class="row1">
                            <div>
                		<img class="logo" src="Images/hcmut.png" alt="Logo" />
            		    </div>
           		    <div>
                		<ul>
                    		<li><h2 class="normal">Chính sách</h2></li>
                    		<li><a href="#">Bảo hành</a></li>
                    		<li><a href="#">Vận chuyển</a></li>
                    		<li><a href="#">Thanh toán</a></li>
                		</ul>
            		    </div>
            		    <div>
                		<ul>
                    		<li><h2 class="normal">Hệ thống cửa hàng</h2></li>
                    		<li>268 Lý Thường Kiệt, Phường 14, Quận 10, Thành phố Hồ Chí Minh</li>
                    		<li><a href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+B%C3%A1ch+khoa+-+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+Qu%E1%BB%91c+gia+TP.HCM/@10.7733743,106.6606193,15z/data=!4m5!3m4!1s0x0:0xef77cd47a1cc691e!8m2!3d10.7733743!4d106.6606193">
                        	Chỉ đường</a></li>
                		</ul>
            		    </div>
                        </footer>
		    <!---->
                </div>
            </div>
        </div>
    </div>
       
        
	<script src="js/js-Dell-XPS15-7590/fun.js"></script>
	<script src="js/bootstrap.min.js"></script>
    </body>
</html>