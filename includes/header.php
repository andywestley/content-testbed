<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $siteName = 'Content Testbed';
    $metaTitle = isset($pageTitle) ? htmlspecialchars($pageTitle) . ' | ' . $siteName : $siteName;
    $metaDesc = isset($pageDescription) ? htmlspecialchars($pageDescription) : 'A modular environment for testing content rules, readability heuristics, and accessibility.';
    $metaUrl = 'https://content-testbed.andrewwestley.co.uk' . htmlspecialchars($_SERVER['REQUEST_URI'] ?? '');
    $metaImage = isset($pageImage) ? htmlspecialchars($pageImage) : 'https://placehold.co/1200x630/4F46E5/ffffff?text=Content+Testbed';
    ?>
    <title><?= $metaTitle ?></title>
    <meta name="description" content="<?= $metaDesc ?>">
    
    <!-- OpenGraph -->
    <meta property="og:title" content="<?= $metaTitle ?>">
    <meta property="og:description" content="<?= $metaDesc ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $metaUrl ?>">
    <meta property="og:image" content="<?= $metaImage ?>">
    <meta property="og:site_name" content="<?= $siteName ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $metaTitle ?>">
    <meta name="twitter:description" content="<?= $metaDesc ?>">
    <meta name="twitter:image" content="<?= $metaImage ?>">

    <!-- Favicon & Web App Manifest -->
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#4F46E5">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/assets/css/style.css" rel="stylesheet">
</head>
<body>
    <header>
    <div class="disclaimer-banner">
        ⚠️ NOTICE: This is a non-functional testbed site. Any bad content, including poor readability, mild profanity, or non-inclusive language, is intentional for demonstration purposes.
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/index.php">Content Testbed</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="newsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            News
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="newsDropdown">
                            <li><a class="dropdown-item text-success" href="/news-good-1.php">Good News 1</a></li>
                            <li><a class="dropdown-item text-success" href="/news-good-2.php">Good News 2</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="/news-bad-1.php">Bad News 1</a></li>
                            <li><a class="dropdown-item text-danger" href="/news-bad-2.php">Bad News 2</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="productsDropdown">
                            <li><a class="dropdown-item text-success" href="/product-good-1.php">Good Product 1</a></li>
                            <li><a class="dropdown-item text-success" href="/product-good-2.php">Good Product 2</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="/product-bad-1.php">Bad Product 1</a></li>
                            <li><a class="dropdown-item text-danger" href="/product-bad-2.php">Bad Product 2</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Blogs
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="blogDropdown">
                            <li><a class="dropdown-item text-success" href="/blog-good-1.php">Good Blog 1</a></li>
                            <li><a class="dropdown-item text-success" href="/blog-good-2.php">Good Blog 2</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="/blog-bad-1.php">Bad Blog 1</a></li>
                            <li><a class="dropdown-item text-danger" href="/blog-bad-2.php">Bad Blog 2</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                            <li><a class="dropdown-item text-primary" href="/vision.php">Our Vision</a></li>
                            <li><a class="dropdown-item text-primary" href="/culture.php">Our Culture</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-secondary" href="/history.php">Our History</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </header>
    <main class="container">
