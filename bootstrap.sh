# Set your username here
username="kalleilv"
# Set the name of your project folder here
project_folder="tsoha"

# This script will combine the javascript files in your assets/js folder
bash build.sh

# This script will bootstrap your application
echo "Initializing..."

ssh $username@users.cs.helsinki.fi "
cd htdocs
mkdir $project_folder
chmod -R a+rX $project_folder
exit"

echo "Done!"

echo "Transfering files to server..."

scp -r app -r config -r lib -r vendor -r sql -r assets .htaccess index.php $username@users.cs.helsinki.fi:htdocs/$project_folder

echo "Done! Your application is now ready at $username.users.cs.helsinki.fi/$project_folder"
