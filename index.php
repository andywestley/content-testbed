<?php
$pageTitle = 'Dashboard';
include 'includes/header.php';
?>

<div class="row mb-5 text-center">
    <div class="col-12">
        <h1 class="display-4 fw-bold mb-3">Content Scanner Testbed</h1>
        <p class="lead text-muted">A modular environment for testing content rules, readability heuristics, and accessibility.</p>
    </div>
</div>

<div class="row g-4">
    <!-- News Section -->
    <div class="col-md-4">
        <div class="card h-100">
            <div class="card-body">
                <h3 class="card-title h4 mb-3">News Articles</h3>
                <p class="card-text text-muted">Examples of long-form news journalism. Tests for clarity, voice, and reading level.</p>
                <div class="d-grid gap-2">
                    <a href="/news-good-1.php" class="btn btn-outline-success">Good Example 1 (Clear)</a>
                    <a href="/news-good-2.php" class="btn btn-outline-success">Good Example 2 (Direct)</a>
                    <a href="/news-bad-1.php" class="btn btn-outline-danger mt-2">Bad Example 1 (Complex)</a>
                    <a href="/news-bad-2.php" class="btn btn-outline-danger">Bad Example 2 (Passive)</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Products Section -->
    <div class="col-md-4">
        <div class="card h-100">
            <div class="card-body">
                <h3 class="card-title h4 mb-3">Product Pages</h3>
                <p class="card-text text-muted">E-commerce descriptions. Tests for weasel words, intensifiers, and cliches.</p>
                <div class="d-grid gap-2">
                    <a href="/product-good-1.php" class="btn btn-outline-success">Good Example 1 (Engaging)</a>
                    <a href="/product-good-2.php" class="btn btn-outline-success">Good Example 2 (Inclusive)</a>
                    <a href="/product-bad-1.php" class="btn btn-outline-danger mt-2">Bad Example 1 (Weasel Words)</a>
                    <a href="/product-bad-2.php" class="btn btn-outline-danger">Bad Example 2 (Aggressive/Cliches)</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Blogs Section -->
    <div class="col-md-4">
        <div class="card h-100">
            <div class="card-body">
                <h3 class="card-title h4 mb-3">Blog Posts</h3>
                <p class="card-text text-muted">Informal blog content. Tests for profanity, language mismatch, and inclusivity.</p>
                <div class="d-grid gap-2">
                    <a href="/blog-good-1.php" class="btn btn-outline-success">Good Example 1 (Approachable)</a>
                    <a href="/blog-good-2.php" class="btn btn-outline-success">Good Example 2 (Structured)</a>
                    <a href="/blog-bad-1.php" class="btn btn-outline-danger mt-2">Bad Example 1 (Profane/Non-inclusive)</a>
                    <a href="/blog-bad-2.php" class="btn btn-outline-danger">Bad Example 2 (Mismatch/Overuse)</a>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <div class="col-md-4">
        <div class="card h-100">
            <div class="card-body">
                <h3 class="card-title h4 mb-3">About Us Pages</h3>
                <p class="card-text text-muted">Corporate messaging. Tests for core keyword resonance and synonym expansion.</p>
                <div class="d-grid gap-2">
                    <a href="/vision.php" class="btn btn-outline-primary">Our Vision (Core Keywords)</a>
                    <a href="/culture.php" class="btn btn-outline-primary">Our Culture (Synonyms)</a>
                    <a href="/history.php" class="btn btn-outline-secondary mt-2">Our History (Zero Resonance)</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
