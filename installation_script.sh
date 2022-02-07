#!/bin/bash
echo "Installing "

username="yogesh"
password="yogesh123"
create_new_user="FALSE"
echo "installing curl "
sudo apt install curl 
echo "Installing Done" 
echo "Downloading Googgle chrome file using curl " 
wget https://dl.google.com/linux/direct/google-chrome-stable_current_amd64.deb 
echo "\n Installing Chrome " 
sudo apt install ./google-chrome-stable_current_amd64.deb 
echo "Installation done" 
echo "Updating System" 
sudo apt update 
echo "Updating Done "


echo "Intalling Nodejs"
curl -sL https://deb.nodesource.com/setup_16.x | sudo bash -
cat /etc/apt/sources.list.d/nodesource.list
deb https://deb.nodesource.com/node_16.x focal main
deb-src https://deb.nodesource.com/node_16.x focal main
sudo apt -y install nodejs
sudo apt install npm
echo "Done installing "
sudo apt update 

echo "Installing slack "
sudo snap install slack --classic
echo "Done installed slack "

echo "Installing Anydesk"
wget -qO - https://keys.anydesk.com/repos/DEB-GPG-KEY | sudo apt-key add -
echo "deb http://deb.anydesk.com/ all main" | sudo tee /etc/apt/sources.list.d/anydesk-stable.list
sudo apt update
sudo apt install anydesk	
echo "Done installing "


echo "Installing pycharme "
sudo apt update
sudo snap install pycharm-professional --classic
echo "Installed Successfully "



echo "Installing Vs Code "
sudo apt update
sudo snap install --classic code
echo "Done VS Code "



sudo sh -c 'echo "deb http://apt.postgresql.org/pub/repos/apt $(lsb_release -cs)-pgdg main" > /etc/apt/sources.list.d/pgdg.list'
wget --quiet -O - https://www.postgresql.org/media/keys/ACCC4CF8.asc | sudo apt-key add -
sudo apt-get update
sudo   apt-get install postgresql-12
sudo apt-get install postgresql-client-12
sudo apt-get instal postgresql-12
sudo apt-get install postgresql-contrib-9.x
sudo apt-get install libpq-dev
sudo apt-get install postgresql-server-dev-12
curl https://www.pgadmin.org/static/packages_pgadmin_org.pub | sudo apt-key add
sudo sh -c 'echo "deb https://ftp.postgresql.org/pub/pgadmin/pgadmin4/apt/$(lsb_release -cs) pgadmin4 main" > /etc/apt/sources.list.d/pgadmin4.list && apt update'
sudo apt-get install pgadmin4-desktop
echo "Done installing all the "


echo "Doing Setup for postgres"
if [ ${create_new_user} == "TRUE" ]
then
	psql postgres -c "CREATE USER ${username} WITH PASSWORD '${password}';"
	psql postgres -c "CREATE DATABASE test;"
	psql postgres -c "GRANT ALL PRIVILEGES ON DATABASE test to ${username};"
	psql postgres -c "ALTER USER ${username} PASSWORD '${password}';"
	psql postgres -c "ALTER USER ${username} WITH SUPERUSER;"
	psql postgres -c "ALTER USER ${username} WITH CREATEDB;"
	psql postgres -c "ALTER USER ${username} WITH CREATEROLE;"
	psql postgres -c "ALTER USER ${username} WITH Replication;"
	psql postgres -c "ALTER USER ${username} WITH BypassRLS;"
else
	echo "Skiping creating user"
	
echo "Updating Password for default user"
psql postgres -c "CREATE USER postgres WITH PASSWORD '${password}';"
sudo apt update
sudo apt upgrade
