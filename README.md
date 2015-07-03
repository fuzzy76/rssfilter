# rssfilter
A small RSS category filtering proxy in PHP

Nearly all news sources has some posts I’m not interested in. I can’t believe no RSS readers has implemented good enough filters yet. But I anyway I wrote my own. :) I don’t think my server can handle too much usage, so I’m just giving you the code as is.

Install to a PHP5 server and use like this (fictional example):

```
http://yourserver.com/rssfilter/index.php?input=http%3A%2F%2Fvg.no%2Ffeed&categories%5B%5D=Sport&categories%5B%5D=Rampelys
```

The script returns a RSS feed with only entries in one of the chosen categories. It does no caching or header support, so it uses much more resources than necessary. That’s why I don’t tell where my personal installation is. :)
