slicomments2disqus
==================

Exports comments from slicomments to disqus format

The current version exports published comments only. Esay to change but this would require more available memory on the server side. Do the export like this:

1. install the component
2. call url http://foo.bar/index.php?option=com_slicommentstodisqus&format=raw
3. copy the output and save it to a file. Remove emptry lines on top!
4. uninstall the component