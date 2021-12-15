git clone https://github.com/soal001/jiotv
rm -rf /data/data/com.termux/files/usr/share/apache2/default-site/htdocs/
mkdir /data/data/com.termux/files/usr/share/apache2/default-site/htdocs/
cp -r jiotv/* /data/data/com.termux/files/usr/share/apache2/default-site/htdocs && rm -rf jiotv/
rm /data/data/com.termux/files/usr/share/apache2/default-site/htdocs/httpd.conf /data/data/com.termux/files/usr/share/apache2/default-site/htdocs/android.sh /data/data/com.termux/files/usr/share/apache2/default-site/htdocs/jiotv.sh
ip route get 1.2.3.4 | awk '{print $9}' > ipaddr.txt
echo ':8080' >> ipaddr.txt
apachectl start
clear
tr --delete '\n' < ipaddr.txt
