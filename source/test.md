---
extends: _layouts.main
section: body
type: article
title: 'How to create (add new) a MySQL user in command line'
subtitle: 'I should definitely know this one but I keep coming back to this quick post'
excerpt: "Question\nWhen you are setting up your MySQL you need to create new users. Using the command line you can do it easily.\nAnswer\nFirst create your database if it's not done yet.\_Then create your mysql user.\ncreate database mynewdb;\n\nWhat you need to replace:\n\n\nmynewdb : the name of..."
seo_title: 'How to create (add new) a MySQL user in command line'
seo_description: "First create your database if it's not done yet.\_Then create your mysql user with the following command."
has_comments: false
disqus_permalink: null
credits: null
slug: how-to-create-a-mysql-user-in-command-line
best: false
show_toc: false
published_at: '2012-05-06'
edited_at: '2012-12-06T22:00:00.000000Z'
created_at: '2012-12-07T19:24:56.000000Z'
---

## Question

When you are setting up your MySQL you need to create new users. Using the command line you can do it easily.

## Answer


First create your database if it's not done yet. Then create your mysql user.

```sql
create database mynewdb;
```

What you need to replace:

* **mynewdb** : the name of the database
* **some_table** : the name of the table
* **localhost** : the host of your database, in my case everything is on the same server
* **user1** : the name of your mysql user
* **@s3cur3PWD** : the password of your user

### A user who can access all tables in a given database

```sql
grant all privileges on mynewdb.* to 'user1'@'localhost' identified by "@s3cur3PWD";
```

### A user who can access all databases

```sql
grant all privileges on *.* to 'user1'@'localhost' identified by "@s3cur3PWD";
```

### A user who can access a given table in a given database

```sql
grant all privileges on mynewdb.some_table to 'user1'@'localhost' identified by "@s3cur3PWD";
```
