pkg update -y
pkg upgrade -y
pkg install php-apache git figlet -y
rm /data/data/com.termux/files/usr/etc/apache2/httpd.conf
wget https://raw.githubusercontent.com/soal001/jiotv/master/httpd.conf
mv httpd.conf /data/data/com.termux/files/usr/etc/apache2/

git clone https://github.com/soal001/jiotv
cp -r jiotv/* /data/data/com.termux/files/usr/share/apache2/default-site/htdocs && rm -rf jiotv/
rm /data/data/com.termux/files/usr/share/apache2/default-site/htdocs/httpd.conf /data/data/com.termux/files/usr/share/apache2/default-site/htdocs/android.sh /data/data/com.termux/files/usr/share/apache2/default-site/htdocs/jiotv.sh
mv /data/data/com.termux/files/usr/share/apache2/default-site/htdocs/update.sh ./

mkdir .termux/boot
mv /data/data/com.termux/files/usr/share/apache2/default-site/htdocs/auto_boot.sh ./.termux/boot/
apachectl start
termux-wake-lock
echo 'JIO TV' | figlet
echo 'PHP \n SERVER' | figlet
echo '\033[42m Server Installed Successfully.\n Go to the below Address \n to login and continue setup \033[0m'
echo '\033[32m '`ip route get 1.2.3.4 | awk '{print $9}'`':8080\n\033[0m'
