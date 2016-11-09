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
 

## 功能介绍
+ 支持简单路由如：index/index
+ 支持模板引擎
+ 支持orm模型
+ 友好调试界面
+ 善良的log记录
+ mvc功能基本支持


## 1.1 - 版本新增功能概述
+ 自定义路由规则
+ 数据缓存（redis/memcache）模块添加
+ 实用文件操作功能（**excel word**文件操作）
+ 引入前端框架（待定）


### 志愿
希望自己能通过这个过程掌握更多的技能，漫漫人生路，唯有代码解千愁 哈哈哈

