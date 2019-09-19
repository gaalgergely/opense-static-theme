@ECHO OFF
ECHO Start ...

ECHO Setup directories if needed ...
if not exist "compiled" mkdir compiled
cd compiled
if not exist "assets" mkdir assets
cd ..

ECHO Compiling index.html ...
php source/index.php > compiled/index.html

ECHO Compiling services.html ...
php source/services.php > compiled/services.html

ECHO Compiling about.html ...
php source/about.php > compiled/about.html

ECHO Compiling contact.html ...
php source/contact.php > compiled/contact.html

ECHO Compiling portfolio-1-col.html ...
php source/portfolio-1-col.php > compiled/portfolio-1-col.html

ECHO Compiling portfolio-2-col.html ...
php source/portfolio-2-col.php > compiled/portfolio-2-col.html

ECHO Compiling portfolio-3-col.html ...
php source/portfolio-3-col.php > compiled/portfolio-3-col.html

ECHO Compiling portfolio-4-col.html ...
php source/portfolio-4-col.php > compiled/portfolio-4-col.html

ECHO Compiling portfolio-single.html ...
php source/portfolio-single.php > compiled/portfolio-single.html

ECHO Compiling blog-home-1.html ...
php source/blog-home-1.php > compiled/blog-home-1.html

ECHO Compiling blog-home-2.html ...
php source/blog-home-2.php > compiled/blog-home-2.html

ECHO Compiling blog-post.html ...
php source/blog-single.php > compiled/blog-post.html

ECHO Compiling full-width.html ...
php source/full-width.php > compiled/full-width.html

ECHO Compiling sidebar.html ...
php source/sidebar.php > compiled/sidebar.html

ECHO Compiling faq.html ...
php source/faq.php > compiled/faq.html

ECHO Compiling 404.html ...
php source/404.php > compiled/404.html

ECHO Compiling pricing.html ...
php source/pricing.php > compiled/pricing.html

ECHO Finished ...

ECHO You can install the node libraries:
ECHO npm install

ECHO You can compile the assets:
ECHO npm run build

ECHO You can watch your changes:
ECHO npm run watch

pause