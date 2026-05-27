<?php
$pageTitle = 'Good Product 2';
include 'includes/header.php';
?>

<div itemscope itemtype="https://schema.org/Product" class="row mt-4">
    <div class="col-md-6">
        <img itemprop="image" src="https://via.placeholder.com/600x400?text=Ergonomic+Chair" alt="An ergonomic office chair with lumbar support" class="img-fluid rounded shadow-sm">
    </div>
    <div class="col-md-6">
        <h1 itemprop="name" class="display-5 fw-bold mb-3">ErgoFit Desk Chair</h1>
        <div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
            <h2 class="h3 text-primary mb-4" itemprop="priceCurrency" content="USD">$<span itemprop="price" content="249.50">249.50</span></h2>
            <link itemprop="availability" href="https://schema.org/InStock" />
        </div>
        
        <div itemprop="description" class="fs-5 mb-4">
            <p>Support your back and improve your posture with the ErgoFit chair. We designed this chair to fit people of all heights and body types comfortably.</p>
            <p>Adjust the seat height, armrests, and tilt tension to find your perfect position. The breathable mesh back keeps you cool during long work hours.</p>
            <ul>
                <li>Adjustable lumbar support</li>
                <li>Smooth-rolling casters</li>
                <li>Easy assembly in under 15 minutes</li>
            </ul>
        </div>
        
        <button class="btn btn-primary btn-lg w-100">Add to Cart</button>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
