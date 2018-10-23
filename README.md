## 简介

为 Yii2 封装的一个用户登录历史记录添加和展示模块

### 特性

- 通过 `afterLogin` 事件记录每次用户登录.

### 适用环境

- PHP 5.6 及以上版本
- Yii2.0.7 及以上版本
- MySQL 5.6 及以上版本


## 使用方法

### 1.安装

```
#composer require buddysoft/yii2-history
```

### 2.导入数据表

```
#cd project_root
#./yii migrate --migrationPath=@buddysoft/history/migrations
```

### 3.配置管理页面模块

修改 backend/config/main.php，在 modules 配置中增加 login 模块的定义：

```
'modules' => [
    'history' => [
        'class' => 'buddysoft\history\Module',
    ],
],
```

经过以上配置，就能在浏览中访问配置界面了:

>http://localhost/login/login/index

跟 Yii2-admin 配合使用时，记得将 login/login/* 访问权限添加给管理员用户。

### 4.注册 afterLogin 事件

```

```
