<?php require_once 'header.php'; ?>
<?php include '../includes/class_visiteur.php'; ?>

<?php
if (isset($_GET['Modifier'])) {
    $visiteur = new Visiteur();
    $visiteur_id = $_GET['Modifier'];
    $row = $visiteur->getInfoUnVisiteur($visiteur_id);
    $visiteur_nom = $row['visiteur_nom'];
    $visiteur_prenom = $row['visiteur_prenom'];
    $visiteur_mail = $row['visiteur_mail'];
}
?>
<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">Visiteurs</h2>
    </div>
</header>
<!-- Breadcrumb-->
<div class="breadcrumb-holder container-fluid">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="home.php">Acceuil</a></li>
        <li class="breadcrumb-item active">Visiteurs - Modifier</li>
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
                        <h3 class="h4">Modifier un visiteur</h3>
                    </div>
                    <div class="card-body">
                        <p></p>
                        <form action="../includes/process/process_visiteur.php" method="POST">
                            <div class="form-group">
                                <label class="form-control-label">Nom</label>
                                <input type="hidden" name="id" value="<?php echo $visiteur_id; ?>" class="form-control text-uppercase">
                                <input type="text" name="nom" value="<?php echo $visiteur_nom; ?>" placeholder="Nom..." class="form-control text-uppercase">

                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Prénom</label>
                                <input type="text" name="prenom" value="<?php echo $visiteur_prenom; ?>" placeholder="Prénom..." class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Adresse mail</label>
                                <input type="email" name="mail" value="<?php echo $visiteur_mail; ?>" placeholder="Adresse mail..." class="form-control">
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