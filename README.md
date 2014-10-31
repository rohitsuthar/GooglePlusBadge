GooglePlusBadge
==========

Yii extension for Google plus badge with custom attributes like - show tag line, theme, cover photo, layout etc.

It's simple and less code extension but work great.


Requirements
============

Tested with Yii 1.1.14


Installation
============

- Download the latest release package
- Unpack it in /protected/extensions/ folder


Usage
=====

Paste the code into your main.php page or also you can use this code as per your requirement on any page.

~~~
$this->widget('application.extensions.GooglePlusBadge.GooglePlusBadge', array(
        'gbadge' => array(
            'url'=>'https://plus.google.com/114389194992381809226/',
            'width'=>'300',
            'theme'=>'light',
            'layout'=>'portrait',
            'show_tagline'=>'true',
            'show_coverphoto'=>'false',
          )
  ));
~~~


Yii Extension
=============

http://www.yiiframework.com/extension/google-plus-badge/



Usual parameters to be adjusted
===============================

- url: Your google plus page link (url: http://plus.google.com/gplus_page_id)
- width: Badge box width (in digit: **300**)
- theme: Badge box layout background (theme: **light**, dark)
- layout: Badge box layout (layout: **portrait**, landscape)
- tagline: Display page tag line (show_faces: **true**, false)
- coverphoto: Show background cover photo (show_border: **true**, false)
