<?php
$pageTitle = 'Bad Product 1';
include 'includes/header.php';
?>

<div class="row">
    <div class="col-12">
        <div class="bad-content-notice">
            <h4>Intended Content Violations:</h4>
            <p>Weasel words ("virtually", "basically"), intensifiers ("extremely", "very"), complex vocabulary ("utilize", "optimum"), missing ALT text on image.</p>
        </div>
    </div>
</div>

<div itemscope itemtype="https://schema.org/Product" class="row mt-2">
    <div class="col-md-6">
        <!-- Bad Practice: Missing ALT text -->
        <img itemprop="image" src="https://via.placeholder.com/600x400?text=Smart+Watch" alt="" class="img-fluid rounded shadow-sm">
    </div>
    <div class="col-md-6">
        <h1 itemprop="name" class="display-5 fw-bold mb-3">OmniTracker Pro</h1>
        <div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
            <h2 class="h3 text-primary mb-4" itemprop="priceCurrency" content="USD">$<span itemprop="price" content="299.99">299.99</span></h2>
        </div>
        
        <div itemprop="description" class="fs-5 mb-4">
            <p>You can basically utilize this extremely advanced smartwatch to monitor virtually all of your vital signs. It is actually very good for achieving optimum health metrics.</p>
            <p>The device facilitates seamless integration with your phone, providing a very robust notification system. Many experts agree it is arguably the most capable tracker currently available.</p>
            <p>It is generally considered to be quite durable, basically enduring very harsh environments.</p>
        </div>
        
        <button class="btn btn-primary btn-lg w-100">Add to Cart</button>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
