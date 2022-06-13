<?= $this->extend("layouts/app") ?>
<?= $this->section("content") ?>

<?= $this->include("partials/fr/dashboard_sidebar") ?>
<!-- dashboard content-->
<div class="col-md-9">
    <div class="dashboard-title fl-wrap">
        <h3>Votre Profile</h3>
    </div>
    <!-- profile-edit-container-->
    <div class="profile-edit-container fl-wrap block_box">
        <div class="custom-form">
            <?= form_open("profile") ?>
            <div class="row">
                <div class="col-sm-12">
                    <label>Nom complet <i class="fal fa-user"></i></label>
                    <input type="text" name="ufullname" placeholder="<?= $userdata->userFirstName ?>" value="<?= $userdata->userFirstName ?>" />
                    <small class="text-red" style="color:red; font-weight:italic "><?= $validation['ufullname'] ?? null ?></small>

                </div>

                <div class="col-sm-6">
                    <label>Email Address<i class="far fa-envelope"></i> </label>
                    <input type="text" name="uemail" placeholder="<?= ($userdata->userEmailAddress) ? $userdata->userEmailAddress : 'example@domain.com'  ?>" value="<?= $userdata->userEmailAddress ?>" />
                    <small class="text-red" style="color:red; font-weight:italic "><?= $validation['uemail'] ?? null ?></small>

                </div>
                <div class="col-sm-6">
                    <label>Téléphone<i class="far fa-phone"></i> </label>
                    <input type="text" name="uphone" placeholder="<?= $userdata->userPhone ?>" value="<?= $userdata->userPhone ?>" />
                    <small class="text-red" style="color:red; font-weight:italic "><?= $validation['uphone'] ?? null ?></small>
                </div>
                <div class="col-sm-12">
                    <label> Adresse <i class="fas fa-map-marker"></i> </label>
                    <input type="text" name="uadress" placeholder="<?= $userdata->userAdress ?>" value="<?= $userdata->userAdress ?>" />
                    <small class="text-red" style="color:red; font-weight:italic "><?= $validation['uadress'] ?? null ?></small>

                    <button class="btn color2-bg  float-btn" type="submit">Mettre à jour<i class="fal fa-save"></i></button>

                </div>
            </div>
            <?= form_close() ?>
            <!-- <label> Notes</label>
                            <textarea cols="40" rows="3" placeholder="About Me" style="margin-bottom:20px;"></textarea>
                            <div class="clearfix"></div>
                            <label>Change Avatar</label>
                            <div class="clearfix"></div>
                            <div class="listsearch-input-item fl-wrap">
                                <div class="fuzone">
                                    <form>
                                        <div class="fu-text">
                                            <span><i class="fal fa-images"></i> Click here or drop files to upload</span>
                                            <div class="photoUpload-files fl-wrap"></div>
                                        </div>
                                        <input type="file" class="upload" multiple>
                                    </form>
                                </div>
                            </div> -->
        </div>
    </div>
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