source config/environment.sh


# This script will transfer your files to server
echo "Transfering files to server..."

scp -r app -r config -r lib -r sql -r assets index.php $USERNAME@users.cs.helsinki.fi:htdocs/$PROJECT_FOLDER

echo "Done! Your application has been deployd to $USERNAME.users.cs.helsinki.fi/$PROJECT_FOLDER"
