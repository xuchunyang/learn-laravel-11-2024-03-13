# learn-laravel-11-2024-03-13

https://github.com/xuchunyang/learn-laravel-11-2024-03-13/assets/4550353/18e2f430-9c17-4c92-a31a-7849e558c774

从头尝试下昨天刚发布的 Laravel 11。

## 体验内容

- 默认的更简单的目录结构，现在看不懂的文件少了一些；
- 默认的 SQLite 数据库，现在创建 Laravel 应用后，无需任何配置即可使用数据库了；
- 默认的 /up 健康检查，不知道和 `Route::get('/ok', fn () => 'OK');` 有啥区别，此外使用外网的 Bunny 字体和 Tailwind 对大陆不大友好；
- 官方的 WebSocket 支持，Laravel Reverb，self host 方案
  - 之前没有用过 Laravel Broadcasting，还涉及到 Event、Queue 和 WebSocket，新概念比较多，不容易上手
  - 除非使用 Forge，否则自己第一次部署肯定麻烦
  - 本地试了下一个公共聊天室，比较顺利
    
## 部署记录

我的服务器使用 1Panel 管理，可以用使用 GitHub Action 实现后续自动部署。

做些准备工作，方便调用：

```bash
DOMAIN="learn-laravel-11-2024-03-13.xuchunyang.cn"
CONTAINER="1Panel-php8-ZaWZ"
CONTAINER_WORKDIR="/www/sites/${DOMAIN}/index"

DOCKER="sudo docker exec -it -w $CONTAINER_WORKDIR -u 1000:1000 $CONTAINER"
COMPOSER="$DOCKER composer"
ARTISAN="$DOCKER php artisan"
```

WebSocket + Docker 部署有难度，浏览器终于连上了，但是收不到 WebSocket 的通知，原因待调查。
