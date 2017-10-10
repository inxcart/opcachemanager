#!/usr/bin/env bash
CWD_BASENAME=${PWD##*/}

rm vendor/ -rf
composer install --no-dev
composer -o dump-autoload


FILES+=("logo.gif")
FILES+=("logo.png")
FILES+=("CONTRIBUTORS.md")
FILES+=("index.php")
FILES+=("${CWD_BASENAME}.php")
FILES+=("README.md")
FILES+=("translations/**")
FILES+=("views/**")

MODULE_VERSION="$(sed -ne "s/\\\$this->version *= *['\"]\([^'\"]*\)['\"] *;.*/\1/p" ${CWD_BASENAME}.php)"
MODULE_VERSION=${MODULE_VERSION//[[:space:]]}
ZIP_FILE="${CWD_BASENAME}/${CWD_BASENAME}-v${MODULE_VERSION}.zip"

echo "Going to zip ${CWD_BASENAME} version ${MODULE_VERSION}"

cd ..
for E in "${FILES[@]}"; do
  find ${CWD_BASENAME}/${E}  -type f -exec zip -9 ${ZIP_FILE} {} \;
done