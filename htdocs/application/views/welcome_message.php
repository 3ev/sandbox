<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>3ev Sandbox</title>
<style>
* { margin: 0; padding: 0; }
body { margin: 0; padding: 0; font-family: Tahoma, Geneva, sans-serif; background: #000; }
h1 { color: #434343; text-align: center; font-size: 14px; margin-bottom: 10px; }
p { color: #434343; text-align: center; font-size: 14px; line-height: 140%;  }
p a { color: white; }
ul { padding-bottom: 50px; }
li { padding: 10px 0; list-style-type: none;}
li a { color: #999; text-decoration: none; font-size: 13px;}
li a:hover { text-decoration: underline;}
.container { width: 350px; margin: 0 auto; margin-top: 80px; }
.container img { margin: 0 auto; width: 165px; display: block; padding-bottom: 60px; }
</style>
</head>
<body>
<div class="container">
<img src="http://www.3ev.com/fileadmin/templates/images/3ev-top-logo.png" alt="3ev " />
<h1>The 3ev Sandbox</h1>
<ul>
<?php foreach ($news as $news_item): ?>
<li><a href="<?php echo $news_item->webUrl ?>"><?php echo $news_item->webTitle ?></a>
<?php endforeach; ?>
<ul>
</div>
</body>
</html>