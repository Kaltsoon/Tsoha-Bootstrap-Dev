source config/environment.sh

# This script will combine the javascript files in your assets/js folder
#bash build.sh

# This script will bootstrap your application
echo "Initializing..."

ssh $USERNAME@users.cs.helsinki.fi "
cd htdocs
mkdir $PROJECT_FOLDER
chmod -R a+rX $PROJECT_FOLDER
exit"

echo "Done!"

echo "Transfering files to server..."

scp -r app -r config -r lib -r vendor -r sql -r assets .htaccess index.php $USERNAME@users.cs.helsinki.fi:htdocs/$PROJECT_FOLDER

echo "Done! Your application is now ready at $USERNAME.users.cs.helsinki.fi/$PROJECT_FOLDER"
