@echo off

setlocal EnableDelayedExpansion

for /F %%a in ('findstr "<version>" slicommentstodisqus.xml') do set versionStr="%%a"
set version=%versionStr:<version>=%
set version=%version:</version>=%
set version=%version:.=_%
set zipfilename=com_slicommentstodisqus_%version%.zip

del ../%zipfilename%
zip -r ../%zipfilename% * -i "site/*" "slicommentstodisqus.xml" "index.html" "LICENSE"