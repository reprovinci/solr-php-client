# Apache Solr PHP client
[![Build Status](https://travis-ci.org/reprovinci/solr-php-client.png)](https://travis-ci.org/reprovinci/solr-php-client)

A PHP library for indexing and searching documents within an [Apache Solr](http://lucene.apache.org/solr/)
installation.

This client library was originally hosted on Google Code: http://groups.google.com/group/php-solr-client  
Before that, it was hosted in Solr's issue tracker: https://issues.apache.org/jira/browse/SOLR-341

## What is Apache Solr?
> Solr is an open source enterprise search server based on the Lucene Java search library, with XML/HTTP
  and JSON APIs, hit highlighting, faceted search, caching, replication, a web administration interface
  and many more features. It runs in a Java servlet container such as Tomcat.
> For more information about Solr, please see the [Solr Web Page](http://lucene.apache.org/solr/). The
  project's [Wiki](http://wiki.apache.org/solr/) is the de facto starting point for information on how
  to install and configure Solr for your individual needs.

## Features
 * Quering, deleting, optimizing.
 * Support for both Solr 3 and Solr 4 through compatibility layers.
 * Support for soft commit with Solr 4.

## Installation

### Composer (PHP 5 >= 5.3.0)
 * [Getting started](http://getcomposer.org/doc/00-intro.md) with Composer
 * `reprovinci/solr-php-client` on [Packagist](http://packagist.org/packages/reprovinci/solr-php-client)

Just `require` `reprovinci/solr-php-client`:

```json
{
  "require": {
    "reprovinci/solr-php-client": "1.0.x"
  }
}
```

## Testing
The code is automatically tested by [Travis](travis-ci.org/reprovinci/solr-php-client) after each push.
Travis currently reports the following build status:
[![Build Status](https://travis-ci.org/reprovinci/solr-php-client.png)](https://travis-ci.org/reprovinci/solr-php-client).

If you want to test the code yourself, follow the following instructions:

### Composer (PHP 5 >= 5.3.0)
Just install dev dependencies and run PHPUnit:

```sh
composer install --dev
bin/phpunit tests
```

## Further Information
Please see [Frequently Asked Questions](http://code.google.com/p/solr-php-client/wiki/FAQ)

Or, if you have usage questions, try posting to the
[USER DISCUSSION GROUP](http://groups.google.com/group/php-solr-client).

## Disclaimer
This PHP library is not part of the Apache Solr project, nor is it maintained by the Apache Software Foundation.
All linked Apache Solr documentation or logos remain the sole property of the Apache Solr project, its authors,
and the Apache Software Foundation.