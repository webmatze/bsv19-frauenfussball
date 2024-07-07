#!/bin/bash

# Define the name of the zip file
THEME_NAME="bsv19-frauenfussball"
ZIP_FILE="${THEME_NAME}.zip"

# Create the zip archive, excluding .git files and directories and using .gitignore
zip -r "${ZIP_FILE}" . -x "*.git*" -x "*/.git/*" -x@.gitignore

echo "Created ${ZIP_FILE} successfully."