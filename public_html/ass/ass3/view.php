<?php
require_once 'Product.php';
require_once 'dbconfig.inc.php';

$pdo = getPDOConnection();

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$stmt = $pdo->prepare("
    SELECT product_id, product_name, category, description, price, rating, image_name, quantity
    FROM products WHERE product_id = :id
");
$stmt->execute([':id' => $id]);
$productData = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Details - LEVON</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include_once "header.php"; ?>


<?php include_once "nav.php"; ?>

<main>
    <section>
        <?php
        if ($productData) {
            $product = new Product(
                $productData['product_id'],
                $productData['product_name'],
                $productData['category'],
                $productData['description'],
                $productData['price'],
                $productData['rating'],
                $productData['image_name'],
                $productData['quantity']
            );
            echo $product->displayProductPage(); // Display product details
        } else {
            echo "
            <article>
                <h1>Invalid Product ID</h1>
                <p>The product with ID <strong>$id</strong> could not be found.</p>
            </article>
            ";
        }
        ?>
    </section>
</main>

<hr>

<?php include_once "footer.php"; ?>
</body>
</html>
