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
- タスクの削除（DELETE）
- タスクの一覧表示（SELECT）


## 工夫・学習したポイント
- **セキュリティの基礎知識**: GitHub公開にあたり、接続情報（エンドポイントやパスワード）を環境変数や伏せ字に置き換える「機密情報の管理」を意識しました。
- **効率的な開発プロセス**: AI（Gemini）を技術パートナーとして活用し、プロンプトを通じてエラー解決やコードのリファクタリングを効率的に進める手法を実践しました。
- **インフラの可視化**: 単に動かすだけでなく、`php -v` や `httpd -v` を用いて、使用しているミドルウェアの正確なバージョン（PHP 8.4.13 / Apache 2.4.65）を把握し、ドキュメント化しました。
- **セキュリティ対策**: PHPファイルで `htmlspecialchars` を使用し、WXSS（クロスサイトスクリプティング）対策を実装しています。


## ネットワーク構成図

<img width="591" height="311" alt="簡易タスクアプリ構成図" src="https://github.com/user-attachments/assets/634c015e-6416-44dc-b62a-21cfa81e07b3" />



## DB設計 (MySQL)

```sql

CREATE TABLE tasks (

    id INT AUTO_INCREMENT PRIMARY KEY,

    task_name VARCHAR(255) NOT NULL

);

## 動作デモ

<img width="377" height="347" alt="image" src="https://github.com/user-attachments/assets/9f014563-2bbb-41a6-ada4-048e58d31f02" />

- タスクの追加・一覧表示・削除の基本機能を実装しています。
- ユーザー入力値は `htmlspecialchars` でエスケープ処理を行い、安全に表示しています。
