Documentation for Wright Framework
==================================

Version: 0.1.0

Release: November 2010


### 1. Introduction

##### What is Wright?

The Wright Framework is a major upgrade to our previous methods of
creating templates. The name is in honor of the famous architect, Frank
Lloyd Wright, because the framework is like a blueprint. It provides a
solid foundation to build from, and helps to keep the entire template
together while merging some unique features and tools. This is the end
result, which is a great tool integrated with our templates providing
many benefits.

##### Why did we make it?

We found that we repeated ourselves regularly by writing a lot of the
same code. Over time we developed some tools that helped reduce the code
that we had to rewrite, which has the major benefit of lowering the
number of bugs as well as making our development more efficient. Over
time we found our tools needed more work, and more importantly that they
needed to work together, in order to provide a better product as well as
more features. \

##### How does it work?

The framework is part of the template. In its most basic form, it
extends the default template capabilities of Joomla with some additional
features. A more advanced description is that the framework loads the
template before Joomla and applies several filters upon it to allow more
advanced customization from the administrator as well as to provide
support for things like css combining and caching.

##### What are the requirements?

The framework and our templates are designed for PHP5. The framework was
designed also to provide cross-platform capability with Joomla 1.5 and
1.6. That means the same template can be installed in either version,
and run without the need to modify anything. The framework takes care of
the differences between the versions.

### 2. Getting Started

##### Template structure

If you look at the template structure, it is almost the same as a
typical template. Inside you will see an additional folder called
'wright' which, of course, houses the framework. You should not attempt
to alter anything inside of the wright folder, as this will likely cause
problems with the template.

##### Comparison with regular templates

The fundamentals of the framework function the same. If you are familiar
with how to work with Joomla templates already, then there are only a
few things we've done to simplify or add additional functionality to the
template. The majority of the html is still managed in the template
itself, except for a few cases where it is autogenerated to accommodate
variables (such as number of modules to provide horizontal support).

##### Learning Joomla

If you are new to Joomla, then it is best to take some time to learn the
basics of how to manage your site. The first place to visit is
[http://docs.joomla.org](http://docs.joomla.org "http://docs.joomla.org").
Here you can follow some of the introductory documentation to get you
started. Joomlashack also has an extensive set of courses at the
Joomlashack University
([http://www.joomlashack.com/university](http://www.joomlashack.com/university "http://www.joomlashack.com/university")).
There you can learn using a more structured lesson plan as well as have
direct contact with the instructor during your learning subscription.
New content is added regularly. Beyond that, there are several books
available at major book retailers. Lastly, and often overlooked, are
[Joomla User Groups](http://community.joomla.org/user-groups.html "Joomla User Groups").
They are a great way to meet people and get more connected with Joomla quickly.

##### Learning HTML

HTML is the language of the web. It is a fairly basic, yet very powerful
language that holds the information in almost all web pages. There are
many resources online to learn about HTML, as well as many books or
video series. Often these books are tied to CSS learning as well. There
is a lot of poor information online about HTML as well, so check the
accuracy and up-to-dateness of your information. HTML4 has been the
workhorse since the 90's, but a new version called HTML5 is making its
appearance. Please note that no browser supports HTML5 completely. You
will also notice XHTML, which is similar and builds from HTML4.

##### Learning CSS

CSS is the language that gives HTML a facelift. HTML by itself only
contains the data; CSS turns that data into pretty layouts. Due to some
historical reasons, there are a lot of poor articles, tips, and tricks.
Just as with HTML, the history of the web provided a lot of hacks or
tips to solve problems over the years. Much of that data is still
online, so be sure to check for more recent articles and details.
Recommended method of learning CSS is in conjunction with HTML, using a
recent book. 

##### Learning Javascript

Javascript is the language that runs inside of your browser. Not to be
confused with Java (a compiled language with little in common with
Javascript), it can help you modify HTML, CSS, or do fancy actions on
the page. There are dozens of books about Javascript, and an unlimited
source of tutorials on the web. Joomla also bundles with MooTools
(Joomla 1.5 has version 1.1 (or 1.2 if the plugin is enabled), and
Joomla 1.6 has version 1.2). MooTools is a javascript framework that
gives you the ability to do more with less code. However, it takes some
significant investment in learning, and there are few books about it.
Much of the documentation on the Joomla docs wiki related to MooTools is
the best information out there.

##### Learning PHP

PHP is the programming language that Joomla is built upon. It is a very
popular and practical language, which is one of the easiest to learn.
That said, it can also be easy to learn the basics and accidentally
break more complex code. We recommend avoiding simple 'tweaking' to any
PHP code unless you are properly trained in the language. If you want to
learn, the best thing to do is to get a book. PHP5 is the current
standard, and PHP6 has an uncertain future. So if you choose to get a
book, realize PHP6 is not the standard, and publishers got ahead of
themselves. However, PHP6 books are likely to sync well with PHP 5.3+,
but on the other hand Joomla 1.5 has trouble running on 5.3. So in few
words you see its not as simple as reading some basic tutorials online
and changing code, so be prepared but don't be overwhelmed. Reading a
lot of documentation on the Joomla documentation wiki will also shed
light into PHP tips and tricks, especially how they relate to Joomla.
Joomla 1.5 is somewhat of a legacy codebase. It works still on PHP4, but
PHP4 has not been supported by PHP since end of 2007. Many servers still
use PHP4, and that is the reason for the support. However Joomla 2.5 and
beyond will require PHP 5.2 or greater.

### 3. Making Customizations

##### Ground rules for customization

Normally when you purchase a template you expect to change anything
anywhere in the template. While you still have this right, once you
modify the core template and a bug is found you have to install the
update without overwriting your changes. This is a big pain, and we
don't want you to update and lose changes. So please read the details
below to learn easy ways to make changes without touching the template
itself. This will enable you to update the template if there is a need
without any pain.

##### Customizing HTML without altering the template

This is the most common thing people do, and we have designed our
templates for you to be able to edit your own template freely. If you
look at the template directory, you will see template.php. This is the
file that is loaded and handles the HTML output. Rather than making
changes directly in this file, you can copy it and rename it to
custom.php. If you include custom.php in your template directory, it
will be used instead of template.php. This will prevent your changes
from getting overridden.

##### Customizing CSS without altering the template

Inside of the css folder, you will see a few css files. Any file that
starts with style-\*\*\*.css is one of the template styles. These are
automatically loaded based on the theme you select. You may see files
that are related to a browser like ie7.css, which are for those specific
browsers only. Lastly, you will see css files that start with a number
and underscore such as 1\_template.css. Any css file with a number and
underscore is automatically loaded by the template. The number prefix
determines the order it is loaded in, with lower numbers first. Create a
new css file and name it custom.css. This will load all css files with
1-3 prefixed first, then your file. Since CSS takes the last defined
rule, it is best to make your file load last. Add any changes you need
to make to this file, since you can override any CSS settings by
declaring them here. All you have to do is save the file to your
template's /css directory, and it will get loaded automatically.

##### Wright Tags

Inside of our templates you won't see any \<jdoc:include ../\> tags. We
have replaced them with \<w:.../\> tags. The main reason is we are
cutting out a lot of repetitive code, as well as providing a way to make
our templates work in multiple versions of Joomla without changing the
template itself (only by editing the framework). This is a quick
explanation of the tags, and what they do. 

-   \<w:content /\> - This manages the basic code output for the content
    area, which includes the abovecontent and belowcontent module
    positions.
-   \<w:debug /\> - This just outputs the basic debugger information if
    enabled in your installation.
-   \<w:footer /\> - This manages the generic footer content we use, and
    handles rebranding.
-   \<w:head /\> - This manages the Joomla header information.
-   \<w:logo /\> - This manages the logo display row.
-   \<w:module /\> - This manages any module position, but has several
    output settings.
-   \<w:nav /\> - This manages a menu module position.

If at any time you don't like the way that the wright tag handles
something, you can replace it with a default Joomla equivalent. We only
ask that you avoid removing our branding information unless you have the
rights to remove it.

##### Adding custom PHP

We think it is bad practice to put a lot of PHP code into your template
directly. It makes it hard to read. That is why you can use the
functions.php file to write any PHP code you need. It will be loaded
before the template, so any variables will be available in the template.
For example, if you want to add some code to check what menu item the
current page is in order to provide some unique functionality, you can
put the PHP logic in the functions.php file and save a boolean variable
to use in the template.

### 5. License Information

The Wright framework and template that it's shipped with are licensed under the GNU GPLv3([http://www.gnu.org/licenses/gpl.html/](http://www.gnu.org/licenses/gpl.html/ "http://www.gnu.org/licenses/gpl.html/"))


### 6. Feedback and Suggestions

Thank you for using Wright. We want to make sure we are providing
a good product, so if you have problems, comments, or ideas, please feel free to 
post in the Wright Forum([https://help.joomlashack.com/categories/20059413-wright-joomla-template-framework/](https://help.joomlashack.com/categories/20059413-wright-joomla-template-framework/ "https://help.joomlashack.com/categories/20059413-wright-joomla-template-framework/")) 