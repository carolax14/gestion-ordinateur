<?php require_once 'header.php'; ?>
<?php include '../includes/class_visiteur.php'; ?>

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
        <li class="breadcrumb-item active">Visiteurs - Liste</li>
    </ul>
</div>
<section class="tables">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4">Liste des Visiteurs</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form action="../includes/process/process_visiteur.php" method="POST">
                                <?php
                                $visiteur = new Visiteur();
                                if ($visiteur->getVisiteur()); ?>
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Adresse mail</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($visiteur->getVisiteur() as $row) { ?>
                                            <tr>
                                                <td class="text-uppercase"><?= $row['visiteur_nom']; ?></td>
                                                <td class="text-capitalize"><?= $row['visiteur_prenom']; ?></td>
                                                <td><?= $row['visiteur_mail']; ?></td>
                                                <td>
                                                    <a href="modal_visiteur.php?Modifier=<?= $row['visiteur_id']; ?>">
                                                        <i name="Modifier" class="fas fa-edit btn-edit"></i>
                                                    </a>
                                                    <a href="../includes/process/process_visiteur.php?Supprimer=<?= $row['visiteur_id']; ?>
                                            " onclick="return confirm('Voulez-vous supprimer cet utilisateur ?');">
                                                        <i name="Supprimer" class="fas fa-trash-alt btn-supp"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<?php require_once 'footer.php'; ?>