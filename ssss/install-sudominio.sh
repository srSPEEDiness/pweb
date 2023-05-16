#!/bin/sh
cd /var/www
sudo mkdir renovar
sudo chown -R root:www-data renovar
cd /etc/apache2/sites-available
wget https://raw.githubusercontent.com/conexaoscript/renovar/main/renovar.conf
chmod 777 renovar.conf
sudo a2ensite renovar.conf
sudo service apache2 restart	
echo " \e[0;31mInstalado com Sucesso \e[0m"
