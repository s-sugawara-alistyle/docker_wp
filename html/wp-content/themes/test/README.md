こちらのリモートリポジトリは、Wordpressのテーマ開発をMAMPでするときに、テーマフォルダに入れるとすぐに環境が整います。<br>
(This remote repository is a quick environment to put in your theme folder when using MAMP for Wordpress theme development.)

・[MAMP](https://www.mamp.info/en/mamp/mac/)

ディレクトリ構成
<pre>
├── 404.php
├── archive.php
├── dist
│   ├── css
│   │   ├── style.css
│   │   └── swiper.min.css
│   ├── fonts
│   │   ├── noto-sans-jp-v42-latin_japanese-100.woff
│   │   ├── noto-sans-jp-v42-latin_japanese-100.woff2
│   │   ├── noto-sans-jp-v42-latin_japanese-300.woff
│   │   ├── noto-sans-jp-v42-latin_japanese-300.woff2
│   │   ├── noto-sans-jp-v42-latin_japanese-500.woff
│   │   ├── noto-sans-jp-v42-latin_japanese-500.woff2
│   │   ├── noto-sans-jp-v42-latin_japanese-700.woff
│   │   ├── noto-sans-jp-v42-latin_japanese-700.woff2
│   │   ├── noto-sans-jp-v42-latin_japanese-900.woff
│   │   ├── noto-sans-jp-v42-latin_japanese-900.woff2
│   │   ├── noto-sans-jp-v42-latin_japanese-regular.woff
│   │   ├── noto-sans-jp-v42-latin_japanese-regular.woff2
│   │   ├── noto-serif-jp-v21-latin_japanese-200.woff
│   │   ├── noto-serif-jp-v21-latin_japanese-200.woff2
│   │   ├── noto-serif-jp-v21-latin_japanese-300.woff
│   │   ├── noto-serif-jp-v21-latin_japanese-300.woff2
│   │   ├── noto-serif-jp-v21-latin_japanese-500.woff
│   │   ├── noto-serif-jp-v21-latin_japanese-500.woff2
│   │   ├── noto-serif-jp-v21-latin_japanese-600.woff
│   │   ├── noto-serif-jp-v21-latin_japanese-600.woff2
│   │   ├── noto-serif-jp-v21-latin_japanese-700.woff
│   │   ├── noto-serif-jp-v21-latin_japanese-700.woff2
│   │   ├── noto-serif-jp-v21-latin_japanese-900.woff
│   │   ├── noto-serif-jp-v21-latin_japanese-900.woff2
│   │   ├── noto-serif-jp-v21-latin_japanese-regular.woff
│   │   ├── noto-serif-jp-v21-latin_japanese-regular.woff2
│   │   ├── roboto-v30-latin-100.woff
│   │   ├── roboto-v30-latin-100.woff2
│   │   ├── roboto-v30-latin-100italic.woff
│   │   ├── roboto-v30-latin-100italic.woff2
│   │   ├── roboto-v30-latin-300.woff
│   │   ├── roboto-v30-latin-300.woff2
│   │   ├── roboto-v30-latin-300italic.woff
│   │   ├── roboto-v30-latin-300italic.woff2
│   │   ├── roboto-v30-latin-500.woff
│   │   ├── roboto-v30-latin-500.woff2
│   │   ├── roboto-v30-latin-500italic.woff
│   │   ├── roboto-v30-latin-500italic.woff2
│   │   ├── roboto-v30-latin-700.woff
│   │   ├── roboto-v30-latin-700.woff2
│   │   ├── roboto-v30-latin-700italic.woff
│   │   ├── roboto-v30-latin-700italic.woff2
│   │   ├── roboto-v30-latin-900.woff
│   │   ├── roboto-v30-latin-900.woff2
│   │   ├── roboto-v30-latin-900italic.woff
│   │   ├── roboto-v30-latin-900italic.woff2
│   │   ├── roboto-v30-latin-ext_latin-100.woff
│   │   ├── roboto-v30-latin-ext_latin-100.woff2
│   │   ├── roboto-v30-latin-ext_latin-100italic.woff
│   │   ├── roboto-v30-latin-ext_latin-100italic.woff2
│   │   ├── roboto-v30-latin-ext_latin-300.woff
│   │   ├── roboto-v30-latin-ext_latin-300.woff2
│   │   ├── roboto-v30-latin-ext_latin-300italic.woff
│   │   ├── roboto-v30-latin-ext_latin-300italic.woff2
│   │   ├── roboto-v30-latin-ext_latin-500.woff
│   │   ├── roboto-v30-latin-ext_latin-500.woff2
│   │   ├── roboto-v30-latin-ext_latin-500italic.woff
│   │   ├── roboto-v30-latin-ext_latin-500italic.woff2
│   │   ├── roboto-v30-latin-ext_latin-700.woff
│   │   ├── roboto-v30-latin-ext_latin-700.woff2
│   │   ├── roboto-v30-latin-ext_latin-700italic.woff
│   │   ├── roboto-v30-latin-ext_latin-700italic.woff2
│   │   ├── roboto-v30-latin-ext_latin-900.woff
│   │   ├── roboto-v30-latin-ext_latin-900.woff2
│   │   ├── roboto-v30-latin-ext_latin-900italic.woff
│   │   ├── roboto-v30-latin-ext_latin-900italic.woff2
│   │   ├── roboto-v30-latin-ext_latin-italic.woff
│   │   ├── roboto-v30-latin-ext_latin-italic.woff2
│   │   ├── roboto-v30-latin-ext_latin-regular.woff
│   │   ├── roboto-v30-latin-ext_latin-regular.woff2
│   │   ├── roboto-v30-latin-italic.woff
│   │   ├── roboto-v30-latin-italic.woff2
│   │   ├── roboto-v30-latin-regular.woff
│   │   └── roboto-v30-latin-regular.woff2
│   ├── js
│   │   └── lib
│   │       ├── jquery-3.6.0.min.js
│   │       └── swiper-bundle.min.js
│   └── svg
│       └── sprite.svg
├── footer.php
├── front-page.php
├── functions.php
├── header.php
├── images
│   ├── common
│   │   └── noimage.jpg
│   └── top
├── index.php
├── package.json
├── page-about.php
├── page.php
├── readme.md
├── single.php
├── src
│   ├── js
│   │   ├── index.js
│   │   └── swiper.js
│   └── sass
│       ├── base
│       │   ├── _font.scss
│       │   ├── _index.scss
│       │   └── _reset.scss
│       ├── component
│       │   ├── _index.scss
│       │   └── _parts.scss
│       ├── global
│       │   ├── _index.scss
│       │   ├── _mixin.scss
│       │   └── _variables.scss
│       ├── layout
│       │   ├── _footer.scss
│       │   ├── _header.scss
│       │   └── _index.scss
│       ├── pages
│       │   ├── _about.scss
│       │   ├── _contact.scss
│       │   ├── _index.scss
│       │   ├── _page.scss
│       │   └── _top.scss
│       └── style.scss
├── style.css
└── templates
</pre>

## npm package basis
npm init

npm install sass

"sass": "sass src/sass:dist/css/ --style=compressed --watch"

npm install postcss-cli autoprefixer -D

"postcss": "postcss dist/css/style.css --use autoprefixer --dir dist/css/ --watch"

"browserslist": [
  "last 2 versions",
  "> 1% in JP"
]
