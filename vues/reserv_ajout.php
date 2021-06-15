<?php require_once 'header.php'; ?>
<?php include '../includes/class_reserv.php';
include '../includes/fct_listbox.php'; ?>

<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">Réservations</h2>
    </div>
</header>
<!-- Breadcrumb-->
<div class="breadcrumb-holder container-fluid">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="home.php">Acceuil</a></li>
        <li class="breadcrumb-item active">Réservations</li>
    </ul>
</div>
<div class="card-body text-center">
    <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Ajouter une réservation </button>
    <!-- Modal-->
    <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="exampleModalLabel" class="modal-title">Ajouter une réservation</h4>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form action="../includes/process/process_reserv.php" method="POST">
                        <div class="form-group">
                            <label class="form-control-label">Adresse mail</label>
                            <select id="mail" name="mail" class="form-control" required>
                                <option value="">Choisir l'adresse d'un visiteur...</option>
                                <?php
                                foreach ($result_visiteur as $row) { ?>
                                    <option value="<?= $row['visiteur_id']; ?>"><?= $row['visiteur_mail']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Ordinateur</label>
                            <select id="ordi" name="ordi" class="form-control" required>
                                <option value="">Choisir un ordinateur...</option>
                                <?php
                                foreach ($result_ordi as $row) { ?>
                                    <option value="<?= $row['ordi_id']; ?>"><?= $row['ordi_libelle']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Date</label>
                            <input type="date" name="date" min="2021-01-01" placeholder="Choisir une date..." class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Créneau Horaire</label>
                            <select id="creneau" name="creneau" class="form-control" required>
                                <option value="">Choisir un créneau horraire...</option>
                                <?php
                                foreach ($result_creneau as $row) { ?>
                                    <option value="<?= $row['creneau_id']; ?>"><?= $row['creneau_horraire']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Enregistrer" name="Ajouter" class="btn bg-green">
                            <input type="submit" value="Effacer" name="Effacer" class="btn btn-danger">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="tables">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4">Liste des Réservations</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form action="../includes/process/process_reserv.php" method="POST">
                                <?php
                                $reserv = new Reservation();
                                if ($reserv->getReserv()); ?>
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Créneau horaire</th>
                                            <th>Ordinateur</th>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Adresse mail</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($reserv->getReserv() as $row) { ?>
                                            <tr>
                                                <td><?= $row['date']; ?></td>
                                                <td><?= $row['creneau_horraire']; ?></td>
                                                <td><?= $row['ordi_libelle']; ?></td>
                                                <td class="text-uppercase"><?= $row['visiteur_nom']; ?></td>
                                                <td class="text-capitalize"><?= $row['visiteur_prenom']; ?></td>
                                                <td><?= $row['visiteur_mail']; ?></td>
                                                <td>
                                                    <a href="../includes/process/process_reserv.php?Supprimer=<?= $row['id']; ?>
                                            " onclick="return confirm('Voulez-vous annuler cette réservation ?');">
                                                        <i name="Supprimer" class="fas fa-window-close btn-supp"></i>
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