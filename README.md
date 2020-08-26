

# Docker Traversy Modified PHP Mysql Framework v01


## Table of Contents

1. References
2. File / Folder Structure
3. App Setup
4. Adding a New page

## References

Based on Udemy Course, [Object Oriented PHP & MVC](https://www.udemy.com/course/object-oriented-php-mvc/) by [Brad Traversy](https://www.udemy.com/user/brad-traversy/)


## File / Folder Structure

--- TODO!!!

## App Setup

### Create env.php file

`> touch /app/helpers/env.php`

Contents of env.php file

```php
<?php
// development or production
define('ENVIRONMENT', 'development');
```

Edit /app/helpers/config.php

```php
<?php

  // Globals
  define('APPROOT', dirname(dirname(__FILE__)));
  define('SITENAME', 'rf-php-framework');
  define('LINE_BREAK', '<br />');

  // Settings
  switch (ENVIRONMENT) {
    case 'development':
      define('DB_HOST', 'localhost');
      define('DB_USER', 'username');
      define('DB_PASS', 'password');
      define('DB_NAME', 'domain_name_here');
      define('SITEURL', 'http://localhost:8080');
      define('SITEDOMAIN', 'http://localhost:8080');
      define('PUBLICASSETS', 'http://localhost:8080/public');
      define('HTTP_SECURE', 'http');
      define('CSS_VERSION', '20200101.01');
      define('JS_VERSION', '20200101.01');
      break;
    case 'production':
      define('DB_HOST', 'localhost');
      define('DB_USER', 'username');
      define('DB_PASS', 'password');
      define('DB_NAME', 'domain_name_here');
      define('SITEURL', '[FULL_URL_HERE]');
      define('SITEDOMAIN', '[FULL_URL_HERE]');
      define('PUBLICASSETS', '[FULL_URL_HERE]/public');
      define('HTTP_SECURE', 'https');
      define('CSS_VERSION', '20200101.01');
      define('JS_VERSION', '20200101.01');
      break;
    default:
      break;
  }

```


## Adding a New Page

Please take note: Naming is extremely case sensitive. This applies to file names and class names.


### 1. Register page. 

Note: Registered page name is the same naming scheme as the URL, replacing the forward slash "/" with a dash "-", when adding the registered page

Open: /app/helpers/registered-pages.json

Example 1:

* URL: /somecategory/
* Registered page: 'somecategory'

Example 2:
* URL: /somecategory/somepage/
* Registered page: 'somecategory-somepage'

Example 3:

* URL: /some-other-category/some-other-page/
* Registered page: 'some-other-category-some-other-page'

Add the URL path to: /app/helpers/registered-pages-paths.txt. (This is a friendly directly of all URL's on the site. Please keep up-to-date.)


### 2. Create Controller File

Note: Justing like registering a page, the controller filename is based on what you choose for the URL path. Replacing the forward slash "/" and capitalize standalone words.

Controllers are located in: /app/controllers

Example 1:

* URL: /somecategory/
* Controller Filename: Somecategory.php

Example 2:
* URL: /somecategory/somepage/
* Controller Filename: SomecategorySomepage.php

Example 3:

* URL: /some-other-category/some-other-page/
* Registered page: 'SomeOtherCategorySomeOtherPage'


### 3. Edit the Controller

Note: Naming the controller class should be exactly the name given to the controller filename. The view path should be exacly the name given to the registered page.

Example 1a:

* Controller Filename: SomecategorySomepage.php
* Controller Class: SomecategorySomepage

Example 1b:
* Registered Page: 'somecategory-somepage'
* View Path: 'pages/somecategory-somepage'

Example 2a:

* Controller Filename: SomeOtherCategorySomeOtherPage.php
* Controller Class: SomeOtherCategorySomeOtherPage

Example 2b:
* Registered Page: 'some-other-category-some-other-page'
* View Path: 'pages/some-other-category-some-other-page'


### 4. Create the View File

Note: The view filename should be exacly the name given to the registered page.

Views are located in: /app/views/

Example 1:
* Registered Page: 'somecategory-somepage'
* View Filename: somecategory-somepage.php

Example 2:
* Registered Page: 'some-other-category-some-other-page'
* View Filename: some-other-category-some-other-page.php





<!-- 

## Todos

1. Sitemap builder
2. Models
3. Section File/Folder Structure 

## Markdown Cheat Sheet

### Headers

# H1
## H2
### H3
#### H4
##### H5
###### H6

Alternatively, for H1 and H2, an underline-ish style:

Alt-H1
======

Alt-H2
------


### Lists

1. First ordered list item
2. Another item
⋅⋅* Unordered sub-list. 
1. Actual numbers don't matter, just that it's a number
⋅⋅1. Ordered sub-list
4. And another item.

⋅⋅⋅You can have properly indented paragraphs within list items. Notice the blank line above, and the leading spaces (at least one, but we'll use three here to also align the raw Markdown).

⋅⋅⋅To have a line break without a paragraph, you will need to use two trailing spaces.⋅⋅
⋅⋅⋅Note that this line is separate, but within the same paragraph.⋅⋅
⋅⋅⋅(This is contrary to the typical GFM line break behaviour, where trailing spaces are not required.)

* Unordered list can use asterisks
- Or minuses
+ Or pluses


### Links

[I'm an inline-style link](https://www.google.com)

[I'm an inline-style link with title](https://www.google.com "Google's Homepage")

[I'm a reference-style link][Arbitrary case-insensitive reference text]

[I'm a relative reference to a repository file](../blob/master/LICENSE)

[You can use numbers for reference-style link definitions][1]

Or leave it empty and use the [link text itself].

URLs and URLs in angle brackets will automatically get turned into links. 
http://www.example.com or <http://www.example.com> and sometimes 
example.com (but not on Github, for example).

Some text to show that the reference links can follow later.

[arbitrary case-insensitive reference text]: https://www.mozilla.org
[1]: http://slashdot.org
[link text itself]: http://www.reddit.com


### Images

Here's our logo (hover to see the title text):

Inline-style: 
![alt text](https://github.com/adam-p/markdown-here/raw/master/src/common/images/icon48.png "Logo Title Text 1")

Reference-style: 
![alt text][logo]

[logo]: https://github.com/adam-p/markdown-here/raw/master/src/common/images/icon48.png "Logo Title Text 2"


### Code and Syntax Highlighting

Inline `code` has `back-ticks around` it.

```javascript
var s = "JavaScript syntax highlighting";
alert(s);
```
 
```python
s = "Python syntax highlighting"
print s
```
 
```
No language indicated, so no syntax highlighting. 
But let's throw in a <b>tag</b>.
```

var s = "JavaScript syntax highlighting";
alert(s);

s = "Python syntax highlighting"
print s

No language indicated, so no syntax highlighting in Markdown Here (varies on Github). 
But let's throw in a <b>tag</b>.


### Tables

Colons can be used to align columns.

| Tables        | Are           | Cool  |
| ------------- |:-------------:| -----:|
| col 3 is      | right-aligned | $1600 |
| col 2 is      | centered      |   $12 |
| zebra stripes | are neat      |    $1 |

There must be at least 3 dashes separating each header cell.
The outer pipes (|) are optional, and you don't need to make the 
raw Markdown line up prettily. You can also use inline Markdown.

Markdown | Less | Pretty
--- | --- | ---
*Still* | `renders` | **nicely**
1 | 2 | 3


### Blockquotes

> Blockquotes are very handy in email to emulate reply text.
> This line is part of the same quote.

Quote break.

> This is a very long line that will still be quoted properly when it wraps. Oh boy let's keep writing to make sure this is long enough to actually wrap for everyone. Oh, you can *put* **Markdown** into a blockquote.


### Inline HTML

<dl>
  <dt>Definition list</dt>
  <dd>Is something people use sometimes.</dd>

  <dt>Markdown in HTML</dt>
  <dd>Does *not* work **very** well. Use HTML <em>tags</em>.</dd>
</dl>


### Horizontal Rule

Three or more...

---

Hyphens

***

Asterisks

___

Underscores


### Line Breaks

Here's a line for us to start with.

This line is separated from the one above by two newlines, so it will be a *separate paragraph*.

This line is also a separate paragraph, but...
This line is only separated by a single newline, so it's a separate line in the *same paragraph*.

### YouTube Videos

<a href="http://www.youtube.com/watch?feature=player_embedded&v=YOUTUBE_VIDEO_ID_HERE
" target="_blank"><img src="http://img.youtube.com/vi/YOUTUBE_VIDEO_ID_HERE/0.jpg" 
alt="IMAGE ALT TEXT HERE" width="240" height="180" border="10" /></a>

[![IMAGE ALT TEXT HERE](http://img.youtube.com/vi/YOUTUBE_VIDEO_ID_HERE/0.jpg)](http://www.youtube.com/watch?v=YOUTUBE_VIDEO_ID_HERE) -->