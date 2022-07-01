# JWT for ThinkPHP6

## 概述

使用简单的JWT生成与解码库，量身定做TP6相关验证

## 安装

- 运行 ***composer*** 命令:

        composer require fazi/thinkphp6-jwt

   或者在根目录的 `composer.json` 文件中添加：

        "require": {
            "fazi/thinkphp6-jwt": "^0.0.1"
        }
        
   然后运行命令 `composer install` 安装依赖。
   
-   依赖安装成功后，ThinkPHP6 根目录运行
        
        php think jwt:init
        
    将在 ***.env*** 中添加 JWT的KEY配置文件!!。
   
 ## 快速使用
 
 - 配置
 
    ***.env*** 里配置好JWT的KEY！！
    
    
             
 - 目前未集成ThinkPHP6上传功能。所以需要在需要OSS上传的时候调用。
 
        use fazi\jwt\JWTAuth; 
        
        
 - 支持facade调用(使用默认‘default’ bucket):
 
        use fazi\jwt\facade\JWTAuth;
        JWTAuth::create();
 
## 更新
2022-07-01 创建包


## 后言

欢迎访问我的个人主页 https://www.fazi.me/
