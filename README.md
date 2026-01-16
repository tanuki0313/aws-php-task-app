# AWS Task Manager

AWS（EC2/RDS）上で動作する、シンプルなPHP/HTML製タスク管理アプリです。


## 概要

インフラの構築からサーバーサイドの基本操作までを一貫して実装しました。


## 使用技術

- **Infrastructure**: AWS (VPC, EC2, RDS)
- **Backend**: PHP 8.4.13
- **Database**: MySQL 8.0.43 (Amazon RDS)
- **Web Server**: Apache 2.4.65

## 機能

- タスクの追加（INSERT）

- タスクの一覧表示（SELECT）

- タスクの削除（DELETE）


## こだわったポイント

- **DB設計**: データの整合性を保つため、各タスクに一意のID（主キー）を割り振り、正確な削除操作を実現しました。

- **セキュリティ**: PHPの `htmlspecialchars` を用いて、クロスサイトスクリプティング（XSS）対策を行っています。


## ネットワーク構成図

（ここにAWSの構成図の画像を貼ると最高です！）


## DB設計 (MySQL)

```sql

CREATE TABLE tasks (

    id INT AUTO_INCREMENT PRIMARY KEY,

    task_name VARCHAR(255) NOT NULL,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);
