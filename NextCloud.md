# Instructions

## Setup Nextcloud

https://docs.nextcloud.com/server/14/developer_manual/general/devenv.html

```bash
apt-get install apache2 mariadb-server libapache2-mod-php7.2
apt-get install php7.2-gd php7.2-json php7.2-mysql php7.2-curl php7.2-mbstring
apt-get install php7.2-intl php-imagick php7.2-xml php7.2-zip
```

```bash
git clone https://github.com/nextcloud/server.git /var/www/html/nextcloud
cd /var/www/html/nextcloud
git submodule update --init
```

```bash
cd /var/www/html/nextcloud
mkdir data
mkdir config
```

```bash
cd /var/www/html/nextcloud
sudo chown -R www-data:www-data config data apps
sudo chmod o-rw /var/www/html/nextcloud
```

`sudo /etc/init.d/apache2 restart`

## MariaDB

`Access denied for user 'root'@'localhost'`
https://stackoverflow.com/questions/41645309/mysql-error-access-denied-for-user-rootlocalhost

```bash
Open & Edit /etc/my.cnf
Add skip-grant-tables under [mysqld]
Restart Mysql
You should be able to login to mysql now using the below command mysql -u root -p
Run mysql> flush privileges;
Set new password by ALTER USER 'root'@'localhost' IDENTIFIED BY 'NewPassword';
Go back to /etc/my.cnf and remove/comment skip-grant-tables
Restart Mysql
Now you will be able to login with the new password mysql -u root -p
```

https://superuser.com/questions/603026/mysql-how-to-fix-access-denied-for-user-rootlocalhost

```bash
sudo mysql -u root
use mysql;
[mysql] update user set plugin='' where User='root';
[mysql] flush privileges;
```
