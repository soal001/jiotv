pkg update
pkg upgrade -y
pkg install php-apache git -y
rm /data/data/com.termux/files/usr/etc/apache2/httpd.conf
wget https://raw.githubusercontent.com/soal001/jiotv/master/httpd.conf
mv httpd.conf /data/data/com.termux/files/usr/etc/apache2/
git clone https://github.com/soal001/jiotv
cp -r jiotv/* /data/data/com.termux/files/usr/share/apache2/default-site/htdocs && rm -rf jiotv/
rm /data/data/com.termux/files/usr/share/apache2/default-site/htdocs/http.conf /data/data/com.termux/files/usr/share/apache2/default-site/htdocs/android.sh /data/data/com.termux/files/usr/share/apache2/default-site/htdocs/jiotv.sh
apachectl start
