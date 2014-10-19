<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{title}} </title>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
<!--[if lte IE 8]>
   <link rel="stylesheet" href="/public/admin/css/layouts/side-menu-old-ie.css">
<![endif]-->
<!--[if gt IE 8]><!-->
   <link rel="stylesheet" href="/public/admin/css/layouts/side-menu.css">
<!--<![endif]-->
<link rel="stylesheet" type="text/css" href="/public/admin/css/jquery.noty.css">

<script src="/public/admin/js/jquery.js"></script>
<script src="/public/admin/js/jquery.noty.min.js"></script>
<script src="/public/admin/spin.js"></script>
<script src="/public/admin/functions.js"></script>
<script src="/public/ckeditor/ckeditor.js"></script>
</head>
<body>
{% if success %}
 <script>success('{{success}}');</script>
{% elseif error %}
 <script>error('{{error}}');</script>
{% endif %}
<div id="loader"></div>
{% include 'admin/sidebar.tpl'%}