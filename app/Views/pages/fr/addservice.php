<?= $this->extend("layouts/app") ?>
<?= $this->section("content") ?>

<?= $this->include("partials/fr/dashboard_sidebar") ?>
<!-- dashboard content-->
<!-- dashboard content-->
<div class="col-md-9">
    <div class="dashboard-title   fl-wrap">
        <h3>Ajouter Service</h3>
    </div>
    <?= form_open_multipart("addservice") ?>
    <!-- profile-edit-container-->
    <div class="profile-edit-container fl-wrap block_box">
        <div class="custom-form">
            <label>Nom du service / produit<i class="fal fa-briefcase"></i></label>
            <input type="text" placeholder="Nom de votre business ou produit" value="<?= set_value("servname") ?>" name="servname" />
            <small class="text-red" style="color:red; font-weight:italic "><?= $validation['servname'] ?? null ?></small>

            <div class="row">
                <div class="col-md-12">
                    <label>Type / Categorie</label>
                    <div class="listsearch-input-item">
                        <select data-placeholder="Categories" class="chosen-select no-search-select" name="servcategorie">
                            <?php foreach ($allcategories as $item) : ?>
                                <option value="<?= $item->categoryId ?>" <?= set_select('servcategorie', $item->categoryId, false); ?>><?= $item->categoryName_fr ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <small class="text-red" style="color:red; font-weight:italic "><?= $validation['servcategorie'] ?? null ?></small>
                </div>
            </div>
        </div>
    </div>
    <!-- profile-edit-container end-->
    <div class="dashboard-title  dt-inbox fl-wrap">
        <h3>Adresse / Location</h3>
    </div>
    <!-- profile-edit-container-->
    <div class="profile-edit-container fl-wrap block_box">
        <div class="custom-form">
            <label>Ville / Location</label>
            <div class="listsearch-input-item">
                <select data-placeholder="City" class="chosen-select no-search-select" name="servcity">
                    <?php foreach ($cities as $item) : ?>
                        <option value="<?= $item->cityId ?>" <?= set_select('servcity', $item->cityId, false) ?>><?= $item->cityName_fr ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <small class="text-red" style="color:red; font-weight:italic "><?= $validation['servcity'] ?? null ?></small>
            <div class="row">
                <div class="col-sm-6">
                    <label>Addresse<i class="fal fa-map-marker"></i></label>
                    <input type="text" placeholder="Addresse de votre business" value="<?= set_value("servlocation") ?>" name="servlocation" />
                    <small class="text-red" style="color:red; font-weight:italic "><?= $validation['servlocation'] ?? null ?></small>
                </div>
                <div class="col-sm-6">
                    <label>Adresse Email <i class="fal fa-envolope"></i></label>
                    <input type="text" placeholder="example@domaine.com" value="<?= set_value("servemail") ?>" name="servemail" />
                    <small class="text-red" style="color:red; font-weight:italic "><?= $validation['servemail'] ?? null ?></small>
                </div>
                <div class="col-sm-6">
                    <label>Téléphone <i class="fal fa-phone"></i></label>
                    <input type="text" placeholder="+243 900000900" value="<?= set_value("servphone") ?>" name="servphone" />
                    <small class="text-red" style="color:red; font-weight:italic "><?= $validation['servphone'] ?? null ?></small>
                </div>
                <div class="col-sm-6">
                    <label> Votre site web (optionnel) <i class="far fa-globe"></i> </label>
                    <input type="text" placeholder="www.example.net" value="<?= set_value("servwebsite") ?>" name="servwebsite" />
                </div>
            </div>
        </div>
    </div>
    <!-- profile-edit-container end-->
    <div class="dashboard-title  dt-inbox fl-wrap">
        <h3>Média</h3>
    </div>
    <!-- profile-edit-container-->
    <div class="profile-edit-container fl-wrap block_box">
        <div class="custom-form">
            <div class="row">
                <!--col -->
                <div class="col-md-12">
                    <label> Image de couverture </label>
                    <div class="add-list-media-wrap">
                        <div class="add-list-media-wrap">
                            <div class="listsearch-input-item fl-wrap">
                                <div class="fuzone">
                                    <div class="fu-text">
                                        <span><i class="fal fa-images"></i> Click here or drop files to upload</span>
                                        <div class="photoUpload-files fl-wrap"></div>
                                    </div>
                                    <input type="file" name="servcoverimage" class="upload" accept=".jpg; .png; .webp;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <small class="text-red" style="color:red; font-weight:italic "><?= $validation['servcoverimage'] ?? null ?></small>
                </div>
                <button class="logout_btn color2-bg" type="submit">Soumettre <i class="fas fa-sign-out"></i></button>
            </div>
        </div>
    </div>
    </form>
</div>
<!-- dashboard content end-->
</section>
<!--  section  end-->
<div class="limit-box fl-wrap"></div>
</div>
<!--content end-->
</div>
<!-- wrapper end-->
<?= $this->endSection() ?>