source config/environment.sh

# This script will bootstrap your application
echo "Initializing..."

ssh $USERNAME@users.cs.helsinki.fi "
chmod -R a+X $HOME $HOME/htdocs
cd htdocs
touch favicon.ico
mkdir $PROJECT_FOLDER
exit"

echo "Done!"

echo "Transfering files to server..."

scp -r app config lib vendor sql assets .htaccess index.php $USERNAME@users.cs.helsinki.fi:htdocs/$PROJECT_FOLDER

echo "Done! Your application is now ready at $USERNAME.users.cs.helsinki.fi/$PROJECT_FOLDER"
