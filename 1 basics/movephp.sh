#!/bin/bash

# first arg is the php file name that will be moved
FILENAME="$1"

# converto to unix
dos2unix $FILENAME
# change permissions
chmod +r $FILENAME
chmod -x $FILENAME
# then move it
cp -v $FILENAME ~/www/html/php-default/

