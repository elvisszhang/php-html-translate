# 项目介绍
tranlate text/html into another language

# 文件说明

## 文件结构
config/ 配置文件存放的位置
src/    源代码
tests/  测试文件位置
.gitignore git忽略文件
LICENSE.md 项目许可证
README.md  项目介绍
composer.json composer配置文件
phpunit.xml phpunit配置文件

## 关于.gitignore配置
```
vendor
.composer.lock
```
执行composer install会生成composer.lock文件, 并将相关的依赖下载到vendor文件夹, 所以这两个文件是需要忽略的

# 开发工具

## 安装 composer

## 配置 composer 中国镜像

方法一： 修改 composer 的全局配置文件（推荐方式）
打开命令行窗口（windows用户）或控制台（Linux、Mac 用户）并执行如下命令：
```
composer config -g repo.packagist composer https://packagist.phpcomposer.com
```

方法二： 修改当前项目的 composer.json 配置文件：
打开命令行窗口（windows用户）或控制台（Linux、Mac 用户），进入你的项目的根目录（也就是 composer.json 文件所在目录），执行如下命令：

```
composer config repo.packagist composer https://packagist.phpcomposer.com
```
上述命令将会在当前项目中的 composer.json 文件的末尾自动添加镜像的配置信息（你也可以自己手工添加）：

```
"repositories": {
    "packagist": {
        "type": "composer",
        "url": "https://packagist.phpcomposer.com"
    }
}
```
以 laravel 项目的 composer.json 配置文件为例，执行上述命令后如下所示（注意最后几行）：

```
{
    "name": "laravel/laravel",
    "description": "The Laravel Framework.",
    "keywords": ["framework", "laravel"],
    "license": "MIT",
    "type": "project",
    "require": {
        "php": ">=5.5.9",
        "laravel/framework": "5.2.*"
    },
    "config": {
        "preferred-install": "dist"
    },
    "repositories": {
        "packagist": {
            "type": "composer",
            "url": "https://packagist.phpcomposer.com"
        }
    }
}
```
OK，一切搞定！试一下 composer install 来体验飞一般的速度吧！

## 配置 phpunit

## 上传到 packagist

如果github中存在多个branch, 则在生成composer模块的时候会打包对应dev-分支名版本号, 如果不希望出现dev, 也就是看起来是正式版本, 需要在github打tag, 此时会以tag的名称作为版本号而不会加上dev

# 参考文档

编写自己的composer项目 https://www.jianshu.com/p/7c466c23a877
百度翻译API文档 http://fanyi-api.baidu.com/api/trans/product/apidoc
PHP Simple HTML DOM Parser 中文手册 http://microphp.us/plugins/public/microphp_res/simple_html_dom/manual.htm