# PerMVC 简介

简单个人框架，简单粗暴。适合小功率开发。

## 环境配置
+ 下载文件
+ 入口文件为index.php
+ 在根目录下新建.htaccess文件，并将下列代码复制粘贴保存

> ```
> <IfModule mod_rewrite.c>
  Options +FollowSymlinks
  RewriteEngine On
    #默认情况
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^/?(.*)$ index.php?s=/$1 [QSA,PT,L]
 </IfModule>
> ```

+ 访问localhost:80/index.php(也可以省略index.php)，默认控制器为index/index

+ 查看文档可访问doc/index.html
 
