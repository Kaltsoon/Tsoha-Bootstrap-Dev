echo "Combining javascript files..."

cat assets/js/app.js > assets/js/app.min.js

if [ "$(ls -A assets/js/controllers)" ]; then
  for i in assets/js/controllers/*; do
    cat $i >> assets/js/app.min.js
  done
fi

if [ "$(ls -A assets/js/services)" ]; then
  for i in assets/js/services/*; do
    cat $i >> assets/js/app.min.js
  done
fi

if [ "$(ls -A assets/js/directives)" ]; then
  for i in assets/js/directives/*; do
    cat $i >> assets/js/app.min.js
  done
fi

if [ "$(ls -A assets/js/utils)" ]; then
  for i in assets/js/utils/*; do
    cat $i >> assets/js/app.min.js
  done
fi

echo "Done!"
