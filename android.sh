apt update
apt upgrade
apt install php-apache git
cd /data/data/com.termux/files/usr/etc/apache2/
rm httpd.conf
wget https://github.com/soal001/jiotv/blob/main/httpd.conf
cd /data/data/com.termux/files/usr/share/apache2/default-site/htdocs
git clone https://github.com/soal001/jiotv
cp -r jiotv/* ./ && rm -rf jiotv/
apachectl start
