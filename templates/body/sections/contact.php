<section id="contact" class="bg-light py-5">
    <div class="container">
        <div class="row">
            <h2><?= $contact->h2(); ?></h2>
            <h3><?= $contact->h3(); ?></h3>
        </div>
        <div class="row gy-4 mt-5">
            <div class="col-12 col-md-5">
                <img src="<?= $contact->imageUrl(); ?>" alt="Au café" width="100%">
            </div>
            <div class="col-12 offset-md-1 col-md-6">
                <!--------------------------------contact form start-->
                <?php include('contact/form.php') ?>
                <!---------------------------------------------contact form end-->
            </div>
        </div>
    </div>
</section>