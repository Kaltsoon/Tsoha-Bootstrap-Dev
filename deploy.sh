# Set your username here
username="kalleilv"
# Set the name of your project folder here
project_folder="tsoha"

# Set the environment variables
bash config/environment.sh

# This script will combine the javascript files in your assets/js folder
bash build.sh

# This script will transfer the your files to server

echo "Transfering files to server..."

scp -r app -r config -r lib -r sql -r assets index.php $username@users.cs.helsinki.fi:htdocs/$project_folder

echo "Done! Your application is deployd to $username.users.cs.helsinki.fi/$project_folder"
