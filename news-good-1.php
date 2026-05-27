<?php
$pageTitle = 'Good News 1';
include 'includes/header.php';
?>

<article itemscope itemtype="https://schema.org/NewsArticle" class="mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h1 itemprop="headline" class="mb-4">Local Community Opens New Park</h1>
            <div class="text-muted mb-4">
                By <span itemprop="author" itemscope itemtype="https://schema.org/Person"><span itemprop="name">Jane Doe</span></span> | 
                <time itemprop="datePublished" datetime="2026-05-27">May 27, 2026</time>
            </div>
            
            <div itemprop="articleBody" class="fs-5">
                <p>The city council opened a new public park downtown today. Mayor Smith cut the ribbon at noon. Hundreds of people attended the event.</p>
                <p>The park features a large playground, two dog areas, and a walking trail. Families brought picnics to celebrate the warm weather. Local bands played music all afternoon.</p>
                <p>"We worked hard to finish this project early," the mayor said. "Now, everyone can enjoy this green space."</p>
                <p>City workers planted fifty trees last month. They also installed benches and water fountains. The city hopes the park will bring the community together.</p>
            </div>
        </div>
    </div>
</article>

<?php include 'includes/footer.php'; ?>
