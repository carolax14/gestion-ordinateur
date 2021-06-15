<?php require_once 'header.php'; ?>
<?php include '../includes/class_ordi.php'; ?>

<?php
if (isset($_GET['Modifier'])) {
    $ordi = new Ordinateur();
    $ordi_id = $_GET['Modifier'];
    $row = $ordi->getInfoUnOrdi($ordi_id);
    $ordi_libelle = $row['ordi_libelle'];
}
?>
<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">Ordinateurs</h2>
    </div>
</header>
<!-- Breadcrumb-->
<div class="breadcrumb-holder container-fluid">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="home.php">Acceuil</a></li>
        <li class="breadcrumb-item active">Ordinateurs - Modifier</li>
    </ul>
</div>
<!-- Forms Section-->
<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <!-- Basic Form-->
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4">Modifier un ordinateur</h3>
                    </div>
                    <div class="card-body">
                        <p></p>
                        <form action="../includes/process/process_ordi.php" method="POST">
                            <div class="form-group">
                                <label class="form-control-label">Libelle</label>
                                <input type="hidden" name="id" value="<?php echo $ordi_id; ?>" class="form-control text-uppercase">
                                <input type="text" name="libelle" value="<?php echo $ordi_libelle; ?>" placeholder="Libelle..." class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Modifier" name="Modifier" class="btn btn-primary">
                                <input type="submit" value="Annuler" name="Annuler" class="btn btn-danger">
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<?php require_once 'footer.php'; ?>