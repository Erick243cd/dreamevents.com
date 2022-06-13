<?= $this->extend("layouts/app") ?>
<?= $this->section("content") ?>

<?= $this->include("partials/fr/dashboard_sidebar") ?>
<!-- dashboard content-->
<div class="col-md-9">
    <div class="dashboard-title   fl-wrap">
        <h3>Vos Services</h3>
    </div>
    <!-- dashboard-list-box-->
    <div class="dashboard-list-box  fl-wrap">
        <?php foreach ($myservices as $item) : ?>
            <!-- dashboard-list -->
            <div class="dashboard-list fl-wrap">
                <div class="dashboard-message">
                    <div class="booking-list-contr">
                        <a href="#" class="color-bg tolt" data-microtip-position="left" data-tooltip="Edit"><i class="fal fa-edit"></i></a>
                        <a href="#" class="red-bg tolt" data-microtip-position="left" data-tooltip="Delete"><i class="fal fa-trash"></i></a>
                    </div>
                    <div class="dashboard-message-text">
                        <img src="<?= site_url("public/assets/images/services/covers/$item->serviceCoverImage") ?>" alt="<?= $item->serviceName_en ?>">
                        <h4><a href="<?= site_url("services/$item->serviceSlug") ?>"><?= $item->serviceName_en ?></a></h4>
                        <div class="geodir-category-location clearfix"><a href="#"> <?= $item->serviceLocation ?></a></div>
                    </div>
                </div>
            </div>
            <!-- dashboard-list end-->
        <?php endforeach ?>

    </div>
    <!-- dashboard-list-box end
    <div class="pagination">
        <a href="#" class="prevposts-link"><i class="fas fa-caret-left"></i><span>Prev</span></a>
        <a href="#">1</a>
        <a href="#" class="current-page">2</a>
        <a href="#">3</a>
        <a href="#">...</a>
        <a href="#">7</a>
        <a href="#" class="nextposts-link"><span>Next</span><i class="fas fa-caret-right"></i></a>
    </div> -->
</div>
<!-- dashboard content end-->
</div>
</section>
<!--  section  end-->
<div class="limit-box fl-wrap"></div>
</div>
<!--content end-->
</div>
<!-- wrapper end-->
<?= $this->endSection() ?>