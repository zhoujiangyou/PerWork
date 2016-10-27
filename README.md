# PerMVC
简单mvc小框架

# 请在根目录下新建.htaccess文件以便重写url 隐藏index.php
# 并将下列内容复制粘贴
* <IfModule mod_rewrite.c>
*  Options +FollowSymlinks
*  RewriteEngine On
*    #默认情况
*    RewriteCond %{REQUEST_FILENAME} !-f
*    RewriteRule ^/?(.*)$ index.php?s=/$1 [QSA,PT,L]
*</IfModule>

