#!/bin/bash
# Run this from the from inside the ftm-toolbox docker container in the project
# root directory to make sure all dependencies are met and to start the project clean.

# Remove everything (database remains intact) to truly start fresh.
# This line no longer removes all installed dependencies. Plugins and themes will remain in /app/lib
# rm -rf vendor/ node_modules/ app/core/ /composer.lock /yarn.lock -v &&
# Build/Rebuild
composer install &&
composer dumpautoload &&
# Copy the default wp-content directory
rm -rf app/core/wp-content/plugins/hello.php &&
rm -rf app/core/wp-content/plugins/akismet &&
cp -R app/core/wp-content/* app/lib/ &&
# Delete the default wp-content directory.
rm -rf app/core/wp-content &&
# Install node dependencies.
yarn &&
# Compile base JS & CSS
npm run dev
