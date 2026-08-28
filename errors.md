Functionality-breaking:

$categories is undefined in shop.php — the line that would set it is commented out (// $categories = $controller->getCategories();), and getCategories() doesn't exist anywhere in ProductController/ProductModel. The foreach ($categories as $category) loop will throw a PHP warning and the filter buttons never render.
The shop page's AJAX calls go nowhere — shop.php's JS calls ajax/filter.php and ajax/search.php for filtering/search, but there's no ajax/ folder anywhere in the project. Filtering and search are dead.
No product.php — product cards link to product.php?id=..., but that file doesn't exist.
Login/signup aren't wired up at all — both forms have action="#" with no PHP handler behind them. UserModel::getUserByEmail() exists but is never called from anywhere, and it also queries a users table that doesn't exist — the schema only has a customers table.
Broken product images — two separate mismatches: the DB stores filenames like denim_image.jfif / shirt.jpg, but the actual files on disk are denim_image.png / shirt.png. Separately, the code references Public/image/productsimages/ (lowercase "i") while the real folder is productsImages (capital "I") — this'll work on Windows/XAMPP but 404 on any case-sensitive Linux host.
Dead internal links — several pages link to static files that don't exist: signup.html/login.html (should be index.php?url=signup/login), and shop.html/cart.html in the homepage's product section.

Structural/HTML bugs:

Partials contain full documents — header.php, hero.php, and footer.php each have their own <!DOCTYPE html><html><head>…<body>…</body></html>. Since the pages that include them (home.php, about.php, shop.php) already have their own doctype/html/body, you end up with duplicated, nested <html>/<body> tags — and footer.php's </body></html> technically closes the page mid-include. Browsers recover from this, but it's invalid markup and should be pulled out.
login.php has a duplicate <body> tag (<body> immediately followed by another <body class="...">).

Code smells (don't break anything currently, but worth fixing):

class ProductModel extends DBCOnnection and class UserModel extends DBCOnnection — typo'd capital "O". This happens to still work only because PHP class names are case-insensitive; it'll bite you the moment you move to Composer/PSR-4 autoloading.
UserModel.php never require_onces DBConnection.php — it currently gets away with it only because index.php always loads that file first on every request.
DBConnection's constructor does return $this->con; — constructors can't return values to the caller, so this line is dead code.
ProductModel::getTopThreeProducts() returns the raw PDOStatement instead of fetchAll(), unlike every other method in the class. It happens to work in a foreach, but you can't count() it or check empty() on it reliably.
The header nav links to ?url=services, ?url=blog, ?url=contact, ?url=account, ?url=cart — none of these routes exist in index.php's switch statement, so they'll all hit your 404 handler.