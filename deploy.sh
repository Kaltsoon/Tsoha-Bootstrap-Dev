# Where am I?
DIR=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )

source $DIR/config/environment.sh

# This script will transfer your files to server
echo "Transfering files to server..."

rsync -r $DIR/app $DIR/config $DIR/lib $DIR/sql $DIR/assets $USERNAME@users.cs.helsinki.fi:htdocs/$PROJECT_FOLDER

echo "Done! Your application has been deployd to $USERNAME.users.cs.helsinki.fi/$PROJECT_FOLDER"