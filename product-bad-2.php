<?php
$pageTitle = 'Bad Product 2';
include 'includes/header.php';
?>

<div class="row">
    <div class="col-12">
        <div class="bad-content-notice">
            <h4>Intended Content Violations:</h4>
            <p>Cliches ("think outside the box", "low-hanging fruit"), aggressive sales tone, non-inclusive language ("businessman").</p>
        </div>
    </div>
</div>

<div itemscope itemtype="https://schema.org/Product" class="row mt-2">
    <div class="col-md-6">
        <img itemprop="image" src="https://via.placeholder.com/600x400?text=Business+Software" alt="Software box" class="img-fluid rounded shadow-sm">
    </div>
    <div class="col-md-6">
        <h1 itemprop="name" class="display-5 fw-bold mb-3">Synergy Suite 5.0</h1>
        <div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
            <h2 class="h3 text-primary mb-4" itemprop="priceCurrency" content="USD">$<span itemprop="price" content="499.00">499.00</span></h2>
        </div>
        
        <div itemprop="description" class="fs-5 mb-4">
            <p>Attention every modern businessman! If you want to grab the low-hanging fruit in your industry, you need this software right now. Do not wait, buy it today before your competitors crush you!</p>
            <p>We built this suite to help you think outside the box and give 110% every single day. At the end of the day, it's a win-win situation for your entire enterprise.</p>
            <p>Push the envelope and take your synergies to the next level. This is the silver bullet your company has been waiting for!</p>
        </div>
        
        <button class="btn btn-danger btn-lg w-100 fw-bold">BUY IT RIGHT NOW!</button>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
